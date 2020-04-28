<?php 
namespace com\zoho\crm\api\customview;

use com\zoho\crm\api\util\commonapihandler;

 class CustomViewOperations
{
	private  $module;

	public function __Construct(string $module)
	{
		$this->module=$module; 

	}

	public  function getCustomViews()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/custom_views"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->addParam("module", $this->module); 
		return $handlerInstance->apiCall(ResponseHandler::class, "application/json"); 

	}

	public  function getCustomView(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/custom_views/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->addParam("module", $this->module); 
		return $handlerInstance->apiCall(ResponseHandler::class, "application/json"); 

	}
} 
