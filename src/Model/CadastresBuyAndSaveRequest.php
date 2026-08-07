<?php

declare(strict_types=1);

/**
 * CadastresBuyAndSaveRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CadastresBuyAndSaveRequest.
 *
 * Perform a request at the Cadaster Service for Cadastres (maps and messages) by postcode or parcel Id. When doing a request for postalcodes do enter values for: postalCode, houseNumber, houseNumberPostfix and countryIso2. When doing a request for parcel Id do enter values for: municipalityId, municipalityName, sectionNumber, parcelNumber, apartmentRightSerialNumber and countryIso2. You can use the mastertable endpoint to fetch valid municipality id&#39;s and names.
 * @implements \ArrayAccess<string, mixed>
 */
class CadastresBuyAndSaveRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CadastresBuyAndSaveRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'apartment_right_serial_number' => 'int',
        'country_iso2' => 'string',
        'house_number' => 'int',
        'house_number_postfix' => 'string',
        'municipality_id' => 'string',
        'municipality_name' => 'string',
        'parcel_number' => 'int',
        'postal_code' => 'string',
        'section_number' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'apartment_right_serial_number' => 'int32',
        'country_iso2' => null,
        'house_number' => 'int32',
        'house_number_postfix' => null,
        'municipality_id' => null,
        'municipality_name' => null,
        'parcel_number' => 'int32',
        'postal_code' => null,
        'section_number' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'apartment_right_serial_number' => false,
        'country_iso2' => false,
        'house_number' => false,
        'house_number_postfix' => false,
        'municipality_id' => false,
        'municipality_name' => false,
        'parcel_number' => false,
        'postal_code' => false,
        'section_number' => false,
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
        'apartment_right_serial_number' => 'apartmentRightSerialNumber',
        'country_iso2' => 'countryIso2',
        'house_number' => 'houseNumber',
        'house_number_postfix' => 'houseNumberPostfix',
        'municipality_id' => 'municipalityId',
        'municipality_name' => 'municipalityName',
        'parcel_number' => 'parcelNumber',
        'postal_code' => 'postalCode',
        'section_number' => 'sectionNumber',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apartment_right_serial_number' => 'setApartmentRightSerialNumber',
        'country_iso2' => 'setCountryIso2',
        'house_number' => 'setHouseNumber',
        'house_number_postfix' => 'setHouseNumberPostfix',
        'municipality_id' => 'setMunicipalityId',
        'municipality_name' => 'setMunicipalityName',
        'parcel_number' => 'setParcelNumber',
        'postal_code' => 'setPostalCode',
        'section_number' => 'setSectionNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apartment_right_serial_number' => 'getApartmentRightSerialNumber',
        'country_iso2' => 'getCountryIso2',
        'house_number' => 'getHouseNumber',
        'house_number_postfix' => 'getHouseNumberPostfix',
        'municipality_id' => 'getMunicipalityId',
        'municipality_name' => 'getMunicipalityName',
        'parcel_number' => 'getParcelNumber',
        'postal_code' => 'getPostalCode',
        'section_number' => 'getSectionNumber',
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
        $this->setIfExists('apartment_right_serial_number', $data ?? [], null);
        $this->setIfExists('country_iso2', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('house_number_postfix', $data ?? [], null);
        $this->setIfExists('municipality_id', $data ?? [], null);
        $this->setIfExists('municipality_name', $data ?? [], null);
        $this->setIfExists('parcel_number', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('section_number', $data ?? [], null);
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

        if ($this->container['apartment_right_serial_number'] === null) {
            $invalidProperties[] = "'apartment_right_serial_number' can't be null";
        }
        if ($this->container['country_iso2'] === null) {
            $invalidProperties[] = "'country_iso2' can't be null";
        }
        if ((mb_strlen($this->container['country_iso2']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_iso2', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country_iso2']) < 2)) {
            $invalidProperties[] = "invalid value for 'country_iso2', the character length must be bigger than or equal to 2.";
        }

        if ($this->container['house_number'] === null) {
            $invalidProperties[] = "'house_number' can't be null";
        }
        if ($this->container['parcel_number'] === null) {
            $invalidProperties[] = "'parcel_number' can't be null";
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
     * Gets apartment_right_serial_number
     *
     * @return int
     */
    public function getApartmentRightSerialNumber()
    {
        return $this->container['apartment_right_serial_number'];
    }

    /**
     * Sets apartment_right_serial_number
     *
     * @param int $apartment_right_serial_number In Dutch: \"appartmentsrecht volgnummer\".
     *
     * @return self
     */
    public function setApartmentRightSerialNumber($apartment_right_serial_number)
    {
        if (is_null($apartment_right_serial_number)) {
            throw new \InvalidArgumentException('non-nullable apartment_right_serial_number cannot be null');
        }
        $this->container['apartment_right_serial_number'] = $apartment_right_serial_number;

        return $this;
    }

    /**
     * Gets country_iso2
     *
     * @return string
     */
    public function getCountryIso2()
    {
        return $this->container['country_iso2'];
    }

    /**
     * Sets country_iso2
     *
     * @param string $country_iso2 country_iso2
     *
     * @return self
     */
    public function setCountryIso2($country_iso2)
    {
        if (is_null($country_iso2)) {
            throw new \InvalidArgumentException('non-nullable country_iso2 cannot be null');
        }
        if ((mb_strlen($country_iso2) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country_iso2 when calling CadastresBuyAndSaveRequest., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country_iso2) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country_iso2 when calling CadastresBuyAndSaveRequest., must be bigger than or equal to 2.');
        }

        $this->container['country_iso2'] = $country_iso2;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return int
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param int $house_number house_number
     *
     * @return self
     */
    public function setHouseNumber($house_number)
    {
        if (is_null($house_number)) {
            throw new \InvalidArgumentException('non-nullable house_number cannot be null');
        }
        $this->container['house_number'] = $house_number;

        return $this;
    }

    /**
     * Gets house_number_postfix
     *
     * @return string|null
     */
    public function getHouseNumberPostfix()
    {
        return $this->container['house_number_postfix'];
    }

    /**
     * Sets house_number_postfix
     *
     * @param string|null $house_number_postfix house_number_postfix
     *
     * @return self
     */
    public function setHouseNumberPostfix($house_number_postfix)
    {
        if (is_null($house_number_postfix)) {
            throw new \InvalidArgumentException('non-nullable house_number_postfix cannot be null');
        }
        $this->container['house_number_postfix'] = $house_number_postfix;

        return $this;
    }

    /**
     * Gets municipality_id
     *
     * @return string|null
     */
    public function getMunicipalityId()
    {
        return $this->container['municipality_id'];
    }

    /**
     * Sets municipality_id
     *
     * @param string|null $municipality_id In Dutch: \"gemeente code\".
     *
     * @return self
     */
    public function setMunicipalityId($municipality_id)
    {
        if (is_null($municipality_id)) {
            throw new \InvalidArgumentException('non-nullable municipality_id cannot be null');
        }
        $this->container['municipality_id'] = $municipality_id;

        return $this;
    }

    /**
     * Gets municipality_name
     *
     * @return string|null
     */
    public function getMunicipalityName()
    {
        return $this->container['municipality_name'];
    }

    /**
     * Sets municipality_name
     *
     * @param string|null $municipality_name In Dutch: \"gemeente\".
     *
     * @return self
     */
    public function setMunicipalityName($municipality_name)
    {
        if (is_null($municipality_name)) {
            throw new \InvalidArgumentException('non-nullable municipality_name cannot be null');
        }
        $this->container['municipality_name'] = $municipality_name;

        return $this;
    }

    /**
     * Gets parcel_number
     *
     * @return int
     */
    public function getParcelNumber()
    {
        return $this->container['parcel_number'];
    }

    /**
     * Sets parcel_number
     *
     * @param int $parcel_number In Dutch: \"perceel nummer\".
     *
     * @return self
     */
    public function setParcelNumber($parcel_number)
    {
        if (is_null($parcel_number)) {
            throw new \InvalidArgumentException('non-nullable parcel_number cannot be null');
        }
        $this->container['parcel_number'] = $parcel_number;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string|null
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string|null $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets section_number
     *
     * @return string|null
     */
    public function getSectionNumber()
    {
        return $this->container['section_number'];
    }

    /**
     * Sets section_number
     *
     * @param string|null $section_number In Dutch: \"sectie\".
     *
     * @return self
     */
    public function setSectionNumber($section_number)
    {
        if (is_null($section_number)) {
            throw new \InvalidArgumentException('non-nullable section_number cannot be null');
        }
        $this->container['section_number'] = $section_number;

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
