<?php 
namespace com\zoho\crm\api\tags;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $tags;
	private  $keyModified=array();

	public  function getTags()
	{
		return $this->tags; 

	}

	public  function setTags(array $tags)
	{
		$this->tags=$tags; 
		$this->keyModified["tags"] = 1; 

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
