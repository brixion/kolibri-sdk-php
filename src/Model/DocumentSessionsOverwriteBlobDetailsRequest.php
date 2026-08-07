<?php

declare(strict_types=1);

/**
 * DocumentSessionsOverwriteBlobDetailsRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * DocumentSessionsOverwriteBlobDetailsRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentSessionsOverwriteBlobDetailsRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'DocumentSessionsOverwriteBlobDetailsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'document_session_id' => 'string',
        'file_data_id' => 'string',
        'file_extension' => 'string',
        'file_name' => 'string',
        'file_size' => 'int',
        'md5_hash' => 'string',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'document_session_id' => 'guid',
        'file_data_id' => 'guid',
        'file_extension' => null,
        'file_name' => null,
        'file_size' => 'int64',
        'md5_hash' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'document_session_id' => false,
        'file_data_id' => false,
        'file_extension' => false,
        'file_name' => false,
        'file_size' => false,
        'md5_hash' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
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
        'document_session_id' => 'documentSessionId',
        'file_data_id' => 'fileDataId',
        'file_extension' => 'fileExtension',
        'file_name' => 'fileName',
        'file_size' => 'fileSize',
        'md5_hash' => 'md5Hash',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'document_session_id' => 'setDocumentSessionId',
        'file_data_id' => 'setFileDataId',
        'file_extension' => 'setFileExtension',
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'md5_hash' => 'setMd5Hash',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'document_session_id' => 'getDocumentSessionId',
        'file_data_id' => 'getFileDataId',
        'file_extension' => 'getFileExtension',
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'md5_hash' => 'getMd5Hash',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
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
        $this->setIfExists('document_session_id', $data ?? [], null);
        $this->setIfExists('file_data_id', $data ?? [], null);
        $this->setIfExists('file_extension', $data ?? [], null);
        $this->setIfExists('file_name', $data ?? [], null);
        $this->setIfExists('file_size', $data ?? [], null);
        $this->setIfExists('md5_hash', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
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

        if ($this->container['document_session_id'] === null) {
            $invalidProperties[] = "'document_session_id' can't be null";
        }
        if ((mb_strlen($this->container['document_session_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'document_session_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['file_data_id'] === null) {
            $invalidProperties[] = "'file_data_id' can't be null";
        }
        if ((mb_strlen($this->container['file_data_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_data_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['file_extension'] === null) {
            $invalidProperties[] = "'file_extension' can't be null";
        }
        if ((mb_strlen($this->container['file_extension']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_extension', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['file_name'] === null) {
            $invalidProperties[] = "'file_name' can't be null";
        }
        if ((mb_strlen($this->container['file_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['file_size'] === null) {
            $invalidProperties[] = "'file_size' can't be null";
        }
        if ($this->container['md5_hash'] === null) {
            $invalidProperties[] = "'md5_hash' can't be null";
        }
        if ((mb_strlen($this->container['md5_hash']) < 1)) {
            $invalidProperties[] = "invalid value for 'md5_hash', the character length must be bigger than or equal to 1.";
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
     * Gets document_session_id
     *
     * @return string
     */
    public function getDocumentSessionId()
    {
        return $this->container['document_session_id'];
    }

    /**
     * Sets document_session_id
     *
     * @param string $document_session_id document_session_id
     *
     * @return self
     */
    public function setDocumentSessionId($document_session_id)
    {
        if (is_null($document_session_id)) {
            throw new \InvalidArgumentException('non-nullable document_session_id cannot be null');
        }

        if ((mb_strlen($document_session_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $document_session_id when calling DocumentSessionsOverwriteBlobDetailsRequest., must be bigger than or equal to 1.');
        }

        $this->container['document_session_id'] = $document_session_id;

        return $this;
    }

    /**
     * Gets file_data_id
     *
     * @return string
     */
    public function getFileDataId()
    {
        return $this->container['file_data_id'];
    }

    /**
     * Sets file_data_id
     *
     * @param string $file_data_id file_data_id
     *
     * @return self
     */
    public function setFileDataId($file_data_id)
    {
        if (is_null($file_data_id)) {
            throw new \InvalidArgumentException('non-nullable file_data_id cannot be null');
        }

        if ((mb_strlen($file_data_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_data_id when calling DocumentSessionsOverwriteBlobDetailsRequest., must be bigger than or equal to 1.');
        }

        $this->container['file_data_id'] = $file_data_id;

        return $this;
    }

    /**
     * Gets file_extension
     *
     * @return string
     */
    public function getFileExtension()
    {
        return $this->container['file_extension'];
    }

    /**
     * Sets file_extension
     *
     * @param string $file_extension file_extension
     *
     * @return self
     */
    public function setFileExtension($file_extension)
    {
        if (is_null($file_extension)) {
            throw new \InvalidArgumentException('non-nullable file_extension cannot be null');
        }

        if ((mb_strlen($file_extension) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_extension when calling DocumentSessionsOverwriteBlobDetailsRequest., must be bigger than or equal to 1.');
        }

        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name file_name
     *
     * @return self
     */
    public function setFileName($file_name)
    {
        if (is_null($file_name)) {
            throw new \InvalidArgumentException('non-nullable file_name cannot be null');
        }

        if ((mb_strlen($file_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $file_name when calling DocumentSessionsOverwriteBlobDetailsRequest., must be bigger than or equal to 1.');
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
     * @return string
     */
    public function getMd5Hash()
    {
        return $this->container['md5_hash'];
    }

    /**
     * Sets md5_hash
     *
     * @param string $md5_hash md5_hash
     *
     * @return self
     */
    public function setMd5Hash($md5_hash)
    {
        if (is_null($md5_hash)) {
            throw new \InvalidArgumentException('non-nullable md5_hash cannot be null');
        }

        if ((mb_strlen($md5_hash) < 1)) {
            throw new \InvalidArgumentException('invalid length for $md5_hash when calling DocumentSessionsOverwriteBlobDetailsRequest., must be bigger than or equal to 1.');
        }

        $this->container['md5_hash'] = $md5_hash;

        return $this;
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
