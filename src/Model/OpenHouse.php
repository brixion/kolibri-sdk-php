<?php

declare(strict_types=1);

/**
 * OpenHouse - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * OpenHouse.
 * @implements \ArrayAccess<string, mixed>
 */
class OpenHouse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'OpenHouse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'open_house_date' => '\DateTime',
        'open_house_end_time' => '\DateTime',
        'open_house_start_time' => '\DateTime',
        'open_house_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'option' => '\Brixion\Kolibri\Model\OpenHouseRecurrence',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'open_house_date' => 'date-time',
        'open_house_end_time' => 'date-time',
        'open_house_start_time' => 'date-time',
        'open_house_text' => null,
        'option' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'open_house_date' => false,
        'open_house_end_time' => false,
        'open_house_start_time' => false,
        'open_house_text' => false,
        'option' => false,
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
        'open_house_date' => 'openHouseDate',
        'open_house_end_time' => 'openHouseEndTime',
        'open_house_start_time' => 'openHouseStartTime',
        'open_house_text' => 'openHouseText',
        'option' => 'option',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'open_house_date' => 'setOpenHouseDate',
        'open_house_end_time' => 'setOpenHouseEndTime',
        'open_house_start_time' => 'setOpenHouseStartTime',
        'open_house_text' => 'setOpenHouseText',
        'option' => 'setOption',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'open_house_date' => 'getOpenHouseDate',
        'open_house_end_time' => 'getOpenHouseEndTime',
        'open_house_start_time' => 'getOpenHouseStartTime',
        'open_house_text' => 'getOpenHouseText',
        'option' => 'getOption',
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
        $this->setIfExists('open_house_date', $data ?? [], null);
        $this->setIfExists('open_house_end_time', $data ?? [], null);
        $this->setIfExists('open_house_start_time', $data ?? [], null);
        $this->setIfExists('open_house_text', $data ?? [], null);
        $this->setIfExists('option', $data ?? [], null);
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
     * Gets open_house_date
     *
     * @return \DateTime|null
     */
    public function getOpenHouseDate()
    {
        return $this->container['open_house_date'];
    }

    /**
     * Sets open_house_date
     *
     * @param \DateTime|null $open_house_date open_house_date
     *
     * @return self
     */
    public function setOpenHouseDate($open_house_date)
    {
        if (is_null($open_house_date)) {
            throw new \InvalidArgumentException('non-nullable open_house_date cannot be null');
        }
        $this->container['open_house_date'] = $open_house_date;

        return $this;
    }

    /**
     * Gets open_house_end_time
     *
     * @return \DateTime|null
     */
    public function getOpenHouseEndTime()
    {
        return $this->container['open_house_end_time'];
    }

    /**
     * Sets open_house_end_time
     *
     * @param \DateTime|null $open_house_end_time open_house_end_time
     *
     * @return self
     */
    public function setOpenHouseEndTime($open_house_end_time)
    {
        if (is_null($open_house_end_time)) {
            throw new \InvalidArgumentException('non-nullable open_house_end_time cannot be null');
        }
        $this->container['open_house_end_time'] = $open_house_end_time;

        return $this;
    }

    /**
     * Gets open_house_start_time
     *
     * @return \DateTime|null
     */
    public function getOpenHouseStartTime()
    {
        return $this->container['open_house_start_time'];
    }

    /**
     * Sets open_house_start_time
     *
     * @param \DateTime|null $open_house_start_time open_house_start_time
     *
     * @return self
     */
    public function setOpenHouseStartTime($open_house_start_time)
    {
        if (is_null($open_house_start_time)) {
            throw new \InvalidArgumentException('non-nullable open_house_start_time cannot be null');
        }
        $this->container['open_house_start_time'] = $open_house_start_time;

        return $this;
    }

    /**
     * Gets open_house_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getOpenHouseText()
    {
        return $this->container['open_house_text'];
    }

    /**
     * Sets open_house_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $open_house_text open_house_text
     *
     * @return self
     */
    public function setOpenHouseText($open_house_text)
    {
        if (is_null($open_house_text)) {
            throw new \InvalidArgumentException('non-nullable open_house_text cannot be null');
        }
        $this->container['open_house_text'] = $open_house_text;

        return $this;
    }

    /**
     * Gets option
     *
     * @return \Brixion\Kolibri\Model\OpenHouseRecurrence|null
     */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
     * Sets option
     *
     * @param \Brixion\Kolibri\Model\OpenHouseRecurrence|null $option option
     *
     * @return self
     */
    public function setOption($option)
    {
        if (is_null($option)) {
            throw new \InvalidArgumentException('non-nullable option cannot be null');
        }
        $this->container['option'] = $option;

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
