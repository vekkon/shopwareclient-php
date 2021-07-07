<?php
/**
 * PromotionDiscount
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
 * PromotionDiscount Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PromotionDiscount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PromotionDiscount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'promotion_id' => 'string',
'scope' => 'string',
'type' => 'string',
'value' => 'float',
'consider_advanced_rules' => 'bool',
'max_value' => 'float',
'sorter_key' => 'string',
'applier_key' => 'string',
'usage_key' => 'string',
'picker_key' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'promotion' => '\Swagger\Client\Model\Promotion',
'discount_rules' => '\Swagger\Client\Model\Rule',
'promotion_discount_prices' => '\Swagger\Client\Model\PromotionDiscountPrices'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'promotion_id' => null,
'scope' => null,
'type' => null,
'value' => 'float',
'consider_advanced_rules' => null,
'max_value' => 'float',
'sorter_key' => null,
'applier_key' => null,
'usage_key' => null,
'picker_key' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'promotion' => null,
'discount_rules' => null,
'promotion_discount_prices' => null    ];

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
        'id' => 'id',
'promotion_id' => 'promotionId',
'scope' => 'scope',
'type' => 'type',
'value' => 'value',
'consider_advanced_rules' => 'considerAdvancedRules',
'max_value' => 'maxValue',
'sorter_key' => 'sorterKey',
'applier_key' => 'applierKey',
'usage_key' => 'usageKey',
'picker_key' => 'pickerKey',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'promotion' => 'promotion',
'discount_rules' => 'discountRules',
'promotion_discount_prices' => 'promotionDiscountPrices'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'promotion_id' => 'setPromotionId',
'scope' => 'setScope',
'type' => 'setType',
'value' => 'setValue',
'consider_advanced_rules' => 'setConsiderAdvancedRules',
'max_value' => 'setMaxValue',
'sorter_key' => 'setSorterKey',
'applier_key' => 'setApplierKey',
'usage_key' => 'setUsageKey',
'picker_key' => 'setPickerKey',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'promotion' => 'setPromotion',
'discount_rules' => 'setDiscountRules',
'promotion_discount_prices' => 'setPromotionDiscountPrices'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'promotion_id' => 'getPromotionId',
'scope' => 'getScope',
'type' => 'getType',
'value' => 'getValue',
'consider_advanced_rules' => 'getConsiderAdvancedRules',
'max_value' => 'getMaxValue',
'sorter_key' => 'getSorterKey',
'applier_key' => 'getApplierKey',
'usage_key' => 'getUsageKey',
'picker_key' => 'getPickerKey',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'promotion' => 'getPromotion',
'discount_rules' => 'getDiscountRules',
'promotion_discount_prices' => 'getPromotionDiscountPrices'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['promotion_id'] = isset($data['promotion_id']) ? $data['promotion_id'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['consider_advanced_rules'] = isset($data['consider_advanced_rules']) ? $data['consider_advanced_rules'] : null;
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['sorter_key'] = isset($data['sorter_key']) ? $data['sorter_key'] : null;
        $this->container['applier_key'] = isset($data['applier_key']) ? $data['applier_key'] : null;
        $this->container['usage_key'] = isset($data['usage_key']) ? $data['usage_key'] : null;
        $this->container['picker_key'] = isset($data['picker_key']) ? $data['picker_key'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['promotion'] = isset($data['promotion']) ? $data['promotion'] : null;
        $this->container['discount_rules'] = isset($data['discount_rules']) ? $data['discount_rules'] : null;
        $this->container['promotion_discount_prices'] = isset($data['promotion_discount_prices']) ? $data['promotion_discount_prices'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['promotion_id'] === null) {
            $invalidProperties[] = "'promotion_id' can't be null";
        }
        if ($this->container['scope'] === null) {
            $invalidProperties[] = "'scope' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['consider_advanced_rules'] === null) {
            $invalidProperties[] = "'consider_advanced_rules' can't be null";
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
     * Gets promotion_id
     *
     * @return string
     */
    public function getPromotionId()
    {
        return $this->container['promotion_id'];
    }

    /**
     * Sets promotion_id
     *
     * @param string $promotion_id promotion_id
     *
     * @return $this
     */
    public function setPromotionId($promotion_id)
    {
        $this->container['promotion_id'] = $promotion_id;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets consider_advanced_rules
     *
     * @return bool
     */
    public function getConsiderAdvancedRules()
    {
        return $this->container['consider_advanced_rules'];
    }

    /**
     * Sets consider_advanced_rules
     *
     * @param bool $consider_advanced_rules consider_advanced_rules
     *
     * @return $this
     */
    public function setConsiderAdvancedRules($consider_advanced_rules)
    {
        $this->container['consider_advanced_rules'] = $consider_advanced_rules;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return float
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param float $max_value max_value
     *
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets sorter_key
     *
     * @return string
     */
    public function getSorterKey()
    {
        return $this->container['sorter_key'];
    }

    /**
     * Sets sorter_key
     *
     * @param string $sorter_key sorter_key
     *
     * @return $this
     */
    public function setSorterKey($sorter_key)
    {
        $this->container['sorter_key'] = $sorter_key;

        return $this;
    }

    /**
     * Gets applier_key
     *
     * @return string
     */
    public function getApplierKey()
    {
        return $this->container['applier_key'];
    }

    /**
     * Sets applier_key
     *
     * @param string $applier_key applier_key
     *
     * @return $this
     */
    public function setApplierKey($applier_key)
    {
        $this->container['applier_key'] = $applier_key;

        return $this;
    }

    /**
     * Gets usage_key
     *
     * @return string
     */
    public function getUsageKey()
    {
        return $this->container['usage_key'];
    }

    /**
     * Sets usage_key
     *
     * @param string $usage_key usage_key
     *
     * @return $this
     */
    public function setUsageKey($usage_key)
    {
        $this->container['usage_key'] = $usage_key;

        return $this;
    }

    /**
     * Gets picker_key
     *
     * @return string
     */
    public function getPickerKey()
    {
        return $this->container['picker_key'];
    }

    /**
     * Sets picker_key
     *
     * @param string $picker_key picker_key
     *
     * @return $this
     */
    public function setPickerKey($picker_key)
    {
        $this->container['picker_key'] = $picker_key;

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
     * Gets promotion
     *
     * @return \Swagger\Client\Model\Promotion
     */
    public function getPromotion()
    {
        return $this->container['promotion'];
    }

    /**
     * Sets promotion
     *
     * @param \Swagger\Client\Model\Promotion $promotion promotion
     *
     * @return $this
     */
    public function setPromotion($promotion)
    {
        $this->container['promotion'] = $promotion;

        return $this;
    }

    /**
     * Gets discount_rules
     *
     * @return \Swagger\Client\Model\Rule
     */
    public function getDiscountRules()
    {
        return $this->container['discount_rules'];
    }

    /**
     * Sets discount_rules
     *
     * @param \Swagger\Client\Model\Rule $discount_rules discount_rules
     *
     * @return $this
     */
    public function setDiscountRules($discount_rules)
    {
        $this->container['discount_rules'] = $discount_rules;

        return $this;
    }

    /**
     * Gets promotion_discount_prices
     *
     * @return \Swagger\Client\Model\PromotionDiscountPrices
     */
    public function getPromotionDiscountPrices()
    {
        return $this->container['promotion_discount_prices'];
    }

    /**
     * Sets promotion_discount_prices
     *
     * @param \Swagger\Client\Model\PromotionDiscountPrices $promotion_discount_prices promotion_discount_prices
     *
     * @return $this
     */
    public function setPromotionDiscountPrices($promotion_discount_prices)
    {
        $this->container['promotion_discount_prices'] = $promotion_discount_prices;

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