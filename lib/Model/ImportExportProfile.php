<?php
/**
 * ImportExportProfile
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
 * ImportExportProfile Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImportExportProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportExportProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'label' => 'string',
'system_default' => 'bool',
'source_entity' => 'string',
'file_type' => 'string',
'delimiter' => 'string',
'enclosure' => 'string',
'mapping' => 'object',
'config' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'import_export_logs' => '\Swagger\Client\Model\ImportExportLog'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'label' => null,
'system_default' => null,
'source_entity' => null,
'file_type' => null,
'delimiter' => null,
'enclosure' => null,
'mapping' => null,
'config' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
'import_export_logs' => null    ];

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
'name' => 'name',
'label' => 'label',
'system_default' => 'systemDefault',
'source_entity' => 'sourceEntity',
'file_type' => 'fileType',
'delimiter' => 'delimiter',
'enclosure' => 'enclosure',
'mapping' => 'mapping',
'config' => 'config',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
'import_export_logs' => 'importExportLogs'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'label' => 'setLabel',
'system_default' => 'setSystemDefault',
'source_entity' => 'setSourceEntity',
'file_type' => 'setFileType',
'delimiter' => 'setDelimiter',
'enclosure' => 'setEnclosure',
'mapping' => 'setMapping',
'config' => 'setConfig',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
'import_export_logs' => 'setImportExportLogs'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'label' => 'getLabel',
'system_default' => 'getSystemDefault',
'source_entity' => 'getSourceEntity',
'file_type' => 'getFileType',
'delimiter' => 'getDelimiter',
'enclosure' => 'getEnclosure',
'mapping' => 'getMapping',
'config' => 'getConfig',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
'import_export_logs' => 'getImportExportLogs'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['system_default'] = isset($data['system_default']) ? $data['system_default'] : null;
        $this->container['source_entity'] = isset($data['source_entity']) ? $data['source_entity'] : null;
        $this->container['file_type'] = isset($data['file_type']) ? $data['file_type'] : null;
        $this->container['delimiter'] = isset($data['delimiter']) ? $data['delimiter'] : null;
        $this->container['enclosure'] = isset($data['enclosure']) ? $data['enclosure'] : null;
        $this->container['mapping'] = isset($data['mapping']) ? $data['mapping'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
        $this->container['import_export_logs'] = isset($data['import_export_logs']) ? $data['import_export_logs'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['source_entity'] === null) {
            $invalidProperties[] = "'source_entity' can't be null";
        }
        if ($this->container['file_type'] === null) {
            $invalidProperties[] = "'file_type' can't be null";
        }
        if ($this->container['delimiter'] === null) {
            $invalidProperties[] = "'delimiter' can't be null";
        }
        if ($this->container['enclosure'] === null) {
            $invalidProperties[] = "'enclosure' can't be null";
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
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets system_default
     *
     * @return bool
     */
    public function getSystemDefault()
    {
        return $this->container['system_default'];
    }

    /**
     * Sets system_default
     *
     * @param bool $system_default system_default
     *
     * @return $this
     */
    public function setSystemDefault($system_default)
    {
        $this->container['system_default'] = $system_default;

        return $this;
    }

    /**
     * Gets source_entity
     *
     * @return string
     */
    public function getSourceEntity()
    {
        return $this->container['source_entity'];
    }

    /**
     * Sets source_entity
     *
     * @param string $source_entity source_entity
     *
     * @return $this
     */
    public function setSourceEntity($source_entity)
    {
        $this->container['source_entity'] = $source_entity;

        return $this;
    }

    /**
     * Gets file_type
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['file_type'];
    }

    /**
     * Sets file_type
     *
     * @param string $file_type file_type
     *
     * @return $this
     */
    public function setFileType($file_type)
    {
        $this->container['file_type'] = $file_type;

        return $this;
    }

    /**
     * Gets delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->container['delimiter'];
    }

    /**
     * Sets delimiter
     *
     * @param string $delimiter delimiter
     *
     * @return $this
     */
    public function setDelimiter($delimiter)
    {
        $this->container['delimiter'] = $delimiter;

        return $this;
    }

    /**
     * Gets enclosure
     *
     * @return string
     */
    public function getEnclosure()
    {
        return $this->container['enclosure'];
    }

    /**
     * Sets enclosure
     *
     * @param string $enclosure enclosure
     *
     * @return $this
     */
    public function setEnclosure($enclosure)
    {
        $this->container['enclosure'] = $enclosure;

        return $this;
    }

    /**
     * Gets mapping
     *
     * @return object
     */
    public function getMapping()
    {
        return $this->container['mapping'];
    }

    /**
     * Sets mapping
     *
     * @param object $mapping mapping
     *
     * @return $this
     */
    public function setMapping($mapping)
    {
        $this->container['mapping'] = $mapping;

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
     * Gets translated
     *
     * @return object
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object $translated translated
     *
     * @return $this
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets import_export_logs
     *
     * @return \Swagger\Client\Model\ImportExportLog
     */
    public function getImportExportLogs()
    {
        return $this->container['import_export_logs'];
    }

    /**
     * Sets import_export_logs
     *
     * @param \Swagger\Client\Model\ImportExportLog $import_export_logs import_export_logs
     *
     * @return $this
     */
    public function setImportExportLogs($import_export_logs)
    {
        $this->container['import_export_logs'] = $import_export_logs;

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
