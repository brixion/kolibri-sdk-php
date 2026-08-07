<?php

declare(strict_types=1);

/**
 * AgendaItemsAddRecurrencyExceptionRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItemsAddRecurrencyExceptionRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class AgendaItemsAddRecurrencyExceptionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AgendaItemsAddRecurrencyExceptionRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'new_end_date_time' => '\DateTime',
        'new_start_date_time' => '\DateTime',
        'original_start_date_time' => '\DateTime',
        'all_day_event' => 'bool',
        'parent_id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'new_end_date_time' => 'date-time',
        'new_start_date_time' => 'date-time',
        'original_start_date_time' => 'date-time',
        'all_day_event' => null,
        'parent_id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'new_end_date_time' => false,
        'new_start_date_time' => false,
        'original_start_date_time' => false,
        'all_day_event' => false,
        'parent_id' => false,
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
        'new_end_date_time' => 'newEndDateTime',
        'new_start_date_time' => 'newStartDateTime',
        'original_start_date_time' => 'originalStartDateTime',
        'all_day_event' => 'allDayEvent',
        'parent_id' => 'parentId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'new_end_date_time' => 'setNewEndDateTime',
        'new_start_date_time' => 'setNewStartDateTime',
        'original_start_date_time' => 'setOriginalStartDateTime',
        'all_day_event' => 'setAllDayEvent',
        'parent_id' => 'setParentId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'new_end_date_time' => 'getNewEndDateTime',
        'new_start_date_time' => 'getNewStartDateTime',
        'original_start_date_time' => 'getOriginalStartDateTime',
        'all_day_event' => 'getAllDayEvent',
        'parent_id' => 'getParentId',
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
        $this->setIfExists('new_end_date_time', $data ?? [], null);
        $this->setIfExists('new_start_date_time', $data ?? [], null);
        $this->setIfExists('original_start_date_time', $data ?? [], null);
        $this->setIfExists('all_day_event', $data ?? [], null);
        $this->setIfExists('parent_id', $data ?? [], null);
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

        if ($this->container['original_start_date_time'] === null) {
            $invalidProperties[] = "'original_start_date_time' can't be null";
        }
        if ($this->container['all_day_event'] === null) {
            $invalidProperties[] = "'all_day_event' can't be null";
        }
        if ($this->container['parent_id'] === null) {
            $invalidProperties[] = "'parent_id' can't be null";
        }
        if ((mb_strlen($this->container['parent_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'parent_id', the character length must be bigger than or equal to 1.";
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
     * Gets new_end_date_time
     *
     * @return \DateTime|null
     */
    public function getNewEndDateTime()
    {
        return $this->container['new_end_date_time'];
    }

    /**
     * Sets new_end_date_time
     *
     * @param \DateTime|null $new_end_date_time new_end_date_time
     *
     * @return self
     */
    public function setNewEndDateTime($new_end_date_time)
    {
        if (is_null($new_end_date_time)) {
            throw new \InvalidArgumentException('non-nullable new_end_date_time cannot be null');
        }
        $this->container['new_end_date_time'] = $new_end_date_time;

        return $this;
    }

    /**
     * Gets new_start_date_time
     *
     * @return \DateTime|null
     */
    public function getNewStartDateTime()
    {
        return $this->container['new_start_date_time'];
    }

    /**
     * Sets new_start_date_time
     *
     * @param \DateTime|null $new_start_date_time new_start_date_time
     *
     * @return self
     */
    public function setNewStartDateTime($new_start_date_time)
    {
        if (is_null($new_start_date_time)) {
            throw new \InvalidArgumentException('non-nullable new_start_date_time cannot be null');
        }
        $this->container['new_start_date_time'] = $new_start_date_time;

        return $this;
    }

    /**
     * Gets original_start_date_time
     *
     * @return \DateTime
     */
    public function getOriginalStartDateTime()
    {
        return $this->container['original_start_date_time'];
    }

    /**
     * Sets original_start_date_time
     *
     * @param \DateTime $original_start_date_time original_start_date_time
     *
     * @return self
     */
    public function setOriginalStartDateTime($original_start_date_time)
    {
        if (is_null($original_start_date_time)) {
            throw new \InvalidArgumentException('non-nullable original_start_date_time cannot be null');
        }
        $this->container['original_start_date_time'] = $original_start_date_time;

        return $this;
    }

    /**
     * Gets all_day_event
     *
     * @return bool
     */
    public function getAllDayEvent()
    {
        return $this->container['all_day_event'];
    }

    /**
     * Sets all_day_event
     *
     * @param bool $all_day_event all_day_event
     *
     * @return self
     */
    public function setAllDayEvent($all_day_event)
    {
        if (is_null($all_day_event)) {
            throw new \InvalidArgumentException('non-nullable all_day_event cannot be null');
        }
        $this->container['all_day_event'] = $all_day_event;

        return $this;
    }

    /**
     * Gets parent_id
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     *
     * @param string $parent_id Parent Id of the recurring agendaitem (where IsRecurring = true) for which a new exception agendaitem must be created.
     *
     * @return self
     */
    public function setParentId($parent_id)
    {
        if (is_null($parent_id)) {
            throw new \InvalidArgumentException('non-nullable parent_id cannot be null');
        }

        if ((mb_strlen($parent_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $parent_id when calling AgendaItemsAddRecurrencyExceptionRequest., must be bigger than or equal to 1.');
        }

        $this->container['parent_id'] = $parent_id;

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
