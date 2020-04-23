<?php
namespace com\zoho\crm\api;

/**
 * This class represents the HTTP header name and value.
 */
class HeaderMap
{

    private $map = array();

    /**
     * This is a getter method to get header map.
     * @return array A array representing the API response headers.
     */
    public function getHeaderMap()
    {
        return $this->map;
    }

    /**
     * This method is to add header name and value.
     * @param Header $header A Header class instance.
     * @param object $value A object containing the header value.
     */
    public function add(Header $header, $value)
    {
        $key = $header->getName();
        
        if (! isset($this->map[$key]))
        {
            $this->map[$key] = array(
                $value
            );
        }
        else
        {
            $valArray = $this->map[$key];
            
            array_push($valArray, $value);
            
            $this->map[$key] = $valArray;
        }
    }
}