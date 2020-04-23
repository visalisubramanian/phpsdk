<?php
namespace com\zoho\crm\api\util;

use com\zoho\api\exception\SDKException;
use com\zoho\crm\api\Initializer;
use com\zoho\crm\api\logger\SDKLogger;

/**
 * This class is to process the upload file and stream.
 */
class FormDataConverter extends Converter
{

    public function __construct($commonAPIHandler)
    {
        parent::__construct($commonAPIHandler);
    }

    public function formRequest($requestObject, $namespace, $instanceNumber)
    {
        $classJsonDetails = Initializer::$jsonDetails[$namespace];
        
        $reflector = new \ReflectionClass($requestObject);
        
        $request = array();
        
        foreach ($classJsonDetails as $memberName => $memberJsonDetails)
        {
            $value = null;
            
            if ((array_key_exists(Constants::READ_ONLY, $memberJsonDetails) && ($memberJsonDetails[Constants::READ_ONLY])) || ! array_key_exists(Constants::NAME, $memberJsonDetails))
            {
                continue;
            }
            
            try
            {
                $value = $reflector->getMethod(Constants::IS_KEY_MODIFIED)->invoke($requestObject, $memberJsonDetails[Constants::NAME]);
            }
            catch (\Exception $ex)
            {
                SDKLogger::info(Constants::EXCEPTION_IS_KEY_MODIFIED . " : " . $ex);
            }

            // check required
            if ($value == null && array_key_exists(Constants::REQUIRED, $memberJsonDetails) && (bool) $memberJsonDetails[Constants::REQUIRED])
            {
                throw new SDKException(Constants::MANDATORY_VALUE_MISSING_ERROR, Constants::MANDATORY_KEY_MISSING_ERROR . $memberName);
            }
            
            $field = $reflector->getProperty($memberName);
            
            $field->setAccessible(true);
            
            $fieldValue = $field->getValue($requestObject);
            
            if ($value != null)
            {
                try
                {
                    $reflector->getMethod(Constants::SET_KEY_MODIFIED)->invoke($requestObject, 0, $memberName);
                }
                catch (\Exception $ex)
                {
                    SDKLogger::info(Constants::EXCEPTION_SET_KEY_MODIFIED . " : " . $ex);
                }
                
                if ($fieldValue != null)
                {
                    $keyName = $memberJsonDetails[Constants::NAME];
                    
                    $keyValue = null;
                    
                    $type = $memberJsonDetails[Constants::TYPE];
                    
                    if ($type == Constants::LIST)
                    {
                        $keyValue = $this->setJSONArray($fieldValue, $memberJsonDetails);
                    }
                    else if ($type == Constants::MAP)
                    {
                        $keyValue = $this->setJSONObject($fieldValue, $memberJsonDetails);
                    }
                    else if (array_key_exists(Constants::STRUCTURE_NAME, $memberJsonDetails))
                    {
                        $keyValue = $this->formRequest($fieldValue, $memberJsonDetails[Constants::STRUCTURE_NAME], 1);
                    }
                    else
                    {
                        $keyValue = $fieldValue;
                    }
                    
                    $request[$keyName]=$keyValue;
                }
            }
        }
        
        return $request;
    }

    
    public function appendToRequest(&$requestBase, $requestBody)
    {
        if(is_array($requestBody))
        {
            foreach ($requestBody as $key=>$value )
            {
                $fileName = $value->getName();
                
                $fileData = $value->getStream();
                
                $date = new \DateTime();
                
                $current_time_long= $date->getTimestamp();
                
                $lineEnd = "\r\n";
                
                $hypen = "--";
                
                $contentDisp = "Content-Disposition: form-data; name=\"".$key."\";filename=\"".$fileName."\"".$lineEnd.$lineEnd;
                
                $header = ['ENCTYPE: multipart/form-data','Content-Type:multipart/form-data;boundary='.(string)$current_time_long];
                
                $data = utf8_encode($lineEnd);
                
                $boundaryStart = utf8_encode($hypen.(string)$current_time_long.$lineEnd) ;
                
                $data = $data.$boundaryStart;
                
                $data = $data.utf8_encode($contentDisp);
                
                $data = $data.$fileData.utf8_encode($lineEnd);
                
                $boundaryend = $hypen.(string)$current_time_long.$hypen.$lineEnd.$lineEnd;
                
                $data = $data.utf8_encode($boundaryend);
                
                $requestBase[CURLOPT_HTTPHEADER] = $header;
                
                $requestBase[CURLOPT_POSTFIELDS]= $data;
            }
        }
    }
    
