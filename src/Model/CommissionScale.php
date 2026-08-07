<?php

declare(strict_types=1);

/**
 * CommissionScale - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CommissionScale.
 * @implements \ArrayAccess<string, mixed>
 */
class CommissionScale implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CommissionScale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'transaction_price_min' => 'float',
        'transaction_price_max' => 'float',
        'commission_percentage' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'transaction_price_min' => 'decimal',
        'transaction_price_max' => 'decimal',
        'commission_percentage' => 'decimal',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'transaction_price_min' => false,
        'transaction_price_max' => false,
        'commission_percentage' => false,
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
        'transaction_price_min' => 'transactionPriceMin',
        'transaction_price_max' => 'transactionPriceMax',
        'commission_percentage' => 'commissionPercentage',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_price_min' => 'setTransactionPriceMin',
        'transaction_price_max' => 'setTransactionPriceMax',
        'commission_percentage' => 'setCommissionPercentage',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_price_min' => 'getTransactionPriceMin',
        'transaction_price_max' => 'getTransactionPriceMax',
        'commission_percentage' => 'getCommissionPercentage',
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
        $this->setIfExists('transaction_price_min', $data ?? [], null);
        $this->setIfExists('transaction_price_max', $data ?? [], null);
        $this->setIfExists('commission_percentage', $data ?? [], null);
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

        if ($this->container['transaction_price_min'] === null) {
            $invalidProperties[] = "'transaction_price_min' can't be null";
        }
        if (($this->container['transaction_price_min'] < 0)) {
            $invalidProperties[] = "invalid value for 'transaction_price_min', must be bigger than or equal to 0.";
        }

        if ($this->container['transaction_price_max'] === null) {
            $invalidProperties[] = "'transaction_price_max' can't be null";
        }
        if (($this->container['transaction_price_max'] < 0)) {
            $invalidProperties[] = "invalid value for 'transaction_price_max', must be bigger than or equal to 0.";
        }

        if ($this->container['commission_percentage'] === null) {
            $invalidProperties[] = "'commission_percentage' can't be null";
        }
        if (($this->container['commission_percentage'] < 0)) {
            $invalidProperties[] = "invalid value for 'commission_percentage', must be bigger than or equal to 0.";
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
     * Gets transaction_price_min
     *
     * @return float
     */
    public function getTransactionPriceMin()
    {
        return $this->container['transaction_price_min'];
    }

    /**
     * Sets transaction_price_min
     *
     * @param float $transaction_price_min transaction_price_min
     *
     * @return self
     */
    public function setTransactionPriceMin($transaction_price_min)
    {
        if (is_null($transaction_price_min)) {
            throw new \InvalidArgumentException('non-nullable transaction_price_min cannot be null');
        }

        if (($transaction_price_min < 0)) {
            throw new \InvalidArgumentException('invalid value for $transaction_price_min when calling CommissionScale., must be bigger than or equal to 0.');
        }

        $this->container['transaction_price_min'] = $transaction_price_min;

        return $this;
    }

    /**
     * Gets transaction_price_max
     *
     * @return float
     */
    public function getTransactionPriceMax()
    {
        return $this->container['transaction_price_max'];
    }

    /**
     * Sets transaction_price_max
     *
     * @param float $transaction_price_max transaction_price_max
     *
     * @return self
     */
    public function setTransactionPriceMax($transaction_price_max)
    {
        if (is_null($transaction_price_max)) {
            throw new \InvalidArgumentException('non-nullable transaction_price_max cannot be null');
        }

        if (($transaction_price_max < 0)) {
            throw new \InvalidArgumentException('invalid value for $transaction_price_max when calling CommissionScale., must be bigger than or equal to 0.');
        }

        $this->container['transaction_price_max'] = $transaction_price_max;

        return $this;
    }

    /**
     * Gets commission_percentage
     *
     * @return float
     */
    public function getCommissionPercentage()
    {
        return $this->container['commission_percentage'];
    }

    /**
     * Sets commission_percentage
     *
     * @param float $commission_percentage commission_percentage
     *
     * @return self
     */
    public function setCommissionPercentage($commission_percentage)
    {
        if (is_null($commission_percentage)) {
            throw new \InvalidArgumentException('non-nullable commission_percentage cannot be null');
        }

        if (($commission_percentage < 0)) {
            throw new \InvalidArgumentException('invalid value for $commission_percentage when calling CommissionScale., must be bigger than or equal to 0.');
        }

        $this->container['commission_percentage'] = $commission_percentage;

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
