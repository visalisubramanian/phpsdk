<?php 
namespace com\zoho\crm\api\attachments;

use com\zoho\crm\api\param;
use com\zoho\crm\api\parametermap;
use com\zoho\crm\api\util\commonapihandler;

 class AttachmentsOperations
{
	private  $recordId;
	private  $moduleApiName;

	public function __Construct(string $recordId, string $moduleApiName)
	{
		$this->recordId=$recordId; 
		$this->moduleApiName=$moduleApiName; 

	}

	public  function downloadAttachment(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->recordId)); 
		$apiPath=$apiPath.("/Attachments/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseHandler::class, "application/x-download"); 

	}

	public  function deleteAttachment(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->recordId)); 
		$apiPath=$apiPath.("/Attachments/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		return $handlerInstance->apiCall(ActionHandler::class, "application/json"); 

	}

	public  function getAttachments()
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->recordId)); 
		$apiPath=$apiPath.("/Attachments"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		return $handlerInstance->apiCall(ResponseHandler::class, "application/json"); 

	}

	public  function uploadAttachment(FileBodyWrapper $request)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->recordId)); 
		$apiPath=$apiPath.("/Attachments"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("multipart/form-data"); 
		$handlerInstance->setRequest($request); 
		return $handlerInstance->apiCall(ActionHandler::class, "application/json"); 

	}

	public  function uploadLinkAttachment(ParameterMap $paramInstance)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($this->recordId)); 
		$apiPath=$apiPath.("/Attachments"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setParam($paramInstance); 
		return $handlerInstance->apiCall(ActionHandler::class, "application/json"); 

	}
} 
 class UploadLinkAttachmentParam
{
	public static final function attachmentUrl()
	{
		return new Param("attachmentUrl"); 

	}

}
