<?php 
namespace com\zoho\crm\api\blueprint;

use com\zoho\crm\api\util\model;

 class TabTheme implements Model
{
	private  $fontColor;
	private  $background;
	private  $keyModified=array();

	public  function getFontColor()
	{
		return $this->fontColor; 

	}

	public  function setFontColor(string $fontColor)
	{
		$this->fontColor=$fontColor; 
		$this->keyModified["font_color"] = 1; 

	}

	public  function getBackground()
	{
		return $this->background; 

	}

	public  function setBackground(string $background)
	{
		$this->background=$background; 
		$this->keyModified["background"] = 1; 

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
