<?php 
namespace com\zoho\crm\api\layouts;

use com\zoho\crm\api\util\commonapihandler;

 class LayoutsOperations
{
	private  $module;

	public function __Construct(string $module)
	{
		$this->module=$module; 

	}

	public  function getLayouts()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/layouts"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->addParam("module", $this->module); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function getLayout(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/layouts/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->addParam("module", $this->module); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}
} 
