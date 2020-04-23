<?php 
namespace com\zoho\crm\api\customview;

use com\zoho\crm\api\util\model;

 class CustomView implements Model
{
	private  $id;
	private  $name;
	private  $systemName;
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

	public  function getSystemName()
	{
		return $this->systemName; 

	}

	public  function setSystemName(string $systemName)
	{
		$this->systemName=$systemName; 
		$this->keyModified["system_name"] = 1; 

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
