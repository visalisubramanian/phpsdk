<?php
namespace com\zoho\crm\api\dc;

/**
 * This class representing the US countries Zoho CRM and Accounts URL. It is used to denote the domain of the user.
 */
class USDataCenter extends DataCenter
{
    private static $PRODUCTION = null;
    
    private static $SANDBOX = null;
    
    private static $DEVELOPER = null;
    
    private static $US = null;
    
    /**
     * This Environment class instance represents the US countries Zoho CRM production environment.
     * @return Environment A Environment class instance.
     */
    public static function PRODUCTION()
    {
        self::$US = new USDataCenter();
        
        if (USDataCenter::$PRODUCTION == null)
        {
            USDataCenter::$PRODUCTION = DataCenter::setEnvironment("https://www.zohoapis.com", self::$US->getIAMUrl());
        }
        
        return USDataCenter::$PRODUCTION;
    }
    
    /**
     * This Environment class instance represents the US countries Zoho CRM sandbox environment.
     * @return Environment A Environment class instance.
     */
    public static function SANDBOX()
    {
        self::$US = new USDataCenter();
        
        if (USDataCenter::$SANDBOX == null)
        {
            USDataCenter::$SANDBOX = DataCenter::setEnvironment("https://sandbox.zohoapis.com", self::$US->getIAMUrl());
        }
        
        return USDataCenter::$SANDBOX;
    }

    /**
     * This Environment class instance represents the US countries Zoho CRM developer environment.
     * @return Environment A Environment class instance.
     */
    public static function DEVELOPER()
    {
        self::$US = new USDataCenter();
        
        if (USDataCenter::$DEVELOPER == null)
        {
            USDataCenter::$DEVELOPER = DataCenter::setEnvironment("https://developer.zohoapis.com", self::$US->getIAMUrl());
        }
        
        return USDataCenter::$DEVELOPER;
    }

    public function getIAMUrl()
    {
        return "https://accounts.zoho.com/oauth/v2/token";
    }
}

