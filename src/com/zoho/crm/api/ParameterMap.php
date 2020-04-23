<?php
namespace com\zoho\crm\api;

/**
 * This class representing the HTTP parameter name and value.
 */
class ParameterMap
{
    private $map = array();
    
    /**
     * This is a getter method to get parameter map.
     * @return array A array representing the API response parameters.
     */
    public function getParameterMap()
    {
        return $this->map;
    }
    
    /**
     * This method to add parameter name and value.
     * @param Param $param A Param class instance.
     * @param object $value A object containing the parameter value.
     */
    public function add(Param $param ,$value) 
    {
        $key = $param->getName();
        
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