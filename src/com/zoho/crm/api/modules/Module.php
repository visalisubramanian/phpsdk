<?php 
namespace com\zoho\crm\api\modules;

use com\zoho\crm\api\util\model;

 class Module implements Model
{
	private  $id;
	private  $apiName;
	private  $moduleName;
	private  $convertable;
	private  $editable;
	private  $deletable;
	private  $webLink;
	private  $singularLabel;
	private  $modifiedTime;
	private  $viewable;
	private  $apiSupported;
	private  $createable;
	private  $pluralLabel;
	private  $generatedType;
	private  $modifiedBy;
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

	public  function getApiName()
	{
		return $this->apiName; 

	}

	public  function setApiName(string $apiName)
	{
		$this->apiName=$apiName; 
		$this->keyModified["api_name"] = 1; 

	}

	public  function getModuleName()
	{
		return $this->moduleName; 

	}

	public  function setModuleName(string $moduleName)
	{
		$this->moduleName=$moduleName; 
		$this->keyModified["module_name"] = 1; 

	}

	public  function getConvertable()
	{
		return $this->convertable; 

	}

	public  function setConvertable(Boolean $convertable)
	{
		$this->convertable=$convertable; 
		$this->keyModified["convertable"] = 1; 

	}

	public  function getEditable()
	{
		return $this->editable; 

	}

	public  function setEditable(Boolean $editable)
	{
		$this->editable=$editable; 
		$this->keyModified["editable"] = 1; 

	}

	public  function getDeletable()
	{
		return $this->deletable; 

	}

	public  function setDeletable(Boolean $deletable)
	{
		$this->deletable=$deletable; 
		$this->keyModified["deletable"] = 1; 

	}

	public  function getWebLink()
	{
		return $this->webLink; 

	}

	public  function setWebLink(string $webLink)
	{
		$this->webLink=$webLink; 
		$this->keyModified["web_link"] = 1; 

	}

	public  function getSingularLabel()
	{
		return $this->singularLabel; 

	}

	public  function setSingularLabel(string $singularLabel)
	{
		$this->singularLabel=$singularLabel; 
		$this->keyModified["singular_label"] = 1; 

	}

	public  function getModifiedTime()
	{
		return $this->modifiedTime; 

	}

	public  function setModifiedTime(\DateTime $modifiedTime)
	{
		$this->modifiedTime=$modifiedTime; 
		$this->keyModified["modified_time"] = 1; 

	}

	public  function getViewable()
	{
		return $this->viewable; 

	}

	public  function setViewable(Boolean $viewable)
	{
		$this->viewable=$viewable; 
		$this->keyModified["viewable"] = 1; 

	}

	public  function getApiSupported()
	{
		return $this->apiSupported; 

	}

	public  function setApiSupported(Boolean $apiSupported)
	{
		$this->apiSupported=$apiSupported; 
		$this->keyModified["api_supported"] = 1; 

	}

	public  function getCreateable()
	{
		return $this->createable; 

	}

	public  function setCreateable(Boolean $createable)
	{
		$this->createable=$createable; 
		$this->keyModified["createable"] = 1; 

	}

	public  function getPluralLabel()
	{
		return $this->pluralLabel; 

	}

	public  function setPluralLabel(string $pluralLabel)
	{
		$this->pluralLabel=$pluralLabel; 
		$this->keyModified["plural_label"] = 1; 

	}

	public  function getGeneratedType()
	{
		return $this->generatedType; 

	}

	public  function setGeneratedType(string $generatedType)
	{
		$this->generatedType=$generatedType; 
		$this->keyModified["generated_type"] = 1; 

	}

	public  function getModifiedBy()
	{
		return $this->modifiedBy; 

	}

	public  function setModifiedBy(User $modifiedBy)
	{
		$this->modifiedBy=$modifiedBy; 
		$this->keyModified["modified_by"] = 1; 

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
