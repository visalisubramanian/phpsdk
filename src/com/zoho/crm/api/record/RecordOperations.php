<?php 
namespace com\zoho\crm\api\record;

use com\zoho\crm\api\param;
use com\zoho\crm\api\parametermap;
use com\zoho\crm\api\util\commonapihandler;
use com\zoho\crm\api\util\utility;

 class RecordOperations
{
	public  function getRecord(string $moduleApiName, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function updateRecord(BodyWrapper $request, string $moduleApiName, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function deleteRecord(string $moduleApiName, string $id, Boolean $wfTrigger)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function getRecords(string $moduleApiName)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function createRecords(BodyWrapper $request, string $moduleApiName)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function updateRecords(BodyWrapper $request, string $moduleApiName)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function deleteRecords(string $moduleApiName, string $ids, Boolean $wfTrigger)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function updateRecords(UpsertBodyWrapper $request, string $moduleApiName)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$apiPath=$apiPath.("/upsert"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(UpsertActionWrapper::class, "application/json"); 

	}

	public  function getDeletedRecords(string $moduleApiName)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$apiPath=$apiPath.("/deleted"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function searchRecords(ParameterMap $paramInstance, string $moduleApiName)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$apiPath=$apiPath.("/search"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->setParam($paramInstance); 
		Utility::getFields($moduleApiName); 
		$handlerInstance->setModuleAPIName($moduleApiName); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function convertLead(ConvertBodyWrapper $request, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Leads/"); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.("/actions/convert"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ConvertResponseWrapper::class, "application/json"); 

	}

	public  function getPhoto(string $moduleApiName, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.("/photo"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(FileBodyWrapper::class, "application/x-download"); 

	}

	public  function uploadPhoto(FileBodyWrapper $request, string $moduleApiName, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.("/photo"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("multipart/form-data"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function deletePhoto(string $moduleApiName, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($id)); 
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
