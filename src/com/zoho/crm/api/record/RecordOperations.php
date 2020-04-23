<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\param;
use com\zoho\crm\api\parametermap;
use com\zoho\crm\api\util\commonapihandler;
use com\zoho\crm\api\util\utility;

 class RecordOperations
{
	private  $moduleApiName;
	private  $id;

	public function __Construct(string $moduleApiName, string $id)
	{
		$this->moduleApiName=$moduleApiName; 
		$this->id=$id; 

	}

	public  function getRecord()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function updateRecord(BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function deleteRecord(Boolean $wfTrigger)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function getRecords()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function createRecords(BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function updateRecords(BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function deleteRecords(string $ids, Boolean $wfTrigger)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function updateRecords(UpsertBodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/upsert"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(UpsertActionWrapper::class, "application/json"); 

	}

	public  function getDeletedRecords()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/deleted"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function searchRecords(ParameterMap $paramInstance)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/search"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->setParam($paramInstance); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function convertLead(ConvertBodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Leads/"); 
		$apiPath=$apiPath.(strval($this->id)); 
		$apiPath=$apiPath.("/actions/convert"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ConvertResponseWrapper::class, "application/json"); 

	}

	public  function getPhoto()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("https://www.zohoapis.com/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->id)); 
		$apiPath=$apiPath.("/photo"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(FileBodyWrapper::class, "application/x-download"); 

	}

	public  function createPhoto(FileBodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("https://www.zohoapis.com/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->id)); 
		$apiPath=$apiPath.("/photo"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("multipart/form-data"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function deletePhoto()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("https://www.zohoapis.com/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->id)); 
		$apiPath=$apiPath.("/photo"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}
} 
 class SearchRecordsParam
{
	public static final function criteria()
	{
		return new Param("criteria"); 

	}
	public static final function email()
	{
		return new Param("email"); 

	}
	public static final function phone()
	{
		return new Param("phone"); 

	}
	public static final function word()
	{
		return new Param("word"); 

	}
	public static final function converted()
	{
		return new Param("converted"); 

	}
	public static final function approved()
	{
		return new Param("approved"); 

	}
	public static final function page()
	{
		return new Param("page"); 

	}
	public static final function perPage()
	{
		return new Param("per_page"); 

	}

}
