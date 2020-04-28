<?php 
namespace com\zoho\crm\api\modules;

use com\zoho\crm\api\customview\customview;
use com\zoho\crm\api\profile\profile;
use com\zoho\crm\api\users\user;
use com\zoho\crm\api\util\model;

 class Module implements Model
{
	private  $id;
	private  $apiName;
	private  $moduleName;
	private  $convertable;
	private  $editable;
	private  $deletable;
	private  $webLink;
	private  $singularLabel;
	private  $modifiedTime;
	private  $viewable;
	private  $apiSupported;
	private  $createable;
	private  $pluralLabel;
	private  $generatedType;
	private  $modifiedBy;
	private  $globalSearchSupported;
	private  $presenceSubMenu;
	private  $triggersSupported;
	private  $feedsRequired;
	private  $filterSupported;
	private  $scoringSupported;
	private  $webformSupported;
	private  $kanbanView;
	private  $kanbanViewSupported;
	private  $showAsTab;
	private  $filterStatus;
	private  $quickCreate;
	private  $emailtemplateSupport;
	private  $inventoryTemplateSupported;
	private  $description;
	private  $displayField;
	private  $visibility;
	private  $businessCardFieldLimit;
	private  $perPage;
	private  $sequenceNumber;
	private  $profiles;
	private  $customView;
	private  $relatedListProperties;
	private  $$properties;
	private  $searchLayoutFields;
	private  $parentModule;
	private  $territory;
	private  $arguments;
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

	public  function getApiName()
	{
		return $this->apiName; 

	}

	public  function setApiName(string $apiName)
	{
		$this->apiName=$apiName; 
		$this->keyModified["api_name"] = 1; 

	}

	public  function getModuleName()
	{
		return $this->moduleName; 

	}

	public  function setModuleName(string $moduleName)
	{
		$this->moduleName=$moduleName; 
		$this->keyModified["module_name"] = 1; 

	}

	public  function getConvertable()
	{
		return $this->convertable; 

	}

	public  function setConvertable(Boolean $convertable)
	{
		$this->convertable=$convertable; 
		$this->keyModified["convertable"] = 1; 

	}

	public  function getEditable()
	{
		return $this->editable; 

	}

	public  function setEditable(Boolean $editable)
	{
		$this->editable=$editable; 
		$this->keyModified["editable"] = 1; 

	}

	public  function getDeletable()
	{
		return $this->deletable; 

	}

	public  function setDeletable(Boolean $deletable)
	{
		$this->deletable=$deletable; 
		$this->keyModified["deletable"] = 1; 

	}

	public  function getWebLink()
	{
		return $this->webLink; 

	}

	public  function setWebLink(string $webLink)
	{
		$this->webLink=$webLink; 
		$this->keyModified["web_link"] = 1; 

	}

	public  function getSingularLabel()
	{
		return $this->singularLabel; 

	}

	public  function setSingularLabel(string $singularLabel)
	{
		$this->singularLabel=$singularLabel; 
		$this->keyModified["singular_label"] = 1; 

	}

	public  function getModifiedTime()
	{
		return $this->modifiedTime; 

	}

	public  function setModifiedTime(\DateTime $modifiedTime)
	{
		$this->modifiedTime=$modifiedTime; 
		$this->keyModified["modified_time"] = 1; 

	}

	public  function getViewable()
	{
		return $this->viewable; 

	}

	public  function setViewable(Boolean $viewable)
	{
		$this->viewable=$viewable; 
		$this->keyModified["viewable"] = 1; 

	}

	public  function getApiSupported()
	{
		return $this->apiSupported; 

	}

	public  function setApiSupported(Boolean $apiSupported)
	{
		$this->apiSupported=$apiSupported; 
		$this->keyModified["api_supported"] = 1; 

	}

	public  function getCreateable()
	{
		return $this->createable; 

	}

	public  function setCreateable(Boolean $createable)
	{
		$this->createable=$createable; 
		$this->keyModified["createable"] = 1; 

	}

