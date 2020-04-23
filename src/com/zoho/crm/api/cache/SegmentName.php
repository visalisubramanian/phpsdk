<?php 
namespace com\zoho\crm\api\cache;

use com\zoho\crm\api\util\model;

 class SegmentName implements Model
{
	private  $id;
	private  $segmentName;
	private  $keyModified=array();

	public  function getId()
	{
		return $this->id; 

	}

	public  function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified["id"] = 1; 

	}

	public  function getSegmentName()
	{
		return $this->segmentName; 

	}

	public  function setSegmentName(string $segmentName)
	{
		$this->segmentName=$segmentName; 
		$this->keyModified["segment_name"] = 1; 

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
