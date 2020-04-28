<?php 
namespace com\zoho\crm\api\profile;

use com\zoho\crm\api\util\model;

 class Category implements Model
{
	private  $displayLabel;
	private  $permissionsDetails;
	private  $name;
	private  $keyModified=array();

	public  function getDisplayLabel()
	{
		return $this->displayLabel; 

	}

	public  function setDisplayLabel(string $displayLabel)
	{
		$this->displayLabel=$displayLabel; 
		$this->keyModified["display_label"] = 1; 

	}

	public  function getPermissionsDetails()
	{
		return $this->permissionsDetails; 

	}

	public  function setPermissionsDetails(array $permissionsDetails)
	{
		$this->permissionsDetails=$permissionsDetails; 
		$this->keyModified["permissions_details"] = 1; 

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

	public  function isKeyModified(string $key)
	{
		return $this->keyModified[$key]; 

	}

	public  function setKeyModified(int $modification, string $key)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
