<?php

declare(strict_types=1);

/**
 * AccountSettings - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AccountSettings.
 * @implements \ArrayAccess<string, mixed>
 */
class AccountSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AccountSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'custom_user_settings' => 'string',
        'accepted_terms_document_name' => 'string',
        'accepted_terms_on' => '\DateTime',
        'default_culture' => 'string',
        'seen_contact_form_on' => '\DateTime',
        'seen_whats_new_banner_on' => '\DateTime',
        'is_administrator' => 'bool',
        'works_at_real_estate_agencies' => '\Brixion\Kolibri\Model\WorksAtRealEstateAgency[]',
        'linked_real_estate_agencies' => '\Brixion\Kolibri\Model\LinkedRealEstateAgency[]',
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
        'custom_user_settings' => null,
        'accepted_terms_document_name' => null,
        'accepted_terms_on' => 'date-time',
        'default_culture' => null,
        'seen_contact_form_on' => 'date-time',
        'seen_whats_new_banner_on' => 'date-time',
        'is_administrator' => null,
        'works_at_real_estate_agencies' => null,
        'linked_real_estate_agencies' => null,
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
        'custom_user_settings' => false,
        'accepted_terms_document_name' => false,
        'accepted_terms_on' => false,
        'default_culture' => false,
        'seen_contact_form_on' => false,
        'seen_whats_new_banner_on' => false,
        'is_administrator' => false,
        'works_at_real_estate_agencies' => false,
        'linked_real_estate_agencies' => false,
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
        'custom_user_settings' => 'customUserSettings',
        'accepted_terms_document_name' => 'acceptedTermsDocumentName',
        'accepted_terms_on' => 'acceptedTermsOn',
        'default_culture' => 'defaultCulture',
        'seen_contact_form_on' => 'seenContactFormOn',
        'seen_whats_new_banner_on' => 'seenWhatsNewBannerOn',
        'is_administrator' => 'isAdministrator',
        'works_at_real_estate_agencies' => 'worksAtRealEstateAgencies',
        'linked_real_estate_agencies' => 'linkedRealEstateAgencies',
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
        'custom_user_settings' => 'setCustomUserSettings',
        'accepted_terms_document_name' => 'setAcceptedTermsDocumentName',
        'accepted_terms_on' => 'setAcceptedTermsOn',
        'default_culture' => 'setDefaultCulture',
        'seen_contact_form_on' => 'setSeenContactFormOn',
        'seen_whats_new_banner_on' => 'setSeenWhatsNewBannerOn',
        'is_administrator' => 'setIsAdministrator',
        'works_at_real_estate_agencies' => 'setWorksAtRealEstateAgencies',
        'linked_real_estate_agencies' => 'setLinkedRealEstateAgencies',
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
        'custom_user_settings' => 'getCustomUserSettings',
        'accepted_terms_document_name' => 'getAcceptedTermsDocumentName',
        'accepted_terms_on' => 'getAcceptedTermsOn',
        'default_culture' => 'getDefaultCulture',
        'seen_contact_form_on' => 'getSeenContactFormOn',
        'seen_whats_new_banner_on' => 'getSeenWhatsNewBannerOn',
        'is_administrator' => 'getIsAdministrator',
        'works_at_real_estate_agencies' => 'getWorksAtRealEstateAgencies',
        'linked_real_estate_agencies' => 'getLinkedRealEstateAgencies',
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
        $this->setIfExists('custom_user_settings', $data ?? [], null);
        $this->setIfExists('accepted_terms_document_name', $data ?? [], null);
        $this->setIfExists('accepted_terms_on', $data ?? [], null);
        $this->setIfExists('default_culture', $data ?? [], null);
        $this->setIfExists('seen_contact_form_on', $data ?? [], null);
        $this->setIfExists('seen_whats_new_banner_on', $data ?? [], null);
        $this->setIfExists('is_administrator', $data ?? [], null);
        $this->setIfExists('works_at_real_estate_agencies', $data ?? [], null);
        $this->setIfExists('linked_real_estate_agencies', $data ?? [], null);
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

        if ($this->container['is_administrator'] === null) {
            $invalidProperties[] = "'is_administrator' can't be null";
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
     * Gets custom_user_settings
     *
     * @return string|null
     */
    public function getCustomUserSettings()
    {
        return $this->container['custom_user_settings'];
    }

    /**
     * Sets custom_user_settings
     *
     * @param string|null $custom_user_settings custom_user_settings
     *
     * @return self
     */
    public function setCustomUserSettings($custom_user_settings)
    {
        if (is_null($custom_user_settings)) {
            throw new \InvalidArgumentException('non-nullable custom_user_settings cannot be null');
        }
        $this->container['custom_user_settings'] = $custom_user_settings;

        return $this;
    }

    /**
     * Gets accepted_terms_document_name
     *
     * @return string|null
     */
    public function getAcceptedTermsDocumentName()
    {
        return $this->container['accepted_terms_document_name'];
    }

    /**
     * Sets accepted_terms_document_name
     *
     * @param string|null $accepted_terms_document_name accepted_terms_document_name
     *
     * @return self
     */
    public function setAcceptedTermsDocumentName($accepted_terms_document_name)
    {
        if (is_null($accepted_terms_document_name)) {
            throw new \InvalidArgumentException('non-nullable accepted_terms_document_name cannot be null');
        }
        $this->container['accepted_terms_document_name'] = $accepted_terms_document_name;

        return $this;
    }

    /**
     * Gets accepted_terms_on
     *
     * @return \DateTime|null
     */
    public function getAcceptedTermsOn()
    {
        return $this->container['accepted_terms_on'];
    }

    /**
     * Sets accepted_terms_on
     *
     * @param \DateTime|null $accepted_terms_on accepted_terms_on
     *
     * @return self
     */
    public function setAcceptedTermsOn($accepted_terms_on)
    {
        if (is_null($accepted_terms_on)) {
            throw new \InvalidArgumentException('non-nullable accepted_terms_on cannot be null');
        }
        $this->container['accepted_terms_on'] = $accepted_terms_on;

        return $this;
    }

    /**
     * Gets default_culture
     *
     * @return string|null
     */
    public function getDefaultCulture()
    {
        return $this->container['default_culture'];
    }

    /**
     * Sets default_culture
     *
     * @param string|null $default_culture default_culture
     *
     * @return self
     */
    public function setDefaultCulture($default_culture)
    {
        if (is_null($default_culture)) {
            throw new \InvalidArgumentException('non-nullable default_culture cannot be null');
        }
        $this->container['default_culture'] = $default_culture;

        return $this;
    }

    /**
     * Gets seen_contact_form_on
     *
     * @return \DateTime|null
     */
    public function getSeenContactFormOn()
    {
        return $this->container['seen_contact_form_on'];
    }

    /**
     * Sets seen_contact_form_on
     *
     * @param \DateTime|null $seen_contact_form_on seen_contact_form_on
     *
     * @return self
     */
    public function setSeenContactFormOn($seen_contact_form_on)
    {
        if (is_null($seen_contact_form_on)) {
            throw new \InvalidArgumentException('non-nullable seen_contact_form_on cannot be null');
        }
        $this->container['seen_contact_form_on'] = $seen_contact_form_on;

        return $this;
    }

    /**
     * Gets seen_whats_new_banner_on
     *
     * @return \DateTime|null
     */
    public function getSeenWhatsNewBannerOn()
    {
        return $this->container['seen_whats_new_banner_on'];
    }

    /**
     * Sets seen_whats_new_banner_on
     *
     * @param \DateTime|null $seen_whats_new_banner_on seen_whats_new_banner_on
     *
     * @return self
     */
    public function setSeenWhatsNewBannerOn($seen_whats_new_banner_on)
    {
        if (is_null($seen_whats_new_banner_on)) {
            throw new \InvalidArgumentException('non-nullable seen_whats_new_banner_on cannot be null');
        }
        $this->container['seen_whats_new_banner_on'] = $seen_whats_new_banner_on;

        return $this;
    }

    /**
     * Gets is_administrator
     *
     * @return bool
     */
    public function getIsAdministrator()
    {
        return $this->container['is_administrator'];
    }

    /**
     * Sets is_administrator
     *
     * @param bool $is_administrator is_administrator
     *
     * @return self
     */
    public function setIsAdministrator($is_administrator)
    {
        if (is_null($is_administrator)) {
            throw new \InvalidArgumentException('non-nullable is_administrator cannot be null');
        }
        $this->container['is_administrator'] = $is_administrator;

        return $this;
    }

    /**
     * Gets works_at_real_estate_agencies
     *
     * @return \Brixion\Kolibri\Model\WorksAtRealEstateAgency[]|null
     */
    public function getWorksAtRealEstateAgencies()
    {
        return $this->container['works_at_real_estate_agencies'];
    }

    /**
     * Sets works_at_real_estate_agencies
     *
     * @param \Brixion\Kolibri\Model\WorksAtRealEstateAgency[]|null $works_at_real_estate_agencies works_at_real_estate_agencies
     *
     * @return self
     */
    public function setWorksAtRealEstateAgencies($works_at_real_estate_agencies)
    {
        if (is_null($works_at_real_estate_agencies)) {
            throw new \InvalidArgumentException('non-nullable works_at_real_estate_agencies cannot be null');
        }
        $this->container['works_at_real_estate_agencies'] = $works_at_real_estate_agencies;

        return $this;
    }

    /**
     * Gets linked_real_estate_agencies
     *
     * @return \Brixion\Kolibri\Model\LinkedRealEstateAgency[]|null
     */
    public function getLinkedRealEstateAgencies()
    {
        return $this->container['linked_real_estate_agencies'];
    }

    /**
     * Sets linked_real_estate_agencies
     *
     * @param \Brixion\Kolibri\Model\LinkedRealEstateAgency[]|null $linked_real_estate_agencies linked_real_estate_agencies
     *
     * @return self
     */
    public function setLinkedRealEstateAgencies($linked_real_estate_agencies)
    {
        if (is_null($linked_real_estate_agencies)) {
            throw new \InvalidArgumentException('non-nullable linked_real_estate_agencies cannot be null');
        }
        $this->container['linked_real_estate_agencies'] = $linked_real_estate_agencies;

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
            throw new \InvalidArgumentException('invalid length for $id when calling AccountSettings., must be bigger than or equal to 1.');
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
