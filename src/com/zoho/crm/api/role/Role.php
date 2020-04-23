<?php 
namespace com\zoho\crm\api\role;

use com\zoho\crm\api\util\model;

 class Role implements Model
{
	private  $id;
	private  $name;
	private  $displayLabel;
	private  $adminUser;
	private  $reportingTo;
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

	public  function getName()
	{
		return $this->name; 

	}

	public  function setName(string $name)
	{
		$this->name=$name; 
		$this->keyModified["name"] = 1; 

	}

	public  function getDisplayLabel()
	{
		return $this->displayLabel; 

	}

	public  function setDisplayLabel(string $displayLabel)
	{
		$this->displayLabel=$displayLabel; 
		$this->keyModified["display_label"] = 1; 

	}

	public  function getAdminUser()
	{
		return $this->adminUser; 

	}

	public  function setAdminUser(Boolean $adminUser)
	{
		$this->adminUser=$adminUser; 
		$this->keyModified["admin_user"] = 1; 

	}

	public  function getReportingTo()
	{
		return $this->reportingTo; 

	}

	public  function setReportingTo(User $reportingTo)
	{
		$this->reportingTo=$reportingTo; 
		$this->keyModified["reporting_to"] = 1; 

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
