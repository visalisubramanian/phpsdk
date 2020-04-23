<?php 
namespace com\zoho\crm\api\notes;

use com\zoho\crm\api\param;
use com\zoho\crm\api\parametermap;
use com\zoho\crm\api\util\commonapihandler;

 class NotesOperations
{
	public  function getNotes(ParameterMap $paramInstance)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Notes"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->setParam($paramInstance); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function createNotes(BodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Notes"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function getNote(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Notes/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function updateNote(BodyWrapper $request, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Notes/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}

	public  function deleteNote(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/Notes/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		return $handlerInstance->apiCall(ActionWrapper::class, "application/json"); 

	}
} 
 class GetNotesParam
{
	public static final function page()
	{
		return new Param("page"); 

	}
	public static final function perPage()
	{
		return new Param("per_page"); 

	}

}
