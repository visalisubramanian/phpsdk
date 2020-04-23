<?php 
namespace com\zoho\crm\api\contactroles;

use com\zoho\crm\api\util\model;

 class ActionWrapper implements Model
{
	private  $contactRoles;
	private  $keyModified=array();

	public  function getContactRoles()
	{
		return $this->contactRoles; 

	}

	public  function setContactRoles(array $contactRoles)
	{
		$this->contactRoles=$contactRoles; 
		$this->keyModified["contact_roles"] = 1; 

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
