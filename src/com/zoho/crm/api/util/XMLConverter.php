<?php
namespace com\zoho\crm\api\util;

/**
 * This class processes the API response object to the POJO object and POJO object to an XML object.
 */
class XMLConverter extends Converter
{

    public function __construct($commonAPIHandler)
    {
        parent::__construct($commonAPIHandler);
    }
    
    public function getResponse($response, $pack)
    {}

    public function formRequest($requestObject, $pack)
    {}

    public function getWrappedResponse($responseObject, $namespace)
    {}

    public function appendToRequest(&$curlOptions, $requestBody)
    {}
}
