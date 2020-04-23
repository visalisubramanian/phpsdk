<?php 
namespace com\zoho\crm\api\bulkwrite;

use com\zoho\crm\api\util\model;

 class Resource implements Model
{
	private  $type;
	private  $module;
	private  $fileId;
	private  $ignoreEmpty;
	private  $findBy;
	private  $fieldMappings;
	private  $file;
	private  $keyModified=array();

	public  function getType()
	{
		return $this->type; 

	}

	public  function setType(string $type)
	{
		$this->type=$type; 
		$this->keyModified["type"] = 1; 

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

	public  function getFileId()
	{
		return $this->fileId; 

	}

	public  function setFileId(string $fileId)
	{
		$this->fileId=$fileId; 
		$this->keyModified["file_id"] = 1; 

	}

	public  function getIgnoreEmpty()
	{
		return $this->ignoreEmpty; 

	}

	public  function setIgnoreEmpty(Boolean $ignoreEmpty)
	{
		$this->ignoreEmpty=$ignoreEmpty; 
		$this->keyModified["ignore_empty"] = 1; 

	}

	public  function getFindBy()
	{
		return $this->findBy; 

	}

	public  function setFindBy(string $findBy)
	{
		$this->findBy=$findBy; 
		$this->keyModified["find_by"] = 1; 

	}

	public  function getFieldMappings()
	{
		return $this->fieldMappings; 

	}

	public  function setFieldMappings(array $fieldMappings)
	{
		$this->fieldMappings=$fieldMappings; 
		$this->keyModified["field_mappings"] = 1; 

	}

	public  function getFile()
	{
		return $this->file; 

	}

	public  function setFile(FileData $file)
	{
		$this->file=$file; 
		$this->keyModified["file"] = 1; 

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