	public  function getPluralLabel()
	{
		return $this->pluralLabel; 

	}

	public  function setPluralLabel(string $pluralLabel)
	{
		$this->pluralLabel=$pluralLabel; 
		$this->keyModified["plural_label"] = 1; 

	}

	public  function getGeneratedType()
	{
		return $this->generatedType; 

	}

	public  function setGeneratedType(string $generatedType)
	{
		$this->generatedType=$generatedType; 
		$this->keyModified["generated_type"] = 1; 

	}

	public  function getModifiedBy()
	{
		return $this->modifiedBy; 

	}

	public  function setModifiedBy(User $modifiedBy)
	{
		$this->modifiedBy=$modifiedBy; 
		$this->keyModified["modified_by"] = 1; 

	}

	public  function getGlobalSearchSupported()
	{
		return $this->globalSearchSupported; 

	}

	public  function setGlobalSearchSupported(Boolean $globalSearchSupported)
	{
		$this->globalSearchSupported=$globalSearchSupported; 
		$this->keyModified["global_search_supported"] = 1; 

	}

	public  function getPresenceSubMenu()
	{
		return $this->presenceSubMenu; 

	}

	public  function setPresenceSubMenu(Boolean $presenceSubMenu)
	{
		$this->presenceSubMenu=$presenceSubMenu; 
		$this->keyModified["presence_sub_menu"] = 1; 

	}

	public  function getTriggersSupported()
	{
		return $this->triggersSupported; 

	}

	public  function setTriggersSupported(Boolean $triggersSupported)
	{
		$this->triggersSupported=$triggersSupported; 
		$this->keyModified["triggers_supported"] = 1; 

	}

	public  function getFeedsRequired()
	{
		return $this->feedsRequired; 

	}

	public  function setFeedsRequired(Boolean $feedsRequired)
	{
		$this->feedsRequired=$feedsRequired; 
		$this->keyModified["feeds_required"] = 1; 

	}

	public  function getFilterSupported()
	{
		return $this->filterSupported; 

	}

	public  function setFilterSupported(Boolean $filterSupported)
	{
		$this->filterSupported=$filterSupported; 
		$this->keyModified["filter_supported"] = 1; 

	}

	public  function getScoringSupported()
	{
		return $this->scoringSupported; 

	}

	public  function setScoringSupported(Boolean $scoringSupported)
	{
		$this->scoringSupported=$scoringSupported; 
		$this->keyModified["scoring_supported"] = 1; 

	}

	public  function getWebformSupported()
	{
		return $this->webformSupported; 

	}

	public  function setWebformSupported(Boolean $webformSupported)
	{
		$this->webformSupported=$webformSupported; 
		$this->keyModified["webform_supported"] = 1; 

	}

	public  function getKanbanView()
	{
		return $this->kanbanView; 

	}

	public  function setKanbanView(Boolean $kanbanView)
	{
		$this->kanbanView=$kanbanView; 
		$this->keyModified["kanban_view"] = 1; 

	}

	public  function getKanbanViewSupported()
	{
		return $this->kanbanViewSupported; 

	}

	public  function setKanbanViewSupported(Boolean $kanbanViewSupported)
	{
		$this->kanbanViewSupported=$kanbanViewSupported; 
		$this->keyModified["kanban_view_supported"] = 1; 

	}

	public  function getShowAsTab()
	{
		return $this->showAsTab; 

	}

	public  function setShowAsTab(Boolean $showAsTab)
	{
		$this->showAsTab=$showAsTab; 
		$this->keyModified["show_as_tab"] = 1; 

	}

	public  function getFilterStatus()
	{
		return $this->filterStatus; 

	}

	public  function setFilterStatus(Boolean $filterStatus)
	{
		$this->filterStatus=$filterStatus; 
		$this->keyModified["filter_status"] = 1; 

	}

	public  function getQuickCreate()
	{
		return $this->quickCreate; 

	}

