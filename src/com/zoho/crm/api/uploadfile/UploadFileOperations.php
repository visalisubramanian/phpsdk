<?php 
namespace com\zoho\crm\api\uploadfile;

use com\zoho\crm\api\util\commonapihandler;

 class UploadFileOperations
{
	private  $xCrmOrg;
	private  $feature;

	public function __Construct(string $xCrmOrg, string $feature)
	{
		$this->xCrmOrg=$xCrmOrg; 
		$this->feature=$feature; 

	}

	public  function uploadFile(FileBodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/upload"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("multipart/form-data"); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->addHeader("X-CRM-ORG", $this->xCrmOrg); 
		$handlerInstance->addHeader("feature", $this->feature); 
		return $handlerInstance->apiCall(Object::class, "application/json"); 

	}
} 
