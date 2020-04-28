<?php 
namespace com\zoho\crm\api\blueprint;

use com\zoho\crm\api\record\record;
use com\zoho\crm\api\util\model;

 class Transition implements Model
{
	private  $nextTransitions;
	private  $percentPartialSave;
	private  $data;
	private  $nextFieldValue;
	private  $name;
	private  $criteriaMatched;
	private  $id;
	private  $fields;
	private  $criteriaMessage;
	private  $keyModified=array();

	public  function getNextTransitions()
	{
		return $this->nextTransitions; 

	}

	public  function setNextTransitions(array $nextTransitions)
	{
		$this->nextTransitions=$nextTransitions; 
		$this->keyModified["next_transitions"] = 1; 

	}

	public  function getPercentPartialSave()
	{
		return $this->percentPartialSave; 

	}

	public  function setPercentPartialSave(int $percentPartialSave)
	{
		$this->percentPartialSave=$percentPartialSave; 
		$this->keyModified["percent_partial_save"] = 1; 

	}

	public  function getData()
	{
		return $this->data; 

	}

	public  function setData(Record $data)
	{
		$this->data=$data; 
		$this->keyModified["data"] = 1; 

	}

	public  function getNextFieldValue()
	{
		return $this->nextFieldValue; 

	}

	public  function setNextFieldValue(string $nextFieldValue)
	{
		$this->nextFieldValue=$nextFieldValue; 
		$this->keyModified["next_field_value"] = 1; 

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

	public  function getCriteriaMatched()
	{
		return $this->criteriaMatched; 

	}

	public  function setCriteriaMatched(Boolean $criteriaMatched)
	{
		$this->criteriaMatched=$criteriaMatched; 
		$this->keyModified["criteria_matched"] = 1; 

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

	public  function getFields()
	{
		return $this->fields; 

	}

	public  function setFields(array $fields)
	{
		$this->fields=$fields; 
		$this->keyModified["fields"] = 1; 

	}

	public  function getCriteriaMessage()
	{
		return $this->criteriaMessage; 

	}

	public  function setCriteriaMessage(string $criteriaMessage)
	{
		$this->criteriaMessage=$criteriaMessage; 
		$this->keyModified["criteria_message"] = 1; 

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
