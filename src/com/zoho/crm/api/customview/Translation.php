<?php 
namespace com\zoho\crm\api\customview;

use com\zoho\crm\api\util\model;

 class Translation implements Model
{
	private  $publicViews;
	private  $otherUsersViews;
	private  $sharedWithMe;
	private  $createdByMe;
	private  $keyModified=array();

	public  function getPublicViews()
	{
		return $this->publicViews; 

	}

	public  function setPublicViews(string $publicViews)
	{
		$this->publicViews=$publicViews; 
		$this->keyModified["public_views"] = 1; 

	}

	public  function getOtherUsersViews()
	{
		return $this->otherUsersViews; 

	}

	public  function setOtherUsersViews(string $otherUsersViews)
	{
		$this->otherUsersViews=$otherUsersViews; 
		$this->keyModified["other_users_views"] = 1; 

	}

	public  function getSharedWithMe()
	{
		return $this->sharedWithMe; 

	}

	public  function setSharedWithMe(string $sharedWithMe)
	{
		$this->sharedWithMe=$sharedWithMe; 
		$this->keyModified["shared_with_me"] = 1; 

	}

	public  function getCreatedByMe()
	{
		return $this->createdByMe; 

	}

	public  function setCreatedByMe(string $createdByMe)
	{
		$this->createdByMe=$createdByMe; 
		$this->keyModified["created_by_me"] = 1; 

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
