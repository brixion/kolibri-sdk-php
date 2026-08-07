<?php

declare(strict_types=1);

/**
 * TimelineEventsStatistics - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * TimelineEventsStatistics.
 * @implements \ArrayAccess<string, mixed>
 */
class TimelineEventsStatistics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'TimelineEventsStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'future_count' => 'int',
        'no_date_count' => 'int',
        'past_count' => 'int',
        'today_count' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'future_count' => 'int32',
        'no_date_count' => 'int32',
        'past_count' => 'int32',
        'today_count' => 'int32',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'future_count' => false,
        'no_date_count' => false,
        'past_count' => false,
        'today_count' => false,
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
        'future_count' => 'futureCount',
        'no_date_count' => 'noDateCount',
        'past_count' => 'pastCount',
        'today_count' => 'todayCount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'future_count' => 'setFutureCount',
        'no_date_count' => 'setNoDateCount',
        'past_count' => 'setPastCount',
        'today_count' => 'setTodayCount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'future_count' => 'getFutureCount',
        'no_date_count' => 'getNoDateCount',
        'past_count' => 'getPastCount',
        'today_count' => 'getTodayCount',
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
        $this->setIfExists('future_count', $data ?? [], null);
        $this->setIfExists('no_date_count', $data ?? [], null);
        $this->setIfExists('past_count', $data ?? [], null);
        $this->setIfExists('today_count', $data ?? [], null);
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

        if ($this->container['future_count'] === null) {
            $invalidProperties[] = "'future_count' can't be null";
        }
        if ($this->container['no_date_count'] === null) {
            $invalidProperties[] = "'no_date_count' can't be null";
        }
        if ($this->container['past_count'] === null) {
            $invalidProperties[] = "'past_count' can't be null";
        }
        if ($this->container['today_count'] === null) {
            $invalidProperties[] = "'today_count' can't be null";
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
     * Gets future_count
     *
     * @return int
     */
    public function getFutureCount()
    {
        return $this->container['future_count'];
    }

    /**
     * Sets future_count
     *
     * @param int $future_count future_count
     *
     * @return self
     */
    public function setFutureCount($future_count)
    {
        if (is_null($future_count)) {
            throw new \InvalidArgumentException('non-nullable future_count cannot be null');
        }
        $this->container['future_count'] = $future_count;

        return $this;
    }

    /**
     * Gets no_date_count
     *
     * @return int
     */
    public function getNoDateCount()
    {
        return $this->container['no_date_count'];
    }

    /**
     * Sets no_date_count
     *
     * @param int $no_date_count no_date_count
     *
     * @return self
     */
    public function setNoDateCount($no_date_count)
    {
        if (is_null($no_date_count)) {
            throw new \InvalidArgumentException('non-nullable no_date_count cannot be null');
        }
        $this->container['no_date_count'] = $no_date_count;

        return $this;
    }

    /**
     * Gets past_count
     *
     * @return int
     */
    public function getPastCount()
    {
        return $this->container['past_count'];
    }

    /**
     * Sets past_count
     *
     * @param int $past_count past_count
     *
     * @return self
     */
    public function setPastCount($past_count)
    {
        if (is_null($past_count)) {
            throw new \InvalidArgumentException('non-nullable past_count cannot be null');
        }
        $this->container['past_count'] = $past_count;

        return $this;
    }

    /**
     * Gets today_count
     *
     * @return int
     */
    public function getTodayCount()
    {
        return $this->container['today_count'];
    }

    /**
     * Sets today_count
     *
     * @param int $today_count today_count
     *
     * @return self
     */
    public function setTodayCount($today_count)
    {
        if (is_null($today_count)) {
            throw new \InvalidArgumentException('non-nullable today_count cannot be null');
        }
        $this->container['today_count'] = $today_count;

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
