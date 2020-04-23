<?php
namespace com\zoho\crm\api\util;

/**
 * This class converts JSON value to the expected data type.
 */
class DataTypeConverter
{
	private static $PRE_CONVERTER_MAP = array();
	
	private static $POST_CONVERTER_MAP = array();

	/**
	 * This method is to initialize the PreConverter and PostConverter lambda functions.
	 */
	static function init()
	{
	    if ((!empty(self::$PRE_CONVERTER_MAP) && count(self::$PRE_CONVERTER_MAP) != 0) && (!empty(self::$POST_CONVERTER_MAP) && count(self::$POST_CONVERTER_MAP) != 0))
		{
			return;
        }
        
        $string = function ($obj) { return strval($obj); };
        
        $integer = function ($obj) { return intval($obj); };
        
        $long = function ($obj) { return strval($obj); };
        
        $bool = function ($obj) { return (bool)$obj; };
        
        $stringToDateTime = function ($obj) { return date_create($obj)->setTimezone(new \DateTimeZone(date_default_timezone_get())); };
        
        $dateTimeToString = function ($obj) { return $obj->format(\Datetime::ATOM); };
        
        self::addToMap(\String::class, $string, $string);
        
        self::addToMap(Constants::INTEGER_KEY, $integer, $integer);
        
        self::addToMap(Constants::LONG, $long, $long);
        
        self::addToMap(Constants::BOOLEAN_KEY, $bool, $bool);
        
        self::addToMap(\DateTime::class, $stringToDateTime, $dateTimeToString);
        
        self::addToMap(Constants::DATE, $stringToDateTime, $dateTimeToString);
	}
	
	/**
	 * This method is to add PreConverter and PostConverter instance.
	 * @param string $name A string containing the data type class name.
	 * @param array $preConverter A PreConverter interface.
	 * @param array $postConverter A PostConverter interface.
	 */
	static function addToMap($name, $preConverter, $postConverter)
	{
	    self::$PRE_CONVERTER_MAP[$name] = $preConverter;
	    
	    self::$POST_CONVERTER_MAP[$name] = $postConverter;
	}
	
	/**
	 * This method is to convert JSON value to expected data value.
	 * @param object $obj A Object containing the JSON value.
	 * @param string $type A string containing the expected method return type.
	 * @return object containing the expected data value.
	 */
    static function preConvert($obj, $type)
	{
        self::init();
        
        return self::$PRE_CONVERTER_MAP[$type]($obj);
	}
	
	/**
	 * This method to convert Java data to JSON data value.
	 * @param object $obj A object containing the Java data value.
	 * @param string $type A string containing the expected method return type.
	 * @return object A object containing the expected data value.
	 */
	static function postConvert($obj, $type)
	{
	    self::init();
	    
	    return self::$POST_CONVERTER_MAP[$type]($obj);
	}
}