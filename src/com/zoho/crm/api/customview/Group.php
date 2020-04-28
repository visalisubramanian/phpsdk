<?php 
namespace com\zoho\crm\api\customview;

use com\zoho\crm\api\util\model;

 class Group implements Model
{
	private  $comparator;
	private  $field;
	private  $value;
	private  $keyModified=array();

	public  function getComparator()
	{
		return $this->comparator; 

	}

	public  function setComparator(string $comparator)
	{
		$this->comparator=$comparator; 
		$this->keyModified["comparator"] = 1; 

	}

	public  function getField()
	{
		return $this->field; 

	}

	public  function setField(string $field)
	{
		$this->field=$field; 
		$this->keyModified["field"] = 1; 

	}

	public  function getValue()
	{
		return $this->value; 

	}

	public  function setValue(string $value)
	{
		$this->value=$value; 
		$this->keyModified["value"] = 1; 

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
