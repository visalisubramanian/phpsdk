<?php 
namespace com\zoho\crm\api\bulkwrite;

use com\zoho\crm\api\util\model;

 class CallBack implements Model
{
	private  $url;
	private  $post;
	private  $keyModified=array();

	public  function getUrl()
	{
		return $this->url; 

	}

	public  function setUrl(string $url)
	{
		$this->url=$url; 
		$this->keyModified["url"] = 1; 

	}

	public  function getPost()
	{
		return $this->post; 

	}

	public  function setPost(string $post)
	{
		$this->post=$post; 
		$this->keyModified["post"] = 1; 

	}

	public  function isKeyModified(string $key)
	{
		return $this->keyModified[$key]; 

	}

	public  function setKeyModified(int $modification, string $key)
	{
		$this->keyModified[$key] = $modification; 

	}
} 
