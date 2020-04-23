<?php 
namespace com\zoho\crm\api\catalystproject;

use com\zoho\crm\api\util\commonapihandler;

 class CatalystProjectOperations
{
	public  function getProjectDetails()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/baas/v1/project"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ReadSuccessResponse::class, "application/json"); 

	}

	public  function createProjectDetails(CatalystProject $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/baas/v1/project"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(SuccessResponse::class, "application/json"); 

	}

	public  function getProjectDetail(string $projectId)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/baas/v1/project/"); 
		$apiPath=$apiPath.(strval($projectId)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(SuccessResponse::class, "application/json"); 

	}

	public  function updateProjectDetail(BodyWrapper $request, string $projectId)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/baas/v1/project/"); 
		$apiPath=$apiPath.(strval($projectId)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(SuccessResponse::class, "application/json"); 

	}

	public  function deleteProjectDetail(string $projectId)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/baas/v1/project/"); 
		$apiPath=$apiPath.(strval($projectId)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		return $handlerInstance->apiCall(ActionResponse::class, "application/json"); 

	}
} 
