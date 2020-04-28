<?php 
namespace com\zoho\crm\api\attachments;

use com\zoho\crm\api\util\streamwrapper;
use com\zoho\crm\api\util\model;

 class FileBodyWrapper implements Model, ResponseHandler
{
	private  $file;
	private  $keyModified=array();

	public  function getFile()
	{
		return $this->file; 

	}

	public  function setFile(StreamWrapper $file)
	{
		$this->file=$file; 
		$this->keyModified["file"] = 1; 

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
