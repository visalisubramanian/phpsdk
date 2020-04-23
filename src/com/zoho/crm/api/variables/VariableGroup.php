<?php 
namespace com\zoho\crm\api\variables;

use com\zoho\crm\api\util\model;

 class VariableGroup implements Model
{
	private  $id;
	private  $apiName;
	private  $name;
	private  $description;
	private  $displayLabel;
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

	public  function getApiName()
	{
		return $this->apiName; 

	}

	public  function setApiName(string $apiName)
	{
		$this->apiName=$apiName; 
		$this->keyModified["api_name"] = 1; 

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

	public  function getDescription()
	{
		return $this->description; 

	}

	public  function setDescription(string $description)
	{
		$this->description=$description; 
		$this->keyModified["description"] = 1; 

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

	public  function isKeyModified(string $key)
	{
		return $this->keyModified[$key]; 

	}

	public  function setKeyModified(int $modification, string $key)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
