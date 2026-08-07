<?php

declare(strict_types=1);

/**
 * MediaContract - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * MediaContract.
 * @implements \ArrayAccess<string, mixed>
 */
class MediaContract implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'MediaContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'auto_publish_available' => 'bool',
        'category' => '\Brixion\Kolibri\Model\MediaPartnerCategory',
        'is_auto_publish' => 'bool',
        'is_favorite' => 'bool',
        'is_paid' => 'bool',
        'manual_publish_available' => 'bool',
        'media_partner_description' => 'string',
        'media_partner_id' => 'string',
        'media_partner_logo_url' => 'string',
        'media_partner_name' => 'string',
        'media_partner_website_url' => 'string',
        'publication_count' => 'int',
        'status' => '\Brixion\Kolibri\Model\MediaContractStatus',
        'status_message' => 'string',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'is_active' => 'bool',
        'is_new' => 'bool',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'real_estate_agency_id' => 'string',
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
        'auto_publish_available' => null,
        'category' => null,
        'is_auto_publish' => null,
        'is_favorite' => null,
        'is_paid' => null,
        'manual_publish_available' => null,
        'media_partner_description' => null,
        'media_partner_id' => 'guid',
        'media_partner_logo_url' => null,
        'media_partner_name' => null,
        'media_partner_website_url' => null,
        'publication_count' => 'int32',
        'status' => null,
        'status_message' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'is_active' => null,
        'is_new' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'real_estate_agency_id' => 'guid',
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'auto_publish_available' => false,
        'category' => false,
        'is_auto_publish' => false,
        'is_favorite' => false,
        'is_paid' => false,
        'manual_publish_available' => false,
        'media_partner_description' => false,
        'media_partner_id' => false,
        'media_partner_logo_url' => false,
        'media_partner_name' => false,
        'media_partner_website_url' => false,
        'publication_count' => false,
        'status' => false,
        'status_message' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'is_active' => false,
        'is_new' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'real_estate_agency_id' => false,
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
        'auto_publish_available' => 'autoPublishAvailable',
        'category' => 'category',
        'is_auto_publish' => 'isAutoPublish',
        'is_favorite' => 'isFavorite',
        'is_paid' => 'isPaid',
        'manual_publish_available' => 'manualPublishAvailable',
        'media_partner_description' => 'mediaPartnerDescription',
        'media_partner_id' => 'mediaPartnerId',
        'media_partner_logo_url' => 'mediaPartnerLogoUrl',
        'media_partner_name' => 'mediaPartnerName',
        'media_partner_website_url' => 'mediaPartnerWebsiteUrl',
        'publication_count' => 'publicationCount',
        'status' => 'status',
        'status_message' => 'statusMessage',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'is_active' => 'isActive',
        'is_new' => 'isNew',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'auto_publish_available' => 'setAutoPublishAvailable',
        'category' => 'setCategory',
        'is_auto_publish' => 'setIsAutoPublish',
        'is_favorite' => 'setIsFavorite',
        'is_paid' => 'setIsPaid',
        'manual_publish_available' => 'setManualPublishAvailable',
        'media_partner_description' => 'setMediaPartnerDescription',
        'media_partner_id' => 'setMediaPartnerId',
        'media_partner_logo_url' => 'setMediaPartnerLogoUrl',
        'media_partner_name' => 'setMediaPartnerName',
        'media_partner_website_url' => 'setMediaPartnerWebsiteUrl',
        'publication_count' => 'setPublicationCount',
        'status' => 'setStatus',
        'status_message' => 'setStatusMessage',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'is_active' => 'setIsActive',
        'is_new' => 'setIsNew',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'auto_publish_available' => 'getAutoPublishAvailable',
        'category' => 'getCategory',
        'is_auto_publish' => 'getIsAutoPublish',
        'is_favorite' => 'getIsFavorite',
        'is_paid' => 'getIsPaid',
        'manual_publish_available' => 'getManualPublishAvailable',
        'media_partner_description' => 'getMediaPartnerDescription',
        'media_partner_id' => 'getMediaPartnerId',
        'media_partner_logo_url' => 'getMediaPartnerLogoUrl',
        'media_partner_name' => 'getMediaPartnerName',
        'media_partner_website_url' => 'getMediaPartnerWebsiteUrl',
        'publication_count' => 'getPublicationCount',
        'status' => 'getStatus',
        'status_message' => 'getStatusMessage',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'is_active' => 'getIsActive',
        'is_new' => 'getIsNew',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
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
        $this->setIfExists('auto_publish_available', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('is_auto_publish', $data ?? [], null);
        $this->setIfExists('is_favorite', $data ?? [], null);
        $this->setIfExists('is_paid', $data ?? [], null);
        $this->setIfExists('manual_publish_available', $data ?? [], null);
        $this->setIfExists('media_partner_description', $data ?? [], null);
        $this->setIfExists('media_partner_id', $data ?? [], null);
        $this->setIfExists('media_partner_logo_url', $data ?? [], null);
        $this->setIfExists('media_partner_name', $data ?? [], null);
        $this->setIfExists('media_partner_website_url', $data ?? [], null);
        $this->setIfExists('publication_count', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_message', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_new', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('real_estate_agency_id', $data ?? [], null);
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

        if ($this->container['auto_publish_available'] === null) {
            $invalidProperties[] = "'auto_publish_available' can't be null";
        }
        if ($this->container['is_auto_publish'] === null) {
            $invalidProperties[] = "'is_auto_publish' can't be null";
        }
        if ($this->container['is_favorite'] === null) {
            $invalidProperties[] = "'is_favorite' can't be null";
        }
        if ($this->container['is_paid'] === null) {
            $invalidProperties[] = "'is_paid' can't be null";
        }
        if ($this->container['manual_publish_available'] === null) {
            $invalidProperties[] = "'manual_publish_available' can't be null";
        }
        if ($this->container['media_partner_id'] === null) {
            $invalidProperties[] = "'media_partner_id' can't be null";
        }
        if ($this->container['publication_count'] === null) {
            $invalidProperties[] = "'publication_count' can't be null";
        }
        if ($this->container['date_time_created'] === null) {
            $invalidProperties[] = "'date_time_created' can't be null";
        }
        if ($this->container['date_time_modified'] === null) {
            $invalidProperties[] = "'date_time_modified' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['is_new'] === null) {
            $invalidProperties[] = "'is_new' can't be null";
        }
        if ($this->container['real_estate_agency_id'] === null) {
            $invalidProperties[] = "'real_estate_agency_id' can't be null";
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
     * Gets category
     *
     * @return \Brixion\Kolibri\Model\MediaPartnerCategory|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Brixion\Kolibri\Model\MediaPartnerCategory|null $category category
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
     * Gets status
     *
     * @return \Brixion\Kolibri\Model\MediaContractStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Brixion\Kolibri\Model\MediaContractStatus|null $status status
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
     * Gets status_message
     *
     * @return string|null
     */
    public function getStatusMessage()
    {
        return $this->container['status_message'];
    }

    /**
     * Sets status_message
     *
     * @param string|null $status_message status_message
     *
     * @return self
     */
    public function setStatusMessage($status_message)
    {
        if (is_null($status_message)) {
            throw new \InvalidArgumentException('non-nullable status_message cannot be null');
        }
        $this->container['status_message'] = $status_message;

        return $this;
    }

    /**
     * Gets date_time_created
     *
     * @return \DateTime
     */
    public function getDateTimeCreated()
    {
        return $this->container['date_time_created'];
    }

    /**
     * Sets date_time_created
     *
     * @param \DateTime $date_time_created date_time_created
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
     * @return \DateTime
     */
    public function getDateTimeModified()
    {
        return $this->container['date_time_modified'];
    }

    /**
     * Sets date_time_modified
     *
     * @param \DateTime $date_time_modified date_time_modified
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
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_new
     *
     * @return bool
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     *
     * @param bool $is_new is_new
     *
     * @return self
     */
    public function setIsNew($is_new)
    {
        if (is_null($is_new)) {
            throw new \InvalidArgumentException('non-nullable is_new cannot be null');
        }
        $this->container['is_new'] = $is_new;

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
     * Gets real_estate_agency_id
     *
     * @return string
     */
    public function getRealEstateAgencyId()
    {
        return $this->container['real_estate_agency_id'];
    }

    /**
     * Sets real_estate_agency_id
     *
     * @param string $real_estate_agency_id real_estate_agency_id
     *
     * @return self
     */
    public function setRealEstateAgencyId($real_estate_agency_id)
    {
        if (is_null($real_estate_agency_id)) {
            throw new \InvalidArgumentException('non-nullable real_estate_agency_id cannot be null');
        }
        $this->container['real_estate_agency_id'] = $real_estate_agency_id;

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
            throw new \InvalidArgumentException('invalid length for $id when calling MediaContract., must be bigger than or equal to 1.');
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
