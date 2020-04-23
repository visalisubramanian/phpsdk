<?php 
namespace com\zoho\crm\api\fields;

use com\zoho\crm\api\util\model;

 class Field implements Model
{
	private  $id;
	private  $apiName;
	private  $dataType;
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

	public  function getDataType()
	{
		return $this->dataType; 

	}

	public  function setDataType(string $dataType)
	{
		$this->dataType=$dataType; 
		$this->keyModified["data_type"] = 1; 

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
