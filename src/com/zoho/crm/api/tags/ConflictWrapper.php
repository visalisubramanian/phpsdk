<?php 
namespace com\zoho\crm\api\tags;

use com\zoho\crm\api\util\model;

 class ConflictWrapper implements Model
{
	private  $conflictId;
	private  $keyModified=array();

	public  function getConflictId()
	{
		return $this->conflictId; 

	}

	public  function setConflictId(string $conflictId)
	{
		$this->conflictId=$conflictId; 
		$this->keyModified["conflict_id"] = 1; 

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
