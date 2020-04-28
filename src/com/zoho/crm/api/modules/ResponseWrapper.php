<?php 
namespace com\zoho\crm\api\modules;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model, ResponseHandler
{
	private  $modules;
	private  $keyModified=array();

	public  function getModules()
	{
		return $this->modules; 

	}

	public  function setModules(array $modules)
	{
		$this->modules=$modules; 
		$this->keyModified["modules"] = 1; 

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
