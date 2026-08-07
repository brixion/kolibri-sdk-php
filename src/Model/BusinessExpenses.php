<?php

declare(strict_types=1);

/**
 * BusinessExpenses - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * BusinessExpenses.
 * @implements \ArrayAccess<string, mixed>
 */
class BusinessExpenses implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'BusinessExpenses';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'land_consolidation_rent' => 'float',
        'o_zb_business_share' => 'float',
        'o_zb_occupiers_share' => 'float',
        'sewerage_charges' => 'float',
        'water_authority_charges' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'land_consolidation_rent' => 'decimal',
        'o_zb_business_share' => 'decimal',
        'o_zb_occupiers_share' => 'decimal',
        'sewerage_charges' => 'decimal',
        'water_authority_charges' => 'decimal',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'land_consolidation_rent' => false,
        'o_zb_business_share' => false,
        'o_zb_occupiers_share' => false,
        'sewerage_charges' => false,
        'water_authority_charges' => false,
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
        'land_consolidation_rent' => 'landConsolidationRent',
        'o_zb_business_share' => 'oZBBusinessShare',
        'o_zb_occupiers_share' => 'oZBOccupiersShare',
        'sewerage_charges' => 'sewerageCharges',
        'water_authority_charges' => 'waterAuthorityCharges',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'land_consolidation_rent' => 'setLandConsolidationRent',
        'o_zb_business_share' => 'setOZbBusinessShare',
        'o_zb_occupiers_share' => 'setOZbOccupiersShare',
        'sewerage_charges' => 'setSewerageCharges',
        'water_authority_charges' => 'setWaterAuthorityCharges',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'land_consolidation_rent' => 'getLandConsolidationRent',
        'o_zb_business_share' => 'getOZbBusinessShare',
        'o_zb_occupiers_share' => 'getOZbOccupiersShare',
        'sewerage_charges' => 'getSewerageCharges',
        'water_authority_charges' => 'getWaterAuthorityCharges',
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
        $this->setIfExists('land_consolidation_rent', $data ?? [], null);
        $this->setIfExists('o_zb_business_share', $data ?? [], null);
        $this->setIfExists('o_zb_occupiers_share', $data ?? [], null);
        $this->setIfExists('sewerage_charges', $data ?? [], null);
        $this->setIfExists('water_authority_charges', $data ?? [], null);
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
     * Gets land_consolidation_rent
     *
     * @return float|null
     */
    public function getLandConsolidationRent()
    {
        return $this->container['land_consolidation_rent'];
    }

    /**
     * Sets land_consolidation_rent
     *
     * @param float|null $land_consolidation_rent land_consolidation_rent
     *
     * @return self
     */
    public function setLandConsolidationRent($land_consolidation_rent)
    {
        if (is_null($land_consolidation_rent)) {
            throw new \InvalidArgumentException('non-nullable land_consolidation_rent cannot be null');
        }
        $this->container['land_consolidation_rent'] = $land_consolidation_rent;

        return $this;
    }

    /**
     * Gets o_zb_business_share
     *
     * @return float|null
     */
    public function getOZbBusinessShare()
    {
        return $this->container['o_zb_business_share'];
    }

    /**
     * Sets o_zb_business_share
     *
     * @param float|null $o_zb_business_share o_zb_business_share
     *
     * @return self
     */
    public function setOZbBusinessShare($o_zb_business_share)
    {
        if (is_null($o_zb_business_share)) {
            throw new \InvalidArgumentException('non-nullable o_zb_business_share cannot be null');
        }
        $this->container['o_zb_business_share'] = $o_zb_business_share;

        return $this;
    }

    /**
     * Gets o_zb_occupiers_share
     *
     * @return float|null
     */
    public function getOZbOccupiersShare()
    {
        return $this->container['o_zb_occupiers_share'];
    }

    /**
     * Sets o_zb_occupiers_share
     *
     * @param float|null $o_zb_occupiers_share o_zb_occupiers_share
     *
     * @return self
     */
    public function setOZbOccupiersShare($o_zb_occupiers_share)
    {
        if (is_null($o_zb_occupiers_share)) {
            throw new \InvalidArgumentException('non-nullable o_zb_occupiers_share cannot be null');
        }
        $this->container['o_zb_occupiers_share'] = $o_zb_occupiers_share;

        return $this;
    }

    /**
     * Gets sewerage_charges
     *
     * @return float|null
     */
    public function getSewerageCharges()
    {
        return $this->container['sewerage_charges'];
    }

    /**
     * Sets sewerage_charges
     *
     * @param float|null $sewerage_charges sewerage_charges
     *
     * @return self
     */
    public function setSewerageCharges($sewerage_charges)
    {
        if (is_null($sewerage_charges)) {
            throw new \InvalidArgumentException('non-nullable sewerage_charges cannot be null');
        }
        $this->container['sewerage_charges'] = $sewerage_charges;

        return $this;
    }

    /**
     * Gets water_authority_charges
     *
     * @return float|null
     */
    public function getWaterAuthorityCharges()
    {
        return $this->container['water_authority_charges'];
    }

    /**
     * Sets water_authority_charges
     *
     * @param float|null $water_authority_charges water_authority_charges
     *
     * @return self
     */
    public function setWaterAuthorityCharges($water_authority_charges)
    {
        if (is_null($water_authority_charges)) {
            throw new \InvalidArgumentException('non-nullable water_authority_charges cannot be null');
        }
        $this->container['water_authority_charges'] = $water_authority_charges;

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
