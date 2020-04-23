<?php 
namespace com\zoho\crm\api\cache;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $status;
	private  $data;
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

	public  function getData()
	{
		return $this->data; 

	}

	public  function setData(InvalidDataResponse $data)
	{
		$this->data=$data; 
		$this->keyModified["data"] = 1; 

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
