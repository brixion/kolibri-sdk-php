<?php

declare(strict_types=1);

/**
 * CommunicationLogBlobSnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CommunicationLogBlobSnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class CommunicationLogBlobSnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CommunicationLogBlobSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'communication_log_id' => 'string',
        'blob_type' => '\Brixion\Kolibri\Model\CommunicationLogBlobType',
        'file_name' => 'string',
        'file_extension' => 'string',
        'content_id' => 'string',
        'file_size' => 'int',
        'content_type' => 'string',
        'md5_hash' => 'string',
        'is_uploaded' => 'bool',
        'download_link' => 'string',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'communication_log_id' => 'guid',
        'blob_type' => null,
        'file_name' => null,
        'file_extension' => null,
        'content_id' => null,
        'file_size' => 'int64',
        'content_type' => null,
        'md5_hash' => null,
        'is_uploaded' => null,
        'download_link' => 'uri',
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'communication_log_id' => false,
        'blob_type' => false,
        'file_name' => false,
        'file_extension' => false,
        'content_id' => false,
        'file_size' => false,
        'content_type' => false,
        'md5_hash' => false,
        'is_uploaded' => false,
        'download_link' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'id' => false,
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
        'communication_log_id' => 'communicationLogId',
        'blob_type' => 'blobType',
        'file_name' => 'fileName',
        'file_extension' => 'fileExtension',
        'content_id' => 'contentId',
        'file_size' => 'fileSize',
        'content_type' => 'contentType',
        'md5_hash' => 'md5Hash',
        'is_uploaded' => 'isUploaded',
        'download_link' => 'downloadLink',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'communication_log_id' => 'setCommunicationLogId',
        'blob_type' => 'setBlobType',
        'file_name' => 'setFileName',
        'file_extension' => 'setFileExtension',
        'content_id' => 'setContentId',
        'file_size' => 'setFileSize',
        'content_type' => 'setContentType',
        'md5_hash' => 'setMd5Hash',
        'is_uploaded' => 'setIsUploaded',
        'download_link' => 'setDownloadLink',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'communication_log_id' => 'getCommunicationLogId',
        'blob_type' => 'getBlobType',
        'file_name' => 'getFileName',
        'file_extension' => 'getFileExtension',
        'content_id' => 'getContentId',
        'file_size' => 'getFileSize',
        'content_type' => 'getContentType',
        'md5_hash' => 'getMd5Hash',
        'is_uploaded' => 'getIsUploaded',
        'download_link' => 'getDownloadLink',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'id' => 'getId',
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
        $this->setIfExists('communication_log_id', $data ?? [], null);
        $this->setIfExists('blob_type', $data ?? [], null);
        $this->setIfExists('file_name', $data ?? [], null);
        $this->setIfExists('file_extension', $data ?? [], null);
        $this->setIfExists('content_id', $data ?? [], null);
        $this->setIfExists('file_size', $data ?? [], null);
        $this->setIfExists('content_type', $data ?? [], null);
        $this->setIfExists('md5_hash', $data ?? [], null);
        $this->setIfExists('is_uploaded', $data ?? [], null);
        $this->setIfExists('download_link', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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

        if ($this->container['communication_log_id'] === null) {
            $invalidProperties[] = "'communication_log_id' can't be null";
        }
        if ((mb_strlen($this->container['communication_log_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'communication_log_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['blob_type'] === null) {
            $invalidProperties[] = "'blob_type' can't be null";
        }
        if ($this->container['file_name'] === null) {
            $invalidProperties[] = "'file_name' can't be null";
        }
        if ((mb_strlen($this->container['file_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['file_extension'] === null) {
            $invalidProperties[] = "'file_extension' can't be null";
        }
        if ((mb_strlen($this->container['file_extension']) < 1)) {
            $invalidProperties[] = "invalid value for 'file_extension', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
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
     * Gets communication_log_id
     *
     * @return string
     */
    public function getCommunicationLogId()
    {
        return $this->container['communication_log_id'];
    }

    /**
     * Sets communication_log_id
     *
     * @param string $communication_log_id communication_log_id
     *
     * @return self
     */
    public function setCommunicationLogId($communication_log_id)
    {
        if (is_null($communication_log_id)) {
            throw new \InvalidArgumentException('non-nullable communication_log_id cannot be null');
        }

        if ((mb_strlen($communication_log_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $communication_log_id when calling CommunicationLogBlobSnapShot., must be bigger than or equal to 1.');
        }

        $this->container['communication_log_id'] = $communication_log_id;

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
            throw new \InvalidArgumentException('invalid length for $file_name when calling CommunicationLogBlobSnapShot., must be bigger than or equal to 1.');
        }

        $this->container['file_name'] = $file_name;

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
            throw new \InvalidArgumentException('invalid length for $file_extension when calling CommunicationLogBlobSnapShot., must be bigger than or equal to 1.');
        }

        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets content_id
     *
     * @return string|null
     */
    public function getContentId()
    {
        return $this->container['content_id'];
    }

    /**
     * Sets content_id
     *
     * @param string|null $content_id content_id
     *
     * @return self
     */
    public function setContentId($content_id)
    {
        if (is_null($content_id)) {
            throw new \InvalidArgumentException('non-nullable content_id cannot be null');
        }
        $this->container['content_id'] = $content_id;

        return $this;
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
        $this->container['content_type'] = $content_type;

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
     * Gets is_uploaded
     *
     * @return bool|null
     */
    public function getIsUploaded()
    {
        return $this->container['is_uploaded'];
    }

    /**
     * Sets is_uploaded
     *
     * @param bool|null $is_uploaded is_uploaded
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
     * Gets linked_created_by
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedCreatedBy()
    {
        return $this->container['linked_created_by'];
    }

    /**
     * Sets linked_created_by
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_created_by linked_created_by
     *
     * @return self
     */
    public function setLinkedCreatedBy($linked_created_by)
    {
        if (is_null($linked_created_by)) {
            throw new \InvalidArgumentException('non-nullable linked_created_by cannot be null');
        }
        $this->container['linked_created_by'] = $linked_created_by;

        return $this;
    }

    /**
     * Gets linked_modified_by
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedModifiedBy()
    {
        return $this->container['linked_modified_by'];
    }

    /**
     * Sets linked_modified_by
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_modified_by linked_modified_by
     *
     * @return self
     */
    public function setLinkedModifiedBy($linked_modified_by)
    {
        if (is_null($linked_modified_by)) {
            throw new \InvalidArgumentException('non-nullable linked_modified_by cannot be null');
        }
        $this->container['linked_modified_by'] = $linked_modified_by;

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

        if ((mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling CommunicationLogBlobSnapShot., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

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
