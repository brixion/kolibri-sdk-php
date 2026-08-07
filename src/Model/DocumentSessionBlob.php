<?php

declare(strict_types=1);

/**
 * DocumentSessionBlob - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * DocumentSessionBlob.
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentSessionBlob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'DocumentSessionBlob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'id' => 'string',
        'file_extension' => 'string',
        'file_name' => 'string',
        'file_size' => 'int',
        'md5_hash' => 'string',
        'url' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'id' => 'guid',
        'file_extension' => null,
        'file_name' => null,
        'file_size' => 'int64',
        'md5_hash' => null,
        'url' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'date_time_created' => false,
        'date_time_modified' => false,
        'id' => false,
        'file_extension' => false,
        'file_name' => false,
        'file_size' => false,
        'md5_hash' => false,
        'url' => false,
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $nullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function attributeTypes()
    {
        return self::$attributeTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function attributeFormats()
    {
        return self::$attributeFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function nullables(): array
    {
        return self::$nullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getNullablesSetToNull(): array
    {
        return $this->nullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $nullablesSetToNull
     */
    private function setNullablesSetToNull(array $nullablesSetToNull): void
    {
        $this->nullablesSetToNull = $nullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::nullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getNullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'id' => 'id',
        'file_extension' => 'fileExtension',
        'file_name' => 'fileName',
        'file_size' => 'fileSize',
        'md5_hash' => 'md5Hash',
        'url' => 'url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'id' => 'setId',
        'file_extension' => 'setFileExtension',
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'md5_hash' => 'setMd5Hash',
        'url' => 'setUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'id' => 'getId',
        'file_extension' => 'getFileExtension',
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'md5_hash' => 'getMd5Hash',
        'url' => 'getUrl',
    ];

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
        return self::$modelTypeName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('file_extension', $data ?? [], null);
        $this->setIfExists('file_name', $data ?? [], null);
        $this->setIfExists('file_size', $data ?? [], null);
        $this->setIfExists('md5_hash', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->nullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->nullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['file_size'] === null) {
            $invalidProperties[] = "'file_size' can't be null";
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
     * Gets date_time_created
     *
     * @return \DateTime|null
     */
    public function getDateTimeCreated()
    {
        return $this->container['date_time_created'];
    }

    /**
     * Sets date_time_created
     *
     * @param \DateTime|null $date_time_created date_time_created
     *
     * @return self
     */
    public function setDateTimeCreated($date_time_created)
    {
        if (is_null($date_time_created)) {
            throw new \InvalidArgumentException('non-nullable date_time_created cannot be null');
        }
        $this->container['date_time_created'] = $date_time_created;

        return $this;
    }

    /**
     * Gets date_time_modified
     *
     * @return \DateTime|null
     */
    public function getDateTimeModified()
    {
        return $this->container['date_time_modified'];
    }

    /**
     * Sets date_time_modified
     *
     * @param \DateTime|null $date_time_modified date_time_modified
     *
     * @return self
     */
    public function setDateTimeModified($date_time_modified)
    {
        if (is_null($date_time_modified)) {
            throw new \InvalidArgumentException('non-nullable date_time_modified cannot be null');
        }
        $this->container['date_time_modified'] = $date_time_modified;

        return $this;
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
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets file_extension
     *
     * @return string|null
     */
    public function getFileExtension()
    {
        return $this->container['file_extension'];
    }

    /**
     * Sets file_extension
     *
     * @param string|null $file_extension file_extension
     *
     * @return self
     */
    public function setFileExtension($file_extension)
    {
        if (is_null($file_extension)) {
            throw new \InvalidArgumentException('non-nullable file_extension cannot be null');
        }
        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string|null $file_name file_name
     *
     * @return self
     */
    public function setFileName($file_name)
    {
        if (is_null($file_name)) {
            throw new \InvalidArgumentException('non-nullable file_name cannot be null');
        }
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets file_size
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int $file_size file_size
     *
     * @return self
     */
    public function setFileSize($file_size)
    {
        if (is_null($file_size)) {
            throw new \InvalidArgumentException('non-nullable file_size cannot be null');
        }
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets md5_hash
     *
     * @return string|null
     */
    public function getMd5Hash()
    {
        return $this->container['md5_hash'];
    }

    /**
     * Sets md5_hash
     *
     * @param string|null $md5_hash md5_hash
     *
     * @return self
     */
    public function setMd5Hash($md5_hash)
    {
        if (is_null($md5_hash)) {
            throw new \InvalidArgumentException('non-nullable md5_hash cannot be null');
        }
        $this->container['md5_hash'] = $md5_hash;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT,
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
