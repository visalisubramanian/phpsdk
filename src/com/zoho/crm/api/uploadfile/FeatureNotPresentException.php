<?php 
namespace com\zoho\crm\api\uploadfile;

use com\zoho\crm\api\util\model;

 class FeatureNotPresentException implements Model
{
	private  $xError;
	private  $info;
	private  $keyModified=array();

	public  function getXError()
	{
		return $this->xError; 

	}

	public  function setXError(string $xError)
	{
		$this->xError=$xError; 
		$this->keyModified["x-error"] = 1; 

	}

	public  function getInfo()
	{
		return $this->info; 

	}

	public  function setInfo(string $info)
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
