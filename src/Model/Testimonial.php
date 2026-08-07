<?php

declare(strict_types=1);

/**
 * Testimonial - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * Testimonial.
 * @implements \ArrayAccess<string, mixed>
 */
class Testimonial implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'Testimonial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'date_time_off_market' => '\DateTime',
        'date_time_on_market' => '\DateTime',
        'is_for_rent' => 'bool',
        'is_for_sale' => 'bool',
        'listing_photo' => '\Brixion\Kolibri\Model\PhotoBlob',
        'show_from' => '\DateTime',
        'show_nr_of_days_on_market' => 'bool',
        'show_until' => '\DateTime',
        'testimonial_photo' => '\Brixion\Kolibri\Model\PhotoBlob',
        'i_list' => '\Brixion\Kolibri\Model\TestimonialTranslation[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'date_time_off_market' => 'date-time',
        'date_time_on_market' => 'date-time',
        'is_for_rent' => null,
        'is_for_sale' => null,
        'listing_photo' => null,
        'show_from' => 'date-time',
        'show_nr_of_days_on_market' => null,
        'show_until' => 'date-time',
        'testimonial_photo' => null,
        'i_list' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'date_time_off_market' => false,
        'date_time_on_market' => false,
        'is_for_rent' => false,
        'is_for_sale' => false,
        'listing_photo' => false,
        'show_from' => false,
        'show_nr_of_days_on_market' => false,
        'show_until' => false,
        'testimonial_photo' => false,
        'i_list' => false,
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
        'date_time_off_market' => 'dateTimeOffMarket',
        'date_time_on_market' => 'dateTimeOnMarket',
        'is_for_rent' => 'isForRent',
        'is_for_sale' => 'isForSale',
        'listing_photo' => 'listingPhoto',
        'show_from' => 'showFrom',
        'show_nr_of_days_on_market' => 'showNrOfDaysOnMarket',
        'show_until' => 'showUntil',
        'testimonial_photo' => 'testimonialPhoto',
        'i_list' => 'iList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_time_off_market' => 'setDateTimeOffMarket',
        'date_time_on_market' => 'setDateTimeOnMarket',
        'is_for_rent' => 'setIsForRent',
        'is_for_sale' => 'setIsForSale',
        'listing_photo' => 'setListingPhoto',
        'show_from' => 'setShowFrom',
        'show_nr_of_days_on_market' => 'setShowNrOfDaysOnMarket',
        'show_until' => 'setShowUntil',
        'testimonial_photo' => 'setTestimonialPhoto',
        'i_list' => 'setIList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_time_off_market' => 'getDateTimeOffMarket',
        'date_time_on_market' => 'getDateTimeOnMarket',
        'is_for_rent' => 'getIsForRent',
        'is_for_sale' => 'getIsForSale',
        'listing_photo' => 'getListingPhoto',
        'show_from' => 'getShowFrom',
        'show_nr_of_days_on_market' => 'getShowNrOfDaysOnMarket',
        'show_until' => 'getShowUntil',
        'testimonial_photo' => 'getTestimonialPhoto',
        'i_list' => 'getIList',
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
        $this->setIfExists('date_time_off_market', $data ?? [], null);
        $this->setIfExists('date_time_on_market', $data ?? [], null);
        $this->setIfExists('is_for_rent', $data ?? [], null);
        $this->setIfExists('is_for_sale', $data ?? [], null);
        $this->setIfExists('listing_photo', $data ?? [], null);
        $this->setIfExists('show_from', $data ?? [], null);
        $this->setIfExists('show_nr_of_days_on_market', $data ?? [], null);
        $this->setIfExists('show_until', $data ?? [], null);
        $this->setIfExists('testimonial_photo', $data ?? [], null);
        $this->setIfExists('i_list', $data ?? [], null);
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

        if ($this->container['is_for_rent'] === null) {
            $invalidProperties[] = "'is_for_rent' can't be null";
        }
        if ($this->container['is_for_sale'] === null) {
            $invalidProperties[] = "'is_for_sale' can't be null";
        }
        if ($this->container['show_nr_of_days_on_market'] === null) {
            $invalidProperties[] = "'show_nr_of_days_on_market' can't be null";
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
     * Gets date_time_off_market
     *
     * @return \DateTime|null
     */
    public function getDateTimeOffMarket()
    {
        return $this->container['date_time_off_market'];
    }

    /**
     * Sets date_time_off_market
     *
     * @param \DateTime|null $date_time_off_market date_time_off_market
     *
     * @return self
     */
    public function setDateTimeOffMarket($date_time_off_market)
    {
        if (is_null($date_time_off_market)) {
            throw new \InvalidArgumentException('non-nullable date_time_off_market cannot be null');
        }
        $this->container['date_time_off_market'] = $date_time_off_market;

        return $this;
    }

    /**
     * Gets date_time_on_market
     *
     * @return \DateTime|null
     */
    public function getDateTimeOnMarket()
    {
        return $this->container['date_time_on_market'];
    }

    /**
     * Sets date_time_on_market
     *
     * @param \DateTime|null $date_time_on_market date_time_on_market
     *
     * @return self
     */
    public function setDateTimeOnMarket($date_time_on_market)
    {
        if (is_null($date_time_on_market)) {
            throw new \InvalidArgumentException('non-nullable date_time_on_market cannot be null');
        }
        $this->container['date_time_on_market'] = $date_time_on_market;

        return $this;
    }

    /**
     * Gets is_for_rent
     *
     * @return bool
     */
    public function getIsForRent()
    {
        return $this->container['is_for_rent'];
    }

    /**
     * Sets is_for_rent
     *
     * @param bool $is_for_rent is_for_rent
     *
     * @return self
     */
    public function setIsForRent($is_for_rent)
    {
        if (is_null($is_for_rent)) {
            throw new \InvalidArgumentException('non-nullable is_for_rent cannot be null');
        }
        $this->container['is_for_rent'] = $is_for_rent;

        return $this;
    }

    /**
     * Gets is_for_sale
     *
     * @return bool
     */
    public function getIsForSale()
    {
        return $this->container['is_for_sale'];
    }

    /**
     * Sets is_for_sale
     *
     * @param bool $is_for_sale is_for_sale
     *
     * @return self
     */
    public function setIsForSale($is_for_sale)
    {
        if (is_null($is_for_sale)) {
            throw new \InvalidArgumentException('non-nullable is_for_sale cannot be null');
        }
        $this->container['is_for_sale'] = $is_for_sale;

        return $this;
    }

    /**
     * Gets listing_photo
     *
     * @return \Brixion\Kolibri\Model\PhotoBlob|null
     */
    public function getListingPhoto()
    {
        return $this->container['listing_photo'];
    }

    /**
     * Sets listing_photo
     *
     * @param \Brixion\Kolibri\Model\PhotoBlob|null $listing_photo listing_photo
     *
     * @return self
     */
    public function setListingPhoto($listing_photo)
    {
        if (is_null($listing_photo)) {
            throw new \InvalidArgumentException('non-nullable listing_photo cannot be null');
        }
        $this->container['listing_photo'] = $listing_photo;

        return $this;
    }

    /**
     * Gets show_from
     *
     * @return \DateTime|null
     */
    public function getShowFrom()
    {
        return $this->container['show_from'];
    }

    /**
     * Sets show_from
     *
     * @param \DateTime|null $show_from show_from
     *
     * @return self
     */
    public function setShowFrom($show_from)
    {
        if (is_null($show_from)) {
            throw new \InvalidArgumentException('non-nullable show_from cannot be null');
        }
        $this->container['show_from'] = $show_from;

        return $this;
    }

    /**
     * Gets show_nr_of_days_on_market
     *
     * @return bool
     */
    public function getShowNrOfDaysOnMarket()
    {
        return $this->container['show_nr_of_days_on_market'];
    }

    /**
     * Sets show_nr_of_days_on_market
     *
     * @param bool $show_nr_of_days_on_market show_nr_of_days_on_market
     *
     * @return self
     */
    public function setShowNrOfDaysOnMarket($show_nr_of_days_on_market)
    {
        if (is_null($show_nr_of_days_on_market)) {
            throw new \InvalidArgumentException('non-nullable show_nr_of_days_on_market cannot be null');
        }
        $this->container['show_nr_of_days_on_market'] = $show_nr_of_days_on_market;

        return $this;
    }

    /**
     * Gets show_until
     *
     * @return \DateTime|null
     */
    public function getShowUntil()
    {
        return $this->container['show_until'];
    }

    /**
     * Sets show_until
     *
     * @param \DateTime|null $show_until show_until
     *
     * @return self
     */
    public function setShowUntil($show_until)
    {
        if (is_null($show_until)) {
            throw new \InvalidArgumentException('non-nullable show_until cannot be null');
        }
        $this->container['show_until'] = $show_until;

        return $this;
    }

    /**
     * Gets testimonial_photo
     *
     * @return \Brixion\Kolibri\Model\PhotoBlob|null
     */
    public function getTestimonialPhoto()
    {
        return $this->container['testimonial_photo'];
    }

    /**
     * Sets testimonial_photo
     *
     * @param \Brixion\Kolibri\Model\PhotoBlob|null $testimonial_photo testimonial_photo
     *
     * @return self
     */
    public function setTestimonialPhoto($testimonial_photo)
    {
        if (is_null($testimonial_photo)) {
            throw new \InvalidArgumentException('non-nullable testimonial_photo cannot be null');
        }
        $this->container['testimonial_photo'] = $testimonial_photo;

        return $this;
    }

    /**
     * Gets i_list
     *
     * @return \Brixion\Kolibri\Model\TestimonialTranslation[]|null
     */
    public function getIList()
    {
        return $this->container['i_list'];
    }

    /**
     * Sets i_list
     *
     * @param \Brixion\Kolibri\Model\TestimonialTranslation[]|null $i_list i_list
     *
     * @return self
     */
    public function setIList($i_list)
    {
        if (is_null($i_list)) {
            throw new \InvalidArgumentException('non-nullable i_list cannot be null');
        }
        $this->container['i_list'] = $i_list;

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
