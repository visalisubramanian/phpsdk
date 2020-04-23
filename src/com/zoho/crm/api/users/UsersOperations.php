<?php 
namespace com\zoho\crm\api\users;

use com\zoho\crm\api\util\commonapihandler;

 class UsersOperations
{
	public  function getUsers()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/users"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function createUser(BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/users"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function updateUser(BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/users"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function getUser(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/users/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function deleteUser(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/users/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}
} 
