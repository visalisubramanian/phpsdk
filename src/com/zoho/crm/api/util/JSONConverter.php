<?php
namespace com\zoho\crm\api\util;

use com\zoho\api\exception\SDKException;
use com\zoho\crm\api\Initializer;
use com\zoho\crm\api\logger\SDKLogger;

/**
 * This class processes the API response object to the POJO object and POJO object to a JSON object.
 */
class JSONConverter extends Converter
{

    private $_uniqueValuesMap = array();

    public function __construct($commonAPIHandler)
    {
        parent::__construct($commonAPIHandler);
    }

    public function formRequest($requestObject, $pack, $instanceNumber)
    {
        $classJsonDetails = Initializer::$jsonDetails[$pack];
        
        $reflector = new \ReflectionClass($requestObject);
        
        $request = array();
        
        if (array_key_exists(Constants::INTERFACE_KEY, $classJsonDetails) && $classJsonDetails[Constants::INTERFACE_KEY] == true)
        {
            $classes = $classJsonDetails[Constants::CLASSES];
        
            $requestObjectClassName = get_class($requestObject);
            
            foreach ($classes as $class_name)
            {
                if ($class_name == $requestObjectClassName)
                {
                    $classJsonDetails = Initializer::$jsonDetails[$class_name];
                    
                    break;
                }
            }
        }
        
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
                throw new SDKException(Constants::EXCEPTION_IS_KEY_MODIFIED, null, null, $ex);
            }

            // check required
            if ($value == null && array_key_exists(Constants::REQUIRED, $memberJsonDetails) && (bool) $memberJsonDetails[Constants::REQUIRED])
            {
                throw new SDKException(Constants::MANDATORY_VALUE_MISSING_ERROR, Constants::MANDATORY_KEY_MISSING_ERROR . $memberName);
            }
            
            $reflector->getMethod(Constants::SET_KEY_MODIFIED)->invoke($requestObject, 0, $memberName);
            
            $field = $reflector->getProperty($memberName);
            
            $field->setAccessible(true);
            
            $fieldValue = $field->getValue($requestObject);
            
            if ($value != null && self::valueChecker(get_class($requestObject), $memberName, $memberJsonDetails, $fieldValue, $this->_uniqueValuesMap, $instanceNumber))
            {
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
                        $keyValue = DataTypeConverter::postConvert($fieldValue, $type);
                    }
                    
