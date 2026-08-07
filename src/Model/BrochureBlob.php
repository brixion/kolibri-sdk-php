<?php

declare(strict_types=1);

/**
 * BrochureBlob - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * BrochureBlob.
 * @implements \ArrayAccess<string, mixed>
 */
class BrochureBlob implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'BrochureBlob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'id' => 'string',
        'allow_to_publish' => 'bool',
        'original_id' => 'string',
        'type' => '\Brixion\Kolibri\Model\BrochureType',
        'is_editable' => 'bool',
        'publish_for_agenda_reminders' => 'bool',
        'content_type' => 'string',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'description' => 'string',
        'file_data_id' => 'string',
        'file_extension' => 'string',
        'file_name' => 'string',
        'file_size' => 'int',
        'md5_hash' => 'string',
        'name' => 'string',
        'url_original' => 'string',
        'url_preview' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'id' => null,
        'allow_to_publish' => null,
        'original_id' => 'guid',
        'type' => null,
        'is_editable' => null,
        'publish_for_agenda_reminders' => null,
        'content_type' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'description' => null,
        'file_data_id' => 'guid',
        'file_extension' => null,
        'file_name' => null,
        'file_size' => 'int64',
        'md5_hash' => null,
        'name' => null,
        'url_original' => null,
        'url_preview' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'id' => false,
        'allow_to_publish' => false,
        'original_id' => false,
        'type' => false,
        'is_editable' => false,
        'publish_for_agenda_reminders' => false,
        'content_type' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'description' => false,
        'file_data_id' => false,
        'file_extension' => false,
        'file_name' => false,
        'file_size' => false,
        'md5_hash' => false,
        'name' => false,
        'url_original' => false,
        'url_preview' => false,
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
        'id' => 'id',
        'allow_to_publish' => 'allowToPublish',
        'original_id' => 'originalId',
        'type' => 'type',
        'is_editable' => 'isEditable',
        'publish_for_agenda_reminders' => 'publishForAgendaReminders',
        'content_type' => 'contentType',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'description' => 'description',
        'file_data_id' => 'fileDataId',
        'file_extension' => 'fileExtension',
        'file_name' => 'fileName',
        'file_size' => 'fileSize',
        'md5_hash' => 'md5Hash',
        'name' => 'name',
        'url_original' => 'urlOriginal',
        'url_preview' => 'urlPreview',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'allow_to_publish' => 'setAllowToPublish',
        'original_id' => 'setOriginalId',
        'type' => 'setType',
        'is_editable' => 'setIsEditable',
        'publish_for_agenda_reminders' => 'setPublishForAgendaReminders',
        'content_type' => 'setContentType',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'description' => 'setDescription',
        'file_data_id' => 'setFileDataId',
        'file_extension' => 'setFileExtension',
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'md5_hash' => 'setMd5Hash',
        'name' => 'setName',
        'url_original' => 'setUrlOriginal',
        'url_preview' => 'setUrlPreview',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'allow_to_publish' => 'getAllowToPublish',
        'original_id' => 'getOriginalId',
        'type' => 'getType',
        'is_editable' => 'getIsEditable',
        'publish_for_agenda_reminders' => 'getPublishForAgendaReminders',
        'content_type' => 'getContentType',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'description' => 'getDescription',
        'file_data_id' => 'getFileDataId',
        'file_extension' => 'getFileExtension',
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'md5_hash' => 'getMd5Hash',
        'name' => 'getName',
        'url_original' => 'getUrlOriginal',
        'url_preview' => 'getUrlPreview',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('allow_to_publish', $data ?? [], null);
        $this->setIfExists('original_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('is_editable', $data ?? [], null);
        $this->setIfExists('publish_for_agenda_reminders', $data ?? [], null);
        $this->setIfExists('content_type', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('file_data_id', $data ?? [], null);
        $this->setIfExists('file_extension', $data ?? [], null);
        $this->setIfExists('file_name', $data ?? [], null);
        $this->setIfExists('file_size', $data ?? [], null);
        $this->setIfExists('md5_hash', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('url_original', $data ?? [], null);
        $this->setIfExists('url_preview', $data ?? [], null);
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

        if ($this->container['original_id'] === null) {
            $invalidProperties[] = "'original_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['is_editable'] === null) {
            $invalidProperties[] = "'is_editable' can't be null";
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
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
     * Gets allow_to_publish
     *
     * @return bool|null
     */
    public function getAllowToPublish()
    {
        return $this->container['allow_to_publish'];
    }

    /**
     * Sets allow_to_publish
     *
     * @param bool|null $allow_to_publish It is allowed to publish this blob to the public (e.g. on websites). Default: (when null): true
     *
     * @return self
     */
    public function setAllowToPublish($allow_to_publish)
    {
        if (is_null($allow_to_publish)) {
            throw new \InvalidArgumentException('non-nullable allow_to_publish cannot be null');
        }
        $this->container['allow_to_publish'] = $allow_to_publish;

        return $this;
    }

    /**
     * Gets original_id
     *
     * @return string
     */
    public function getOriginalId()
    {
        return $this->container['original_id'];
    }

    /**
     * Sets original_id
     *
     * @param string $original_id The original Id is used by the provider of the blob, and is not used internally.
     *
     * @return self
     */
    public function setOriginalId($original_id)
    {
        if (is_null($original_id)) {
            throw new \InvalidArgumentException('non-nullable original_id cannot be null');
        }
        $this->container['original_id'] = $original_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Brixion\Kolibri\Model\BrochureType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Brixion\Kolibri\Model\BrochureType $type Type of brochure (e.g. 'window presentation' or 'coversheet').
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets is_editable
     *
     * @return bool
     */
    public function getIsEditable()
    {
        return $this->container['is_editable'];
    }

    /**
     * Sets is_editable
     *
     * @param bool $is_editable is_editable
     *
     * @return self
     */
    public function setIsEditable($is_editable)
    {
        if (is_null($is_editable)) {
            throw new \InvalidArgumentException('non-nullable is_editable cannot be null');
        }
        $this->container['is_editable'] = $is_editable;

        return $this;
    }

    /**
     * Gets publish_for_agenda_reminders
     *
     * @return bool|null
     */
    public function getPublishForAgendaReminders()
    {
        return $this->container['publish_for_agenda_reminders'];
    }

    /**
     * Sets publish_for_agenda_reminders
     *
     * @param bool|null $publish_for_agenda_reminders It is allowed to use this blob as attachment for agenda reminder emails (e.g. on websites). Default: (when null): false
     *
     * @return self
     */
    public function setPublishForAgendaReminders($publish_for_agenda_reminders)
    {
        if (is_null($publish_for_agenda_reminders)) {
            throw new \InvalidArgumentException('non-nullable publish_for_agenda_reminders cannot be null');
        }
        $this->container['publish_for_agenda_reminders'] = $publish_for_agenda_reminders;

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
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets file_data_id
     *
     * @return string|null
     */
    public function getFileDataId()
    {
        return $this->container['file_data_id'];
    }

    /**
     * Sets file_data_id
     *
     * @param string|null $file_data_id file_data_id
     *
     * @return self
     */
    public function setFileDataId($file_data_id)
    {
        if (is_null($file_data_id)) {
            throw new \InvalidArgumentException('non-nullable file_data_id cannot be null');
        }
        $this->container['file_data_id'] = $file_data_id;

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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url_original
     *
     * @return string|null
     */
    public function getUrlOriginal()
    {
        return $this->container['url_original'];
    }

    /**
     * Sets url_original
     *
     * @param string|null $url_original url_original
     *
     * @return self
     */
    public function setUrlOriginal($url_original)
    {
        if (is_null($url_original)) {
            throw new \InvalidArgumentException('non-nullable url_original cannot be null');
        }
        $this->container['url_original'] = $url_original;

        return $this;
    }

    /**
     * Gets url_preview
     *
     * @return string|null
     */
    public function getUrlPreview()
    {
        return $this->container['url_preview'];
    }

    /**
     * Sets url_preview
     *
     * @param string|null $url_preview url_preview
     *
     * @return self
     */
    public function setUrlPreview($url_preview)
    {
        if (is_null($url_preview)) {
            throw new \InvalidArgumentException('non-nullable url_preview cannot be null');
        }
        $this->container['url_preview'] = $url_preview;

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
