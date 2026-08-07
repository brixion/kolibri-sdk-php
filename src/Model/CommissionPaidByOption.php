<?php

declare(strict_types=1);

/**
 * CommissionPaidByOption - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CommissionPaidByOption.
 * @implements \ArrayAccess<string, mixed>
 */
class CommissionPaidByOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CommissionPaidByOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'display_name_for_rent' => 'string',
        'display_name_for_sale' => 'string',
        'display_name_for_pacht' => 'string',
        'display_name' => 'string',
        'id' => 'int',
        'value' => '\Brixion\Kolibri\Model\CommissionPaidBy',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'display_name_for_rent' => null,
        'display_name_for_sale' => null,
        'display_name_for_pacht' => null,
        'display_name' => null,
        'id' => 'int32',
        'value' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'display_name_for_rent' => false,
        'display_name_for_sale' => false,
        'display_name_for_pacht' => false,
        'display_name' => false,
        'id' => false,
        'value' => false,
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
        'display_name_for_rent' => 'displayNameForRent',
        'display_name_for_sale' => 'displayNameForSale',
        'display_name_for_pacht' => 'displayNameForPacht',
        'display_name' => 'displayName',
        'id' => 'id',
        'value' => 'value',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name_for_rent' => 'setDisplayNameForRent',
        'display_name_for_sale' => 'setDisplayNameForSale',
        'display_name_for_pacht' => 'setDisplayNameForPacht',
        'display_name' => 'setDisplayName',
        'id' => 'setId',
        'value' => 'setValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name_for_rent' => 'getDisplayNameForRent',
        'display_name_for_sale' => 'getDisplayNameForSale',
        'display_name_for_pacht' => 'getDisplayNameForPacht',
        'display_name' => 'getDisplayName',
        'id' => 'getId',
        'value' => 'getValue',
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
        $this->setIfExists('display_name_for_rent', $data ?? [], null);
        $this->setIfExists('display_name_for_sale', $data ?? [], null);
        $this->setIfExists('display_name_for_pacht', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
     * Gets display_name_for_rent
     *
     * @return string|null
     */
    public function getDisplayNameForRent()
    {
        return $this->container['display_name_for_rent'];
    }

    /**
     * Sets display_name_for_rent
     *
     * @param string|null $display_name_for_rent display_name_for_rent
     *
     * @return self
     */
    public function setDisplayNameForRent($display_name_for_rent)
    {
        if (is_null($display_name_for_rent)) {
            throw new \InvalidArgumentException('non-nullable display_name_for_rent cannot be null');
        }
        $this->container['display_name_for_rent'] = $display_name_for_rent;

        return $this;
    }

    /**
     * Gets display_name_for_sale
     *
     * @return string|null
     */
    public function getDisplayNameForSale()
    {
        return $this->container['display_name_for_sale'];
    }

    /**
     * Sets display_name_for_sale
     *
     * @param string|null $display_name_for_sale display_name_for_sale
     *
     * @return self
     */
    public function setDisplayNameForSale($display_name_for_sale)
    {
        if (is_null($display_name_for_sale)) {
            throw new \InvalidArgumentException('non-nullable display_name_for_sale cannot be null');
        }
        $this->container['display_name_for_sale'] = $display_name_for_sale;

        return $this;
    }

    /**
     * Gets display_name_for_pacht
     *
     * @return string|null
     */
    public function getDisplayNameForPacht()
    {
        return $this->container['display_name_for_pacht'];
    }

    /**
     * Sets display_name_for_pacht
     *
     * @param string|null $display_name_for_pacht display_name_for_pacht
     *
     * @return self
     */
    public function setDisplayNameForPacht($display_name_for_pacht)
    {
        if (is_null($display_name_for_pacht)) {
            throw new \InvalidArgumentException('non-nullable display_name_for_pacht cannot be null');
        }
        $this->container['display_name_for_pacht'] = $display_name_for_pacht;

        return $this;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \Brixion\Kolibri\Model\CommissionPaidBy
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \Brixion\Kolibri\Model\CommissionPaidBy $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

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
