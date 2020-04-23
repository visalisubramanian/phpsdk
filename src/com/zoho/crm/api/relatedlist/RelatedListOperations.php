<?php 
namespace com\zoho\crm\api\relatedlist;

use com\zoho\crm\api\parametermap;
use com\zoho\crm\api\util\commonapihandler;

 class RelatedListOperations
{
	private  $moduleApiName;

	public function __Construct(string $moduleApiName)
	{
		$this->moduleApiName=$moduleApiName; 

	}

	public  function getRelatedList(ParameterMap $paramInstance)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/related_lists"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->setParam($paramInstance); 
		$handlerInstance->addParam("module_api_name", $this->moduleApiName); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function getRelatedList(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/related_lists/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->addParam("module_api_name", $this->moduleApiName); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}
} 
 class GetRelatedListParam
{

}
