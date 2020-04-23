<?php 
namespace com\zoho\crm\api\notes;

use com\zoho\crm\api\util\model;

 class Note implements Model
{
	private  $id;
	private  $noteTitle;
	private  $noteContent;
	private  $modifiedTime;
	private  $createdTime;
	private  $parentId;
	private  $owner;
	private  $createdBy;
	private  $modifiedBy;
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

	public  function getNoteTitle()
	{
		return $this->noteTitle; 

	}

	public  function setNoteTitle(string $noteTitle)
	{
		$this->noteTitle=$noteTitle; 
		$this->keyModified["Note_Title"] = 1; 

	}

	public  function getNoteContent()
	{
		return $this->noteContent; 

	}

	public  function setNoteContent(string $noteContent)
	{
		$this->noteContent=$noteContent; 
		$this->keyModified["Note_Content"] = 1; 

	}

	public  function getModifiedTime()
	{
		return $this->modifiedTime; 

	}

	public  function setModifiedTime(\DateTime $modifiedTime)
	{
		$this->modifiedTime=$modifiedTime; 
		$this->keyModified["Modified_Time"] = 1; 

	}

	public  function getCreatedTime()
	{
		return $this->createdTime; 

	}

	public  function setCreatedTime(\DateTime $createdTime)
	{
		$this->createdTime=$createdTime; 
		$this->keyModified["Created_Time"] = 1; 

	}

	public  function getParentId()
	{
		return $this->parentId; 

	}

	public  function setParentId(array $parentId)
	{
		$this->parentId=$parentId; 
		$this->keyModified["Parent_Id"] = 1; 

	}

	public  function getOwner()
	{
		return $this->owner; 

	}

	public  function setOwner(User $owner)
	{
		$this->owner=$owner; 
		$this->keyModified["Owner"] = 1; 

	}

	public  function getCreatedBy()
	{
		return $this->createdBy; 

	}

	public  function setCreatedBy(User $createdBy)
	{
		$this->createdBy=$createdBy; 
		$this->keyModified["Created_By"] = 1; 

	}

	public  function getModifiedBy()
	{
		return $this->modifiedBy; 

	}

	public  function setModifiedBy(User $modifiedBy)
	{
		$this->modifiedBy=$modifiedBy; 
		$this->keyModified["Modified_By"] = 1; 

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
