<?php 
namespace com\zoho\crm\api\bulkwrite;

use com\zoho\crm\api\header;
use com\zoho\crm\api\headermap;
use com\zoho\crm\api\util\commonapihandler;

 class BulkWriteOperations
{
	public  function uploadFile(FileBodyWrapper $request, HeaderMap $headerInstance)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/upload"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("multipart/form-data"); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->setHeader($headerInstance); 
		return $handlerInstance->apiCall(Object::class, "application/json"); 

	}

	public  function createBulkWriteJob(RequestWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/bulk/v2/write"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(Object::class, "application/json"); 

	}

	public  function getBulkWriteJobDetails(string $jobId)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/bulk/v2/write/"); 
		$apiPath=$apiPath.(strval($jobId)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(BulkWriteResponse::class, "application/json"); 

	}
} 
 class UploadFileHeader
{
	public static final function feature()
	{
		return new Header("feature"); 

	}
	public static final function XCRMORG()
	{
		return new Header("X-CRM-ORG"); 

	}

}
