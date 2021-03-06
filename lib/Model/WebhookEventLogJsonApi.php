<?php
/**
 * WebhookEventLogJsonApi
 *
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

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * WebhookEventLogJsonApi Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.4.1.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookEventLogJsonApi extends Resource 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookEventLogJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'app_name' => 'string',
'webhook_name' => 'string',
'event_name' => 'string',
'delivery_status' => 'string',
'timestamp' => 'int',
'processing_time' => 'int',
'app_version' => 'string',
'request_content' => 'object',
'response_content' => 'object',
'response_status_code' => 'int',
'response_reason_phrase' => 'string',
'url' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'app_name' => null,
'webhook_name' => null,
'event_name' => null,
'delivery_status' => null,
'timestamp' => 'int64',
'processing_time' => 'int64',
'app_version' => null,
'request_content' => null,
'response_content' => null,
'response_status_code' => 'int64',
'response_reason_phrase' => null,
'url' => null,
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time'    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'app_name' => 'appName',
'webhook_name' => 'webhookName',
'event_name' => 'eventName',
'delivery_status' => 'deliveryStatus',
'timestamp' => 'timestamp',
'processing_time' => 'processingTime',
'app_version' => 'appVersion',
'request_content' => 'requestContent',
'response_content' => 'responseContent',
'response_status_code' => 'responseStatusCode',
'response_reason_phrase' => 'responseReasonPhrase',
'url' => 'url',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'app_name' => 'setAppName',
'webhook_name' => 'setWebhookName',
'event_name' => 'setEventName',
'delivery_status' => 'setDeliveryStatus',
'timestamp' => 'setTimestamp',
'processing_time' => 'setProcessingTime',
'app_version' => 'setAppVersion',
'request_content' => 'setRequestContent',
'response_content' => 'setResponseContent',
'response_status_code' => 'setResponseStatusCode',
'response_reason_phrase' => 'setResponseReasonPhrase',
'url' => 'setUrl',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'app_name' => 'getAppName',
'webhook_name' => 'getWebhookName',
'event_name' => 'getEventName',
'delivery_status' => 'getDeliveryStatus',
'timestamp' => 'getTimestamp',
'processing_time' => 'getProcessingTime',
'app_version' => 'getAppVersion',
'request_content' => 'getRequestContent',
'response_content' => 'getResponseContent',
'response_status_code' => 'getResponseStatusCode',
'response_reason_phrase' => 'getResponseReasonPhrase',
'url' => 'getUrl',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['app_name'] = isset($data['app_name']) ? $data['app_name'] : null;
        $this->container['webhook_name'] = isset($data['webhook_name']) ? $data['webhook_name'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['delivery_status'] = isset($data['delivery_status']) ? $data['delivery_status'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['processing_time'] = isset($data['processing_time']) ? $data['processing_time'] : null;
        $this->container['app_version'] = isset($data['app_version']) ? $data['app_version'] : null;
        $this->container['request_content'] = isset($data['request_content']) ? $data['request_content'] : null;
        $this->container['response_content'] = isset($data['response_content']) ? $data['response_content'] : null;
        $this->container['response_status_code'] = isset($data['response_status_code']) ? $data['response_status_code'] : null;
        $this->container['response_reason_phrase'] = isset($data['response_reason_phrase']) ? $data['response_reason_phrase'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['webhook_name'] === null) {
            $invalidProperties[] = "'webhook_name' can't be null";
        }
        if ($this->container['event_name'] === null) {
            $invalidProperties[] = "'event_name' can't be null";
        }
        if ($this->container['delivery_status'] === null) {
            $invalidProperties[] = "'delivery_status' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets app_name
     *
     * @return string
     */
    public function getAppName()
    {
        return $this->container['app_name'];
    }

    /**
     * Sets app_name
     *
     * @param string $app_name app_name
     *
     * @return $this
     */
    public function setAppName($app_name)
    {
        $this->container['app_name'] = $app_name;

        return $this;
    }

    /**
     * Gets webhook_name
     *
     * @return string
     */
    public function getWebhookName()
    {
        return $this->container['webhook_name'];
    }

    /**
     * Sets webhook_name
     *
     * @param string $webhook_name webhook_name
     *
     * @return $this
     */
    public function setWebhookName($webhook_name)
    {
        $this->container['webhook_name'] = $webhook_name;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name event_name
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets delivery_status
     *
     * @return string
     */
    public function getDeliveryStatus()
    {
        return $this->container['delivery_status'];
    }

    /**
     * Sets delivery_status
     *
     * @param string $delivery_status delivery_status
     *
     * @return $this
     */
    public function setDeliveryStatus($delivery_status)
    {
        $this->container['delivery_status'] = $delivery_status;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return int
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param int $timestamp timestamp
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets processing_time
     *
     * @return int
     */
    public function getProcessingTime()
    {
        return $this->container['processing_time'];
    }

    /**
     * Sets processing_time
     *
     * @param int $processing_time processing_time
     *
     * @return $this
     */
    public function setProcessingTime($processing_time)
    {
        $this->container['processing_time'] = $processing_time;

        return $this;
    }

    /**
     * Gets app_version
     *
     * @return string
     */
    public function getAppVersion()
    {
        return $this->container['app_version'];
    }

    /**
     * Sets app_version
     *
     * @param string $app_version app_version
     *
     * @return $this
     */
    public function setAppVersion($app_version)
    {
        $this->container['app_version'] = $app_version;

        return $this;
    }

    /**
     * Gets request_content
     *
     * @return object
     */
    public function getRequestContent()
    {
        return $this->container['request_content'];
    }

    /**
     * Sets request_content
     *
     * @param object $request_content request_content
     *
     * @return $this
     */
    public function setRequestContent($request_content)
    {
        $this->container['request_content'] = $request_content;

        return $this;
    }

    /**
     * Gets response_content
     *
     * @return object
     */
    public function getResponseContent()
    {
        return $this->container['response_content'];
    }

    /**
     * Sets response_content
     *
     * @param object $response_content response_content
     *
     * @return $this
     */
    public function setResponseContent($response_content)
    {
        $this->container['response_content'] = $response_content;

        return $this;
    }

    /**
     * Gets response_status_code
     *
     * @return int
     */
    public function getResponseStatusCode()
    {
        return $this->container['response_status_code'];
    }

    /**
     * Sets response_status_code
     *
     * @param int $response_status_code response_status_code
     *
     * @return $this
     */
    public function setResponseStatusCode($response_status_code)
    {
        $this->container['response_status_code'] = $response_status_code;

        return $this;
    }

    /**
     * Gets response_reason_phrase
     *
     * @return string
     */
    public function getResponseReasonPhrase()
    {
        return $this->container['response_reason_phrase'];
    }

    /**
     * Sets response_reason_phrase
     *
     * @param string $response_reason_phrase response_reason_phrase
     *
     * @return $this
     */
    public function setResponseReasonPhrase($response_reason_phrase)
    {
        $this->container['response_reason_phrase'] = $response_reason_phrase;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
