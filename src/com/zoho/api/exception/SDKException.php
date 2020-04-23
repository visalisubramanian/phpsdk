<?php

namespace com\zoho\api\exception;

/**
 * This class is the common SDKException object. This stands as a POJO for the SDKException thrown.
 */
class SDKException extends \Exception
{
    
    private $_message;

    private $_errorCode = 0;

    // exception
    private $_cause;

    private $_details;
   
    /**
     * Creates an SDKException class instance with the specified parameters.
     * @param string $errorCode A string containing the Exception error code.
     * @param string $message A string containing the Exception error message.
     * @param \Exception $cause An Exception class instance.
     * @param array $details A JSON Object containing the error response.
     */
    public function __construct($errorCode, $message, $details=null, \Exception $cause=null)
    {
        $this->_errorCode = $errorCode;
        
        $this->_message = $message;
        
        $this->_cause = $cause;
        
        $this->_details = $details;
        
        if (!$message && $cause != null)
        {
            $this->_message = $cause->getMessage();
        }
        
        parent::__construct($message);
    }
    
    /**
     * This is a getter method to get Exception error code.
     * @return string A string representing the Exception error code.
     */
    public function getErrorCode()
    {
        return $this->_errorCode;
    }
    
    /**
     * This is a getter method to get Exception error message.
     *
     * @return String A string representing the Exception error message.
     */
    
    public function getErrorMessage()
    {
        return $this->_message;
    }

    /**
     * This is a getter method to get Exception class instance.
     * 
     * @return \Exception A Exception class instance.
     */
    public function getCause()
    {
        return $this->_cause;
    }
    
    /**
     * This is a getter method to get error response JSONObject.
     * @return array A JSON Object representing the error response.
     */
    public function getDetails()
    {
        return $this->_details;
    }
    
    public function __toString()
    {
        $returnMsg = get_class($this) . " Caused by : ";
        
        if($this->_details != null)
        {
            $this->_message = $this->_message != null? $this->_message.json_encode($this->_details, true) : json_encode($this->_details, true);
        }

        if ($this->_errorCode != null)
        {
            $returnMsg .= $this->_errorCode . " - " . $this->_message;
        }
        else
        {
            $returnMsg .= $this->_message;
        }

        return $returnMsg;
    }
}