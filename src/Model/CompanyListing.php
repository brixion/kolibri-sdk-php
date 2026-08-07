<?php

declare(strict_types=1);

/**
 * CompanyListing - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * CompanyListing.
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyListing implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'CompanyListing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'bedroom_number' => 'int',
        'building_layer_number' => 'int',
        'content' => '\Brixion\Kolibri\Model\Size',
        'garage' => '\Brixion\Kolibri\Model\Garage',
        'garden' => '\Brixion\Kolibri\Model\Garden',
        'house_type' => '\Brixion\Kolibri\Model\HouseType',
        'parcel_surface' => '\Brixion\Kolibri\Model\Size',
        'room_number' => 'int',
        'situated_type' => '\Brixion\Kolibri\Model\SituatedType',
        'use_surface' => '\Brixion\Kolibri\Model\Size',
        'year_of_construction' => '\Brixion\Kolibri\Model\YearOfConstruction',
        'linked_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'object_assignment_id' => 'string',
        'is_main_building' => 'bool',
        'maintenance_inside' => '\Brixion\Kolibri\Model\Maintenance',
        'maintenance_outside' => '\Brixion\Kolibri\Model\Maintenance',
        'date_time_created' => '\DateTime',
        'date_time_modified' => '\DateTime',
        'is_active' => 'bool',
        'is_new' => 'bool',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'real_estate_agency_id' => 'string',
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
        'bedroom_number' => 'int32',
        'building_layer_number' => 'int32',
        'content' => null,
        'garage' => null,
        'garden' => null,
        'house_type' => null,
        'parcel_surface' => null,
        'room_number' => 'int32',
        'situated_type' => null,
        'use_surface' => null,
        'year_of_construction' => null,
        'linked_assignment' => null,
        'object_assignment_id' => 'guid',
        'is_main_building' => null,
        'maintenance_inside' => null,
        'maintenance_outside' => null,
        'date_time_created' => 'date-time',
        'date_time_modified' => 'date-time',
        'is_active' => null,
        'is_new' => null,
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'real_estate_agency_id' => 'guid',
        'id' => 'guid',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'bedroom_number' => false,
        'building_layer_number' => false,
        'content' => false,
        'garage' => false,
        'garden' => false,
        'house_type' => false,
        'parcel_surface' => false,
        'room_number' => false,
        'situated_type' => false,
        'use_surface' => false,
        'year_of_construction' => false,
        'linked_assignment' => false,
        'object_assignment_id' => false,
        'is_main_building' => false,
        'maintenance_inside' => false,
        'maintenance_outside' => false,
        'date_time_created' => false,
        'date_time_modified' => false,
        'is_active' => false,
        'is_new' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'real_estate_agency_id' => false,
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
        'bedroom_number' => 'bedroomNumber',
        'building_layer_number' => 'buildingLayerNumber',
        'content' => 'content',
        'garage' => 'garage',
        'garden' => 'garden',
        'house_type' => 'houseType',
        'parcel_surface' => 'parcelSurface',
        'room_number' => 'roomNumber',
        'situated_type' => 'situatedType',
        'use_surface' => 'useSurface',
        'year_of_construction' => 'yearOfConstruction',
        'linked_assignment' => 'linkedAssignment',
        'object_assignment_id' => 'objectAssignmentId',
        'is_main_building' => 'isMainBuilding',
        'maintenance_inside' => 'maintenanceInside',
        'maintenance_outside' => 'maintenanceOutside',
        'date_time_created' => 'dateTimeCreated',
        'date_time_modified' => 'dateTimeModified',
        'is_active' => 'isActive',
        'is_new' => 'isNew',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'id' => 'id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bedroom_number' => 'setBedroomNumber',
        'building_layer_number' => 'setBuildingLayerNumber',
        'content' => 'setContent',
        'garage' => 'setGarage',
        'garden' => 'setGarden',
        'house_type' => 'setHouseType',
        'parcel_surface' => 'setParcelSurface',
        'room_number' => 'setRoomNumber',
        'situated_type' => 'setSituatedType',
        'use_surface' => 'setUseSurface',
        'year_of_construction' => 'setYearOfConstruction',
        'linked_assignment' => 'setLinkedAssignment',
        'object_assignment_id' => 'setObjectAssignmentId',
        'is_main_building' => 'setIsMainBuilding',
        'maintenance_inside' => 'setMaintenanceInside',
        'maintenance_outside' => 'setMaintenanceOutside',
        'date_time_created' => 'setDateTimeCreated',
        'date_time_modified' => 'setDateTimeModified',
        'is_active' => 'setIsActive',
        'is_new' => 'setIsNew',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'id' => 'setId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bedroom_number' => 'getBedroomNumber',
        'building_layer_number' => 'getBuildingLayerNumber',
        'content' => 'getContent',
        'garage' => 'getGarage',
        'garden' => 'getGarden',
        'house_type' => 'getHouseType',
        'parcel_surface' => 'getParcelSurface',
        'room_number' => 'getRoomNumber',
        'situated_type' => 'getSituatedType',
        'use_surface' => 'getUseSurface',
        'year_of_construction' => 'getYearOfConstruction',
        'linked_assignment' => 'getLinkedAssignment',
        'object_assignment_id' => 'getObjectAssignmentId',
        'is_main_building' => 'getIsMainBuilding',
        'maintenance_inside' => 'getMaintenanceInside',
        'maintenance_outside' => 'getMaintenanceOutside',
        'date_time_created' => 'getDateTimeCreated',
        'date_time_modified' => 'getDateTimeModified',
        'is_active' => 'getIsActive',
        'is_new' => 'getIsNew',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
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
        $this->setIfExists('bedroom_number', $data ?? [], null);
        $this->setIfExists('building_layer_number', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('garage', $data ?? [], null);
        $this->setIfExists('garden', $data ?? [], null);
        $this->setIfExists('house_type', $data ?? [], null);
        $this->setIfExists('parcel_surface', $data ?? [], null);
        $this->setIfExists('room_number', $data ?? [], null);
        $this->setIfExists('situated_type', $data ?? [], null);
        $this->setIfExists('use_surface', $data ?? [], null);
        $this->setIfExists('year_of_construction', $data ?? [], null);
        $this->setIfExists('linked_assignment', $data ?? [], null);
        $this->setIfExists('object_assignment_id', $data ?? [], null);
        $this->setIfExists('is_main_building', $data ?? [], null);
        $this->setIfExists('maintenance_inside', $data ?? [], null);
        $this->setIfExists('maintenance_outside', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_new', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('real_estate_agency_id', $data ?? [], null);
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

        if ($this->container['object_assignment_id'] === null) {
            $invalidProperties[] = "'object_assignment_id' can't be null";
        }
        if ((mb_strlen($this->container['object_assignment_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'object_assignment_id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['is_main_building'] === null) {
            $invalidProperties[] = "'is_main_building' can't be null";
        }
        if ($this->container['date_time_created'] === null) {
            $invalidProperties[] = "'date_time_created' can't be null";
        }
        if ($this->container['date_time_modified'] === null) {
            $invalidProperties[] = "'date_time_modified' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['is_new'] === null) {
            $invalidProperties[] = "'is_new' can't be null";
        }
        if ($this->container['real_estate_agency_id'] === null) {
            $invalidProperties[] = "'real_estate_agency_id' can't be null";
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
     * Gets building_layer_number
     *
     * @return int|null
     */
    public function getBuildingLayerNumber()
    {
        return $this->container['building_layer_number'];
    }

    /**
     * Sets building_layer_number
     *
     * @param int|null $building_layer_number building_layer_number
     *
     * @return self
     */
    public function setBuildingLayerNumber($building_layer_number)
    {
        if (is_null($building_layer_number)) {
            throw new \InvalidArgumentException('non-nullable building_layer_number cannot be null');
        }
        $this->container['building_layer_number'] = $building_layer_number;

        return $this;
    }

    /**
     * Gets content
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \Brixion\Kolibri\Model\Size|null $content content
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
     * Gets garage
     *
     * @return \Brixion\Kolibri\Model\Garage|null
     */
    public function getGarage()
    {
        return $this->container['garage'];
    }

    /**
     * Sets garage
     *
     * @param \Brixion\Kolibri\Model\Garage|null $garage garage
     *
     * @return self
     */
    public function setGarage($garage)
    {
        if (is_null($garage)) {
            throw new \InvalidArgumentException('non-nullable garage cannot be null');
        }
        $this->container['garage'] = $garage;

        return $this;
    }

    /**
     * Gets garden
     *
     * @return \Brixion\Kolibri\Model\Garden|null
     */
    public function getGarden()
    {
        return $this->container['garden'];
    }

    /**
     * Sets garden
     *
     * @param \Brixion\Kolibri\Model\Garden|null $garden garden
     *
     * @return self
     */
    public function setGarden($garden)
    {
        if (is_null($garden)) {
            throw new \InvalidArgumentException('non-nullable garden cannot be null');
        }
        $this->container['garden'] = $garden;

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
     * Gets parcel_surface
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getParcelSurface()
    {
        return $this->container['parcel_surface'];
    }

    /**
     * Sets parcel_surface
     *
     * @param \Brixion\Kolibri\Model\Size|null $parcel_surface parcel_surface
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
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getUseSurface()
    {
        return $this->container['use_surface'];
    }

    /**
     * Sets use_surface
     *
     * @param \Brixion\Kolibri\Model\Size|null $use_surface use_surface
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
     * Gets year_of_construction
     *
     * @return \Brixion\Kolibri\Model\YearOfConstruction|null
     */
    public function getYearOfConstruction()
    {
        return $this->container['year_of_construction'];
    }

    /**
     * Sets year_of_construction
     *
     * @param \Brixion\Kolibri\Model\YearOfConstruction|null $year_of_construction year_of_construction
     *
     * @return self
     */
    public function setYearOfConstruction($year_of_construction)
    {
        if (is_null($year_of_construction)) {
            throw new \InvalidArgumentException('non-nullable year_of_construction cannot be null');
        }
        $this->container['year_of_construction'] = $year_of_construction;

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
     * Gets object_assignment_id
     *
     * @return string
     */
    public function getObjectAssignmentId()
    {
        return $this->container['object_assignment_id'];
    }

    /**
     * Sets object_assignment_id
     *
     * @param string $object_assignment_id object_assignment_id
     *
     * @return self
     */
    public function setObjectAssignmentId($object_assignment_id)
    {
        if (is_null($object_assignment_id)) {
            throw new \InvalidArgumentException('non-nullable object_assignment_id cannot be null');
        }

        if ((mb_strlen($object_assignment_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $object_assignment_id when calling CompanyListing., must be bigger than or equal to 1.');
        }

        $this->container['object_assignment_id'] = $object_assignment_id;

        return $this;
    }

    /**
     * Gets is_main_building
     *
     * @return bool
     */
    public function getIsMainBuilding()
    {
        return $this->container['is_main_building'];
    }

    /**
     * Sets is_main_building
     *
     * @param bool $is_main_building is_main_building
     *
     * @return self
     */
    public function setIsMainBuilding($is_main_building)
    {
        if (is_null($is_main_building)) {
            throw new \InvalidArgumentException('non-nullable is_main_building cannot be null');
        }
        $this->container['is_main_building'] = $is_main_building;

        return $this;
    }

    /**
     * Gets maintenance_inside
     *
     * @return \Brixion\Kolibri\Model\Maintenance|null
     */
    public function getMaintenanceInside()
    {
        return $this->container['maintenance_inside'];
    }

    /**
     * Sets maintenance_inside
     *
     * @param \Brixion\Kolibri\Model\Maintenance|null $maintenance_inside maintenance_inside
     *
     * @return self
     */
    public function setMaintenanceInside($maintenance_inside)
    {
        if (is_null($maintenance_inside)) {
            throw new \InvalidArgumentException('non-nullable maintenance_inside cannot be null');
        }
        $this->container['maintenance_inside'] = $maintenance_inside;

        return $this;
    }

    /**
     * Gets maintenance_outside
     *
     * @return \Brixion\Kolibri\Model\Maintenance|null
     */
    public function getMaintenanceOutside()
    {
        return $this->container['maintenance_outside'];
    }

    /**
     * Sets maintenance_outside
     *
     * @param \Brixion\Kolibri\Model\Maintenance|null $maintenance_outside maintenance_outside
     *
     * @return self
     */
    public function setMaintenanceOutside($maintenance_outside)
    {
        if (is_null($maintenance_outside)) {
            throw new \InvalidArgumentException('non-nullable maintenance_outside cannot be null');
        }
        $this->container['maintenance_outside'] = $maintenance_outside;

        return $this;
    }

    /**
     * Gets date_time_created
     *
     * @return \DateTime
     */
    public function getDateTimeCreated()
    {
        return $this->container['date_time_created'];
    }

    /**
     * Sets date_time_created
     *
     * @param \DateTime $date_time_created date_time_created
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
     * @return \DateTime
     */
    public function getDateTimeModified()
    {
        return $this->container['date_time_modified'];
    }

    /**
     * Sets date_time_modified
     *
     * @param \DateTime $date_time_modified date_time_modified
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
     * Gets is_new
     *
     * @return bool
     */
    public function getIsNew()
    {
        return $this->container['is_new'];
    }

    /**
     * Sets is_new
     *
     * @param bool $is_new is_new
     *
     * @return self
     */
    public function setIsNew($is_new)
    {
        if (is_null($is_new)) {
            throw new \InvalidArgumentException('non-nullable is_new cannot be null');
        }
        $this->container['is_new'] = $is_new;

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
            throw new \InvalidArgumentException('invalid length for $id when calling CompanyListing., must be bigger than or equal to 1.');
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
