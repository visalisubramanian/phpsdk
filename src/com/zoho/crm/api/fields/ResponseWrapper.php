<?php 
namespace com\zoho\crm\api\fields;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $fields;
	private  $keyModified=array();

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
