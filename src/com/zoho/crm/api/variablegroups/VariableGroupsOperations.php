<?php 
namespace com\zoho\crm\api\variablegroups;

use com\zoho\crm\api\util\commonapihandler;

 class VariableGroupsOperations
{
	public  function getVariableGroups()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/variable_groups"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function getVariableGroupById(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/variable_groups/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function getVariableGroupByApiName(string $apiName)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/variable_groups/"); 
		$apiPath=$apiPath.(strval($apiName)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}
} 
