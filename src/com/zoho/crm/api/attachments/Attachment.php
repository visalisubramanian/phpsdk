<?php 
namespace com\zoho\crm\api\attachments;

use com\zoho\crm\api\util\model;

 class Attachment implements Model
{
	private  $id;
	private  $createdTime;
	private  $modifiedTime;
	private  $name;
	private  $description;
	private  $category;
	private  $modifiedBy;
	private  $createdBy;
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

	public  function getCreatedTime()
	{
		return $this->createdTime; 

	}

	public  function setCreatedTime(\DateTime $createdTime)
	{
		$this->createdTime=$createdTime; 
		$this->keyModified["created_time"] = 1; 

	}

	public  function getModifiedTime()
	{
		return $this->modifiedTime; 

	}

	public  function setModifiedTime(string $modifiedTime)
	{
		$this->modifiedTime=$modifiedTime; 
		$this->keyModified["modified_time"] = 1; 

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

	public  function getCategory()
	{
		return $this->category; 

	}

	public  function setCategory(string $category)
	{
		$this->category=$category; 
		$this->keyModified["category"] = 1; 

	}

	public  function getModifiedBy()
	{
		return $this->modifiedBy; 

	}

	public  function setModifiedBy(User $modifiedBy)
	{
		$this->modifiedBy=$modifiedBy; 
		$this->keyModified["modified_by"] = 1; 

	}

	public  function getCreatedBy()
	{
		return $this->createdBy; 

	}

	public  function setCreatedBy(User $createdBy)
	{
		$this->createdBy=$createdBy; 
		$this->keyModified["created_by"] = 1; 

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
