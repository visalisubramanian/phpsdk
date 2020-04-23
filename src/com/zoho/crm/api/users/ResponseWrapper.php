<?php 
namespace com\zoho\crm\api\users;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $users;
	private  $keyModified=array();

	public  function getUsers()
	{
		return $this->users; 

	}

	public  function setUsers(array $users)
	{
		$this->users=$users; 
		$this->keyModified["users"] = 1; 

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
