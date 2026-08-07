<?php

declare(strict_types=1);

/**
 * MonthStats - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * MonthStats.
 * @implements \ArrayAccess<string, mixed>
 */
class MonthStats implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'MonthStats';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'year' => 'int',
        'month' => 'int',
        'sum_sale_asking_price' => 'float',
        'sum_rent_asking_price' => 'float',
        'sum_sale_realised_price' => 'float',
        'sum_rent_realised_price' => 'float',
        'avg_processing_time_in_days' => 'int',
        'nr_of_transactions' => 'int',
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
        'month' => 'int32',
        'sum_sale_asking_price' => 'decimal',
        'sum_rent_asking_price' => 'decimal',
        'sum_sale_realised_price' => 'decimal',
        'sum_rent_realised_price' => 'decimal',
        'avg_processing_time_in_days' => 'int32',
        'nr_of_transactions' => 'int32',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'year' => false,
        'month' => false,
        'sum_sale_asking_price' => false,
        'sum_rent_asking_price' => false,
        'sum_sale_realised_price' => false,
        'sum_rent_realised_price' => false,
        'avg_processing_time_in_days' => false,
        'nr_of_transactions' => false,
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
        'month' => 'month',
        'sum_sale_asking_price' => 'sumSaleAskingPrice',
        'sum_rent_asking_price' => 'sumRentAskingPrice',
        'sum_sale_realised_price' => 'sumSaleRealisedPrice',
        'sum_rent_realised_price' => 'sumRentRealisedPrice',
        'avg_processing_time_in_days' => 'avgProcessingTimeInDays',
        'nr_of_transactions' => 'nrOfTransactions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'year' => 'setYear',
        'month' => 'setMonth',
        'sum_sale_asking_price' => 'setSumSaleAskingPrice',
        'sum_rent_asking_price' => 'setSumRentAskingPrice',
        'sum_sale_realised_price' => 'setSumSaleRealisedPrice',
        'sum_rent_realised_price' => 'setSumRentRealisedPrice',
        'avg_processing_time_in_days' => 'setAvgProcessingTimeInDays',
        'nr_of_transactions' => 'setNrOfTransactions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'year' => 'getYear',
        'month' => 'getMonth',
        'sum_sale_asking_price' => 'getSumSaleAskingPrice',
        'sum_rent_asking_price' => 'getSumRentAskingPrice',
        'sum_sale_realised_price' => 'getSumSaleRealisedPrice',
        'sum_rent_realised_price' => 'getSumRentRealisedPrice',
        'avg_processing_time_in_days' => 'getAvgProcessingTimeInDays',
        'nr_of_transactions' => 'getNrOfTransactions',
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
        $this->setIfExists('month', $data ?? [], null);
        $this->setIfExists('sum_sale_asking_price', $data ?? [], null);
        $this->setIfExists('sum_rent_asking_price', $data ?? [], null);
        $this->setIfExists('sum_sale_realised_price', $data ?? [], null);
        $this->setIfExists('sum_rent_realised_price', $data ?? [], null);
        $this->setIfExists('avg_processing_time_in_days', $data ?? [], null);
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
        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if ($this->container['sum_sale_asking_price'] === null) {
            $invalidProperties[] = "'sum_sale_asking_price' can't be null";
        }
        if ($this->container['sum_rent_asking_price'] === null) {
            $invalidProperties[] = "'sum_rent_asking_price' can't be null";
        }
        if ($this->container['sum_sale_realised_price'] === null) {
            $invalidProperties[] = "'sum_sale_realised_price' can't be null";
        }
        if ($this->container['sum_rent_realised_price'] === null) {
            $invalidProperties[] = "'sum_rent_realised_price' can't be null";
        }
        if ($this->container['avg_processing_time_in_days'] === null) {
            $invalidProperties[] = "'avg_processing_time_in_days' can't be null";
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
     * Gets month
     *
     * @return int
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param int $month month
     *
     * @return self
     */
    public function setMonth($month)
    {
        if (is_null($month)) {
            throw new \InvalidArgumentException('non-nullable month cannot be null');
        }
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets sum_sale_asking_price
     *
     * @return float
     */
    public function getSumSaleAskingPrice()
    {
        return $this->container['sum_sale_asking_price'];
    }

    /**
     * Sets sum_sale_asking_price
     *
     * @param float $sum_sale_asking_price sum_sale_asking_price
     *
     * @return self
     */
    public function setSumSaleAskingPrice($sum_sale_asking_price)
    {
        if (is_null($sum_sale_asking_price)) {
            throw new \InvalidArgumentException('non-nullable sum_sale_asking_price cannot be null');
        }
        $this->container['sum_sale_asking_price'] = $sum_sale_asking_price;

        return $this;
    }

    /**
     * Gets sum_rent_asking_price
     *
     * @return float
     */
    public function getSumRentAskingPrice()
    {
        return $this->container['sum_rent_asking_price'];
    }

    /**
     * Sets sum_rent_asking_price
     *
     * @param float $sum_rent_asking_price sum_rent_asking_price
     *
     * @return self
     */
    public function setSumRentAskingPrice($sum_rent_asking_price)
    {
        if (is_null($sum_rent_asking_price)) {
            throw new \InvalidArgumentException('non-nullable sum_rent_asking_price cannot be null');
        }
        $this->container['sum_rent_asking_price'] = $sum_rent_asking_price;

        return $this;
    }

    /**
     * Gets sum_sale_realised_price
     *
     * @return float
     */
    public function getSumSaleRealisedPrice()
    {
        return $this->container['sum_sale_realised_price'];
    }

    /**
     * Sets sum_sale_realised_price
     *
     * @param float $sum_sale_realised_price sum_sale_realised_price
     *
     * @return self
     */
    public function setSumSaleRealisedPrice($sum_sale_realised_price)
    {
        if (is_null($sum_sale_realised_price)) {
            throw new \InvalidArgumentException('non-nullable sum_sale_realised_price cannot be null');
        }
        $this->container['sum_sale_realised_price'] = $sum_sale_realised_price;

        return $this;
    }

    /**
     * Gets sum_rent_realised_price
     *
     * @return float
     */
    public function getSumRentRealisedPrice()
    {
        return $this->container['sum_rent_realised_price'];
    }

    /**
     * Sets sum_rent_realised_price
     *
     * @param float $sum_rent_realised_price sum_rent_realised_price
     *
     * @return self
     */
    public function setSumRentRealisedPrice($sum_rent_realised_price)
    {
        if (is_null($sum_rent_realised_price)) {
            throw new \InvalidArgumentException('non-nullable sum_rent_realised_price cannot be null');
        }
        $this->container['sum_rent_realised_price'] = $sum_rent_realised_price;

        return $this;
    }

    /**
     * Gets avg_processing_time_in_days
     *
     * @return int
     */
    public function getAvgProcessingTimeInDays()
    {
        return $this->container['avg_processing_time_in_days'];
    }

    /**
     * Sets avg_processing_time_in_days
     *
     * @param int $avg_processing_time_in_days avg_processing_time_in_days
     *
     * @return self
     */
    public function setAvgProcessingTimeInDays($avg_processing_time_in_days)
    {
        if (is_null($avg_processing_time_in_days)) {
            throw new \InvalidArgumentException('non-nullable avg_processing_time_in_days cannot be null');
        }
        $this->container['avg_processing_time_in_days'] = $avg_processing_time_in_days;

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
