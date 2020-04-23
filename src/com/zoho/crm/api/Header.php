<?php
namespace com\zoho\crm\api;

/**
 * This class represents the HTTP header name.
 */
class Header
{
    private $name = null;
 
    /**
     * Creates an Header class instance with the specified header name.
     * @param string $name A string containing the header name.
     */
    function __construct($name)
    {
        $this->name = $name;
    }
    
    /**
     * This is a getter method to get header name.
     * @return string A string representing the header name.
     */
    public function getName()
    {
        return $this->name;
    }
}