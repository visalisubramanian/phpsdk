<?php

namespace com\zoho\api\authenticator\store;

use com\zoho\api\authenticator\OAuthToken;
use com\zoho\crm\api\logger\SDKLogger;
use com\zoho\api\exception\SDKException;
use com\zoho\crm\api\util\Constants;

/**
 * 
 * This class stores the user token details to the MySQL DataBase.
 *
 */
class DBStore implements TokenStore
{
    private $userName = null;
    
    private $portNumber = null;
    
    private $password = null;
    
    private $host = null;
    
    private $databaseName = null;
    
    /**
     * Creates an DBStore class instance with the specified parameters.
     * @param string $host A string containing the DataBase host name.
     * @param string $databaseName A String containing the DataBase name.
     * @param string $userName A String containing the DataBase user name.
     * @param string $password A String containing the DataBase password.
     * @param string $portNumber A String containing the DataBase port number.
     */
    public function __construct($host, $databaseName, $userName, $password, $portNumber)
    {
        $this->host = $host != null ? $host : Constants::MYSQL_HOST;
        
        $this->databaseName = $databaseName != null ? $databaseName : Constants::MYSQL_DATABASE_NAME;
        
        $this->userName = $userName != null ? $userName : Constants::MYSQL_USER_NAME;
        
        $this->password = $password != null ? $password : "";
        
        $this->portNumber = $portNumber != null ? $portNumber : Constants::MYSQL_PORT_NUMBER;
    }
    
    public function getToken($user, $token)
    {
        $connection = null;
        
        try
        {
            $connection = self::getMysqlConnection();
            
            if($token instanceof OAuthToken)
            {
                $query = self::constructDBQuery($user, $token, false);
                
                $result = mysqli_query($connection, $query);
                
                if ($result)
                {
                    while ($row = mysqli_fetch_row($result))
                    {
                        $token->setAccessToken($row[4]);
                        
                        $token->setExpiresIn($row[6]);
                        
                        $token->setRefreshToken($row[3]);
                        
                        return $token;
                    }
                }
            }
        }
        catch (\Exception $ex)
        {
            SDKLogger::severeError(Constants::GET_TOKEN_DB_ERROR. " : " . $ex);
            
            throw new SDKException(Constants::TOKEN_STORE, Constants::GET_TOKEN_DB_ERROR, null, $ex);
        }
        finally
        {
            if ($connection != null)
            {
                $connection->close();
            }
        }
        
        return null;
    }
    
    public function saveToken($user, $token)
    {
        self::deleteToken($user, $token);
        
        $connection = null;
        
        try
        {
            $connection = self::getMysqlConnection();
            
            $query = "INSERT INTO oauthtoken(user_mail,client_id,refresh_token,access_token,grant_token,expiry_time) VALUES(?,?,?,?,?,?)";
            
            $stmt = mysqli_prepare($connection, $query);
            
            if($token instanceof OAuthToken)
            {
                $email = $user->getEmail();
                
                $clientId = $token->getClientId();
                
                $refreshToken = $token->getRefreshToken();
                
                $accessToken = $token->getAccessToken();
                
                $grantToken =$token->getGrantToken();
                
                $expiresIn = $token->getExpiresIn();

                $stmt->bind_param('ssssss', $email, $clientId, $refreshToken, $accessToken, $grantToken, $expiresIn);
            }
            
            $result = $stmt->execute();
            
            if (!$result)
            {
                SDKLogger::severeError(Constants::SAVE_TOKEN_DB_ERROR . "(" . $connection->errno . ") " . $connection->error);
            }
        }
        catch (\Exception $ex)
        {
            SDKLogger::severeError(Constants::SAVE_TOKEN_DB_ERROR. " : " . $ex);
            
            throw new SDKException(Constants::TOKEN_STORE, Constants::SAVE_TOKEN_DB_ERROR, null, $ex);
        }
        finally
        {
            if ($connection != null)
            {
                $connection->close();
            }
        }
    }
    
    public function deleteToken($user, $token)
    {
        $connection = null;
        try
        {
            $connection = self::getMysqlConnection();
            
            if($token instanceof OAuthToken)
            {
                $query = self::constructDBQuery($user, $token);
                
                $result = mysqli_query($connection, $query);
                
                if (! $result)
                {
                    SDKLogger::error(Constants::DELETE_TOKEN_DB_ERROR ."(" . $connection->errno . ") " . $connection->error);
                }
            } 
        }
        catch (\Exception $ex)
        {
            SDKLogger::severeError(Constants::DELETE_TOKEN_DB_ERROR. " : " . $ex);
            
            throw new SDKException(Constants::TOKEN_STORE, Constants::DELETE_TOKEN_DB_ERROR, null, $ex);
        }
        finally
        {
            if ($connection != null)
            {
                $connection->close();
            }
        }
    }
    
    private function getMysqlConnection()
    {
        $mysqli_con = new \mysqli($this->host . ":". $this->portNumber, $this->userName, $this->password, $this->databaseName);
        
        if ($mysqli_con->connect_errno)
        {
            SDKLogger::severeError(Constants::DB_ERROR . "(" . $mysqli_con->connect_errno . ") " . $mysqli_con->connect_error);
        }
        
        return $mysqli_con;
    }

    private function constructDBQuery($user, $token, $is_delete=true)
    {
        $query = $is_delete ? "delete from " : "select * from ";
        
        $query .= "oauthtoken where user_mail='" . $user->getEmail() . "' and client_id='" . $token->getClientId() . "' and ";

        if ($token->getGrantToken() != null)
        {
            $query .= "grant_token='" . $token->getGrantToken() . "'";
        }
        else
        {
            $query .= "refresh_token='" . $token->getRefreshToken() . "'";
        }
        
        return $query;
    }
}
