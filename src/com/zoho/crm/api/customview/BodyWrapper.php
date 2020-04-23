<?php 
namespace com\zoho\crm\api\customview;

use com\zoho\crm\api\util\model;

 class BodyWrapper implements Model
{
	private  $customViews;
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

	public  function isKeyModified(string $key)
	{
		return $this->keyModified[$key]; 

	}

	public  function setKeyModified(int $modification, string $key)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
