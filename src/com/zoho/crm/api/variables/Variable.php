<?php 
namespace com\zoho\crm\api\variables;

use com\zoho\crm\api\util\model;

 class Variable implements Model
{
	private  $id;
	private  $apiName;
	private  $name;
	private  $description;
	private  $type;
	private  $value;
	private  $variableGroup;
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

	public  function getType()
	{
		return $this->type; 

	}

	public  function setType(string $type)
	{
		$this->type=$type; 
		$this->keyModified["type"] = 1; 

	}

	public  function getValue()
	{
		return $this->value; 

	}

	public  function setValue(string $value)
	{
		$this->value=$value; 
		$this->keyModified["value"] = 1; 

	}

	public  function getVariableGroup()
	{
		return $this->variableGroup; 

	}

	public  function setVariableGroup(VariableGroup $variableGroup)
	{
		$this->variableGroup=$variableGroup; 
		$this->keyModified["variable_group"] = 1; 

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
