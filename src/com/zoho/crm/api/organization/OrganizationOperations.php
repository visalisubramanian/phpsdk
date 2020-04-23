<?php 
namespace com\zoho\crm\api\organization;

use com\zoho\crm\api\util\commonapihandler;

 class OrganizationOperations
{
	public  function getOrganization()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/org"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}
} 
