<?php

declare(strict_types=1);

/**
 * AgendaItem - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItem.
 * @implements \ArrayAccess<string, mixed>
 */
class AgendaItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AgendaItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'all_day_event' => 'bool',
        'description' => 'string',
        'end_date_time' => '\DateTime',
        'exception_dates' => '\DateTime[]',
        'is_canceled' => 'bool',
        'is_confirmed' => 'bool',
        'is_private' => 'bool',
        'is_recurring_event' => 'bool',
        'linked_agenda_item_category' => '\Brixion\Kolibri\Model\LinkedAgendaItemCategory',
        'linked_assignments' => '\Brixion\Kolibri\Model\LinkedAssignment[]',
        'linked_employees' => '\Brixion\Kolibri\Model\LinkedEmployee[]',
        'linked_relations' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'location' => 'string',
        'geo_location' => '\Brixion\Kolibri\Model\GeoLocation',
        'minutes_before_reminder' => 'int',
        'parent_id' => 'string',
        'priority' => '\Brixion\Kolibri\Model\Priority',
        'recurrence_pattern' => 'string',
        'start_date_time' => '\DateTime',
        'subject' => 'string',
        'time_marker' => '\Brixion\Kolibri\Model\AgendaItemTimeMarker',
        'use_reminder' => 'bool',
        'utc_date_time_to_exclude_at_parent' => '\DateTime',
        'read_only' => 'bool',
        'linked_office' => '\Brixion\Kolibri\Model\LinkedOffice',
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
        'all_day_event' => null,
        'description' => null,
        'end_date_time' => 'date-time',
        'exception_dates' => 'date-time',
        'is_canceled' => null,
        'is_confirmed' => null,
        'is_private' => null,
        'is_recurring_event' => null,
        'linked_agenda_item_category' => null,
        'linked_assignments' => null,
        'linked_employees' => null,
        'linked_relations' => null,
        'location' => null,
        'geo_location' => null,
        'minutes_before_reminder' => 'int32',
        'parent_id' => 'guid',
        'priority' => null,
        'recurrence_pattern' => null,
        'start_date_time' => 'date-time',
        'subject' => null,
        'time_marker' => null,
        'use_reminder' => null,
        'utc_date_time_to_exclude_at_parent' => 'date-time',
        'read_only' => null,
        'linked_office' => null,
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
        'all_day_event' => false,
        'description' => false,
        'end_date_time' => false,
        'exception_dates' => false,
        'is_canceled' => false,
        'is_confirmed' => false,
        'is_private' => false,
        'is_recurring_event' => false,
        'linked_agenda_item_category' => false,
        'linked_assignments' => false,
        'linked_employees' => false,
        'linked_relations' => false,
        'location' => false,
        'geo_location' => false,
        'minutes_before_reminder' => false,
        'parent_id' => false,
        'priority' => false,
        'recurrence_pattern' => false,
        'start_date_time' => false,
        'subject' => false,
        'time_marker' => false,
        'use_reminder' => false,
        'utc_date_time_to_exclude_at_parent' => false,
        'read_only' => false,
        'linked_office' => false,
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
        'all_day_event' => 'allDayEvent',
        'description' => 'description',
        'end_date_time' => 'endDateTime',
        'exception_dates' => 'exceptionDates',
        'is_canceled' => 'isCanceled',
        'is_confirmed' => 'isConfirmed',
        'is_private' => 'isPrivate',
        'is_recurring_event' => 'isRecurringEvent',
        'linked_agenda_item_category' => 'linkedAgendaItemCategory',
        'linked_assignments' => 'linkedAssignments',
        'linked_employees' => 'linkedEmployees',
        'linked_relations' => 'linkedRelations',
        'location' => 'location',
        'geo_location' => 'geoLocation',
        'minutes_before_reminder' => 'minutesBeforeReminder',
        'parent_id' => 'parentId',
        'priority' => 'priority',
        'recurrence_pattern' => 'recurrencePattern',
        'start_date_time' => 'startDateTime',
        'subject' => 'subject',
        'time_marker' => 'timeMarker',
        'use_reminder' => 'useReminder',
        'utc_date_time_to_exclude_at_parent' => 'utcDateTimeToExcludeAtParent',
        'read_only' => 'readOnly',
        'linked_office' => 'linkedOffice',
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
        'all_day_event' => 'setAllDayEvent',
        'description' => 'setDescription',
        'end_date_time' => 'setEndDateTime',
        'exception_dates' => 'setExceptionDates',
        'is_canceled' => 'setIsCanceled',
        'is_confirmed' => 'setIsConfirmed',
        'is_private' => 'setIsPrivate',
        'is_recurring_event' => 'setIsRecurringEvent',
        'linked_agenda_item_category' => 'setLinkedAgendaItemCategory',
        'linked_assignments' => 'setLinkedAssignments',
        'linked_employees' => 'setLinkedEmployees',
        'linked_relations' => 'setLinkedRelations',
        'location' => 'setLocation',
        'geo_location' => 'setGeoLocation',
        'minutes_before_reminder' => 'setMinutesBeforeReminder',
        'parent_id' => 'setParentId',
        'priority' => 'setPriority',
        'recurrence_pattern' => 'setRecurrencePattern',
        'start_date_time' => 'setStartDateTime',
        'subject' => 'setSubject',
        'time_marker' => 'setTimeMarker',
        'use_reminder' => 'setUseReminder',
        'utc_date_time_to_exclude_at_parent' => 'setUtcDateTimeToExcludeAtParent',
        'read_only' => 'setReadOnly',
        'linked_office' => 'setLinkedOffice',
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
        'all_day_event' => 'getAllDayEvent',
        'description' => 'getDescription',
        'end_date_time' => 'getEndDateTime',
        'exception_dates' => 'getExceptionDates',
        'is_canceled' => 'getIsCanceled',
        'is_confirmed' => 'getIsConfirmed',
        'is_private' => 'getIsPrivate',
        'is_recurring_event' => 'getIsRecurringEvent',
        'linked_agenda_item_category' => 'getLinkedAgendaItemCategory',
        'linked_assignments' => 'getLinkedAssignments',
        'linked_employees' => 'getLinkedEmployees',
        'linked_relations' => 'getLinkedRelations',
        'location' => 'getLocation',
        'geo_location' => 'getGeoLocation',
        'minutes_before_reminder' => 'getMinutesBeforeReminder',
        'parent_id' => 'getParentId',
        'priority' => 'getPriority',
        'recurrence_pattern' => 'getRecurrencePattern',
        'start_date_time' => 'getStartDateTime',
        'subject' => 'getSubject',
        'time_marker' => 'getTimeMarker',
        'use_reminder' => 'getUseReminder',
        'utc_date_time_to_exclude_at_parent' => 'getUtcDateTimeToExcludeAtParent',
        'read_only' => 'getReadOnly',
        'linked_office' => 'getLinkedOffice',
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
        $this->setIfExists('all_day_event', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('end_date_time', $data ?? [], null);
        $this->setIfExists('exception_dates', $data ?? [], null);
        $this->setIfExists('is_canceled', $data ?? [], null);
        $this->setIfExists('is_confirmed', $data ?? [], null);
        $this->setIfExists('is_private', $data ?? [], null);
        $this->setIfExists('is_recurring_event', $data ?? [], null);
        $this->setIfExists('linked_agenda_item_category', $data ?? [], null);
        $this->setIfExists('linked_assignments', $data ?? [], null);
        $this->setIfExists('linked_employees', $data ?? [], null);
        $this->setIfExists('linked_relations', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('geo_location', $data ?? [], null);
        $this->setIfExists('minutes_before_reminder', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('recurrence_pattern', $data ?? [], null);
        $this->setIfExists('start_date_time', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('time_marker', $data ?? [], null);
        $this->setIfExists('use_reminder', $data ?? [], null);
        $this->setIfExists('utc_date_time_to_exclude_at_parent', $data ?? [], null);
        $this->setIfExists('read_only', $data ?? [], null);
        $this->setIfExists('linked_office', $data ?? [], null);
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

        if ($this->container['all_day_event'] === null) {
            $invalidProperties[] = "'all_day_event' can't be null";
        }
        if ($this->container['end_date_time'] === null) {
            $invalidProperties[] = "'end_date_time' can't be null";
        }
        if ($this->container['is_canceled'] === null) {
            $invalidProperties[] = "'is_canceled' can't be null";
        }
        if ($this->container['is_confirmed'] === null) {
            $invalidProperties[] = "'is_confirmed' can't be null";
        }
        if ($this->container['is_private'] === null) {
            $invalidProperties[] = "'is_private' can't be null";
        }
        if ($this->container['is_recurring_event'] === null) {
            $invalidProperties[] = "'is_recurring_event' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
        }
        if ($this->container['start_date_time'] === null) {
            $invalidProperties[] = "'start_date_time' can't be null";
        }
        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 250)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) < 0)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['time_marker'] === null) {
            $invalidProperties[] = "'time_marker' can't be null";
        }
        if ($this->container['use_reminder'] === null) {
            $invalidProperties[] = "'use_reminder' can't be null";
        }
        if ($this->container['read_only'] === null) {
            $invalidProperties[] = "'read_only' can't be null";
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
     * Gets all_day_event
     *
     * @return bool
     */
    public function getAllDayEvent()
    {
        return $this->container['all_day_event'];
    }

    /**
     * Sets all_day_event
     *
     * @param bool $all_day_event all_day_event
     *
     * @return self
     */
    public function setAllDayEvent($all_day_event)
    {
        if (is_null($all_day_event)) {
            throw new \InvalidArgumentException('non-nullable all_day_event cannot be null');
        }
        $this->container['all_day_event'] = $all_day_event;

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
     * Gets end_date_time
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->container['end_date_time'];
    }

    /**
     * Sets end_date_time
     *
     * @param \DateTime $end_date_time end_date_time
     *
     * @return self
     */
    public function setEndDateTime($end_date_time)
    {
        if (is_null($end_date_time)) {
            throw new \InvalidArgumentException('non-nullable end_date_time cannot be null');
        }
        $this->container['end_date_time'] = $end_date_time;

        return $this;
    }

    /**
     * Gets exception_dates
     *
     * @return \DateTime[]|null
     */
    public function getExceptionDates()
    {
        return $this->container['exception_dates'];
    }

    /**
     * Sets exception_dates
     *
     * @param \DateTime[]|null $exception_dates exception_dates
     *
     * @return self
     */
    public function setExceptionDates($exception_dates)
    {
        if (is_null($exception_dates)) {
            throw new \InvalidArgumentException('non-nullable exception_dates cannot be null');
        }
        $this->container['exception_dates'] = $exception_dates;

        return $this;
    }

    /**
     * Gets is_canceled
     *
     * @return bool
     */
    public function getIsCanceled()
    {
        return $this->container['is_canceled'];
    }

    /**
     * Sets is_canceled
     *
     * @param bool $is_canceled is_canceled
     *
     * @return self
     */
    public function setIsCanceled($is_canceled)
    {
        if (is_null($is_canceled)) {
            throw new \InvalidArgumentException('non-nullable is_canceled cannot be null');
        }
        $this->container['is_canceled'] = $is_canceled;

        return $this;
    }

    /**
     * Gets is_confirmed
     *
     * @return bool
     */
    public function getIsConfirmed()
    {
        return $this->container['is_confirmed'];
    }

    /**
     * Sets is_confirmed
     *
     * @param bool $is_confirmed is_confirmed
     *
     * @return self
     */
    public function setIsConfirmed($is_confirmed)
    {
        if (is_null($is_confirmed)) {
            throw new \InvalidArgumentException('non-nullable is_confirmed cannot be null');
        }
        $this->container['is_confirmed'] = $is_confirmed;

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
     * Gets is_recurring_event
     *
     * @return bool
     */
    public function getIsRecurringEvent()
    {
        return $this->container['is_recurring_event'];
    }

    /**
     * Sets is_recurring_event
     *
     * @param bool $is_recurring_event When set to true this AgendaItem is marked as a recurring AgendaItem. The recurrency pattern MUST be set using the property 'RecurrencePattern'.
     *
     * @return self
     */
    public function setIsRecurringEvent($is_recurring_event)
    {
        if (is_null($is_recurring_event)) {
            throw new \InvalidArgumentException('non-nullable is_recurring_event cannot be null');
        }
        $this->container['is_recurring_event'] = $is_recurring_event;

        return $this;
    }

    /**
     * Gets linked_agenda_item_category
     *
     * @return \Brixion\Kolibri\Model\LinkedAgendaItemCategory|null
     */
    public function getLinkedAgendaItemCategory()
    {
        return $this->container['linked_agenda_item_category'];
    }

    /**
     * Sets linked_agenda_item_category
     *
     * @param \Brixion\Kolibri\Model\LinkedAgendaItemCategory|null $linked_agenda_item_category linked_agenda_item_category
     *
     * @return self
     */
    public function setLinkedAgendaItemCategory($linked_agenda_item_category)
    {
        if (is_null($linked_agenda_item_category)) {
            throw new \InvalidArgumentException('non-nullable linked_agenda_item_category cannot be null');
        }
        $this->container['linked_agenda_item_category'] = $linked_agenda_item_category;

        return $this;
    }

    /**
     * Gets linked_assignments
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment[]|null
     */
    public function getLinkedAssignments()
    {
        return $this->container['linked_assignments'];
    }

    /**
     * Sets linked_assignments
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment[]|null $linked_assignments linked_assignments
     *
     * @return self
     */
    public function setLinkedAssignments($linked_assignments)
    {
        if (is_null($linked_assignments)) {
            throw new \InvalidArgumentException('non-nullable linked_assignments cannot be null');
        }
        $this->container['linked_assignments'] = $linked_assignments;

        return $this;
    }

    /**
     * Gets linked_employees
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee[]|null
     */
    public function getLinkedEmployees()
    {
        return $this->container['linked_employees'];
    }

    /**
     * Sets linked_employees
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee[]|null $linked_employees linked_employees
     *
     * @return self
     */
    public function setLinkedEmployees($linked_employees)
    {
        if (is_null($linked_employees)) {
            throw new \InvalidArgumentException('non-nullable linked_employees cannot be null');
        }
        $this->container['linked_employees'] = $linked_employees;

        return $this;
    }

    /**
     * Gets linked_relations
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedRelations()
    {
        return $this->container['linked_relations'];
    }

    /**
     * Sets linked_relations
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_relations linked_relations
     *
     * @return self
     */
    public function setLinkedRelations($linked_relations)
    {
        if (is_null($linked_relations)) {
            throw new \InvalidArgumentException('non-nullable linked_relations cannot be null');
        }
        $this->container['linked_relations'] = $linked_relations;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets geo_location
     *
     * @return \Brixion\Kolibri\Model\GeoLocation|null
     */
    public function getGeoLocation()
    {
        return $this->container['geo_location'];
    }

    /**
     * Sets geo_location
     *
     * @param \Brixion\Kolibri\Model\GeoLocation|null $geo_location geo_location
     *
     * @return self
     */
    public function setGeoLocation($geo_location)
    {
        if (is_null($geo_location)) {
            throw new \InvalidArgumentException('non-nullable geo_location cannot be null');
        }
        $this->container['geo_location'] = $geo_location;

        return $this;
    }

    /**
     * Gets minutes_before_reminder
     *
     * @return int|null
     */
    public function getMinutesBeforeReminder()
    {
        return $this->container['minutes_before_reminder'];
    }

    /**
     * Sets minutes_before_reminder
     *
     * @param int|null $minutes_before_reminder minutes_before_reminder
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
     * Gets parent_id
     *
     * @return string|null
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string|null $parent_id parent_id
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }
        $this->container['parent_id'] = $parent_id;

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
     * Gets recurrence_pattern
     *
     * @return string|null
     */
    public function getRecurrencePattern()
    {
        return $this->container['recurrence_pattern'];
    }

    /**
     * Sets recurrence_pattern
     *
     * @param string|null $recurrence_pattern When the AgendaItem is a recurring AgendaItem (IsRecurringEvent = true) the recurrency pattern describes how and when occurences take place. See https://tools.ietf.org/html/rfc2445#section-4.3.10 for the specifications of the recurrence pattern string. . Examples: FREQ=WEEKLY;BYDAY=MO,TU,WE,TH,FR FREQ=DAILY;COUNT=10 FREQ=WEEKLY;COUNT=10;BYDAY=WE . Not supported: BYSECOND BYMINUTE BYYEARDAY BYWEEKNO
     *
     * @return self
     */
    public function setRecurrencePattern($recurrence_pattern)
    {
        if (is_null($recurrence_pattern)) {
            throw new \InvalidArgumentException('non-nullable recurrence_pattern cannot be null');
        }
        $this->container['recurrence_pattern'] = $recurrence_pattern;

        return $this;
    }

    /**
     * Gets start_date_time
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->container['start_date_time'];
    }

    /**
     * Sets start_date_time
     *
     * @param \DateTime $start_date_time start_date_time
     *
     * @return self
     */
    public function setStartDateTime($start_date_time)
    {
        if (is_null($start_date_time)) {
            throw new \InvalidArgumentException('non-nullable start_date_time cannot be null');
        }
        $this->container['start_date_time'] = $start_date_time;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        if ((mb_strlen($subject) > 250)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling AgendaItem., must be smaller than or equal to 250.');
        }
        if ((mb_strlen($subject) < 0)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling AgendaItem., must be bigger than or equal to 0.');
        }

        $this->container['subject'] = $subject;

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
     * Gets utc_date_time_to_exclude_at_parent
     *
     * @return \DateTime|null
     */
    public function getUtcDateTimeToExcludeAtParent()
    {
        return $this->container['utc_date_time_to_exclude_at_parent'];
    }

    /**
     * Sets utc_date_time_to_exclude_at_parent
     *
     * @param \DateTime|null $utc_date_time_to_exclude_at_parent utc_date_time_to_exclude_at_parent
     *
     * @return self
     */
    public function setUtcDateTimeToExcludeAtParent($utc_date_time_to_exclude_at_parent)
    {
        if (is_null($utc_date_time_to_exclude_at_parent)) {
            throw new \InvalidArgumentException('non-nullable utc_date_time_to_exclude_at_parent cannot be null');
        }
        $this->container['utc_date_time_to_exclude_at_parent'] = $utc_date_time_to_exclude_at_parent;

        return $this;
    }

    /**
     * Gets read_only
     *
     * @return bool
     */
    public function getReadOnly()
    {
        return $this->container['read_only'];
    }

    /**
     * Sets read_only
     *
     * @param bool $read_only read_only
     *
     * @return self
     */
    public function setReadOnly($read_only)
    {
        if (is_null($read_only)) {
            throw new \InvalidArgumentException('non-nullable read_only cannot be null');
        }
        $this->container['read_only'] = $read_only;

        return $this;
    }

    /**
     * Gets linked_office
     *
     * @return \Brixion\Kolibri\Model\LinkedOffice|null
     */
    public function getLinkedOffice()
    {
        return $this->container['linked_office'];
    }

    /**
     * Sets linked_office
     *
     * @param \Brixion\Kolibri\Model\LinkedOffice|null $linked_office linked_office
     *
     * @return self
     */
    public function setLinkedOffice($linked_office)
    {
        if (is_null($linked_office)) {
            throw new \InvalidArgumentException('non-nullable linked_office cannot be null');
        }
        $this->container['linked_office'] = $linked_office;

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
            throw new \InvalidArgumentException('invalid length for $id when calling AgendaItem., must be bigger than or equal to 1.');
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
