<?php 
namespace com\zoho\crm\api\blueprint;

use com\zoho\crm\api\util\commonapihandler;

 class BluePrintOperations
{
	private  $moduleApiName;
	private  $recordId;

	public function __Construct(string $moduleApiName, string $recordId)
	{
		$this->moduleApiName=$moduleApiName; 
		$this->recordId=$recordId; 

	}

	public  function getBlueprint()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->recordId)); 
		$apiPath=$apiPath.("/actions/blueprint"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(Object::class, "application/x-download"); 

	}
} 
