<?php
namespace com\zoho\crm\api\dc;

/**
 * This abstract class representing the Zoho CRM environment and accounts URL.
 */
abstract class DataCenter
{
    /**
     * This method to get accounts URL.
     * URL to be used when calling an OAuth accounts.
     * @return string A string representing the accounts URL.
     */
    public abstract function getIAMUrl();
    
    public static function setEnvironment($url, $accountUrl)
    {
        return new Environment($url, $accountUrl); 
    }
}

/**
 * This abstract class representing the Zoho CRM environment.
 */
class Environment
{
    public $url = null;
    
    public $accountUrl = null;
    
    public function __construct($url, $accountUrl)
    {
        $this->url = $url;
        $this->accountUrl = $accountUrl;
    }
    /**
     * This method to get Zoho CRM API URL.
     * @return string A string representing the Zoho CRM API URL.
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * This method to get Zoho CRM Accounts URL.
     * @return string A string representing the accounts URL.
     */
    public function getAccountsUrl()
    {
        return $this->accountUrl;
    }
}