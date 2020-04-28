<?php 
namespace com\zoho\crm\api\profile;

use com\zoho\crm\api\util\model;

 class PermissionDetail implements Model
{
	private  $displayLabel;
	private  $module;
	private  $name;
	private  $id;
	private  $enabled;
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

	public  function getModule()
	{
		return $this->module; 

	}

	public  function setModule(string $module)
	{
		$this->module=$module; 
		$this->keyModified["module"] = 1; 

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

	public  function getId()
	{
		return $this->id; 

	}

	public  function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified["id"] = 1; 

	}

	public  function getEnabled()
	{
		return $this->enabled; 

	}

	public  function setEnabled(Boolean $enabled)
	{
		$this->enabled=$enabled; 
		$this->keyModified["enabled"] = 1; 

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
