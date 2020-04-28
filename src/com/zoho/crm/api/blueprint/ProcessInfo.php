<?php 
namespace com\zoho\crm\api\blueprint;

use com\zoho\crm\api\util\model;

 class ProcessInfo implements Model
{
	private  $fieldId;
	private  $isContinuous;
	private  $apiName;
	private  $continuous;
	private  $fieldLabel;
	private  $name;
	private  $columnName;
	private  $fieldValue;
	private  $id;
	private  $fieldName;
	private  $keyModified=array();

	public  function getFieldId()
	{
		return $this->fieldId; 

	}

	public  function setFieldId(string $fieldId)
	{
		$this->fieldId=$fieldId; 
		$this->keyModified["field_id"] = 1; 

	}

	public  function getIsContinuous()
	{
		return $this->isContinuous; 

	}

	public  function setIsContinuous(Boolean $isContinuous)
	{
		$this->isContinuous=$isContinuous; 
		$this->keyModified["is_continuous"] = 1; 

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

	public  function getContinuous()
	{
		return $this->continuous; 

	}

	public  function setContinuous(Boolean $continuous)
	{
		$this->continuous=$continuous; 
		$this->keyModified["continuous"] = 1; 

	}

	public  function getFieldLabel()
	{
		return $this->fieldLabel; 

	}

	public  function setFieldLabel(string $fieldLabel)
	{
		$this->fieldLabel=$fieldLabel; 
		$this->keyModified["field_label"] = 1; 

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

	public  function getColumnName()
	{
		return $this->columnName; 

	}

	public  function setColumnName(string $columnName)
	{
		$this->columnName=$columnName; 
		$this->keyModified["column_name"] = 1; 

	}

	public  function getFieldValue()
	{
		return $this->fieldValue; 

	}

	public  function setFieldValue(string $fieldValue)
	{
		$this->fieldValue=$fieldValue; 
		$this->keyModified["field_value"] = 1; 

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

	public  function getFieldName()
	{
		return $this->fieldName; 

	}

	public  function setFieldName(string $fieldName)
	{
		$this->fieldName=$fieldName; 
		$this->keyModified["field_name"] = 1; 

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
