<?php 
namespace com\zoho\crm\api\organization;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $org;
	private  $keyModified=array();

	public  function getOrg()
	{
		return $this->org; 

	}

	public  function setOrg(array $org)
	{
		$this->org=$org; 
		$this->keyModified["org"] = 1; 

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
