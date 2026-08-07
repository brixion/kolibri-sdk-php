<?php

declare(strict_types=1);

/**
 * ResidentialBuilding - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ResidentialBuilding.
 * @implements \ArrayAccess<string, mixed>
 */
class ResidentialBuilding implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ResidentialBuilding';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'effective_area' => '\Brixion\Kolibri\Model\Size',
        'revenue_per_year' => 'float',
        'count_of_vacant_housing_units' => 'int',
        'building_type' => '\Brixion\Kolibri\Model\ResidentialBuildingType',
        'has_residential_building' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'effective_area' => null,
        'revenue_per_year' => 'decimal',
        'count_of_vacant_housing_units' => 'int32',
        'building_type' => null,
        'has_residential_building' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'effective_area' => false,
        'revenue_per_year' => false,
        'count_of_vacant_housing_units' => false,
        'building_type' => false,
        'has_residential_building' => false,
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
        'effective_area' => 'effectiveArea',
        'revenue_per_year' => 'revenuePerYear',
        'count_of_vacant_housing_units' => 'countOfVacantHousingUnits',
        'building_type' => 'buildingType',
        'has_residential_building' => 'hasResidentialBuilding',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'effective_area' => 'setEffectiveArea',
        'revenue_per_year' => 'setRevenuePerYear',
        'count_of_vacant_housing_units' => 'setCountOfVacantHousingUnits',
        'building_type' => 'setBuildingType',
        'has_residential_building' => 'setHasResidentialBuilding',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'effective_area' => 'getEffectiveArea',
        'revenue_per_year' => 'getRevenuePerYear',
        'count_of_vacant_housing_units' => 'getCountOfVacantHousingUnits',
        'building_type' => 'getBuildingType',
        'has_residential_building' => 'getHasResidentialBuilding',
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
        $this->setIfExists('effective_area', $data ?? [], null);
        $this->setIfExists('revenue_per_year', $data ?? [], null);
        $this->setIfExists('count_of_vacant_housing_units', $data ?? [], null);
        $this->setIfExists('building_type', $data ?? [], null);
        $this->setIfExists('has_residential_building', $data ?? [], null);
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
     * Gets effective_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getEffectiveArea()
    {
        return $this->container['effective_area'];
    }

    /**
     * Sets effective_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $effective_area effective_area
     *
     * @return self
     */
    public function setEffectiveArea($effective_area)
    {
        if (is_null($effective_area)) {
            throw new \InvalidArgumentException('non-nullable effective_area cannot be null');
        }
        $this->container['effective_area'] = $effective_area;

        return $this;
    }

    /**
     * Gets revenue_per_year
     *
     * @return float|null
     */
    public function getRevenuePerYear()
    {
        return $this->container['revenue_per_year'];
    }

    /**
     * Sets revenue_per_year
     *
     * @param float|null $revenue_per_year revenue_per_year
     *
     * @return self
     */
    public function setRevenuePerYear($revenue_per_year)
    {
        if (is_null($revenue_per_year)) {
            throw new \InvalidArgumentException('non-nullable revenue_per_year cannot be null');
        }
        $this->container['revenue_per_year'] = $revenue_per_year;

        return $this;
    }

    /**
     * Gets count_of_vacant_housing_units
     *
     * @return int|null
     */
    public function getCountOfVacantHousingUnits()
    {
        return $this->container['count_of_vacant_housing_units'];
    }

    /**
     * Sets count_of_vacant_housing_units
     *
     * @param int|null $count_of_vacant_housing_units count_of_vacant_housing_units
     *
     * @return self
     */
    public function setCountOfVacantHousingUnits($count_of_vacant_housing_units)
    {
        if (is_null($count_of_vacant_housing_units)) {
            throw new \InvalidArgumentException('non-nullable count_of_vacant_housing_units cannot be null');
        }
        $this->container['count_of_vacant_housing_units'] = $count_of_vacant_housing_units;

        return $this;
    }

    /**
     * Gets building_type
     *
     * @return \Brixion\Kolibri\Model\ResidentialBuildingType|null
     */
    public function getBuildingType()
    {
        return $this->container['building_type'];
    }

    /**
     * Sets building_type
     *
     * @param \Brixion\Kolibri\Model\ResidentialBuildingType|null $building_type building_type
     *
     * @return self
     */
    public function setBuildingType($building_type)
    {
        if (is_null($building_type)) {
            throw new \InvalidArgumentException('non-nullable building_type cannot be null');
        }
        $this->container['building_type'] = $building_type;

        return $this;
    }

    /**
     * Gets has_residential_building
     *
     * @return bool|null
     */
    public function getHasResidentialBuilding()
    {
        return $this->container['has_residential_building'];
    }

    /**
     * Sets has_residential_building
     *
     * @param bool|null $has_residential_building has_residential_building
     *
     * @return self
     */
    public function setHasResidentialBuilding($has_residential_building)
    {
        if (is_null($has_residential_building)) {
            throw new \InvalidArgumentException('non-nullable has_residential_building cannot be null');
        }
        $this->container['has_residential_building'] = $has_residential_building;

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
