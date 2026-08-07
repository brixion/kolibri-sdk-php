<?php

declare(strict_types=1);

/**
 * TasksStatistics - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * TasksStatistics.
 * @implements \ArrayAccess<string, mixed>
 */
class TasksStatistics implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'TasksStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'completed_count' => 'int',
        'expired_count' => 'int',
        'expires_after_next_week_count' => 'int',
        'expires_this_week_count' => 'int',
        'expires_next_week_count' => 'int',
        'expires_today_count' => 'int',
        'expires_tomorrow_count' => 'int',
        'no_end_date_count' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'completed_count' => 'int32',
        'expired_count' => 'int32',
        'expires_after_next_week_count' => 'int32',
        'expires_this_week_count' => 'int32',
        'expires_next_week_count' => 'int32',
        'expires_today_count' => 'int32',
        'expires_tomorrow_count' => 'int32',
        'no_end_date_count' => 'int32',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'completed_count' => false,
        'expired_count' => false,
        'expires_after_next_week_count' => false,
        'expires_this_week_count' => false,
        'expires_next_week_count' => false,
        'expires_today_count' => false,
        'expires_tomorrow_count' => false,
        'no_end_date_count' => false,
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
        'completed_count' => 'completedCount',
        'expired_count' => 'expiredCount',
        'expires_after_next_week_count' => 'expiresAfterNextWeekCount',
        'expires_this_week_count' => 'expiresThisWeekCount',
        'expires_next_week_count' => 'expiresNextWeekCount',
        'expires_today_count' => 'expiresTodayCount',
        'expires_tomorrow_count' => 'expiresTomorrowCount',
        'no_end_date_count' => 'noEndDateCount',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completed_count' => 'setCompletedCount',
        'expired_count' => 'setExpiredCount',
        'expires_after_next_week_count' => 'setExpiresAfterNextWeekCount',
        'expires_this_week_count' => 'setExpiresThisWeekCount',
        'expires_next_week_count' => 'setExpiresNextWeekCount',
        'expires_today_count' => 'setExpiresTodayCount',
        'expires_tomorrow_count' => 'setExpiresTomorrowCount',
        'no_end_date_count' => 'setNoEndDateCount',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completed_count' => 'getCompletedCount',
        'expired_count' => 'getExpiredCount',
        'expires_after_next_week_count' => 'getExpiresAfterNextWeekCount',
        'expires_this_week_count' => 'getExpiresThisWeekCount',
        'expires_next_week_count' => 'getExpiresNextWeekCount',
        'expires_today_count' => 'getExpiresTodayCount',
        'expires_tomorrow_count' => 'getExpiresTomorrowCount',
        'no_end_date_count' => 'getNoEndDateCount',
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
        $this->setIfExists('completed_count', $data ?? [], null);
        $this->setIfExists('expired_count', $data ?? [], null);
        $this->setIfExists('expires_after_next_week_count', $data ?? [], null);
        $this->setIfExists('expires_this_week_count', $data ?? [], null);
        $this->setIfExists('expires_next_week_count', $data ?? [], null);
        $this->setIfExists('expires_today_count', $data ?? [], null);
        $this->setIfExists('expires_tomorrow_count', $data ?? [], null);
        $this->setIfExists('no_end_date_count', $data ?? [], null);
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

        if ($this->container['completed_count'] === null) {
            $invalidProperties[] = "'completed_count' can't be null";
        }
        if ($this->container['expired_count'] === null) {
            $invalidProperties[] = "'expired_count' can't be null";
        }
        if ($this->container['expires_after_next_week_count'] === null) {
            $invalidProperties[] = "'expires_after_next_week_count' can't be null";
        }
        if ($this->container['expires_this_week_count'] === null) {
            $invalidProperties[] = "'expires_this_week_count' can't be null";
        }
        if ($this->container['expires_next_week_count'] === null) {
            $invalidProperties[] = "'expires_next_week_count' can't be null";
        }
        if ($this->container['expires_today_count'] === null) {
            $invalidProperties[] = "'expires_today_count' can't be null";
        }
        if ($this->container['expires_tomorrow_count'] === null) {
            $invalidProperties[] = "'expires_tomorrow_count' can't be null";
        }
        if ($this->container['no_end_date_count'] === null) {
            $invalidProperties[] = "'no_end_date_count' can't be null";
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
     * Gets completed_count
     *
     * @return int
     */
    public function getCompletedCount()
    {
        return $this->container['completed_count'];
    }

    /**
     * Sets completed_count
     *
     * @param int $completed_count completed_count
     *
     * @return self
     */
    public function setCompletedCount($completed_count)
    {
        if (is_null($completed_count)) {
            throw new \InvalidArgumentException('non-nullable completed_count cannot be null');
        }
        $this->container['completed_count'] = $completed_count;

        return $this;
    }

    /**
     * Gets expired_count
     *
     * @return int
     */
    public function getExpiredCount()
    {
        return $this->container['expired_count'];
    }

    /**
     * Sets expired_count
     *
     * @param int $expired_count expired_count
     *
     * @return self
     */
    public function setExpiredCount($expired_count)
    {
        if (is_null($expired_count)) {
            throw new \InvalidArgumentException('non-nullable expired_count cannot be null');
        }
        $this->container['expired_count'] = $expired_count;

        return $this;
    }

    /**
     * Gets expires_after_next_week_count
     *
     * @return int
     */
    public function getExpiresAfterNextWeekCount()
    {
        return $this->container['expires_after_next_week_count'];
    }

    /**
     * Sets expires_after_next_week_count
     *
     * @param int $expires_after_next_week_count The number op open (not completed and not cancelled) tasks with an expiration date set to a date after two weeks.
     *
     * @return self
     */
    public function setExpiresAfterNextWeekCount($expires_after_next_week_count)
    {
        if (is_null($expires_after_next_week_count)) {
            throw new \InvalidArgumentException('non-nullable expires_after_next_week_count cannot be null');
        }
        $this->container['expires_after_next_week_count'] = $expires_after_next_week_count;

        return $this;
    }

    /**
     * Gets expires_this_week_count
     *
     * @return int
     */
    public function getExpiresThisWeekCount()
    {
        return $this->container['expires_this_week_count'];
    }

    /**
     * Sets expires_this_week_count
     *
     * @param int $expires_this_week_count The number op open (not completed and not cancelled) tasks with an expiration date set to a date in the current week.
     *
     * @return self
     */
    public function setExpiresThisWeekCount($expires_this_week_count)
    {
        if (is_null($expires_this_week_count)) {
            throw new \InvalidArgumentException('non-nullable expires_this_week_count cannot be null');
        }
        $this->container['expires_this_week_count'] = $expires_this_week_count;

        return $this;
    }

    /**
     * Gets expires_next_week_count
     *
     * @return int
     */
    public function getExpiresNextWeekCount()
    {
        return $this->container['expires_next_week_count'];
    }

    /**
     * Sets expires_next_week_count
     *
     * @param int $expires_next_week_count The number op open (not completed and not cancelled) tasks with an expiration date set to a date in the next week.
     *
     * @return self
     */
    public function setExpiresNextWeekCount($expires_next_week_count)
    {
        if (is_null($expires_next_week_count)) {
            throw new \InvalidArgumentException('non-nullable expires_next_week_count cannot be null');
        }
        $this->container['expires_next_week_count'] = $expires_next_week_count;

        return $this;
    }

    /**
     * Gets expires_today_count
     *
     * @return int
     */
    public function getExpiresTodayCount()
    {
        return $this->container['expires_today_count'];
    }

    /**
     * Sets expires_today_count
     *
     * @param int $expires_today_count The number op open (not completed and not cancelled) tasks with an expiration date set to today.
     *
     * @return self
     */
    public function setExpiresTodayCount($expires_today_count)
    {
        if (is_null($expires_today_count)) {
            throw new \InvalidArgumentException('non-nullable expires_today_count cannot be null');
        }
        $this->container['expires_today_count'] = $expires_today_count;

        return $this;
    }

    /**
     * Gets expires_tomorrow_count
     *
     * @return int
     */
    public function getExpiresTomorrowCount()
    {
        return $this->container['expires_tomorrow_count'];
    }

    /**
     * Sets expires_tomorrow_count
     *
     * @param int $expires_tomorrow_count The number op open (not completed and not cancelled) tasks with an expiration date set to tomorrow, but only in case tomorrow is in the current week. So on Sundays ExpiresTomorrowCount will always be 0.
     *
     * @return self
     */
    public function setExpiresTomorrowCount($expires_tomorrow_count)
    {
        if (is_null($expires_tomorrow_count)) {
            throw new \InvalidArgumentException('non-nullable expires_tomorrow_count cannot be null');
        }
        $this->container['expires_tomorrow_count'] = $expires_tomorrow_count;

        return $this;
    }

    /**
     * Gets no_end_date_count
     *
     * @return int
     */
    public function getNoEndDateCount()
    {
        return $this->container['no_end_date_count'];
    }

    /**
     * Sets no_end_date_count
     *
     * @param int $no_end_date_count no_end_date_count
     *
     * @return self
     */
    public function setNoEndDateCount($no_end_date_count)
    {
        if (is_null($no_end_date_count)) {
            throw new \InvalidArgumentException('non-nullable no_end_date_count cannot be null');
        }
        $this->container['no_end_date_count'] = $no_end_date_count;

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
