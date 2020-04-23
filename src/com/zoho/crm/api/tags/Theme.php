<?php 
namespace com\zoho\crm\api\tags;

use com\zoho\crm\api\util\model;

 class Theme implements Model
{
	private  $background;
	private  $newBackground;
	private  $screen;
	private  $type;
	private  $normalTab;
	private  $selectedTab;
	private  $keyModified=array();

	public  function getBackground()
	{
		return $this->background; 

	}

	public  function setBackground(string $background)
	{
		$this->background=$background; 
		$this->keyModified["background"] = 1; 

	}

	public  function getNewBackground()
	{
		return $this->newBackground; 

	}

	public  function setNewBackground(string $newBackground)
	{
		$this->newBackground=$newBackground; 
		$this->keyModified["new_background"] = 1; 

	}

	public  function getScreen()
	{
		return $this->screen; 

	}

	public  function setScreen(string $screen)
	{
		$this->screen=$screen; 
		$this->keyModified["screen"] = 1; 

	}

	public  function getType()
	{
		return $this->type; 

	}

	public  function setType(string $type)
	{
		$this->type=$type; 
		$this->keyModified["type"] = 1; 

	}

	public  function getNormalTab()
	{
		return $this->normalTab; 

	}

	public  function setNormalTab(TabTheme $normalTab)
	{
		$this->normalTab=$normalTab; 
		$this->keyModified["normal_tab"] = 1; 

	}

	public  function getSelectedTab()
	{
		return $this->selectedTab; 

	}

	public  function setSelectedTab(TabTheme $selectedTab)
	{
		$this->selectedTab=$selectedTab; 
		$this->keyModified["selected_tab"] = 1; 

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
