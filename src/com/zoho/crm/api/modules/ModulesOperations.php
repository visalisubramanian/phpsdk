<?php 
namespace com\zoho\crm\api\modules;

use com\zoho\crm\api\util\commonapihandler;

 class ModulesOperations
{
	public  function getModules()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/modules"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function getModule(string $apiName)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/modules/"); 
		$apiPath=$apiPath.(strval($apiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function updateModule(BodyWrapper $request, string $apiName)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/modules/"); 
		$apiPath=$apiPath.(strval($apiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}
} 
