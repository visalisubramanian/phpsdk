<?php 
namespace com\zoho\crm\api\catalystproject;

use com\zoho\crm\api\util\model;

 class BodyWrapper implements Model
{
	private  $projectName;
	private  $keyModified=array();

	public  function getProjectName()
	{
		return $this->projectName; 

	}

	public  function setProjectName(string $projectName)
	{
		$this->projectName=$projectName; 
		$this->keyModified["project_name"] = 1; 

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
