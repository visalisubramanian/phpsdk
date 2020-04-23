<?php
namespace com\zoho\crm\api;

use com\zoho\crm\api\logger\Logger;
use com\zoho\crm\api\logger\Levels;
use com\zoho\crm\api\logger\SDKLogger;
use com\zoho\crm\api\util\Constants;
use com\zoho\crm\api\dc\Environment;
use com\zoho\api\authenticator\Token;
use com\zoho\api\authenticator\store\TokenStore;

/**
 * This class to initialize Zoho CRM SDK.
 */
class Initializer
{
    public static $LOCAL = array();
    
    private static $initializer;
    
    private $environment = null;
    
    private $store = null;
    
    private $user = null;
    
    private $token = null;
    
    public static $jsonDetails = null;
    
    private function __construct()
    {
    }
    
    /**
     * This to initialize the SDK.
     * @param User $user A User class instance represents the CRM user.
     * @param Environment $environment A Environment class instance containing the CRM API base URL and Accounts URL.
     * @param Token $token A Token class instance containing the OAuth client application information.
     * @param TokenStore $store A TokenStore class instance containing the token store information.
     * @param Logger $logger A Logger class instance containing the log file path and Logger type.
     */
    public static function initialize($user, $environment, $token, $store, $logger = null)
    {
        if(is_null($logger))
        {
            $logger = Logger::getInstance(Levels::info, getcwd() . DIRECTORY_SEPARATOR . Constants::LOGFILE_NAME);
        }
        
        SDKLogger::initialize($logger);
        
        Initializer::$jsonDetails = json_decode(file_get_contents(explode("src",realpath(__DIR__))[0].DIRECTORY_SEPARATOR."src".DIRECTORY_SEPARATOR."JSONDetails.json"),true);
        
        Initializer::$initializer = new Initializer();
        
        Initializer::$initializer->user = $user;
        
        Initializer::$initializer->environment = $environment;
        
        Initializer::$initializer->token = $token;
        
        Initializer::$initializer->store = $store;
    }
    
    /**
     * This method to get Initializer class instance.
     * @return Initializer A Initializer class instance representing the SDK configuration details.
     */
    public static function getInitializer()
    {
       
        if (!empty(self::$LOCAL) && count(self::$LOCAL) != 0)
        {
            return self::$LOCAL[Constants::THREAD_LOCAL];
        }
        
        return self::$initializer;
    }
    
    /**
     * This method to switch the different user in SDK environment.
     * @param User $user A User class instance represents the CRM user.
     * @param Environment $environment A Environment class instance containing the CRM API base URL and Accounts URL.
     * @param Token $token A Token class instance containing the OAuth client application information.
     */
    public static function switchUser($user, $environment, $token)
    {
        $initializer = new Initializer();
        
        $initializer->user = $user;
        
        $initializer->environment = $environment;
        
        $initializer->token = $token;
        
        $initializer->store = self::$initializer->store;

        self::$LOCAL[Constants::THREAD_LOCAL] = $initializer;
    }
    
    /**
     * This is a getter method to get API environment.
     * @return Environment A Environment representing the API environment.
     */
    public function getEnvironment()
    {
        return $this->environment;
    }
    
    /**
     * This is a getter method to get API environment.
     * @return TokenStore A TokenStore class instance containing the token store information.
     */
    public function getStore()
    {
        return $this->store;
    }
    
    /**
     * This is a getter method to get CRM User.
     * @return User A User class instance representing the CRM user.
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * This is a getter method to get OAuth client application information.
     * @return Token A Token class instance representing the OAuth client application information.
     */
    public function getToken()
    {
        return $this->token;
    }
}
