<?php
namespace com\zoho\crm\api\dc;

/**
 * This class representing the Australian country Zoho CRM and Accounts URL. It is used to denote the domain of the user.
 */
class AUDataCenter extends DataCenter
{
    private static $PRODUCTION = null;
    
    private static $SANDBOX = null;
    
    private static $DEVELOPER = null;
    
    private static $AU = null;
    
    /**
     * This Environment class instance represents the Australian country's Zoho CRM production environment.
     * @return Environment A Environment class instance.
     */
    public static function PRODUCTION()
    {
        self::$AU = new AUDataCenter();
        
        if (AUDataCenter::$PRODUCTION == null)
        {
            AUDataCenter::$PRODUCTION = DataCenter::setEnvironment("https://www.zohoapis.com.au", self::$AU->getIAMUrl());
        }
        
        return AUDataCenter::$PRODUCTION;
    }

    /**
     * This Environment class instance represents the Australian country's Zoho CRM sandbox environment.
     * @return Environment A Environment class instance.
     */
    public static function SANDBOX()
    {
        self::$AU = new AUDataCenter();
        
        if (AUDataCenter::$SANDBOX == null)
        {
            AUDataCenter::$SANDBOX = DataCenter::setEnvironment("https://sandbox.zohoapis.com.au", self::$AU->getIAMUrl());
        }
        
        return AUDataCenter::$SANDBOX;
    }

    /**
     * This Environment class instance represents the Australian country's Zoho CRM developer environment.
     * @return Environment A Environment class instance.
     */
    public static function DEVELOPER()
    {
        self::$AU = new AUDataCenter();
        
        if (AUDataCenter::$DEVELOPER == null)
        {
            AUDataCenter::$DEVELOPER = DataCenter::setEnvironment("https://developer.zohoapis.com.au", self::$AU->getIAMUrl());
        }
        
        return AUDataCenter::$DEVELOPER;
    }

    public function getIAMUrl()
    {
        return "https://accounts.zoho.com.au/oauth/v2/token";
    }
}

