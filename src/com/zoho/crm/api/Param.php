<?php
namespace com\zoho\crm\api;

/**
 * This class representing the HTTP parameter name.
 */
class Param
{
   private $name = null;
   
   /**
    * Creates an Param class instance with the specified parameter name.
    * @param string $name A string containing the parameter name.
    */
   function __construct($name)
   {
       $this->name = $name;
   }
   
   /**
    * This is a getter method to get parameter name.
    * @return string A string representing the parameter name.
    */
   public function getName()
   {
       return $this->name;
   }
}