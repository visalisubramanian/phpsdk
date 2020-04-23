<?php 
namespace com\zoho\crm\api\catalystproject;

use com\zoho\crm\api\util\model;

 class CatalystProject implements Model
{
	private  $projectName;
	private  $createdBy;
	private  $projectDomainDetails;
	private  $createdTime;
	private  $redirectUrl;
	private  $dbType;
	private  $id;
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

	public  function getCreatedBy()
	{
		return $this->createdBy; 

	}

	public  function setCreatedBy(CreatedByDetails $createdBy)
	{
		$this->createdBy=$createdBy; 
		$this->keyModified["created_by"] = 1; 

	}

	public  function getProjectDomainDetails()
	{
		return $this->projectDomainDetails; 

	}

	public  function setProjectDomainDetails(ProjectDomainDetails $projectDomainDetails)
	{
		$this->projectDomainDetails=$projectDomainDetails; 
		$this->keyModified["project_domain_details"] = 1; 

	}

	public  function getCreatedTime()
	{
		return $this->createdTime; 

	}

	public  function setCreatedTime(\DateTime $createdTime)
	{
		$this->createdTime=$createdTime; 
		$this->keyModified["created_time"] = 1; 

	}

	public  function getRedirectUrl()
	{
		return $this->redirectUrl; 

	}

	public  function setRedirectUrl(string $redirectUrl)
	{
		$this->redirectUrl=$redirectUrl; 
		$this->keyModified["redirect_url"] = 1; 

	}

	public  function getDbType()
	{
		return $this->dbType; 

	}

	public  function setDbType(string $dbType)
	{
		$this->dbType=$dbType; 
		$this->keyModified["db_type"] = 1; 

	}

	public  function getId()
	{
		return $this->id; 

	}

	public  function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified["id"] = 1; 

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
