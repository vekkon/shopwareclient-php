<?php
/**
 * DocumentBaseConfigJsonApi
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
 * DocumentBaseConfigJsonApi Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentBaseConfigJsonApi extends Resource 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentBaseConfigJsonApi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'document_type_id' => 'string',
'logo_id' => 'string',
'name' => 'string',
'filename_prefix' => 'string',
'filename_suffix' => 'string',
'global' => 'bool',
'document_number' => 'string',
'config' => 'object',
'created_at' => '\DateTime',
'custom_fields' => 'object',
'updated_at' => '\DateTime',
'relationships' => '\Swagger\Client\Model\DocumentBaseConfigJsonApiRelationships'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'document_type_id' => null,
'logo_id' => null,
'name' => null,
'filename_prefix' => null,
'filename_suffix' => null,
'global' => null,
'document_number' => null,
'config' => null,
'created_at' => 'date-time',
'custom_fields' => null,
'updated_at' => 'date-time',
'relationships' => null    ];

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
'document_type_id' => 'documentTypeId',
'logo_id' => 'logoId',
'name' => 'name',
'filename_prefix' => 'filenamePrefix',
'filename_suffix' => 'filenameSuffix',
'global' => 'global',
'document_number' => 'documentNumber',
'config' => 'config',
'created_at' => 'createdAt',
'custom_fields' => 'customFields',
'updated_at' => 'updatedAt',
'relationships' => 'relationships'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'document_type_id' => 'setDocumentTypeId',
'logo_id' => 'setLogoId',
'name' => 'setName',
'filename_prefix' => 'setFilenamePrefix',
'filename_suffix' => 'setFilenameSuffix',
'global' => 'setGlobal',
'document_number' => 'setDocumentNumber',
'config' => 'setConfig',
'created_at' => 'setCreatedAt',
'custom_fields' => 'setCustomFields',
'updated_at' => 'setUpdatedAt',
'relationships' => 'setRelationships'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'document_type_id' => 'getDocumentTypeId',
'logo_id' => 'getLogoId',
'name' => 'getName',
'filename_prefix' => 'getFilenamePrefix',
'filename_suffix' => 'getFilenameSuffix',
'global' => 'getGlobal',
'document_number' => 'getDocumentNumber',
'config' => 'getConfig',
'created_at' => 'getCreatedAt',
'custom_fields' => 'getCustomFields',
'updated_at' => 'getUpdatedAt',
'relationships' => 'getRelationships'    ];

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
        $this->container['document_type_id'] = isset($data['document_type_id']) ? $data['document_type_id'] : null;
        $this->container['logo_id'] = isset($data['logo_id']) ? $data['logo_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['filename_prefix'] = isset($data['filename_prefix']) ? $data['filename_prefix'] : null;
        $this->container['filename_suffix'] = isset($data['filename_suffix']) ? $data['filename_suffix'] : null;
        $this->container['global'] = isset($data['global']) ? $data['global'] : null;
        $this->container['document_number'] = isset($data['document_number']) ? $data['document_number'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['document_type_id'] === null) {
            $invalidProperties[] = "'document_type_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['global'] === null) {
            $invalidProperties[] = "'global' can't be null";
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
     * Gets document_type_id
     *
     * @return string
     */
    public function getDocumentTypeId()
    {
        return $this->container['document_type_id'];
    }

    /**
     * Sets document_type_id
     *
     * @param string $document_type_id document_type_id
     *
     * @return $this
     */
    public function setDocumentTypeId($document_type_id)
    {
        $this->container['document_type_id'] = $document_type_id;

        return $this;
    }

    /**
     * Gets logo_id
     *
     * @return string
     */
    public function getLogoId()
    {
        return $this->container['logo_id'];
    }

    /**
     * Sets logo_id
     *
     * @param string $logo_id logo_id
     *
     * @return $this
     */
    public function setLogoId($logo_id)
    {
        $this->container['logo_id'] = $logo_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets filename_prefix
     *
     * @return string
     */
    public function getFilenamePrefix()
    {
        return $this->container['filename_prefix'];
    }

    /**
     * Sets filename_prefix
     *
     * @param string $filename_prefix filename_prefix
     *
     * @return $this
     */
    public function setFilenamePrefix($filename_prefix)
    {
        $this->container['filename_prefix'] = $filename_prefix;

        return $this;
    }

    /**
     * Gets filename_suffix
     *
     * @return string
     */
    public function getFilenameSuffix()
    {
        return $this->container['filename_suffix'];
    }

    /**
     * Sets filename_suffix
     *
     * @param string $filename_suffix filename_suffix
     *
     * @return $this
     */
    public function setFilenameSuffix($filename_suffix)
    {
        $this->container['filename_suffix'] = $filename_suffix;

        return $this;
    }

    /**
     * Gets global
     *
     * @return bool
     */
    public function getGlobal()
    {
        return $this->container['global'];
    }

    /**
     * Sets global
     *
     * @param bool $global global
     *
     * @return $this
     */
    public function setGlobal($global)
    {
        $this->container['global'] = $global;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string $document_number document_number
     *
     * @return $this
     */
    public function setDocumentNumber($document_number)
    {
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets config
     *
     * @return object
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param object $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

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
     * Gets relationships
     *
     * @return \Swagger\Client\Model\DocumentBaseConfigJsonApiRelationships
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \Swagger\Client\Model\DocumentBaseConfigJsonApiRelationships $relationships relationships
     *
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

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
