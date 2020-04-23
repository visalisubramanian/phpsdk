<?php 
namespace com\zoho\crm\api\cache;

use com\zoho\crm\api\util\commonapihandler;

 class CacheOperations
{
	private  $projectId;
	private  $segmentId;
	private  $cachekey;

	public function __Construct(string $projectId, string $segmentId, string $cachekey)
	{
		$this->projectId=$projectId; 
		$this->segmentId=$segmentId; 
		$this->cachekey=$cachekey; 

	}

	public  function getCacheKeyValue()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/baas/v1/project/"); 
		$apiPath=$apiPath.(strval($this->projectId)); 
		$apiPath=$apiPath.("/segment/"); 
		$apiPath=$apiPath.(strval($this->segmentId)); 
		$apiPath=$apiPath.("/cache"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->addParam("cacheKey", $this->cachekey); 
		return $handlerInstance->apiCall(SuccessResponse::class, "application/json"); 

	}
} 
