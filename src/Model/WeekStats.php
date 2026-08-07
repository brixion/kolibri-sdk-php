<?php

declare(strict_types=1);

/**
 * WeekStats - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;

use \ArrayAccess;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * WeekStats.
 * @implements \ArrayAccess<string, mixed>
 */
class WeekStats implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'WeekStats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'year' => 'int',
        'week_nr' => 'int',
        'sale_commission_total' => 'float',
        'rent_commission_total' => 'float',
        'nr_of_transactions' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'year' => 'int32',
        'week_nr' => 'int32',
        'sale_commission_total' => 'decimal',
        'rent_commission_total' => 'decimal',
        'nr_of_transactions' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'year' => false,
        'week_nr' => false,
        'sale_commission_total' => false,
        'rent_commission_total' => false,
        'nr_of_transactions' => false
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
        'year' => 'year',
        'week_nr' => 'weekNr',
        'sale_commission_total' => 'saleCommissionTotal',
        'rent_commission_total' => 'rentCommissionTotal',
        'nr_of_transactions' => 'nrOfTransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'year' => 'setYear',
        'week_nr' => 'setWeekNr',
        'sale_commission_total' => 'setSaleCommissionTotal',
        'rent_commission_total' => 'setRentCommissionTotal',
        'nr_of_transactions' => 'setNrOfTransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'year' => 'getYear',
        'week_nr' => 'getWeekNr',
        'sale_commission_total' => 'getSaleCommissionTotal',
        'rent_commission_total' => 'getRentCommissionTotal',
        'nr_of_transactions' => 'getNrOfTransactions'
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
        $this->setIfExists('year', $data ?? [], null);
        $this->setIfExists('week_nr', $data ?? [], null);
        $this->setIfExists('sale_commission_total', $data ?? [], null);
        $this->setIfExists('rent_commission_total', $data ?? [], null);
        $this->setIfExists('nr_of_transactions', $data ?? [], null);
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

        if ($this->container['year'] === null) {
            $invalidProperties[] = "'year' can't be null";
        }
        if ($this->container['week_nr'] === null) {
            $invalidProperties[] = "'week_nr' can't be null";
        }
        if ($this->container['sale_commission_total'] === null) {
            $invalidProperties[] = "'sale_commission_total' can't be null";
        }
        if ($this->container['rent_commission_total'] === null) {
            $invalidProperties[] = "'rent_commission_total' can't be null";
        }
        if ($this->container['nr_of_transactions'] === null) {
            $invalidProperties[] = "'nr_of_transactions' can't be null";
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
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year year
     *
     * @return self
     */
    public function setYear($year)
    {
        if (is_null($year)) {
            throw new \InvalidArgumentException('non-nullable year cannot be null');
        }
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets week_nr
     *
     * @return int
     */
    public function getWeekNr()
    {
        return $this->container['week_nr'];
    }

    /**
     * Sets week_nr
     *
     * @param int $week_nr week_nr
     *
     * @return self
     */
    public function setWeekNr($week_nr)
    {
        if (is_null($week_nr)) {
            throw new \InvalidArgumentException('non-nullable week_nr cannot be null');
        }
        $this->container['week_nr'] = $week_nr;

        return $this;
    }

    /**
     * Gets sale_commission_total
     *
     * @return float
     */
    public function getSaleCommissionTotal()
    {
        return $this->container['sale_commission_total'];
    }

    /**
     * Sets sale_commission_total
     *
     * @param float $sale_commission_total sale_commission_total
     *
     * @return self
     */
    public function setSaleCommissionTotal($sale_commission_total)
    {
        if (is_null($sale_commission_total)) {
            throw new \InvalidArgumentException('non-nullable sale_commission_total cannot be null');
        }
        $this->container['sale_commission_total'] = $sale_commission_total;

        return $this;
    }

    /**
     * Gets rent_commission_total
     *
     * @return float
     */
    public function getRentCommissionTotal()
    {
        return $this->container['rent_commission_total'];
    }

    /**
     * Sets rent_commission_total
     *
     * @param float $rent_commission_total rent_commission_total
     *
     * @return self
     */
    public function setRentCommissionTotal($rent_commission_total)
    {
        if (is_null($rent_commission_total)) {
            throw new \InvalidArgumentException('non-nullable rent_commission_total cannot be null');
        }
        $this->container['rent_commission_total'] = $rent_commission_total;

        return $this;
    }

    /**
     * Gets nr_of_transactions
     *
     * @return int
     */
    public function getNrOfTransactions()
    {
        return $this->container['nr_of_transactions'];
    }

    /**
     * Sets nr_of_transactions
     *
     * @param int $nr_of_transactions nr_of_transactions
     *
     * @return self
     */
    public function setNrOfTransactions($nr_of_transactions)
    {
        if (is_null($nr_of_transactions)) {
            throw new \InvalidArgumentException('non-nullable nr_of_transactions cannot be null');
        }
        $this->container['nr_of_transactions'] = $nr_of_transactions;

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
            JSON_PRETTY_PRINT
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


