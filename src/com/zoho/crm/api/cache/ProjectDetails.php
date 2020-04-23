<?php 
namespace com\zoho\crm\api\cache;

use com\zoho\crm\api\util\model;

 class ProjectDetails implements Model
{
	private  $id;
	private  $projectName;
	private  $keyModified=array();

	public  function getId()
	{
		return $this->id; 

	}

	public  function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified["id"] = 1; 

	}

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
