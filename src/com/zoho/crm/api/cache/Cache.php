<?php 
namespace com\zoho\crm\api\cache;

use com\zoho\crm\api\util\model;

 class Cache implements Model
{
	private  $cacheName;
	private  $cacheValue;
	private  $projectDetails;
	private  $segmentDetails;
	private  $expiryInHours;
	private  $expiresIn;
	private  $ttlInMilliseconds;
	private  $keyModified=array();

	public  function getCacheName()
	{
		return $this->cacheName; 

	}

	public  function setCacheName(string $cacheName)
	{
		$this->cacheName=$cacheName; 
		$this->keyModified["cache_name"] = 1; 

	}

	public  function getCacheValue()
	{
		return $this->cacheValue; 

	}

	public  function setCacheValue(string $cacheValue)
	{
		$this->cacheValue=$cacheValue; 
		$this->keyModified["cache_value"] = 1; 

	}

	public  function getProjectDetails()
	{
		return $this->projectDetails; 

	}

	public  function setProjectDetails(ProjectDetails $projectDetails)
	{
		$this->projectDetails=$projectDetails; 
		$this->keyModified["project_details"] = 1; 

	}

	public  function getSegmentDetails()
	{
		return $this->segmentDetails; 

	}

	public  function setSegmentDetails(SegmentName $segmentDetails)
	{
		$this->segmentDetails=$segmentDetails; 
		$this->keyModified["segment_details"] = 1; 

	}

	public  function getExpiryInHours()
	{
		return $this->expiryInHours; 

	}

	public  function setExpiryInHours(int $expiryInHours)
	{
		$this->expiryInHours=$expiryInHours; 
		$this->keyModified["expiry_in_hours"] = 1; 

	}

	public  function getExpiresIn()
	{
		return $this->expiresIn; 

	}

	public  function setExpiresIn(\DateTime $expiresIn)
	{
		$this->expiresIn=$expiresIn; 
		$this->keyModified["expires_in"] = 1; 

	}

	public  function getTtlInMilliseconds()
	{
		return $this->ttlInMilliseconds; 

	}

	public  function setTtlInMilliseconds(int $ttlInMilliseconds)
	{
		$this->ttlInMilliseconds=$ttlInMilliseconds; 
		$this->keyModified["ttl_in_milliseconds"] = 1; 

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
