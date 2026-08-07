<?php

declare(strict_types=1);

/**
 * AssignmentsSearchRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AssignmentsSearchRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class AssignmentsSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AssignmentsSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'assignment_ids' => 'string[]',
        'assignment_phases' => '\Brixion\Kolibri\Model\AssignmentPhase[]',
        'availabilty_statuses' => '\Brixion\Kolibri\Model\AvailabilityStatus[]',
        'country_code' => 'string',
        'employee_ids' => 'string[]',
        'filter_by_assignment_types' => '\Brixion\Kolibri\Model\AssignmentType[]',
        'filter_by_real_estate_groups' => '\Brixion\Kolibri\Model\RealEstateGroup[]',
        'for_rent' => 'bool',
        'for_sale' => 'bool',
        'include_statistics' => 'bool',
        'listing_types' => '\Brixion\Kolibri\Model\ListingType[]',
        'localities' => 'string[]',
        'office_ids' => 'string[]',
        'order_by' => '\Brixion\Kolibri\Model\AssignmentOrderByField',
        'relation_ids' => 'string[]',
        'term_fields' => '\Brixion\Kolibri\Model\AssignmentTermField[]',
        'culture' => 'string',
        'filter_by_project_assignment_ids' => 'string[]',
        'filter_by_object_type_assignment_ids' => 'string[]',
        'filter_by_acquisition_assignment_ids' => 'string[]',
        'ignore_old_versions' => 'bool',
        'has_key' => 'bool',
        'filter_by_key_numbers' => 'int[]',
        'filter_by_furnishings' => '\Brixion\Kolibri\Model\Furnishing[]',
        'filter_by_min_price' => 'float',
        'filter_by_max_price' => 'float',
        'filter_by_number_of_bedrooms_min' => 'int',
        'filter_by_number_of_bedrooms_max' => 'int',
        'is_cancelled' => 'bool',
        'acquisition_statuses' => '\Brixion\Kolibri\Model\AcquisitionStatus[]',
        'available_from_min' => '\DateTime',
        'available_from_max' => '\DateTime',
        'available_until_min' => '\DateTime',
        'available_until_max' => '\DateTime',
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
        'assignment_ids' => 'guid',
        'assignment_phases' => null,
        'availabilty_statuses' => null,
        'country_code' => null,
        'employee_ids' => 'guid',
        'filter_by_assignment_types' => null,
        'filter_by_real_estate_groups' => null,
        'for_rent' => null,
        'for_sale' => null,
        'include_statistics' => null,
        'listing_types' => null,
        'localities' => null,
        'office_ids' => 'guid',
        'order_by' => null,
        'relation_ids' => 'guid',
        'term_fields' => null,
        'culture' => null,
        'filter_by_project_assignment_ids' => 'guid',
        'filter_by_object_type_assignment_ids' => 'guid',
        'filter_by_acquisition_assignment_ids' => 'guid',
        'ignore_old_versions' => null,
        'has_key' => null,
        'filter_by_key_numbers' => 'int32',
        'filter_by_furnishings' => null,
        'filter_by_min_price' => 'decimal',
        'filter_by_max_price' => 'decimal',
        'filter_by_number_of_bedrooms_min' => 'int32',
        'filter_by_number_of_bedrooms_max' => 'int32',
        'is_cancelled' => null,
        'acquisition_statuses' => null,
        'available_from_min' => 'date-time',
        'available_from_max' => 'date-time',
        'available_until_min' => 'date-time',
        'available_until_max' => 'date-time',
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
        'assignment_ids' => false,
        'assignment_phases' => false,
        'availabilty_statuses' => false,
        'country_code' => false,
        'employee_ids' => false,
        'filter_by_assignment_types' => false,
        'filter_by_real_estate_groups' => false,
        'for_rent' => false,
        'for_sale' => false,
        'include_statistics' => false,
        'listing_types' => false,
        'localities' => false,
        'office_ids' => false,
        'order_by' => false,
        'relation_ids' => false,
        'term_fields' => false,
        'culture' => false,
        'filter_by_project_assignment_ids' => false,
        'filter_by_object_type_assignment_ids' => false,
        'filter_by_acquisition_assignment_ids' => false,
        'ignore_old_versions' => false,
        'has_key' => false,
        'filter_by_key_numbers' => false,
        'filter_by_furnishings' => false,
        'filter_by_min_price' => false,
        'filter_by_max_price' => false,
        'filter_by_number_of_bedrooms_min' => false,
        'filter_by_number_of_bedrooms_max' => false,
        'is_cancelled' => false,
        'acquisition_statuses' => false,
        'available_from_min' => false,
        'available_from_max' => false,
        'available_until_min' => false,
        'available_until_max' => false,
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
        'assignment_ids' => 'assignmentIds',
        'assignment_phases' => 'assignmentPhases',
        'availabilty_statuses' => 'availabiltyStatuses',
        'country_code' => 'countryCode',
        'employee_ids' => 'employeeIds',
        'filter_by_assignment_types' => 'filterByAssignmentTypes',
        'filter_by_real_estate_groups' => 'filterByRealEstateGroups',
        'for_rent' => 'forRent',
        'for_sale' => 'forSale',
        'include_statistics' => 'includeStatistics',
        'listing_types' => 'listingTypes',
        'localities' => 'localities',
        'office_ids' => 'officeIds',
        'order_by' => 'orderBy',
        'relation_ids' => 'relationIds',
        'term_fields' => 'termFields',
        'culture' => 'culture',
        'filter_by_project_assignment_ids' => 'filterByProjectAssignmentIds',
        'filter_by_object_type_assignment_ids' => 'filterByObjectTypeAssignmentIds',
        'filter_by_acquisition_assignment_ids' => 'filterByAcquisitionAssignmentIds',
        'ignore_old_versions' => 'ignoreOldVersions',
        'has_key' => 'hasKey',
        'filter_by_key_numbers' => 'filterByKeyNumbers',
        'filter_by_furnishings' => 'filterByFurnishings',
        'filter_by_min_price' => 'filterByMinPrice',
        'filter_by_max_price' => 'filterByMaxPrice',
        'filter_by_number_of_bedrooms_min' => 'filterByNumberOfBedroomsMin',
        'filter_by_number_of_bedrooms_max' => 'filterByNumberOfBedroomsMax',
        'is_cancelled' => 'isCancelled',
        'acquisition_statuses' => 'acquisitionStatuses',
        'available_from_min' => 'availableFromMin',
        'available_from_max' => 'availableFromMax',
        'available_until_min' => 'availableUntilMin',
        'available_until_max' => 'availableUntilMax',
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
        'assignment_ids' => 'setAssignmentIds',
        'assignment_phases' => 'setAssignmentPhases',
        'availabilty_statuses' => 'setAvailabiltyStatuses',
        'country_code' => 'setCountryCode',
        'employee_ids' => 'setEmployeeIds',
        'filter_by_assignment_types' => 'setFilterByAssignmentTypes',
        'filter_by_real_estate_groups' => 'setFilterByRealEstateGroups',
        'for_rent' => 'setForRent',
        'for_sale' => 'setForSale',
        'include_statistics' => 'setIncludeStatistics',
        'listing_types' => 'setListingTypes',
        'localities' => 'setLocalities',
        'office_ids' => 'setOfficeIds',
        'order_by' => 'setOrderBy',
        'relation_ids' => 'setRelationIds',
        'term_fields' => 'setTermFields',
        'culture' => 'setCulture',
        'filter_by_project_assignment_ids' => 'setFilterByProjectAssignmentIds',
        'filter_by_object_type_assignment_ids' => 'setFilterByObjectTypeAssignmentIds',
        'filter_by_acquisition_assignment_ids' => 'setFilterByAcquisitionAssignmentIds',
        'ignore_old_versions' => 'setIgnoreOldVersions',
        'has_key' => 'setHasKey',
        'filter_by_key_numbers' => 'setFilterByKeyNumbers',
        'filter_by_furnishings' => 'setFilterByFurnishings',
        'filter_by_min_price' => 'setFilterByMinPrice',
        'filter_by_max_price' => 'setFilterByMaxPrice',
        'filter_by_number_of_bedrooms_min' => 'setFilterByNumberOfBedroomsMin',
        'filter_by_number_of_bedrooms_max' => 'setFilterByNumberOfBedroomsMax',
        'is_cancelled' => 'setIsCancelled',
        'acquisition_statuses' => 'setAcquisitionStatuses',
        'available_from_min' => 'setAvailableFromMin',
        'available_from_max' => 'setAvailableFromMax',
        'available_until_min' => 'setAvailableUntilMin',
        'available_until_max' => 'setAvailableUntilMax',
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
        'assignment_ids' => 'getAssignmentIds',
        'assignment_phases' => 'getAssignmentPhases',
        'availabilty_statuses' => 'getAvailabiltyStatuses',
        'country_code' => 'getCountryCode',
        'employee_ids' => 'getEmployeeIds',
        'filter_by_assignment_types' => 'getFilterByAssignmentTypes',
        'filter_by_real_estate_groups' => 'getFilterByRealEstateGroups',
        'for_rent' => 'getForRent',
        'for_sale' => 'getForSale',
        'include_statistics' => 'getIncludeStatistics',
        'listing_types' => 'getListingTypes',
        'localities' => 'getLocalities',
        'office_ids' => 'getOfficeIds',
        'order_by' => 'getOrderBy',
        'relation_ids' => 'getRelationIds',
        'term_fields' => 'getTermFields',
        'culture' => 'getCulture',
        'filter_by_project_assignment_ids' => 'getFilterByProjectAssignmentIds',
        'filter_by_object_type_assignment_ids' => 'getFilterByObjectTypeAssignmentIds',
        'filter_by_acquisition_assignment_ids' => 'getFilterByAcquisitionAssignmentIds',
        'ignore_old_versions' => 'getIgnoreOldVersions',
        'has_key' => 'getHasKey',
        'filter_by_key_numbers' => 'getFilterByKeyNumbers',
        'filter_by_furnishings' => 'getFilterByFurnishings',
        'filter_by_min_price' => 'getFilterByMinPrice',
        'filter_by_max_price' => 'getFilterByMaxPrice',
        'filter_by_number_of_bedrooms_min' => 'getFilterByNumberOfBedroomsMin',
        'filter_by_number_of_bedrooms_max' => 'getFilterByNumberOfBedroomsMax',
        'is_cancelled' => 'getIsCancelled',
        'acquisition_statuses' => 'getAcquisitionStatuses',
        'available_from_min' => 'getAvailableFromMin',
        'available_from_max' => 'getAvailableFromMax',
        'available_until_min' => 'getAvailableUntilMin',
        'available_until_max' => 'getAvailableUntilMax',
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
        $this->setIfExists('assignment_ids', $data ?? [], null);
        $this->setIfExists('assignment_phases', $data ?? [], null);
        $this->setIfExists('availabilty_statuses', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('employee_ids', $data ?? [], null);
        $this->setIfExists('filter_by_assignment_types', $data ?? [], null);
        $this->setIfExists('filter_by_real_estate_groups', $data ?? [], null);
        $this->setIfExists('for_rent', $data ?? [], null);
        $this->setIfExists('for_sale', $data ?? [], null);
        $this->setIfExists('include_statistics', $data ?? [], null);
        $this->setIfExists('listing_types', $data ?? [], null);
        $this->setIfExists('localities', $data ?? [], null);
        $this->setIfExists('office_ids', $data ?? [], null);
        $this->setIfExists('order_by', $data ?? [], null);
        $this->setIfExists('relation_ids', $data ?? [], null);
        $this->setIfExists('term_fields', $data ?? [], null);
        $this->setIfExists('culture', $data ?? [], null);
        $this->setIfExists('filter_by_project_assignment_ids', $data ?? [], null);
        $this->setIfExists('filter_by_object_type_assignment_ids', $data ?? [], null);
        $this->setIfExists('filter_by_acquisition_assignment_ids', $data ?? [], null);
        $this->setIfExists('ignore_old_versions', $data ?? [], null);
        $this->setIfExists('has_key', $data ?? [], null);
        $this->setIfExists('filter_by_key_numbers', $data ?? [], null);
        $this->setIfExists('filter_by_furnishings', $data ?? [], null);
        $this->setIfExists('filter_by_min_price', $data ?? [], null);
        $this->setIfExists('filter_by_max_price', $data ?? [], null);
        $this->setIfExists('filter_by_number_of_bedrooms_min', $data ?? [], null);
        $this->setIfExists('filter_by_number_of_bedrooms_max', $data ?? [], null);
        $this->setIfExists('is_cancelled', $data ?? [], null);
        $this->setIfExists('acquisition_statuses', $data ?? [], null);
        $this->setIfExists('available_from_min', $data ?? [], null);
        $this->setIfExists('available_from_max', $data ?? [], null);
        $this->setIfExists('available_until_min', $data ?? [], null);
        $this->setIfExists('available_until_max', $data ?? [], null);
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

        if ($this->container['for_rent'] === null) {
            $invalidProperties[] = "'for_rent' can't be null";
        }
        if ($this->container['for_sale'] === null) {
            $invalidProperties[] = "'for_sale' can't be null";
        }
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
     * Gets assignment_ids
     *
     * @return string[]|null
     */
    public function getAssignmentIds()
    {
        return $this->container['assignment_ids'];
    }

    /**
     * Sets assignment_ids
     *
     * @param string[]|null $assignment_ids Search by specific assignment Ids. Used to return/refresh one search result.
     *
     * @return self
     */
    public function setAssignmentIds($assignment_ids)
    {
        if (is_null($assignment_ids)) {
            throw new \InvalidArgumentException('non-nullable assignment_ids cannot be null');
        }
        $this->container['assignment_ids'] = $assignment_ids;

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
     * Gets availabilty_statuses
     *
     * @return \Brixion\Kolibri\Model\AvailabilityStatus[]|null
     */
    public function getAvailabiltyStatuses()
    {
        return $this->container['availabilty_statuses'];
    }

    /**
     * Sets availabilty_statuses
     *
     * @param \Brixion\Kolibri\Model\AvailabilityStatus[]|null $availabilty_statuses availabilty_statuses
     *
     * @return self
     */
    public function setAvailabiltyStatuses($availabilty_statuses)
    {
        if (is_null($availabilty_statuses)) {
            throw new \InvalidArgumentException('non-nullable availabilty_statuses cannot be null');
        }
        $this->container['availabilty_statuses'] = $availabilty_statuses;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code Filter by selected Country Code.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

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
     * @param string[]|null $employee_ids Filter by selected Employee Ids.
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
     * Gets filter_by_assignment_types
     *
     * @return \Brixion\Kolibri\Model\AssignmentType[]|null
     */
    public function getFilterByAssignmentTypes()
    {
        return $this->container['filter_by_assignment_types'];
    }

    /**
     * Sets filter_by_assignment_types
     *
     * @param \Brixion\Kolibri\Model\AssignmentType[]|null $filter_by_assignment_types Filter by selected assignment types.
     *
     * @return self
     */
    public function setFilterByAssignmentTypes($filter_by_assignment_types)
    {
        if (is_null($filter_by_assignment_types)) {
            throw new \InvalidArgumentException('non-nullable filter_by_assignment_types cannot be null');
        }
        $this->container['filter_by_assignment_types'] = $filter_by_assignment_types;

        return $this;
    }

    /**
     * Gets filter_by_real_estate_groups
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroup[]|null
     */
    public function getFilterByRealEstateGroups()
    {
        return $this->container['filter_by_real_estate_groups'];
    }

    /**
     * Sets filter_by_real_estate_groups
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroup[]|null $filter_by_real_estate_groups Filter by selected real estate groups (residential, commercial,...).
     *
     * @return self
     */
    public function setFilterByRealEstateGroups($filter_by_real_estate_groups)
    {
        if (is_null($filter_by_real_estate_groups)) {
            throw new \InvalidArgumentException('non-nullable filter_by_real_estate_groups cannot be null');
        }
        $this->container['filter_by_real_estate_groups'] = $filter_by_real_estate_groups;

        return $this;
    }

    /**
     * Gets for_rent
     *
     * @return bool
     */
    public function getForRent()
    {
        return $this->container['for_rent'];
    }

    /**
     * Sets for_rent
     *
     * @param bool $for_rent If true assingments that are for rent are returned..
     *
     * @return self
     */
    public function setForRent($for_rent)
    {
        if (is_null($for_rent)) {
            throw new \InvalidArgumentException('non-nullable for_rent cannot be null');
        }
        $this->container['for_rent'] = $for_rent;

        return $this;
    }

    /**
     * Gets for_sale
     *
     * @return bool
     */
    public function getForSale()
    {
        return $this->container['for_sale'];
    }

    /**
     * Sets for_sale
     *
     * @param bool $for_sale If true assingments that are for sale are returned..
     *
     * @return self
     */
    public function setForSale($for_sale)
    {
        if (is_null($for_sale)) {
            throw new \InvalidArgumentException('non-nullable for_sale cannot be null');
        }
        $this->container['for_sale'] = $for_sale;

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
     * @param bool $include_statistics Return statistics, like lists of unique localities of the assignments and total commissions.
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
     * Gets listing_types
     *
     * @return \Brixion\Kolibri\Model\ListingType[]|null
     */
    public function getListingTypes()
    {
        return $this->container['listing_types'];
    }

    /**
     * Sets listing_types
     *
     * @param \Brixion\Kolibri\Model\ListingType[]|null $listing_types listing_types
     *
     * @return self
     */
    public function setListingTypes($listing_types)
    {
        if (is_null($listing_types)) {
            throw new \InvalidArgumentException('non-nullable listing_types cannot be null');
        }
        $this->container['listing_types'] = $listing_types;

        return $this;
    }

    /**
     * Gets localities
     *
     * @return string[]|null
     */
    public function getLocalities()
    {
        return $this->container['localities'];
    }

    /**
     * Sets localities
     *
     * @param string[]|null $localities Filter by selected Localities.
     *
     * @return self
     */
    public function setLocalities($localities)
    {
        if (is_null($localities)) {
            throw new \InvalidArgumentException('non-nullable localities cannot be null');
        }
        $this->container['localities'] = $localities;

        return $this;
    }

    /**
     * Gets office_ids
     *
     * @return string[]|null
     */
    public function getOfficeIds()
    {
        return $this->container['office_ids'];
    }

    /**
     * Sets office_ids
     *
     * @param string[]|null $office_ids Filter by selected Office Ids.
     *
     * @return self
     */
    public function setOfficeIds($office_ids)
    {
        if (is_null($office_ids)) {
            throw new \InvalidArgumentException('non-nullable office_ids cannot be null');
        }
        $this->container['office_ids'] = $office_ids;

        return $this;
    }

    /**
     * Gets order_by
     *
     * @return \Brixion\Kolibri\Model\AssignmentOrderByField
     */
    public function getOrderBy()
    {
        return $this->container['order_by'];
    }

    /**
     * Sets order_by
     *
     * @param \Brixion\Kolibri\Model\AssignmentOrderByField $order_by Order the results by the indicated assignment field.
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
     * Gets term_fields
     *
     * @return \Brixion\Kolibri\Model\AssignmentTermField[]|null
     */
    public function getTermFields()
    {
        return $this->container['term_fields'];
    }

    /**
     * Sets term_fields
     *
     * @param \Brixion\Kolibri\Model\AssignmentTermField[]|null $term_fields Search for given text (Term) indicated by the fields in the TermFields list. Required in case 'Term' is given.
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
            throw new \InvalidArgumentException('invalid length for $culture when calling AssignmentsSearchRequest., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($culture) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling AssignmentsSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets filter_by_project_assignment_ids
     *
     * @return string[]|null
     */
    public function getFilterByProjectAssignmentIds()
    {
        return $this->container['filter_by_project_assignment_ids'];
    }

    /**
     * Sets filter_by_project_assignment_ids
     *
     * @param string[]|null $filter_by_project_assignment_ids Filter by selected Project Ids.
     *
     * @return self
     */
    public function setFilterByProjectAssignmentIds($filter_by_project_assignment_ids)
    {
        if (is_null($filter_by_project_assignment_ids)) {
            throw new \InvalidArgumentException('non-nullable filter_by_project_assignment_ids cannot be null');
        }
        $this->container['filter_by_project_assignment_ids'] = $filter_by_project_assignment_ids;

        return $this;
    }

    /**
     * Gets filter_by_object_type_assignment_ids
     *
     * @return string[]|null
     */
    public function getFilterByObjectTypeAssignmentIds()
    {
        return $this->container['filter_by_object_type_assignment_ids'];
    }

    /**
     * Sets filter_by_object_type_assignment_ids
     *
     * @param string[]|null $filter_by_object_type_assignment_ids Filter by selected Object Type Ids.
     *
     * @return self
     */
    public function setFilterByObjectTypeAssignmentIds($filter_by_object_type_assignment_ids)
    {
        if (is_null($filter_by_object_type_assignment_ids)) {
            throw new \InvalidArgumentException('non-nullable filter_by_object_type_assignment_ids cannot be null');
        }
        $this->container['filter_by_object_type_assignment_ids'] = $filter_by_object_type_assignment_ids;

        return $this;
    }

    /**
     * Gets filter_by_acquisition_assignment_ids
     *
     * @return string[]|null
     */
    public function getFilterByAcquisitionAssignmentIds()
    {
        return $this->container['filter_by_acquisition_assignment_ids'];
    }

    /**
     * Sets filter_by_acquisition_assignment_ids
     *
     * @param string[]|null $filter_by_acquisition_assignment_ids Filter by selected Acquisition Assignment Ids.
     *
     * @return self
     */
    public function setFilterByAcquisitionAssignmentIds($filter_by_acquisition_assignment_ids)
    {
        if (is_null($filter_by_acquisition_assignment_ids)) {
            throw new \InvalidArgumentException('non-nullable filter_by_acquisition_assignment_ids cannot be null');
        }
        $this->container['filter_by_acquisition_assignment_ids'] = $filter_by_acquisition_assignment_ids;

        return $this;
    }

    /**
     * Gets ignore_old_versions
     *
     * @return bool|null
     */
    public function getIgnoreOldVersions()
    {
        return $this->container['ignore_old_versions'];
    }

    /**
     * Sets ignore_old_versions
     *
     * @param bool|null $ignore_old_versions Assignments might be 'versions' of other Assignments (see /ObjectAssignment/MakeVersionOf). To force to receive only the most recent 'version' of an Assignment set IgnoreOldVersions to true.
     *
     * @return self
     */
    public function setIgnoreOldVersions($ignore_old_versions)
    {
        if (is_null($ignore_old_versions)) {
            throw new \InvalidArgumentException('non-nullable ignore_old_versions cannot be null');
        }
        $this->container['ignore_old_versions'] = $ignore_old_versions;

        return $this;
    }

    /**
     * Gets has_key
     *
     * @return bool|null
     */
    public function getHasKey()
    {
        return $this->container['has_key'];
    }

    /**
     * Sets has_key
     *
     * @param bool|null $has_key Only return assignment that have a key, or not.
     *
     * @return self
     */
    public function setHasKey($has_key)
    {
        if (is_null($has_key)) {
            throw new \InvalidArgumentException('non-nullable has_key cannot be null');
        }
        $this->container['has_key'] = $has_key;

        return $this;
    }

    /**
     * Gets filter_by_key_numbers
     *
     * @return int[]|null
     */
    public function getFilterByKeyNumbers()
    {
        return $this->container['filter_by_key_numbers'];
    }

    /**
     * Sets filter_by_key_numbers
     *
     * @param int[]|null $filter_by_key_numbers Filter by assignments key numbers.
     *
     * @return self
     */
    public function setFilterByKeyNumbers($filter_by_key_numbers)
    {
        if (is_null($filter_by_key_numbers)) {
            throw new \InvalidArgumentException('non-nullable filter_by_key_numbers cannot be null');
        }
        $this->container['filter_by_key_numbers'] = $filter_by_key_numbers;

        return $this;
    }

    /**
     * Gets filter_by_furnishings
     *
     * @return \Brixion\Kolibri\Model\Furnishing[]|null
     */
    public function getFilterByFurnishings()
    {
        return $this->container['filter_by_furnishings'];
    }

    /**
     * Sets filter_by_furnishings
     *
     * @param \Brixion\Kolibri\Model\Furnishing[]|null $filter_by_furnishings Filter by assignment furnishing.
     *
     * @return self
     */
    public function setFilterByFurnishings($filter_by_furnishings)
    {
        if (is_null($filter_by_furnishings)) {
            throw new \InvalidArgumentException('non-nullable filter_by_furnishings cannot be null');
        }
        $this->container['filter_by_furnishings'] = $filter_by_furnishings;

        return $this;
    }

    /**
     * Gets filter_by_min_price
     *
     * @return float|null
     */
    public function getFilterByMinPrice()
    {
        return $this->container['filter_by_min_price'];
    }

    /**
     * Sets filter_by_min_price
     *
     * @param float|null $filter_by_min_price The minimal asking price
     *
     * @return self
     */
    public function setFilterByMinPrice($filter_by_min_price)
    {
        if (is_null($filter_by_min_price)) {
            throw new \InvalidArgumentException('non-nullable filter_by_min_price cannot be null');
        }
        $this->container['filter_by_min_price'] = $filter_by_min_price;

        return $this;
    }

    /**
     * Gets filter_by_max_price
     *
     * @return float|null
     */
    public function getFilterByMaxPrice()
    {
        return $this->container['filter_by_max_price'];
    }

    /**
     * Sets filter_by_max_price
     *
     * @param float|null $filter_by_max_price The maximal asking price
     *
     * @return self
     */
    public function setFilterByMaxPrice($filter_by_max_price)
    {
        if (is_null($filter_by_max_price)) {
            throw new \InvalidArgumentException('non-nullable filter_by_max_price cannot be null');
        }
        $this->container['filter_by_max_price'] = $filter_by_max_price;

        return $this;
    }

    /**
     * Gets filter_by_number_of_bedrooms_min
     *
     * @return int|null
     */
    public function getFilterByNumberOfBedroomsMin()
    {
        return $this->container['filter_by_number_of_bedrooms_min'];
    }

    /**
     * Sets filter_by_number_of_bedrooms_min
     *
     * @param int|null $filter_by_number_of_bedrooms_min The minimal number of bedrooms
     *
     * @return self
     */
    public function setFilterByNumberOfBedroomsMin($filter_by_number_of_bedrooms_min)
    {
        if (is_null($filter_by_number_of_bedrooms_min)) {
            throw new \InvalidArgumentException('non-nullable filter_by_number_of_bedrooms_min cannot be null');
        }
        $this->container['filter_by_number_of_bedrooms_min'] = $filter_by_number_of_bedrooms_min;

        return $this;
    }

    /**
     * Gets filter_by_number_of_bedrooms_max
     *
     * @return int|null
     */
    public function getFilterByNumberOfBedroomsMax()
    {
        return $this->container['filter_by_number_of_bedrooms_max'];
    }

    /**
     * Sets filter_by_number_of_bedrooms_max
     *
     * @param int|null $filter_by_number_of_bedrooms_max The maximal number of bedrooms
     *
     * @return self
     */
    public function setFilterByNumberOfBedroomsMax($filter_by_number_of_bedrooms_max)
    {
        if (is_null($filter_by_number_of_bedrooms_max)) {
            throw new \InvalidArgumentException('non-nullable filter_by_number_of_bedrooms_max cannot be null');
        }
        $this->container['filter_by_number_of_bedrooms_max'] = $filter_by_number_of_bedrooms_max;

        return $this;
    }

    /**
     * Gets is_cancelled
     *
     * @return bool|null
     */
    public function getIsCancelled()
    {
        return $this->container['is_cancelled'];
    }

    /**
     * Sets is_cancelled
     *
     * @param bool|null $is_cancelled Return acquisition assignment that are cancelled or not. Only applies to acquisition assignments.
     *
     * @return self
     */
    public function setIsCancelled($is_cancelled)
    {
        if (is_null($is_cancelled)) {
            throw new \InvalidArgumentException('non-nullable is_cancelled cannot be null');
        }
        $this->container['is_cancelled'] = $is_cancelled;

        return $this;
    }

    /**
     * Gets acquisition_statuses
     *
     * @return \Brixion\Kolibri\Model\AcquisitionStatus[]|null
     */
    public function getAcquisitionStatuses()
    {
        return $this->container['acquisition_statuses'];
    }

    /**
     * Sets acquisition_statuses
     *
     * @param \Brixion\Kolibri\Model\AcquisitionStatus[]|null $acquisition_statuses Return acquisition assignments with the specified acquisition statuses. Only applies to acquisition object assignments
     *
     * @return self
     */
    public function setAcquisitionStatuses($acquisition_statuses)
    {
        if (is_null($acquisition_statuses)) {
            throw new \InvalidArgumentException('non-nullable acquisition_statuses cannot be null');
        }
        $this->container['acquisition_statuses'] = $acquisition_statuses;

        return $this;
    }

    /**
     * Gets available_from_min
     *
     * @return \DateTime|null
     */
    public function getAvailableFromMin()
    {
        return $this->container['available_from_min'];
    }

    /**
     * Sets available_from_min
     *
     * @param \DateTime|null $available_from_min Return rent assignments with an availability from date higher than the provided date time value.
     *
     * @return self
     */
    public function setAvailableFromMin($available_from_min)
    {
        if (is_null($available_from_min)) {
            throw new \InvalidArgumentException('non-nullable available_from_min cannot be null');
        }
        $this->container['available_from_min'] = $available_from_min;

        return $this;
    }

    /**
     * Gets available_from_max
     *
     * @return \DateTime|null
     */
    public function getAvailableFromMax()
    {
        return $this->container['available_from_max'];
    }

    /**
     * Sets available_from_max
     *
     * @param \DateTime|null $available_from_max Return rent assignments with an availability from date lower than the provided date time value.
     *
     * @return self
     */
    public function setAvailableFromMax($available_from_max)
    {
        if (is_null($available_from_max)) {
            throw new \InvalidArgumentException('non-nullable available_from_max cannot be null');
        }
        $this->container['available_from_max'] = $available_from_max;

        return $this;
    }

    /**
     * Gets available_until_min
     *
     * @return \DateTime|null
     */
    public function getAvailableUntilMin()
    {
        return $this->container['available_until_min'];
    }

    /**
     * Sets available_until_min
     *
     * @param \DateTime|null $available_until_min Return rent assignments with an availability until date higher than the provided date time value.
     *
     * @return self
     */
    public function setAvailableUntilMin($available_until_min)
    {
        if (is_null($available_until_min)) {
            throw new \InvalidArgumentException('non-nullable available_until_min cannot be null');
        }
        $this->container['available_until_min'] = $available_until_min;

        return $this;
    }

    /**
     * Gets available_until_max
     *
     * @return \DateTime|null
     */
    public function getAvailableUntilMax()
    {
        return $this->container['available_until_max'];
    }

    /**
     * Sets available_until_max
     *
     * @param \DateTime|null $available_until_max Return rent assignments with an availability until date lower than the provided date time value.
     *
     * @return self
     */
    public function setAvailableUntilMax($available_until_max)
    {
        if (is_null($available_until_max)) {
            throw new \InvalidArgumentException('non-nullable available_until_max cannot be null');
        }
        $this->container['available_until_max'] = $available_until_max;

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
            throw new \InvalidArgumentException('invalid value for $skip when calling AssignmentsSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($skip < 0)) {
            throw new \InvalidArgumentException('invalid value for $skip when calling AssignmentsSearchRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $take when calling AssignmentsSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($take < 0)) {
            throw new \InvalidArgumentException('invalid value for $take when calling AssignmentsSearchRequest., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $term when calling AssignmentsSearchRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($term) < 0)) {
            throw new \InvalidArgumentException('invalid length for $term when calling AssignmentsSearchRequest., must be bigger than or equal to 0.');
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
