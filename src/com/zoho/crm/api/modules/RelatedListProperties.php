<?php 
namespace com\zoho\crm\api\modules;

use com\zoho\crm\api\util\model;

 class RelatedListProperties implements Model
{
	private  $sortBy;
	private  $fields;
	private  $sortOrder;
	private  $keyModified=array();

	public  function getSortBy()
	{
		return $this->sortBy; 

	}

	public  function setSortBy(string $sortBy)
	{
		$this->sortBy=$sortBy; 
		$this->keyModified["sort_by"] = 1; 

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

	public  function getSortOrder()
	{
		return $this->sortOrder; 

	}

	public  function setSortOrder(string $sortOrder)
	{
		$this->sortOrder=$sortOrder; 
		$this->keyModified["sort_order"] = 1; 

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
