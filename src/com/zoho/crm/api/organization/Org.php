<?php 
namespace com\zoho\crm\api\organization;

use com\zoho\crm\api\util\model;

 class Org implements Model
{
	private  $id;
	private  $country;
	private  $photoId;
	private  $city;
	private  $description;
	private  $mcStatus;
	private  $gappsEnabled;
	private  $translationEnabled;
	private  $street;
	private  $alias;
	private  $currency;
	private  $state;
	private  $fax;
	private  $employeeCount;
	private  $zip;
	private  $website;
	private  $currencySymbol;
	private  $mobile;
	private  $currencyLocale;
	private  $primaryZuid;
	private  $ziaPortalId;
	private  $timeZone;
	private  $zgid;
	private  $countryCode;
	private  $phone;
	private  $companyName;
	private  $privacySettings;
	private  $primaryEmail;
	private  $isoCode;
	private  $licenseDetails;
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

	public  function getPhotoId()
	{
		return $this->photoId; 

	}

	public  function setPhotoId(string $photoId)
	{
		$this->photoId=$photoId; 
		$this->keyModified["photo_id"] = 1; 

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

	public  function getDescription()
	{
		return $this->description; 

	}

	public  function setDescription(string $description)
	{
		$this->description=$description; 
		$this->keyModified["description"] = 1; 

	}

	public  function getMcStatus()
	{
		return $this->mcStatus; 

	}

	public  function setMcStatus(Boolean $mcStatus)
	{
		$this->mcStatus=$mcStatus; 
		$this->keyModified["mc_status"] = 1; 

	}

	public  function getGappsEnabled()
	{
		return $this->gappsEnabled; 

	}

	public  function setGappsEnabled(Boolean $gappsEnabled)
	{
		$this->gappsEnabled=$gappsEnabled; 
		$this->keyModified["gapps_enabled"] = 1; 

	}

	public  function getTranslationEnabled()
	{
		return $this->translationEnabled; 

	}

	public  function setTranslationEnabled(Boolean $translationEnabled)
	{
		$this->translationEnabled=$translationEnabled; 
		$this->keyModified["translation_enabled"] = 1; 

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

	public  function getCurrency()
	{
		return $this->currency; 

	}

	public  function setCurrency(string $currency)
	{
		$this->currency=$currency; 
		$this->keyModified["currency"] = 1; 

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

	public  function getFax()
	{
		return $this->fax; 

	}

	public  function setFax(string $fax)
	{
		$this->fax=$fax; 
		$this->keyModified["fax"] = 1; 

	}

	public  function getEmployeeCount()
	{
		return $this->employeeCount; 

	}

	public  function setEmployeeCount(string $employeeCount)
	{
		$this->employeeCount=$employeeCount; 
		$this->keyModified["employee_count"] = 1; 

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

	public  function getWebsite()
	{
		return $this->website; 

	}

	public  function setWebsite(string $website)
	{
		$this->website=$website; 
		$this->keyModified["website"] = 1; 

	}

	public  function getCurrencySymbol()
	{
		return $this->currencySymbol; 

	}

	public  function setCurrencySymbol(string $currencySymbol)
	{
		$this->currencySymbol=$currencySymbol; 
		$this->keyModified["currency_symbol"] = 1; 

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

	public  function getCurrencyLocale()
	{
		return $this->currencyLocale; 

	}

	public  function setCurrencyLocale(string $currencyLocale)
	{
		$this->currencyLocale=$currencyLocale; 
		$this->keyModified["currency_locale"] = 1; 

	}

	public  function getPrimaryZuid()
	{
		return $this->primaryZuid; 

	}

	public  function setPrimaryZuid(string $primaryZuid)
	{
		$this->primaryZuid=$primaryZuid; 
		$this->keyModified["primary_zuid"] = 1; 

	}

	public  function getZiaPortalId()
	{
		return $this->ziaPortalId; 

	}

	public  function setZiaPortalId(string $ziaPortalId)
	{
		$this->ziaPortalId=$ziaPortalId; 
		$this->keyModified["zia_portal_id"] = 1; 

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

	public  function getZgid()
	{
		return $this->zgid; 

	}

	public  function setZgid(string $zgid)
	{
		$this->zgid=$zgid; 
		$this->keyModified["zgid"] = 1; 

	}

	public  function getCountryCode()
	{
		return $this->countryCode; 

	}

	public  function setCountryCode(string $countryCode)
	{
		$this->countryCode=$countryCode; 
		$this->keyModified["country_code"] = 1; 

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

	public  function getCompanyName()
	{
		return $this->companyName; 

	}

	public  function setCompanyName(string $companyName)
	{
		$this->companyName=$companyName; 
		$this->keyModified["company_name"] = 1; 

	}

	public  function getPrivacySettings()
	{
		return $this->privacySettings; 

	}

	public  function setPrivacySettings(Boolean $privacySettings)
	{
		$this->privacySettings=$privacySettings; 
		$this->keyModified["privacy_settings"] = 1; 

	}

	public  function getPrimaryEmail()
	{
		return $this->primaryEmail; 

	}

	public  function setPrimaryEmail(string $primaryEmail)
	{
		$this->primaryEmail=$primaryEmail; 
		$this->keyModified["primary_email"] = 1; 

	}

	public  function getIsoCode()
	{
		return $this->isoCode; 

	}

	public  function setIsoCode(string $isoCode)
	{
		$this->isoCode=$isoCode; 
		$this->keyModified["iso_code"] = 1; 

	}

	public  function getLicenseDetails()
	{
		return $this->licenseDetails; 

	}

	public  function setLicenseDetails(array $licenseDetails)
	{
		$this->licenseDetails=$licenseDetails; 
		$this->keyModified["license_details"] = 1; 

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
