<?php 
namespace com\zoho\crm\api\blueprint;

use com\zoho\crm\api\util\model;

 class Field implements Model
{
	private  $webhook;
	private  $jsonType;
	private  $displayLabel;
	private  $dataType;
	private  $columnName;
	private  $personalityName;
	private  $id;
	private  $transitionSequence;
	private  $mandatory;
	private  $layouts;
	private  $apiName;
	private  $content;
	private  $systemMandatory;
	private  $crypt;
	private  $fieldLabel;
	private  $tooltip;
	private  $createdSource;
	private  $fieldReadOnly;
	private  $validationRule;
	private  $readOnly;
	private  $associationDetails;
	private  $quickSequenceNumber;
	private  $customField;
	private  $visible;
	private  $length;
	private  $decimalPlace;
	private  $viewType;
	private  $pickListValues;
	private  $multiselectlookup;
	private  $autoNumber;
	private  $keyModified=array();

	public  function getWebhook()
	{
		return $this->webhook; 

	}

	public  function setWebhook(Boolean $webhook)
	{
		$this->webhook=$webhook; 
		$this->keyModified["webhook"] = 1; 

	}

	public  function getJsonType()
	{
		return $this->jsonType; 

	}

	public  function setJsonType(string $jsonType)
	{
		$this->jsonType=$jsonType; 
		$this->keyModified["json_type"] = 1; 

	}

	public  function getDisplayLabel()
	{
		return $this->displayLabel; 

	}

	public  function setDisplayLabel(string $displayLabel)
	{
		$this->displayLabel=$displayLabel; 
		$this->keyModified["display_label"] = 1; 

	}

	public  function getDataType()
	{
		return $this->dataType; 

	}

	public  function setDataType(string $dataType)
	{
		$this->dataType=$dataType; 
		$this->keyModified["data_type"] = 1; 

	}

	public  function getColumnName()
	{
		return $this->columnName; 

	}

	public  function setColumnName(string $columnName)
	{
		$this->columnName=$columnName; 
		$this->keyModified["column_name"] = 1; 

	}

	public  function getPersonalityName()
	{
		return $this->personalityName; 

	}

	public  function setPersonalityName(string $personalityName)
	{
		$this->personalityName=$personalityName; 
		$this->keyModified["personality_name"] = 1; 

	}

	public  function getId()
	{
		return $this->id; 

	}

	public  function setId(string $id)
	{
		$this->id=$id; 
		$this->keyModified["id"] = 1; 

	}

	public  function getTransitionSequence()
	{
		return $this->transitionSequence; 

	}

	public  function setTransitionSequence(int $transitionSequence)
	{
		$this->transitionSequence=$transitionSequence; 
		$this->keyModified["transition_sequence"] = 1; 

	}

	public  function getMandatory()
	{
		return $this->mandatory; 

	}

	public  function setMandatory(Boolean $mandatory)
	{
		$this->mandatory=$mandatory; 
		$this->keyModified["mandatory"] = 1; 

	}

	public  function getLayouts()
	{
		return $this->layouts; 

	}

	public  function setLayouts(array $layouts)
	{
		$this->layouts=$layouts; 
		$this->keyModified["layouts"] = 1; 

	}

	public  function getApiName()
	{
		return $this->apiName; 

	}

	public  function setApiName(string $apiName)
	{
		$this->apiName=$apiName; 
		$this->keyModified["api_name"] = 1; 

	}

	public  function getContent()
	{
		return $this->content; 

	}

	public  function setContent(string $content)
	{
		$this->content=$content; 
		$this->keyModified["content"] = 1; 

	}

	public  function getSystemMandatory()
	{
		return $this->systemMandatory; 

	}

	public  function setSystemMandatory(Boolean $systemMandatory)
	{
		$this->systemMandatory=$systemMandatory; 
		$this->keyModified["system_mandatory"] = 1; 

	}

	public  function getCrypt()
	{
		return $this->crypt; 

	}

	public  function setCrypt(string $crypt)
	{
		$this->crypt=$crypt; 
		$this->keyModified["crypt"] = 1; 

	}

