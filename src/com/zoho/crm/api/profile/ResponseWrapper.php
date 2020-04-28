<?php 
namespace com\zoho\crm\api\profile;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model, ResponseHandler
{
	private  $profiles;
	private  $keyModified=array();

	public  function getProfiles()
	{
		return $this->profiles; 

	}

	public  function setProfiles(array $profiles)
	{
		$this->profiles=$profiles; 
		$this->keyModified["profiles"] = 1; 

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
