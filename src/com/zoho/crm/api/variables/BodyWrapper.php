<?php 
namespace com\zoho\crm\api\variables;

use com\zoho\crm\api\util\model;

 class BodyWrapper implements Model
{
	private  $variables;
	private  $keyModified=array();

	public  function getVariables()
	{
		return $this->variables; 

	}

	public  function setVariables(array $variables)
	{
		$this->variables=$variables; 
		$this->keyModified["variables"] = 1; 

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
