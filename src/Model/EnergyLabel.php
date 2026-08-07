<?php

declare(strict_types=1);

/**
 * EnergyLabel - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * EnergyLabel.
 * @implements \ArrayAccess<string, mixed>
 */
class EnergyLabel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'EnergyLabel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'certificate_number' => 'string',
        'end_date' => '\DateTime',
        'energy_class' => '\Brixion\Kolibri\Model\EnergyClass',
        'energy_index' => 'float',
        'is_certificate_available' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'certificate_number' => null,
        'end_date' => 'date-time',
        'energy_class' => null,
        'energy_index' => 'decimal',
        'is_certificate_available' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'certificate_number' => false,
        'end_date' => false,
        'energy_class' => false,
        'energy_index' => false,
        'is_certificate_available' => false,
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
        'certificate_number' => 'certificateNumber',
        'end_date' => 'endDate',
        'energy_class' => 'energyClass',
        'energy_index' => 'energyIndex',
        'is_certificate_available' => 'isCertificateAvailable',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificate_number' => 'setCertificateNumber',
        'end_date' => 'setEndDate',
        'energy_class' => 'setEnergyClass',
        'energy_index' => 'setEnergyIndex',
        'is_certificate_available' => 'setIsCertificateAvailable',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificate_number' => 'getCertificateNumber',
        'end_date' => 'getEndDate',
        'energy_class' => 'getEnergyClass',
        'energy_index' => 'getEnergyIndex',
        'is_certificate_available' => 'getIsCertificateAvailable',
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
        $this->setIfExists('certificate_number', $data ?? [], null);
        $this->setIfExists('end_date', $data ?? [], null);
        $this->setIfExists('energy_class', $data ?? [], null);
        $this->setIfExists('energy_index', $data ?? [], null);
        $this->setIfExists('is_certificate_available', $data ?? [], null);
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
     * Gets certificate_number
     *
     * @return string|null
     */
    public function getCertificateNumber()
    {
        return $this->container['certificate_number'];
    }

    /**
     * Sets certificate_number
     *
     * @param string|null $certificate_number certificate_number
     *
     * @return self
     */
    public function setCertificateNumber($certificate_number)
    {
        if (is_null($certificate_number)) {
            throw new \InvalidArgumentException('non-nullable certificate_number cannot be null');
        }
        $this->container['certificate_number'] = $certificate_number;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date end_date
     *
     * @return self
     */
    public function setEndDate($end_date)
    {
        if (is_null($end_date)) {
            throw new \InvalidArgumentException('non-nullable end_date cannot be null');
        }
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets energy_class
     *
     * @return \Brixion\Kolibri\Model\EnergyClass|null
     */
    public function getEnergyClass()
    {
        return $this->container['energy_class'];
    }

    /**
     * Sets energy_class
     *
     * @param \Brixion\Kolibri\Model\EnergyClass|null $energy_class energy_class
     *
     * @return self
     */
    public function setEnergyClass($energy_class)
    {
        if (is_null($energy_class)) {
            throw new \InvalidArgumentException('non-nullable energy_class cannot be null');
        }
        $this->container['energy_class'] = $energy_class;

        return $this;
    }

    /**
     * Gets energy_index
     *
     * @return float|null
     */
    public function getEnergyIndex()
    {
        return $this->container['energy_index'];
    }

    /**
     * Sets energy_index
     *
     * @param float|null $energy_index energy_index
     *
     * @return self
     */
    public function setEnergyIndex($energy_index)
    {
        if (is_null($energy_index)) {
            throw new \InvalidArgumentException('non-nullable energy_index cannot be null');
        }
        $this->container['energy_index'] = $energy_index;

        return $this;
    }

    /**
     * Gets is_certificate_available
     *
     * @return bool|null
     */
    public function getIsCertificateAvailable()
    {
        return $this->container['is_certificate_available'];
    }

    /**
     * Sets is_certificate_available
     *
     * @param bool|null $is_certificate_available is_certificate_available
     *
     * @return self
     */
    public function setIsCertificateAvailable($is_certificate_available)
    {
        if (is_null($is_certificate_available)) {
            throw new \InvalidArgumentException('non-nullable is_certificate_available cannot be null');
        }
        $this->container['is_certificate_available'] = $is_certificate_available;

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
