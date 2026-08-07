<?php

declare(strict_types=1);

/**
 * UserData - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;

use \ArrayAccess;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * UserData.
 * @implements \ArrayAccess<string, mixed>
 */
class UserData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'UserData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'culture_on_website_visit' => 'string',
        'email_address' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => '\Brixion\Kolibri\Model\Gender',
        'phone_number' => 'string',
        'mobile_phone_number' => 'string',
        'street_name' => 'string',
        'house_number' => 'string',
        'city' => 'string',
        'region' => 'string',
        'postal_code' => 'string',
        'country_iso2_code' => 'string',
        'object_street_name' => 'string',
        'object_house_number' => 'string',
        'object_city' => 'string',
        'day_parts' => '\Brixion\Kolibri\Model\DayPartDayType[]',
        'is_collaboration_assignment' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'culture_on_website_visit' => null,
        'email_address' => null,
        'first_name' => null,
        'last_name' => null,
        'gender' => null,
        'phone_number' => null,
        'mobile_phone_number' => null,
        'street_name' => null,
        'house_number' => null,
        'city' => null,
        'region' => null,
        'postal_code' => null,
        'country_iso2_code' => null,
        'object_street_name' => null,
        'object_house_number' => null,
        'object_city' => null,
        'day_parts' => null,
        'is_collaboration_assignment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'culture_on_website_visit' => false,
        'email_address' => false,
        'first_name' => false,
        'last_name' => false,
        'gender' => false,
        'phone_number' => false,
        'mobile_phone_number' => false,
        'street_name' => false,
        'house_number' => false,
        'city' => false,
        'region' => false,
        'postal_code' => false,
        'country_iso2_code' => false,
        'object_street_name' => false,
        'object_house_number' => false,
        'object_city' => false,
        'day_parts' => false,
        'is_collaboration_assignment' => false
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
        'culture_on_website_visit' => 'cultureOnWebsiteVisit',
        'email_address' => 'emailAddress',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'gender' => 'gender',
        'phone_number' => 'phoneNumber',
        'mobile_phone_number' => 'mobilePhoneNumber',
        'street_name' => 'streetName',
        'house_number' => 'houseNumber',
        'city' => 'city',
        'region' => 'region',
        'postal_code' => 'postalCode',
        'country_iso2_code' => 'countryIso2Code',
        'object_street_name' => 'objectStreetName',
        'object_house_number' => 'objectHouseNumber',
        'object_city' => 'objectCity',
        'day_parts' => 'dayParts',
        'is_collaboration_assignment' => 'isCollaborationAssignment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'culture_on_website_visit' => 'setCultureOnWebsiteVisit',
        'email_address' => 'setEmailAddress',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'gender' => 'setGender',
        'phone_number' => 'setPhoneNumber',
        'mobile_phone_number' => 'setMobilePhoneNumber',
        'street_name' => 'setStreetName',
        'house_number' => 'setHouseNumber',
        'city' => 'setCity',
        'region' => 'setRegion',
        'postal_code' => 'setPostalCode',
        'country_iso2_code' => 'setCountryIso2Code',
        'object_street_name' => 'setObjectStreetName',
        'object_house_number' => 'setObjectHouseNumber',
        'object_city' => 'setObjectCity',
        'day_parts' => 'setDayParts',
        'is_collaboration_assignment' => 'setIsCollaborationAssignment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'culture_on_website_visit' => 'getCultureOnWebsiteVisit',
        'email_address' => 'getEmailAddress',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'gender' => 'getGender',
        'phone_number' => 'getPhoneNumber',
        'mobile_phone_number' => 'getMobilePhoneNumber',
        'street_name' => 'getStreetName',
        'house_number' => 'getHouseNumber',
        'city' => 'getCity',
        'region' => 'getRegion',
        'postal_code' => 'getPostalCode',
        'country_iso2_code' => 'getCountryIso2Code',
        'object_street_name' => 'getObjectStreetName',
        'object_house_number' => 'getObjectHouseNumber',
        'object_city' => 'getObjectCity',
        'day_parts' => 'getDayParts',
        'is_collaboration_assignment' => 'getIsCollaborationAssignment'
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
        $this->setIfExists('culture_on_website_visit', $data ?? [], null);
        $this->setIfExists('email_address', $data ?? [], null);
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('phone_number', $data ?? [], null);
        $this->setIfExists('mobile_phone_number', $data ?? [], null);
        $this->setIfExists('street_name', $data ?? [], null);
        $this->setIfExists('house_number', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('country_iso2_code', $data ?? [], null);
        $this->setIfExists('object_street_name', $data ?? [], null);
        $this->setIfExists('object_house_number', $data ?? [], null);
        $this->setIfExists('object_city', $data ?? [], null);
        $this->setIfExists('day_parts', $data ?? [], null);
        $this->setIfExists('is_collaboration_assignment', $data ?? [], null);
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
     * Gets culture_on_website_visit
     *
     * @return string|null
     */
    public function getCultureOnWebsiteVisit()
    {
        return $this->container['culture_on_website_visit'];
    }

    /**
     * Sets culture_on_website_visit
     *
     * @param string|null $culture_on_website_visit culture_on_website_visit
     *
     * @return self
     */
    public function setCultureOnWebsiteVisit($culture_on_website_visit)
    {
        if (is_null($culture_on_website_visit)) {
            throw new \InvalidArgumentException('non-nullable culture_on_website_visit cannot be null');
        }
        $this->container['culture_on_website_visit'] = $culture_on_website_visit;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address email_address
     *
     * @return self
     */
    public function setEmailAddress($email_address)
    {
        if (is_null($email_address)) {
            throw new \InvalidArgumentException('non-nullable email_address cannot be null');
        }
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name first_name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name last_name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \Brixion\Kolibri\Model\Gender|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Brixion\Kolibri\Model\Gender|null $gender gender
     *
     * @return self
     */
    public function setGender($gender)
    {
        if (is_null($gender)) {
            throw new \InvalidArgumentException('non-nullable gender cannot be null');
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets phone_number
     *
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     *
     * @param string|null $phone_number phone_number
     *
     * @return self
     */
    public function setPhoneNumber($phone_number)
    {
        if (is_null($phone_number)) {
            throw new \InvalidArgumentException('non-nullable phone_number cannot be null');
        }
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets mobile_phone_number
     *
     * @return string|null
     */
    public function getMobilePhoneNumber()
    {
        return $this->container['mobile_phone_number'];
    }

    /**
     * Sets mobile_phone_number
     *
     * @param string|null $mobile_phone_number mobile_phone_number
     *
     * @return self
     */
    public function setMobilePhoneNumber($mobile_phone_number)
    {
        if (is_null($mobile_phone_number)) {
            throw new \InvalidArgumentException('non-nullable mobile_phone_number cannot be null');
        }
        $this->container['mobile_phone_number'] = $mobile_phone_number;

        return $this;
    }

    /**
     * Gets street_name
     *
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->container['street_name'];
    }

    /**
     * Sets street_name
     *
     * @param string|null $street_name street_name
     *
     * @return self
     */
    public function setStreetName($street_name)
    {
        if (is_null($street_name)) {
            throw new \InvalidArgumentException('non-nullable street_name cannot be null');
        }
        $this->container['street_name'] = $street_name;

        return $this;
    }

    /**
     * Gets house_number
     *
     * @return string|null
     */
    public function getHouseNumber()
    {
        return $this->container['house_number'];
    }

    /**
     * Sets house_number
     *
     * @param string|null $house_number house_number
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
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region region
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

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
     * Gets country_iso2_code
     *
     * @return string|null
     */
    public function getCountryIso2Code()
    {
        return $this->container['country_iso2_code'];
    }

    /**
     * Sets country_iso2_code
     *
     * @param string|null $country_iso2_code country_iso2_code
     *
     * @return self
     */
    public function setCountryIso2Code($country_iso2_code)
    {
        if (is_null($country_iso2_code)) {
            throw new \InvalidArgumentException('non-nullable country_iso2_code cannot be null');
        }
        $this->container['country_iso2_code'] = $country_iso2_code;

        return $this;
    }

    /**
     * Gets object_street_name
     *
     * @return string|null
     */
    public function getObjectStreetName()
    {
        return $this->container['object_street_name'];
    }

    /**
     * Sets object_street_name
     *
     * @param string|null $object_street_name object_street_name
     *
     * @return self
     */
    public function setObjectStreetName($object_street_name)
    {
        if (is_null($object_street_name)) {
            throw new \InvalidArgumentException('non-nullable object_street_name cannot be null');
        }
        $this->container['object_street_name'] = $object_street_name;

        return $this;
    }

    /**
     * Gets object_house_number
     *
     * @return string|null
     */
    public function getObjectHouseNumber()
    {
        return $this->container['object_house_number'];
    }

    /**
     * Sets object_house_number
     *
     * @param string|null $object_house_number object_house_number
     *
     * @return self
     */
    public function setObjectHouseNumber($object_house_number)
    {
        if (is_null($object_house_number)) {
            throw new \InvalidArgumentException('non-nullable object_house_number cannot be null');
        }
        $this->container['object_house_number'] = $object_house_number;

        return $this;
    }

    /**
     * Gets object_city
     *
     * @return string|null
     */
    public function getObjectCity()
    {
        return $this->container['object_city'];
    }

    /**
     * Sets object_city
     *
     * @param string|null $object_city object_city
     *
     * @return self
     */
    public function setObjectCity($object_city)
    {
        if (is_null($object_city)) {
            throw new \InvalidArgumentException('non-nullable object_city cannot be null');
        }
        $this->container['object_city'] = $object_city;

        return $this;
    }

    /**
     * Gets day_parts
     *
     * @return \Brixion\Kolibri\Model\DayPartDayType[]|null
     */
    public function getDayParts()
    {
        return $this->container['day_parts'];
    }

    /**
     * Sets day_parts
     *
     * @param \Brixion\Kolibri\Model\DayPartDayType[]|null $day_parts day_parts
     *
     * @return self
     */
    public function setDayParts($day_parts)
    {
        if (is_null($day_parts)) {
            throw new \InvalidArgumentException('non-nullable day_parts cannot be null');
        }
        $this->container['day_parts'] = $day_parts;

        return $this;
    }

    /**
     * Gets is_collaboration_assignment
     *
     * @return bool|null
     */
    public function getIsCollaborationAssignment()
    {
        return $this->container['is_collaboration_assignment'];
    }

    /**
     * Sets is_collaboration_assignment
     *
     * @param bool|null $is_collaboration_assignment is_collaboration_assignment
     *
     * @return self
     */
    public function setIsCollaborationAssignment($is_collaboration_assignment)
    {
        if (is_null($is_collaboration_assignment)) {
            throw new \InvalidArgumentException('non-nullable is_collaboration_assignment cannot be null');
        }
        $this->container['is_collaboration_assignment'] = $is_collaboration_assignment;

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
            JSON_PRETTY_PRINT
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


