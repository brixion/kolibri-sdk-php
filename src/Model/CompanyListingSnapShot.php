<?php

declare(strict_types=1);

/**
 * CompanyListingSnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CompanyListingSnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyListingSnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CompanyListingSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'is_active' => 'bool',
        'linked_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'real_estate_agency_id' => 'string',
        'situated_type' => '\Brixion\Kolibri\Model\SituatedType',
        'use_surface' => 'float',
        'room_number' => 'int',
        'bedroom_number' => 'int',
        'parcel_surface' => 'float',
        'content' => 'int',
        'has_garden' => 'bool',
        'has_garage' => 'bool',
        'house_type' => '\Brixion\Kolibri\Model\HouseType',
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
        'is_active' => null,
        'linked_assignment' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'real_estate_agency_id' => 'guid',
        'situated_type' => null,
        'use_surface' => 'decimal',
        'room_number' => 'int32',
        'bedroom_number' => 'int32',
        'parcel_surface' => 'decimal',
        'content' => 'int32',
        'has_garden' => null,
        'has_garage' => null,
        'house_type' => null,
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'is_active' => false,
        'linked_assignment' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'real_estate_agency_id' => false,
        'situated_type' => false,
        'use_surface' => false,
        'room_number' => false,
        'bedroom_number' => false,
        'parcel_surface' => false,
        'content' => false,
        'has_garden' => false,
        'has_garage' => false,
        'house_type' => false,
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
        'is_active' => 'isActive',
        'linked_assignment' => 'linkedAssignment',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'situated_type' => 'situatedType',
        'use_surface' => 'useSurface',
        'room_number' => 'roomNumber',
        'bedroom_number' => 'bedroomNumber',
        'parcel_surface' => 'parcelSurface',
        'content' => 'content',
        'has_garden' => 'hasGarden',
        'has_garage' => 'hasGarage',
        'house_type' => 'houseType',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_active' => 'setIsActive',
        'linked_assignment' => 'setLinkedAssignment',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'situated_type' => 'setSituatedType',
        'use_surface' => 'setUseSurface',
        'room_number' => 'setRoomNumber',
        'bedroom_number' => 'setBedroomNumber',
        'parcel_surface' => 'setParcelSurface',
        'content' => 'setContent',
        'has_garden' => 'setHasGarden',
        'has_garage' => 'setHasGarage',
        'house_type' => 'setHouseType',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_active' => 'getIsActive',
        'linked_assignment' => 'getLinkedAssignment',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'situated_type' => 'getSituatedType',
        'use_surface' => 'getUseSurface',
        'room_number' => 'getRoomNumber',
        'bedroom_number' => 'getBedroomNumber',
        'parcel_surface' => 'getParcelSurface',
        'content' => 'getContent',
        'has_garden' => 'getHasGarden',
        'has_garage' => 'getHasGarage',
        'house_type' => 'getHouseType',
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
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('linked_assignment', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('real_estate_agency_id', $data ?? [], null);
        $this->setIfExists('situated_type', $data ?? [], null);
        $this->setIfExists('use_surface', $data ?? [], null);
        $this->setIfExists('room_number', $data ?? [], null);
        $this->setIfExists('bedroom_number', $data ?? [], null);
        $this->setIfExists('parcel_surface', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('has_garden', $data ?? [], null);
        $this->setIfExists('has_garage', $data ?? [], null);
        $this->setIfExists('house_type', $data ?? [], null);
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
        if ($this->container['real_estate_agency_id'] === null) {
            $invalidProperties[] = "'real_estate_agency_id' can't be null";
        }
        if ($this->container['has_garden'] === null) {
            $invalidProperties[] = "'has_garden' can't be null";
        }
        if ($this->container['has_garage'] === null) {
            $invalidProperties[] = "'has_garage' can't be null";
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
     * Gets linked_assignment
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment|null
     */
    public function getLinkedAssignment()
    {
        return $this->container['linked_assignment'];
    }

    /**
     * Sets linked_assignment
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment|null $linked_assignment linked_assignment
     *
     * @return self
     */
    public function setLinkedAssignment($linked_assignment)
    {
        if (is_null($linked_assignment)) {
            throw new \InvalidArgumentException('non-nullable linked_assignment cannot be null');
        }
        $this->container['linked_assignment'] = $linked_assignment;

        return $this;
    }

    /**
     * Gets linked_created_by
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedCreatedBy()
    {
        return $this->container['linked_created_by'];
    }

    /**
     * Sets linked_created_by
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_created_by linked_created_by
     *
     * @return self
     */
    public function setLinkedCreatedBy($linked_created_by)
    {
        if (is_null($linked_created_by)) {
            throw new \InvalidArgumentException('non-nullable linked_created_by cannot be null');
        }
        $this->container['linked_created_by'] = $linked_created_by;

        return $this;
    }

    /**
     * Gets linked_modified_by
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedModifiedBy()
    {
        return $this->container['linked_modified_by'];
    }

    /**
     * Sets linked_modified_by
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_modified_by linked_modified_by
     *
     * @return self
     */
    public function setLinkedModifiedBy($linked_modified_by)
    {
        if (is_null($linked_modified_by)) {
            throw new \InvalidArgumentException('non-nullable linked_modified_by cannot be null');
        }
        $this->container['linked_modified_by'] = $linked_modified_by;

        return $this;
    }

    /**
     * Gets real_estate_agency_id
     *
     * @return string
     */
    public function getRealEstateAgencyId()
    {
        return $this->container['real_estate_agency_id'];
    }

    /**
     * Sets real_estate_agency_id
     *
     * @param string $real_estate_agency_id real_estate_agency_id
     *
     * @return self
     */
    public function setRealEstateAgencyId($real_estate_agency_id)
    {
        if (is_null($real_estate_agency_id)) {
            throw new \InvalidArgumentException('non-nullable real_estate_agency_id cannot be null');
        }
        $this->container['real_estate_agency_id'] = $real_estate_agency_id;

        return $this;
    }

    /**
     * Gets situated_type
     *
     * @return \Brixion\Kolibri\Model\SituatedType|null
     */
    public function getSituatedType()
    {
        return $this->container['situated_type'];
    }

    /**
     * Sets situated_type
     *
     * @param \Brixion\Kolibri\Model\SituatedType|null $situated_type situated_type
     *
     * @return self
     */
    public function setSituatedType($situated_type)
    {
        if (is_null($situated_type)) {
            throw new \InvalidArgumentException('non-nullable situated_type cannot be null');
        }
        $this->container['situated_type'] = $situated_type;

        return $this;
    }

    /**
     * Gets use_surface
     *
     * @return float|null
     */
    public function getUseSurface()
    {
        return $this->container['use_surface'];
    }

    /**
     * Sets use_surface
     *
     * @param float|null $use_surface use_surface
     *
     * @return self
     */
    public function setUseSurface($use_surface)
    {
        if (is_null($use_surface)) {
            throw new \InvalidArgumentException('non-nullable use_surface cannot be null');
        }
        $this->container['use_surface'] = $use_surface;

        return $this;
    }

    /**
     * Gets room_number
     *
     * @return int|null
     */
    public function getRoomNumber()
    {
        return $this->container['room_number'];
    }

    /**
     * Sets room_number
     *
     * @param int|null $room_number room_number
     *
     * @return self
     */
    public function setRoomNumber($room_number)
    {
        if (is_null($room_number)) {
            throw new \InvalidArgumentException('non-nullable room_number cannot be null');
        }
        $this->container['room_number'] = $room_number;

        return $this;
    }

    /**
     * Gets bedroom_number
     *
     * @return int|null
     */
    public function getBedroomNumber()
    {
        return $this->container['bedroom_number'];
    }

    /**
     * Sets bedroom_number
     *
     * @param int|null $bedroom_number bedroom_number
     *
     * @return self
     */
    public function setBedroomNumber($bedroom_number)
    {
        if (is_null($bedroom_number)) {
            throw new \InvalidArgumentException('non-nullable bedroom_number cannot be null');
        }
        $this->container['bedroom_number'] = $bedroom_number;

        return $this;
    }

    /**
     * Gets parcel_surface
     *
     * @return float|null
     */
    public function getParcelSurface()
    {
        return $this->container['parcel_surface'];
    }

    /**
     * Sets parcel_surface
     *
     * @param float|null $parcel_surface parcel_surface
     *
     * @return self
     */
    public function setParcelSurface($parcel_surface)
    {
        if (is_null($parcel_surface)) {
            throw new \InvalidArgumentException('non-nullable parcel_surface cannot be null');
        }
        $this->container['parcel_surface'] = $parcel_surface;

        return $this;
    }

    /**
     * Gets content
     *
     * @return int|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param int|null $content content
     *
     * @return self
     */
    public function setContent($content)
    {
        if (is_null($content)) {
            throw new \InvalidArgumentException('non-nullable content cannot be null');
        }
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets has_garden
     *
     * @return bool
     */
    public function getHasGarden()
    {
        return $this->container['has_garden'];
    }

    /**
     * Sets has_garden
     *
     * @param bool $has_garden has_garden
     *
     * @return self
     */
    public function setHasGarden($has_garden)
    {
        if (is_null($has_garden)) {
            throw new \InvalidArgumentException('non-nullable has_garden cannot be null');
        }
        $this->container['has_garden'] = $has_garden;

        return $this;
    }

    /**
     * Gets has_garage
     *
     * @return bool
     */
    public function getHasGarage()
    {
        return $this->container['has_garage'];
    }

    /**
     * Sets has_garage
     *
     * @param bool $has_garage has_garage
     *
     * @return self
     */
    public function setHasGarage($has_garage)
    {
        if (is_null($has_garage)) {
            throw new \InvalidArgumentException('non-nullable has_garage cannot be null');
        }
        $this->container['has_garage'] = $has_garage;

        return $this;
    }

    /**
     * Gets house_type
     *
     * @return \Brixion\Kolibri\Model\HouseType|null
     */
    public function getHouseType()
    {
        return $this->container['house_type'];
    }

    /**
     * Sets house_type
     *
     * @param \Brixion\Kolibri\Model\HouseType|null $house_type house_type
     *
     * @return self
     */
    public function setHouseType($house_type)
    {
        if (is_null($house_type)) {
            throw new \InvalidArgumentException('non-nullable house_type cannot be null');
        }
        $this->container['house_type'] = $house_type;

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
            throw new \InvalidArgumentException('invalid length for $id when calling CompanyListingSnapShot., must be bigger than or equal to 1.');
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