	public  function setQuickCreate(Boolean $quickCreate)
	{
		$this->quickCreate=$quickCreate; 
		$this->keyModified["quick_create"] = 1; 

	}

	public  function getEmailtemplateSupport()
	{
		return $this->emailtemplateSupport; 

	}

	public  function setEmailtemplateSupport(Boolean $emailtemplateSupport)
	{
		$this->emailtemplateSupport=$emailtemplateSupport; 
		$this->keyModified["emailTemplate_support"] = 1; 

	}

	public  function getInventoryTemplateSupported()
	{
		return $this->inventoryTemplateSupported; 

	}

	public  function setInventoryTemplateSupported(Boolean $inventoryTemplateSupported)
	{
		$this->inventoryTemplateSupported=$inventoryTemplateSupported; 
		$this->keyModified["inventory_template_supported"] = 1; 

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

	public  function getDisplayField()
	{
		return $this->displayField; 

	}

	public  function setDisplayField(string $displayField)
	{
		$this->displayField=$displayField; 
		$this->keyModified["display_field"] = 1; 

	}

	public  function getVisibility()
	{
		return $this->visibility; 

	}

	public  function setVisibility(int $visibility)
	{
		$this->visibility=$visibility; 
		$this->keyModified["visibility"] = 1; 

	}

	public  function getBusinessCardFieldLimit()
	{
		return $this->businessCardFieldLimit; 

	}

	public  function setBusinessCardFieldLimit(int $businessCardFieldLimit)
	{
		$this->businessCardFieldLimit=$businessCardFieldLimit; 
		$this->keyModified["business_card_field_limit"] = 1; 

	}

	public  function getPerPage()
	{
		return $this->perPage; 

	}

	public  function setPerPage(int $perPage)
	{
		$this->perPage=$perPage; 
		$this->keyModified["per_page"] = 1; 

	}

	public  function getSequenceNumber()
	{
		return $this->sequenceNumber; 

	}

	public  function setSequenceNumber(int $sequenceNumber)
	{
		$this->sequenceNumber=$sequenceNumber; 
		$this->keyModified["sequence_number"] = 1; 

	}

	public  function getProfiles()
	{
		return $this->profiles; 

	}

	public  function setProfiles(array $profiles)
	{
		$this->profiles=$profiles; 
		$this->keyModified["profiles"] = 1; 

	}

	public  function getCustomView()
	{
		return $this->customView; 

	}

	public  function setCustomView(CustomView $customView)
	{
		$this->customView=$customView; 
		$this->keyModified["custom_view"] = 1; 

	}

	public  function getRelatedListProperties()
	{
		return $this->relatedListProperties; 

	}

	public  function setRelatedListProperties(RelatedListProperties $relatedListProperties)
	{
		$this->relatedListProperties=$relatedListProperties; 
		$this->keyModified["related_list_properties"] = 1; 

	}

	public  function get$properties()
	{
		return $this->$properties; 

	}

	public  function set$properties(array $$properties)
	{
		$this->$properties=$$properties; 
		$this->keyModified["$properties"] = 1; 

	}

	public  function getSearchLayoutFields()
	{
		return $this->searchLayoutFields; 

	}

	public  function setSearchLayoutFields(array $searchLayoutFields)
	{
		$this->searchLayoutFields=$searchLayoutFields; 
		$this->keyModified["search_layout_fields"] = 1; 

	}

	public  function getParentModule()
	{
		return $this->parentModule; 

	}

	public  function setParentModule(ParentModule $parentModule)
	{
		$this->parentModule=$parentModule; 
		$this->keyModified["parent_module"] = 1; 

	}

	public  function getTerritory()
	{
		return $this->territory; 

	}

	public  function setTerritory(Territory $territory)
	{
		$this->territory=$territory; 
		$this->keyModified["territory"] = 1; 

	}

	public  function getArguments()
	{
		return $this->arguments; 

	}

	public  function setArguments(array $arguments)
	{
		$this->arguments=$arguments; 
		$this->keyModified["arguments"] = 1; 

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
