<?php

declare(strict_types=1);

/**
 * SearchAssignmentsSearchRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * SearchAssignmentsSearchRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class SearchAssignmentsSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'SearchAssignmentsSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'order_by' => '\Brixion\Kolibri\Model\SearchAssignmentOrderByField',
        'search_assignment_ids' => 'string[]',
        'assignment_phases' => '\Brixion\Kolibri\Model\AssignmentPhase[]',
        'real_estate_groups' => '\Brixion\Kolibri\Model\RealEstateGroup[]',
        'relation_ids' => 'string[]',
        'offer_types' => '\Brixion\Kolibri\Model\OfferType[]',
        'match_mail_periods' => '\Brixion\Kolibri\Model\MatchMailPeriod[]',
        'term_fields' => '\Brixion\Kolibri\Model\SearchAssignmentTermField[]',
        'alv_types' => '\Brixion\Kolibri\Model\TypeAlv[]',
        'bog_types' => '\Brixion\Kolibri\Model\TypeBOG[]',
        'part_types' => '\Brixion\Kolibri\Model\TypePART[]',
        'filter_by_paid' => '\Brixion\Kolibri\Model\PaidFilter',
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
        'order_by' => null,
        'search_assignment_ids' => 'guid',
        'assignment_phases' => null,
        'real_estate_groups' => null,
        'relation_ids' => 'guid',
        'offer_types' => null,
        'match_mail_periods' => null,
        'term_fields' => null,
        'alv_types' => null,
        'bog_types' => null,
        'part_types' => null,
        'filter_by_paid' => null,
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
        'order_by' => false,
        'search_assignment_ids' => false,
        'assignment_phases' => false,
        'real_estate_groups' => false,
        'relation_ids' => false,
        'offer_types' => false,
        'match_mail_periods' => false,
        'term_fields' => false,
        'alv_types' => false,
        'bog_types' => false,
        'part_types' => false,
        'filter_by_paid' => false,
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
        'order_by' => 'orderBy',
        'search_assignment_ids' => 'searchAssignmentIds',
        'assignment_phases' => 'assignmentPhases',
        'real_estate_groups' => 'realEstateGroups',
        'relation_ids' => 'relationIds',
        'offer_types' => 'offerTypes',
        'match_mail_periods' => 'matchMailPeriods',
        'term_fields' => 'termFields',
        'alv_types' => 'alvTypes',
        'bog_types' => 'bogTypes',
        'part_types' => 'partTypes',
        'filter_by_paid' => 'filterByPaid',
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
        'order_by' => 'setOrderBy',
        'search_assignment_ids' => 'setSearchAssignmentIds',
        'assignment_phases' => 'setAssignmentPhases',
        'real_estate_groups' => 'setRealEstateGroups',
        'relation_ids' => 'setRelationIds',
        'offer_types' => 'setOfferTypes',
        'match_mail_periods' => 'setMatchMailPeriods',
        'term_fields' => 'setTermFields',
        'alv_types' => 'setAlvTypes',
        'bog_types' => 'setBogTypes',
        'part_types' => 'setPartTypes',
        'filter_by_paid' => 'setFilterByPaid',
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
        'order_by' => 'getOrderBy',
        'search_assignment_ids' => 'getSearchAssignmentIds',
        'assignment_phases' => 'getAssignmentPhases',
        'real_estate_groups' => 'getRealEstateGroups',
        'relation_ids' => 'getRelationIds',
        'offer_types' => 'getOfferTypes',
        'match_mail_periods' => 'getMatchMailPeriods',
        'term_fields' => 'getTermFields',
        'alv_types' => 'getAlvTypes',
        'bog_types' => 'getBogTypes',
        'part_types' => 'getPartTypes',
        'filter_by_paid' => 'getFilterByPaid',
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
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('search_assignment_ids', $data ?? [], null);
        $this->setIfExists('assignment_phases', $data ?? [], null);
        $this->setIfExists('real_estate_groups', $data ?? [], null);
        $this->setIfExists('relation_ids', $data ?? [], null);
        $this->setIfExists('offer_types', $data ?? [], null);
        $this->setIfExists('match_mail_periods', $data ?? [], null);
        $this->setIfExists('term_fields', $data ?? [], null);
        $this->setIfExists('alv_types', $data ?? [], null);
        $this->setIfExists('bog_types', $data ?? [], null);
        $this->setIfExists('part_types', $data ?? [], null);
        $this->setIfExists('filter_by_paid', $data ?? [], null);
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
        if ($this->container['filter_by_paid'] === null) {
            $invalidProperties[] = "'filter_by_paid' can't be null";
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
     * Gets order_by
     *
     * @return \Brixion\Kolibri\Model\SearchAssignmentOrderByField
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Brixion\Kolibri\Model\SearchAssignmentOrderByField $order_by Order the results by the indicated searchAssignment field.
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
     * Gets search_assignment_ids
     *
     * @return string[]|null
     */
    public function getSearchAssignmentIds()
    {
        return $this->container['search_assignment_ids'];
    }

    /**
     * Sets search_assignment_ids
     *
     * @param string[]|null $search_assignment_ids Search by specific searchAssignment Ids. Used to return/refresh one or more search results.
     *
     * @return self
     */
    public function setSearchAssignmentIds($search_assignment_ids)
    {
        if (is_null($search_assignment_ids)) {
            throw new \InvalidArgumentException('non-nullable search_assignment_ids cannot be null');
        }
        $this->container['search_assignment_ids'] = $search_assignment_ids;

        return $this;
    }

    /**
     * Gets assignment_phases
     *
     * @return \Brixion\Kolibri\Model\AssignmentPhase[]|null
     */
    public function getAssignmentPhases()
    {
        return $this->container['assignment_phases'];
    }

    /**
     * Sets assignment_phases
     *
     * @param \Brixion\Kolibri\Model\AssignmentPhase[]|null $assignment_phases Filter by assignment phase ('Concept', 'Initiated', 'Completed')
     *
     * @return self
     */
    public function setAssignmentPhases($assignment_phases)
    {
        if (is_null($assignment_phases)) {
            throw new \InvalidArgumentException('non-nullable assignment_phases cannot be null');
        }
        $this->container['assignment_phases'] = $assignment_phases;

        return $this;
    }

    /**
     * Gets real_estate_groups
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroup[]|null
     */
    public function getRealEstateGroups()
    {
        return $this->container['real_estate_groups'];
    }

    /**
     * Sets real_estate_groups
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroup[]|null $real_estate_groups Filter by selected real estate groups (residential, commercial, agricultural).
     *
     * @return self
     */
    public function setRealEstateGroups($real_estate_groups)
    {
        if (is_null($real_estate_groups)) {
            throw new \InvalidArgumentException('non-nullable real_estate_groups cannot be null');
        }
        $this->container['real_estate_groups'] = $real_estate_groups;

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
     * @param string[]|null $relation_ids Filter by selected Relation Ids.
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
     * Gets offer_types
     *
     * @return \Brixion\Kolibri\Model\OfferType[]|null
     */
    public function getOfferTypes()
    {
        return $this->container['offer_types'];
    }

    /**
     * Sets offer_types
     *
     * @param \Brixion\Kolibri\Model\OfferType[]|null $offer_types Filter by offer type (sale, rent)
     *
     * @return self
     */
    public function setOfferTypes($offer_types)
    {
        if (is_null($offer_types)) {
            throw new \InvalidArgumentException('non-nullable offer_types cannot be null');
        }
        $this->container['offer_types'] = $offer_types;

        return $this;
    }

    /**
     * Gets match_mail_periods
     *
     * @return \Brixion\Kolibri\Model\MatchMailPeriod[]|null
     */
    public function getMatchMailPeriods()
    {
        return $this->container['match_mail_periods'];
    }

    /**
     * Sets match_mail_periods
     *
     * @param \Brixion\Kolibri\Model\MatchMailPeriod[]|null $match_mail_periods Filter by match mail periods (Never, daily, weekly)
     *
     * @return self
     */
    public function setMatchMailPeriods($match_mail_periods)
    {
        if (is_null($match_mail_periods)) {
            throw new \InvalidArgumentException('non-nullable match_mail_periods cannot be null');
        }
        $this->container['match_mail_periods'] = $match_mail_periods;

        return $this;
    }

    /**
     * Gets term_fields
     *
     * @return \Brixion\Kolibri\Model\SearchAssignmentTermField[]|null
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Brixion\Kolibri\Model\SearchAssignmentTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
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
     * Gets alv_types
     *
     * @return \Brixion\Kolibri\Model\TypeAlv[]|null
     */
    public function getAlvTypes()
    {
        return $this->container['alv_types'];
    }

    /**
     * Sets alv_types
     *
     * @param \Brixion\Kolibri\Model\TypeAlv[]|null $alv_types Search for given ALV types (CattleFarming, MeatCalves, etc.).
     *
     * @return self
     */
    public function setAlvTypes($alv_types)
    {
        if (is_null($alv_types)) {
            throw new \InvalidArgumentException('non-nullable alv_types cannot be null');
        }
        $this->container['alv_types'] = $alv_types;

        return $this;
    }

    /**
     * Gets bog_types
     *
     * @return \Brixion\Kolibri\Model\TypeBOG[]|null
     */
    public function getBogTypes()
    {
        return $this->container['bog_types'];
    }

    /**
     * Sets bog_types
     *
     * @param \Brixion\Kolibri\Model\TypeBOG[]|null $bog_types Search for given BOG types (Leisure, Warehouse, etc.).
     *
     * @return self
     */
    public function setBogTypes($bog_types)
    {
        if (is_null($bog_types)) {
            throw new \InvalidArgumentException('non-nullable bog_types cannot be null');
        }
        $this->container['bog_types'] = $bog_types;

        return $this;
    }

    /**
     * Gets part_types
     *
     * @return \Brixion\Kolibri\Model\TypePART[]|null
     */
    public function getPartTypes()
    {
        return $this->container['part_types'];
    }

    /**
     * Sets part_types
     *
     * @param \Brixion\Kolibri\Model\TypePART[]|null $part_types Search for given PART types (Apartment, SummerCottage, etc.).
     *
     * @return self
     */
    public function setPartTypes($part_types)
    {
        if (is_null($part_types)) {
            throw new \InvalidArgumentException('non-nullable part_types cannot be null');
        }
        $this->container['part_types'] = $part_types;

        return $this;
    }

    /**
     * Gets filter_by_paid
     *
     * @return \Brixion\Kolibri\Model\PaidFilter
     */
    public function getFilterByPaid()
    {
        return $this->container['filter_by_paid'];
    }

    /**
     * Sets filter_by_paid
     *
     * @param \Brixion\Kolibri\Model\PaidFilter $filter_by_paid Show paid or not paid items. Default: 'PaidOrNotPaid': show all items.
     *
     * @return self
     */
    public function setFilterByPaid($filter_by_paid)
    {
        if (is_null($filter_by_paid)) {
            throw new \InvalidArgumentException('non-nullable filter_by_paid cannot be null');
        }
        $this->container['filter_by_paid'] = $filter_by_paid;

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
            throw new \InvalidArgumentException('invalid value for $skip when calling SearchAssignmentsSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($skip < 0)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling SearchAssignmentsSearchRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $take when calling SearchAssignmentsSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($take < 0)) {
            throw new \InvalidArgumentException('invalid value for $take when calling SearchAssignmentsSearchRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $term when calling SearchAssignmentsSearchRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($term) < 0)) {
            throw new \InvalidArgumentException('invalid length for $term when calling SearchAssignmentsSearchRequest., must be bigger than or equal to 0.');
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
