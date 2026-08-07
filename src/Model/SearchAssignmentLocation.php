<?php

declare(strict_types=1);

/**
 * SearchAssignmentLocation - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * SearchAssignmentLocation.
 * @implements \ArrayAccess<string, mixed>
 */
class SearchAssignmentLocation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'SearchAssignmentLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'id' => 'int',
        'admin_area_level1' => '\Brixion\Kolibri\Model\AddressDetail',
        'admin_area_level2' => '\Brixion\Kolibri\Model\AddressDetail',
        'admin_area_level3' => '\Brixion\Kolibri\Model\AddressDetail',
        'locality' => '\Brixion\Kolibri\Model\AddressDetail',
        'sublocality' => '\Brixion\Kolibri\Model\AddressDetail',
        'street' => '\Brixion\Kolibri\Model\AddressDetail',
        'search_for_location_type' => '\Brixion\Kolibri\Model\SearchForLocationType',
        'postal_code' => 'string',
        'country_iso2' => 'string',
        'radius' => 'int',
        'geo_location' => '\Brixion\Kolibri\Model\GeoLocation',
        'display_name' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'id' => 'int32',
        'admin_area_level1' => null,
        'admin_area_level2' => null,
        'admin_area_level3' => null,
        'locality' => null,
        'sublocality' => null,
        'street' => null,
        'search_for_location_type' => null,
        'postal_code' => null,
        'country_iso2' => null,
        'radius' => 'int32',
        'geo_location' => null,
        'display_name' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'id' => false,
        'admin_area_level1' => false,
        'admin_area_level2' => false,
        'admin_area_level3' => false,
        'locality' => false,
        'sublocality' => false,
        'street' => false,
        'search_for_location_type' => false,
        'postal_code' => false,
        'country_iso2' => false,
        'radius' => false,
        'geo_location' => false,
        'display_name' => false,
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
        'id' => 'id',
        'admin_area_level1' => 'adminAreaLevel1',
        'admin_area_level2' => 'adminAreaLevel2',
        'admin_area_level3' => 'adminAreaLevel3',
        'locality' => 'locality',
        'sublocality' => 'sublocality',
        'street' => 'street',
        'search_for_location_type' => 'searchForLocationType',
        'postal_code' => 'postalCode',
        'country_iso2' => 'countryIso2',
        'radius' => 'radius',
        'geo_location' => 'geoLocation',
        'display_name' => 'displayName',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'admin_area_level1' => 'setAdminAreaLevel1',
        'admin_area_level2' => 'setAdminAreaLevel2',
        'admin_area_level3' => 'setAdminAreaLevel3',
        'locality' => 'setLocality',
        'sublocality' => 'setSublocality',
        'street' => 'setStreet',
        'search_for_location_type' => 'setSearchForLocationType',
        'postal_code' => 'setPostalCode',
        'country_iso2' => 'setCountryIso2',
        'radius' => 'setRadius',
        'geo_location' => 'setGeoLocation',
        'display_name' => 'setDisplayName',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'admin_area_level1' => 'getAdminAreaLevel1',
        'admin_area_level2' => 'getAdminAreaLevel2',
        'admin_area_level3' => 'getAdminAreaLevel3',
        'locality' => 'getLocality',
        'sublocality' => 'getSublocality',
        'street' => 'getStreet',
        'search_for_location_type' => 'getSearchForLocationType',
        'postal_code' => 'getPostalCode',
        'country_iso2' => 'getCountryIso2',
        'radius' => 'getRadius',
        'geo_location' => 'getGeoLocation',
        'display_name' => 'getDisplayName',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('admin_area_level1', $data ?? [], null);
        $this->setIfExists('admin_area_level2', $data ?? [], null);
        $this->setIfExists('admin_area_level3', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('sublocality', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('search_for_location_type', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('country_iso2', $data ?? [], null);
        $this->setIfExists('radius', $data ?? [], null);
        $this->setIfExists('geo_location', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], '');
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
        if ($this->container['search_for_location_type'] === null) {
            $invalidProperties[] = "'search_for_location_type' can't be null";
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
     * Gets search_for_location_type
     *
     * @return \Brixion\Kolibri\Model\SearchForLocationType
     */
    public function getSearchForLocationType()
    {
        return $this->container['search_for_location_type'];
    }

    /**
     * Sets search_for_location_type
     *
     * @param \Brixion\Kolibri\Model\SearchForLocationType $search_for_location_type search_for_location_type
     *
     * @return self
     */
    public function setSearchForLocationType($search_for_location_type)
    {
        if (is_null($search_for_location_type)) {
            throw new \InvalidArgumentException('non-nullable search_for_location_type cannot be null');
        }
        $this->container['search_for_location_type'] = $search_for_location_type;

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
     * Gets radius
     *
     * @return int|null
     */
    public function getRadius()
    {
        return $this->container['radius'];
    }

    /**
     * Sets radius
     *
     * @param int|null $radius radius
     *
     * @return self
     */
    public function setRadius($radius)
    {
        if (is_null($radius)) {
            throw new \InvalidArgumentException('non-nullable radius cannot be null');
        }
        $this->container['radius'] = $radius;

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
