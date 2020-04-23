<?php 
namespace com\zoho\crm\api\taxes;

use com\zoho\crm\api\util\model;

 class Tax implements Model
{
	private  $id;
	private  $value;
	private  $displayLabel;
	private  $name;
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

	public  function getValue()
	{
		return $this->value; 

	}

	public  function setValue(int $value)
	{
		$this->value=$value; 
		$this->keyModified["value"] = 1; 

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
