<?php 
namespace com\zoho\crm\api\taxes;

use com\zoho\crm\api\util\model;

 class BodyWrapper implements Model
{
	private  $taxes;
	private  $keyModified=array();

	public  function getTaxes()
	{
		return $this->taxes; 

	}

	public  function setTaxes(array $taxes)
	{
		$this->taxes=$taxes; 
		$this->keyModified["taxes"] = 1; 

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
