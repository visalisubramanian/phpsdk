<?php 
namespace com\zoho\crm\api\variablegroups;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $variableGroups;
	private  $keyModified=array();

	public  function getVariableGroups()
	{
		return $this->variableGroups; 

	}

	public  function setVariableGroups(array $variableGroups)
	{
		$this->variableGroups=$variableGroups; 
		$this->keyModified["variable_groups"] = 1; 

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
