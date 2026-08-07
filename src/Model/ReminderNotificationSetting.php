<?php

declare(strict_types=1);

/**
 * ReminderNotificationSetting - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ReminderNotificationSetting.
 * @implements \ArrayAccess<string, mixed>
 */
class ReminderNotificationSetting implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ReminderNotificationSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'setting_is_active' => 'bool',
        'first_notification_in_days' => 'int',
        'second_notification_in_months' => 'int',
        'third_notification_in_years' => 'int',
        'single_notification' => 'int',
        'is_single_notification' => 'bool',
        'date_format' => '\Brixion\Kolibri\Model\NotificationDateFormat',
        'setting_type' => '\Brixion\Kolibri\Model\ReminderNotificationSettingType',
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
        'setting_is_active' => null,
        'first_notification_in_days' => 'int32',
        'second_notification_in_months' => 'int32',
        'third_notification_in_years' => 'int32',
        'single_notification' => 'int32',
        'is_single_notification' => null,
        'date_format' => null,
        'setting_type' => null,
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
        'setting_is_active' => false,
        'first_notification_in_days' => false,
        'second_notification_in_months' => false,
        'third_notification_in_years' => false,
        'single_notification' => false,
        'is_single_notification' => false,
        'date_format' => false,
        'setting_type' => false,
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
        'setting_is_active' => 'settingIsActive',
        'first_notification_in_days' => 'firstNotificationInDays',
        'second_notification_in_months' => 'secondNotificationInMonths',
        'third_notification_in_years' => 'thirdNotificationInYears',
        'single_notification' => 'singleNotification',
        'is_single_notification' => 'isSingleNotification',
        'date_format' => 'dateFormat',
        'setting_type' => 'settingType',
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
        'setting_is_active' => 'setSettingIsActive',
        'first_notification_in_days' => 'setFirstNotificationInDays',
        'second_notification_in_months' => 'setSecondNotificationInMonths',
        'third_notification_in_years' => 'setThirdNotificationInYears',
        'single_notification' => 'setSingleNotification',
        'is_single_notification' => 'setIsSingleNotification',
        'date_format' => 'setDateFormat',
        'setting_type' => 'setSettingType',
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
        'setting_is_active' => 'getSettingIsActive',
        'first_notification_in_days' => 'getFirstNotificationInDays',
        'second_notification_in_months' => 'getSecondNotificationInMonths',
        'third_notification_in_years' => 'getThirdNotificationInYears',
        'single_notification' => 'getSingleNotification',
        'is_single_notification' => 'getIsSingleNotification',
        'date_format' => 'getDateFormat',
        'setting_type' => 'getSettingType',
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
        $this->setIfExists('setting_is_active', $data ?? [], null);
        $this->setIfExists('first_notification_in_days', $data ?? [], null);
        $this->setIfExists('second_notification_in_months', $data ?? [], null);
        $this->setIfExists('third_notification_in_years', $data ?? [], null);
        $this->setIfExists('single_notification', $data ?? [], null);
        $this->setIfExists('is_single_notification', $data ?? [], null);
        $this->setIfExists('date_format', $data ?? [], null);
        $this->setIfExists('setting_type', $data ?? [], null);
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

        if ($this->container['setting_is_active'] === null) {
            $invalidProperties[] = "'setting_is_active' can't be null";
        }
        if ($this->container['first_notification_in_days'] === null) {
            $invalidProperties[] = "'first_notification_in_days' can't be null";
        }
        if ($this->container['second_notification_in_months'] === null) {
            $invalidProperties[] = "'second_notification_in_months' can't be null";
        }
        if ($this->container['third_notification_in_years'] === null) {
            $invalidProperties[] = "'third_notification_in_years' can't be null";
        }
        if ($this->container['single_notification'] === null) {
            $invalidProperties[] = "'single_notification' can't be null";
        }
        if ($this->container['is_single_notification'] === null) {
            $invalidProperties[] = "'is_single_notification' can't be null";
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
     * Gets setting_is_active
     *
     * @return bool
     */
    public function getSettingIsActive()
    {
        return $this->container['setting_is_active'];
    }

    /**
     * Sets setting_is_active
     *
     * @param bool $setting_is_active setting_is_active
     *
     * @return self
     */
    public function setSettingIsActive($setting_is_active)
    {
        if (is_null($setting_is_active)) {
            throw new \InvalidArgumentException('non-nullable setting_is_active cannot be null');
        }
        $this->container['setting_is_active'] = $setting_is_active;

        return $this;
    }

    /**
     * Gets first_notification_in_days
     *
     * @return int
     */
    public function getFirstNotificationInDays()
    {
        return $this->container['first_notification_in_days'];
    }

    /**
     * Sets first_notification_in_days
     *
     * @param int $first_notification_in_days first_notification_in_days
     *
     * @return self
     */
    public function setFirstNotificationInDays($first_notification_in_days)
    {
        if (is_null($first_notification_in_days)) {
            throw new \InvalidArgumentException('non-nullable first_notification_in_days cannot be null');
        }
        $this->container['first_notification_in_days'] = $first_notification_in_days;

        return $this;
    }

    /**
     * Gets second_notification_in_months
     *
     * @return int
     */
    public function getSecondNotificationInMonths()
    {
        return $this->container['second_notification_in_months'];
    }

    /**
     * Sets second_notification_in_months
     *
     * @param int $second_notification_in_months second_notification_in_months
     *
     * @return self
     */
    public function setSecondNotificationInMonths($second_notification_in_months)
    {
        if (is_null($second_notification_in_months)) {
            throw new \InvalidArgumentException('non-nullable second_notification_in_months cannot be null');
        }
        $this->container['second_notification_in_months'] = $second_notification_in_months;

        return $this;
    }

    /**
     * Gets third_notification_in_years
     *
     * @return int
     */
    public function getThirdNotificationInYears()
    {
        return $this->container['third_notification_in_years'];
    }

    /**
     * Sets third_notification_in_years
     *
     * @param int $third_notification_in_years third_notification_in_years
     *
     * @return self
     */
    public function setThirdNotificationInYears($third_notification_in_years)
    {
        if (is_null($third_notification_in_years)) {
            throw new \InvalidArgumentException('non-nullable third_notification_in_years cannot be null');
        }
        $this->container['third_notification_in_years'] = $third_notification_in_years;

        return $this;
    }

    /**
     * Gets single_notification
     *
     * @return int
     */
    public function getSingleNotification()
    {
        return $this->container['single_notification'];
    }

    /**
     * Sets single_notification
     *
     * @param int $single_notification single_notification
     *
     * @return self
     */
    public function setSingleNotification($single_notification)
    {
        if (is_null($single_notification)) {
            throw new \InvalidArgumentException('non-nullable single_notification cannot be null');
        }
        $this->container['single_notification'] = $single_notification;

        return $this;
    }

    /**
     * Gets is_single_notification
     *
     * @return bool
     */
    public function getIsSingleNotification()
    {
        return $this->container['is_single_notification'];
    }

    /**
     * Sets is_single_notification
     *
     * @param bool $is_single_notification is_single_notification
     *
     * @return self
     */
    public function setIsSingleNotification($is_single_notification)
    {
        if (is_null($is_single_notification)) {
            throw new \InvalidArgumentException('non-nullable is_single_notification cannot be null');
        }
        $this->container['is_single_notification'] = $is_single_notification;

        return $this;
    }

    /**
     * Gets date_format
     *
     * @return \Brixion\Kolibri\Model\NotificationDateFormat|null
     */
    public function getDateFormat()
    {
        return $this->container['date_format'];
    }

    /**
     * Sets date_format
     *
     * @param \Brixion\Kolibri\Model\NotificationDateFormat|null $date_format date_format
     *
     * @return self
     */
    public function setDateFormat($date_format)
    {
        if (is_null($date_format)) {
            throw new \InvalidArgumentException('non-nullable date_format cannot be null');
        }
        $this->container['date_format'] = $date_format;

        return $this;
    }

    /**
     * Gets setting_type
     *
     * @return \Brixion\Kolibri\Model\ReminderNotificationSettingType|null
     */
    public function getSettingType()
    {
        return $this->container['setting_type'];
    }

    /**
     * Sets setting_type
     *
     * @param \Brixion\Kolibri\Model\ReminderNotificationSettingType|null $setting_type setting_type
     *
     * @return self
     */
    public function setSettingType($setting_type)
    {
        if (is_null($setting_type)) {
            throw new \InvalidArgumentException('non-nullable setting_type cannot be null');
        }
        $this->container['setting_type'] = $setting_type;

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
            throw new \InvalidArgumentException('invalid length for $id when calling ReminderNotificationSetting., must be bigger than or equal to 1.');
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
