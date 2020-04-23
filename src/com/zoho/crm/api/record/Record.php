<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\fields\field;
use com\zoho\crm\api\util\model;

 class Record implements Model
{
	private  $id;
	private  $createdBy;
	private  $createdTime;
	private  $modifiedBy;
	private  $modifiedTime;
	private  $keyValues=array();
	private  $keyModified=array();

	public  function addFieldValue(Field $field,  $value)
	{
		$this->addKeyValue($field->getAPIName(), $value); 

	}

	public  function addKeyValue(string $apiName, Object $value)
	{
		$this->keyValues[$apiName] = $value; 

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

	public  function getCreatedTime()
	{
		return $this->createdTime; 

	}

	public  function setCreatedTime(\DateTime $createdTime)
	{
		$this->createdTime=$createdTime; 
		$this->keyModified["Created_Time"] = 1; 

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

	public  function getModifiedTime()
	{
		return $this->modifiedTime; 

	}

	public  function setModifiedTime(\DateTime $modifiedTime)
	{
		$this->modifiedTime=$modifiedTime; 
		$this->keyModified["Modified_Time"] = 1; 

	}

	public  function getKeyValues()
	{
		return $this->keyValues; 

	}

	public  function setKeyValues(array $keyValues)
	{
		$this->keyValues=$keyValues; 

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
