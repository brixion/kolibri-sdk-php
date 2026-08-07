<?php

declare(strict_types=1);

/**
 * PublicationSnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * PublicationSnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class PublicationSnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'PublicationSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'id' => 'string',
        'category' => '\Brixion\Kolibri\Model\MediaPartnerCategory',
        'date_time_confirmed' => '\DateTime',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'details_url' => 'string',
        'is_favorite' => 'bool',
        'is_obligatory' => 'bool',
        'is_paid_service' => 'bool',
        'logo_url' => 'string',
        'media_partner_id' => 'string',
        'media_partner_is_active' => 'bool',
        'allow_old_imported_properties' => 'bool',
        'media_partner_name' => 'string',
        'publication_status' => '\Brixion\Kolibri\Model\PublicationStatus',
        'publication_withdrawal_allowed' => 'bool',
        'status_message' => 'string',
        'media_contract_status' => '\Brixion\Kolibri\Model\MediaContractStatus',
        'is_active' => 'bool',
        'is_auto_publish' => 'bool',
        'real_estate_agency_id' => 'string',
        'linked_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'id' => 'guid',
        'category' => null,
        'date_time_confirmed' => 'date-time',
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'details_url' => null,
        'is_favorite' => null,
        'is_obligatory' => null,
        'is_paid_service' => null,
        'logo_url' => null,
        'media_partner_id' => 'guid',
        'media_partner_is_active' => null,
        'allow_old_imported_properties' => null,
        'media_partner_name' => null,
        'publication_status' => null,
        'publication_withdrawal_allowed' => null,
        'status_message' => null,
        'media_contract_status' => null,
        'is_active' => null,
        'is_auto_publish' => null,
        'real_estate_agency_id' => 'guid',
        'linked_assignment' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'id' => false,
        'category' => false,
        'date_time_confirmed' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'details_url' => false,
        'is_favorite' => false,
        'is_obligatory' => false,
        'is_paid_service' => false,
        'logo_url' => false,
        'media_partner_id' => false,
        'media_partner_is_active' => false,
        'allow_old_imported_properties' => false,
        'media_partner_name' => false,
        'publication_status' => false,
        'publication_withdrawal_allowed' => false,
        'status_message' => false,
        'media_contract_status' => false,
        'is_active' => false,
        'is_auto_publish' => false,
        'real_estate_agency_id' => false,
        'linked_assignment' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
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
        'category' => 'category',
        'date_time_confirmed' => 'dateTimeConfirmed',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'details_url' => 'detailsUrl',
        'is_favorite' => 'isFavorite',
        'is_obligatory' => 'isObligatory',
        'is_paid_service' => 'isPaidService',
        'logo_url' => 'logoUrl',
        'media_partner_id' => 'mediaPartnerId',
        'media_partner_is_active' => 'mediaPartnerIsActive',
        'allow_old_imported_properties' => 'allowOldImportedProperties',
        'media_partner_name' => 'mediaPartnerName',
        'publication_status' => 'publicationStatus',
        'publication_withdrawal_allowed' => 'publicationWithdrawalAllowed',
        'status_message' => 'statusMessage',
        'media_contract_status' => 'mediaContractStatus',
        'is_active' => 'isActive',
        'is_auto_publish' => 'isAutoPublish',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'linked_assignment' => 'linkedAssignment',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'category' => 'setCategory',
        'date_time_confirmed' => 'setDateTimeConfirmed',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'details_url' => 'setDetailsUrl',
        'is_favorite' => 'setIsFavorite',
        'is_obligatory' => 'setIsObligatory',
        'is_paid_service' => 'setIsPaidService',
        'logo_url' => 'setLogoUrl',
        'media_partner_id' => 'setMediaPartnerId',
        'media_partner_is_active' => 'setMediaPartnerIsActive',
        'allow_old_imported_properties' => 'setAllowOldImportedProperties',
        'media_partner_name' => 'setMediaPartnerName',
        'publication_status' => 'setPublicationStatus',
        'publication_withdrawal_allowed' => 'setPublicationWithdrawalAllowed',
        'status_message' => 'setStatusMessage',
        'media_contract_status' => 'setMediaContractStatus',
        'is_active' => 'setIsActive',
        'is_auto_publish' => 'setIsAutoPublish',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'linked_assignment' => 'setLinkedAssignment',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'category' => 'getCategory',
        'date_time_confirmed' => 'getDateTimeConfirmed',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'details_url' => 'getDetailsUrl',
        'is_favorite' => 'getIsFavorite',
        'is_obligatory' => 'getIsObligatory',
        'is_paid_service' => 'getIsPaidService',
        'logo_url' => 'getLogoUrl',
        'media_partner_id' => 'getMediaPartnerId',
        'media_partner_is_active' => 'getMediaPartnerIsActive',
        'allow_old_imported_properties' => 'getAllowOldImportedProperties',
        'media_partner_name' => 'getMediaPartnerName',
        'publication_status' => 'getPublicationStatus',
        'publication_withdrawal_allowed' => 'getPublicationWithdrawalAllowed',
        'status_message' => 'getStatusMessage',
        'media_contract_status' => 'getMediaContractStatus',
        'is_active' => 'getIsActive',
        'is_auto_publish' => 'getIsAutoPublish',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'linked_assignment' => 'getLinkedAssignment',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
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
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('date_time_confirmed', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('details_url', $data ?? [], null);
        $this->setIfExists('is_favorite', $data ?? [], null);
        $this->setIfExists('is_obligatory', $data ?? [], null);
        $this->setIfExists('is_paid_service', $data ?? [], null);
        $this->setIfExists('logo_url', $data ?? [], null);
        $this->setIfExists('media_partner_id', $data ?? [], null);
        $this->setIfExists('media_partner_is_active', $data ?? [], null);
        $this->setIfExists('allow_old_imported_properties', $data ?? [], null);
        $this->setIfExists('media_partner_name', $data ?? [], null);
        $this->setIfExists('publication_status', $data ?? [], null);
        $this->setIfExists('publication_withdrawal_allowed', $data ?? [], null);
        $this->setIfExists('status_message', $data ?? [], null);
        $this->setIfExists('media_contract_status', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_auto_publish', $data ?? [], null);
        $this->setIfExists('real_estate_agency_id', $data ?? [], null);
        $this->setIfExists('linked_assignment', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
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
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['is_favorite'] === null) {
            $invalidProperties[] = "'is_favorite' can't be null";
        }
        if ($this->container['is_obligatory'] === null) {
            $invalidProperties[] = "'is_obligatory' can't be null";
        }
        if ($this->container['is_paid_service'] === null) {
            $invalidProperties[] = "'is_paid_service' can't be null";
        }
        if ($this->container['media_partner_id'] === null) {
            $invalidProperties[] = "'media_partner_id' can't be null";
        }
        if ($this->container['media_partner_is_active'] === null) {
            $invalidProperties[] = "'media_partner_is_active' can't be null";
        }
        if ($this->container['allow_old_imported_properties'] === null) {
            $invalidProperties[] = "'allow_old_imported_properties' can't be null";
        }
        if ($this->container['publication_status'] === null) {
            $invalidProperties[] = "'publication_status' can't be null";
        }
        if ($this->container['publication_withdrawal_allowed'] === null) {
            $invalidProperties[] = "'publication_withdrawal_allowed' can't be null";
        }
        if ($this->container['media_contract_status'] === null) {
            $invalidProperties[] = "'media_contract_status' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['is_auto_publish'] === null) {
            $invalidProperties[] = "'is_auto_publish' can't be null";
        }
        if ($this->container['real_estate_agency_id'] === null) {
            $invalidProperties[] = "'real_estate_agency_id' can't be null";
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
     * Gets date_time_confirmed
     *
     * @return \DateTime|null
     */
    public function getDateTimeConfirmed()
    {
        return $this->container['date_time_confirmed'];
    }

    /**
     * Sets date_time_confirmed
     *
     * @param \DateTime|null $date_time_confirmed date_time_confirmed
     *
     * @return self
     */
    public function setDateTimeConfirmed($date_time_confirmed)
    {
        if (is_null($date_time_confirmed)) {
            throw new \InvalidArgumentException('non-nullable date_time_confirmed cannot be null');
        }
        $this->container['date_time_confirmed'] = $date_time_confirmed;

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
     * Gets details_url
     *
     * @return string|null
     */
    public function getDetailsUrl()
    {
        return $this->container['details_url'];
    }

    /**
     * Sets details_url
     *
     * @param string|null $details_url details_url
     *
     * @return self
     */
    public function setDetailsUrl($details_url)
    {
        if (is_null($details_url)) {
            throw new \InvalidArgumentException('non-nullable details_url cannot be null');
        }
        $this->container['details_url'] = $details_url;

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
     * Gets is_obligatory
     *
     * @return bool
     */
    public function getIsObligatory()
    {
        return $this->container['is_obligatory'];
    }

    /**
     * Sets is_obligatory
     *
     * @param bool $is_obligatory is_obligatory
     *
     * @return self
     */
    public function setIsObligatory($is_obligatory)
    {
        if (is_null($is_obligatory)) {
            throw new \InvalidArgumentException('non-nullable is_obligatory cannot be null');
        }
        $this->container['is_obligatory'] = $is_obligatory;

        return $this;
    }

    /**
     * Gets is_paid_service
     *
     * @return bool
     */
    public function getIsPaidService()
    {
        return $this->container['is_paid_service'];
    }

    /**
     * Sets is_paid_service
     *
     * @param bool $is_paid_service is_paid_service
     *
     * @return self
     */
    public function setIsPaidService($is_paid_service)
    {
        if (is_null($is_paid_service)) {
            throw new \InvalidArgumentException('non-nullable is_paid_service cannot be null');
        }
        $this->container['is_paid_service'] = $is_paid_service;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string|null $logo_url logo_url
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        if (is_null($logo_url)) {
            throw new \InvalidArgumentException('non-nullable logo_url cannot be null');
        }
        $this->container['logo_url'] = $logo_url;

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
     * Gets media_partner_is_active
     *
     * @return bool
     */
    public function getMediaPartnerIsActive()
    {
        return $this->container['media_partner_is_active'];
    }

    /**
     * Sets media_partner_is_active
     *
     * @param bool $media_partner_is_active media_partner_is_active
     *
     * @return self
     */
    public function setMediaPartnerIsActive($media_partner_is_active)
    {
        if (is_null($media_partner_is_active)) {
            throw new \InvalidArgumentException('non-nullable media_partner_is_active cannot be null');
        }
        $this->container['media_partner_is_active'] = $media_partner_is_active;

        return $this;
    }

    /**
     * Gets allow_old_imported_properties
     *
     * @return bool
     */
    public function getAllowOldImportedProperties()
    {
        return $this->container['allow_old_imported_properties'];
    }

    /**
     * Sets allow_old_imported_properties
     *
     * @param bool $allow_old_imported_properties allow_old_imported_properties
     *
     * @return self
     */
    public function setAllowOldImportedProperties($allow_old_imported_properties)
    {
        if (is_null($allow_old_imported_properties)) {
            throw new \InvalidArgumentException('non-nullable allow_old_imported_properties cannot be null');
        }
        $this->container['allow_old_imported_properties'] = $allow_old_imported_properties;

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
     * Gets publication_status
     *
     * @return \Brixion\Kolibri\Model\PublicationStatus
     */
    public function getPublicationStatus()
    {
        return $this->container['publication_status'];
    }

    /**
     * Sets publication_status
     *
     * @param \Brixion\Kolibri\Model\PublicationStatus $publication_status publication_status
     *
     * @return self
     */
    public function setPublicationStatus($publication_status)
    {
        if (is_null($publication_status)) {
            throw new \InvalidArgumentException('non-nullable publication_status cannot be null');
        }
        $this->container['publication_status'] = $publication_status;

        return $this;
    }

    /**
     * Gets publication_withdrawal_allowed
     *
     * @return bool
     */
    public function getPublicationWithdrawalAllowed()
    {
        return $this->container['publication_withdrawal_allowed'];
    }

    /**
     * Sets publication_withdrawal_allowed
     *
     * @param bool $publication_withdrawal_allowed publication_withdrawal_allowed
     *
     * @return self
     */
    public function setPublicationWithdrawalAllowed($publication_withdrawal_allowed)
    {
        if (is_null($publication_withdrawal_allowed)) {
            throw new \InvalidArgumentException('non-nullable publication_withdrawal_allowed cannot be null');
        }
        $this->container['publication_withdrawal_allowed'] = $publication_withdrawal_allowed;

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
     * Gets media_contract_status
     *
     * @return \Brixion\Kolibri\Model\MediaContractStatus
     */
    public function getMediaContractStatus()
    {
        return $this->container['media_contract_status'];
    }

    /**
     * Sets media_contract_status
     *
     * @param \Brixion\Kolibri\Model\MediaContractStatus $media_contract_status media_contract_status
     *
     * @return self
     */
    public function setMediaContractStatus($media_contract_status)
    {
        if (is_null($media_contract_status)) {
            throw new \InvalidArgumentException('non-nullable media_contract_status cannot be null');
        }
        $this->container['media_contract_status'] = $media_contract_status;

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
     * Gets linked_assignment
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment|null
     */
    public function getLinkedAssignment()
    {
        return $this->container['linked_assignment'];
    }

    /**
     * Sets linked_assignment
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment|null $linked_assignment linked_assignment
     *
     * @return self
     */
    public function setLinkedAssignment($linked_assignment)
    {
        if (is_null($linked_assignment)) {
            throw new \InvalidArgumentException('non-nullable linked_assignment cannot be null');
        }
        $this->container['linked_assignment'] = $linked_assignment;

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
