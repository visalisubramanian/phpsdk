<?php 
namespace com\zoho\crm\api\attachments;

use com\zoho\crm\api\record\record;
use com\zoho\crm\api\users\user;
use com\zoho\crm\api\util\model;

 class Attachment implements Model
{
	private  $owner;
	private  $modifiedTime;
	private  $fileName;
	private  $createdTime;
	private  $size;
	private  $parentId;
	private  $editable;
	private  $fileId;
	private  $type;
	private  $seModule;
	private  $modifiedBy;
	private  $state;
	private  $id;
	private  $createdBy;
	private  $linkUrl;
	private  $description;
	private  $category;
	private  $keyModified=array();

	public  function getOwner()
	{
		return $this->owner; 

	}

	public  function setOwner(User $owner)
	{
		$this->owner=$owner; 
		$this->keyModified["Owner"] = 1; 

	}

	public  function getModifiedTime()
	{
		return $this->modifiedTime; 

	}

	public  function setModifiedTime(string $modifiedTime)
	{
		$this->modifiedTime=$modifiedTime; 
		$this->keyModified["Modified_Time"] = 1; 

	}

	public  function getFileName()
	{
		return $this->fileName; 

	}

	public  function setFileName(string $fileName)
	{
		$this->fileName=$fileName; 
		$this->keyModified["File_Name"] = 1; 

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

	public  function getSize()
	{
		return $this->size; 

	}

	public  function setSize(string $size)
	{
		$this->size=$size; 
		$this->keyModified["Size"] = 1; 

	}

	public  function getParentId()
	{
		return $this->parentId; 

	}

	public  function setParentId(Record $parentId)
	{
		$this->parentId=$parentId; 
		$this->keyModified["Parent_Id"] = 1; 

	}

	public  function getEditable()
	{
		return $this->editable; 

	}

	public  function setEditable(Boolean $editable)
	{
		$this->editable=$editable; 
		$this->keyModified["editable"] = 1; 

	}

	public  function getFileId()
	{
		return $this->fileId; 

	}

	public  function setFileId(string $fileId)
	{
		$this->fileId=$fileId; 
		$this->keyModified["file_id"] = 1; 

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

	public  function getSeModule()
	{
		return $this->seModule; 

	}

	public  function setSeModule(string $seModule)
	{
		$this->seModule=$seModule; 
		$this->keyModified["se_module"] = 1; 

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

	public  function getState()
	{
		return $this->state; 

	}

	public  function setState(string $state)
	{
		$this->state=$state; 
		$this->keyModified["state"] = 1; 

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

	public  function getCreatedBy()
	{
		return $this->createdBy; 

	}

	public  function setCreatedBy(User $createdBy)
	{
		$this->createdBy=$createdBy; 
		$this->keyModified["Created_By"] = 1; 

	}

	public  function getLinkUrl()
	{
		return $this->linkUrl; 

	}

	public  function setLinkUrl(string $linkUrl)
	{
		$this->linkUrl=$linkUrl; 
		$this->keyModified["link_url"] = 1; 

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

	public  function isKeyModified(string $key)
	{
		return $this->keyModified[$key]; 

	}

	public  function setKeyModified(int $modification, string $key)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