                    $request[$keyName] = $keyValue;
                }
            }
        }
        
        if ($pack == Constants::RECORD_NAMESPACE)
        {
            $recordJsonDetails = array();

            $recordFieldDetailsPath = self::getRecordJSONFilePath();
            
            $recordJsonDetails = json_decode(file_get_contents($recordFieldDetailsPath), true)[$this->commonAPIHandler->getModuleAPIName()];
            
            $field = $reflector->getProperty(Constants::KEY_VALUES);
            
            $field->setAccessible(true);
            
            $keyValues = $field->getValue($requestObject);
            
            foreach ($recordJsonDetails as $keyName => $keyJsonDetails)
            {
                if (array_key_exists($keyName, $keyValues))
                {
                    $keyValue = null;
                    
                    if (array_key_exists(Constants::STRUCTURE_NAME, $keyJsonDetails))
                    {
                        $keyValue = $this->formRequest($keyValues[$keyName], $keyJsonDetails[Constants::STRUCTURE_NAME], 1);
                    } 
                    else
                    {
                        $keyValue = $this->redirectorForObjectToJSON($keyValues[$keyName]);
                    }
                    
                    $request[$keyName] = $keyValue;
                }
            }
        }
        
        return $request;
    }

    public function appendToRequest(&$requestBase, $requestObject)
    {
        $requestBase[CURLOPT_POSTFIELDS] = json_encode($requestObject);
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
                if (gettype($key) == Constants::STRING_KEY) 
                {
                    $type = Constants::MAP;
                }
                
                break;
            }
            
            if ($type == Constants::MAP)
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

    public function getWrappedResponse($response, $pack)
    {
        list ($headers, $content) = explode("\r\n\r\n", $response, 2);
        
        $responseObject = json_decode($content, true);
        
        if ($responseObject == NULL && $content != null)
        {
            list ($headers, $content) = explode("\r\n\r\n", $content, 2);
            
            $responseObject = json_decode($content, true);
        }
        
        if($responseObject == null)
        {
            return null;
        }
        
        return $this->getResponse($responseObject, $pack);
    }

    public function getResponse($response, $pack)
    {
        $recordJsonDetails = Initializer::$jsonDetails[$pack];
        
        if (array_key_exists(Constants::INTERFACE_KEY, $recordJsonDetails) && $recordJsonDetails[Constants::INTERFACE_KEY] == true)
        {
            $classes = $recordJsonDetails[Constants::CLASSES];
        
            $instance = $this->findMatch($classes, $response);
        } 
        else 
        {
            $instance = new $pack();
        
            foreach ($recordJsonDetails as $memberName => $memberJsonDetails) 
            {
                $keyName = $memberJsonDetails[Constants::NAME];
            
                if (array_key_exists($keyName, $response) && $response[$keyName] !== null) 
                {
            
                    $keyData = $response[$keyName];
                    
                    $reflector = new \ReflectionClass($instance);
                    
                    $field = $reflector->getProperty($memberName);
                    
                    $field->setAccessible(true);
            
                    $type = $memberJsonDetails[Constants::TYPE];
            
                    $instanceValue = null;
            
                    if ($type == Constants::LIST) 
                    {
                        $instanceValue = array();
                        
                        $instanceValue = $this->getCollectionsData($keyData, $memberJsonDetails);
                    } 
                    else if ($type == Constants::MAP) 
                    {
                        $instanceValue = array();

                        $instanceValue = $this->getMapData($keyData, $memberJsonDetails);
                    } 
                    else if (array_key_exists(Constants::STRUCTURE_NAME, $memberJsonDetails)) 
                    {
                        $instanceValue = $this->getResponse($keyData, $memberJsonDetails[Constants::STRUCTURE_NAME]);
                    } 
                    else 
                    {
                        $instanceValue = DataTypeConverter::preConvert($keyData, $type);
                    }
                    
                    $field->setValue($instance, $instanceValue);
                }
            }
            
            if ($pack == Constants::RECORD_NAMESPACE)
            {
                $moduleJsonDetails = array();
                
                if($this->commonAPIHandler->getModuleAPIName() != null)
                {
                    $recordFieldDetailsPath = self::getRecordJSONFilePath();

                    $moduleJsonDetails = json_decode(file_get_contents($recordFieldDetailsPath), true)[$this->commonAPIHandler->getModuleAPIName()];
         
                }

                $field = $reflector->getProperty(Constants::KEY_VALUES);
                
                $field->setAccessible(true);
                
                $instanceValue = null;
                
                if(count($moduleJsonDetails) > 0)
                {
                    foreach ($moduleJsonDetails as $keyName => $keyJsonDetails)
                    {
                        $fieldName = $this->buildName($keyName);

                        if(!array_key_exists($fieldName, $recordJsonDetails))
                        {
                            if (array_key_exists($keyName, $response)) 
                            {
                                $keyValue = null;
                            
                                if (array_key_exists(Constants::STRUCTURE_NAME, $keyJsonDetails)) 
                                {
                                    $keyValue = $this->getResponse($response[$keyName], $keyJsonDetails[Constants::STRUCTURE_NAME]);
                                }
                                else 
                                {
                                    $keyValue = $this->redirectorForJSONToObject($response[$keyName]);
                                }

                                $instanceValue[$keyName] = $keyValue;
                            }
                        }
                    }
                }
                else
                {
                    foreach ($response as $jsonKeyName => $keyJsonDetails)
                    {
                        $keyName = $this->buildName($jsonKeyName);

                        if(!array_key_exists($keyName, $recordJsonDetails))
                        {
                            $instanceValue[$jsonKeyName] = $response[$jsonKeyName];
                        }
                    }
                }
                
                $field->setValue($instance, $instanceValue);
            }
        }
        return $instance;
    }
    
    public function getMapData($keyData, $memberJsonDetails)
    {
        $mapInstance = array();
        
        $response = $keyData;
        
        if ($memberJsonDetails == null)
        {
            foreach ($response as $key => $response)
            {
                $mapInstance[$key] = $response;
            }
        }
        else
        {
            $keysDetail = $memberJsonDetails[Constants::KEYS];
            
            foreach ($keysDetail as $keyDetail)
            {
                $keyName = $keyDetail[Constants::NAME];
                
                $keyValue = null;
                
                if (array_key_exists($keyName, $response) && $response[$keyName] != null)
                {
                    if (array_key_exists(Constants::STRUCTURE_NAME, $keyDetail))
                    {
                        $keyValue = $this->getResponse($response[$keyName], $keyDetail[Constants::STRUCTURE_NAME]);
                        
                        $mapInstance[$keyName] = $keyValue;
                    }
                    else
                    {
                        $keyValue = $response[$keyName];
                        
                        $mapInstance[$keyName] = $this->redirectorForJSONToObject($keyValue);
                    }
                }
            }
        }
        
        return $mapInstance;
    }
    
    public function getCollectionsData($keyData, $memberJsonDetails)
    {
        $values = array();
        
        $responses = $keyData;
        
        if ($memberJsonDetails == null)
        {
            foreach ($responses as $response)
            {
                array_push($values, $this->redirectorForJSONToObject($response));
            }
        }
        else
        {
            if (array_key_exists(Constants::STRUCTURE_NAME, $memberJsonDetails))
            {
                $pack = $memberJsonDetails[Constants::STRUCTURE_NAME];
                
                foreach ($responses as $response)
                {
                    array_push($values, $this->getResponse($response, $pack));
                }
            }
            else
            {
                foreach ($responses as $response)
                {
                    array_push($values, $this->redirectorForJSONToObject($response));
                }
            }
        }
        
        return $values;
    }
    
    public function redirectorForJSONToObject($keyData)
    {
        $type = gettype($keyData);
        
        if ($type == Constants::ARRAY_KEY)
        {
            foreach (array_keys($keyData) as $key)
            {
                if (gettype($key) == Constants::STRING_KEY)
                {
                    $type = Constants::MAP;
                }
                
                break;
            }
            
            if ($type == Constants::MAP)
            {
                return $this->getMapData($keyData, null);
            }
            else
            {
                return $this->getCollectionsData($keyData, null);
            }
        }
        else
        {
            return $keyData;
        }
    }

    public function findMatch($classes, $responseJson)
    {
        $pack = "";
        
        $ratio = 0;
        
        foreach ($classes as $className)
        {
            $matchRatio = $this->findRatio($className, $responseJson);
            
            if ($matchRatio == 1.0)
            {
                $pack = $className;
                
                $ratio = 1;
                
                break;
            }
            else if ($matchRatio > $ratio)
            {
                $pack = $className;
                
                $ratio = $matchRatio;
            }
        }
        
        return $this->getResponse($responseJson, $pack);
    }

    public function findRatio($className, $responseJson)
    {
        $classJsonDetails = array();
        
        $classJsonDetails = Initializer::$jsonDetails[$className];
        
        $totalPoints = sizeof(array_keys($classJsonDetails));
        
        $matches = 0;
        
        if ($totalPoints == 0)
        {
            return 0;
        }
        else
        {
            foreach ($classJsonDetails as $memberName => $memberJsonDetails)
            {
                $memberJsonDetails = $classJsonDetails[$memberName];
                
                $keyName = $memberJsonDetails[Constants::NAME];
                
                if (array_key_exists($keyName, $responseJson) && $responseJson[$keyName] != null)
                {
                    $keyData = $responseJson[$keyName];
                    
                    $type = gettype($keyData);
                    
                    if ($type == Constants::ARRAY_KEY)
                    {
                        foreach ($keyData as $key => $value)
                        {
                            if (gettype($key) == Constants::STRING_KEY)
                            {
                                $type = Constants::MAP;
                            }
                            else
                            {
                                $type = Constants::LIST;
                            }
                            
                            break;
                        }
                    }
                    
                    if ($type == strtolower($memberJsonDetails[Constants::TYPE]))
                    {
                        if (array_key_exists(Constants::VALUES, $memberJsonDetails))
                        {
                            foreach ($memberJsonDetails[Constants::VALUES] as $value)
                            {
                                if ($value == $keyData)
                                {
                                    $matches ++;
                                    
                                    break;
                                }
                            }
                        }
                        else
                        {
                            $matches ++;
                        }
                    }
                }
            }
        }
        return $matches / $totalPoints;
    }

    public function buildName($memberName)
	{
		$name = explode("_", $memberName);
		
		$sdkName = lcfirst($name[0]);
		
		for ($nameIndex = 1; $nameIndex < count($name); $nameIndex++)
		{
            $firstLetterUppercase = ucfirst($name[$nameIndex]);
            			
			$sdkName = $sdkName . $firstLetterUppercase;
		}

		return $sdkName;
	}
}