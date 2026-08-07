<?php

declare(strict_types=1);

/**
 * TasksSearchRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * TasksSearchRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class TasksSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'TasksSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'category_ids' => 'string[]',
        'delegate_filter' => '\Brixion\Kolibri\Model\TaskDelegateFilter',
        'employee_id' => 'string',
        'employee_ids' => 'string[]',
        'include_statistics' => 'bool',
        'order_by' => '\Brixion\Kolibri\Model\TaskOrderByField',
        'status_filter' => '\Brixion\Kolibri\Model\TaskStatus[]',
        'task_id' => 'string',
        'term_fields' => '\Brixion\Kolibri\Model\TaskTermField[]',
        'task_ids' => 'string[]',
        'priorities' => '\Brixion\Kolibri\Model\Priority[]',
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
        'category_ids' => 'guid',
        'delegate_filter' => null,
        'employee_id' => 'guid',
        'employee_ids' => 'guid',
        'include_statistics' => null,
        'order_by' => null,
        'status_filter' => null,
        'task_id' => 'guid',
        'term_fields' => null,
        'task_ids' => 'guid',
        'priorities' => null,
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
        'category_ids' => false,
        'delegate_filter' => false,
        'employee_id' => false,
        'employee_ids' => false,
        'include_statistics' => false,
        'order_by' => false,
        'status_filter' => false,
        'task_id' => false,
        'term_fields' => false,
        'task_ids' => false,
        'priorities' => false,
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
        'category_ids' => 'categoryIds',
        'delegate_filter' => 'delegateFilter',
        'employee_id' => 'employeeId',
        'employee_ids' => 'employeeIds',
        'include_statistics' => 'includeStatistics',
        'order_by' => 'orderBy',
        'status_filter' => 'statusFilter',
        'task_id' => 'taskId',
        'term_fields' => 'termFields',
        'task_ids' => 'taskIds',
        'priorities' => 'priorities',
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
        'category_ids' => 'setCategoryIds',
        'delegate_filter' => 'setDelegateFilter',
        'employee_id' => 'setEmployeeId',
        'employee_ids' => 'setEmployeeIds',
        'include_statistics' => 'setIncludeStatistics',
        'order_by' => 'setOrderBy',
        'status_filter' => 'setStatusFilter',
        'task_id' => 'setTaskId',
        'term_fields' => 'setTermFields',
        'task_ids' => 'setTaskIds',
        'priorities' => 'setPriorities',
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
        'category_ids' => 'getCategoryIds',
        'delegate_filter' => 'getDelegateFilter',
        'employee_id' => 'getEmployeeId',
        'employee_ids' => 'getEmployeeIds',
        'include_statistics' => 'getIncludeStatistics',
        'order_by' => 'getOrderBy',
        'status_filter' => 'getStatusFilter',
        'task_id' => 'getTaskId',
        'term_fields' => 'getTermFields',
        'task_ids' => 'getTaskIds',
        'priorities' => 'getPriorities',
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
        $this->setIfExists('category_ids', $data ?? [], null);
        $this->setIfExists('delegate_filter', $data ?? [], null);
        $this->setIfExists('employee_id', $data ?? [], null);
        $this->setIfExists('employee_ids', $data ?? [], null);
        $this->setIfExists('include_statistics', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('status_filter', $data ?? [], null);
        $this->setIfExists('task_id', $data ?? [], null);
        $this->setIfExists('term_fields', $data ?? [], null);
        $this->setIfExists('task_ids', $data ?? [], null);
        $this->setIfExists('priorities', $data ?? [], null);
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
     * Gets category_ids
     *
     * @return string[]|null
     */
    public function getCategoryIds()
    {
        return $this->container['category_ids'];
    }

    /**
     * Sets category_ids
     *
     * @param string[]|null $category_ids Only return tasks linked at one of the categories indicated by given Task category Id's.
     *
     * @return self
     */
    public function setCategoryIds($category_ids)
    {
        if (is_null($category_ids)) {
            throw new \InvalidArgumentException('non-nullable category_ids cannot be null');
        }
        $this->container['category_ids'] = $category_ids;

        return $this;
    }

    /**
     * Gets delegate_filter
     *
     * @return \Brixion\Kolibri\Model\TaskDelegateFilter|null
     */
    public function getDelegateFilter()
    {
        return $this->container['delegate_filter'];
    }

    /**
     * Sets delegate_filter
     *
     * @param \Brixion\Kolibri\Model\TaskDelegateFilter|null $delegate_filter Search the tasks created by the given employee (e.g. 'Tasks created by me') or assigned to given employee ('Tasks assigned to me') or both. Default: AssignedToMe
     *
     * @return self
     */
    public function setDelegateFilter($delegate_filter)
    {
        if (is_null($delegate_filter)) {
            throw new \InvalidArgumentException('non-nullable delegate_filter cannot be null');
        }
        $this->container['delegate_filter'] = $delegate_filter;

        return $this;
    }

    /**
     * Gets employee_id
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string|null $employee_id Search the tasks assigned and/or created by given employee.
     *
     * @return self
     */
    public function setEmployeeId($employee_id)
    {
        if (is_null($employee_id)) {
            throw new \InvalidArgumentException('non-nullable employee_id cannot be null');
        }
        $this->container['employee_id'] = $employee_id;

        return $this;
    }

    /**
     * Gets employee_ids
     *
     * @return string[]|null
     */
    public function getEmployeeIds()
    {
        return $this->container['employee_ids'];
    }

    /**
     * Sets employee_ids
     *
     * @param string[]|null $employee_ids Search the tasks assigned and/or created by given employee ids.
     *
     * @return self
     */
    public function setEmployeeIds($employee_ids)
    {
        if (is_null($employee_ids)) {
            throw new \InvalidArgumentException('non-nullable employee_ids cannot be null');
        }
        $this->container['employee_ids'] = $employee_ids;

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
     * @param bool $include_statistics Return statistics, like counts of timeline events in past, today and next week.
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
     * Gets order_by
     *
     * @return \Brixion\Kolibri\Model\TaskOrderByField
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Brixion\Kolibri\Model\TaskOrderByField $order_by Order the results by the indicated task field.
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
     * Gets status_filter
     *
     * @return \Brixion\Kolibri\Model\TaskStatus[]|null
     */
    public function getStatusFilter()
    {
        return $this->container['status_filter'];
    }

    /**
     * Sets status_filter
     *
     * @param \Brixion\Kolibri\Model\TaskStatus[]|null $status_filter Only return tasks with given status.
     *
     * @return self
     */
    public function setStatusFilter($status_filter)
    {
        if (is_null($status_filter)) {
            throw new \InvalidArgumentException('non-nullable status_filter cannot be null');
        }
        $this->container['status_filter'] = $status_filter;

        return $this;
    }

    /**
     * Gets task_id
     *
     * @return string|null
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string|null $task_id Search by a specific task Id. Used to return/refresh one search result.
     *
     * @return self
     */
    public function setTaskId($task_id)
    {
        if (is_null($task_id)) {
            throw new \InvalidArgumentException('non-nullable task_id cannot be null');
        }
        $this->container['task_id'] = $task_id;

        return $this;
    }

    /**
     * Gets term_fields
     *
     * @return \Brixion\Kolibri\Model\TaskTermField[]|null
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Brixion\Kolibri\Model\TaskTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
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
     * Gets task_ids
     *
     * @return string[]|null
     */
    public function getTaskIds()
    {
        return $this->container['task_ids'];
    }

    /**
     * Sets task_ids
     *
     * @param string[]|null $task_ids Search by specific task ids.
     *
     * @return self
     */
    public function setTaskIds($task_ids)
    {
        if (is_null($task_ids)) {
            throw new \InvalidArgumentException('non-nullable task_ids cannot be null');
        }
        $this->container['task_ids'] = $task_ids;

        return $this;
    }

    /**
     * Gets priorities
     *
     * @return \Brixion\Kolibri\Model\Priority[]|null
     */
    public function getPriorities()
    {
        return $this->container['priorities'];
    }

    /**
     * Sets priorities
     *
     * @param \Brixion\Kolibri\Model\Priority[]|null $priorities Search by priority.
     *
     * @return self
     */
    public function setPriorities($priorities)
    {
        if (is_null($priorities)) {
            throw new \InvalidArgumentException('non-nullable priorities cannot be null');
        }
        $this->container['priorities'] = $priorities;

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
            throw new \InvalidArgumentException('invalid value for $skip when calling TasksSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($skip < 0)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling TasksSearchRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $take when calling TasksSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($take < 0)) {
            throw new \InvalidArgumentException('invalid value for $take when calling TasksSearchRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $term when calling TasksSearchRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($term) < 0)) {
            throw new \InvalidArgumentException('invalid length for $term when calling TasksSearchRequest., must be bigger than or equal to 0.');
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
