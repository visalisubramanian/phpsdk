<?php
namespace com\zoho\crm\api\dc;

/***
 * This class representing the European countries Zoho CRM and Accounts URL. It is used to denote the domain of the user.
 */
class EUDataCenter extends DataCenter
{
    private static $PRODUCTION = null;
    
    private static $SANDBOX = null;
    
    private static $DEVELOPER = null;
    
    private static $EU = null;
    
    /**
     * This Environment class instance represents the European countries Zoho CRM production environment.
     * @return Environment A Environment class instance.
     */
    public static function PRODUCTION()
    {
        self::$EU = new EUDataCenter();
        
        if (EUDataCenter::$PRODUCTION == null)
        {
            EUDataCenter::$PRODUCTION = DataCenter::setEnvironment("https://www.zohoapis.eu", self::$EU->getIAMUrl());
        }
        
        return EUDataCenter::$PRODUCTION;
    }

    /**
     * This Environment class instance represents the European countries Zoho CRM sandbox environment.
     * @return Environment A Environment class instance.
     */
    public static function SANDBOX()
    {
        self::$EU = new EUDataCenter();
        
        if (EUDataCenter::$SANDBOX == null)
        {
            EUDataCenter::$SANDBOX = DataCenter::setEnvironment("https://sandbox.zohoapis.eu", self::$EU->getIAMUrl());
        }
        
        return EUDataCenter::$SANDBOX;
    }

    /**
     * This Environment class instance represents the European countries Zoho CRM developer environment.
     * @return Environment A Environment class instance.
     */
    public static function DEVELOPER()
    {
        self::$EU = new EUDataCenter();
        
        if (EUDataCenter::$DEVELOPER == null)
        {
            EUDataCenter::$DEVELOPER = DataCenter::setEnvironment("https://developer.zohoapis.eu", self::$EU->getIAMUrl());
        }
        
        return EUDataCenter::$DEVELOPER;
    }

    public function getIAMUrl()
    {
        return "https://accounts.zoho.eu/oauth/v2/token";
    }
}

