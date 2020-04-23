<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\util\model;

 class ConvertBody implements Model
{
	private  $overwrite;
	private  $notifyLeadOwner;
	private  $notifyNewEntityOwner;
	private  $accounts;
	private  $contacts;
	private  $assignTo;
	private  $deals;
	private  $keyModified=array();

	public  function getOverwrite()
	{
		return $this->overwrite; 

	}

	public  function setOverwrite(Boolean $overwrite)
	{
		$this->overwrite=$overwrite; 
		$this->keyModified["overwrite"] = 1; 

	}

	public  function getNotifyLeadOwner()
	{
		return $this->notifyLeadOwner; 

	}

	public  function setNotifyLeadOwner(Boolean $notifyLeadOwner)
	{
		$this->notifyLeadOwner=$notifyLeadOwner; 
		$this->keyModified["notify_lead_owner"] = 1; 

	}

	public  function getNotifyNewEntityOwner()
	{
		return $this->notifyNewEntityOwner; 

	}

	public  function setNotifyNewEntityOwner(Boolean $notifyNewEntityOwner)
	{
		$this->notifyNewEntityOwner=$notifyNewEntityOwner; 
		$this->keyModified["notify_new_entity_owner"] = 1; 

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

	public  function getContacts()
	{
		return $this->contacts; 

	}

	public  function setContacts(string $contacts)
	{
		$this->contacts=$contacts; 
		$this->keyModified["Contacts"] = 1; 

	}

	public  function getAssignTo()
	{
		return $this->assignTo; 

	}

	public  function setAssignTo(string $assignTo)
	{
		$this->assignTo=$assignTo; 
		$this->keyModified["assign_to"] = 1; 

	}

	public  function getDeals()
	{
		return $this->deals; 

	}

	public  function setDeals(Record $deals)
	{
		$this->deals=$deals; 
		$this->keyModified["Deals"] = 1; 

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
