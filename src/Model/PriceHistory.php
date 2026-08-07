<?php

declare(strict_types=1);

/**
 * PriceHistory - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * PriceHistory.
 * @implements \ArrayAccess<string, mixed>
 */
class PriceHistory implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'PriceHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'date_time_modified' => '\DateTime',
        'event' => '\Brixion\Kolibri\Model\PriceHistoryEvent',
        'new_price' => 'float',
        'new_price_max' => 'float',
        'old_price' => 'float',
        'old_price_max' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'date_time_modified' => 'date-time',
        'event' => null,
        'new_price' => 'decimal',
        'new_price_max' => 'decimal',
        'old_price' => 'decimal',
        'old_price_max' => 'decimal',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'date_time_modified' => false,
        'event' => false,
        'new_price' => false,
        'new_price_max' => false,
        'old_price' => false,
        'old_price_max' => false,
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
        'date_time_modified' => 'dateTimeModified',
        'event' => 'event',
        'new_price' => 'newPrice',
        'new_price_max' => 'newPriceMax',
        'old_price' => 'oldPrice',
        'old_price_max' => 'oldPriceMax',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_time_modified' => 'setDateTimeModified',
        'event' => 'setEvent',
        'new_price' => 'setNewPrice',
        'new_price_max' => 'setNewPriceMax',
        'old_price' => 'setOldPrice',
        'old_price_max' => 'setOldPriceMax',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_time_modified' => 'getDateTimeModified',
        'event' => 'getEvent',
        'new_price' => 'getNewPrice',
        'new_price_max' => 'getNewPriceMax',
        'old_price' => 'getOldPrice',
        'old_price_max' => 'getOldPriceMax',
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
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('new_price', $data ?? [], null);
        $this->setIfExists('new_price_max', $data ?? [], null);
        $this->setIfExists('old_price', $data ?? [], null);
        $this->setIfExists('old_price_max', $data ?? [], null);
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

        if ($this->container['date_time_modified'] === null) {
            $invalidProperties[] = "'date_time_modified' can't be null";
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
     * Gets date_time_modified
     *
     * @return \DateTime
     */
    public function getDateTimeModified()
    {
        return $this->container['date_time_modified'];
    }

    /**
     * Sets date_time_modified
     *
     * @param \DateTime $date_time_modified date_time_modified
     *
     * @return self
     */
    public function setDateTimeModified($date_time_modified)
    {
        if (is_null($date_time_modified)) {
            throw new \InvalidArgumentException('non-nullable date_time_modified cannot be null');
        }
        $this->container['date_time_modified'] = $date_time_modified;

        return $this;
    }

    /**
     * Gets event
     *
     * @return \Brixion\Kolibri\Model\PriceHistoryEvent|null
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param \Brixion\Kolibri\Model\PriceHistoryEvent|null $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        if (is_null($event)) {
            throw new \InvalidArgumentException('non-nullable event cannot be null');
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets new_price
     *
     * @return float|null
     */
    public function getNewPrice()
    {
        return $this->container['new_price'];
    }

    /**
     * Sets new_price
     *
     * @param float|null $new_price new_price
     *
     * @return self
     */
    public function setNewPrice($new_price)
    {
        if (is_null($new_price)) {
            throw new \InvalidArgumentException('non-nullable new_price cannot be null');
        }
        $this->container['new_price'] = $new_price;

        return $this;
    }

    /**
     * Gets new_price_max
     *
     * @return float|null
     */
    public function getNewPriceMax()
    {
        return $this->container['new_price_max'];
    }

    /**
     * Sets new_price_max
     *
     * @param float|null $new_price_max new_price_max
     *
     * @return self
     */
    public function setNewPriceMax($new_price_max)
    {
        if (is_null($new_price_max)) {
            throw new \InvalidArgumentException('non-nullable new_price_max cannot be null');
        }
        $this->container['new_price_max'] = $new_price_max;

        return $this;
    }

    /**
     * Gets old_price
     *
     * @return float|null
     */
    public function getOldPrice()
    {
        return $this->container['old_price'];
    }

    /**
     * Sets old_price
     *
     * @param float|null $old_price old_price
     *
     * @return self
     */
    public function setOldPrice($old_price)
    {
        if (is_null($old_price)) {
            throw new \InvalidArgumentException('non-nullable old_price cannot be null');
        }
        $this->container['old_price'] = $old_price;

        return $this;
    }

    /**
     * Gets old_price_max
     *
     * @return float|null
     */
    public function getOldPriceMax()
    {
        return $this->container['old_price_max'];
    }

    /**
     * Sets old_price_max
     *
     * @param float|null $old_price_max old_price_max
     *
     * @return self
     */
    public function setOldPriceMax($old_price_max)
    {
        if (is_null($old_price_max)) {
            throw new \InvalidArgumentException('non-nullable old_price_max cannot be null');
        }
        $this->container['old_price_max'] = $old_price_max;

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
