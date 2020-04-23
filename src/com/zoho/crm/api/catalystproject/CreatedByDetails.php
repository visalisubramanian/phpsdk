<?php 
namespace com\zoho\crm\api\catalystproject;

use com\zoho\crm\api\util\model;

 class CreatedByDetails implements Model
{
	private  $isConfirmed;
	private  $emailId;
	private  $firstName;
	private  $lastName;
	private  $userId;
	private  $keyModified=array();

	public  function getIsConfirmed()
	{
		return $this->isConfirmed; 

	}

	public  function setIsConfirmed(string $isConfirmed)
	{
		$this->isConfirmed=$isConfirmed; 
		$this->keyModified["is_confirmed"] = 1; 

	}

	public  function getEmailId()
	{
		return $this->emailId; 

	}

	public  function setEmailId(string $emailId)
	{
		$this->emailId=$emailId; 
		$this->keyModified["email_id"] = 1; 

	}

	public  function getFirstName()
	{
		return $this->firstName; 

	}

	public  function setFirstName(string $firstName)
	{
		$this->firstName=$firstName; 
		$this->keyModified["first_name"] = 1; 

	}

	public  function getLastName()
	{
		return $this->lastName; 

	}

	public  function setLastName(string $lastName)
	{
		$this->lastName=$lastName; 
		$this->keyModified["last_name"] = 1; 

	}

	public  function getUserId()
	{
		return $this->userId; 

	}

	public  function setUserId(string $userId)
	{
		$this->userId=$userId; 
		$this->keyModified["user_id"] = 1; 

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
