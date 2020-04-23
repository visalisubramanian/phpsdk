<?php 
namespace com\zoho\crm\api\catalystproject;

use com\zoho\crm\api\util\model;

 class APIException implements Model
{
	private  $message;
	private  $errorCode;
	private  $keyModified=array();

	public  function getMessage()
	{
		return $this->message; 

	}

	public  function setMessage(string $message)
	{
		$this->message=$message; 
		$this->keyModified["message"] = 1; 

	}

	public  function getErrorCode()
	{
		return $this->errorCode; 

	}

	public  function setErrorCode(string $errorCode)
	{
		$this->errorCode=$errorCode; 
		$this->keyModified["error_code"] = 1; 

	}

	public  function isKeyModified(string $key)
	{
		return $this->keyModified[$key]; 

	}

	public  function setKeyModified(int $modification, string $key)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
