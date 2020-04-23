<?php

namespace com\zoho\api\authenticator\store;

use com\zoho\api\authenticator\Token;
use com\zoho\crm\api\User;

/**
 * This interface stores the user token details.
 */
interface TokenStore
{
    /**
     * This method is used to get user token details.
     * @param User $user A User class instance.
     * @param Token $token A Token class instance.
     * @return Token A Token class instance representing the user token details.
     */
    public function getToken($user, $token);
    
    /**
     * This method is used to store user token details.
     * @param User $user A User class instance.
     * @param Token $token A Token class instance.
     */
    public function saveToken($user, $token);
    
    /**
     * This method is used to delete user token details.
     * @param User $user A User class instance.
     * @param Token $token A Token class instance.
     */
    public function deleteToken($user, $token);
}