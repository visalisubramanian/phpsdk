<?php 
namespace com\zoho\crm\api\bulkwrite;

use com\zoho\crm\api\util\model;

 class FieldMapping implements Model
{
	private  $apiName;
	private  $index;
	private  $format;
	private  $findBy;
	private  $defaultValue;
	private  $keyModified=array();

	public  function getApiName()
	{
		return $this->apiName; 

	}

	public  function setApiName(string $apiName)
	{
		$this->apiName=$apiName; 
		$this->keyModified["api_name"] = 1; 

	}

	public  function getIndex()
	{
		return $this->index; 

	}

	public  function setIndex(int $index)
	{
		$this->index=$index; 
		$this->keyModified["index"] = 1; 

	}

	public  function getFormat()
	{
		return $this->format; 

	}

	public  function setFormat(string $format)
	{
		$this->format=$format; 
		$this->keyModified["format"] = 1; 

	}

	public  function getFindBy()
	{
		return $this->findBy; 

	}

	public  function setFindBy(string $findBy)
	{
		$this->findBy=$findBy; 
		$this->keyModified["find_by"] = 1; 

	}

	public  function getDefaultValue()
	{
		return $this->defaultValue; 

	}

	public  function setDefaultValue(Record $defaultValue)
	{
		$this->defaultValue=$defaultValue; 
		$this->keyModified["default_value"] = 1; 

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
