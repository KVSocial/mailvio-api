<?php
/**
 * SendersApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailvio API Reference
 *
 * Mailvio provides a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/KVSocial/mailvio-api  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: support@mailvio.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * SendersApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendersApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.mailvio.com/v3');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return SendersApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createSender
     *
     * Create a new sender
     *
     * @param \Swagger\Client\Model\CreateSender $sender sender&#39;s name (optional)
     * @return \Swagger\Client\Model\CreateSenderModel
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createSender($sender = null)
    {
        list($response) = $this->createSenderWithHttpInfo($sender);
        return $response;
    }

    /**
     * Operation createSenderWithHttpInfo
     *
     * Create a new sender
     *
     * @param \Swagger\Client\Model\CreateSender $sender sender&#39;s name (optional)
     * @return Array of \Swagger\Client\Model\CreateSenderModel, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function createSenderWithHttpInfo($sender = null)
    {
        // parse inputs
        $resourcePath = "/senders";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($sender)) {
            $_tempBody = $sender;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\CreateSenderModel',
                '/senders'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\CreateSenderModel', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\CreateSenderModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteSender
     *
     * Delete a sender
     *
     * @param int $sender_id Id of the sender (required)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteSender($sender_id)
    {
        list($response) = $this->deleteSenderWithHttpInfo($sender_id);
        return $response;
    }

    /**
     * Operation deleteSenderWithHttpInfo
     *
     * Delete a sender
     *
     * @param int $sender_id Id of the sender (required)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function deleteSenderWithHttpInfo($sender_id)
    {
        // verify the required parameter 'sender_id' is set
        if ($sender_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sender_id when calling deleteSender');
        }
        // parse inputs
        $resourcePath = "/senders/{senderId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($sender_id !== null) {
            $resourcePath = str_replace(
                "{" . "senderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($sender_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/senders/{senderId}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getIps
     *
     * Return all the dedicated IPs for your account
     *
     * @return \Swagger\Client\Model\GetIps
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getIps()
    {
        list($response) = $this->getIpsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getIpsWithHttpInfo
     *
     * Return all the dedicated IPs for your account
     *
     * @return Array of \Swagger\Client\Model\GetIps, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getIpsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/senders/ips";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetIps',
                '/senders/ips'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetIps', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetIps', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getIpsFromSender
     *
     * Return all the dedicated IPs for a sender
     *
     * @param int $sender_id Id of the sender (required)
     * @return \Swagger\Client\Model\GetIpsFromSender
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getIpsFromSender($sender_id)
    {
        list($response) = $this->getIpsFromSenderWithHttpInfo($sender_id);
        return $response;
    }

    /**
     * Operation getIpsFromSenderWithHttpInfo
     *
     * Return all the dedicated IPs for a sender
     *
     * @param int $sender_id Id of the sender (required)
     * @return Array of \Swagger\Client\Model\GetIpsFromSender, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getIpsFromSenderWithHttpInfo($sender_id)
    {
        // verify the required parameter 'sender_id' is set
        if ($sender_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sender_id when calling getIpsFromSender');
        }
        // parse inputs
        $resourcePath = "/senders/{senderId}/ips";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($sender_id !== null) {
            $resourcePath = str_replace(
                "{" . "senderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($sender_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetIpsFromSender',
                '/senders/{senderId}/ips'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetIpsFromSender', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetIpsFromSender', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSenders
     *
     * Get the list of all your senders
     *
     * @param string $ip Filter your senders for a specific ip (available for dedicated IP usage only) (optional)
     * @param string $domain Filter your senders for a specific domain (optional)
     * @return \Swagger\Client\Model\GetSendersList
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSenders($ip = null, $domain = null)
    {
        list($response) = $this->getSendersWithHttpInfo($ip, $domain);
        return $response;
    }

    /**
     * Operation getSendersWithHttpInfo
     *
     * Get the list of all your senders
     *
     * @param string $ip Filter your senders for a specific ip (available for dedicated IP usage only) (optional)
     * @param string $domain Filter your senders for a specific domain (optional)
     * @return Array of \Swagger\Client\Model\GetSendersList, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSendersWithHttpInfo($ip = null, $domain = null)
    {
        // parse inputs
        $resourcePath = "/senders";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($ip !== null) {
            $queryParams['ip'] = $this->apiClient->getSerializer()->toQueryValue($ip);
        }
        // query params
        if ($domain !== null) {
            $queryParams['domain'] = $this->apiClient->getSerializer()->toQueryValue($domain);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\GetSendersList',
                '/senders'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\GetSendersList', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\GetSendersList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateSender
     *
     * Update a sender
     *
     * @param int $sender_id Id of the sender (required)
     * @param \Swagger\Client\Model\UpdateSender $sender sender&#39;s name (optional)
     * @return void
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateSender($sender_id, $sender = null)
    {
        list($response) = $this->updateSenderWithHttpInfo($sender_id, $sender);
        return $response;
    }

    /**
     * Operation updateSenderWithHttpInfo
     *
     * Update a sender
     *
     * @param int $sender_id Id of the sender (required)
     * @param \Swagger\Client\Model\UpdateSender $sender sender&#39;s name (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function updateSenderWithHttpInfo($sender_id, $sender = null)
    {
        // verify the required parameter 'sender_id' is set
        if ($sender_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sender_id when calling updateSender');
        }
        // parse inputs
        $resourcePath = "/senders/{senderId}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($sender_id !== null) {
            $resourcePath = str_replace(
                "{" . "senderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($sender_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($sender)) {
            $_tempBody = $sender;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/senders/{senderId}'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
