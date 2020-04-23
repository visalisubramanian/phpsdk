<?php 
namespace com\zoho\crm\api\relatedlist;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $relatedLists;
	private  $keyModified=array();

	public  function getRelatedLists()
	{
		return $this->relatedLists; 

	}

	public  function setRelatedLists(array $relatedLists)
	{
		$this->relatedLists=$relatedLists; 
		$this->keyModified["related_lists"] = 1; 

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
