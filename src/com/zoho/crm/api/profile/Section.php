<?php 
namespace com\zoho\crm\api\profile;

use com\zoho\crm\api\util\model;

 class Section implements Model
{
	private  $name;
	private  $categories;
	private  $keyModified=array();

	public  function getName()
	{
		return $this->name; 

	}

	public  function setName(string $name)
	{
		$this->name=$name; 
		$this->keyModified["name"] = 1; 

	}

	public  function getCategories()
	{
		return $this->categories; 

	}

	public  function setCategories(array $categories)
	{
		$this->categories=$categories; 
		$this->keyModified["categories"] = 1; 

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
