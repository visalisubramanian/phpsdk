<?php 
namespace com\zoho\crm\api\bulkread;

use com\zoho\crm\api\util\model;

 class JobDetail implements Model
{
	private  $id;
	private  $operation;
	private  $state;
	private  $query;
	private  $createdBy;
	private  $createdTime;
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

	public  function getOperation()
	{
		return $this->operation; 

	}

	public  function setOperation(string $operation)
	{
		$this->operation=$operation; 
		$this->keyModified["operation"] = 1; 

	}

	public  function getState()
	{
		return $this->state; 

	}

	public  function setState(string $state)
	{
		$this->state=$state; 
		$this->keyModified["state"] = 1; 

	}

	public  function getQuery()
	{
		return $this->query; 

	}

	public  function setQuery(array $query)
	{
		$this->query=$query; 
		$this->keyModified["query"] = 1; 

	}

	public  function getCreatedBy()
	{
		return $this->createdBy; 

	}

	public  function setCreatedBy(User $createdBy)
	{
		$this->createdBy=$createdBy; 
		$this->keyModified["created_by"] = 1; 

	}

	public  function getCreatedTime()
	{
		return $this->createdTime; 

	}

	public  function setCreatedTime(\DateTime $createdTime)
	{
		$this->createdTime=$createdTime; 
		$this->keyModified["created_time"] = 1; 

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
