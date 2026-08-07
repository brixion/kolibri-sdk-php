<?php

declare(strict_types=1);

/**
 * TimelineEventsSearchRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * TimelineEventsSearchRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class TimelineEventsSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'TimelineEventsSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'assignment_id' => 'string',
        'filter_by_action_types' => '\Brixion\Kolibri\Model\TimelineActionType[]',
        'include_statistics' => 'bool',
        'max_date_time' => '\DateTime',
        'min_date_time' => '\DateTime',
        'order_by' => '\Brixion\Kolibri\Model\TimelineOrderByField',
        'relation_id' => 'string',
        'term_fields' => '\Brixion\Kolibri\Model\TimelineTermField[]',
        'culture' => 'string',
        'include_timeline_events_of_versions' => 'bool',
        'include_timeline_events_of_child_items' => 'bool',
        'filter_by_active' => '\Brixion\Kolibri\Model\ActiveFilter',
        'order' => '\Brixion\Kolibri\Model\SortOrder',
        'skip' => 'int',
        'take' => 'int',
        'term' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'assignment_id' => 'guid',
        'filter_by_action_types' => null,
        'include_statistics' => null,
        'max_date_time' => 'date-time',
        'min_date_time' => 'date-time',
        'order_by' => null,
        'relation_id' => 'guid',
        'term_fields' => null,
        'culture' => null,
        'include_timeline_events_of_versions' => null,
        'include_timeline_events_of_child_items' => null,
        'filter_by_active' => null,
        'order' => null,
        'skip' => 'int32',
        'take' => 'int32',
        'term' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'assignment_id' => false,
        'filter_by_action_types' => false,
        'include_statistics' => false,
        'max_date_time' => false,
        'min_date_time' => false,
        'order_by' => false,
        'relation_id' => false,
        'term_fields' => false,
        'culture' => false,
        'include_timeline_events_of_versions' => false,
        'include_timeline_events_of_child_items' => false,
        'filter_by_active' => false,
        'order' => false,
        'skip' => false,
        'take' => false,
        'term' => false,
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
        'assignment_id' => 'assignmentId',
        'filter_by_action_types' => 'filterByActionTypes',
        'include_statistics' => 'includeStatistics',
        'max_date_time' => 'maxDateTime',
        'min_date_time' => 'minDateTime',
        'order_by' => 'orderBy',
        'relation_id' => 'relationId',
        'term_fields' => 'termFields',
        'culture' => 'culture',
        'include_timeline_events_of_versions' => 'includeTimelineEventsOfVersions',
        'include_timeline_events_of_child_items' => 'includeTimelineEventsOfChildItems',
        'filter_by_active' => 'filterByActive',
        'order' => 'order',
        'skip' => 'skip',
        'take' => 'take',
        'term' => 'term',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignment_id' => 'setAssignmentId',
        'filter_by_action_types' => 'setFilterByActionTypes',
        'include_statistics' => 'setIncludeStatistics',
        'max_date_time' => 'setMaxDateTime',
        'min_date_time' => 'setMinDateTime',
        'order_by' => 'setOrderBy',
        'relation_id' => 'setRelationId',
        'term_fields' => 'setTermFields',
        'culture' => 'setCulture',
        'include_timeline_events_of_versions' => 'setIncludeTimelineEventsOfVersions',
        'include_timeline_events_of_child_items' => 'setIncludeTimelineEventsOfChildItems',
        'filter_by_active' => 'setFilterByActive',
        'order' => 'setOrder',
        'skip' => 'setSkip',
        'take' => 'setTake',
        'term' => 'setTerm',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignment_id' => 'getAssignmentId',
        'filter_by_action_types' => 'getFilterByActionTypes',
        'include_statistics' => 'getIncludeStatistics',
        'max_date_time' => 'getMaxDateTime',
        'min_date_time' => 'getMinDateTime',
        'order_by' => 'getOrderBy',
        'relation_id' => 'getRelationId',
        'term_fields' => 'getTermFields',
        'culture' => 'getCulture',
        'include_timeline_events_of_versions' => 'getIncludeTimelineEventsOfVersions',
        'include_timeline_events_of_child_items' => 'getIncludeTimelineEventsOfChildItems',
        'filter_by_active' => 'getFilterByActive',
        'order' => 'getOrder',
        'skip' => 'getSkip',
        'take' => 'getTake',
        'term' => 'getTerm',
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
        $this->setIfExists('assignment_id', $data ?? [], null);
        $this->setIfExists('filter_by_action_types', $data ?? [], null);
        $this->setIfExists('include_statistics', $data ?? [], null);
        $this->setIfExists('max_date_time', $data ?? [], null);
        $this->setIfExists('min_date_time', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('relation_id', $data ?? [], null);
        $this->setIfExists('term_fields', $data ?? [], null);
        $this->setIfExists('culture', $data ?? [], null);
        $this->setIfExists('include_timeline_events_of_versions', $data ?? [], null);
        $this->setIfExists('include_timeline_events_of_child_items', $data ?? [], null);
        $this->setIfExists('filter_by_active', $data ?? [], null);
        $this->setIfExists('order', $data ?? [], null);
        $this->setIfExists('skip', $data ?? [], null);
        $this->setIfExists('take', $data ?? [], null);
        $this->setIfExists('term', $data ?? [], null);
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

        if ($this->container['include_statistics'] === null) {
            $invalidProperties[] = "'include_statistics' can't be null";
        }
        if ($this->container['order_by'] === null) {
            $invalidProperties[] = "'order_by' can't be null";
        }
        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) > 5)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['culture']) && (mb_strlen($this->container['culture']) < 0)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['filter_by_active'] === null) {
            $invalidProperties[] = "'filter_by_active' can't be null";
        }
        if ($this->container['order'] === null) {
            $invalidProperties[] = "'order' can't be null";
        }
        if ($this->container['skip'] === null) {
            $invalidProperties[] = "'skip' can't be null";
        }
        if (($this->container['skip'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'skip', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['skip'] < 0)) {
            $invalidProperties[] = "invalid value for 'skip', must be bigger than or equal to 0.";
        }

        if ($this->container['take'] === null) {
            $invalidProperties[] = "'take' can't be null";
        }
        if (($this->container['take'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'take', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['take'] < 0)) {
            $invalidProperties[] = "invalid value for 'take', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['term']) && (mb_strlen($this->container['term']) > 50)) {
            $invalidProperties[] = "invalid value for 'term', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['term']) && (mb_strlen($this->container['term']) < 0)) {
            $invalidProperties[] = "invalid value for 'term', the character length must be bigger than or equal to 0.";
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
     * Gets assignment_id
     *
     * @return string|null
     */
    public function getAssignmentId()
    {
        return $this->container['assignment_id'];
    }

    /**
     * Sets assignment_id
     *
     * @param string|null $assignment_id Search timeline events by a specific assignment Id.
     *
     * @return self
     */
    public function setAssignmentId($assignment_id)
    {
        if (is_null($assignment_id)) {
            throw new \InvalidArgumentException('non-nullable assignment_id cannot be null');
        }
        $this->container['assignment_id'] = $assignment_id;

        return $this;
    }

    /**
     * Gets filter_by_action_types
     *
     * @return \Brixion\Kolibri\Model\TimelineActionType[]|null
     */
    public function getFilterByActionTypes()
    {
        return $this->container['filter_by_action_types'];
    }

    /**
     * Sets filter_by_action_types
     *
     * @param \Brixion\Kolibri\Model\TimelineActionType[]|null $filter_by_action_types Search timeline events of given type (e.g. only tasks and/or agendaitems).
     *
     * @return self
     */
    public function setFilterByActionTypes($filter_by_action_types)
    {
        if (is_null($filter_by_action_types)) {
            throw new \InvalidArgumentException('non-nullable filter_by_action_types cannot be null');
        }
        $this->container['filter_by_action_types'] = $filter_by_action_types;

        return $this;
    }

    /**
     * Gets include_statistics
     *
     * @return bool
     */
    public function getIncludeStatistics()
    {
        return $this->container['include_statistics'];
    }

    /**
     * Sets include_statistics
     *
     * @param bool $include_statistics Return statistics, like counts of timeline events in past, today and future.
     *
     * @return self
     */
    public function setIncludeStatistics($include_statistics)
    {
        if (is_null($include_statistics)) {
            throw new \InvalidArgumentException('non-nullable include_statistics cannot be null');
        }
        $this->container['include_statistics'] = $include_statistics;

        return $this;
    }

    /**
     * Gets max_date_time
     *
     * @return \DateTime|null
     */
    public function getMaxDateTime()
    {
        return $this->container['max_date_time'];
    }

    /**
     * Sets max_date_time
     *
     * @param \DateTime|null $max_date_time Don't return timeline events with a date after this given maximum date value.
     *
     * @return self
     */
    public function setMaxDateTime($max_date_time)
    {
        if (is_null($max_date_time)) {
            throw new \InvalidArgumentException('non-nullable max_date_time cannot be null');
        }
        $this->container['max_date_time'] = $max_date_time;

        return $this;
    }

    /**
     * Gets min_date_time
     *
     * @return \DateTime|null
     */
    public function getMinDateTime()
    {
        return $this->container['min_date_time'];
    }

    /**
     * Sets min_date_time
     *
     * @param \DateTime|null $min_date_time Don't return timeline events with a date before this given minimum date value.
     *
     * @return self
     */
    public function setMinDateTime($min_date_time)
    {
        if (is_null($min_date_time)) {
            throw new \InvalidArgumentException('non-nullable min_date_time cannot be null');
        }
        $this->container['min_date_time'] = $min_date_time;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Brixion\Kolibri\Model\TimelineOrderByField
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Brixion\Kolibri\Model\TimelineOrderByField $order_by Order the results by the indicated timeline event field.
     *
     * @return self
     */
    public function setOrderBy($order_by)
    {
        if (is_null($order_by)) {
            throw new \InvalidArgumentException('non-nullable order_by cannot be null');
        }
        $this->container['order_by'] = $order_by;

        return $this;
    }

    /**
     * Gets relation_id
     *
     * @return string|null
     */
    public function getRelationId()
    {
        return $this->container['relation_id'];
    }

    /**
     * Sets relation_id
     *
     * @param string|null $relation_id Search timeline events by a specific relation Id.
     *
     * @return self
     */
    public function setRelationId($relation_id)
    {
        if (is_null($relation_id)) {
            throw new \InvalidArgumentException('non-nullable relation_id cannot be null');
        }
        $this->container['relation_id'] = $relation_id;

        return $this;
    }

    /**
     * Gets term_fields
     *
     * @return \Brixion\Kolibri\Model\TimelineTermField[]|null
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Brixion\Kolibri\Model\TimelineTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
     *
     * @return self
     */
    public function setTermFields($term_fields)
    {
        if (is_null($term_fields)) {
            throw new \InvalidArgumentException('non-nullable term_fields cannot be null');
        }
        $this->container['term_fields'] = $term_fields;

        return $this;
    }

    /**
     * Gets culture
     *
     * @return string|null
     */
    public function getCulture()
    {
        return $this->container['culture'];
    }

    /**
     * Sets culture
     *
     * @param string|null $culture The culture name in the format languagecode2-country/regioncode2. Available cultures: \"nl-NL\" and \"en-GB\". If no or an unsupported culture is given the default culture is used (\"nl-NL\").
     *
     * @return self
     */
    public function setCulture($culture)
    {
        if (is_null($culture)) {
            throw new \InvalidArgumentException('non-nullable culture cannot be null');
        }
        if ((mb_strlen($culture) > 5)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling TimelineEventsSearchRequest., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($culture) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling TimelineEventsSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets include_timeline_events_of_versions
     *
     * @return bool|null
     */
    public function getIncludeTimelineEventsOfVersions()
    {
        return $this->container['include_timeline_events_of_versions'];
    }

    /**
     * Sets include_timeline_events_of_versions
     *
     * @param bool|null $include_timeline_events_of_versions There might be multiple versions of an assignment (see /ObjectAssignment/MakeVersionOf). When IncludeTimelineEventsOfVersions is true the timeline events of the Assignment that has a given Assignment Id and the timeline events of all assignment versions are returned in the search results.
     *
     * @return self
     */
    public function setIncludeTimelineEventsOfVersions($include_timeline_events_of_versions)
    {
        if (is_null($include_timeline_events_of_versions)) {
            throw new \InvalidArgumentException('non-nullable include_timeline_events_of_versions cannot be null');
        }
        $this->container['include_timeline_events_of_versions'] = $include_timeline_events_of_versions;

        return $this;
    }

    /**
     * Gets include_timeline_events_of_child_items
     *
     * @return bool|null
     */
    public function getIncludeTimelineEventsOfChildItems()
    {
        return $this->container['include_timeline_events_of_child_items'];
    }

    /**
     * Sets include_timeline_events_of_child_items
     *
     * @param bool|null $include_timeline_events_of_child_items When requesting ARO/Timeline event items for e.g. a Acquisition Assignment it is possible to get the ARO/Timeline event items of the linked Acquisition Object Assignments of the Acquisition Assignments as well, by setting IncludeTimelineEventsOfChildItems to 'true'.
     *
     * @return self
     */
    public function setIncludeTimelineEventsOfChildItems($include_timeline_events_of_child_items)
    {
        if (is_null($include_timeline_events_of_child_items)) {
            throw new \InvalidArgumentException('non-nullable include_timeline_events_of_child_items cannot be null');
        }
        $this->container['include_timeline_events_of_child_items'] = $include_timeline_events_of_child_items;

        return $this;
    }

    /**
     * Gets filter_by_active
     *
     * @return \Brixion\Kolibri\Model\ActiveFilter
     */
    public function getFilterByActive()
    {
        return $this->container['filter_by_active'];
    }

    /**
     * Sets filter_by_active
     *
     * @param \Brixion\Kolibri\Model\ActiveFilter $filter_by_active Show archived or active items. Default: 'ActiveOnly': show active items.
     *
     * @return self
     */
    public function setFilterByActive($filter_by_active)
    {
        if (is_null($filter_by_active)) {
            throw new \InvalidArgumentException('non-nullable filter_by_active cannot be null');
        }
        $this->container['filter_by_active'] = $filter_by_active;

        return $this;
    }

    /**
     * Gets order
     *
     * @return \Brixion\Kolibri\Model\SortOrder
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param \Brixion\Kolibri\Model\SortOrder $order Order search results ascending or descending.
     *
     * @return self
     */
    public function setOrder($order)
    {
        if (is_null($order)) {
            throw new \InvalidArgumentException('non-nullable order cannot be null');
        }
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets skip
     *
     * @return int
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int $skip Number of results to skip.
     *
     * @return self
     */
    public function setSkip($skip)
    {
        if (is_null($skip)) {
            throw new \InvalidArgumentException('non-nullable skip cannot be null');
        }

        if (($skip > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling TimelineEventsSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($skip < 0)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling TimelineEventsSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets take
     *
     * @return int
     */
    public function getTake()
    {
        return $this->container['take'];
    }

    /**
     * Sets take
     *
     * @param int $take Number of results to return. If a value higher than 100 is provided, it is set to 100.
     *
     * @return self
     */
    public function setTake($take)
    {
        if (is_null($take)) {
            throw new \InvalidArgumentException('non-nullable take cannot be null');
        }

        if (($take > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $take when calling TimelineEventsSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($take < 0)) {
            throw new \InvalidArgumentException('invalid value for $take when calling TimelineEventsSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['take'] = $take;

        return $this;
    }

    /**
     * Gets term
     *
     * @return string|null
     */
    public function getTerm()
    {
        return $this->container['term'];
    }

    /**
     * Sets term
     *
     * @param string|null $term Search by given text term in the fields indicated by TermFields
     *
     * @return self
     */
    public function setTerm($term)
    {
        if (is_null($term)) {
            throw new \InvalidArgumentException('non-nullable term cannot be null');
        }
        if ((mb_strlen($term) > 50)) {
            throw new \InvalidArgumentException('invalid length for $term when calling TimelineEventsSearchRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($term) < 0)) {
            throw new \InvalidArgumentException('invalid length for $term when calling TimelineEventsSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['term'] = $term;

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
