<?php 
namespace com\zoho\crm\api\blueprint;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $blueprint;
	private  $keyModified=array();

	public  function getBlueprint()
	{
		return $this->blueprint; 

	}

	public  function setBlueprint(array $blueprint)
	{
		$this->blueprint=$blueprint; 
		$this->keyModified["blueprint"] = 1; 

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
