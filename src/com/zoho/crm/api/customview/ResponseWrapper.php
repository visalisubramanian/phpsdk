<?php 
namespace com\zoho\crm\api\customview;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model, ResponseHandler
{
	private  $customViews;
	private  $info;
	private  $keyModified=array();

	public  function getCustomViews()
	{
		return $this->customViews; 

	}

	public  function setCustomViews(array $customViews)
	{
		$this->customViews=$customViews; 
		$this->keyModified["custom_views"] = 1; 

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
