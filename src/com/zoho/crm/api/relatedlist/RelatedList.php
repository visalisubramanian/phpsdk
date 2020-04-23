<?php 
namespace com\zoho\crm\api\relatedlist;

use com\zoho\crm\api\util\model;

 class RelatedList implements Model
{
	private  $id;
	private  $sequenceNumber;
	private  $displayLabel;
	private  $apiName;
	private  $module;
	private  $name;
	private  $action;
	private  $href;
	private  $type;
	private  $keyModified=array();

	public  function getId()
	{
		return $this->id; 

	}

	public  function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified["id"] = 1; 

	}

	public  function getSequenceNumber()
	{
		return $this->sequenceNumber; 

	}

	public  function setSequenceNumber(string $sequenceNumber)
	{
		$this->sequenceNumber=$sequenceNumber; 
		$this->keyModified["sequence_number"] = 1; 

	}

	public  function getDisplayLabel()
	{
		return $this->displayLabel; 

	}

	public  function setDisplayLabel(string $displayLabel)
	{
		$this->displayLabel=$displayLabel; 
		$this->keyModified["display_label"] = 1; 

	}

	public  function getApiName()
	{
		return $this->apiName; 

	}

	public  function setApiName(string $apiName)
	{
		$this->apiName=$apiName; 
		$this->keyModified["api_name"] = 1; 

	}

	public  function getModule()
	{
		return $this->module; 

	}

	public  function setModule(string $module)
	{
		$this->module=$module; 
		$this->keyModified["module"] = 1; 

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

	public  function getAction()
	{
		return $this->action; 

	}

	public  function setAction(string $action)
	{
		$this->action=$action; 
		$this->keyModified["action"] = 1; 

	}

	public  function getHref()
	{
		return $this->href; 

	}

	public  function setHref(string $href)
	{
		$this->href=$href; 
		$this->keyModified["href"] = 1; 

	}

	public  function getType()
	{
		return $this->type; 

	}

	public  function setType(string $type)
	{
		$this->type=$type; 
		$this->keyModified["type"] = 1; 

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
