<?php 
namespace com\zoho\crm\api\notes;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $notes;
	private  $keyModified=array();

	public  function getNotes()
	{
		return $this->notes; 

	}

	public  function setNotes(array $notes)
	{
		$this->notes=$notes; 
		$this->keyModified["notes"] = 1; 

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
