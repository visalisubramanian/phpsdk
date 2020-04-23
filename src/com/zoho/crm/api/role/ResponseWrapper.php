<?php 
namespace com\zoho\crm\api\role;

use com\zoho\crm\api\util\model;

 class ResponseWrapper implements Model
{
	private  $roles;
	private  $keyModified=array();

	public  function getRoles()
	{
		return $this->roles; 

	}

	public  function setRoles(array $roles)
	{
		$this->roles=$roles; 
		$this->keyModified["roles"] = 1; 

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
