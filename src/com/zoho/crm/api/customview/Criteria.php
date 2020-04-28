<?php 
namespace com\zoho\crm\api\customview;

use com\zoho\crm\api\util\model;

 class Criteria implements Model
{
	private  $comparator;
	private  $field;
	private  $value;
	private  $groupOperator;
	private  $group;
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

	public  function getGroupOperator()
	{
		return $this->groupOperator; 

	}

	public  function setGroupOperator(string $groupOperator)
	{
		$this->groupOperator=$groupOperator; 
		$this->keyModified["group_operator"] = 1; 

	}

	public  function getGroup()
	{
		return $this->group; 

	}

	public  function setGroup(array $group)
	{
		$this->group=$group; 
		$this->keyModified["group"] = 1; 

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
