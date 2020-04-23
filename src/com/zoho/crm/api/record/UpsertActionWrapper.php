<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\util\model;

 class UpsertActionWrapper implements Model
{
	private  $data;
	private  $keyModified=array();

	public  function getData()
	{
		return $this->data; 

	}

	public  function setData(array $data)
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
