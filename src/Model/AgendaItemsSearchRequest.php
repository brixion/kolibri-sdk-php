<?php

declare(strict_types=1);

/**
 * AgendaItemsSearchRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItemsSearchRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class AgendaItemsSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AgendaItemsSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'category_ids' => 'string[]',
        'category_types' => '\Brixion\Kolibri\Model\AgendaItemCategoryType[]',
        'employee_ids' => 'string[]',
        'order_by' => '\Brixion\Kolibri\Model\AgendaItemOrderByField',
        'period_date_time_max' => '\DateTime',
        'period_date_time_min' => '\DateTime',
        'term_fields' => '\Brixion\Kolibri\Model\AgendaItemTermField[]',
        'culture' => 'string',
        'is_canceled' => 'bool',
        'is_confirmed' => 'bool',
        'return_occurences_of_recurring_agenda_items' => 'bool',
        'agenda_item_id' => 'string',
        'agenda_item_ids' => 'string[]',
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
        'category_types' => null,
        'employee_ids' => 'guid',
        'order_by' => null,
        'period_date_time_max' => 'date-time',
        'period_date_time_min' => 'date-time',
        'term_fields' => null,
        'culture' => null,
        'is_canceled' => null,
        'is_confirmed' => null,
        'return_occurences_of_recurring_agenda_items' => null,
        'agenda_item_id' => 'guid',
        'agenda_item_ids' => 'guid',
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
        'category_types' => false,
        'employee_ids' => false,
        'order_by' => false,
        'period_date_time_max' => false,
        'period_date_time_min' => false,
        'term_fields' => false,
        'culture' => false,
        'is_canceled' => false,
        'is_confirmed' => false,
        'return_occurences_of_recurring_agenda_items' => false,
        'agenda_item_id' => false,
        'agenda_item_ids' => false,
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
        'category_types' => 'categoryTypes',
        'employee_ids' => 'employeeIds',
        'order_by' => 'orderBy',
        'period_date_time_max' => 'periodDateTimeMax',
        'period_date_time_min' => 'periodDateTimeMin',
        'term_fields' => 'termFields',
        'culture' => 'culture',
        'is_canceled' => 'isCanceled',
        'is_confirmed' => 'isConfirmed',
        'return_occurences_of_recurring_agenda_items' => 'returnOccurencesOfRecurringAgendaItems',
        'agenda_item_id' => 'agendaItemId',
        'agenda_item_ids' => 'agendaItemIds',
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
        'category_types' => 'setCategoryTypes',
        'employee_ids' => 'setEmployeeIds',
        'order_by' => 'setOrderBy',
        'period_date_time_max' => 'setPeriodDateTimeMax',
        'period_date_time_min' => 'setPeriodDateTimeMin',
        'term_fields' => 'setTermFields',
        'culture' => 'setCulture',
        'is_canceled' => 'setIsCanceled',
        'is_confirmed' => 'setIsConfirmed',
        'return_occurences_of_recurring_agenda_items' => 'setReturnOccurencesOfRecurringAgendaItems',
        'agenda_item_id' => 'setAgendaItemId',
        'agenda_item_ids' => 'setAgendaItemIds',
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
        'category_types' => 'getCategoryTypes',
        'employee_ids' => 'getEmployeeIds',
        'order_by' => 'getOrderBy',
        'period_date_time_max' => 'getPeriodDateTimeMax',
        'period_date_time_min' => 'getPeriodDateTimeMin',
        'term_fields' => 'getTermFields',
        'culture' => 'getCulture',
        'is_canceled' => 'getIsCanceled',
        'is_confirmed' => 'getIsConfirmed',
        'return_occurences_of_recurring_agenda_items' => 'getReturnOccurencesOfRecurringAgendaItems',
        'agenda_item_id' => 'getAgendaItemId',
        'agenda_item_ids' => 'getAgendaItemIds',
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
        $this->setIfExists('category_types', $data ?? [], null);
        $this->setIfExists('employee_ids', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('period_date_time_max', $data ?? [], null);
        $this->setIfExists('period_date_time_min', $data ?? [], null);
        $this->setIfExists('term_fields', $data ?? [], null);
        $this->setIfExists('culture', $data ?? [], null);
        $this->setIfExists('is_canceled', $data ?? [], null);
        $this->setIfExists('is_confirmed', $data ?? [], null);
        $this->setIfExists('return_occurences_of_recurring_agenda_items', $data ?? [], null);
        $this->setIfExists('agenda_item_id', $data ?? [], null);
        $this->setIfExists('agenda_item_ids', $data ?? [], null);
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
     * @param string[]|null $category_ids Only return agendaItems linked at one of the categories indicated by given AgendaItem category Id's.
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
     * Gets category_types
     *
     * @return \Brixion\Kolibri\Model\AgendaItemCategoryType[]|null
     */
    public function getCategoryTypes()
    {
        return $this->container['category_types'];
    }

    /**
     * Sets category_types
     *
     * @param \Brixion\Kolibri\Model\AgendaItemCategoryType[]|null $category_types Only return agendaItems linked at one of the categories with a category type indicated by given AgendaItem Category Types.
     *
     * @return self
     */
    public function setCategoryTypes($category_types)
    {
        if (is_null($category_types)) {
            throw new \InvalidArgumentException('non-nullable category_types cannot be null');
        }
        $this->container['category_types'] = $category_types;

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
     * @param string[]|null $employee_ids Search the agendaItems of the given employees.
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
     * Gets order_by
     *
     * @return \Brixion\Kolibri\Model\AgendaItemOrderByField
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Brixion\Kolibri\Model\AgendaItemOrderByField $order_by Order the results by the indicated AgendaItem field.
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
     * Gets period_date_time_max
     *
     * @return \DateTime|null
     */
    public function getPeriodDateTimeMax()
    {
        return $this->container['period_date_time_max'];
    }

    /**
     * Sets period_date_time_max
     *
     * @param \DateTime|null $period_date_time_max Highest value agenda items should occur. Not required when searching by AgendaItemId.
     *
     * @return self
     */
    public function setPeriodDateTimeMax($period_date_time_max)
    {
        if (is_null($period_date_time_max)) {
            throw new \InvalidArgumentException('non-nullable period_date_time_max cannot be null');
        }
        $this->container['period_date_time_max'] = $period_date_time_max;

        return $this;
    }

    /**
     * Gets period_date_time_min
     *
     * @return \DateTime|null
     */
    public function getPeriodDateTimeMin()
    {
        return $this->container['period_date_time_min'];
    }

    /**
     * Sets period_date_time_min
     *
     * @param \DateTime|null $period_date_time_min Lowest value agenda items should occur. Not required when searching by AgendaItemId.
     *
     * @return self
     */
    public function setPeriodDateTimeMin($period_date_time_min)
    {
        if (is_null($period_date_time_min)) {
            throw new \InvalidArgumentException('non-nullable period_date_time_min cannot be null');
        }
        $this->container['period_date_time_min'] = $period_date_time_min;

        return $this;
    }

    /**
     * Gets term_fields
     *
     * @return \Brixion\Kolibri\Model\AgendaItemTermField[]|null
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Brixion\Kolibri\Model\AgendaItemTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
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
            throw new \InvalidArgumentException('invalid length for $culture when calling AgendaItemsSearchRequest., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($culture) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling AgendaItemsSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets is_canceled
     *
     * @return bool|null
     */
    public function getIsCanceled()
    {
        return $this->container['is_canceled'];
    }

    /**
     * Sets is_canceled
     *
     * @param bool|null $is_canceled If isCanceled is null, results are eiter canceled or not. If it is defined as true, only canceled results are returned. If it is defined as false, only not canceled results are returned.
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
     * @return bool|null
     */
    public function getIsConfirmed()
    {
        return $this->container['is_confirmed'];
    }

    /**
     * Sets is_confirmed
     *
     * @param bool|null $is_confirmed If isConfirmed is null, results are either confirmed or not. If it is defined as true, only confirmed results are returned. If it is defined as false, only non confirmed results are returned.
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
     * Gets return_occurences_of_recurring_agenda_items
     *
     * @return bool|null
     */
    public function getReturnOccurencesOfRecurringAgendaItems()
    {
        return $this->container['return_occurences_of_recurring_agenda_items'];
    }

    /**
     * Sets return_occurences_of_recurring_agenda_items
     *
     * @param bool|null $return_occurences_of_recurring_agenda_items If returnOccurencesOfRecurringAgendaItems is set to true each occurence of a recurring agendaitem will be in the search results. When set to false only the recurring agendaItem (with its recurrency patter) is in the results. For the /AgendaItem/Search endpoint the default value of returnOccurencesOfRecurringAgendaItems is false. For the /AgendaItem/SearchAndExport endpoint the default value of returnOccurencesOfRecurringAgendaItems is true.
     *
     * @return self
     */
    public function setReturnOccurencesOfRecurringAgendaItems($return_occurences_of_recurring_agenda_items)
    {
        if (is_null($return_occurences_of_recurring_agenda_items)) {
            throw new \InvalidArgumentException('non-nullable return_occurences_of_recurring_agenda_items cannot be null');
        }
        $this->container['return_occurences_of_recurring_agenda_items'] = $return_occurences_of_recurring_agenda_items;

        return $this;
    }

    /**
     * Gets agenda_item_id
     *
     * @return string|null
     */
    public function getAgendaItemId()
    {
        return $this->container['agenda_item_id'];
    }

    /**
     * Sets agenda_item_id
     *
     * @param string|null $agenda_item_id Search by a specific agendaItem Id. Used to return/refresh one search result.
     *
     * @return self
     */
    public function setAgendaItemId($agenda_item_id)
    {
        if (is_null($agenda_item_id)) {
            throw new \InvalidArgumentException('non-nullable agenda_item_id cannot be null');
        }
        $this->container['agenda_item_id'] = $agenda_item_id;

        return $this;
    }

    /**
     * Gets agenda_item_ids
     *
     * @return string[]|null
     */
    public function getAgendaItemIds()
    {
        return $this->container['agenda_item_ids'];
    }

    /**
     * Sets agenda_item_ids
     *
     * @param string[]|null $agenda_item_ids Search by specific agenda item Ids.
     *
     * @return self
     */
    public function setAgendaItemIds($agenda_item_ids)
    {
        if (is_null($agenda_item_ids)) {
            throw new \InvalidArgumentException('non-nullable agenda_item_ids cannot be null');
        }
        $this->container['agenda_item_ids'] = $agenda_item_ids;

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
            throw new \InvalidArgumentException('invalid value for $skip when calling AgendaItemsSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($skip < 0)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling AgendaItemsSearchRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $take when calling AgendaItemsSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($take < 0)) {
            throw new \InvalidArgumentException('invalid value for $take when calling AgendaItemsSearchRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $term when calling AgendaItemsSearchRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($term) < 0)) {
            throw new \InvalidArgumentException('invalid length for $term when calling AgendaItemsSearchRequest., must be bigger than or equal to 0.');
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
