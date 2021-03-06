<?php
/**
 * ProductSearchConfigField
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
 * ProductSearchConfigField Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.3.5.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductSearchConfigField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductSearchConfigField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'search_config_id' => 'string',
'custom_field_id' => 'string',
'field' => 'string',
'tokenize' => 'bool',
'searchable' => 'bool',
'ranking' => 'int',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'search_config' => '\Swagger\Client\Model\ProductSearchConfig',
'custom_field' => '\Swagger\Client\Model\CustomField'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'search_config_id' => null,
'custom_field_id' => null,
'field' => null,
'tokenize' => null,
'searchable' => null,
'ranking' => 'int64',
'created_at' => 'date-time',
'updated_at' => 'date-time',
'search_config' => null,
'custom_field' => null    ];

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
'search_config_id' => 'searchConfigId',
'custom_field_id' => 'customFieldId',
'field' => 'field',
'tokenize' => 'tokenize',
'searchable' => 'searchable',
'ranking' => 'ranking',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'search_config' => 'searchConfig',
'custom_field' => 'customField'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'search_config_id' => 'setSearchConfigId',
'custom_field_id' => 'setCustomFieldId',
'field' => 'setField',
'tokenize' => 'setTokenize',
'searchable' => 'setSearchable',
'ranking' => 'setRanking',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'search_config' => 'setSearchConfig',
'custom_field' => 'setCustomField'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'search_config_id' => 'getSearchConfigId',
'custom_field_id' => 'getCustomFieldId',
'field' => 'getField',
'tokenize' => 'getTokenize',
'searchable' => 'getSearchable',
'ranking' => 'getRanking',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'search_config' => 'getSearchConfig',
'custom_field' => 'getCustomField'    ];

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
        $this->container['search_config_id'] = isset($data['search_config_id']) ? $data['search_config_id'] : null;
        $this->container['custom_field_id'] = isset($data['custom_field_id']) ? $data['custom_field_id'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
        $this->container['tokenize'] = isset($data['tokenize']) ? $data['tokenize'] : null;
        $this->container['searchable'] = isset($data['searchable']) ? $data['searchable'] : null;
        $this->container['ranking'] = isset($data['ranking']) ? $data['ranking'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['search_config'] = isset($data['search_config']) ? $data['search_config'] : null;
        $this->container['custom_field'] = isset($data['custom_field']) ? $data['custom_field'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['search_config_id'] === null) {
            $invalidProperties[] = "'search_config_id' can't be null";
        }
        if ($this->container['field'] === null) {
            $invalidProperties[] = "'field' can't be null";
        }
        if ($this->container['tokenize'] === null) {
            $invalidProperties[] = "'tokenize' can't be null";
        }
        if ($this->container['searchable'] === null) {
            $invalidProperties[] = "'searchable' can't be null";
        }
        if ($this->container['ranking'] === null) {
            $invalidProperties[] = "'ranking' can't be null";
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
     * Gets search_config_id
     *
     * @return string
     */
    public function getSearchConfigId()
    {
        return $this->container['search_config_id'];
    }

    /**
     * Sets search_config_id
     *
     * @param string $search_config_id search_config_id
     *
     * @return $this
     */
    public function setSearchConfigId($search_config_id)
    {
        $this->container['search_config_id'] = $search_config_id;

        return $this;
    }

    /**
     * Gets custom_field_id
     *
     * @return string
     */
    public function getCustomFieldId()
    {
        return $this->container['custom_field_id'];
    }

    /**
     * Sets custom_field_id
     *
     * @param string $custom_field_id custom_field_id
     *
     * @return $this
     */
    public function setCustomFieldId($custom_field_id)
    {
        $this->container['custom_field_id'] = $custom_field_id;

        return $this;
    }

    /**
     * Gets field
     *
     * @return string
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string $field field
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }

    /**
     * Gets tokenize
     *
     * @return bool
     */
    public function getTokenize()
    {
        return $this->container['tokenize'];
    }

    /**
     * Sets tokenize
     *
     * @param bool $tokenize tokenize
     *
     * @return $this
     */
    public function setTokenize($tokenize)
    {
        $this->container['tokenize'] = $tokenize;

        return $this;
    }

    /**
     * Gets searchable
     *
     * @return bool
     */
    public function getSearchable()
    {
        return $this->container['searchable'];
    }

    /**
     * Sets searchable
     *
     * @param bool $searchable searchable
     *
     * @return $this
     */
    public function setSearchable($searchable)
    {
        $this->container['searchable'] = $searchable;

        return $this;
    }

    /**
     * Gets ranking
     *
     * @return int
     */
    public function getRanking()
    {
        return $this->container['ranking'];
    }

    /**
     * Sets ranking
     *
     * @param int $ranking ranking
     *
     * @return $this
     */
    public function setRanking($ranking)
    {
        $this->container['ranking'] = $ranking;

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
     * Gets search_config
     *
     * @return \Swagger\Client\Model\ProductSearchConfig
     */
    public function getSearchConfig()
    {
        return $this->container['search_config'];
    }

    /**
     * Sets search_config
     *
     * @param \Swagger\Client\Model\ProductSearchConfig $search_config search_config
     *
     * @return $this
     */
    public function setSearchConfig($search_config)
    {
        $this->container['search_config'] = $search_config;

        return $this;
    }

    /**
     * Gets custom_field
     *
     * @return \Swagger\Client\Model\CustomField
     */
    public function getCustomField()
    {
        return $this->container['custom_field'];
    }

    /**
     * Sets custom_field
     *
     * @param \Swagger\Client\Model\CustomField $custom_field custom_field
     *
     * @return $this
     */
    public function setCustomField($custom_field)
    {
        $this->container['custom_field'] = $custom_field;

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
