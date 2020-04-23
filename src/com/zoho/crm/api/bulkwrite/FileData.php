<?php 
namespace com\zoho\crm\api\bulkwrite;

use com\zoho\crm\api\util\model;

 class FileData implements Model
{
	private  $status;
	private  $name;
	private  $addedCount;
	private  $skippedCount;
	private  $updatedCount;
	private  $totalCount;
	private  $keyModified=array();

	public  function getStatus()
	{
		return $this->status; 

	}

	public  function setStatus(string $status)
	{
		$this->status=$status; 
		$this->keyModified["status"] = 1; 

	}

	public  function getName()
	{
		return $this->name; 

	}

	public  function setName(string $name)
	{
		$this->name=$name; 
		$this->keyModified["name"] = 1; 

	}

	public  function getAddedCount()
	{
		return $this->addedCount; 

	}

	public  function setAddedCount(int $addedCount)
	{
		$this->addedCount=$addedCount; 
		$this->keyModified["added_count"] = 1; 

	}

	public  function getSkippedCount()
	{
		return $this->skippedCount; 

	}

	public  function setSkippedCount(int $skippedCount)
	{
		$this->skippedCount=$skippedCount; 
		$this->keyModified["skipped_count"] = 1; 

	}

	public  function getUpdatedCount()
	{
		return $this->updatedCount; 

	}

	public  function setUpdatedCount(int $updatedCount)
	{
		$this->updatedCount=$updatedCount; 
		$this->keyModified["updated_count"] = 1; 

	}

	public  function getTotalCount()
	{
		return $this->totalCount; 

	}

	public  function setTotalCount(int $totalCount)
	{
		$this->totalCount=$totalCount; 
		$this->keyModified["total_count"] = 1; 

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
