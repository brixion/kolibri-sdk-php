<?php

declare(strict_types=1);

/**
 * GeoSearchRequest - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * GeoSearchRequest.
 * @implements \ArrayAccess<string, mixed>
 */
class GeoSearchRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'GeoSearchRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'country_iso2' => 'string',
        'culture' => 'string',
        'location' => 'string',
        'locality' => 'string',
        'postal_code' => 'string',
        'house_number_postfix' => 'string',
        'house_number' => 'int',
        'street' => 'string',
        'admin_area_level3' => 'string',
        'admin_area_level2' => 'string',
        'admin_area_level1' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'country_iso2' => null,
        'culture' => null,
        'location' => null,
        'locality' => null,
        'postal_code' => null,
        'house_number_postfix' => null,
        'house_number' => 'int32',
        'street' => null,
        'admin_area_level3' => null,
        'admin_area_level2' => null,
        'admin_area_level1' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'country_iso2' => false,
        'culture' => false,
        'location' => false,
        'locality' => false,
        'postal_code' => false,
        'house_number_postfix' => false,
        'house_number' => false,
        'street' => false,
        'admin_area_level3' => false,
        'admin_area_level2' => false,
        'admin_area_level1' => false,
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
        'country_iso2' => 'countryIso2',
        'culture' => 'culture',
        'location' => 'location',
        'locality' => 'locality',
        'postal_code' => 'postalCode',
        'house_number_postfix' => 'houseNumberPostfix',
        'house_number' => 'houseNumber',
        'street' => 'street',
        'admin_area_level3' => 'adminAreaLevel3',
        'admin_area_level2' => 'adminAreaLevel2',
        'admin_area_level1' => 'adminAreaLevel1',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country_iso2' => 'setCountryIso2',
        'culture' => 'setCulture',
        'location' => 'setLocation',
        'locality' => 'setLocality',
        'postal_code' => 'setPostalCode',
        'house_number_postfix' => 'setHouseNumberPostfix',
        'house_number' => 'setHouseNumber',
        'street' => 'setStreet',
        'admin_area_level3' => 'setAdminAreaLevel3',
        'admin_area_level2' => 'setAdminAreaLevel2',
        'admin_area_level1' => 'setAdminAreaLevel1',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country_iso2' => 'getCountryIso2',
        'culture' => 'getCulture',
        'location' => 'getLocation',
        'locality' => 'getLocality',
        'postal_code' => 'getPostalCode',
        'house_number_postfix' => 'getHouseNumberPostfix',
        'house_number' => 'getHouseNumber',
        'street' => 'getStreet',
        'admin_area_level3' => 'getAdminAreaLevel3',
        'admin_area_level2' => 'getAdminAreaLevel2',
        'admin_area_level1' => 'getAdminAreaLevel1',
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
        $this->setIfExists('country_iso2', $data ?? [], null);
        $this->setIfExists('culture', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('house_number_postfix', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('admin_area_level3', $data ?? [], null);
        $this->setIfExists('admin_area_level2', $data ?? [], null);
        $this->setIfExists('admin_area_level1', $data ?? [], null);
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

        if ($this->container['country_iso2'] === null) {
            $invalidProperties[] = "'country_iso2' can't be null";
        }
        if ((mb_strlen($this->container['country_iso2']) > 2)) {
            $invalidProperties[] = "invalid value for 'country_iso2', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country_iso2']) < 0)) {
            $invalidProperties[] = "invalid value for 'country_iso2', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['culture'] === null) {
            $invalidProperties[] = "'culture' can't be null";
        }
        if ((mb_strlen($this->container['culture']) > 5)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be smaller than or equal to 5.";
        }

        if ((mb_strlen($this->container['culture']) < 0)) {
            $invalidProperties[] = "invalid value for 'culture', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) > 150)) {
            $invalidProperties[] = "invalid value for 'location', the character length must be smaller than or equal to 150.";
        }

        if (!is_null($this->container['location']) && (mb_strlen($this->container['location']) < 0)) {
            $invalidProperties[] = "invalid value for 'location', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['locality']) && (mb_strlen($this->container['locality']) > 100)) {
            $invalidProperties[] = "invalid value for 'locality', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['locality']) && (mb_strlen($this->container['locality']) < 0)) {
            $invalidProperties[] = "invalid value for 'locality', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) > 100)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['postal_code']) && (mb_strlen($this->container['postal_code']) < 0)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['house_number_postfix']) && (mb_strlen($this->container['house_number_postfix']) > 100)) {
            $invalidProperties[] = "invalid value for 'house_number_postfix', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['house_number_postfix']) && (mb_strlen($this->container['house_number_postfix']) < 0)) {
            $invalidProperties[] = "invalid value for 'house_number_postfix', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['street']) && (mb_strlen($this->container['street']) > 100)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['street']) && (mb_strlen($this->container['street']) < 0)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['admin_area_level3']) && (mb_strlen($this->container['admin_area_level3']) > 100)) {
            $invalidProperties[] = "invalid value for 'admin_area_level3', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['admin_area_level3']) && (mb_strlen($this->container['admin_area_level3']) < 0)) {
            $invalidProperties[] = "invalid value for 'admin_area_level3', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['admin_area_level2']) && (mb_strlen($this->container['admin_area_level2']) > 100)) {
            $invalidProperties[] = "invalid value for 'admin_area_level2', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['admin_area_level2']) && (mb_strlen($this->container['admin_area_level2']) < 0)) {
            $invalidProperties[] = "invalid value for 'admin_area_level2', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['admin_area_level1']) && (mb_strlen($this->container['admin_area_level1']) > 100)) {
            $invalidProperties[] = "invalid value for 'admin_area_level1', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['admin_area_level1']) && (mb_strlen($this->container['admin_area_level1']) < 0)) {
            $invalidProperties[] = "invalid value for 'admin_area_level1', the character length must be bigger than or equal to 0.";
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
            throw new \InvalidArgumentException('invalid length for $country_iso2 when calling GeoSearchRequest., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country_iso2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $country_iso2 when calling GeoSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['country_iso2'] = $country_iso2;

        return $this;
    }

    /**
     * Gets culture
     *
     * @return string
     */
    public function getCulture()
    {
        return $this->container['culture'];
    }

    /**
     * Sets culture
     *
     * @param string $culture The culture name in the format languagecode2-country/regioncode2.
     *
     * @return self
     */
    public function setCulture($culture)
    {
        if (is_null($culture)) {
            throw new \InvalidArgumentException('non-nullable culture cannot be null');
        }
        if ((mb_strlen($culture) > 5)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling GeoSearchRequest., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($culture) < 0)) {
            throw new \InvalidArgumentException('invalid length for $culture when calling GeoSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        if ((mb_strlen($location) > 150)) {
            throw new \InvalidArgumentException('invalid length for $location when calling GeoSearchRequest., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($location) < 0)) {
            throw new \InvalidArgumentException('invalid length for $location when calling GeoSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets locality
     *
     * @return string|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param string|null $locality locality
     *
     * @return self
     */
    public function setLocality($locality)
    {
        if (is_null($locality)) {
            throw new \InvalidArgumentException('non-nullable locality cannot be null');
        }
        if ((mb_strlen($locality) > 100)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling GeoSearchRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($locality) < 0)) {
            throw new \InvalidArgumentException('invalid length for $locality when calling GeoSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['locality'] = $locality;

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
        if ((mb_strlen($postal_code) > 100)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling GeoSearchRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($postal_code) < 0)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling GeoSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['postal_code'] = $postal_code;

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
        if ((mb_strlen($house_number_postfix) > 100)) {
            throw new \InvalidArgumentException('invalid length for $house_number_postfix when calling GeoSearchRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($house_number_postfix) < 0)) {
            throw new \InvalidArgumentException('invalid length for $house_number_postfix when calling GeoSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['house_number_postfix'] = $house_number_postfix;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return int|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param int|null $house_number house_number
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
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street street
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        if ((mb_strlen($street) > 100)) {
            throw new \InvalidArgumentException('invalid length for $street when calling GeoSearchRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($street) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street when calling GeoSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets admin_area_level3
     *
     * @return string|null
     */
    public function getAdminAreaLevel3()
    {
        return $this->container['admin_area_level3'];
    }

    /**
     * Sets admin_area_level3
     *
     * @param string|null $admin_area_level3 admin_area_level3
     *
     * @return self
     */
    public function setAdminAreaLevel3($admin_area_level3)
    {
        if (is_null($admin_area_level3)) {
            throw new \InvalidArgumentException('non-nullable admin_area_level3 cannot be null');
        }
        if ((mb_strlen($admin_area_level3) > 100)) {
            throw new \InvalidArgumentException('invalid length for $admin_area_level3 when calling GeoSearchRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($admin_area_level3) < 0)) {
            throw new \InvalidArgumentException('invalid length for $admin_area_level3 when calling GeoSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['admin_area_level3'] = $admin_area_level3;

        return $this;
    }

    /**
     * Gets admin_area_level2
     *
     * @return string|null
     */
    public function getAdminAreaLevel2()
    {
        return $this->container['admin_area_level2'];
    }

    /**
     * Sets admin_area_level2
     *
     * @param string|null $admin_area_level2 admin_area_level2
     *
     * @return self
     */
    public function setAdminAreaLevel2($admin_area_level2)
    {
        if (is_null($admin_area_level2)) {
            throw new \InvalidArgumentException('non-nullable admin_area_level2 cannot be null');
        }
        if ((mb_strlen($admin_area_level2) > 100)) {
            throw new \InvalidArgumentException('invalid length for $admin_area_level2 when calling GeoSearchRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($admin_area_level2) < 0)) {
            throw new \InvalidArgumentException('invalid length for $admin_area_level2 when calling GeoSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['admin_area_level2'] = $admin_area_level2;

        return $this;
    }

    /**
     * Gets admin_area_level1
     *
     * @return string|null
     */
    public function getAdminAreaLevel1()
    {
        return $this->container['admin_area_level1'];
    }

    /**
     * Sets admin_area_level1
     *
     * @param string|null $admin_area_level1 admin_area_level1
     *
     * @return self
     */
    public function setAdminAreaLevel1($admin_area_level1)
    {
        if (is_null($admin_area_level1)) {
            throw new \InvalidArgumentException('non-nullable admin_area_level1 cannot be null');
        }
        if ((mb_strlen($admin_area_level1) > 100)) {
            throw new \InvalidArgumentException('invalid length for $admin_area_level1 when calling GeoSearchRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($admin_area_level1) < 0)) {
            throw new \InvalidArgumentException('invalid length for $admin_area_level1 when calling GeoSearchRequest., must be bigger than or equal to 0.');
        }

        $this->container['admin_area_level1'] = $admin_area_level1;

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
