<?php 
namespace com\zoho\crm\api\layouts;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $layouts;
	private  $keyModified=array();

	public  function getLayouts()
	{
		return $this->layouts; 

	}

	public  function setLayouts(array $layouts)
	{
		$this->layouts=$layouts; 
		$this->keyModified["layouts"] = 1; 

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
