<?php
namespace com\zoho\api\authenticator\store;

use com\zoho\api\authenticator\OAuthToken;
use com\zoho\crm\api\logger\SDKLogger;
use com\zoho\api\exception\SDKException;
use com\zoho\crm\api\util\Constants;

/**
 * This class stores the user token details to the file.
 */
class FileStore implements TokenStore
{
    private $filePath = null;

    /**
     * Creates an FileStore class instance with the specified parameters.
     * @param string $filePath A string containing the absolute file path to store tokens.
     */
    public function __construct($filePath)
    {
        $this->filePath = trim($filePath);
        
        $header = array(Constants::USER_MAIL, Constants::CLIENT_ID, Constants::REFRESH_TOKEN, Constants::ACCESS_TOKEN, Constants::GRANT_TOKEN, Constants::EXPIRY_TIME);
        
        $csvWriter = fopen($this->filePath, 'a');//opens file in append mode  
        
        if (trim(file_get_contents($this->filePath)) == false)
        {
            fwrite($csvWriter, implode(",", $header));
        }
        
        fclose($csvWriter);  
    }
    
    public function getToken($user, $token)
    {
        $csvReader = null;
        
        try
        {
            $csvReader = file($this->filePath, FILE_IGNORE_NEW_LINES);
            
            if( $token instanceof OAuthToken)
            {
                for ($index = 1; $index < sizeof($csvReader); $index++)
                {
                    $allContents = $csvReader[$index];
            
                    $nextRecord = str_getcsv($allContents);
                    
                    if (self::checkTokenExists($user, $token, $nextRecord))
                    {
                        $token->setAccessToken($nextRecord[3]);
                        
                        $token->setExpiresIn($nextRecord[5]);
                        
                        $token->setRefreshToken($nextRecord[2]);
                        
                        return $token;
                    }
                }
            }
        }
        catch (\Exception $ex)
        {
            SDKLogger::severeError(Constants::GET_TOKEN_FILE_ERROR ." : " . $ex);
            
            throw new SDKException(Constants::TOKEN_STORE, Constants::GET_TOKEN_FILE_ERROR, null, $ex);
        }
        finally 
        {
            if ($csvReader != null)
            {
                fclose($csvReader);
            }
        }
        
        return null;
    }
    
    
    public function saveToken($user, $token)
    {
        self::deleteToken($user, $token);
        
        $csvWriter = null;
        
        try 
        {
            $csvWriter = file($this->filePath);
            
            if($token instanceof OAuthToken)
            {
                $data = array();
                
                array_push($data, $user->getEmail());
                
                array_push($data, $token->getClientId());
                
                array_push($data, $token->getRefreshToken());
                
                array_push($data, $token->getAccessToken());
                
                array_push($data, $token->getGrantToken());
                
                array_push($data, $token->getExpiresIn());
                
                array_push($csvWriter,"\n");
                
                array_push($csvWriter,implode(",", $data));
                
                file_put_contents($this->filePath, $csvWriter);
            }
        } 
        catch (\Exception $ex) 
        {
            SDKLogger::severeError(Constants::SAVE_TOKEN_FILE_ERROR ." : " . $ex);
            
            throw new SDKException(Constants::TOKEN_STORE, Constants::SAVE_TOKEN_FILE_ERROR, null, $ex);
        }
        finally
        {
            if ($csvWriter != null)
            {
                fclose($csvWriter);
            }
        }
    }
    
    public function deleteToken($user, $token)
    {
        $csvReader = null;
        
        try
        {
            $csvReader = file($this->filePath, FILE_IGNORE_NEW_LINES);
            
            $deleted = false;
            
            if( $token instanceof OAuthToken)
            {
                for ($index = 1; $index < sizeof($csvReader); $index++)
                {
                    $allContents = $csvReader[$index];
                    
                    $nextRecord = str_getcsv($allContents);
                    
                    if (self::checkTokenExists($user, $token, $nextRecord))
                    {
                        unset($csvReader[$index]);
                        
                        $deleted = true;
                        
                        break; // Stop searching after we found the email
                    }
                }
                
                // Rewrite the file if we deleted the user account details.
                if ($deleted)
                {
                    file_put_contents($this->filePath, implode("\n", $csvReader));
                }
            }
        } 
        catch (\Exception $ex) 
        {
            SDKLogger::severeError(Constants::DELETE_TOKEN_FILE_ERROR ." : " . $ex);
            
            throw new SDKException(Constants::TOKEN_STORE, Constants::DELETE_TOKEN_FILE_ERROR, null, $ex);
        }
    }

    private function checkTokenExists($user, $token, $row)
    {
        $client_id = (string)$token->getClientId();
        
        $email = (string) $user->getEmail();
        
        $grantToken = (string)$token->getGrantToken();
        
        $refreshToken = (string)$token->getRefreshToken();
        
        $tokenCheck = $grantToken!= null ? $grantToken === (string)$row[4] : $refreshToken === (string)$row[2];
       
        if($email === $row[0] && $client_id === $row[1] && $tokenCheck )
        {
            return true;
        }
        return false;
    }
}
