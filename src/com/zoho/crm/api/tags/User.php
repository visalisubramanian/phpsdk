<?php 
namespace com\zoho\crm\api\tags;

use com\zoho\crm\api\util\model;

 class User implements Model
{
	private  $id;
	private  $country;
	private  $city;
	private  $signature;
	private  $nameFormat;
	private  $language;
	private  $locale;
	private  $personalAccount;
	private  $defaultTabGroup;
	private  $street;
	private  $alias;
	private  $state;
	private  $countryLocale;
	private  $firstName;
	private  $email;
	private  $zip;
	private  $decimalSeparator;
	private  $website;
	private  $timeFormat;
	private  $mobile;
	private  $lastName;
	private  $timeZone;
	private  $zuid;
	private  $confirm;
	private  $fullName;
	private  $phone;
	private  $dob;
	private  $dateFormat;
	private  $status;
	private  $profile;
	private  $role;
	private  $territories;
	private  $theme;
	private  $keyModified=array();

	public  function getId()
	{
		return $this->id; 

	}

	public  function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified["id"] = 1; 

	}

	public  function getCountry()
	{
		return $this->country; 

	}

	public  function setCountry(string $country)
	{
		$this->country=$country; 
		$this->keyModified["country"] = 1; 

	}

	public  function getCity()
	{
		return $this->city; 

	}

	public  function setCity(string $city)
	{
		$this->city=$city; 
		$this->keyModified["city"] = 1; 

	}

	public  function getSignature()
	{
		return $this->signature; 

	}

	public  function setSignature(string $signature)
	{
		$this->signature=$signature; 
		$this->keyModified["signature"] = 1; 

	}

	public  function getNameFormat()
	{
		return $this->nameFormat; 

	}

	public  function setNameFormat(string $nameFormat)
	{
		$this->nameFormat=$nameFormat; 
		$this->keyModified["name_format"] = 1; 

	}

	public  function getLanguage()
	{
		return $this->language; 

	}

	public  function setLanguage(string $language)
	{
		$this->language=$language; 
		$this->keyModified["language"] = 1; 

	}

	public  function getLocale()
	{
		return $this->locale; 

	}

	public  function setLocale(string $locale)
	{
		$this->locale=$locale; 
		$this->keyModified["locale"] = 1; 

	}

	public  function getPersonalAccount()
	{
		return $this->personalAccount; 

	}

	public  function setPersonalAccount(Boolean $personalAccount)
	{
		$this->personalAccount=$personalAccount; 
		$this->keyModified["personal_account"] = 1; 

	}

	public  function getDefaultTabGroup()
	{
		return $this->defaultTabGroup; 

	}

	public  function setDefaultTabGroup(string $defaultTabGroup)
	{
		$this->defaultTabGroup=$defaultTabGroup; 
		$this->keyModified["default_tab_group"] = 1; 

	}

	public  function getStreet()
	{
		return $this->street; 

	}

	public  function setStreet(string $street)
	{
		$this->street=$street; 
		$this->keyModified["street"] = 1; 

	}

	public  function getAlias()
	{
		return $this->alias; 

	}

	public  function setAlias(string $alias)
	{
		$this->alias=$alias; 
		$this->keyModified["alias"] = 1; 

	}

	public  function getState()
	{
		return $this->state; 

	}

	public  function setState(string $state)
	{
		$this->state=$state; 
		$this->keyModified["state"] = 1; 

	}

	public  function getCountryLocale()
	{
		return $this->countryLocale; 

	}

	public  function setCountryLocale(string $countryLocale)
	{
		$this->countryLocale=$countryLocale; 
		$this->keyModified["country_locale"] = 1; 

	}

	public  function getFirstName()
	{
		return $this->firstName; 

	}

	public  function setFirstName(string $firstName)
	{
		$this->firstName=$firstName; 
		$this->keyModified["first_name"] = 1; 

	}

	public  function getEmail()
	{
		return $this->email; 

	}

	public  function setEmail(string $email)
	{
		$this->email=$email; 
		$this->keyModified["email"] = 1; 

	}

	public  function getZip()
	{
		return $this->zip; 

	}

	public  function setZip(string $zip)
	{
		$this->zip=$zip; 
		$this->keyModified["zip"] = 1; 

	}

	public  function getDecimalSeparator()
	{
		return $this->decimalSeparator; 

	}

	public  function setDecimalSeparator(string $decimalSeparator)
	{
		$this->decimalSeparator=$decimalSeparator; 
		$this->keyModified["decimal_separator"] = 1; 

	}

	public  function getWebsite()
	{
		return $this->website; 

	}

	public  function setWebsite(string $website)
	{
		$this->website=$website; 
		$this->keyModified["website"] = 1; 

	}

	public  function getTimeFormat()
	{
		return $this->timeFormat; 

	}

	public  function setTimeFormat(string $timeFormat)
	{
		$this->timeFormat=$timeFormat; 
		$this->keyModified["time_format"] = 1; 

	}

	public  function getMobile()
	{
		return $this->mobile; 

	}

	public  function setMobile(string $mobile)
	{
		$this->mobile=$mobile; 
		$this->keyModified["mobile"] = 1; 

	}

	public  function getLastName()
	{
		return $this->lastName; 

	}

	public  function setLastName(string $lastName)
	{
		$this->lastName=$lastName; 
		$this->keyModified["last_name"] = 1; 

	}

	public  function getTimeZone()
	{
		return $this->timeZone; 

	}

	public  function setTimeZone(string $timeZone)
	{
		$this->timeZone=$timeZone; 
		$this->keyModified["time_zone"] = 1; 

	}

	public  function getZuid()
	{
		return $this->zuid; 

	}

	public  function setZuid(string $zuid)
	{
		$this->zuid=$zuid; 
		$this->keyModified["zuid"] = 1; 

	}

	public  function getConfirm()
	{
		return $this->confirm; 

	}

	public  function setConfirm(Boolean $confirm)
	{
		$this->confirm=$confirm; 
		$this->keyModified["confirm"] = 1; 

	}

	public  function getFullName()
	{
		return $this->fullName; 

	}

	public  function setFullName(string $fullName)
	{
		$this->fullName=$fullName; 
		$this->keyModified["full_name"] = 1; 

	}

	public  function getPhone()
	{
		return $this->phone; 

	}

	public  function setPhone(string $phone)
	{
		$this->phone=$phone; 
		$this->keyModified["phone"] = 1; 

	}

	public  function getDob()
	{
		return $this->dob; 

	}

	public  function setDob(string $dob)
	{
		$this->dob=$dob; 
		$this->keyModified["dob"] = 1; 

	}

	public  function getDateFormat()
	{
		return $this->dateFormat; 

	}

	public  function setDateFormat(string $dateFormat)
	{
		$this->dateFormat=$dateFormat; 
		$this->keyModified["date_format"] = 1; 

	}

	public  function getStatus()
	{
		return $this->status; 

	}

	public  function setStatus(string $status)
	{
		$this->status=$status; 
		$this->keyModified["status"] = 1; 

	}

	public  function getProfile()
	{
		return $this->profile; 

	}

	public  function setProfile(ProfileInfo $profile)
	{
		$this->profile=$profile; 
		$this->keyModified["profile"] = 1; 

	}

	public  function getRole()
	{
		return $this->role; 

	}

	public  function setRole(ProfileInfo $role)
	{
		$this->role=$role; 
		$this->keyModified["role"] = 1; 

	}

	public  function getTerritories()
	{
		return $this->territories; 

	}

	public  function setTerritories(array $territories)
	{
		$this->territories=$territories; 
		$this->keyModified["territories"] = 1; 

	}

	public  function getTheme()
	{
		return $this->theme; 

	}

	public  function setTheme(Theme $theme)
	{
		$this->theme=$theme; 
		$this->keyModified["theme"] = 1; 

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
