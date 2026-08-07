<?php

declare(strict_types=1);

/**
 * AgendaItemCategory - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItemCategory.
 * @implements \ArrayAccess<string, mixed>
 */
class AgendaItemCategory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AgendaItemCategory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'back_color' => 'string',
        'display_name' => 'string',
        'front_color' => 'string',
        'is_private' => 'bool',
        'category_type' => '\Brixion\Kolibri\Model\AgendaItemCategoryType',
        'minutes_before_reminder' => 'int',
        'needs_to_be_confirmed' => 'bool',
        'priority' => '\Brixion\Kolibri\Model\Priority',
        'standard_description' => 'string',
        'standard_duration' => '\Brixion\Kolibri\Model\AgendaStandardDuration',
        'time_marker' => '\Brixion\Kolibri\Model\AgendaItemTimeMarker',
        'use_reminder' => 'bool',
        'is_urgent' => 'bool',
        'is_personal' => 'bool',
        'reminder' => '\Brixion\Kolibri\Model\AgendaItemCategoryReminder',
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
        'back_color' => null,
        'display_name' => null,
        'front_color' => null,
        'is_private' => null,
        'category_type' => null,
        'minutes_before_reminder' => 'int32',
        'needs_to_be_confirmed' => null,
        'priority' => null,
        'standard_description' => null,
        'standard_duration' => null,
        'time_marker' => null,
        'use_reminder' => null,
        'is_urgent' => null,
        'is_personal' => null,
        'reminder' => null,
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
        'back_color' => false,
        'display_name' => false,
        'front_color' => false,
        'is_private' => false,
        'category_type' => false,
        'minutes_before_reminder' => false,
        'needs_to_be_confirmed' => false,
        'priority' => false,
        'standard_description' => false,
        'standard_duration' => false,
        'time_marker' => false,
        'use_reminder' => false,
        'is_urgent' => false,
        'is_personal' => false,
        'reminder' => false,
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
        'back_color' => 'backColor',
        'display_name' => 'displayName',
        'front_color' => 'frontColor',
        'is_private' => 'isPrivate',
        'category_type' => 'categoryType',
        'minutes_before_reminder' => 'minutesBeforeReminder',
        'needs_to_be_confirmed' => 'needsToBeConfirmed',
        'priority' => 'priority',
        'standard_description' => 'standardDescription',
        'standard_duration' => 'standardDuration',
        'time_marker' => 'timeMarker',
        'use_reminder' => 'useReminder',
        'is_urgent' => 'isUrgent',
        'is_personal' => 'isPersonal',
        'reminder' => 'reminder',
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
        'back_color' => 'setBackColor',
        'display_name' => 'setDisplayName',
        'front_color' => 'setFrontColor',
        'is_private' => 'setIsPrivate',
        'category_type' => 'setCategoryType',
        'minutes_before_reminder' => 'setMinutesBeforeReminder',
        'needs_to_be_confirmed' => 'setNeedsToBeConfirmed',
        'priority' => 'setPriority',
        'standard_description' => 'setStandardDescription',
        'standard_duration' => 'setStandardDuration',
        'time_marker' => 'setTimeMarker',
        'use_reminder' => 'setUseReminder',
        'is_urgent' => 'setIsUrgent',
        'is_personal' => 'setIsPersonal',
        'reminder' => 'setReminder',
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
        'back_color' => 'getBackColor',
        'display_name' => 'getDisplayName',
        'front_color' => 'getFrontColor',
        'is_private' => 'getIsPrivate',
        'category_type' => 'getCategoryType',
        'minutes_before_reminder' => 'getMinutesBeforeReminder',
        'needs_to_be_confirmed' => 'getNeedsToBeConfirmed',
        'priority' => 'getPriority',
        'standard_description' => 'getStandardDescription',
        'standard_duration' => 'getStandardDuration',
        'time_marker' => 'getTimeMarker',
        'use_reminder' => 'getUseReminder',
        'is_urgent' => 'getIsUrgent',
        'is_personal' => 'getIsPersonal',
        'reminder' => 'getReminder',
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
        $this->setIfExists('back_color', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('front_color', $data ?? [], null);
        $this->setIfExists('is_private', $data ?? [], null);
        $this->setIfExists('category_type', $data ?? [], null);
        $this->setIfExists('minutes_before_reminder', $data ?? [], null);
        $this->setIfExists('needs_to_be_confirmed', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('standard_description', $data ?? [], null);
        $this->setIfExists('standard_duration', $data ?? [], null);
        $this->setIfExists('time_marker', $data ?? [], null);
        $this->setIfExists('use_reminder', $data ?? [], null);
        $this->setIfExists('is_urgent', $data ?? [], null);
        $this->setIfExists('is_personal', $data ?? [], null);
        $this->setIfExists('reminder', $data ?? [], null);
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

        if ($this->container['is_private'] === null) {
            $invalidProperties[] = "'is_private' can't be null";
        }
        if ($this->container['minutes_before_reminder'] === null) {
            $invalidProperties[] = "'minutes_before_reminder' can't be null";
        }
        if ($this->container['needs_to_be_confirmed'] === null) {
            $invalidProperties[] = "'needs_to_be_confirmed' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if (!is_null($this->container['standard_description']) && (mb_strlen($this->container['standard_description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'standard_description', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['standard_description']) && (mb_strlen($this->container['standard_description']) < 0)) {
            $invalidProperties[] = "invalid value for 'standard_description', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['standard_duration'] === null) {
            $invalidProperties[] = "'standard_duration' can't be null";
        }
        if ($this->container['time_marker'] === null) {
            $invalidProperties[] = "'time_marker' can't be null";
        }
        if ($this->container['use_reminder'] === null) {
            $invalidProperties[] = "'use_reminder' can't be null";
        }
        if ($this->container['is_urgent'] === null) {
            $invalidProperties[] = "'is_urgent' can't be null";
        }
        if ($this->container['is_personal'] === null) {
            $invalidProperties[] = "'is_personal' can't be null";
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
     * Gets back_color
     *
     * @return string|null
     */
    public function getBackColor()
    {
        return $this->container['back_color'];
    }

    /**
     * Sets back_color
     *
     * @param string|null $back_color back_color
     *
     * @return self
     */
    public function setBackColor($back_color)
    {
        if (is_null($back_color)) {
            throw new \InvalidArgumentException('non-nullable back_color cannot be null');
        }
        $this->container['back_color'] = $back_color;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets front_color
     *
     * @return string|null
     */
    public function getFrontColor()
    {
        return $this->container['front_color'];
    }

    /**
     * Sets front_color
     *
     * @param string|null $front_color front_color
     *
     * @return self
     */
    public function setFrontColor($front_color)
    {
        if (is_null($front_color)) {
            throw new \InvalidArgumentException('non-nullable front_color cannot be null');
        }
        $this->container['front_color'] = $front_color;

        return $this;
    }

    /**
     * Gets is_private
     *
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->container['is_private'];
    }

    /**
     * Sets is_private
     *
     * @param bool $is_private is_private
     *
     * @return self
     */
    public function setIsPrivate($is_private)
    {
        if (is_null($is_private)) {
            throw new \InvalidArgumentException('non-nullable is_private cannot be null');
        }
        $this->container['is_private'] = $is_private;

        return $this;
    }

    /**
     * Gets category_type
     *
     * @return \Brixion\Kolibri\Model\AgendaItemCategoryType|null
     */
    public function getCategoryType()
    {
        return $this->container['category_type'];
    }

    /**
     * Sets category_type
     *
     * @param \Brixion\Kolibri\Model\AgendaItemCategoryType|null $category_type category_type
     *
     * @return self
     */
    public function setCategoryType($category_type)
    {
        if (is_null($category_type)) {
            throw new \InvalidArgumentException('non-nullable category_type cannot be null');
        }
        $this->container['category_type'] = $category_type;

        return $this;
    }

    /**
     * Gets minutes_before_reminder
     *
     * @return int
     */
    public function getMinutesBeforeReminder()
    {
        return $this->container['minutes_before_reminder'];
    }

    /**
     * Sets minutes_before_reminder
     *
     * @param int $minutes_before_reminder minutes_before_reminder
     *
     * @return self
     */
    public function setMinutesBeforeReminder($minutes_before_reminder)
    {
        if (is_null($minutes_before_reminder)) {
            throw new \InvalidArgumentException('non-nullable minutes_before_reminder cannot be null');
        }
        $this->container['minutes_before_reminder'] = $minutes_before_reminder;

        return $this;
    }

    /**
     * Gets needs_to_be_confirmed
     *
     * @return bool
     */
    public function getNeedsToBeConfirmed()
    {
        return $this->container['needs_to_be_confirmed'];
    }

    /**
     * Sets needs_to_be_confirmed
     *
     * @param bool $needs_to_be_confirmed needs_to_be_confirmed
     *
     * @return self
     */
    public function setNeedsToBeConfirmed($needs_to_be_confirmed)
    {
        if (is_null($needs_to_be_confirmed)) {
            throw new \InvalidArgumentException('non-nullable needs_to_be_confirmed cannot be null');
        }
        $this->container['needs_to_be_confirmed'] = $needs_to_be_confirmed;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return \Brixion\Kolibri\Model\Priority
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param \Brixion\Kolibri\Model\Priority $priority priority
     *
     * @return self
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets standard_description
     *
     * @return string|null
     */
    public function getStandardDescription()
    {
        return $this->container['standard_description'];
    }

    /**
     * Sets standard_description
     *
     * @param string|null $standard_description standard_description
     *
     * @return self
     */
    public function setStandardDescription($standard_description)
    {
        if (is_null($standard_description)) {
            throw new \InvalidArgumentException('non-nullable standard_description cannot be null');
        }
        if ((mb_strlen($standard_description) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $standard_description when calling AgendaItemCategory., must be smaller than or equal to 1024.');
        }
        if ((mb_strlen($standard_description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $standard_description when calling AgendaItemCategory., must be bigger than or equal to 0.');
        }

        $this->container['standard_description'] = $standard_description;

        return $this;
    }

    /**
     * Gets standard_duration
     *
     * @return \Brixion\Kolibri\Model\AgendaStandardDuration
     */
    public function getStandardDuration()
    {
        return $this->container['standard_duration'];
    }

    /**
     * Sets standard_duration
     *
     * @param \Brixion\Kolibri\Model\AgendaStandardDuration $standard_duration standard_duration
     *
     * @return self
     */
    public function setStandardDuration($standard_duration)
    {
        if (is_null($standard_duration)) {
            throw new \InvalidArgumentException('non-nullable standard_duration cannot be null');
        }
        $this->container['standard_duration'] = $standard_duration;

        return $this;
    }

    /**
     * Gets time_marker
     *
     * @return \Brixion\Kolibri\Model\AgendaItemTimeMarker
     */
    public function getTimeMarker()
    {
        return $this->container['time_marker'];
    }

    /**
     * Sets time_marker
     *
     * @param \Brixion\Kolibri\Model\AgendaItemTimeMarker $time_marker time_marker
     *
     * @return self
     */
    public function setTimeMarker($time_marker)
    {
        if (is_null($time_marker)) {
            throw new \InvalidArgumentException('non-nullable time_marker cannot be null');
        }
        $this->container['time_marker'] = $time_marker;

        return $this;
    }

    /**
     * Gets use_reminder
     *
     * @return bool
     */
    public function getUseReminder()
    {
        return $this->container['use_reminder'];
    }

    /**
     * Sets use_reminder
     *
     * @param bool $use_reminder use_reminder
     *
     * @return self
     */
    public function setUseReminder($use_reminder)
    {
        if (is_null($use_reminder)) {
            throw new \InvalidArgumentException('non-nullable use_reminder cannot be null');
        }
        $this->container['use_reminder'] = $use_reminder;

        return $this;
    }

    /**
     * Gets is_urgent
     *
     * @return bool
     */
    public function getIsUrgent()
    {
        return $this->container['is_urgent'];
    }

    /**
     * Sets is_urgent
     *
     * @param bool $is_urgent is_urgent
     *
     * @return self
     */
    public function setIsUrgent($is_urgent)
    {
        if (is_null($is_urgent)) {
            throw new \InvalidArgumentException('non-nullable is_urgent cannot be null');
        }
        $this->container['is_urgent'] = $is_urgent;

        return $this;
    }

    /**
     * Gets is_personal
     *
     * @return bool
     */
    public function getIsPersonal()
    {
        return $this->container['is_personal'];
    }

    /**
     * Sets is_personal
     *
     * @param bool $is_personal is_personal
     *
     * @return self
     */
    public function setIsPersonal($is_personal)
    {
        if (is_null($is_personal)) {
            throw new \InvalidArgumentException('non-nullable is_personal cannot be null');
        }
        $this->container['is_personal'] = $is_personal;

        return $this;
    }

    /**
     * Gets reminder
     *
     * @return \Brixion\Kolibri\Model\AgendaItemCategoryReminder|null
     */
    public function getReminder()
    {
        return $this->container['reminder'];
    }

    /**
     * Sets reminder
     *
     * @param \Brixion\Kolibri\Model\AgendaItemCategoryReminder|null $reminder reminder
     *
     * @return self
     */
    public function setReminder($reminder)
    {
        if (is_null($reminder)) {
            throw new \InvalidArgumentException('non-nullable reminder cannot be null');
        }
        $this->container['reminder'] = $reminder;

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
            throw new \InvalidArgumentException('invalid length for $id when calling AgendaItemCategory., must be bigger than or equal to 1.');
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
