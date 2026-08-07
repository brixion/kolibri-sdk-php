<?php

declare(strict_types=1);

/**
 * MatchedPropertySnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * MatchedPropertySnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class MatchedPropertySnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'MatchedPropertySnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'rent_price' => 'float',
        'sale_price' => 'float',
        'is_active' => 'bool',
        'for_sale' => 'bool',
        'for_rent' => 'bool',
        'postal_code' => 'string',
        'country_code' => 'string',
        'assignment_phase' => '\Brixion\Kolibri\Model\AssignmentPhase',
        'availability_status' => '\Brixion\Kolibri\Model\AvailabilityStatus',
        'listing_type' => '\Brixion\Kolibri\Model\ListingType',
        'photo1_url' => 'string',
        'photo2_url' => 'string',
        'photo3_url' => 'string',
        'sale_condition' => '\Brixion\Kolibri\Model\SaleCondition',
        'display_name' => 'string',
        'origin_type' => '\Brixion\Kolibri\Model\OriginType',
        'id' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'rent_price' => 'decimal',
        'sale_price' => 'decimal',
        'is_active' => null,
        'for_sale' => null,
        'for_rent' => null,
        'postal_code' => null,
        'country_code' => null,
        'assignment_phase' => null,
        'availability_status' => null,
        'listing_type' => null,
        'photo1_url' => null,
        'photo2_url' => null,
        'photo3_url' => null,
        'sale_condition' => null,
        'display_name' => null,
        'origin_type' => null,
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'rent_price' => false,
        'sale_price' => false,
        'is_active' => false,
        'for_sale' => false,
        'for_rent' => false,
        'postal_code' => false,
        'country_code' => false,
        'assignment_phase' => false,
        'availability_status' => false,
        'listing_type' => false,
        'photo1_url' => false,
        'photo2_url' => false,
        'photo3_url' => false,
        'sale_condition' => false,
        'display_name' => false,
        'origin_type' => false,
        'id' => false,
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
        'rent_price' => 'rentPrice',
        'sale_price' => 'salePrice',
        'is_active' => 'isActive',
        'for_sale' => 'forSale',
        'for_rent' => 'forRent',
        'postal_code' => 'postalCode',
        'country_code' => 'countryCode',
        'assignment_phase' => 'assignmentPhase',
        'availability_status' => 'availabilityStatus',
        'listing_type' => 'listingType',
        'photo1_url' => 'photo1Url',
        'photo2_url' => 'photo2Url',
        'photo3_url' => 'photo3Url',
        'sale_condition' => 'saleCondition',
        'display_name' => 'displayName',
        'origin_type' => 'originType',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rent_price' => 'setRentPrice',
        'sale_price' => 'setSalePrice',
        'is_active' => 'setIsActive',
        'for_sale' => 'setForSale',
        'for_rent' => 'setForRent',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode',
        'assignment_phase' => 'setAssignmentPhase',
        'availability_status' => 'setAvailabilityStatus',
        'listing_type' => 'setListingType',
        'photo1_url' => 'setPhoto1Url',
        'photo2_url' => 'setPhoto2Url',
        'photo3_url' => 'setPhoto3Url',
        'sale_condition' => 'setSaleCondition',
        'display_name' => 'setDisplayName',
        'origin_type' => 'setOriginType',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rent_price' => 'getRentPrice',
        'sale_price' => 'getSalePrice',
        'is_active' => 'getIsActive',
        'for_sale' => 'getForSale',
        'for_rent' => 'getForRent',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode',
        'assignment_phase' => 'getAssignmentPhase',
        'availability_status' => 'getAvailabilityStatus',
        'listing_type' => 'getListingType',
        'photo1_url' => 'getPhoto1Url',
        'photo2_url' => 'getPhoto2Url',
        'photo3_url' => 'getPhoto3Url',
        'sale_condition' => 'getSaleCondition',
        'display_name' => 'getDisplayName',
        'origin_type' => 'getOriginType',
        'id' => 'getId',
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
        $this->setIfExists('rent_price', $data ?? [], null);
        $this->setIfExists('sale_price', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('for_sale', $data ?? [], null);
        $this->setIfExists('for_rent', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('assignment_phase', $data ?? [], null);
        $this->setIfExists('availability_status', $data ?? [], null);
        $this->setIfExists('listing_type', $data ?? [], null);
        $this->setIfExists('photo1_url', $data ?? [], null);
        $this->setIfExists('photo2_url', $data ?? [], null);
        $this->setIfExists('photo3_url', $data ?? [], null);
        $this->setIfExists('sale_condition', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('origin_type', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
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

        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['for_sale'] === null) {
            $invalidProperties[] = "'for_sale' can't be null";
        }
        if ($this->container['for_rent'] === null) {
            $invalidProperties[] = "'for_rent' can't be null";
        }
        if ($this->container['assignment_phase'] === null) {
            $invalidProperties[] = "'assignment_phase' can't be null";
        }
        if ($this->container['availability_status'] === null) {
            $invalidProperties[] = "'availability_status' can't be null";
        }
        if ($this->container['origin_type'] === null) {
            $invalidProperties[] = "'origin_type' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ((mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
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
     * Gets rent_price
     *
     * @return float|null
     */
    public function getRentPrice()
    {
        return $this->container['rent_price'];
    }

    /**
     * Sets rent_price
     *
     * @param float|null $rent_price rent_price
     *
     * @return self
     */
    public function setRentPrice($rent_price)
    {
        if (is_null($rent_price)) {
            throw new \InvalidArgumentException('non-nullable rent_price cannot be null');
        }
        $this->container['rent_price'] = $rent_price;

        return $this;
    }

    /**
     * Gets sale_price
     *
     * @return float|null
     */
    public function getSalePrice()
    {
        return $this->container['sale_price'];
    }

    /**
     * Sets sale_price
     *
     * @param float|null $sale_price sale_price
     *
     * @return self
     */
    public function setSalePrice($sale_price)
    {
        if (is_null($sale_price)) {
            throw new \InvalidArgumentException('non-nullable sale_price cannot be null');
        }
        $this->container['sale_price'] = $sale_price;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets for_sale
     *
     * @return bool
     */
    public function getForSale()
    {
        return $this->container['for_sale'];
    }

    /**
     * Sets for_sale
     *
     * @param bool $for_sale for_sale
     *
     * @return self
     */
    public function setForSale($for_sale)
    {
        if (is_null($for_sale)) {
            throw new \InvalidArgumentException('non-nullable for_sale cannot be null');
        }
        $this->container['for_sale'] = $for_sale;

        return $this;
    }

    /**
     * Gets for_rent
     *
     * @return bool
     */
    public function getForRent()
    {
        return $this->container['for_rent'];
    }

    /**
     * Sets for_rent
     *
     * @param bool $for_rent for_rent
     *
     * @return self
     */
    public function setForRent($for_rent)
    {
        if (is_null($for_rent)) {
            throw new \InvalidArgumentException('non-nullable for_rent cannot be null');
        }
        $this->container['for_rent'] = $for_rent;

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
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets assignment_phase
     *
     * @return \Brixion\Kolibri\Model\AssignmentPhase
     */
    public function getAssignmentPhase()
    {
        return $this->container['assignment_phase'];
    }

    /**
     * Sets assignment_phase
     *
     * @param \Brixion\Kolibri\Model\AssignmentPhase $assignment_phase Assignment phase ('Concept', 'Initiated' or 'Completed').
     *
     * @return self
     */
    public function setAssignmentPhase($assignment_phase)
    {
        if (is_null($assignment_phase)) {
            throw new \InvalidArgumentException('non-nullable assignment_phase cannot be null');
        }
        $this->container['assignment_phase'] = $assignment_phase;

        return $this;
    }

    /**
     * Gets availability_status
     *
     * @return \Brixion\Kolibri\Model\AvailabilityStatus
     */
    public function getAvailabilityStatus()
    {
        return $this->container['availability_status'];
    }

    /**
     * Sets availability_status
     *
     * @param \Brixion\Kolibri\Model\AvailabilityStatus $availability_status availability_status
     *
     * @return self
     */
    public function setAvailabilityStatus($availability_status)
    {
        if (is_null($availability_status)) {
            throw new \InvalidArgumentException('non-nullable availability_status cannot be null');
        }
        $this->container['availability_status'] = $availability_status;

        return $this;
    }

    /**
     * Gets listing_type
     *
     * @return \Brixion\Kolibri\Model\ListingType|null
     */
    public function getListingType()
    {
        return $this->container['listing_type'];
    }

    /**
     * Sets listing_type
     *
     * @param \Brixion\Kolibri\Model\ListingType|null $listing_type listing_type
     *
     * @return self
     */
    public function setListingType($listing_type)
    {
        if (is_null($listing_type)) {
            throw new \InvalidArgumentException('non-nullable listing_type cannot be null');
        }
        $this->container['listing_type'] = $listing_type;

        return $this;
    }

    /**
     * Gets photo1_url
     *
     * @return string|null
     */
    public function getPhoto1Url()
    {
        return $this->container['photo1_url'];
    }

    /**
     * Sets photo1_url
     *
     * @param string|null $photo1_url photo1_url
     *
     * @return self
     */
    public function setPhoto1Url($photo1_url)
    {
        if (is_null($photo1_url)) {
            throw new \InvalidArgumentException('non-nullable photo1_url cannot be null');
        }
        $this->container['photo1_url'] = $photo1_url;

        return $this;
    }

    /**
     * Gets photo2_url
     *
     * @return string|null
     */
    public function getPhoto2Url()
    {
        return $this->container['photo2_url'];
    }

    /**
     * Sets photo2_url
     *
     * @param string|null $photo2_url photo2_url
     *
     * @return self
     */
    public function setPhoto2Url($photo2_url)
    {
        if (is_null($photo2_url)) {
            throw new \InvalidArgumentException('non-nullable photo2_url cannot be null');
        }
        $this->container['photo2_url'] = $photo2_url;

        return $this;
    }

    /**
     * Gets photo3_url
     *
     * @return string|null
     */
    public function getPhoto3Url()
    {
        return $this->container['photo3_url'];
    }

    /**
     * Sets photo3_url
     *
     * @param string|null $photo3_url photo3_url
     *
     * @return self
     */
    public function setPhoto3Url($photo3_url)
    {
        if (is_null($photo3_url)) {
            throw new \InvalidArgumentException('non-nullable photo3_url cannot be null');
        }
        $this->container['photo3_url'] = $photo3_url;

        return $this;
    }

    /**
     * Gets sale_condition
     *
     * @return \Brixion\Kolibri\Model\SaleCondition|null
     */
    public function getSaleCondition()
    {
        return $this->container['sale_condition'];
    }

    /**
     * Sets sale_condition
     *
     * @param \Brixion\Kolibri\Model\SaleCondition|null $sale_condition sale_condition
     *
     * @return self
     */
    public function setSaleCondition($sale_condition)
    {
        if (is_null($sale_condition)) {
            throw new \InvalidArgumentException('non-nullable sale_condition cannot be null');
        }
        $this->container['sale_condition'] = $sale_condition;

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
     * Gets origin_type
     *
     * @return \Brixion\Kolibri\Model\OriginType
     */
    public function getOriginType()
    {
        return $this->container['origin_type'];
    }

    /**
     * Sets origin_type
     *
     * @param \Brixion\Kolibri\Model\OriginType $origin_type origin_type
     *
     * @return self
     */
    public function setOriginType($origin_type)
    {
        if (is_null($origin_type)) {
            throw new \InvalidArgumentException('non-nullable origin_type cannot be null');
        }
        $this->container['origin_type'] = $origin_type;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        if ((mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling MatchedPropertySnapShot., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

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
