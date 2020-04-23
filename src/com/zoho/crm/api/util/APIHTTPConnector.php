<?php
namespace com\zoho\crm\api\util;

/**
 * This module is to make HTTP connections, trigger the requests and receive the response.
 */
class APIHTTPConnector
{

    private $url = null;

    private $params = array();

    private $headers = array();

    private $requestParamCount = 0;

    private $requestBody;

    private $requestMethod;
    
    /**
     * This is a setter method to set the API URL.
     * @param string $url A string containing the API Request URL.
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * This is a setter method to set the API request method.
     * @param string $requestMethod A string containing the API request method.
     */
    public function setRequestMethod($requestMethod)
    {
        $this->requestMethod = $requestMethod;
    }
    
    /**
     * This is a getter method to get API request headers.
     * @return array A array representing the API request headers.
     */
    public function getHeaders()
    {
        return $this->headers;
    }
    
    /**
     * This is a setter method to set API request headers.
     * @param array $headers A array containing the API request headers.
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }
    
    /**
     * This method to add API request header name and value.
     * @param string $headerName A string containing the API request header name.
     * @param string $headerValue A string containing the API request header value.
     */
    public function addHeader($headerName, $headerValue)
    {
        $this->headers[$headerName] = $headerValue;
    }
    
    /**
     * This is a getter method to get API request parameters.
     * @return array A array representing the API request parameters.
     */
    public function getParams()
    {
        return $this->params;
    }
    
    /**
     * This is a setter method to set API request parameters.
     * @param array $params A array containing the API request parameters.
     */
    public function setParams($params)
    {
        $this->params = $params;
    }
    
    /**
     * This method to add API request param name and value.
     * @param string $paramName A string containing the API request param name.
     * @param string $paramValue A string containing the API request param value.
     */
    public function addParam($paramName, $paramValue)
    {
        $this->params[$paramName] = $paramValue;
    }
    
    /**
     * This is a setter method to set the API request body.
     * @param object $requestBody A Object containing the API request body.
     */
    public function setRequestBody($requestBody)
    {
        $this->requestBody = $requestBody;
    }
    
    /**
     * This method makes a Zoho CRM Rest API requests
     * @param Converter $converterInstance A Converter class instance to call appendToRequest method.
     * @return array| null A array representing the API response.
     */
    public function fireRequest($converterInstance)
    {
        $curl_pointer = curl_init();
        
        $curl_options = array();
        
        if (is_array($this->getParams()) && count(self::getParams()) > 0)
        {
            $this->setQueryParams();
        }
        
        $curl_options[CURLOPT_URL] = $this->url;
        
        $curl_options[CURLOPT_RETURNTRANSFER] = true;
        
        $curl_options[CURLOPT_HEADER] = 1;

        $this->getRequestObject($curl_options);

        if ($this->requestBody != null)
        {
            $converterInstance->appendToRequest($curl_options, $this->requestBody);
        }

        $this->setQueryHeaders($curl_options);

        curl_setopt_array($curl_pointer, $curl_options);
        
        $response = array();
        
        $response[Constants::RESPONSE] = curl_exec($curl_pointer);
        
        $response[Constants::HTTP_CODE] = curl_getinfo($curl_pointer)[Constants::HTTP_CODE];
        
        curl_close($curl_pointer);

        $out = preg_split('/(\r?\n){2}/', $response[Constants::RESPONSE], 2);
        
        $headers = $out[0];
        
        $headersArray = preg_split('/\r?\n/', $headers);
        
        $headersArray = array_map(function($h)
        {
            return preg_split('/:\s{1,}/', $h, 2);
        }, $headersArray);

        $tmp = [];
        
        foreach($headersArray as $h)
        {
            $tmp[strtolower($h[0])] = isset($h[1]) ? $h[1] : $h[0];
        }
        
        $headersArray = $tmp; $tmp = null;
        
        $response[Constants::HEADERS] = $headersArray;
        
        return $response;
    }

    private function getRequestObject(&$curl_options)
    {
        switch ($this->requestMethod)
        {
            case Constants::REQUEST_METHOD_GET:

                $curl_options[CURLOPT_CUSTOMREQUEST] = Constants::REQUEST_METHOD_GET;

                break;
            case Constants::REQUEST_METHOD_DELETE:

                $curl_options[CURLOPT_CUSTOMREQUEST] = Constants::REQUEST_METHOD_DELETE;

                break;
            case Constants::REQUEST_METHOD_POST:

                $curl_options[CURLOPT_CUSTOMREQUEST] = Constants::REQUEST_METHOD_POST;

                $curl_options[CURLOPT_POST] = true;

                break;
            case Constants::REQUEST_METHOD_PUT:

                $curl_options[CURLOPT_CUSTOMREQUEST] = Constants::REQUEST_METHOD_PUT;
        }
    }

    private function setQueryHeaders(&$request)
    {
        $headersArray = array();
        
        if (array_key_exists(CURLOPT_HTTPHEADER, $request))
        {
            $headersArray = $request[CURLOPT_HTTPHEADER];
        }

        $headersMap = $this->headers;

        if ($headersMap != null)
        {
            foreach ($headersMap as $key => $value)
            {
                $headersArray[] = $key . ":" . $value;
            }
        }
        
        $request[CURLOPT_HTTPHEADER] = $headersArray;
    }
    
    private function setQueryParams()
    {
        $params_as_string = "";
        
        foreach ($this->params as $key => $valueArray)
        {
            if (count($valueArray) > 1)
            {
                foreach ($valueArray as $value)
                {
                    $params_as_string = $params_as_string . $key . "=" . urlencode($value) . "&";
                    
                    $this->requestParamCount ++;
                }
            }
            else
            {
                $params_as_string = $key . "=" . urlencode($valueArray);
                
                $this->requestParamCount = 1;
            }
        }
        
        $params_as_string = rtrim($params_as_string, "&");
        
        $params_as_string = str_replace(PHP_EOL, '', $params_as_string);
        
        $this->url = $this->url . "?" . $params_as_string;
    }
}