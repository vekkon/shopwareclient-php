<?php
/**
 * PaymentMethodJsonApiRelationships
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

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PaymentMethodJsonApiRelationships Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethodJsonApiRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMethodJsonApi_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'media' => '\Swagger\Client\Model\PaymentMethodJsonApiRelationshipsMedia',
'availability_rule' => '\Swagger\Client\Model\PaymentMethodJsonApiRelationshipsAvailabilityRule',
'sales_channel_default_assignments' => '\Swagger\Client\Model\PaymentMethodJsonApiRelationshipsSalesChannelDefaultAssignments',
'plugin' => '\Swagger\Client\Model\PaymentMethodJsonApiRelationshipsPlugin',
'customers' => '\Swagger\Client\Model\PaymentMethodJsonApiRelationshipsCustomers',
'order_transactions' => '\Swagger\Client\Model\PaymentMethodJsonApiRelationshipsOrderTransactions',
'sales_channels' => '\Swagger\Client\Model\PaymentMethodJsonApiRelationshipsSalesChannels',
'app_payment_method' => '\Swagger\Client\Model\PaymentMethodJsonApiRelationshipsAppPaymentMethod'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'media' => null,
'availability_rule' => null,
'sales_channel_default_assignments' => null,
'plugin' => null,
'customers' => null,
'order_transactions' => null,
'sales_channels' => null,
'app_payment_method' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'media' => 'media',
'availability_rule' => 'availabilityRule',
'sales_channel_default_assignments' => 'salesChannelDefaultAssignments',
'plugin' => 'plugin',
'customers' => 'customers',
'order_transactions' => 'orderTransactions',
'sales_channels' => 'salesChannels',
'app_payment_method' => 'appPaymentMethod'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'media' => 'setMedia',
'availability_rule' => 'setAvailabilityRule',
'sales_channel_default_assignments' => 'setSalesChannelDefaultAssignments',
'plugin' => 'setPlugin',
'customers' => 'setCustomers',
'order_transactions' => 'setOrderTransactions',
'sales_channels' => 'setSalesChannels',
'app_payment_method' => 'setAppPaymentMethod'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'media' => 'getMedia',
'availability_rule' => 'getAvailabilityRule',
'sales_channel_default_assignments' => 'getSalesChannelDefaultAssignments',
'plugin' => 'getPlugin',
'customers' => 'getCustomers',
'order_transactions' => 'getOrderTransactions',
'sales_channels' => 'getSalesChannels',
'app_payment_method' => 'getAppPaymentMethod'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['availability_rule'] = isset($data['availability_rule']) ? $data['availability_rule'] : null;
        $this->container['sales_channel_default_assignments'] = isset($data['sales_channel_default_assignments']) ? $data['sales_channel_default_assignments'] : null;
        $this->container['plugin'] = isset($data['plugin']) ? $data['plugin'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['order_transactions'] = isset($data['order_transactions']) ? $data['order_transactions'] : null;
        $this->container['sales_channels'] = isset($data['sales_channels']) ? $data['sales_channels'] : null;
        $this->container['app_payment_method'] = isset($data['app_payment_method']) ? $data['app_payment_method'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets media
     *
     * @return \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsMedia
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsMedia $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets availability_rule
     *
     * @return \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsAvailabilityRule
     */
    public function getAvailabilityRule()
    {
        return $this->container['availability_rule'];
    }

    /**
     * Sets availability_rule
     *
     * @param \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsAvailabilityRule $availability_rule availability_rule
     *
     * @return $this
     */
    public function setAvailabilityRule($availability_rule)
    {
        $this->container['availability_rule'] = $availability_rule;

        return $this;
    }

    /**
     * Gets sales_channel_default_assignments
     *
     * @return \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsSalesChannelDefaultAssignments
     */
    public function getSalesChannelDefaultAssignments()
    {
        return $this->container['sales_channel_default_assignments'];
    }

    /**
     * Sets sales_channel_default_assignments
     *
     * @param \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsSalesChannelDefaultAssignments $sales_channel_default_assignments sales_channel_default_assignments
     *
     * @return $this
     */
    public function setSalesChannelDefaultAssignments($sales_channel_default_assignments)
    {
        $this->container['sales_channel_default_assignments'] = $sales_channel_default_assignments;

        return $this;
    }

    /**
     * Gets plugin
     *
     * @return \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsPlugin
     */
    public function getPlugin()
    {
        return $this->container['plugin'];
    }

    /**
     * Sets plugin
     *
     * @param \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsPlugin $plugin plugin
     *
     * @return $this
     */
    public function setPlugin($plugin)
    {
        $this->container['plugin'] = $plugin;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsCustomers
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsCustomers $customers customers
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets order_transactions
     *
     * @return \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsOrderTransactions
     */
    public function getOrderTransactions()
    {
        return $this->container['order_transactions'];
    }

    /**
     * Sets order_transactions
     *
     * @param \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsOrderTransactions $order_transactions order_transactions
     *
     * @return $this
     */
    public function setOrderTransactions($order_transactions)
    {
        $this->container['order_transactions'] = $order_transactions;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsSalesChannels
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsSalesChannels $sales_channels sales_channels
     *
     * @return $this
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

        return $this;
    }

    /**
     * Gets app_payment_method
     *
     * @return \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsAppPaymentMethod
     */
    public function getAppPaymentMethod()
    {
        return $this->container['app_payment_method'];
    }

    /**
     * Sets app_payment_method
     *
     * @param \Swagger\Client\Model\PaymentMethodJsonApiRelationshipsAppPaymentMethod $app_payment_method app_payment_method
     *
     * @return $this
     */
    public function setAppPaymentMethod($app_payment_method)
    {
        $this->container['app_payment_method'] = $app_payment_method;

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
