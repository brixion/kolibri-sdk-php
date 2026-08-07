<?php

declare(strict_types=1);

/**
 * MediaContractSnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * MediaContractSnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class MediaContractSnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'MediaContractSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'is_favorite' => 'bool',
        'is_auto_publish' => 'bool',
        'category' => '\Brixion\Kolibri\Model\MediaPartnerCategory',
        'status' => '\Brixion\Kolibri\Model\MediaContractStatus',
        'media_partner_logo_url' => 'string',
        'media_partner_name' => 'string',
        'media_partner_id' => 'string',
        'is_paid' => 'bool',
        'media_partner_website_url' => 'string',
        'media_partner_description' => 'string',
        'publication_count' => 'int',
        'auto_publish_available' => 'bool',
        'manual_publish_available' => 'bool',
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
        'is_favorite' => null,
        'is_auto_publish' => null,
        'category' => null,
        'status' => null,
        'media_partner_logo_url' => null,
        'media_partner_name' => null,
        'media_partner_id' => 'guid',
        'is_paid' => null,
        'media_partner_website_url' => null,
        'media_partner_description' => null,
        'publication_count' => 'int32',
        'auto_publish_available' => null,
        'manual_publish_available' => null,
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'is_favorite' => false,
        'is_auto_publish' => false,
        'category' => false,
        'status' => false,
        'media_partner_logo_url' => false,
        'media_partner_name' => false,
        'media_partner_id' => false,
        'is_paid' => false,
        'media_partner_website_url' => false,
        'media_partner_description' => false,
        'publication_count' => false,
        'auto_publish_available' => false,
        'manual_publish_available' => false,
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
        'is_favorite' => 'isFavorite',
        'is_auto_publish' => 'isAutoPublish',
        'category' => 'category',
        'status' => 'status',
        'media_partner_logo_url' => 'mediaPartnerLogoUrl',
        'media_partner_name' => 'mediaPartnerName',
        'media_partner_id' => 'mediaPartnerId',
        'is_paid' => 'isPaid',
        'media_partner_website_url' => 'mediaPartnerWebsiteUrl',
        'media_partner_description' => 'mediaPartnerDescription',
        'publication_count' => 'publicationCount',
        'auto_publish_available' => 'autoPublishAvailable',
        'manual_publish_available' => 'manualPublishAvailable',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_favorite' => 'setIsFavorite',
        'is_auto_publish' => 'setIsAutoPublish',
        'category' => 'setCategory',
        'status' => 'setStatus',
        'media_partner_logo_url' => 'setMediaPartnerLogoUrl',
        'media_partner_name' => 'setMediaPartnerName',
        'media_partner_id' => 'setMediaPartnerId',
        'is_paid' => 'setIsPaid',
        'media_partner_website_url' => 'setMediaPartnerWebsiteUrl',
        'media_partner_description' => 'setMediaPartnerDescription',
        'publication_count' => 'setPublicationCount',
        'auto_publish_available' => 'setAutoPublishAvailable',
        'manual_publish_available' => 'setManualPublishAvailable',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_favorite' => 'getIsFavorite',
        'is_auto_publish' => 'getIsAutoPublish',
        'category' => 'getCategory',
        'status' => 'getStatus',
        'media_partner_logo_url' => 'getMediaPartnerLogoUrl',
        'media_partner_name' => 'getMediaPartnerName',
        'media_partner_id' => 'getMediaPartnerId',
        'is_paid' => 'getIsPaid',
        'media_partner_website_url' => 'getMediaPartnerWebsiteUrl',
        'media_partner_description' => 'getMediaPartnerDescription',
        'publication_count' => 'getPublicationCount',
        'auto_publish_available' => 'getAutoPublishAvailable',
        'manual_publish_available' => 'getManualPublishAvailable',
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
        $this->setIfExists('is_favorite', $data ?? [], null);
        $this->setIfExists('is_auto_publish', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('media_partner_logo_url', $data ?? [], null);
        $this->setIfExists('media_partner_name', $data ?? [], null);
        $this->setIfExists('media_partner_id', $data ?? [], null);
        $this->setIfExists('is_paid', $data ?? [], null);
        $this->setIfExists('media_partner_website_url', $data ?? [], null);
        $this->setIfExists('media_partner_description', $data ?? [], null);
        $this->setIfExists('publication_count', $data ?? [], null);
        $this->setIfExists('auto_publish_available', $data ?? [], null);
        $this->setIfExists('manual_publish_available', $data ?? [], null);
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

        if ($this->container['is_favorite'] === null) {
            $invalidProperties[] = "'is_favorite' can't be null";
        }
        if ($this->container['is_auto_publish'] === null) {
            $invalidProperties[] = "'is_auto_publish' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['media_partner_id'] === null) {
            $invalidProperties[] = "'media_partner_id' can't be null";
        }
        if ($this->container['is_paid'] === null) {
            $invalidProperties[] = "'is_paid' can't be null";
        }
        if ($this->container['publication_count'] === null) {
            $invalidProperties[] = "'publication_count' can't be null";
        }
        if ($this->container['auto_publish_available'] === null) {
            $invalidProperties[] = "'auto_publish_available' can't be null";
        }
        if ($this->container['manual_publish_available'] === null) {
            $invalidProperties[] = "'manual_publish_available' can't be null";
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
     * Gets is_favorite
     *
     * @return bool
     */
    public function getIsFavorite()
    {
        return $this->container['is_favorite'];
    }

    /**
     * Sets is_favorite
     *
     * @param bool $is_favorite is_favorite
     *
     * @return self
     */
    public function setIsFavorite($is_favorite)
    {
        if (is_null($is_favorite)) {
            throw new \InvalidArgumentException('non-nullable is_favorite cannot be null');
        }
        $this->container['is_favorite'] = $is_favorite;

        return $this;
    }

    /**
     * Gets is_auto_publish
     *
     * @return bool
     */
    public function getIsAutoPublish()
    {
        return $this->container['is_auto_publish'];
    }

    /**
     * Sets is_auto_publish
     *
     * @param bool $is_auto_publish is_auto_publish
     *
     * @return self
     */
    public function setIsAutoPublish($is_auto_publish)
    {
        if (is_null($is_auto_publish)) {
            throw new \InvalidArgumentException('non-nullable is_auto_publish cannot be null');
        }
        $this->container['is_auto_publish'] = $is_auto_publish;

        return $this;
    }

    /**
     * Gets category
     *
     * @return \Brixion\Kolibri\Model\MediaPartnerCategory
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Brixion\Kolibri\Model\MediaPartnerCategory $category category
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Brixion\Kolibri\Model\MediaContractStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Brixion\Kolibri\Model\MediaContractStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets media_partner_logo_url
     *
     * @return string|null
     */
    public function getMediaPartnerLogoUrl()
    {
        return $this->container['media_partner_logo_url'];
    }

    /**
     * Sets media_partner_logo_url
     *
     * @param string|null $media_partner_logo_url media_partner_logo_url
     *
     * @return self
     */
    public function setMediaPartnerLogoUrl($media_partner_logo_url)
    {
        if (is_null($media_partner_logo_url)) {
            throw new \InvalidArgumentException('non-nullable media_partner_logo_url cannot be null');
        }
        $this->container['media_partner_logo_url'] = $media_partner_logo_url;

        return $this;
    }

    /**
     * Gets media_partner_name
     *
     * @return string|null
     */
    public function getMediaPartnerName()
    {
        return $this->container['media_partner_name'];
    }

    /**
     * Sets media_partner_name
     *
     * @param string|null $media_partner_name media_partner_name
     *
     * @return self
     */
    public function setMediaPartnerName($media_partner_name)
    {
        if (is_null($media_partner_name)) {
            throw new \InvalidArgumentException('non-nullable media_partner_name cannot be null');
        }
        $this->container['media_partner_name'] = $media_partner_name;

        return $this;
    }

    /**
     * Gets media_partner_id
     *
     * @return string
     */
    public function getMediaPartnerId()
    {
        return $this->container['media_partner_id'];
    }

    /**
     * Sets media_partner_id
     *
     * @param string $media_partner_id media_partner_id
     *
     * @return self
     */
    public function setMediaPartnerId($media_partner_id)
    {
        if (is_null($media_partner_id)) {
            throw new \InvalidArgumentException('non-nullable media_partner_id cannot be null');
        }
        $this->container['media_partner_id'] = $media_partner_id;

        return $this;
    }

    /**
     * Gets is_paid
     *
     * @return bool
     */
    public function getIsPaid()
    {
        return $this->container['is_paid'];
    }

    /**
     * Sets is_paid
     *
     * @param bool $is_paid is_paid
     *
     * @return self
     */
    public function setIsPaid($is_paid)
    {
        if (is_null($is_paid)) {
            throw new \InvalidArgumentException('non-nullable is_paid cannot be null');
        }
        $this->container['is_paid'] = $is_paid;

        return $this;
    }

    /**
     * Gets media_partner_website_url
     *
     * @return string|null
     */
    public function getMediaPartnerWebsiteUrl()
    {
        return $this->container['media_partner_website_url'];
    }

    /**
     * Sets media_partner_website_url
     *
     * @param string|null $media_partner_website_url media_partner_website_url
     *
     * @return self
     */
    public function setMediaPartnerWebsiteUrl($media_partner_website_url)
    {
        if (is_null($media_partner_website_url)) {
            throw new \InvalidArgumentException('non-nullable media_partner_website_url cannot be null');
        }
        $this->container['media_partner_website_url'] = $media_partner_website_url;

        return $this;
    }

    /**
     * Gets media_partner_description
     *
     * @return string|null
     */
    public function getMediaPartnerDescription()
    {
        return $this->container['media_partner_description'];
    }

    /**
     * Sets media_partner_description
     *
     * @param string|null $media_partner_description media_partner_description
     *
     * @return self
     */
    public function setMediaPartnerDescription($media_partner_description)
    {
        if (is_null($media_partner_description)) {
            throw new \InvalidArgumentException('non-nullable media_partner_description cannot be null');
        }
        $this->container['media_partner_description'] = $media_partner_description;

        return $this;
    }

    /**
     * Gets publication_count
     *
     * @return int
     */
    public function getPublicationCount()
    {
        return $this->container['publication_count'];
    }

    /**
     * Sets publication_count
     *
     * @param int $publication_count publication_count
     *
     * @return self
     */
    public function setPublicationCount($publication_count)
    {
        if (is_null($publication_count)) {
            throw new \InvalidArgumentException('non-nullable publication_count cannot be null');
        }
        $this->container['publication_count'] = $publication_count;

        return $this;
    }

    /**
     * Gets auto_publish_available
     *
     * @return bool
     */
    public function getAutoPublishAvailable()
    {
        return $this->container['auto_publish_available'];
    }

    /**
     * Sets auto_publish_available
     *
     * @param bool $auto_publish_available auto_publish_available
     *
     * @return self
     */
    public function setAutoPublishAvailable($auto_publish_available)
    {
        if (is_null($auto_publish_available)) {
            throw new \InvalidArgumentException('non-nullable auto_publish_available cannot be null');
        }
        $this->container['auto_publish_available'] = $auto_publish_available;

        return $this;
    }

    /**
     * Gets manual_publish_available
     *
     * @return bool
     */
    public function getManualPublishAvailable()
    {
        return $this->container['manual_publish_available'];
    }

    /**
     * Sets manual_publish_available
     *
     * @param bool $manual_publish_available manual_publish_available
     *
     * @return self
     */
    public function setManualPublishAvailable($manual_publish_available)
    {
        if (is_null($manual_publish_available)) {
            throw new \InvalidArgumentException('non-nullable manual_publish_available cannot be null');
        }
        $this->container['manual_publish_available'] = $manual_publish_available;

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
            throw new \InvalidArgumentException('invalid length for $id when calling MediaContractSnapShot., must be bigger than or equal to 1.');
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
