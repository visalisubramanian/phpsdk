<?php
namespace com\zoho\crm\api\dc;

/**
 * This class representing the India country Zoho CRM and Accounts URL. It is used to denote the domain of the user.
 */
class INDataCenter extends DataCenter
{
    private static $PRODUCTION = null;
    
    private static $SANDBOX = null;
    
    private static $DEVELOPER = null;
    
    private static $IN = null;
    
    /**
     * This Environment class instance represents the India country's Zoho CRM production environment.
     * @return Environment A Environment class instance.
     */
    public static function PRODUCTION()
    {
        self::$IN = new INDataCenter();
        
        if (INDataCenter::$PRODUCTION == null)
        {
            INDataCenter::$PRODUCTION = DataCenter::setEnvironment("https://www.zohoapis.in", self::$IN ->getIAMUrl());
        }
        
        return INDataCenter::$PRODUCTION;
    }

    /**
     * This Environment class instance represents the India country's Zoho CRM sandbox environment.
     * @return Environment A Environment class instance.
     */
    public static function SANDBOX()
    {
        self::$IN = new INDataCenter();
        
        if (INDataCenter::$SANDBOX == null)
        {
            INDataCenter::$SANDBOX = DataCenter::setEnvironment("https://sandbox.zohoapis.in", self::$IN ->getIAMUrl());
        }
        
        return INDataCenter::$SANDBOX;
    }

    /**
     * This Environment class instance represents the India country's Zoho CRM developer environment.
     * @return Environment A Environment class instance.
     */
    public static function DEVELOPER()
    {
        self::$IN = new INDataCenter();
        
        if (INDataCenter::$DEVELOPER == null)
        {
            INDataCenter::$DEVELOPER = DataCenter::setEnvironment("https://developer.zohoapis.in", self::$IN ->getIAMUrl());
        }
        
        return INDataCenter::$DEVELOPER;
    }

    public function getIAMUrl()
    {
        return "https://accounts.zoho.in/oauth/v2/token";
    }
}

