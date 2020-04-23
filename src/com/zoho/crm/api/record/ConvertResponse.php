<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\util\model;

 class ConvertResponse implements Model
{
	private  $contacts;
	private  $deals;
	private  $accounts;
	private  $keyModified=array();

	public  function getContacts()
	{
		return $this->contacts; 

	}

	public  function setContacts(string $contacts)
	{
		$this->contacts=$contacts; 
		$this->keyModified["Contacts"] = 1; 

	}

	public  function getDeals()
	{
		return $this->deals; 

	}

	public  function setDeals(string $deals)
	{
		$this->deals=$deals; 
		$this->keyModified["Deals"] = 1; 

	}

	public  function getAccounts()
	{
		return $this->accounts; 

	}

	public  function setAccounts(string $accounts)
	{
		$this->accounts=$accounts; 
		$this->keyModified["Accounts"] = 1; 

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
