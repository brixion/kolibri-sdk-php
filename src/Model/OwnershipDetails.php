<?php

declare(strict_types=1);

/**
 * OwnershipDetails - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * OwnershipDetails.
 * @implements \ArrayAccess<string, mixed>
 */
class OwnershipDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'OwnershipDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'bought_out_until' => '\DateTime',
        'description' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'end_date' => '\DateTime',
        'fixed_variable' => '\Brixion\Kolibri\Model\FixedVariable',
        'ground_lease_period' => '\Brixion\Kolibri\Model\GroundLeasePeriod',
        'has_buyout_option' => 'bool',
        'has_leasehold' => 'bool',
        'leasehold_owner' => 'string',
        'leasehold_owner_type' => '\Brixion\Kolibri\Model\LeaseholdOwnerType',
        'leasehold_price' => 'float',
        'lease_term' => '\Brixion\Kolibri\Model\LeaseholdPeriod',
        'multiplicity_leasehold' => 'string',
        'ownership_type' => '\Brixion\Kolibri\Model\OwnershipType',
        'purchase_price' => 'float',
        'leasehold_is_bought' => 'bool',
        'leasehold_bought_off_forever' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'bought_out_until' => 'date-time',
        'description' => null,
        'end_date' => 'date-time',
        'fixed_variable' => null,
        'ground_lease_period' => null,
        'has_buyout_option' => null,
        'has_leasehold' => null,
        'leasehold_owner' => null,
        'leasehold_owner_type' => null,
        'leasehold_price' => 'decimal',
        'lease_term' => null,
        'multiplicity_leasehold' => null,
        'ownership_type' => null,
        'purchase_price' => 'decimal',
        'leasehold_is_bought' => null,
        'leasehold_bought_off_forever' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'bought_out_until' => false,
        'description' => false,
        'end_date' => false,
        'fixed_variable' => false,
        'ground_lease_period' => false,
        'has_buyout_option' => false,
        'has_leasehold' => false,
        'leasehold_owner' => false,
        'leasehold_owner_type' => false,
        'leasehold_price' => false,
        'lease_term' => false,
        'multiplicity_leasehold' => false,
        'ownership_type' => false,
        'purchase_price' => false,
        'leasehold_is_bought' => false,
        'leasehold_bought_off_forever' => false,
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
        'bought_out_until' => 'boughtOutUntil',
        'description' => 'description',
        'end_date' => 'endDate',
        'fixed_variable' => 'fixedVariable',
        'ground_lease_period' => 'groundLeasePeriod',
        'has_buyout_option' => 'hasBuyoutOption',
        'has_leasehold' => 'hasLeasehold',
        'leasehold_owner' => 'leaseholdOwner',
        'leasehold_owner_type' => 'leaseholdOwnerType',
        'leasehold_price' => 'leaseholdPrice',
        'lease_term' => 'leaseTerm',
        'multiplicity_leasehold' => 'multiplicityLeasehold',
        'ownership_type' => 'ownershipType',
        'purchase_price' => 'purchasePrice',
        'leasehold_is_bought' => 'leaseholdIsBought',
        'leasehold_bought_off_forever' => 'leaseholdBoughtOffForever',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bought_out_until' => 'setBoughtOutUntil',
        'description' => 'setDescription',
        'end_date' => 'setEndDate',
        'fixed_variable' => 'setFixedVariable',
        'ground_lease_period' => 'setGroundLeasePeriod',
        'has_buyout_option' => 'setHasBuyoutOption',
        'has_leasehold' => 'setHasLeasehold',
        'leasehold_owner' => 'setLeaseholdOwner',
        'leasehold_owner_type' => 'setLeaseholdOwnerType',
        'leasehold_price' => 'setLeaseholdPrice',
        'lease_term' => 'setLeaseTerm',
        'multiplicity_leasehold' => 'setMultiplicityLeasehold',
        'ownership_type' => 'setOwnershipType',
        'purchase_price' => 'setPurchasePrice',
        'leasehold_is_bought' => 'setLeaseholdIsBought',
        'leasehold_bought_off_forever' => 'setLeaseholdBoughtOffForever',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bought_out_until' => 'getBoughtOutUntil',
        'description' => 'getDescription',
        'end_date' => 'getEndDate',
        'fixed_variable' => 'getFixedVariable',
        'ground_lease_period' => 'getGroundLeasePeriod',
        'has_buyout_option' => 'getHasBuyoutOption',
        'has_leasehold' => 'getHasLeasehold',
        'leasehold_owner' => 'getLeaseholdOwner',
        'leasehold_owner_type' => 'getLeaseholdOwnerType',
        'leasehold_price' => 'getLeaseholdPrice',
        'lease_term' => 'getLeaseTerm',
        'multiplicity_leasehold' => 'getMultiplicityLeasehold',
        'ownership_type' => 'getOwnershipType',
        'purchase_price' => 'getPurchasePrice',
        'leasehold_is_bought' => 'getLeaseholdIsBought',
        'leasehold_bought_off_forever' => 'getLeaseholdBoughtOffForever',
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
        $this->setIfExists('bought_out_until', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('fixed_variable', $data ?? [], null);
        $this->setIfExists('ground_lease_period', $data ?? [], null);
        $this->setIfExists('has_buyout_option', $data ?? [], null);
        $this->setIfExists('has_leasehold', $data ?? [], null);
        $this->setIfExists('leasehold_owner', $data ?? [], null);
        $this->setIfExists('leasehold_owner_type', $data ?? [], null);
        $this->setIfExists('leasehold_price', $data ?? [], null);
        $this->setIfExists('lease_term', $data ?? [], null);
        $this->setIfExists('multiplicity_leasehold', $data ?? [], null);
        $this->setIfExists('ownership_type', $data ?? [], null);
        $this->setIfExists('purchase_price', $data ?? [], null);
        $this->setIfExists('leasehold_is_bought', $data ?? [], null);
        $this->setIfExists('leasehold_bought_off_forever', $data ?? [], null);
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
     * Gets bought_out_until
     *
     * @return \DateTime|null
     */
    public function getBoughtOutUntil()
    {
        return $this->container['bought_out_until'];
    }

    /**
     * Sets bought_out_until
     *
     * @param \DateTime|null $bought_out_until bought_out_until
     *
     * @return self
     */
    public function setBoughtOutUntil($bought_out_until)
    {
        if (is_null($bought_out_until)) {
            throw new \InvalidArgumentException('non-nullable bought_out_until cannot be null');
        }
        $this->container['bought_out_until'] = $bought_out_until;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $description description
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
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets fixed_variable
     *
     * @return \Brixion\Kolibri\Model\FixedVariable|null
     */
    public function getFixedVariable()
    {
        return $this->container['fixed_variable'];
    }

    /**
     * Sets fixed_variable
     *
     * @param \Brixion\Kolibri\Model\FixedVariable|null $fixed_variable fixed_variable
     *
     * @return self
     */
    public function setFixedVariable($fixed_variable)
    {
        if (is_null($fixed_variable)) {
            throw new \InvalidArgumentException('non-nullable fixed_variable cannot be null');
        }
        $this->container['fixed_variable'] = $fixed_variable;

        return $this;
    }

    /**
     * Gets ground_lease_period
     *
     * @return \Brixion\Kolibri\Model\GroundLeasePeriod|null
     */
    public function getGroundLeasePeriod()
    {
        return $this->container['ground_lease_period'];
    }

    /**
     * Sets ground_lease_period
     *
     * @param \Brixion\Kolibri\Model\GroundLeasePeriod|null $ground_lease_period ground_lease_period
     *
     * @return self
     */
    public function setGroundLeasePeriod($ground_lease_period)
    {
        if (is_null($ground_lease_period)) {
            throw new \InvalidArgumentException('non-nullable ground_lease_period cannot be null');
        }
        $this->container['ground_lease_period'] = $ground_lease_period;

        return $this;
    }

    /**
     * Gets has_buyout_option
     *
     * @return bool|null
     */
    public function getHasBuyoutOption()
    {
        return $this->container['has_buyout_option'];
    }

    /**
     * Sets has_buyout_option
     *
     * @param bool|null $has_buyout_option has_buyout_option
     *
     * @return self
     */
    public function setHasBuyoutOption($has_buyout_option)
    {
        if (is_null($has_buyout_option)) {
            throw new \InvalidArgumentException('non-nullable has_buyout_option cannot be null');
        }
        $this->container['has_buyout_option'] = $has_buyout_option;

        return $this;
    }

    /**
     * Gets has_leasehold
     *
     * @return bool|null
     */
    public function getHasLeasehold()
    {
        return $this->container['has_leasehold'];
    }

    /**
     * Sets has_leasehold
     *
     * @param bool|null $has_leasehold has_leasehold
     *
     * @return self
     */
    public function setHasLeasehold($has_leasehold)
    {
        if (is_null($has_leasehold)) {
            throw new \InvalidArgumentException('non-nullable has_leasehold cannot be null');
        }
        $this->container['has_leasehold'] = $has_leasehold;

        return $this;
    }

    /**
     * Gets leasehold_owner
     *
     * @return string|null
     */
    public function getLeaseholdOwner()
    {
        return $this->container['leasehold_owner'];
    }

    /**
     * Sets leasehold_owner
     *
     * @param string|null $leasehold_owner leasehold_owner
     *
     * @return self
     */
    public function setLeaseholdOwner($leasehold_owner)
    {
        if (is_null($leasehold_owner)) {
            throw new \InvalidArgumentException('non-nullable leasehold_owner cannot be null');
        }
        $this->container['leasehold_owner'] = $leasehold_owner;

        return $this;
    }

    /**
     * Gets leasehold_owner_type
     *
     * @return \Brixion\Kolibri\Model\LeaseholdOwnerType|null
     */
    public function getLeaseholdOwnerType()
    {
        return $this->container['leasehold_owner_type'];
    }

    /**
     * Sets leasehold_owner_type
     *
     * @param \Brixion\Kolibri\Model\LeaseholdOwnerType|null $leasehold_owner_type leasehold_owner_type
     *
     * @return self
     */
    public function setLeaseholdOwnerType($leasehold_owner_type)
    {
        if (is_null($leasehold_owner_type)) {
            throw new \InvalidArgumentException('non-nullable leasehold_owner_type cannot be null');
        }
        $this->container['leasehold_owner_type'] = $leasehold_owner_type;

        return $this;
    }

    /**
     * Gets leasehold_price
     *
     * @return float|null
     */
    public function getLeaseholdPrice()
    {
        return $this->container['leasehold_price'];
    }

    /**
     * Sets leasehold_price
     *
     * @param float|null $leasehold_price leasehold_price
     *
     * @return self
     */
    public function setLeaseholdPrice($leasehold_price)
    {
        if (is_null($leasehold_price)) {
            throw new \InvalidArgumentException('non-nullable leasehold_price cannot be null');
        }
        $this->container['leasehold_price'] = $leasehold_price;

        return $this;
    }

    /**
     * Gets lease_term
     *
     * @return \Brixion\Kolibri\Model\LeaseholdPeriod|null
     */
    public function getLeaseTerm()
    {
        return $this->container['lease_term'];
    }

    /**
     * Sets lease_term
     *
     * @param \Brixion\Kolibri\Model\LeaseholdPeriod|null $lease_term lease_term
     *
     * @return self
     */
    public function setLeaseTerm($lease_term)
    {
        if (is_null($lease_term)) {
            throw new \InvalidArgumentException('non-nullable lease_term cannot be null');
        }
        $this->container['lease_term'] = $lease_term;

        return $this;
    }

    /**
     * Gets multiplicity_leasehold
     *
     * @return string|null
     */
    public function getMultiplicityLeasehold()
    {
        return $this->container['multiplicity_leasehold'];
    }

    /**
     * Sets multiplicity_leasehold
     *
     * @param string|null $multiplicity_leasehold multiplicity_leasehold
     *
     * @return self
     */
    public function setMultiplicityLeasehold($multiplicity_leasehold)
    {
        if (is_null($multiplicity_leasehold)) {
            throw new \InvalidArgumentException('non-nullable multiplicity_leasehold cannot be null');
        }
        $this->container['multiplicity_leasehold'] = $multiplicity_leasehold;

        return $this;
    }

    /**
     * Gets ownership_type
     *
     * @return \Brixion\Kolibri\Model\OwnershipType|null
     */
    public function getOwnershipType()
    {
        return $this->container['ownership_type'];
    }

    /**
     * Sets ownership_type
     *
     * @param \Brixion\Kolibri\Model\OwnershipType|null $ownership_type ownership_type
     *
     * @return self
     */
    public function setOwnershipType($ownership_type)
    {
        if (is_null($ownership_type)) {
            throw new \InvalidArgumentException('non-nullable ownership_type cannot be null');
        }
        $this->container['ownership_type'] = $ownership_type;

        return $this;
    }

    /**
     * Gets purchase_price
     *
     * @return float|null
     */
    public function getPurchasePrice()
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param float|null $purchase_price purchase_price
     *
     * @return self
     */
    public function setPurchasePrice($purchase_price)
    {
        if (is_null($purchase_price)) {
            throw new \InvalidArgumentException('non-nullable purchase_price cannot be null');
        }
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets leasehold_is_bought
     *
     * @return bool|null
     */
    public function getLeaseholdIsBought()
    {
        return $this->container['leasehold_is_bought'];
    }

    /**
     * Sets leasehold_is_bought
     *
     * @param bool|null $leasehold_is_bought leasehold_is_bought
     *
     * @return self
     */
    public function setLeaseholdIsBought($leasehold_is_bought)
    {
        if (is_null($leasehold_is_bought)) {
            throw new \InvalidArgumentException('non-nullable leasehold_is_bought cannot be null');
        }
        $this->container['leasehold_is_bought'] = $leasehold_is_bought;

        return $this;
    }

    /**
     * Gets leasehold_bought_off_forever
     *
     * @return bool|null
     */
    public function getLeaseholdBoughtOffForever()
    {
        return $this->container['leasehold_bought_off_forever'];
    }

    /**
     * Sets leasehold_bought_off_forever
     *
     * @param bool|null $leasehold_bought_off_forever leasehold_bought_off_forever
     *
     * @return self
     */
    public function setLeaseholdBoughtOffForever($leasehold_bought_off_forever)
    {
        if (is_null($leasehold_bought_off_forever)) {
            throw new \InvalidArgumentException('non-nullable leasehold_bought_off_forever cannot be null');
        }
        $this->container['leasehold_bought_off_forever'] = $leasehold_bought_off_forever;

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
