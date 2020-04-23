<?php 
namespace com\zoho\crm\api\contactroles;

use com\zoho\crm\api\util\model;

 class ContactRole implements Model
{
	private  $id;
	private  $name;
	private  $sequenceNumber;
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

	public  function getSequenceNumber()
	{
		return $this->sequenceNumber; 

	}

	public  function setSequenceNumber(int $sequenceNumber)
	{
		$this->sequenceNumber=$sequenceNumber; 
		$this->keyModified["sequence_number"] = 1; 

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
