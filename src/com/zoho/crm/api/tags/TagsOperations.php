<?php 
namespace com\zoho\crm\api\tags;

use com\zoho\crm\api\param;
use com\zoho\crm\api\parametermap;
use com\zoho\crm\api\util\commonapihandler;

 class TagsOperations
{
	private  $tagNames;
	private  $moduleApiName;

	public function __Construct(string $tagNames, string $moduleApiName)
	{
		$this->tagNames=$tagNames; 
		$this->moduleApiName=$moduleApiName; 

	}

	public  function getTags(ParameterMap $paramInstance)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/tags"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->setParam($paramInstance); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function createTags(ResponseWrapper $request, ParameterMap $paramInstance)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/tags"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->setParam($paramInstance); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function updateTags(BodyWrapper $request, ParameterMap $paramInstance)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/tags"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->setParam($paramInstance); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function getTag(ParameterMap $paramInstance, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/tags/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->setParam($paramInstance); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function createTag(BodyWrapper $request, ParameterMap $paramInstance, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/tags/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->setParam($paramInstance); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function updateTag(BodyWrapper $request, ParameterMap $paramInstance, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/tags/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("PUT"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->setParam($paramInstance); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function deleteTag(string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/tags/"); 
		$apiPath=$apiPath.(strval($id)); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("DELETE"); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function mergeTags(MergeWrapper $request, string $id)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/settings/tags/"); 
		$apiPath=$apiPath.(strval($id)); 
		$apiPath=$apiPath.("/actions/merge"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("GET"); 
		$handlerInstance->setContentType("application/json"); 
		$handlerInstance->setRequest($request); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(ResponseWrapper::class, "application/json"); 

	}

	public  function addTags(string $recordId)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($recordId)); 
		$apiPath=$apiPath.("/actions/add_tags"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(SuccessResponse::class, "application/json"); 

	}

	public  function deleteTags(string $recordId)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/"); 
		$apiPath=$apiPath.(strval($recordId)); 
		$apiPath=$apiPath.("/actions/remove_tags"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(SuccessResponse::class, "application/json"); 

	}

	public  function addTags(ParameterMap $paramInstance)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/actions/add_tags"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setParam($paramInstance); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(SuccessResponse::class, "application/json"); 

	}

	public  function deleteTags(ParameterMap $paramInstance)
	{
		$handlerInstance=new CommonAPIHandler(); 
		$apiPath=""; 
		$apiPath=$apiPath.("/crm/v2/"); 
		$apiPath=$apiPath.(strval($this->moduleApiName)); 
		$apiPath=$apiPath.("/actions/remove_tags"); 
		$handlerInstance->setAPIPath($apiPath); 
		$handlerInstance->setHttpMethod("POST"); 
		$handlerInstance->setParam($paramInstance); 
		$handlerInstance->addParam("tag_names", $this->tagNames); 
		return $handlerInstance->apiCall(SuccessResponse::class, "application/json"); 

	}
} 
 class GetTagsParam
{
	public static final function module()
	{
		return new Param("module"); 

	}
	public static final function myTags()
	{
		return new Param("my_tags"); 

	}

}

 class CreateTagsParam
{
	public static final function module()
	{
		return new Param("module"); 

	}

}

 class UpdateTagsParam
{
	public static final function module()
	{
		return new Param("module"); 

	}

}

 class GetTagParam
{
	public static final function module()
	{
		return new Param("module"); 

	}

}

 class CreateTagParam
{
	public static final function module()
	{
		return new Param("module"); 

	}

}

 class UpdateTagParam
{
	public static final function module()
	{
		return new Param("module"); 

	}

}

 class AddTagsParam
{
	public static final function ids()
	{
		return new Param("ids"); 

	}

}

 class DeleteTagsParam
{
	public static final function ids()
	{
		return new Param("ids"); 

	}

}
