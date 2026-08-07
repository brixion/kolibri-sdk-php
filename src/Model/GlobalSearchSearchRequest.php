<?php

declare(strict_types=1);

/**
 * GlobalSearchSearchRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * GlobalSearchSearchRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class GlobalSearchSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'GlobalSearchSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'filter_by_active' => '\Brixion\Kolibri\Model\ActiveFilter',
        'filter_by_relation_types' => '\Brixion\Kolibri\Model\RelationType[]',
        'filter_by_assignment_types' => '\Brixion\Kolibri\Model\AssignmentType[]',
        'filter_by_real_estate_groups' => '\Brixion\Kolibri\Model\RealEstateGroup[]',
        'filter_by_types' => '\Brixion\Kolibri\Model\GlobalSearchType[]',
        'take_per_type' => 'int',
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
        'filter_by_active' => null,
        'filter_by_relation_types' => null,
        'filter_by_assignment_types' => null,
        'filter_by_real_estate_groups' => null,
        'filter_by_types' => null,
        'take_per_type' => 'int32',
        'term' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'filter_by_active' => false,
        'filter_by_relation_types' => false,
        'filter_by_assignment_types' => false,
        'filter_by_real_estate_groups' => false,
        'filter_by_types' => false,
        'take_per_type' => false,
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
        'filter_by_active' => 'filterByActive',
        'filter_by_relation_types' => 'filterByRelationTypes',
        'filter_by_assignment_types' => 'filterByAssignmentTypes',
        'filter_by_real_estate_groups' => 'filterByRealEstateGroups',
        'filter_by_types' => 'filterByTypes',
        'take_per_type' => 'takePerType',
        'term' => 'term',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter_by_active' => 'setFilterByActive',
        'filter_by_relation_types' => 'setFilterByRelationTypes',
        'filter_by_assignment_types' => 'setFilterByAssignmentTypes',
        'filter_by_real_estate_groups' => 'setFilterByRealEstateGroups',
        'filter_by_types' => 'setFilterByTypes',
        'take_per_type' => 'setTakePerType',
        'term' => 'setTerm',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter_by_active' => 'getFilterByActive',
        'filter_by_relation_types' => 'getFilterByRelationTypes',
        'filter_by_assignment_types' => 'getFilterByAssignmentTypes',
        'filter_by_real_estate_groups' => 'getFilterByRealEstateGroups',
        'filter_by_types' => 'getFilterByTypes',
        'take_per_type' => 'getTakePerType',
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
        $this->setIfExists('filter_by_active', $data ?? [], null);
        $this->setIfExists('filter_by_relation_types', $data ?? [], null);
        $this->setIfExists('filter_by_assignment_types', $data ?? [], null);
        $this->setIfExists('filter_by_real_estate_groups', $data ?? [], null);
        $this->setIfExists('filter_by_types', $data ?? [], null);
        $this->setIfExists('take_per_type', $data ?? [], null);
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

        if ($this->container['filter_by_active'] === null) {
            $invalidProperties[] = "'filter_by_active' can't be null";
        }
        if ($this->container['take_per_type'] === null) {
            $invalidProperties[] = "'take_per_type' can't be null";
        }
        if (($this->container['take_per_type'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'take_per_type', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['take_per_type'] < 0)) {
            $invalidProperties[] = "invalid value for 'take_per_type', must be bigger than or equal to 0.";
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
     * Gets filter_by_types
     *
     * @return \Brixion\Kolibri\Model\GlobalSearchType[]|null
     */
    public function getFilterByTypes()
    {
        return $this->container['filter_by_types'];
    }

    /**
     * Sets filter_by_types
     *
     * @param \Brixion\Kolibri\Model\GlobalSearchType[]|null $filter_by_types Filter by types.
     *
     * @return self
     */
    public function setFilterByTypes($filter_by_types)
    {
        if (is_null($filter_by_types)) {
            throw new \InvalidArgumentException('non-nullable filter_by_types cannot be null');
        }
        $this->container['filter_by_types'] = $filter_by_types;

        return $this;
    }

    /**
     * Gets take_per_type
     *
     * @return int
     */
    public function getTakePerType()
    {
        return $this->container['take_per_type'];
    }

    /**
     * Sets take_per_type
     *
     * @param int $take_per_type Number of results to return per type.
     *
     * @return self
     */
    public function setTakePerType($take_per_type)
    {
        if (is_null($take_per_type)) {
            throw new \InvalidArgumentException('non-nullable take_per_type cannot be null');
        }

        if (($take_per_type > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $take_per_type when calling GlobalSearchSearchRequest., must be smaller than or equal to 2147483647.');
        }
        if (($take_per_type < 0)) {
            throw new \InvalidArgumentException('invalid value for $take_per_type when calling GlobalSearchSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['take_per_type'] = $take_per_type;

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
     * @param string|null $term Search by given text term.
     *
     * @return self
     */
    public function setTerm($term)
    {
        if (is_null($term)) {
            throw new \InvalidArgumentException('non-nullable term cannot be null');
        }
        if ((mb_strlen($term) > 50)) {
            throw new \InvalidArgumentException('invalid length for $term when calling GlobalSearchSearchRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($term) < 0)) {
            throw new \InvalidArgumentException('invalid length for $term when calling GlobalSearchSearchRequest., must be bigger than or equal to 0.');
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
