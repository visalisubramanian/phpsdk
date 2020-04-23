<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $data;
	private  $info;
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

	public  function getInfo()
	{
		return $this->info; 

	}

	public  function setInfo(Info $info)
	{
		$this->info=$info; 
		$this->keyModified["info"] = 1; 

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
