<?php 
namespace com\zoho\crm\api\bulkwrite;

use com\zoho\crm\api\util\model;

 class BulkWriteResponse implements Model
{
	private  $status;
	private  $characterEncoding;
	private  $resource;
	private  $id;
	private  $result;
	private  $operation;
	private  $createdTime;
	private  $keyModified=array();

	public  function getStatus()
	{
		return $this->status; 

	}

	public  function setStatus(string $status)
	{
		$this->status=$status; 
		$this->keyModified["status"] = 1; 

	}

	public  function getCharacterEncoding()
	{
		return $this->characterEncoding; 

	}

	public  function setCharacterEncoding(string $characterEncoding)
	{
		$this->characterEncoding=$characterEncoding; 
		$this->keyModified["character_encoding"] = 1; 

	}

	public  function getResource()
	{
		return $this->resource; 

	}

	public  function setResource(Resource $resource)
	{
		$this->resource=$resource; 
		$this->keyModified["resource"] = 1; 

	}

	public  function getId()
	{
		return $this->id; 

	}

	public  function setId(int $id)
	{
		$this->id=$id; 
		$this->keyModified["id"] = 1; 

	}

	public  function getResult()
	{
		return $this->result; 

	}

	public  function setResult(array $result)
	{
		$this->result=$result; 
		$this->keyModified["result"] = 1; 

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
