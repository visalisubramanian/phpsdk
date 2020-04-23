<?php
namespace com\zoho\crm\api\util;

use com\zoho\crm\api\Fields\FieldsOperations;
use com\zoho\crm\api\Initializer;

/**
 * This class handles module field details.
 */
class Utility
{
    /**
     * This method to fetch field details of the current module for the current user and store the result in a JSON file.
     * @param string $moduleApiName A string containing the CRM module API name. 
     */
    public static function getFields($moduleApiName)
    {
        $fileName = Initializer::getInitializer()->getUser()->getEmail();
    
        $fileName = explode("@",$fileName)[0] . Initializer::getInitializer()->getEnvironment()->getUrl();
    
        $input = unpack('C*', utf8_encode($fileName));
    
        $str = base64_encode(implode(array_map("chr", $input)));
        
        $recordFieldDetailsPath = "D:\\PHPSDKGitLab\\zohocrm-php-sdk\\src\\".$str.".json";
        
        if (file_exists($recordFieldDetailsPath))
        {
            $recordFieldDetailJson = json_decode(file_get_contents($recordFieldDetailsPath), true);
        
            if (isset($recordFieldDetailJson[$moduleApiName]))
            {
                return;
            }
            else
            {
                $recordFieldDetailJson[$moduleApiName] = Utility::getFieldDetails($moduleApiName);
            
                file_put_contents($recordFieldDetailsPath, json_encode($recordFieldDetailJson));
            }
        }
        else
        {
            $recordFieldDetailJson = array();
        
            $recordFieldDetailJson[$moduleApiName] = Utility::getFieldDetails($moduleApiName);
            
            file_put_contents($recordFieldDetailsPath, json_encode($recordFieldDetailJson));
        }
        
    }

    /**
     * This method to get module field data from Zoho CRM. 
     * @param string $moduleApiname A string containing the CRM module API name.
     * @return array[] A array[] representing the Zoho CRM module field details.
     */
    public static function getFieldDetails($moduleApiname)
    {
        $fieldOperation = new FieldsOperations($moduleApiname);
        
        $fields = $fieldOperation->getFields()->getObject()->getFields();
        
        $fieldsDetails = array();
        
        foreach ($fields as $field)
        {
            $fieldDetail = array();
            
            $fieldDetail = Utility::setDataType($fieldDetail, $field);
            
            $fieldsDetails[$field->getApiName()] = $fieldDetail;
        }

        return $fieldsDetails;
    }

    public static function setDataType($fieldDetail, $field)
    {
        $dataType = $field->getDataType();
       
        $structureName = null;
        
        $keyName = $field->getApiName();
        
        switch ($dataType)
        {
            case "text":
            case "textarea":
            case "picklist":
            case "email":
            case "website":
            case "phone":
                $dataType = "java.util.string";
                
                break;
            case "fileupload":
            case "profileimage":
                $dataType = "File";
                
                break;
            case "boolean":
                $dataType = "java.util.boolean";
                
                break;
            case "ownerlookup":
                $structureName = "com\\zoho\\crm\\api\\record\\User";
                
                $dataType = "com\\zoho\\crm\\api\\record\\Record";
                
                break;
            case "currency":
            case "double":
                $dataType = "java.util.double";
                
                break;
            case "integer":
                $dataType = "java.util.integer";
                
                break;
            case "datetime":
                $dataType = "LocalDateTime";
                
                break;
            case "date":
                $dataType = "LocalDate";
                
                break;
            case "multiselectpicklist":
                $dataType = "ArrayList<String>";
                
                break;
            case "bigint":
                $dataType = "java.util.long";
                
                break;
            case "lookup":
                $structureName = "com\\zoho\\crm\\api\\record\\User";
                
                $dataType = "com\\zoho\\crm\\api\\record\\Record";
                
                break;
            case "multiselectlookup":
                $dataType = "ArrayList<Record>";
                
                break;
        }
        
        $fieldDetail[Constants::NAME] = $keyName;
        
        $fieldDetail[Constants::TYPE] = $dataType;
        
        if ($structureName !== null)
        {
            $fieldDetail[Constants::STRUCTURE_NAME] = $structureName;
        }
        
        return $fieldDetail;
    }
}