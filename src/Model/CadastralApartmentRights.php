<?php

declare(strict_types=1);

/**
 * CadastralApartmentRights - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CadastralApartmentRights.
 * @implements \ArrayAccess<string, mixed>
 */
class CadastralApartmentRights implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CadastralApartmentRights';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'complex' => 'string',
        'has_owners_association' => 'bool',
        'head' => 'string',
        'is_originated_from_multiple_businesses' => 'bool',
        'municipality_by_devision' => 'string',
        'parcel_number_by_devision' => 'string',
        'section_by_devision' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'complex' => null,
        'has_owners_association' => null,
        'head' => null,
        'is_originated_from_multiple_businesses' => null,
        'municipality_by_devision' => null,
        'parcel_number_by_devision' => null,
        'section_by_devision' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'complex' => false,
        'has_owners_association' => false,
        'head' => false,
        'is_originated_from_multiple_businesses' => false,
        'municipality_by_devision' => false,
        'parcel_number_by_devision' => false,
        'section_by_devision' => false,
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
        'complex' => 'complex',
        'has_owners_association' => 'hasOwnersAssociation',
        'head' => 'head',
        'is_originated_from_multiple_businesses' => 'isOriginatedFromMultipleBusinesses',
        'municipality_by_devision' => 'municipalityByDevision',
        'parcel_number_by_devision' => 'parcelNumberByDevision',
        'section_by_devision' => 'sectionByDevision',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'complex' => 'setComplex',
        'has_owners_association' => 'setHasOwnersAssociation',
        'head' => 'setHead',
        'is_originated_from_multiple_businesses' => 'setIsOriginatedFromMultipleBusinesses',
        'municipality_by_devision' => 'setMunicipalityByDevision',
        'parcel_number_by_devision' => 'setParcelNumberByDevision',
        'section_by_devision' => 'setSectionByDevision',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'complex' => 'getComplex',
        'has_owners_association' => 'getHasOwnersAssociation',
        'head' => 'getHead',
        'is_originated_from_multiple_businesses' => 'getIsOriginatedFromMultipleBusinesses',
        'municipality_by_devision' => 'getMunicipalityByDevision',
        'parcel_number_by_devision' => 'getParcelNumberByDevision',
        'section_by_devision' => 'getSectionByDevision',
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
        $this->setIfExists('complex', $data ?? [], null);
        $this->setIfExists('has_owners_association', $data ?? [], null);
        $this->setIfExists('head', $data ?? [], null);
        $this->setIfExists('is_originated_from_multiple_businesses', $data ?? [], null);
        $this->setIfExists('municipality_by_devision', $data ?? [], null);
        $this->setIfExists('parcel_number_by_devision', $data ?? [], null);
        $this->setIfExists('section_by_devision', $data ?? [], null);
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
     * Gets complex
     *
     * @return string|null
     */
    public function getComplex()
    {
        return $this->container['complex'];
    }

    /**
     * Sets complex
     *
     * @param string|null $complex complex
     *
     * @return self
     */
    public function setComplex($complex)
    {
        if (is_null($complex)) {
            throw new \InvalidArgumentException('non-nullable complex cannot be null');
        }
        $this->container['complex'] = $complex;

        return $this;
    }

    /**
     * Gets has_owners_association
     *
     * @return bool|null
     */
    public function getHasOwnersAssociation()
    {
        return $this->container['has_owners_association'];
    }

    /**
     * Sets has_owners_association
     *
     * @param bool|null $has_owners_association has_owners_association
     *
     * @return self
     */
    public function setHasOwnersAssociation($has_owners_association)
    {
        if (is_null($has_owners_association)) {
            throw new \InvalidArgumentException('non-nullable has_owners_association cannot be null');
        }
        $this->container['has_owners_association'] = $has_owners_association;

        return $this;
    }

    /**
     * Gets head
     *
     * @return string|null
     */
    public function getHead()
    {
        return $this->container['head'];
    }

    /**
     * Sets head
     *
     * @param string|null $head head
     *
     * @return self
     */
    public function setHead($head)
    {
        if (is_null($head)) {
            throw new \InvalidArgumentException('non-nullable head cannot be null');
        }
        $this->container['head'] = $head;

        return $this;
    }

    /**
     * Gets is_originated_from_multiple_businesses
     *
     * @return bool|null
     */
    public function getIsOriginatedFromMultipleBusinesses()
    {
        return $this->container['is_originated_from_multiple_businesses'];
    }

    /**
     * Sets is_originated_from_multiple_businesses
     *
     * @param bool|null $is_originated_from_multiple_businesses is_originated_from_multiple_businesses
     *
     * @return self
     */
    public function setIsOriginatedFromMultipleBusinesses($is_originated_from_multiple_businesses)
    {
        if (is_null($is_originated_from_multiple_businesses)) {
            throw new \InvalidArgumentException('non-nullable is_originated_from_multiple_businesses cannot be null');
        }
        $this->container['is_originated_from_multiple_businesses'] = $is_originated_from_multiple_businesses;

        return $this;
    }

    /**
     * Gets municipality_by_devision
     *
     * @return string|null
     */
    public function getMunicipalityByDevision()
    {
        return $this->container['municipality_by_devision'];
    }

    /**
     * Sets municipality_by_devision
     *
     * @param string|null $municipality_by_devision municipality_by_devision
     *
     * @return self
     */
    public function setMunicipalityByDevision($municipality_by_devision)
    {
        if (is_null($municipality_by_devision)) {
            throw new \InvalidArgumentException('non-nullable municipality_by_devision cannot be null');
        }
        $this->container['municipality_by_devision'] = $municipality_by_devision;

        return $this;
    }

    /**
     * Gets parcel_number_by_devision
     *
     * @return string|null
     */
    public function getParcelNumberByDevision()
    {
        return $this->container['parcel_number_by_devision'];
    }

    /**
     * Sets parcel_number_by_devision
     *
     * @param string|null $parcel_number_by_devision parcel_number_by_devision
     *
     * @return self
     */
    public function setParcelNumberByDevision($parcel_number_by_devision)
    {
        if (is_null($parcel_number_by_devision)) {
            throw new \InvalidArgumentException('non-nullable parcel_number_by_devision cannot be null');
        }
        $this->container['parcel_number_by_devision'] = $parcel_number_by_devision;

        return $this;
    }

    /**
     * Gets section_by_devision
     *
     * @return string|null
     */
    public function getSectionByDevision()
    {
        return $this->container['section_by_devision'];
    }

    /**
     * Sets section_by_devision
     *
     * @param string|null $section_by_devision section_by_devision
     *
     * @return self
     */
    public function setSectionByDevision($section_by_devision)
    {
        if (is_null($section_by_devision)) {
            throw new \InvalidArgumentException('non-nullable section_by_devision cannot be null');
        }
        $this->container['section_by_devision'] = $section_by_devision;

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
