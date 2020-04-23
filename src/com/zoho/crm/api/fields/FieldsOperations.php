<?php 
namespace com\zoho\crm\api\fields;

use com\zoho\crm\api\util\commonapihandler;

 class FieldsOperations
{
	private  $module;

	public function __Construct(string $module)
	{
		$this->module=$module; 

	}

	public  function getFields()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/fields"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->addParam("module", $this->module); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function getField(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/fields/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->addParam("module", $this->module); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}
} 
