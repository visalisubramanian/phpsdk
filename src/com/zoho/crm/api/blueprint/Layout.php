<?php 
namespace com\zoho\crm\api\blueprint;

use com\zoho\crm\api\util\model;

 class Layout implements Model
{
	private  $view;
	private  $edit;
	private  $create;
	private  $quickCreate;
	private  $keyModified=array();

	public  function getView()
	{
		return $this->view; 

	}

	public  function setView(Boolean $view)
	{
		$this->view=$view; 
		$this->keyModified["view"] = 1; 

	}

	public  function getEdit()
	{
		return $this->edit; 

	}

	public  function setEdit(Boolean $edit)
	{
		$this->edit=$edit; 
		$this->keyModified["edit"] = 1; 

	}

	public  function getCreate()
	{
		return $this->create; 

	}

	public  function setCreate(Boolean $create)
	{
		$this->create=$create; 
		$this->keyModified["create"] = 1; 

	}

	public  function getQuickCreate()
	{
		return $this->quickCreate; 

	}

	public  function setQuickCreate(Boolean $quickCreate)
	{
		$this->quickCreate=$quickCreate; 
		$this->keyModified["quick_create"] = 1; 

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
