<?php

declare(strict_types=1);

/**
 * CommunicationLogBlobMetaData - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CommunicationLogBlobMetaData.
 * @implements \ArrayAccess<string, mixed>
 */
class CommunicationLogBlobMetaData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CommunicationLogBlobMetaData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'file_size' => 'int',
        'md5_hash' => 'string',
        'is_uploaded' => 'bool',
        'content_type' => 'string',
        'download_link' => 'string',
        'blob_type' => '\Brixion\Kolibri\Model\CommunicationLogBlobType',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'file_size' => 'int64',
        'md5_hash' => null,
        'is_uploaded' => null,
        'content_type' => null,
        'download_link' => 'uri',
        'blob_type' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'file_size' => false,
        'md5_hash' => false,
        'is_uploaded' => false,
        'content_type' => false,
        'download_link' => false,
        'blob_type' => false,
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
        'file_size' => 'fileSize',
        'md5_hash' => 'md5Hash',
        'is_uploaded' => 'isUploaded',
        'content_type' => 'contentType',
        'download_link' => 'downloadLink',
        'blob_type' => 'blobType',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_size' => 'setFileSize',
        'md5_hash' => 'setMd5Hash',
        'is_uploaded' => 'setIsUploaded',
        'content_type' => 'setContentType',
        'download_link' => 'setDownloadLink',
        'blob_type' => 'setBlobType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_size' => 'getFileSize',
        'md5_hash' => 'getMd5Hash',
        'is_uploaded' => 'getIsUploaded',
        'content_type' => 'getContentType',
        'download_link' => 'getDownloadLink',
        'blob_type' => 'getBlobType',
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
        $this->setIfExists('file_size', $data ?? [], null);
        $this->setIfExists('md5_hash', $data ?? [], null);
        $this->setIfExists('is_uploaded', $data ?? [], null);
        $this->setIfExists('content_type', $data ?? [], null);
        $this->setIfExists('download_link', $data ?? [], null);
        $this->setIfExists('blob_type', $data ?? [], null);
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

        if (!is_null($this->container['md5_hash']) && (mb_strlen($this->container['md5_hash']) > 50)) {
            $invalidProperties[] = "invalid value for 'md5_hash', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['is_uploaded'] === null) {
            $invalidProperties[] = "'is_uploaded' can't be null";
        }
        if (!is_null($this->container['content_type']) && (mb_strlen($this->container['content_type']) > 100)) {
            $invalidProperties[] = "invalid value for 'content_type', the character length must be smaller than or equal to 100.";
        }

        if ($this->container['blob_type'] === null) {
            $invalidProperties[] = "'blob_type' can't be null";
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
     * Gets file_size
     *
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int|null $file_size file_size
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
        if ((mb_strlen($md5_hash) > 50)) {
            throw new \InvalidArgumentException('invalid length for $md5_hash when calling CommunicationLogBlobMetaData., must be smaller than or equal to 50.');
        }

        $this->container['md5_hash'] = $md5_hash;

        return $this;
    }

    /**
     * Gets is_uploaded
     *
     * @return bool
     */
    public function getIsUploaded()
    {
        return $this->container['is_uploaded'];
    }

    /**
     * Sets is_uploaded
     *
     * @param bool $is_uploaded is_uploaded
     *
     * @return self
     */
    public function setIsUploaded($is_uploaded)
    {
        if (is_null($is_uploaded)) {
            throw new \InvalidArgumentException('non-nullable is_uploaded cannot be null');
        }
        $this->container['is_uploaded'] = $is_uploaded;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string|null
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string|null $content_type content_type
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        if (is_null($content_type)) {
            throw new \InvalidArgumentException('non-nullable content_type cannot be null');
        }
        if ((mb_strlen($content_type) > 100)) {
            throw new \InvalidArgumentException('invalid length for $content_type when calling CommunicationLogBlobMetaData., must be smaller than or equal to 100.');
        }

        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets download_link
     *
     * @return string|null
     */
    public function getDownloadLink()
    {
        return $this->container['download_link'];
    }

    /**
     * Sets download_link
     *
     * @param string|null $download_link download_link
     *
     * @return self
     */
    public function setDownloadLink($download_link)
    {
        if (is_null($download_link)) {
            throw new \InvalidArgumentException('non-nullable download_link cannot be null');
        }
        $this->container['download_link'] = $download_link;

        return $this;
    }

    /**
     * Gets blob_type
     *
     * @return \Brixion\Kolibri\Model\CommunicationLogBlobType
     */
    public function getBlobType()
    {
        return $this->container['blob_type'];
    }

    /**
     * Sets blob_type
     *
     * @param \Brixion\Kolibri\Model\CommunicationLogBlobType $blob_type blob_type
     *
     * @return self
     */
    public function setBlobType($blob_type)
    {
        if (is_null($blob_type)) {
            throw new \InvalidArgumentException('non-nullable blob_type cannot be null');
        }
        $this->container['blob_type'] = $blob_type;

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
