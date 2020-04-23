<?php 
namespace com\zoho\crm\api\bulkread;

use com\zoho\crm\api\util\commonapihandler;

 class BulkReadOperations
{
	public  function getBulkReadJobDetails(string $jobId)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/bulk/v2/read/"); 
		$apiPath=$apiPath.(strval($jobId)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(BulkReadResponse::class, "application/json"); 

	}

	public  function downloadResult(string $jobId)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/bulk/v2/read/"); 
		$apiPath=$apiPath.(strval($jobId)); 
		$apiPath=$apiPath.("/result"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(FileBodyWrapper::class, "application/json"); 

	}

	public  function createBulkReadJob()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/bulk/v2/read"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}
} 
