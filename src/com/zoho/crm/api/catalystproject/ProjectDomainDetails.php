<?php 
namespace com\zoho\crm\api\catalystproject;

use com\zoho\crm\api\util\model;

 class ProjectDomainDetails implements Model
{
	private  $projectDomainId;
	private  $projectDomainName;
	private  $keyModified=array();

	public  function getProjectDomainId()
	{
		return $this->projectDomainId; 

	}

	public  function setProjectDomainId(string $projectDomainId)
	{
		$this->projectDomainId=$projectDomainId; 
		$this->keyModified["project_domain_id"] = 1; 

	}

	public  function getProjectDomainName()
	{
		return $this->projectDomainName; 

	}

	public  function setProjectDomainName(string $projectDomainName)
	{
		$this->projectDomainName=$projectDomainName; 
		$this->keyModified["project_domain_name"] = 1; 

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
