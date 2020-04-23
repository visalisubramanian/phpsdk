<?php
namespace com\zoho\crm\api\dc;

/**
 * This class representing the China country Zoho CRM and Accounts URL. It is used to denote the domain of the user.
 */
class CNDataCenter extends DataCenter
{
    private static $PRODUCTION = null;
    
    private static $SANDBOX = null;
    
    private static $DEVELOPER = null;
    
    private static $CN = null;
    
    /**
     * This Environment class instance represents the China country's Zoho CRM production environment.
     * @return Environment A Environment class instance.
     */
    public static function PRODUCTION()
    {
        self::$CN = new CNDataCenter();
        
        if (CNDataCenter::$PRODUCTION == null)
        {
            CNDataCenter::$PRODUCTION = DataCenter::setEnvironment("https://www.zohoapis.com.cn", self::$CN->getIAMUrl());
        }
        
        return CNDataCenter::$PRODUCTION;
    }

    /**
     * This Environment class instance represents the China country's Zoho CRM sandbox environment.
     * @return Environment A Environment class instance.
     */
    public static function SANDBOX()
    {
        self::$CN = new CNDataCenter();
        
        if (CNDataCenter::$SANDBOX == null)
        {
            CNDataCenter::$SANDBOX = DataCenter::setEnvironment("https://sandbox.zohoapis.com.cn", self::$CN->getIAMUrl());
        }
        
        return CNDataCenter::$SANDBOX;
    }

    /**
     * This Environment class instance represents the China country's Zoho CRM developer environment.
     * @return Environment A Environment class instance.
     */
    public static function DEVELOPER()
    {
        self::$CN = new CNDataCenter();
        
        if (CNDataCenter::$DEVELOPER == null)
        {
            CNDataCenter::$DEVELOPER = DataCenter::setEnvironment("https://developer.zohoapis.com.cn", self::$CN->getIAMUrl());
        }
        
        return CNDataCenter::$DEVELOPER;
    }

    public function getIAMUrl()
    {
        return "https://accounts.zoho.com.cn/oauth/v2/token";
    }
}
