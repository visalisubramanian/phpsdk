<?php 
namespace com\zoho\crm\api\contactroles;

use com\zoho\crm\api\util\commonapihandler;

 class ContactRolesOperations
{
	public  function getContactRoles()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Contacts/roles"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function createContactRoles(BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Contacts/roles"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function updateContactRoles(BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Contacts/roles"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function getContactRole(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Contacts/roles/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function updateContactRole(BodyWrapper $request, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Contacts/roles/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function deleteContactRole(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Contacts/roles/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}
} 
