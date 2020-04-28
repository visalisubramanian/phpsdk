<?php 
namespace com\zoho\crm\api\contactroles;

use com\zoho\crm\api\util\model;

 class APIException implements Model, ResponseHandler, ActionResponse, ActionHandler
{
	private  $status;
	private  $code;
	private  $message;
	private  $details;
	private  $keyModified=array();

	public  function getStatus()
	{
		return $this->status; 

	}

	public  function setStatus(string $status)
	{
		$this->status=$status; 
		$this->keyModified["status"] = 1; 

	}

	public  function getCode()
	{
		return $this->code; 

	}

	public  function setCode(string $code)
	{
		$this->code=$code; 
		$this->keyModified["code"] = 1; 

	}

	public  function getMessage()
	{
		return $this->message; 

	}

	public  function setMessage(string $message)
	{
		$this->message=$message; 
		$this->keyModified["message"] = 1; 

	}

	public  function getDetails()
	{
		return $this->details; 

	}

	public  function setDetails(array $details)
	{
		$this->details=$details; 
		$this->keyModified["details"] = 1; 

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
