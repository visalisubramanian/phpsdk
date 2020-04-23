<?php 
namespace com\zoho\crm\api\tags;

use com\zoho\crm\api\util\model;

 class Territory implements Model
{
	private  $id;
	private  $name;
	private  $manager;
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

	public  function getManager()
	{
		return $this->manager; 

	}

	public  function setManager(Boolean $manager)
	{
		$this->manager=$manager; 
		$this->keyModified["manager"] = 1; 

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