	public  function getFieldLabel()
	{
		return $this->fieldLabel; 

	}

	public  function setFieldLabel(string $fieldLabel)
	{
		$this->fieldLabel=$fieldLabel; 
		$this->keyModified["field_label"] = 1; 

	}

	public  function getTooltip()
	{
		return $this->tooltip; 

	}

	public  function setTooltip(string $tooltip)
	{
		$this->tooltip=$tooltip; 
		$this->keyModified["tooltip"] = 1; 

	}

	public  function getCreatedSource()
	{
		return $this->createdSource; 

	}

	public  function setCreatedSource(string $createdSource)
	{
		$this->createdSource=$createdSource; 
		$this->keyModified["created_source"] = 1; 

	}

	public  function getFieldReadOnly()
	{
		return $this->fieldReadOnly; 

	}

	public  function setFieldReadOnly(Boolean $fieldReadOnly)
	{
		$this->fieldReadOnly=$fieldReadOnly; 
		$this->keyModified["field_read_only"] = 1; 

	}

	public  function getValidationRule()
	{
		return $this->validationRule; 

	}

	public  function setValidationRule(string $validationRule)
	{
		$this->validationRule=$validationRule; 
		$this->keyModified["validation_rule"] = 1; 

	}

	public  function getReadOnly()
	{
		return $this->readOnly; 

	}

	public  function setReadOnly(Boolean $readOnly)
	{
		$this->readOnly=$readOnly; 
		$this->keyModified["read_only"] = 1; 

	}

	public  function getAssociationDetails()
	{
		return $this->associationDetails; 

	}

	public  function setAssociationDetails(string $associationDetails)
	{
		$this->associationDetails=$associationDetails; 
		$this->keyModified["association_details"] = 1; 

	}

	public  function getQuickSequenceNumber()
	{
		return $this->quickSequenceNumber; 

	}

	public  function setQuickSequenceNumber(string $quickSequenceNumber)
	{
		$this->quickSequenceNumber=$quickSequenceNumber; 
		$this->keyModified["quick_sequence_number"] = 1; 

	}

	public  function getCustomField()
	{
		return $this->customField; 

	}

	public  function setCustomField(Boolean $customField)
	{
		$this->customField=$customField; 
		$this->keyModified["custom_field"] = 1; 

	}

	public  function getVisible()
	{
		return $this->visible; 

	}

	public  function setVisible(Boolean $visible)
	{
		$this->visible=$visible; 
		$this->keyModified["visible"] = 1; 

	}

	public  function getLength()
	{
		return $this->length; 

	}

	public  function setLength(int $length)
	{
		$this->length=$length; 
		$this->keyModified["length"] = 1; 

	}

	public  function getDecimalPlace()
	{
		return $this->decimalPlace; 

	}

	public  function setDecimalPlace(string $decimalPlace)
	{
		$this->decimalPlace=$decimalPlace; 
		$this->keyModified["decimal_place"] = 1; 

	}

	public  function getViewType()
	{
		return $this->viewType; 

	}

	public  function setViewType(ViewType $viewType)
	{
		$this->viewType=$viewType; 
		$this->keyModified["view_type"] = 1; 

	}

	public  function getPickListValues()
	{
		return $this->pickListValues; 

	}

	public  function setPickListValues(array $pickListValues)
	{
		$this->pickListValues=$pickListValues; 
		$this->keyModified["pick_list_values"] = 1; 

	}

	public  function getMultiselectlookup()
	{
		return $this->multiselectlookup; 

	}

	public  function setMultiselectlookup(array $multiselectlookup)
	{
		$this->multiselectlookup=$multiselectlookup; 
		$this->keyModified["multiselectlookup"] = 1; 

	}

	public  function getAutoNumber()
	{
		return $this->autoNumber; 

	}

	public  function setAutoNumber(array $autoNumber)
	{
		$this->autoNumber=$autoNumber; 
		$this->keyModified["auto_number"] = 1; 

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
