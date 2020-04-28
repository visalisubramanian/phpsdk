<?php 
namespace com\zoho\crm\api\customview;

use com\zoho\crm\api\util\model;

 class CustomView implements Model
{
	private  $id;
	private  $name;
	private  $systemName;
	private  $displayValue;
	private  $sharedType;
	private  $category;
	private  $sortBy;
	private  $sortOrder;
	private  $favorite;
	private  $offline;
	private  $default;
	private  $systemDefined;
	private  $criteria;
	private  $sharedDetails;
	private  $fields;
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

	public  function getDisplayValue()
	{
		return $this->displayValue; 

	}

	public  function setDisplayValue(string $displayValue)
	{
		$this->displayValue=$displayValue; 
		$this->keyModified["display_value"] = 1; 

	}

	public  function getSharedType()
	{
		return $this->sharedType; 

	}

	public  function setSharedType(string $sharedType)
	{
		$this->sharedType=$sharedType; 
		$this->keyModified["shared_type"] = 1; 

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

	public  function getSortBy()
	{
		return $this->sortBy; 

	}

	public  function setSortBy(string $sortBy)
	{
		$this->sortBy=$sortBy; 
		$this->keyModified["sort_by"] = 1; 

	}

	public  function getSortOrder()
	{
		return $this->sortOrder; 

	}

	public  function setSortOrder(string $sortOrder)
	{
		$this->sortOrder=$sortOrder; 
		$this->keyModified["sort_order"] = 1; 

	}

	public  function getFavorite()
	{
		return $this->favorite; 

	}

	public  function setFavorite(int $favorite)
	{
		$this->favorite=$favorite; 
		$this->keyModified["favorite"] = 1; 

	}

	public  function getOffline()
	{
		return $this->offline; 

	}

	public  function setOffline(Boolean $offline)
	{
		$this->offline=$offline; 
		$this->keyModified["offline"] = 1; 

	}

	public  function getDefault()
	{
		return $this->default; 

	}

	public  function setDefault(Boolean $default)
	{
		$this->default=$default; 
		$this->keyModified["default"] = 1; 

	}

	public  function getSystemDefined()
	{
		return $this->systemDefined; 

	}

	public  function setSystemDefined(Boolean $systemDefined)
	{
		$this->systemDefined=$systemDefined; 
		$this->keyModified["system_defined"] = 1; 

	}

	public  function getCriteria()
	{
		return $this->criteria; 

	}

	public  function setCriteria(Criteria $criteria)
	{
		$this->criteria=$criteria; 
		$this->keyModified["criteria"] = 1; 

	}

	public  function getSharedDetails()
	{
		return $this->sharedDetails; 

	}

	public  function setSharedDetails(array $sharedDetails)
	{
		$this->sharedDetails=$sharedDetails; 
		$this->keyModified["shared_details"] = 1; 

	}

	public  function getFields()
	{
		return $this->fields; 

	}

	public  function setFields(array $fields)
	{
		$this->fields=$fields; 
		$this->keyModified["fields"] = 1; 

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
