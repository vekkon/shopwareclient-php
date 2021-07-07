<?php
/**
 * OrderManagementApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Admin API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.4.9999999.9999999-dev
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.26
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * OrderManagementApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderManagementApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation orderDeliveryStateTransition
     *
     * Transition an order delivery to a new state
     *
     * @param  string $order_delivery_id Identifier of the order delivery. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody2 $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function orderDeliveryStateTransition($order_delivery_id, $transition, $body = null)
    {
        $this->orderDeliveryStateTransitionWithHttpInfo($order_delivery_id, $transition, $body);
    }

    /**
     * Operation orderDeliveryStateTransitionWithHttpInfo
     *
     * Transition an order delivery to a new state
     *
     * @param  string $order_delivery_id Identifier of the order delivery. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody2 $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function orderDeliveryStateTransitionWithHttpInfo($order_delivery_id, $transition, $body = null)
    {
        $returnType = '';
        $request = $this->orderDeliveryStateTransitionRequest($order_delivery_id, $transition, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation orderDeliveryStateTransitionAsync
     *
     * Transition an order delivery to a new state
     *
     * @param  string $order_delivery_id Identifier of the order delivery. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody2 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderDeliveryStateTransitionAsync($order_delivery_id, $transition, $body = null)
    {
        return $this->orderDeliveryStateTransitionAsyncWithHttpInfo($order_delivery_id, $transition, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation orderDeliveryStateTransitionAsyncWithHttpInfo
     *
     * Transition an order delivery to a new state
     *
     * @param  string $order_delivery_id Identifier of the order delivery. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody2 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderDeliveryStateTransitionAsyncWithHttpInfo($order_delivery_id, $transition, $body = null)
    {
        $returnType = '';
        $request = $this->orderDeliveryStateTransitionRequest($order_delivery_id, $transition, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'orderDeliveryStateTransition'
     *
     * @param  string $order_delivery_id Identifier of the order delivery. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition which is not possible, you will get an error that lists possible transition for the actual state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody2 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function orderDeliveryStateTransitionRequest($order_delivery_id, $transition, $body = null)
    {
        // verify the required parameter 'order_delivery_id' is set
        if ($order_delivery_id === null || (is_array($order_delivery_id) && count($order_delivery_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_delivery_id when calling orderDeliveryStateTransition'
            );
        }
        // verify the required parameter 'transition' is set
        if ($transition === null || (is_array($transition) && count($transition) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transition when calling orderDeliveryStateTransition'
            );
        }

        $resourcePath = '/_action/order_delivery/{orderDeliveryId}/state/{transition}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_delivery_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderDeliveryId' . '}',
                ObjectSerializer::toPathValue($order_delivery_id),
                $resourcePath
            );
        }
        // path params
        if ($transition !== null) {
            $resourcePath = str_replace(
                '{' . 'transition' . '}',
                ObjectSerializer::toPathValue($transition),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation orderStateTransition
     *
     * Transition an order to a new state
     *
     * @param  string $order_id Identifier of the order. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function orderStateTransition($order_id, $transition, $body = null)
    {
        $this->orderStateTransitionWithHttpInfo($order_id, $transition, $body);
    }

    /**
     * Operation orderStateTransitionWithHttpInfo
     *
     * Transition an order to a new state
     *
     * @param  string $order_id Identifier of the order. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function orderStateTransitionWithHttpInfo($order_id, $transition, $body = null)
    {
        $returnType = '';
        $request = $this->orderStateTransitionRequest($order_id, $transition, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation orderStateTransitionAsync
     *
     * Transition an order to a new state
     *
     * @param  string $order_id Identifier of the order. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderStateTransitionAsync($order_id, $transition, $body = null)
    {
        return $this->orderStateTransitionAsyncWithHttpInfo($order_id, $transition, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation orderStateTransitionAsyncWithHttpInfo
     *
     * Transition an order to a new state
     *
     * @param  string $order_id Identifier of the order. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderStateTransitionAsyncWithHttpInfo($order_id, $transition, $body = null)
    {
        $returnType = '';
        $request = $this->orderStateTransitionRequest($order_id, $transition, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'orderStateTransition'
     *
     * @param  string $order_id Identifier of the order. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function orderStateTransitionRequest($order_id, $transition, $body = null)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null || (is_array($order_id) && count($order_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_id when calling orderStateTransition'
            );
        }
        // verify the required parameter 'transition' is set
        if ($transition === null || (is_array($transition) && count($transition) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transition when calling orderStateTransition'
            );
        }

        $resourcePath = '/_action/order/{orderId}/state/{transition}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderId' . '}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }
        // path params
        if ($transition !== null) {
            $resourcePath = str_replace(
                '{' . 'transition' . '}',
                ObjectSerializer::toPathValue($transition),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation orderTransactionStateTransition
     *
     * Transition an order transaction to a new state
     *
     * @param  string $order_transaction_id Identifier of the order transaction. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody1 $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function orderTransactionStateTransition($order_transaction_id, $transition, $body = null)
    {
        $this->orderTransactionStateTransitionWithHttpInfo($order_transaction_id, $transition, $body);
    }

    /**
     * Operation orderTransactionStateTransitionWithHttpInfo
     *
     * Transition an order transaction to a new state
     *
     * @param  string $order_transaction_id Identifier of the order transaction. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody1 $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function orderTransactionStateTransitionWithHttpInfo($order_transaction_id, $transition, $body = null)
    {
        $returnType = '';
        $request = $this->orderTransactionStateTransitionRequest($order_transaction_id, $transition, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation orderTransactionStateTransitionAsync
     *
     * Transition an order transaction to a new state
     *
     * @param  string $order_transaction_id Identifier of the order transaction. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody1 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderTransactionStateTransitionAsync($order_transaction_id, $transition, $body = null)
    {
        return $this->orderTransactionStateTransitionAsyncWithHttpInfo($order_transaction_id, $transition, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation orderTransactionStateTransitionAsyncWithHttpInfo
     *
     * Transition an order transaction to a new state
     *
     * @param  string $order_transaction_id Identifier of the order transaction. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody1 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function orderTransactionStateTransitionAsyncWithHttpInfo($order_transaction_id, $transition, $body = null)
    {
        $returnType = '';
        $request = $this->orderTransactionStateTransitionRequest($order_transaction_id, $transition, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'orderTransactionStateTransition'
     *
     * @param  string $order_transaction_id Identifier of the order transaction. (required)
     * @param  string $transition The &#x60;action_name&#x60; of the &#x60;state_machine_transition&#x60;. For example &#x60;process&#x60; if the order state should change from open to in progress.  Note: If you choose a transition that is not available, you will get an error that lists possible transitions for the current state. (required)
     * @param  \Swagger\Client\Model\StateTransitionBody1 $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function orderTransactionStateTransitionRequest($order_transaction_id, $transition, $body = null)
    {
        // verify the required parameter 'order_transaction_id' is set
        if ($order_transaction_id === null || (is_array($order_transaction_id) && count($order_transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order_transaction_id when calling orderTransactionStateTransition'
            );
        }
        // verify the required parameter 'transition' is set
        if ($transition === null || (is_array($transition) && count($transition) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transition when calling orderTransactionStateTransition'
            );
        }

        $resourcePath = '/_action/order_transaction/{orderTransactionId}/state/{transition}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order_transaction_id !== null) {
            $resourcePath = str_replace(
                '{' . 'orderTransactionId' . '}',
                ObjectSerializer::toPathValue($order_transaction_id),
                $resourcePath
            );
        }
        // path params
        if ($transition !== null) {
            $resourcePath = str_replace(
                '{' . 'transition' . '}',
                ObjectSerializer::toPathValue($transition),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
