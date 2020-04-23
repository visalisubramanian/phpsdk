<?php 
namespace com\zoho\crm\api\blueprint;

use com\zoho\crm\api\util\model;

 class BluePrint implements Model
{
	private  $processInfo;
	private  $transitions;
	private  $keyModified=array();

	public  function getProcessInfo()
	{
		return $this->processInfo; 

	}

	public  function setProcessInfo(ProcessInfo $processInfo)
	{
		$this->processInfo=$processInfo; 
		$this->keyModified["process_info"] = 1; 

	}

	public  function getTransitions()
	{
		return $this->transitions; 

	}

	public  function setTransitions(array $transitions)
	{
		$this->transitions=$transitions; 
		$this->keyModified["transitions"] = 1; 

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
