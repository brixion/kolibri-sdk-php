<?php

declare(strict_types=1);

/**
 * RelationsSearchRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * RelationsSearchRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class RelationsSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'RelationsSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'filter_by_relation_group_ids' => 'string[]',
        'filter_by_relation_types' => '\Brixion\Kolibri\Model\RelationType[]',
        'include_statistics' => 'bool',
        'include_back_office_employees' => 'bool',
        'order_by' => '\Brixion\Kolibri\Model\RelationOrderByField',
        'relation_id' => 'string',
        'term_fields' => '\Brixion\Kolibri\Model\RelationTermField[]',
        'culture' => 'string',
        'min_date_time_created' => '\DateTime',
        'max_date_time_created' => '\DateTime',
        'min_date_time_modified' => '\DateTime',
        'max_date_time_modified' => '\DateTime',
        'email_addresses' => 'string[]',
        'relation_ids' => 'string[]',
        'phone_number' => 'string',
        'has_phone_number' => 'bool',
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
        'filter_by_relation_group_ids' => 'guid',
        'filter_by_relation_types' => null,
        'include_statistics' => null,
        'include_back_office_employees' => null,
        'order_by' => null,
        'relation_id' => 'guid',
        'term_fields' => null,
        'culture' => null,
        'min_date_time_created' => 'date-time',
        'max_date_time_created' => 'date-time',
        'min_date_time_modified' => 'date-time',
        'max_date_time_modified' => 'date-time',
        'email_addresses' => null,
        'relation_ids' => 'guid',
        'phone_number' => null,
        'has_phone_number' => null,
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
        'filter_by_relation_group_ids' => false,
        'filter_by_relation_types' => false,
        'include_statistics' => false,
        'include_back_office_employees' => false,
        'order_by' => false,
        'relation_id' => false,
        'term_fields' => false,
        'culture' => false,
        'min_date_time_created' => false,
        'max_date_time_created' => false,
        'min_date_time_modified' => false,
        'max_date_time_modified' => false,
        'email_addresses' => false,
        'relation_ids' => false,
        'phone_number' => false,
        'has_phone_number' => false,
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
        'filter_by_relation_group_ids' => 'filterByRelationGroupIds',
        'filter_by_relation_types' => 'filterByRelationTypes',
        'include_statistics' => 'includeStatistics',
        'include_back_office_employees' => 'includeBackOfficeEmployees',
        'order_by' => 'orderBy',
        'relation_id' => 'relationId',
        'term_fields' => 'termFields',
        'culture' => 'culture',
        'min_date_time_created' => 'minDateTimeCreated',
        'max_date_time_created' => 'maxDateTimeCreated',
        'min_date_time_modified' => 'minDateTimeModified',
        'max_date_time_modified' => 'maxDateTimeModified',
        'email_addresses' => 'emailAddresses',
        'relation_ids' => 'relationIds',
        'phone_number' => 'phoneNumber',
        'has_phone_number' => 'hasPhoneNumber',
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
        'filter_by_relation_group_ids' => 'setFilterByRelationGroupIds',
        'filter_by_relation_types' => 'setFilterByRelationTypes',
        'include_statistics' => 'setIncludeStatistics',
        'include_back_office_employees' => 'setIncludeBackOfficeEmployees',
        'order_by' => 'setOrderBy',
        'relation_id' => 'setRelationId',
        'term_fields' => 'setTermFields',
        'culture' => 'setCulture',
        'min_date_time_created' => 'setMinDateTimeCreated',
        'max_date_time_created' => 'setMaxDateTimeCreated',
        'min_date_time_modified' => 'setMinDateTimeModified',
        'max_date_time_modified' => 'setMaxDateTimeModified',
        'email_addresses' => 'setEmailAddresses',
        'relation_ids' => 'setRelationIds',
        'phone_number' => 'setPhoneNumber',
        'has_phone_number' => 'setHasPhoneNumber',
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
        'filter_by_relation_group_ids' => 'getFilterByRelationGroupIds',
        'filter_by_relation_types' => 'getFilterByRelationTypes',
        'include_statistics' => 'getIncludeStatistics',
        'include_back_office_employees' => 'getIncludeBackOfficeEmployees',
        'order_by' => 'getOrderBy',
        'relation_id' => 'getRelationId',
        'term_fields' => 'getTermFields',
        'culture' => 'getCulture',
        'min_date_time_created' => 'getMinDateTimeCreated',
        'max_date_time_created' => 'getMaxDateTimeCreated',
        'min_date_time_modified' => 'getMinDateTimeModified',
        'max_date_time_modified' => 'getMaxDateTimeModified',
        'email_addresses' => 'getEmailAddresses',
        'relation_ids' => 'getRelationIds',
        'phone_number' => 'getPhoneNumber',
        'has_phone_number' => 'getHasPhoneNumber',
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
        $this->setIfExists('filter_by_relation_group_ids', $data ?? [], null);
        $this->setIfExists('filter_by_relation_types', $data ?? [], null);
        $this->setIfExists('include_statistics', $data ?? [], null);
        $this->setIfExists('include_back_office_employees', $data ?? [], false);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('relation_id', $data ?? [], null);
        $this->setIfExists('term_fields', $data ?? [], null);
        $this->setIfExists('culture', $data ?? [], null);
        $this->setIfExists('min_date_time_created', $data ?? [], null);
        $this->setIfExists('max_date_time_created', $data ?? [], null);
        $this->setIfExists('min_date_time_modified', $data ?? [], null);
        $this->setIfExists('max_date_time_modified', $data ?? [], null);
        $this->setIfExists('email_addresses', $data ?? [], null);
        $this->setIfExists('relation_ids', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('has_phone_number', $data ?? [], null);
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
     * Gets filter_by_relation_group_ids
     *
     * @return string[]|null
     */
    public function getFilterByRelationGroupIds()
    {
        return $this->container['filter_by_relation_group_ids'];
    }

    /**
     * Sets filter_by_relation_group_ids
     *
     * @param string[]|null $filter_by_relation_group_ids Filter by selected relation group id's.
     *
     * @return self
     */
    public function setFilterByRelationGroupIds($filter_by_relation_group_ids)
    {
        if (is_null($filter_by_relation_group_ids)) {
            throw new \InvalidArgumentException('non-nullable filter_by_relation_group_ids cannot be null');
        }
        $this->container['filter_by_relation_group_ids'] = $filter_by_relation_group_ids;

        return $this;
    }

    /**
     * Gets filter_by_relation_types
     *
     * @return \Brixion\Kolibri\Model\RelationType[]|null
     */
    public function getFilterByRelationTypes()
    {
        return $this->container['filter_by_relation_types'];
    }

    /**
     * Sets filter_by_relation_types
     *
     * @param \Brixion\Kolibri\Model\RelationType[]|null $filter_by_relation_types Filter by selected relation types.
     *
     * @return self
     */
    public function setFilterByRelationTypes($filter_by_relation_types)
    {
        if (is_null($filter_by_relation_types)) {
            throw new \InvalidArgumentException('non-nullable filter_by_relation_types cannot be null');
        }
        $this->container['filter_by_relation_types'] = $filter_by_relation_types;

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
     * @param bool $include_statistics Return statistics, like lists of unique localities of the relations.
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
     * Gets include_back_office_employees
     *
     * @return bool|null
     */
    public function getIncludeBackOfficeEmployees()
    {
        return $this->container['include_back_office_employees'];
    }

    /**
     * Sets include_back_office_employees
     *
     * @param bool|null $include_back_office_employees Include back office employees if FilterByRelationTypes contains employees.
     *
     * @return self
     */
    public function setIncludeBackOfficeEmployees($include_back_office_employees)
    {
        if (is_null($include_back_office_employees)) {
            throw new \InvalidArgumentException('non-nullable include_back_office_employees cannot be null');
        }
        $this->container['include_back_office_employees'] = $include_back_office_employees;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Brixion\Kolibri\Model\RelationOrderByField
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Brixion\Kolibri\Model\RelationOrderByField $order_by Order the results by the indicated relation field.
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
     * @param string|null $relation_id Search by a specific relation Id. Used to return/refresh one search result.
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
     * @return \Brixion\Kolibri\Model\RelationTermField[]|null
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Brixion\Kolibri\Model\RelationTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
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
            throw new \InvalidArgumentException('invalid length for $culture when calling RelationsSearchRequest., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($culture) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling RelationsSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets min_date_time_created
     *
     * @return \DateTime|null
     */
    public function getMinDateTimeCreated()
    {
        return $this->container['min_date_time_created'];
    }

    /**
     * Sets min_date_time_created
     *
     * @param \DateTime|null $min_date_time_created Filter by items created at or after the minimum datetime created.
     *
     * @return self
     */
    public function setMinDateTimeCreated($min_date_time_created)
    {
        if (is_null($min_date_time_created)) {
            throw new \InvalidArgumentException('non-nullable min_date_time_created cannot be null');
        }
        $this->container['min_date_time_created'] = $min_date_time_created;

        return $this;
    }

    /**
     * Gets max_date_time_created
     *
     * @return \DateTime|null
     */
    public function getMaxDateTimeCreated()
    {
        return $this->container['max_date_time_created'];
    }

    /**
     * Sets max_date_time_created
     *
     * @param \DateTime|null $max_date_time_created Filter by items created at or before the given maximum datetime created.
     *
     * @return self
     */
    public function setMaxDateTimeCreated($max_date_time_created)
    {
        if (is_null($max_date_time_created)) {
            throw new \InvalidArgumentException('non-nullable max_date_time_created cannot be null');
        }
        $this->container['max_date_time_created'] = $max_date_time_created;

        return $this;
    }

    /**
     * Gets min_date_time_modified
     *
     * @return \DateTime|null
     */
    public function getMinDateTimeModified()
    {
        return $this->container['min_date_time_modified'];
    }

    /**
     * Sets min_date_time_modified
     *
     * @param \DateTime|null $min_date_time_modified Filter by items created at or after the minimum datetime modified.
     *
     * @return self
     */
    public function setMinDateTimeModified($min_date_time_modified)
    {
        if (is_null($min_date_time_modified)) {
            throw new \InvalidArgumentException('non-nullable min_date_time_modified cannot be null');
        }
        $this->container['min_date_time_modified'] = $min_date_time_modified;

        return $this;
    }

    /**
     * Gets max_date_time_modified
     *
     * @return \DateTime|null
     */
    public function getMaxDateTimeModified()
    {
        return $this->container['max_date_time_modified'];
    }

    /**
     * Sets max_date_time_modified
     *
     * @param \DateTime|null $max_date_time_modified Filter by items modified at or before the given maximum datetime modified.
     *
     * @return self
     */
    public function setMaxDateTimeModified($max_date_time_modified)
    {
        if (is_null($max_date_time_modified)) {
            throw new \InvalidArgumentException('non-nullable max_date_time_modified cannot be null');
        }
        $this->container['max_date_time_modified'] = $max_date_time_modified;

        return $this;
    }

    /**
     * Gets email_addresses
     *
     * @return string[]|null
     */
    public function getEmailAddresses()
    {
        return $this->container['email_addresses'];
    }

    /**
     * Sets email_addresses
     *
     * @param string[]|null $email_addresses Filter by email address for relations. Multiple email addresses can be specified, all relations with any matching email address will be returned.
     *
     * @return self
     */
    public function setEmailAddresses($email_addresses)
    {
        if (is_null($email_addresses)) {
            throw new \InvalidArgumentException('non-nullable email_addresses cannot be null');
        }
        $this->container['email_addresses'] = $email_addresses;

        return $this;
    }

    /**
     * Gets relation_ids
     *
     * @return string[]|null
     */
    public function getRelationIds()
    {
        return $this->container['relation_ids'];
    }

    /**
     * Sets relation_ids
     *
     * @param string[]|null $relation_ids Search by specific task Ids. Used to return/refresh one search result.
     *
     * @return self
     */
    public function setRelationIds($relation_ids)
    {
        if (is_null($relation_ids)) {
            throw new \InvalidArgumentException('non-nullable relation_ids cannot be null');
        }
        $this->container['relation_ids'] = $relation_ids;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets has_phone_number
     *
     * @return bool|null
     */
    public function getHasPhoneNumber()
    {
        return $this->container['has_phone_number'];
    }

    /**
     * Sets has_phone_number
     *
     * @param bool|null $has_phone_number has_phone_number
     *
     * @return self
     */
    public function setHasPhoneNumber($has_phone_number)
    {
        if (is_null($has_phone_number)) {
            throw new \InvalidArgumentException('non-nullable has_phone_number cannot be null');
        }
        $this->container['has_phone_number'] = $has_phone_number;

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
            throw new \InvalidArgumentException('invalid value for $skip when calling RelationsSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($skip < 0)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling RelationsSearchRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $take when calling RelationsSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($take < 0)) {
            throw new \InvalidArgumentException('invalid value for $take when calling RelationsSearchRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $term when calling RelationsSearchRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($term) < 0)) {
            throw new \InvalidArgumentException('invalid length for $term when calling RelationsSearchRequest., must be bigger than or equal to 0.');
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
