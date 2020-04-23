<?php
namespace com\zoho\crm\api\util;

use com\zoho\api\exception\SDKException;
use com\zoho\crm\api\logger\SDKLogger;
use com\zoho\crm\api\Initializer;

/**
 * This abstract class is to construct API request and response.
 */
abstract class Converter
{
    protected $commonAPIHandler;

    /**
     * Creates a Converter class instance with the CommonAPIHandler class instance.
     * @param CommonAPIHandler $commonAPIHandler A CommonAPIHandler class instance.
     */
    public function __construct($commonAPIHandler)
    {
       $this->commonAPIHandler=$commonAPIHandler;
    }
    
    /**
     * This abstract method is to process the API response. 
     * @param object $response A object containing the API response contents or response. 
     * @param string $pack A string containing the expected method return type.
     * @return object A object representing the POJO class instance.
     */
    public abstract function getResponse($response, $pack);
    
    /**
     * This abstract method is to construct the API request.
     * @param object $responseObject A object containing the POJO class instance.
     * @param string $pack A string containing the expected method return type.
     * @param integer $instanceNumber An integer containing the POJO class instance list number.
     * @return object A object representing the API request body object.
     */
    public abstract function formRequest($responseObject, $pack, $instanceNumber);
    
    /**
     * This abstract method is to construct the API request body.
     * @param object $requestBase A curl instance.
     * @param object $requestObject A object containing the API request body object.
     */
    public abstract function appendToRequest(&$requestBase, $requestObject);
    
    /**
     * This abstract method is to process the API response. 
     * @param object $response A object containing the HttpResponse class instance.
     * @param $pack $pack A string containing the expected method return type.
     */
    public abstract function getWrappedResponse($response, $pack);

    /**
     * This method is to validate if the input values satisfy the constraints for the respective fields.
     * @param string $className A string containing the class name.
     * @param string $memberName A string containing the member name.
     * @param array $keyDetails A array containing the key JSON details.
     * @param object $value A object containing the key value.
     * @param array $uniqueValuesMap A array containing the construct objects.
     * @param integer $instanceNumber An integer containing the POJO class instance list number.
     * @throws \com\zoho\api\exception\SDKException if a problem occurs.
     * @return boolean A boolean representing the key value is expected pattern, unique, length, and values.
     */
    public function valueChecker($className, $memberName, $keyDetails, $value, $uniqueValuesMap, $instanceNumber)
	{
		$detailsJO = array();
        
		$name = $keyDetails[Constants::NAME];
		
        $type  = $keyDetails[Constants::TYPE];
        
        $varType = gettype($value);
        
		$test = strcasecmp($varType, $type);
		
		if ($type != Constants::STREAM_WRAPPER_CLASS_PATH && $test)
        {
            $detailsJO[Constants::FIELD] = $memberName;
            
            $detailsJO[Constants::CLASS_KEY] =  $className;
            
            $detailsJO[Constants::INDEX] = $instanceNumber;
            
            $detailsJO[Constants::ACCEPTED_TYPE] = $type;
            
            $ex = new SDKException(Constants::TYPE_ERROR, null, $detailsJO, null);
            
            if($varType != Constants::ARRAY_KEY || ($varType == Constants::ARRAY_KEY && !($type == Constants::LIST || $type == Constants::MAP || $type == Constants::HASHMAP)))
            {
                SDKLogger::info($ex);
                
                throw $ex;
            }
        }
        
		if(array_key_exists(Constants::VALUES, $keyDetails))
		{
		    $valuesJA = $keyDetails[Constants::VALUES];
			
			if(!in_array($value, $valuesJA))
			{
			    $detailsJO[Constants::FIELD] =  $memberName;
			
			    $detailsJO[Constants::CLASS_KEY] = $className;
				
			    $detailsJO[Constants::INDEX] = $instanceNumber;
				
			    $detailsJO[Constants::ACCEPTED_VALUES] =  $valuesJA;
				
				$ex = new SDKException(Constants::UNACCEPTED_VALUES_ERROR, null, $detailsJO, null);
				
				SDKLogger::info($ex);
				
				throw $ex;
			}
		}
		if(array_key_exists(Constants::UNIQUE, $keyDetails))
		{
			$valuesArray = $uniqueValuesMap[$name];
			
			if($valuesArray != null && in_array($value, $valuesArray))
			{
			    $detailsJO[Constants::FIELD] =  $memberName;
				
			    $detailsJO[Constants::CLASS_KEY] =  $className;
				
			    $detailsJO[Constants::FIRST_INDEX] = array_search($value, $valuesArray) + 1;
				
			    $detailsJO[Constants::NEXT_INDEX] =  $instanceNumber;
				
				$ex = new SDKException(Constants::UNIQUE_KEY_ERROR, null , $detailsJO, null);
				
				SDKLogger::info($ex);
				
				throw $ex;
			}
			else
			{
				$valuesArray = array();
				
				$valuesArray[] = $value;
				
				$uniqueValuesMap[$name] = $valuesArray;
			}
		}
		if(array_key_exists(Constants::MIN_LENGTH, $keyDetails) && array_key_exists(Constants::MAX_LENGTH, $keyDetails))
		{
		    if(strlen($value) > $keyDetails[Constants::MAX_LENGTH])
			{
			    $detailsJO[Constants::FIELD] =  $memberName;
			    
			    $detailsJO[Constants::CLASS_KEY] =  $className;
			    
			    $detailsJO[Constants::INDEX] =  $instanceNumber;
			    
			    $detailsJO[Constants::MAXIMUM_LENGTH] =  $keyDetails[Constants::MAX_LENGTH];
				
			    $ex = new SDKException(Constants::MAXIMUM_LENGTH_ERROR, null, $detailsJO, null);
				
			    SDKLogger::info($ex);
				
			    throw $ex;
			}
			
			if(strlen($value) < $keyDetails[Constants::MIN_LENGTH])
			{
			    $detailsJO[Constants::FIELD] =  $memberName;
			    
			    $detailsJO[Constants::CLASS_KEY] =  $className;
			    
			    $detailsJO[Constants::INDEX] =  $instanceNumber;
				
			    $detailsJO[Constants::MINIMUM_LENGTH] = $keyDetails[Constants::MIN_LENGTH];
				
				$ex = new SDKException(Constants::MINIMUM_LENGTH_ERROR, null, $detailsJO, null);
				
				SDKLogger::info($ex);
				
				throw $ex;
			}
		}
		
		if(array_key_exists(Constants::REGEX, $keyDetails))
		{
		    if(!preg_match($keyDetails[Constants::REGEX], $value))
			{
			    $detailsJO[Constants::FIELD] =  $memberName;
			    
			    $detailsJO[Constants::CLASS_KEY] =  $className;
				
			    $detailsJO[Constants::INSTANCE_NUMBER] = $instanceNumber;
				
				$ex = new SDKException(Constants::REGEX_MISMATCH_ERROR, null, $detailsJO, null);
				
				SDKLogger::info($ex);
				
				throw $ex;
			}
        }
        
        return true;
	}
	
	/**
	 * This method to get the module field JSON details file path. 
	 * @return string A string representing the module field JSON details file path.
	 */
	public function getRecordJSONFilePath()
	{
		$fileName = Initializer::getInitializer()->getUser()->getEmail();

		$fileName = explode("@",$fileName)[0] . Initializer::getInitializer()->getEnvironment()->getUrl();

		$input = unpack('C*', utf8_encode($fileName));

		$str = base64_encode(implode(array_map("chr", $input)));
		
	    return "D:\\PHPSDKGitLab\\zohocrm-php-sdk\\src\\".$str.".json";
	}
}
