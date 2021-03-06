<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\util\model;

 class Info implements Model
{
	private  $perPage;
	private  $count;
	private  $page;
	private  $moreRecords;
	private  $keyModified=array();

	public  function getPerPage()
	{
		return $this->perPage; 

	}

	public  function setPerPage(int $perPage)
	{
		$this->perPage=$perPage; 
		$this->keyModified["per_page"] = 1; 

	}

	public  function getCount()
	{
		return $this->count; 

	}

	public  function setCount(int $count)
	{
		$this->count=$count; 
		$this->keyModified["count"] = 1; 

	}

	public  function getPage()
	{
		return $this->page; 

	}

	public  function setPage(int $page)
	{
		$this->page=$page; 
		$this->keyModified["page"] = 1; 

	}

	public  function getMoreRecords()
	{
		return $this->moreRecords; 

	}

	public  function setMoreRecords(Boolean $moreRecords)
	{
		$this->moreRecords=$moreRecords; 
		$this->keyModified["more_records"] = 1; 

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
