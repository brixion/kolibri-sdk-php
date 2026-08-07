<?php

declare(strict_types=1);

/**
 * LinkedAssignment - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * LinkedAssignment.
 * @implements \ArrayAccess<string, mixed>
 */
class LinkedAssignment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'LinkedAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'assignment_phase' => '\Brixion\Kolibri\Model\AssignmentPhase',
        'availability_status' => '\Brixion\Kolibri\Model\AvailabilityStatus',
        'country_code' => 'string',
        'display_name' => 'string',
        'for_rent' => 'bool',
        'for_sale' => 'bool',
        'has_cadastres' => 'bool',
        'key_note' => 'string',
        'key_nr' => 'int',
        'listing_type' => '\Brixion\Kolibri\Model\ListingType',
        'locality' => 'string',
        'photo1_url' => 'string',
        'postal_code' => 'string',
        'public_reference' => 'string',
        'real_estate_group' => '\Brixion\Kolibri\Model\RealEstateGroup',
        'rent_condition' => '\Brixion\Kolibri\Model\RentCondition',
        'rent_price' => 'float',
        'sale_condition' => '\Brixion\Kolibri\Model\SaleCondition',
        'sale_price' => 'float',
        'street_name_and_number' => 'string',
        'type_of_assignment' => '\Brixion\Kolibri\Model\AssignmentType',
        'is_cancelled' => 'bool',
        'is_active' => 'bool',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
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
        'assignment_phase' => null,
        'availability_status' => null,
        'country_code' => null,
        'display_name' => null,
        'for_rent' => null,
        'for_sale' => null,
        'has_cadastres' => null,
        'key_note' => null,
        'key_nr' => 'int32',
        'listing_type' => null,
        'locality' => null,
        'photo1_url' => null,
        'postal_code' => null,
        'public_reference' => null,
        'real_estate_group' => null,
        'rent_condition' => null,
        'rent_price' => 'decimal',
        'sale_condition' => null,
        'sale_price' => 'decimal',
        'street_name_and_number' => null,
        'type_of_assignment' => null,
        'is_cancelled' => null,
        'is_active' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'assignment_phase' => false,
        'availability_status' => false,
        'country_code' => false,
        'display_name' => false,
        'for_rent' => false,
        'for_sale' => false,
        'has_cadastres' => false,
        'key_note' => false,
        'key_nr' => false,
        'listing_type' => false,
        'locality' => false,
        'photo1_url' => false,
        'postal_code' => false,
        'public_reference' => false,
        'real_estate_group' => false,
        'rent_condition' => false,
        'rent_price' => false,
        'sale_condition' => false,
        'sale_price' => false,
        'street_name_and_number' => false,
        'type_of_assignment' => false,
        'is_cancelled' => false,
        'is_active' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
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
        'assignment_phase' => 'assignmentPhase',
        'availability_status' => 'availabilityStatus',
        'country_code' => 'countryCode',
        'display_name' => 'displayName',
        'for_rent' => 'forRent',
        'for_sale' => 'forSale',
        'has_cadastres' => 'hasCadastres',
        'key_note' => 'keyNote',
        'key_nr' => 'keyNr',
        'listing_type' => 'listingType',
        'locality' => 'locality',
        'photo1_url' => 'photo1Url',
        'postal_code' => 'postalCode',
        'public_reference' => 'publicReference',
        'real_estate_group' => 'realEstateGroup',
        'rent_condition' => 'rentCondition',
        'rent_price' => 'rentPrice',
        'sale_condition' => 'saleCondition',
        'sale_price' => 'salePrice',
        'street_name_and_number' => 'streetNameAndNumber',
        'type_of_assignment' => 'typeOfAssignment',
        'is_cancelled' => 'isCancelled',
        'is_active' => 'isActive',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assignment_phase' => 'setAssignmentPhase',
        'availability_status' => 'setAvailabilityStatus',
        'country_code' => 'setCountryCode',
        'display_name' => 'setDisplayName',
        'for_rent' => 'setForRent',
        'for_sale' => 'setForSale',
        'has_cadastres' => 'setHasCadastres',
        'key_note' => 'setKeyNote',
        'key_nr' => 'setKeyNr',
        'listing_type' => 'setListingType',
        'locality' => 'setLocality',
        'photo1_url' => 'setPhoto1Url',
        'postal_code' => 'setPostalCode',
        'public_reference' => 'setPublicReference',
        'real_estate_group' => 'setRealEstateGroup',
        'rent_condition' => 'setRentCondition',
        'rent_price' => 'setRentPrice',
        'sale_condition' => 'setSaleCondition',
        'sale_price' => 'setSalePrice',
        'street_name_and_number' => 'setStreetNameAndNumber',
        'type_of_assignment' => 'setTypeOfAssignment',
        'is_cancelled' => 'setIsCancelled',
        'is_active' => 'setIsActive',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assignment_phase' => 'getAssignmentPhase',
        'availability_status' => 'getAvailabilityStatus',
        'country_code' => 'getCountryCode',
        'display_name' => 'getDisplayName',
        'for_rent' => 'getForRent',
        'for_sale' => 'getForSale',
        'has_cadastres' => 'getHasCadastres',
        'key_note' => 'getKeyNote',
        'key_nr' => 'getKeyNr',
        'listing_type' => 'getListingType',
        'locality' => 'getLocality',
        'photo1_url' => 'getPhoto1Url',
        'postal_code' => 'getPostalCode',
        'public_reference' => 'getPublicReference',
        'real_estate_group' => 'getRealEstateGroup',
        'rent_condition' => 'getRentCondition',
        'rent_price' => 'getRentPrice',
        'sale_condition' => 'getSaleCondition',
        'sale_price' => 'getSalePrice',
        'street_name_and_number' => 'getStreetNameAndNumber',
        'type_of_assignment' => 'getTypeOfAssignment',
        'is_cancelled' => 'getIsCancelled',
        'is_active' => 'getIsActive',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
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
        $this->setIfExists('assignment_phase', $data ?? [], null);
        $this->setIfExists('availability_status', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('for_rent', $data ?? [], null);
        $this->setIfExists('for_sale', $data ?? [], null);
        $this->setIfExists('has_cadastres', $data ?? [], null);
        $this->setIfExists('key_note', $data ?? [], null);
        $this->setIfExists('key_nr', $data ?? [], null);
        $this->setIfExists('listing_type', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('photo1_url', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('public_reference', $data ?? [], null);
        $this->setIfExists('real_estate_group', $data ?? [], null);
        $this->setIfExists('rent_condition', $data ?? [], null);
        $this->setIfExists('rent_price', $data ?? [], null);
        $this->setIfExists('sale_condition', $data ?? [], null);
        $this->setIfExists('sale_price', $data ?? [], null);
        $this->setIfExists('street_name_and_number', $data ?? [], null);
        $this->setIfExists('type_of_assignment', $data ?? [], null);
        $this->setIfExists('is_cancelled', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
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
     * Gets assignment_phase
     *
     * @return \Brixion\Kolibri\Model\AssignmentPhase|null
     */
    public function getAssignmentPhase()
    {
        return $this->container['assignment_phase'];
    }

    /**
     * Sets assignment_phase
     *
     * @param \Brixion\Kolibri\Model\AssignmentPhase|null $assignment_phase Assignment phase ('Concept', 'Initiated' or 'Completed').
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
     * @return \Brixion\Kolibri\Model\AvailabilityStatus|null
     */
    public function getAvailabilityStatus()
    {
        return $this->container['availability_status'];
    }

    /**
     * Sets availability_status
     *
     * @param \Brixion\Kolibri\Model\AvailabilityStatus|null $availability_status availability_status
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
     * Gets for_rent
     *
     * @return bool|null
     */
    public function getForRent()
    {
        return $this->container['for_rent'];
    }

    /**
     * Sets for_rent
     *
     * @param bool|null $for_rent Is this a 'for rent' assignment?
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
     * Gets for_sale
     *
     * @return bool|null
     */
    public function getForSale()
    {
        return $this->container['for_sale'];
    }

    /**
     * Sets for_sale
     *
     * @param bool|null $for_sale Is this a 'for sale' assignment?
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
     * Gets has_cadastres
     *
     * @return bool|null
     */
    public function getHasCadastres()
    {
        return $this->container['has_cadastres'];
    }

    /**
     * Sets has_cadastres
     *
     * @param bool|null $has_cadastres has_cadastres
     *
     * @return self
     */
    public function setHasCadastres($has_cadastres)
    {
        if (is_null($has_cadastres)) {
            throw new \InvalidArgumentException('non-nullable has_cadastres cannot be null');
        }
        $this->container['has_cadastres'] = $has_cadastres;

        return $this;
    }

    /**
     * Gets key_note
     *
     * @return string|null
     */
    public function getKeyNote()
    {
        return $this->container['key_note'];
    }

    /**
     * Sets key_note
     *
     * @param string|null $key_note key_note
     *
     * @return self
     */
    public function setKeyNote($key_note)
    {
        if (is_null($key_note)) {
            throw new \InvalidArgumentException('non-nullable key_note cannot be null');
        }
        $this->container['key_note'] = $key_note;

        return $this;
    }

    /**
     * Gets key_nr
     *
     * @return int|null
     */
    public function getKeyNr()
    {
        return $this->container['key_nr'];
    }

    /**
     * Sets key_nr
     *
     * @param int|null $key_nr key_nr
     *
     * @return self
     */
    public function setKeyNr($key_nr)
    {
        if (is_null($key_nr)) {
            throw new \InvalidArgumentException('non-nullable key_nr cannot be null');
        }
        $this->container['key_nr'] = $key_nr;

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
     * @param \Brixion\Kolibri\Model\ListingType|null $listing_type ListingType (E.g. 'Woonhuis', 'Appartement' or 'Parkeergelegenheid').
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
        $this->container['locality'] = $locality;

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
     * Gets public_reference
     *
     * @return string|null
     */
    public function getPublicReference()
    {
        return $this->container['public_reference'];
    }

    /**
     * Sets public_reference
     *
     * @param string|null $public_reference public_reference
     *
     * @return self
     */
    public function setPublicReference($public_reference)
    {
        if (is_null($public_reference)) {
            throw new \InvalidArgumentException('non-nullable public_reference cannot be null');
        }
        $this->container['public_reference'] = $public_reference;

        return $this;
    }

    /**
     * Gets real_estate_group
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroup|null
     */
    public function getRealEstateGroup()
    {
        return $this->container['real_estate_group'];
    }

    /**
     * Sets real_estate_group
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroup|null $real_estate_group real_estate_group
     *
     * @return self
     */
    public function setRealEstateGroup($real_estate_group)
    {
        if (is_null($real_estate_group)) {
            throw new \InvalidArgumentException('non-nullable real_estate_group cannot be null');
        }
        $this->container['real_estate_group'] = $real_estate_group;

        return $this;
    }

    /**
     * Gets rent_condition
     *
     * @return \Brixion\Kolibri\Model\RentCondition|null
     */
    public function getRentCondition()
    {
        return $this->container['rent_condition'];
    }

    /**
     * Sets rent_condition
     *
     * @param \Brixion\Kolibri\Model\RentCondition|null $rent_condition rent_condition
     *
     * @return self
     */
    public function setRentCondition($rent_condition)
    {
        if (is_null($rent_condition)) {
            throw new \InvalidArgumentException('non-nullable rent_condition cannot be null');
        }
        $this->container['rent_condition'] = $rent_condition;

        return $this;
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
     * Gets street_name_and_number
     *
     * @return string|null
     */
    public function getStreetNameAndNumber()
    {
        return $this->container['street_name_and_number'];
    }

    /**
     * Sets street_name_and_number
     *
     * @param string|null $street_name_and_number street_name_and_number
     *
     * @return self
     */
    public function setStreetNameAndNumber($street_name_and_number)
    {
        if (is_null($street_name_and_number)) {
            throw new \InvalidArgumentException('non-nullable street_name_and_number cannot be null');
        }
        $this->container['street_name_and_number'] = $street_name_and_number;

        return $this;
    }

    /**
     * Gets type_of_assignment
     *
     * @return \Brixion\Kolibri\Model\AssignmentType|null
     */
    public function getTypeOfAssignment()
    {
        return $this->container['type_of_assignment'];
    }

    /**
     * Sets type_of_assignment
     *
     * @param \Brixion\Kolibri\Model\AssignmentType|null $type_of_assignment Like 'Pand', 'ObjectType' or 'Project'.
     *
     * @return self
     */
    public function setTypeOfAssignment($type_of_assignment)
    {
        if (is_null($type_of_assignment)) {
            throw new \InvalidArgumentException('non-nullable type_of_assignment cannot be null');
        }
        $this->container['type_of_assignment'] = $type_of_assignment;

        return $this;
    }

    /**
     * Gets is_cancelled
     *
     * @return bool|null
     */
    public function getIsCancelled()
    {
        return $this->container['is_cancelled'];
    }

    /**
     * Sets is_cancelled
     *
     * @param bool|null $is_cancelled Is Acquisition Assignment cancelled? Only applies to Acquisition Assignments.
     *
     * @return self
     */
    public function setIsCancelled($is_cancelled)
    {
        if (is_null($is_cancelled)) {
            throw new \InvalidArgumentException('non-nullable is_cancelled cannot be null');
        }
        $this->container['is_cancelled'] = $is_cancelled;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
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
     * Gets date_time_created
     *
     * @return \DateTime|null
     */
    public function getDateTimeCreated()
    {
        return $this->container['date_time_created'];
    }

    /**
     * Sets date_time_created
     *
     * @param \DateTime|null $date_time_created date_time_created
     *
     * @return self
     */
    public function setDateTimeCreated($date_time_created)
    {
        if (is_null($date_time_created)) {
            throw new \InvalidArgumentException('non-nullable date_time_created cannot be null');
        }
        $this->container['date_time_created'] = $date_time_created;

        return $this;
    }

    /**
     * Gets date_time_modified
     *
     * @return \DateTime|null
     */
    public function getDateTimeModified()
    {
        return $this->container['date_time_modified'];
    }

    /**
     * Sets date_time_modified
     *
     * @param \DateTime|null $date_time_modified date_time_modified
     *
     * @return self
     */
    public function setDateTimeModified($date_time_modified)
    {
        if (is_null($date_time_modified)) {
            throw new \InvalidArgumentException('non-nullable date_time_modified cannot be null');
        }
        $this->container['date_time_modified'] = $date_time_modified;

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
            throw new \InvalidArgumentException('invalid length for $id when calling LinkedAssignment., must be bigger than or equal to 1.');
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
