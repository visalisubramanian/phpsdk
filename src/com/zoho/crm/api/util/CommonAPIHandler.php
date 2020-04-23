<?php
namespace com\zoho\crm\api\util;

use com\zoho\crm\api\HeaderMap;
use com\zoho\crm\api\Initializer;
use com\zoho\crm\api\ParameterMap;
use com\zoho\crm\api\Header;
use com\zoho\crm\api\Param;

/**
 * This class is to process the API request and its response.
 * Construct the objects that are to be sent as parameters or in the request body with the API.
 * The Request parameter, header and body objects are constructed here.
 * Process the response JSON and converts it to relevant objects in the library.
 */
class CommonAPIHandler
{

    private $apiPath;

    private $param;

    private $header;

    private $request;

    private $httpMethod;

    private $moduleAPIName;

    private $contentType;

    public function __construct()
    {
        $this->header = new HeaderMap();

        $this->param = new ParameterMap();
    }
    
    /**
     * This is a setter method to set an API request content type.
     * @param string $contentType A string containing the API request content type.
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
    }

    /**
     * This is a setter method to set the API request URL.
     * @param string $apiPath A string containing the API request URL.
     */
    public function setAPIPath($apiPath)
    {
        $this->apiPath = $apiPath;
    }

    /**
     * This method is to add an API request parameter.
     * @param string $paramName A string containing the API request parameter name.
     * @param object $paramValue A object containing the API request parameter value.
     */
    public function addParam($paramName, $paramValue)
    {
        $this->param->add(new Param($paramName), $paramValue);
    }
    
    /**
     * This method to add an API request header.
     * @param string $headerName A string containing the API request header name.
     * @param string $headerValue A object containing the API request header value.
     */
    public function addHeader($headerName, $headerValue)
    {
        $this->header->add(new Header($headerName), $headerValue);
    }
    
    /**
     * This is a setter method to set the API request parameter map.
     * @param ParameterMap $param A ParameterMap class instance containing the API request parameter.
     */
    public function setParam($param)
    {
        $this->param = $param;
    }

    /**
     * This is a getter method to get the Zoho CRM module API name.
     * @return string A String representing the Zoho CRM module API name.
     */
    public function getModuleAPIName()
    {
        return $this->moduleAPIName;
    }
    
    /**
     * This is a setter method to set the Zoho CRM module API name.
     * @param string $moduleAPIName A string containing the Zoho CRM module API name.
     */
    public function setModuleAPIName($moduleAPIName)
    {
        $this->moduleAPIName = $moduleAPIName;
    }
    
    /**
     * This is a setter method to set the API request header map.
     * @param HeaderMap $header A HeaderMap class instance containing the API request header.
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * This is a setter method to set the API request body object.
     * @param object $request A object containing the API request body object.
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }
    
    /**
     * This is a setter method to set the HTTP API request method.
     * @param string $httpMethod A string containing the HTTP API request method.
     */
    public function setHttpMethod($httpMethod)
    {
        $this->httpMethod = $httpMethod;
    }

    /**
     * This method is used in constructing API request and response details. To make the Zoho CRM API calls.
     * @param string $className A string containing the method return type.
     * @param string $encodeType A String containing the expected API response content type. 
     * @return \com\zoho\crm\api\util\APIResponse A APIResponse representing the Zoho CRM API response instance or null. 
     */
    public function apiCall($className, $encodeType)
    {
        $connector = new APIHTTPConnector();

        $connector->setUrl(Initializer::getInitializer()->getEnvironment()->getUrl() . $this->apiPath);
        
        $connector->setRequestMethod($this->httpMethod);
        
        if ($this->header != null && count($this->header->getHeaderMap()) > 0)
        {
            $connector->setHeaders($this->header->getHeaderMap());
        }
       
        if ($this->param != null && count($this->param->getParameterMap()) > 0)
        {
            $connector->setParams($this->param->getParameterMap());
        }
        
        Initializer::getInitializer()->getToken()->authenticate($connector);
        
        $converterInstance = $this->getConverterClassInstance(strtolower($this->contentType));

        if ($this->httpMethod == Constants::REQUEST_METHOD_POST || $this->httpMethod == Constants::REQUEST_METHOD_PUT) 
        {
            $request = $converterInstance->formRequest($this->request, get_class($this->request), 1);
            
            $connector->setRequestBody($request);
        }

        $connector->addHeader(Constants::ZOHO_SDK, php_uname('s') . "/" . php_uname('r') . " php/" . phpversion() . ":2.0.1");
        
        $response = $connector->fireRequest($converterInstance);

        $statusCode = $response[Constants::HTTP_CODE];

        $headerMap = $response[Constants::HEADERS];
        
        $contentType = $headerMap[Constants::CONTENT_TYPE];

        if (strpos($contentType, ';') != false)
        {
            $splitArray = explode(';', $contentType);

            $contentType = $splitArray[0];
        }

        $converterInstance = $this->getConverterClassInstance($contentType);

        $returnObject = $converterInstance->getWrappedResponse($response[Constants::RESPONSE], $className);
 
        return new APIResponse($headerMap, $statusCode, $returnObject);
    }
    
    /**
     * This method is used to get a Converter class instance.
     * @param string $encodeType A string containing the API response content type.
     * @return NULL|\com\zoho\crm\api\util\Converter A Converter class instance.
     */
    public function getConverterClassInstance($encodeType)
    {
        $converterInstance = null;

        switch ($encodeType) 
        {
            case "application/json":
            case "text/plain":
                $converterInstance = new JSONConverter($this);

                break;

            case "application/xml":
            case "text/xml":
                
                $converterInstance = new XMLConverter($this);
                
                break;
            
            case "multipart/form-data":
                
                $converterInstance = new FormDataConverter($this);
                
                break;

            case "application/x-download":
            case "image/png":
            case "image/jpeg":
            case "application/zip":
            case "image/gif":
            case "text/csv":
            case "image/tiff":

                $converterInstance = new Downloader($this);

                break;

        }

        return $converterInstance;
    }
}