<?php

declare(strict_types=1);

/**
 * Address - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Address.
 * @implements \ArrayAccess<string, mixed>
 */
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'admin_area_level1' => '\Brixion\Kolibri\Model\AddressDetail',
        'admin_area_level2' => '\Brixion\Kolibri\Model\AddressDetail',
        'admin_area_level3' => '\Brixion\Kolibri\Model\AddressDetail',
        'cadastral_code' => 'string',
        'claim_in_progress' => 'bool',
        'country_iso2' => 'string',
        'country_id' => 'int',
        'end_of_house_number_range' => 'int',
        'house_number' => 'int',
        'house_number_postfix' => 'string',
        'locality' => '\Brixion\Kolibri\Model\AddressDetail',
        'geo_location' => '\Brixion\Kolibri\Model\GeoLocation',
        'postal_code' => 'string',
        'start_of_house_number_range' => 'int',
        'street' => '\Brixion\Kolibri\Model\AddressDetail',
        'sublocality' => '\Brixion\Kolibri\Model\AddressDetail',
        'uses_house_number_range' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'admin_area_level1' => null,
        'admin_area_level2' => null,
        'admin_area_level3' => null,
        'cadastral_code' => null,
        'claim_in_progress' => null,
        'country_iso2' => null,
        'country_id' => 'int32',
        'end_of_house_number_range' => 'int32',
        'house_number' => 'int32',
        'house_number_postfix' => null,
        'locality' => null,
        'geo_location' => null,
        'postal_code' => null,
        'start_of_house_number_range' => 'int32',
        'street' => null,
        'sublocality' => null,
        'uses_house_number_range' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'admin_area_level1' => false,
        'admin_area_level2' => false,
        'admin_area_level3' => false,
        'cadastral_code' => false,
        'claim_in_progress' => false,
        'country_iso2' => false,
        'country_id' => false,
        'end_of_house_number_range' => false,
        'house_number' => false,
        'house_number_postfix' => false,
        'locality' => false,
        'geo_location' => false,
        'postal_code' => false,
        'start_of_house_number_range' => false,
        'street' => false,
        'sublocality' => false,
        'uses_house_number_range' => false,
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
        'admin_area_level1' => 'adminAreaLevel1',
        'admin_area_level2' => 'adminAreaLevel2',
        'admin_area_level3' => 'adminAreaLevel3',
        'cadastral_code' => 'cadastralCode',
        'claim_in_progress' => 'claimInProgress',
        'country_iso2' => 'countryIso2',
        'country_id' => 'countryId',
        'end_of_house_number_range' => 'endOfHouseNumberRange',
        'house_number' => 'houseNumber',
        'house_number_postfix' => 'houseNumberPostfix',
        'locality' => 'locality',
        'geo_location' => 'geoLocation',
        'postal_code' => 'postalCode',
        'start_of_house_number_range' => 'startOfHouseNumberRange',
        'street' => 'street',
        'sublocality' => 'sublocality',
        'uses_house_number_range' => 'usesHouseNumberRange',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'admin_area_level1' => 'setAdminAreaLevel1',
        'admin_area_level2' => 'setAdminAreaLevel2',
        'admin_area_level3' => 'setAdminAreaLevel3',
        'cadastral_code' => 'setCadastralCode',
        'claim_in_progress' => 'setClaimInProgress',
        'country_iso2' => 'setCountryIso2',
        'country_id' => 'setCountryId',
        'end_of_house_number_range' => 'setEndOfHouseNumberRange',
        'house_number' => 'setHouseNumber',
        'house_number_postfix' => 'setHouseNumberPostfix',
        'locality' => 'setLocality',
        'geo_location' => 'setGeoLocation',
        'postal_code' => 'setPostalCode',
        'start_of_house_number_range' => 'setStartOfHouseNumberRange',
        'street' => 'setStreet',
        'sublocality' => 'setSublocality',
        'uses_house_number_range' => 'setUsesHouseNumberRange',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'admin_area_level1' => 'getAdminAreaLevel1',
        'admin_area_level2' => 'getAdminAreaLevel2',
        'admin_area_level3' => 'getAdminAreaLevel3',
        'cadastral_code' => 'getCadastralCode',
        'claim_in_progress' => 'getClaimInProgress',
        'country_iso2' => 'getCountryIso2',
        'country_id' => 'getCountryId',
        'end_of_house_number_range' => 'getEndOfHouseNumberRange',
        'house_number' => 'getHouseNumber',
        'house_number_postfix' => 'getHouseNumberPostfix',
        'locality' => 'getLocality',
        'geo_location' => 'getGeoLocation',
        'postal_code' => 'getPostalCode',
        'start_of_house_number_range' => 'getStartOfHouseNumberRange',
        'street' => 'getStreet',
        'sublocality' => 'getSublocality',
        'uses_house_number_range' => 'getUsesHouseNumberRange',
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
        $this->setIfExists('admin_area_level1', $data ?? [], null);
        $this->setIfExists('admin_area_level2', $data ?? [], null);
        $this->setIfExists('admin_area_level3', $data ?? [], null);
        $this->setIfExists('cadastral_code', $data ?? [], null);
        $this->setIfExists('claim_in_progress', $data ?? [], null);
        $this->setIfExists('country_iso2', $data ?? [], null);
        $this->setIfExists('country_id', $data ?? [], null);
        $this->setIfExists('end_of_house_number_range', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('house_number_postfix', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('geo_location', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('start_of_house_number_range', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('sublocality', $data ?? [], null);
        $this->setIfExists('uses_house_number_range', $data ?? [], null);
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
     * Gets admin_area_level1
     *
     * @return \Brixion\Kolibri\Model\AddressDetail|null
     */
    public function getAdminAreaLevel1()
    {
        return $this->container['admin_area_level1'];
    }

    /**
     * Sets admin_area_level1
     *
     * @param \Brixion\Kolibri\Model\AddressDetail|null $admin_area_level1 admin_area_level1
     *
     * @return self
     */
    public function setAdminAreaLevel1($admin_area_level1)
    {
        if (is_null($admin_area_level1)) {
            throw new \InvalidArgumentException('non-nullable admin_area_level1 cannot be null');
        }
        $this->container['admin_area_level1'] = $admin_area_level1;

        return $this;
    }

    /**
     * Gets admin_area_level2
     *
     * @return \Brixion\Kolibri\Model\AddressDetail|null
     */
    public function getAdminAreaLevel2()
    {
        return $this->container['admin_area_level2'];
    }

    /**
     * Sets admin_area_level2
     *
     * @param \Brixion\Kolibri\Model\AddressDetail|null $admin_area_level2 admin_area_level2
     *
     * @return self
     */
    public function setAdminAreaLevel2($admin_area_level2)
    {
        if (is_null($admin_area_level2)) {
            throw new \InvalidArgumentException('non-nullable admin_area_level2 cannot be null');
        }
        $this->container['admin_area_level2'] = $admin_area_level2;

        return $this;
    }

    /**
     * Gets admin_area_level3
     *
     * @return \Brixion\Kolibri\Model\AddressDetail|null
     */
    public function getAdminAreaLevel3()
    {
        return $this->container['admin_area_level3'];
    }

    /**
     * Sets admin_area_level3
     *
     * @param \Brixion\Kolibri\Model\AddressDetail|null $admin_area_level3 admin_area_level3
     *
     * @return self
     */
    public function setAdminAreaLevel3($admin_area_level3)
    {
        if (is_null($admin_area_level3)) {
            throw new \InvalidArgumentException('non-nullable admin_area_level3 cannot be null');
        }
        $this->container['admin_area_level3'] = $admin_area_level3;

        return $this;
    }

    /**
     * Gets cadastral_code
     *
     * @return string|null
     */
    public function getCadastralCode()
    {
        return $this->container['cadastral_code'];
    }

    /**
     * Sets cadastral_code
     *
     * @param string|null $cadastral_code cadastral_code
     *
     * @return self
     */
    public function setCadastralCode($cadastral_code)
    {
        if (is_null($cadastral_code)) {
            throw new \InvalidArgumentException('non-nullable cadastral_code cannot be null');
        }
        $this->container['cadastral_code'] = $cadastral_code;

        return $this;
    }

    /**
     * Gets claim_in_progress
     *
     * @return bool|null
     */
    public function getClaimInProgress()
    {
        return $this->container['claim_in_progress'];
    }

    /**
     * Sets claim_in_progress
     *
     * @param bool|null $claim_in_progress claim_in_progress
     *
     * @return self
     */
    public function setClaimInProgress($claim_in_progress)
    {
        if (is_null($claim_in_progress)) {
            throw new \InvalidArgumentException('non-nullable claim_in_progress cannot be null');
        }
        $this->container['claim_in_progress'] = $claim_in_progress;

        return $this;
    }

    /**
     * Gets country_iso2
     *
     * @return string|null
     */
    public function getCountryIso2()
    {
        return $this->container['country_iso2'];
    }

    /**
     * Sets country_iso2
     *
     * @param string|null $country_iso2 country_iso2
     *
     * @return self
     */
    public function setCountryIso2($country_iso2)
    {
        if (is_null($country_iso2)) {
            throw new \InvalidArgumentException('non-nullable country_iso2 cannot be null');
        }
        $this->container['country_iso2'] = $country_iso2;

        return $this;
    }

    /**
     * Gets country_id
     *
     * @return int|null
     */
    public function getCountryId()
    {
        return $this->container['country_id'];
    }

    /**
     * Sets country_id
     *
     * @param int|null $country_id country_id
     *
     * @return self
     */
    public function setCountryId($country_id)
    {
        if (is_null($country_id)) {
            throw new \InvalidArgumentException('non-nullable country_id cannot be null');
        }
        $this->container['country_id'] = $country_id;

        return $this;
    }

    /**
     * Gets end_of_house_number_range
     *
     * @return int|null
     */
    public function getEndOfHouseNumberRange()
    {
        return $this->container['end_of_house_number_range'];
    }

    /**
     * Sets end_of_house_number_range
     *
     * @param int|null $end_of_house_number_range end_of_house_number_range
     *
     * @return self
     */
    public function setEndOfHouseNumberRange($end_of_house_number_range)
    {
        if (is_null($end_of_house_number_range)) {
            throw new \InvalidArgumentException('non-nullable end_of_house_number_range cannot be null');
        }
        $this->container['end_of_house_number_range'] = $end_of_house_number_range;

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
     * Gets locality
     *
     * @return \Brixion\Kolibri\Model\AddressDetail|null
     */
    public function getLocality()
    {
        return $this->container['locality'];
    }

    /**
     * Sets locality
     *
     * @param \Brixion\Kolibri\Model\AddressDetail|null $locality locality
     *
     * @return self
     */
    public function setLocality($locality)
    {
        if (is_null($locality)) {
            throw new \InvalidArgumentException('non-nullable locality cannot be null');
        }
        $this->container['locality'] = $locality;

        return $this;
    }

    /**
     * Gets geo_location
     *
     * @return \Brixion\Kolibri\Model\GeoLocation|null
     */
    public function getGeoLocation()
    {
        return $this->container['geo_location'];
    }

    /**
     * Sets geo_location
     *
     * @param \Brixion\Kolibri\Model\GeoLocation|null $geo_location geo_location
     *
     * @return self
     */
    public function setGeoLocation($geo_location)
    {
        if (is_null($geo_location)) {
            throw new \InvalidArgumentException('non-nullable geo_location cannot be null');
        }
        $this->container['geo_location'] = $geo_location;

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
     * Gets start_of_house_number_range
     *
     * @return int|null
     */
    public function getStartOfHouseNumberRange()
    {
        return $this->container['start_of_house_number_range'];
    }

    /**
     * Sets start_of_house_number_range
     *
     * @param int|null $start_of_house_number_range start_of_house_number_range
     *
     * @return self
     */
    public function setStartOfHouseNumberRange($start_of_house_number_range)
    {
        if (is_null($start_of_house_number_range)) {
            throw new \InvalidArgumentException('non-nullable start_of_house_number_range cannot be null');
        }
        $this->container['start_of_house_number_range'] = $start_of_house_number_range;

        return $this;
    }

    /**
     * Gets street
     *
     * @return \Brixion\Kolibri\Model\AddressDetail|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param \Brixion\Kolibri\Model\AddressDetail|null $street street
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            throw new \InvalidArgumentException('non-nullable street cannot be null');
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets sublocality
     *
     * @return \Brixion\Kolibri\Model\AddressDetail|null
     */
    public function getSublocality()
    {
        return $this->container['sublocality'];
    }

    /**
     * Sets sublocality
     *
     * @param \Brixion\Kolibri\Model\AddressDetail|null $sublocality sublocality
     *
     * @return self
     */
    public function setSublocality($sublocality)
    {
        if (is_null($sublocality)) {
            throw new \InvalidArgumentException('non-nullable sublocality cannot be null');
        }
        $this->container['sublocality'] = $sublocality;

        return $this;
    }

    /**
     * Gets uses_house_number_range
     *
     * @return bool|null
     */
    public function getUsesHouseNumberRange()
    {
        return $this->container['uses_house_number_range'];
    }

    /**
     * Sets uses_house_number_range
     *
     * @param bool|null $uses_house_number_range uses_house_number_range
     *
     * @return self
     */
    public function setUsesHouseNumberRange($uses_house_number_range)
    {
        if (is_null($uses_house_number_range)) {
            throw new \InvalidArgumentException('non-nullable uses_house_number_range cannot be null');
        }
        $this->container['uses_house_number_range'] = $uses_house_number_range;

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
