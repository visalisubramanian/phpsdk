<?php 
namespace com\zoho\crm\api\bulkwrite;

use com\zoho\crm\api\util\model;

 class RequestWrapper implements Model
{
	private  $characterEncoding;
	private  $operation;
	private  $callback;
	private  $resource;
	private  $keyModified=array();

	public  function getCharacterEncoding()
	{
		return $this->characterEncoding; 

	}

	public  function setCharacterEncoding(string $characterEncoding)
	{
		$this->characterEncoding=$characterEncoding; 
		$this->keyModified["character_encoding"] = 1; 

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

	public  function getCallback()
	{
		return $this->callback; 

	}

	public  function setCallback(CallBack $callback)
	{
		$this->callback=$callback; 
		$this->keyModified["callback"] = 1; 

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

	public  function isKeyModified(string $key)
	{
		return $this->keyModified[$key]; 

	}

	public  function setKeyModified(int $modification, string $key)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