    public function setJSONObject($fieldValue, $memberJsonDetails)
    {
        $jsonObject = array();
        
        if ($memberJsonDetails == null)
        {
            foreach ($fieldValue as $key => $value)
            {
                $jsonObject[$key] = $this->redirectorForObjectToJSON($value);
            }
        }
        else
        {
            $keysDetail = $memberJsonDetails[Constants::KEYS];
            
            foreach ($keysDetail as $keyDetail)
            {
                $keyName = $keyDetail[Constants::NAME];
                
                $type = $keyDetail[Constants::TYPE];
                
                $keyValue = null;
                
                if (array_key_exists($keyName, $fieldValue) && $fieldValue[$keyName] != null)
                {
                    if (array_key_exists(Constants::STRUCTURE_NAME, $keyDetail))
                    {
                        $keyValue = $this->formRequest($fieldValue[$keyName], $keyDetail[Constants::STRUCTURE_NAME], 1);
                    }
                    else
                    {
                        $keyValue = $this->redirectorForObjectToJSON($fieldValue[$keyName]);
                    }
                    
                    $varType = gettype($keyValue);
                    
                    if (in_array($varType, Constants::PRIMITIVE_TYPES))
                    {
                        $test = strcasecmp($varType, $type);
                        
                        if ($test)
                        {
                            throw new SDKException(Constants::DATATYPE_VALIDATE, $keyName . " Expected datatype {$type}");
                        }
                    }

                    $jsonObject[$keyName] = $keyValue;
                }
            }
        }
        return $jsonObject;
    }

    public function setJSONArray($fieldValue, $memberJsonDetails)
    {
        $jsonArray = array();
        
        if ($memberJsonDetails == null)
        {
            foreach ($fieldValue as $request)
            {
                $jsonArray[] = $this->redirectorForObjectToJSON($request);
            }
        }
        else
        {
            if (array_key_exists(Constants::STRUCTURE_NAME, $memberJsonDetails))
            {
                $instanceCount = 0;
                
                $pack = $memberJsonDetails[Constants::STRUCTURE_NAME];
                
                foreach ($fieldValue as $request)
                {
                    $jsonArray[] = $this->formRequest($request, $pack, ++ $instanceCount);
                }
            }
            else
            {
                foreach ($fieldValue as $request)
                {
                    $jsonArray[] = $this->redirectorForObjectToJSON($request);
                }
            }
        }
        
        return $jsonArray;
    }

    public function redirectorForObjectToJSON($request)
    {
        $type = gettype($request);
        
        if ($type == Constants::ARRAY_KEY)
        {
            foreach (array_keys($request) as $key)
            {
                if (gettype($key) == strtolower(Constants::STRING_KEY))
                {
                    $type = strtolower(Constants::MAP);
                }
                
                break;
            }
            
            if ($type == strtolower(Constants::MAP))
            {
                return $this->setJSONObject($request, null);
            }
            else
            {
                return $this->setJSONArray($request, null);
            }
        }
        else 
        {
            return $request;
        }
    }

    public function getWrappedResponse($responseObject, $namespace)
    {
        return NULL;
    }

    public function getResponse($responseJson, $namespace)
    {
        return NULL;
    }
}