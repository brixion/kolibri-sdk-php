<?php

declare(strict_types=1);

/**
 * ContactPersonTitleSuggestionOption - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ContactPersonTitleSuggestionOption.
 * @implements \ArrayAccess<string, mixed>
 */
class ContactPersonTitleSuggestionOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ContactPersonTitleSuggestionOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'display_name' => 'string',
        'used_for_females' => 'bool',
        'used_for_males' => 'bool',
        'used_for_unknown_gender' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'display_name' => null,
        'used_for_females' => null,
        'used_for_males' => null,
        'used_for_unknown_gender' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'display_name' => false,
        'used_for_females' => false,
        'used_for_males' => false,
        'used_for_unknown_gender' => false,
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
        'display_name' => 'displayName',
        'used_for_females' => 'usedForFemales',
        'used_for_males' => 'usedForMales',
        'used_for_unknown_gender' => 'usedForUnknownGender',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
        'used_for_females' => 'setUsedForFemales',
        'used_for_males' => 'setUsedForMales',
        'used_for_unknown_gender' => 'setUsedForUnknownGender',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
        'used_for_females' => 'getUsedForFemales',
        'used_for_males' => 'getUsedForMales',
        'used_for_unknown_gender' => 'getUsedForUnknownGender',
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
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('used_for_females', $data ?? [], null);
        $this->setIfExists('used_for_males', $data ?? [], null);
        $this->setIfExists('used_for_unknown_gender', $data ?? [], null);
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

        if ($this->container['used_for_females'] === null) {
            $invalidProperties[] = "'used_for_females' can't be null";
        }
        if ($this->container['used_for_males'] === null) {
            $invalidProperties[] = "'used_for_males' can't be null";
        }
        if ($this->container['used_for_unknown_gender'] === null) {
            $invalidProperties[] = "'used_for_unknown_gender' can't be null";
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
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name display_name
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets used_for_females
     *
     * @return bool
     */
    public function getUsedForFemales()
    {
        return $this->container['used_for_females'];
    }

    /**
     * Sets used_for_females
     *
     * @param bool $used_for_females used_for_females
     *
     * @return self
     */
    public function setUsedForFemales($used_for_females)
    {
        if (is_null($used_for_females)) {
            throw new \InvalidArgumentException('non-nullable used_for_females cannot be null');
        }
        $this->container['used_for_females'] = $used_for_females;

        return $this;
    }

    /**
     * Gets used_for_males
     *
     * @return bool
     */
    public function getUsedForMales()
    {
        return $this->container['used_for_males'];
    }

    /**
     * Sets used_for_males
     *
     * @param bool $used_for_males used_for_males
     *
     * @return self
     */
    public function setUsedForMales($used_for_males)
    {
        if (is_null($used_for_males)) {
            throw new \InvalidArgumentException('non-nullable used_for_males cannot be null');
        }
        $this->container['used_for_males'] = $used_for_males;

        return $this;
    }

    /**
     * Gets used_for_unknown_gender
     *
     * @return bool
     */
    public function getUsedForUnknownGender()
    {
        return $this->container['used_for_unknown_gender'];
    }

    /**
     * Sets used_for_unknown_gender
     *
     * @param bool $used_for_unknown_gender used_for_unknown_gender
     *
     * @return self
     */
    public function setUsedForUnknownGender($used_for_unknown_gender)
    {
        if (is_null($used_for_unknown_gender)) {
            throw new \InvalidArgumentException('non-nullable used_for_unknown_gender cannot be null');
        }
        $this->container['used_for_unknown_gender'] = $used_for_unknown_gender;

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
