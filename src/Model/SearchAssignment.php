<?php

declare(strict_types=1);

/**
 * SearchAssignment - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * SearchAssignment.
 * @implements \ArrayAccess<string, mixed>
 */
class SearchAssignment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'SearchAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'date_assignment' => '\DateTime',
        'locations' => '\Brixion\Kolibri\Model\SearchAssignmentLocation[]',
        'send_email_start_date' => '\DateTime',
        'send_email_end_date' => '\DateTime',
        'match_mail_trigger' => '\Brixion\Kolibri\Model\MatchMailTrigger',
        'match_mail_period' => '\Brixion\Kolibri\Model\MatchMailPeriod',
        'assignment_phase' => '\Brixion\Kolibri\Model\AssignmentPhase',
        'assignment_source' => '\Brixion\Kolibri\Model\AssignmentSource',
        'assignment_source_other_description' => 'string',
        'internal_memo' => 'string',
        'linked_relations' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'foreign_id' => 'string',
        'origin' => 'string',
        'origin_owner_id' => 'string',
        'origin_id' => 'string',
        'foreign_member_id' => 'string',
        'origin_member_id' => 'string',
        'real_estate_group' => '\Brixion\Kolibri\Model\RealEstateGroup',
        'name' => 'string',
        'types_part' => '\Brixion\Kolibri\Model\TypePART[]',
        'building_characteristics' => '\Brixion\Kolibri\Model\HouseCharacteristic[]',
        'apartment_types' => '\Brixion\Kolibri\Model\ApartmentSort[]',
        'apartment_characteristics' => '\Brixion\Kolibri\Model\ApartmentCharacteristic[]',
        'type_parking' => '\Brixion\Kolibri\Model\ParkingType[]',
        'types_part_other' => '\Brixion\Kolibri\Model\TypePARTOther[]',
        'types_bog' => '\Brixion\Kolibri\Model\TypeBOG[]',
        'sub_types_bog' => '\Brixion\Kolibri\Model\SubTypeBog[]',
        'types_alv' => '\Brixion\Kolibri\Model\TypeAlv[]',
        'types_alv_other' => '\Brixion\Kolibri\Model\TypeAlvOther[]',
        'offer_type' => '\Brixion\Kolibri\Model\OfferType',
        'price_start' => 'float',
        'price_end' => 'float',
        'construction_type' => '\Brixion\Kolibri\Model\BuildingType',
        'construction_year_begin' => 'int',
        'construction_year_end' => 'int',
        'location_places' => '\Brixion\Kolibri\Model\LocationPlace[]',
        'orientation_main_garden' => '\Brixion\Kolibri\Model\Orientation',
        'available_from' => '\DateTime',
        'min_energy_class' => '\Brixion\Kolibri\Model\EnergyClass',
        'measurement_unit' => '\Brixion\Kolibri\Model\MeasurementUnit',
        'iso_currency_code' => 'string',
        'must_be_recently_modified' => 'bool',
        'must_be_new_on_market' => 'bool',
        'must_be_topper' => 'bool',
        'must_be_special' => 'bool',
        'must_have_open_house' => 'bool',
        'min_livable_area' => 'int',
        'max_livable_area' => 'int',
        'min_buildable_area' => 'int',
        'max_buildable_area' => 'int',
        'min_garden_area' => 'int',
        'max_garden_area' => 'int',
        'min_nr_of_rooms' => 'int',
        'max_nr_of_rooms' => 'int',
        'min_nr_of_bathrooms' => 'int',
        'max_nr_of_bathrooms' => 'int',
        'min_nr_of_bedrooms' => 'int',
        'max_nr_of_bedrooms' => 'int',
        'min_parking_capacity' => 'int',
        'max_parking_capacity' => 'int',
        'must_be_qualified_for_seniors' => 'bool',
        'max_energy_class' => '\Brixion\Kolibri\Model\EnergyClass',
        'min_condition_inside' => '\Brixion\Kolibri\Model\Condition',
        'max_condition_inside' => '\Brixion\Kolibri\Model\Condition',
        'min_condition_outside' => '\Brixion\Kolibri\Model\Condition',
        'max_condition_outside' => '\Brixion\Kolibri\Model\Condition',
        'must_be_on_top_floor' => 'bool',
        'must_be_on_ground_floor' => 'bool',
        'facilities' => '\Brixion\Kolibri\Model\SearchAssignmentFacilityType[]',
        'peculiarities' => '\Brixion\Kolibri\Model\SearchAssignmentPeculiarityType[]',
        'house_sorts' => '\Brixion\Kolibri\Model\HouseSort[]',
        'house_types' => '\Brixion\Kolibri\Model\HouseType[]',
        'furnishing' => '\Brixion\Kolibri\Model\Furnishing',
        'is_paid' => 'bool',
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
        'date_assignment' => 'date-time',
        'locations' => null,
        'send_email_start_date' => 'date-time',
        'send_email_end_date' => 'date-time',
        'match_mail_trigger' => null,
        'match_mail_period' => null,
        'assignment_phase' => null,
        'assignment_source' => null,
        'assignment_source_other_description' => null,
        'internal_memo' => null,
        'linked_relations' => null,
        'foreign_id' => null,
        'origin' => null,
        'origin_owner_id' => null,
        'origin_id' => null,
        'foreign_member_id' => null,
        'origin_member_id' => null,
        'real_estate_group' => null,
        'name' => null,
        'types_part' => null,
        'building_characteristics' => null,
        'apartment_types' => null,
        'apartment_characteristics' => null,
        'type_parking' => null,
        'types_part_other' => null,
        'types_bog' => null,
        'sub_types_bog' => null,
        'types_alv' => null,
        'types_alv_other' => null,
        'offer_type' => null,
        'price_start' => 'decimal',
        'price_end' => 'decimal',
        'construction_type' => null,
        'construction_year_begin' => 'int32',
        'construction_year_end' => 'int32',
        'location_places' => null,
        'orientation_main_garden' => null,
        'available_from' => 'date-time',
        'min_energy_class' => null,
        'measurement_unit' => null,
        'iso_currency_code' => null,
        'must_be_recently_modified' => null,
        'must_be_new_on_market' => null,
        'must_be_topper' => null,
        'must_be_special' => null,
        'must_have_open_house' => null,
        'min_livable_area' => 'int32',
        'max_livable_area' => 'int32',
        'min_buildable_area' => 'int32',
        'max_buildable_area' => 'int32',
        'min_garden_area' => 'int32',
        'max_garden_area' => 'int32',
        'min_nr_of_rooms' => 'int32',
        'max_nr_of_rooms' => 'int32',
        'min_nr_of_bathrooms' => 'int32',
        'max_nr_of_bathrooms' => 'int32',
        'min_nr_of_bedrooms' => 'int32',
        'max_nr_of_bedrooms' => 'int32',
        'min_parking_capacity' => 'int32',
        'max_parking_capacity' => 'int32',
        'must_be_qualified_for_seniors' => null,
        'max_energy_class' => null,
        'min_condition_inside' => null,
        'max_condition_inside' => null,
        'min_condition_outside' => null,
        'max_condition_outside' => null,
        'must_be_on_top_floor' => null,
        'must_be_on_ground_floor' => null,
        'facilities' => null,
        'peculiarities' => null,
        'house_sorts' => null,
        'house_types' => null,
        'furnishing' => null,
        'is_paid' => null,
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
        'date_assignment' => false,
        'locations' => false,
        'send_email_start_date' => false,
        'send_email_end_date' => false,
        'match_mail_trigger' => false,
        'match_mail_period' => false,
        'assignment_phase' => false,
        'assignment_source' => false,
        'assignment_source_other_description' => false,
        'internal_memo' => false,
        'linked_relations' => false,
        'foreign_id' => false,
        'origin' => false,
        'origin_owner_id' => false,
        'origin_id' => false,
        'foreign_member_id' => false,
        'origin_member_id' => false,
        'real_estate_group' => false,
        'name' => false,
        'types_part' => false,
        'building_characteristics' => false,
        'apartment_types' => false,
        'apartment_characteristics' => false,
        'type_parking' => false,
        'types_part_other' => false,
        'types_bog' => false,
        'sub_types_bog' => false,
        'types_alv' => false,
        'types_alv_other' => false,
        'offer_type' => false,
        'price_start' => false,
        'price_end' => false,
        'construction_type' => false,
        'construction_year_begin' => false,
        'construction_year_end' => false,
        'location_places' => false,
        'orientation_main_garden' => false,
        'available_from' => false,
        'min_energy_class' => false,
        'measurement_unit' => false,
        'iso_currency_code' => false,
        'must_be_recently_modified' => false,
        'must_be_new_on_market' => false,
        'must_be_topper' => false,
        'must_be_special' => false,
        'must_have_open_house' => false,
        'min_livable_area' => false,
        'max_livable_area' => false,
        'min_buildable_area' => false,
        'max_buildable_area' => false,
        'min_garden_area' => false,
        'max_garden_area' => false,
        'min_nr_of_rooms' => false,
        'max_nr_of_rooms' => false,
        'min_nr_of_bathrooms' => false,
        'max_nr_of_bathrooms' => false,
        'min_nr_of_bedrooms' => false,
        'max_nr_of_bedrooms' => false,
        'min_parking_capacity' => false,
        'max_parking_capacity' => false,
        'must_be_qualified_for_seniors' => false,
        'max_energy_class' => false,
        'min_condition_inside' => false,
        'max_condition_inside' => false,
        'min_condition_outside' => false,
        'max_condition_outside' => false,
        'must_be_on_top_floor' => false,
        'must_be_on_ground_floor' => false,
        'facilities' => false,
        'peculiarities' => false,
        'house_sorts' => false,
        'house_types' => false,
        'furnishing' => false,
        'is_paid' => false,
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
        'date_assignment' => 'dateAssignment',
        'locations' => 'locations',
        'send_email_start_date' => 'sendEmailStartDate',
        'send_email_end_date' => 'sendEmailEndDate',
        'match_mail_trigger' => 'matchMailTrigger',
        'match_mail_period' => 'matchMailPeriod',
        'assignment_phase' => 'assignmentPhase',
        'assignment_source' => 'assignmentSource',
        'assignment_source_other_description' => 'assignmentSourceOtherDescription',
        'internal_memo' => 'internalMemo',
        'linked_relations' => 'linkedRelations',
        'foreign_id' => 'foreignId',
        'origin' => 'origin',
        'origin_owner_id' => 'originOwnerId',
        'origin_id' => 'originId',
        'foreign_member_id' => 'foreignMemberID',
        'origin_member_id' => 'originMemberId',
        'real_estate_group' => 'realEstateGroup',
        'name' => 'name',
        'types_part' => 'typesPART',
        'building_characteristics' => 'buildingCharacteristics',
        'apartment_types' => 'apartmentTypes',
        'apartment_characteristics' => 'apartmentCharacteristics',
        'type_parking' => 'typeParking',
        'types_part_other' => 'typesPARTOther',
        'types_bog' => 'typesBOG',
        'sub_types_bog' => 'subTypesBOG',
        'types_alv' => 'typesALV',
        'types_alv_other' => 'typesALVOther',
        'offer_type' => 'offerType',
        'price_start' => 'priceStart',
        'price_end' => 'priceEnd',
        'construction_type' => 'constructionType',
        'construction_year_begin' => 'constructionYearBegin',
        'construction_year_end' => 'constructionYearEnd',
        'location_places' => 'locationPlaces',
        'orientation_main_garden' => 'orientationMainGarden',
        'available_from' => 'availableFrom',
        'min_energy_class' => 'minEnergyClass',
        'measurement_unit' => 'measurementUnit',
        'iso_currency_code' => 'isoCurrencyCode',
        'must_be_recently_modified' => 'mustBeRecentlyModified',
        'must_be_new_on_market' => 'mustBeNewOnMarket',
        'must_be_topper' => 'mustBeTopper',
        'must_be_special' => 'mustBeSpecial',
        'must_have_open_house' => 'mustHaveOpenHouse',
        'min_livable_area' => 'minLivableArea',
        'max_livable_area' => 'maxLivableArea',
        'min_buildable_area' => 'minBuildableArea',
        'max_buildable_area' => 'maxBuildableArea',
        'min_garden_area' => 'minGardenArea',
        'max_garden_area' => 'maxGardenArea',
        'min_nr_of_rooms' => 'minNrOfRooms',
        'max_nr_of_rooms' => 'maxNrOfRooms',
        'min_nr_of_bathrooms' => 'minNrOfBathrooms',
        'max_nr_of_bathrooms' => 'maxNrOfBathrooms',
        'min_nr_of_bedrooms' => 'minNrOfBedrooms',
        'max_nr_of_bedrooms' => 'maxNrOfBedrooms',
        'min_parking_capacity' => 'minParkingCapacity',
        'max_parking_capacity' => 'maxParkingCapacity',
        'must_be_qualified_for_seniors' => 'mustBeQualifiedForSeniors',
        'max_energy_class' => 'maxEnergyClass',
        'min_condition_inside' => 'minConditionInside',
        'max_condition_inside' => 'maxConditionInside',
        'min_condition_outside' => 'minConditionOutside',
        'max_condition_outside' => 'maxConditionOutside',
        'must_be_on_top_floor' => 'mustBeOnTopFloor',
        'must_be_on_ground_floor' => 'mustBeOnGroundFloor',
        'facilities' => 'facilities',
        'peculiarities' => 'peculiarities',
        'house_sorts' => 'houseSorts',
        'house_types' => 'houseTypes',
        'furnishing' => 'furnishing',
        'is_paid' => 'isPaid',
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
        'date_assignment' => 'setDateAssignment',
        'locations' => 'setLocations',
        'send_email_start_date' => 'setSendEmailStartDate',
        'send_email_end_date' => 'setSendEmailEndDate',
        'match_mail_trigger' => 'setMatchMailTrigger',
        'match_mail_period' => 'setMatchMailPeriod',
        'assignment_phase' => 'setAssignmentPhase',
        'assignment_source' => 'setAssignmentSource',
        'assignment_source_other_description' => 'setAssignmentSourceOtherDescription',
        'internal_memo' => 'setInternalMemo',
        'linked_relations' => 'setLinkedRelations',
        'foreign_id' => 'setForeignId',
        'origin' => 'setOrigin',
        'origin_owner_id' => 'setOriginOwnerId',
        'origin_id' => 'setOriginId',
        'foreign_member_id' => 'setForeignMemberId',
        'origin_member_id' => 'setOriginMemberId',
        'real_estate_group' => 'setRealEstateGroup',
        'name' => 'setName',
        'types_part' => 'setTypesPart',
        'building_characteristics' => 'setBuildingCharacteristics',
        'apartment_types' => 'setApartmentTypes',
        'apartment_characteristics' => 'setApartmentCharacteristics',
        'type_parking' => 'setTypeParking',
        'types_part_other' => 'setTypesPartOther',
        'types_bog' => 'setTypesBog',
        'sub_types_bog' => 'setSubTypesBog',
        'types_alv' => 'setTypesAlv',
        'types_alv_other' => 'setTypesAlvOther',
        'offer_type' => 'setOfferType',
        'price_start' => 'setPriceStart',
        'price_end' => 'setPriceEnd',
        'construction_type' => 'setConstructionType',
        'construction_year_begin' => 'setConstructionYearBegin',
        'construction_year_end' => 'setConstructionYearEnd',
        'location_places' => 'setLocationPlaces',
        'orientation_main_garden' => 'setOrientationMainGarden',
        'available_from' => 'setAvailableFrom',
        'min_energy_class' => 'setMinEnergyClass',
        'measurement_unit' => 'setMeasurementUnit',
        'iso_currency_code' => 'setIsoCurrencyCode',
        'must_be_recently_modified' => 'setMustBeRecentlyModified',
        'must_be_new_on_market' => 'setMustBeNewOnMarket',
        'must_be_topper' => 'setMustBeTopper',
        'must_be_special' => 'setMustBeSpecial',
        'must_have_open_house' => 'setMustHaveOpenHouse',
        'min_livable_area' => 'setMinLivableArea',
        'max_livable_area' => 'setMaxLivableArea',
        'min_buildable_area' => 'setMinBuildableArea',
        'max_buildable_area' => 'setMaxBuildableArea',
        'min_garden_area' => 'setMinGardenArea',
        'max_garden_area' => 'setMaxGardenArea',
        'min_nr_of_rooms' => 'setMinNrOfRooms',
        'max_nr_of_rooms' => 'setMaxNrOfRooms',
        'min_nr_of_bathrooms' => 'setMinNrOfBathrooms',
        'max_nr_of_bathrooms' => 'setMaxNrOfBathrooms',
        'min_nr_of_bedrooms' => 'setMinNrOfBedrooms',
        'max_nr_of_bedrooms' => 'setMaxNrOfBedrooms',
        'min_parking_capacity' => 'setMinParkingCapacity',
        'max_parking_capacity' => 'setMaxParkingCapacity',
        'must_be_qualified_for_seniors' => 'setMustBeQualifiedForSeniors',
        'max_energy_class' => 'setMaxEnergyClass',
        'min_condition_inside' => 'setMinConditionInside',
        'max_condition_inside' => 'setMaxConditionInside',
        'min_condition_outside' => 'setMinConditionOutside',
        'max_condition_outside' => 'setMaxConditionOutside',
        'must_be_on_top_floor' => 'setMustBeOnTopFloor',
        'must_be_on_ground_floor' => 'setMustBeOnGroundFloor',
        'facilities' => 'setFacilities',
        'peculiarities' => 'setPeculiarities',
        'house_sorts' => 'setHouseSorts',
        'house_types' => 'setHouseTypes',
        'furnishing' => 'setFurnishing',
        'is_paid' => 'setIsPaid',
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
        'date_assignment' => 'getDateAssignment',
        'locations' => 'getLocations',
        'send_email_start_date' => 'getSendEmailStartDate',
        'send_email_end_date' => 'getSendEmailEndDate',
        'match_mail_trigger' => 'getMatchMailTrigger',
        'match_mail_period' => 'getMatchMailPeriod',
        'assignment_phase' => 'getAssignmentPhase',
        'assignment_source' => 'getAssignmentSource',
        'assignment_source_other_description' => 'getAssignmentSourceOtherDescription',
        'internal_memo' => 'getInternalMemo',
        'linked_relations' => 'getLinkedRelations',
        'foreign_id' => 'getForeignId',
        'origin' => 'getOrigin',
        'origin_owner_id' => 'getOriginOwnerId',
        'origin_id' => 'getOriginId',
        'foreign_member_id' => 'getForeignMemberId',
        'origin_member_id' => 'getOriginMemberId',
        'real_estate_group' => 'getRealEstateGroup',
        'name' => 'getName',
        'types_part' => 'getTypesPart',
        'building_characteristics' => 'getBuildingCharacteristics',
        'apartment_types' => 'getApartmentTypes',
        'apartment_characteristics' => 'getApartmentCharacteristics',
        'type_parking' => 'getTypeParking',
        'types_part_other' => 'getTypesPartOther',
        'types_bog' => 'getTypesBog',
        'sub_types_bog' => 'getSubTypesBog',
        'types_alv' => 'getTypesAlv',
        'types_alv_other' => 'getTypesAlvOther',
        'offer_type' => 'getOfferType',
        'price_start' => 'getPriceStart',
        'price_end' => 'getPriceEnd',
        'construction_type' => 'getConstructionType',
        'construction_year_begin' => 'getConstructionYearBegin',
        'construction_year_end' => 'getConstructionYearEnd',
        'location_places' => 'getLocationPlaces',
        'orientation_main_garden' => 'getOrientationMainGarden',
        'available_from' => 'getAvailableFrom',
        'min_energy_class' => 'getMinEnergyClass',
        'measurement_unit' => 'getMeasurementUnit',
        'iso_currency_code' => 'getIsoCurrencyCode',
        'must_be_recently_modified' => 'getMustBeRecentlyModified',
        'must_be_new_on_market' => 'getMustBeNewOnMarket',
        'must_be_topper' => 'getMustBeTopper',
        'must_be_special' => 'getMustBeSpecial',
        'must_have_open_house' => 'getMustHaveOpenHouse',
        'min_livable_area' => 'getMinLivableArea',
        'max_livable_area' => 'getMaxLivableArea',
        'min_buildable_area' => 'getMinBuildableArea',
        'max_buildable_area' => 'getMaxBuildableArea',
        'min_garden_area' => 'getMinGardenArea',
        'max_garden_area' => 'getMaxGardenArea',
        'min_nr_of_rooms' => 'getMinNrOfRooms',
        'max_nr_of_rooms' => 'getMaxNrOfRooms',
        'min_nr_of_bathrooms' => 'getMinNrOfBathrooms',
        'max_nr_of_bathrooms' => 'getMaxNrOfBathrooms',
        'min_nr_of_bedrooms' => 'getMinNrOfBedrooms',
        'max_nr_of_bedrooms' => 'getMaxNrOfBedrooms',
        'min_parking_capacity' => 'getMinParkingCapacity',
        'max_parking_capacity' => 'getMaxParkingCapacity',
        'must_be_qualified_for_seniors' => 'getMustBeQualifiedForSeniors',
        'max_energy_class' => 'getMaxEnergyClass',
        'min_condition_inside' => 'getMinConditionInside',
        'max_condition_inside' => 'getMaxConditionInside',
        'min_condition_outside' => 'getMinConditionOutside',
        'max_condition_outside' => 'getMaxConditionOutside',
        'must_be_on_top_floor' => 'getMustBeOnTopFloor',
        'must_be_on_ground_floor' => 'getMustBeOnGroundFloor',
        'facilities' => 'getFacilities',
        'peculiarities' => 'getPeculiarities',
        'house_sorts' => 'getHouseSorts',
        'house_types' => 'getHouseTypes',
        'furnishing' => 'getFurnishing',
        'is_paid' => 'getIsPaid',
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
        $this->setIfExists('date_assignment', $data ?? [], null);
        $this->setIfExists('locations', $data ?? [], null);
        $this->setIfExists('send_email_start_date', $data ?? [], null);
        $this->setIfExists('send_email_end_date', $data ?? [], null);
        $this->setIfExists('match_mail_trigger', $data ?? [], null);
        $this->setIfExists('match_mail_period', $data ?? [], null);
        $this->setIfExists('assignment_phase', $data ?? [], null);
        $this->setIfExists('assignment_source', $data ?? [], null);
        $this->setIfExists('assignment_source_other_description', $data ?? [], null);
        $this->setIfExists('internal_memo', $data ?? [], null);
        $this->setIfExists('linked_relations', $data ?? [], null);
        $this->setIfExists('foreign_id', $data ?? [], null);
        $this->setIfExists('origin', $data ?? [], null);
        $this->setIfExists('origin_owner_id', $data ?? [], null);
        $this->setIfExists('origin_id', $data ?? [], null);
        $this->setIfExists('foreign_member_id', $data ?? [], null);
        $this->setIfExists('origin_member_id', $data ?? [], null);
        $this->setIfExists('real_estate_group', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('types_part', $data ?? [], null);
        $this->setIfExists('building_characteristics', $data ?? [], null);
        $this->setIfExists('apartment_types', $data ?? [], null);
        $this->setIfExists('apartment_characteristics', $data ?? [], null);
        $this->setIfExists('type_parking', $data ?? [], null);
        $this->setIfExists('types_part_other', $data ?? [], null);
        $this->setIfExists('types_bog', $data ?? [], null);
        $this->setIfExists('sub_types_bog', $data ?? [], null);
        $this->setIfExists('types_alv', $data ?? [], null);
        $this->setIfExists('types_alv_other', $data ?? [], null);
        $this->setIfExists('offer_type', $data ?? [], null);
        $this->setIfExists('price_start', $data ?? [], null);
        $this->setIfExists('price_end', $data ?? [], null);
        $this->setIfExists('construction_type', $data ?? [], null);
        $this->setIfExists('construction_year_begin', $data ?? [], null);
        $this->setIfExists('construction_year_end', $data ?? [], null);
        $this->setIfExists('location_places', $data ?? [], null);
        $this->setIfExists('orientation_main_garden', $data ?? [], null);
        $this->setIfExists('available_from', $data ?? [], null);
        $this->setIfExists('min_energy_class', $data ?? [], null);
        $this->setIfExists('measurement_unit', $data ?? [], null);
        $this->setIfExists('iso_currency_code', $data ?? [], null);
        $this->setIfExists('must_be_recently_modified', $data ?? [], null);
        $this->setIfExists('must_be_new_on_market', $data ?? [], null);
        $this->setIfExists('must_be_topper', $data ?? [], null);
        $this->setIfExists('must_be_special', $data ?? [], null);
        $this->setIfExists('must_have_open_house', $data ?? [], null);
        $this->setIfExists('min_livable_area', $data ?? [], null);
        $this->setIfExists('max_livable_area', $data ?? [], null);
        $this->setIfExists('min_buildable_area', $data ?? [], null);
        $this->setIfExists('max_buildable_area', $data ?? [], null);
        $this->setIfExists('min_garden_area', $data ?? [], null);
        $this->setIfExists('max_garden_area', $data ?? [], null);
        $this->setIfExists('min_nr_of_rooms', $data ?? [], null);
        $this->setIfExists('max_nr_of_rooms', $data ?? [], null);
        $this->setIfExists('min_nr_of_bathrooms', $data ?? [], null);
        $this->setIfExists('max_nr_of_bathrooms', $data ?? [], null);
        $this->setIfExists('min_nr_of_bedrooms', $data ?? [], null);
        $this->setIfExists('max_nr_of_bedrooms', $data ?? [], null);
        $this->setIfExists('min_parking_capacity', $data ?? [], null);
        $this->setIfExists('max_parking_capacity', $data ?? [], null);
        $this->setIfExists('must_be_qualified_for_seniors', $data ?? [], null);
        $this->setIfExists('max_energy_class', $data ?? [], null);
        $this->setIfExists('min_condition_inside', $data ?? [], null);
        $this->setIfExists('max_condition_inside', $data ?? [], null);
        $this->setIfExists('min_condition_outside', $data ?? [], null);
        $this->setIfExists('max_condition_outside', $data ?? [], null);
        $this->setIfExists('must_be_on_top_floor', $data ?? [], null);
        $this->setIfExists('must_be_on_ground_floor', $data ?? [], null);
        $this->setIfExists('facilities', $data ?? [], null);
        $this->setIfExists('peculiarities', $data ?? [], null);
        $this->setIfExists('house_sorts', $data ?? [], null);
        $this->setIfExists('house_types', $data ?? [], null);
        $this->setIfExists('furnishing', $data ?? [], null);
        $this->setIfExists('is_paid', $data ?? [], null);
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

        if ($this->container['real_estate_group'] === null) {
            $invalidProperties[] = "'real_estate_group' can't be null";
        }
        if ($this->container['is_paid'] === null) {
            $invalidProperties[] = "'is_paid' can't be null";
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
     * Gets date_assignment
     *
     * @return \DateTime|null
     */
    public function getDateAssignment()
    {
        return $this->container['date_assignment'];
    }

    /**
     * Sets date_assignment
     *
     * @param \DateTime|null $date_assignment date_assignment
     *
     * @return self
     */
    public function setDateAssignment($date_assignment)
    {
        if (is_null($date_assignment)) {
            throw new \InvalidArgumentException('non-nullable date_assignment cannot be null');
        }
        $this->container['date_assignment'] = $date_assignment;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \Brixion\Kolibri\Model\SearchAssignmentLocation[]|null
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \Brixion\Kolibri\Model\SearchAssignmentLocation[]|null $locations locations
     *
     * @return self
     */
    public function setLocations($locations)
    {
        if (is_null($locations)) {
            throw new \InvalidArgumentException('non-nullable locations cannot be null');
        }
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets send_email_start_date
     *
     * @return \DateTime|null
     */
    public function getSendEmailStartDate()
    {
        return $this->container['send_email_start_date'];
    }

    /**
     * Sets send_email_start_date
     *
     * @param \DateTime|null $send_email_start_date send_email_start_date
     *
     * @return self
     */
    public function setSendEmailStartDate($send_email_start_date)
    {
        if (is_null($send_email_start_date)) {
            throw new \InvalidArgumentException('non-nullable send_email_start_date cannot be null');
        }
        $this->container['send_email_start_date'] = $send_email_start_date;

        return $this;
    }

    /**
     * Gets send_email_end_date
     *
     * @return \DateTime|null
     */
    public function getSendEmailEndDate()
    {
        return $this->container['send_email_end_date'];
    }

    /**
     * Sets send_email_end_date
     *
     * @param \DateTime|null $send_email_end_date send_email_end_date
     *
     * @return self
     */
    public function setSendEmailEndDate($send_email_end_date)
    {
        if (is_null($send_email_end_date)) {
            throw new \InvalidArgumentException('non-nullable send_email_end_date cannot be null');
        }
        $this->container['send_email_end_date'] = $send_email_end_date;

        return $this;
    }

    /**
     * Gets match_mail_trigger
     *
     * @return \Brixion\Kolibri\Model\MatchMailTrigger|null
     */
    public function getMatchMailTrigger()
    {
        return $this->container['match_mail_trigger'];
    }

    /**
     * Sets match_mail_trigger
     *
     * @param \Brixion\Kolibri\Model\MatchMailTrigger|null $match_mail_trigger match_mail_trigger
     *
     * @return self
     */
    public function setMatchMailTrigger($match_mail_trigger)
    {
        if (is_null($match_mail_trigger)) {
            throw new \InvalidArgumentException('non-nullable match_mail_trigger cannot be null');
        }
        $this->container['match_mail_trigger'] = $match_mail_trigger;

        return $this;
    }

    /**
     * Gets match_mail_period
     *
     * @return \Brixion\Kolibri\Model\MatchMailPeriod|null
     */
    public function getMatchMailPeriod()
    {
        return $this->container['match_mail_period'];
    }

    /**
     * Sets match_mail_period
     *
     * @param \Brixion\Kolibri\Model\MatchMailPeriod|null $match_mail_period match_mail_period
     *
     * @return self
     */
    public function setMatchMailPeriod($match_mail_period)
    {
        if (is_null($match_mail_period)) {
            throw new \InvalidArgumentException('non-nullable match_mail_period cannot be null');
        }
        $this->container['match_mail_period'] = $match_mail_period;

        return $this;
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
     * @param \Brixion\Kolibri\Model\AssignmentPhase|null $assignment_phase assignment_phase
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
     * Gets assignment_source
     *
     * @return \Brixion\Kolibri\Model\AssignmentSource|null
     */
    public function getAssignmentSource()
    {
        return $this->container['assignment_source'];
    }

    /**
     * Sets assignment_source
     *
     * @param \Brixion\Kolibri\Model\AssignmentSource|null $assignment_source assignment_source
     *
     * @return self
     */
    public function setAssignmentSource($assignment_source)
    {
        if (is_null($assignment_source)) {
            throw new \InvalidArgumentException('non-nullable assignment_source cannot be null');
        }
        $this->container['assignment_source'] = $assignment_source;

        return $this;
    }

    /**
     * Gets assignment_source_other_description
     *
     * @return string|null
     */
    public function getAssignmentSourceOtherDescription()
    {
        return $this->container['assignment_source_other_description'];
    }

    /**
     * Sets assignment_source_other_description
     *
     * @param string|null $assignment_source_other_description assignment_source_other_description
     *
     * @return self
     */
    public function setAssignmentSourceOtherDescription($assignment_source_other_description)
    {
        if (is_null($assignment_source_other_description)) {
            throw new \InvalidArgumentException('non-nullable assignment_source_other_description cannot be null');
        }
        $this->container['assignment_source_other_description'] = $assignment_source_other_description;

        return $this;
    }

    /**
     * Gets internal_memo
     *
     * @return string|null
     */
    public function getInternalMemo()
    {
        return $this->container['internal_memo'];
    }

    /**
     * Sets internal_memo
     *
     * @param string|null $internal_memo internal_memo
     *
     * @return self
     */
    public function setInternalMemo($internal_memo)
    {
        if (is_null($internal_memo)) {
            throw new \InvalidArgumentException('non-nullable internal_memo cannot be null');
        }
        $this->container['internal_memo'] = $internal_memo;

        return $this;
    }

    /**
     * Gets linked_relations
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedRelations()
    {
        return $this->container['linked_relations'];
    }

    /**
     * Sets linked_relations
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_relations linked_relations
     *
     * @return self
     */
    public function setLinkedRelations($linked_relations)
    {
        if (is_null($linked_relations)) {
            throw new \InvalidArgumentException('non-nullable linked_relations cannot be null');
        }
        $this->container['linked_relations'] = $linked_relations;

        return $this;
    }

    /**
     * Gets foreign_id
     *
     * @return string|null
     */
    public function getForeignId()
    {
        return $this->container['foreign_id'];
    }

    /**
     * Sets foreign_id
     *
     * @param string|null $foreign_id foreign_id
     *
     * @return self
     */
    public function setForeignId($foreign_id)
    {
        if (is_null($foreign_id)) {
            throw new \InvalidArgumentException('non-nullable foreign_id cannot be null');
        }
        $this->container['foreign_id'] = $foreign_id;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return string|null
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param string|null $origin origin
     *
     * @return self
     */
    public function setOrigin($origin)
    {
        if (is_null($origin)) {
            throw new \InvalidArgumentException('non-nullable origin cannot be null');
        }
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets origin_owner_id
     *
     * @return string|null
     */
    public function getOriginOwnerId()
    {
        return $this->container['origin_owner_id'];
    }

    /**
     * Sets origin_owner_id
     *
     * @param string|null $origin_owner_id origin_owner_id
     *
     * @return self
     */
    public function setOriginOwnerId($origin_owner_id)
    {
        if (is_null($origin_owner_id)) {
            throw new \InvalidArgumentException('non-nullable origin_owner_id cannot be null');
        }
        $this->container['origin_owner_id'] = $origin_owner_id;

        return $this;
    }

    /**
     * Gets origin_id
     *
     * @return string|null
     */
    public function getOriginId()
    {
        return $this->container['origin_id'];
    }

    /**
     * Sets origin_id
     *
     * @param string|null $origin_id origin_id
     *
     * @return self
     */
    public function setOriginId($origin_id)
    {
        if (is_null($origin_id)) {
            throw new \InvalidArgumentException('non-nullable origin_id cannot be null');
        }
        $this->container['origin_id'] = $origin_id;

        return $this;
    }

    /**
     * Gets foreign_member_id
     *
     * @return string|null
     */
    public function getForeignMemberId()
    {
        return $this->container['foreign_member_id'];
    }

    /**
     * Sets foreign_member_id
     *
     * @param string|null $foreign_member_id foreign_member_id
     *
     * @return self
     */
    public function setForeignMemberId($foreign_member_id)
    {
        if (is_null($foreign_member_id)) {
            throw new \InvalidArgumentException('non-nullable foreign_member_id cannot be null');
        }
        $this->container['foreign_member_id'] = $foreign_member_id;

        return $this;
    }

    /**
     * Gets origin_member_id
     *
     * @return string|null
     */
    public function getOriginMemberId()
    {
        return $this->container['origin_member_id'];
    }

    /**
     * Sets origin_member_id
     *
     * @param string|null $origin_member_id origin_member_id
     *
     * @return self
     */
    public function setOriginMemberId($origin_member_id)
    {
        if (is_null($origin_member_id)) {
            throw new \InvalidArgumentException('non-nullable origin_member_id cannot be null');
        }
        $this->container['origin_member_id'] = $origin_member_id;

        return $this;
    }

    /**
     * Gets real_estate_group
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroup
     */
    public function getRealEstateGroup()
    {
        return $this->container['real_estate_group'];
    }

    /**
     * Sets real_estate_group
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroup $real_estate_group real_estate_group
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets types_part
     *
     * @return \Brixion\Kolibri\Model\TypePART[]|null
     */
    public function getTypesPart()
    {
        return $this->container['types_part'];
    }

    /**
     * Sets types_part
     *
     * @param \Brixion\Kolibri\Model\TypePART[]|null $types_part types_part
     *
     * @return self
     */
    public function setTypesPart($types_part)
    {
        if (is_null($types_part)) {
            throw new \InvalidArgumentException('non-nullable types_part cannot be null');
        }
        $this->container['types_part'] = $types_part;

        return $this;
    }

    /**
     * Gets building_characteristics
     *
     * @return \Brixion\Kolibri\Model\HouseCharacteristic[]|null
     */
    public function getBuildingCharacteristics()
    {
        return $this->container['building_characteristics'];
    }

    /**
     * Sets building_characteristics
     *
     * @param \Brixion\Kolibri\Model\HouseCharacteristic[]|null $building_characteristics building_characteristics
     *
     * @return self
     */
    public function setBuildingCharacteristics($building_characteristics)
    {
        if (is_null($building_characteristics)) {
            throw new \InvalidArgumentException('non-nullable building_characteristics cannot be null');
        }
        $this->container['building_characteristics'] = $building_characteristics;

        return $this;
    }

    /**
     * Gets apartment_types
     *
     * @return \Brixion\Kolibri\Model\ApartmentSort[]|null
     */
    public function getApartmentTypes()
    {
        return $this->container['apartment_types'];
    }

    /**
     * Sets apartment_types
     *
     * @param \Brixion\Kolibri\Model\ApartmentSort[]|null $apartment_types apartment_types
     *
     * @return self
     */
    public function setApartmentTypes($apartment_types)
    {
        if (is_null($apartment_types)) {
            throw new \InvalidArgumentException('non-nullable apartment_types cannot be null');
        }
        $this->container['apartment_types'] = $apartment_types;

        return $this;
    }

    /**
     * Gets apartment_characteristics
     *
     * @return \Brixion\Kolibri\Model\ApartmentCharacteristic[]|null
     */
    public function getApartmentCharacteristics()
    {
        return $this->container['apartment_characteristics'];
    }

    /**
     * Sets apartment_characteristics
     *
     * @param \Brixion\Kolibri\Model\ApartmentCharacteristic[]|null $apartment_characteristics apartment_characteristics
     *
     * @return self
     */
    public function setApartmentCharacteristics($apartment_characteristics)
    {
        if (is_null($apartment_characteristics)) {
            throw new \InvalidArgumentException('non-nullable apartment_characteristics cannot be null');
        }
        $this->container['apartment_characteristics'] = $apartment_characteristics;

        return $this;
    }

    /**
     * Gets type_parking
     *
     * @return \Brixion\Kolibri\Model\ParkingType[]|null
     */
    public function getTypeParking()
    {
        return $this->container['type_parking'];
    }

    /**
     * Sets type_parking
     *
     * @param \Brixion\Kolibri\Model\ParkingType[]|null $type_parking type_parking
     *
     * @return self
     */
    public function setTypeParking($type_parking)
    {
        if (is_null($type_parking)) {
            throw new \InvalidArgumentException('non-nullable type_parking cannot be null');
        }
        $this->container['type_parking'] = $type_parking;

        return $this;
    }

    /**
     * Gets types_part_other
     *
     * @return \Brixion\Kolibri\Model\TypePARTOther[]|null
     */
    public function getTypesPartOther()
    {
        return $this->container['types_part_other'];
    }

    /**
     * Sets types_part_other
     *
     * @param \Brixion\Kolibri\Model\TypePARTOther[]|null $types_part_other types_part_other
     *
     * @return self
     */
    public function setTypesPartOther($types_part_other)
    {
        if (is_null($types_part_other)) {
            throw new \InvalidArgumentException('non-nullable types_part_other cannot be null');
        }
        $this->container['types_part_other'] = $types_part_other;

        return $this;
    }

    /**
     * Gets types_bog
     *
     * @return \Brixion\Kolibri\Model\TypeBOG[]|null
     */
    public function getTypesBog()
    {
        return $this->container['types_bog'];
    }

    /**
     * Sets types_bog
     *
     * @param \Brixion\Kolibri\Model\TypeBOG[]|null $types_bog types_bog
     *
     * @return self
     */
    public function setTypesBog($types_bog)
    {
        if (is_null($types_bog)) {
            throw new \InvalidArgumentException('non-nullable types_bog cannot be null');
        }
        $this->container['types_bog'] = $types_bog;

        return $this;
    }

    /**
     * Gets sub_types_bog
     *
     * @return \Brixion\Kolibri\Model\SubTypeBog[]|null
     */
    public function getSubTypesBog()
    {
        return $this->container['sub_types_bog'];
    }

    /**
     * Sets sub_types_bog
     *
     * @param \Brixion\Kolibri\Model\SubTypeBog[]|null $sub_types_bog sub_types_bog
     *
     * @return self
     */
    public function setSubTypesBog($sub_types_bog)
    {
        if (is_null($sub_types_bog)) {
            throw new \InvalidArgumentException('non-nullable sub_types_bog cannot be null');
        }
        $this->container['sub_types_bog'] = $sub_types_bog;

        return $this;
    }

    /**
     * Gets types_alv
     *
     * @return \Brixion\Kolibri\Model\TypeAlv[]|null
     */
    public function getTypesAlv()
    {
        return $this->container['types_alv'];
    }

    /**
     * Sets types_alv
     *
     * @param \Brixion\Kolibri\Model\TypeAlv[]|null $types_alv types_alv
     *
     * @return self
     */
    public function setTypesAlv($types_alv)
    {
        if (is_null($types_alv)) {
            throw new \InvalidArgumentException('non-nullable types_alv cannot be null');
        }
        $this->container['types_alv'] = $types_alv;

        return $this;
    }

    /**
     * Gets types_alv_other
     *
     * @return \Brixion\Kolibri\Model\TypeAlvOther[]|null
     */
    public function getTypesAlvOther()
    {
        return $this->container['types_alv_other'];
    }

    /**
     * Sets types_alv_other
     *
     * @param \Brixion\Kolibri\Model\TypeAlvOther[]|null $types_alv_other types_alv_other
     *
     * @return self
     */
    public function setTypesAlvOther($types_alv_other)
    {
        if (is_null($types_alv_other)) {
            throw new \InvalidArgumentException('non-nullable types_alv_other cannot be null');
        }
        $this->container['types_alv_other'] = $types_alv_other;

        return $this;
    }

    /**
     * Gets offer_type
     *
     * @return \Brixion\Kolibri\Model\OfferType|null
     */
    public function getOfferType()
    {
        return $this->container['offer_type'];
    }

    /**
     * Sets offer_type
     *
     * @param \Brixion\Kolibri\Model\OfferType|null $offer_type offer_type
     *
     * @return self
     */
    public function setOfferType($offer_type)
    {
        if (is_null($offer_type)) {
            throw new \InvalidArgumentException('non-nullable offer_type cannot be null');
        }
        $this->container['offer_type'] = $offer_type;

        return $this;
    }

    /**
     * Gets price_start
     *
     * @return float|null
     */
    public function getPriceStart()
    {
        return $this->container['price_start'];
    }

    /**
     * Sets price_start
     *
     * @param float|null $price_start price_start
     *
     * @return self
     */
    public function setPriceStart($price_start)
    {
        if (is_null($price_start)) {
            throw new \InvalidArgumentException('non-nullable price_start cannot be null');
        }
        $this->container['price_start'] = $price_start;

        return $this;
    }

    /**
     * Gets price_end
     *
     * @return float|null
     */
    public function getPriceEnd()
    {
        return $this->container['price_end'];
    }

    /**
     * Sets price_end
     *
     * @param float|null $price_end price_end
     *
     * @return self
     */
    public function setPriceEnd($price_end)
    {
        if (is_null($price_end)) {
            throw new \InvalidArgumentException('non-nullable price_end cannot be null');
        }
        $this->container['price_end'] = $price_end;

        return $this;
    }

    /**
     * Gets construction_type
     *
     * @return \Brixion\Kolibri\Model\BuildingType|null
     */
    public function getConstructionType()
    {
        return $this->container['construction_type'];
    }

    /**
     * Sets construction_type
     *
     * @param \Brixion\Kolibri\Model\BuildingType|null $construction_type construction_type
     *
     * @return self
     */
    public function setConstructionType($construction_type)
    {
        if (is_null($construction_type)) {
            throw new \InvalidArgumentException('non-nullable construction_type cannot be null');
        }
        $this->container['construction_type'] = $construction_type;

        return $this;
    }

    /**
     * Gets construction_year_begin
     *
     * @return int|null
     */
    public function getConstructionYearBegin()
    {
        return $this->container['construction_year_begin'];
    }

    /**
     * Sets construction_year_begin
     *
     * @param int|null $construction_year_begin construction_year_begin
     *
     * @return self
     */
    public function setConstructionYearBegin($construction_year_begin)
    {
        if (is_null($construction_year_begin)) {
            throw new \InvalidArgumentException('non-nullable construction_year_begin cannot be null');
        }
        $this->container['construction_year_begin'] = $construction_year_begin;

        return $this;
    }

    /**
     * Gets construction_year_end
     *
     * @return int|null
     */
    public function getConstructionYearEnd()
    {
        return $this->container['construction_year_end'];
    }

    /**
     * Sets construction_year_end
     *
     * @param int|null $construction_year_end construction_year_end
     *
     * @return self
     */
    public function setConstructionYearEnd($construction_year_end)
    {
        if (is_null($construction_year_end)) {
            throw new \InvalidArgumentException('non-nullable construction_year_end cannot be null');
        }
        $this->container['construction_year_end'] = $construction_year_end;

        return $this;
    }

    /**
     * Gets location_places
     *
     * @return \Brixion\Kolibri\Model\LocationPlace[]|null
     */
    public function getLocationPlaces()
    {
        return $this->container['location_places'];
    }

    /**
     * Sets location_places
     *
     * @param \Brixion\Kolibri\Model\LocationPlace[]|null $location_places location_places
     *
     * @return self
     */
    public function setLocationPlaces($location_places)
    {
        if (is_null($location_places)) {
            throw new \InvalidArgumentException('non-nullable location_places cannot be null');
        }
        $this->container['location_places'] = $location_places;

        return $this;
    }

    /**
     * Gets orientation_main_garden
     *
     * @return \Brixion\Kolibri\Model\Orientation|null
     */
    public function getOrientationMainGarden()
    {
        return $this->container['orientation_main_garden'];
    }

    /**
     * Sets orientation_main_garden
     *
     * @param \Brixion\Kolibri\Model\Orientation|null $orientation_main_garden orientation_main_garden
     *
     * @return self
     */
    public function setOrientationMainGarden($orientation_main_garden)
    {
        if (is_null($orientation_main_garden)) {
            throw new \InvalidArgumentException('non-nullable orientation_main_garden cannot be null');
        }
        $this->container['orientation_main_garden'] = $orientation_main_garden;

        return $this;
    }

    /**
     * Gets available_from
     *
     * @return \DateTime|null
     */
    public function getAvailableFrom()
    {
        return $this->container['available_from'];
    }

    /**
     * Sets available_from
     *
     * @param \DateTime|null $available_from available_from
     *
     * @return self
     */
    public function setAvailableFrom($available_from)
    {
        if (is_null($available_from)) {
            throw new \InvalidArgumentException('non-nullable available_from cannot be null');
        }
        $this->container['available_from'] = $available_from;

        return $this;
    }

    /**
     * Gets min_energy_class
     *
     * @return \Brixion\Kolibri\Model\EnergyClass|null
     */
    public function getMinEnergyClass()
    {
        return $this->container['min_energy_class'];
    }

    /**
     * Sets min_energy_class
     *
     * @param \Brixion\Kolibri\Model\EnergyClass|null $min_energy_class min_energy_class
     *
     * @return self
     */
    public function setMinEnergyClass($min_energy_class)
    {
        if (is_null($min_energy_class)) {
            throw new \InvalidArgumentException('non-nullable min_energy_class cannot be null');
        }
        $this->container['min_energy_class'] = $min_energy_class;

        return $this;
    }

    /**
     * Gets measurement_unit
     *
     * @return \Brixion\Kolibri\Model\MeasurementUnit|null
     */
    public function getMeasurementUnit()
    {
        return $this->container['measurement_unit'];
    }

    /**
     * Sets measurement_unit
     *
     * @param \Brixion\Kolibri\Model\MeasurementUnit|null $measurement_unit measurement_unit
     *
     * @return self
     */
    public function setMeasurementUnit($measurement_unit)
    {
        if (is_null($measurement_unit)) {
            throw new \InvalidArgumentException('non-nullable measurement_unit cannot be null');
        }
        $this->container['measurement_unit'] = $measurement_unit;

        return $this;
    }

    /**
     * Gets iso_currency_code
     *
     * @return string|null
     */
    public function getIsoCurrencyCode()
    {
        return $this->container['iso_currency_code'];
    }

    /**
     * Sets iso_currency_code
     *
     * @param string|null $iso_currency_code iso_currency_code
     *
     * @return self
     */
    public function setIsoCurrencyCode($iso_currency_code)
    {
        if (is_null($iso_currency_code)) {
            throw new \InvalidArgumentException('non-nullable iso_currency_code cannot be null');
        }
        $this->container['iso_currency_code'] = $iso_currency_code;

        return $this;
    }

    /**
     * Gets must_be_recently_modified
     *
     * @return bool|null
     */
    public function getMustBeRecentlyModified()
    {
        return $this->container['must_be_recently_modified'];
    }

    /**
     * Sets must_be_recently_modified
     *
     * @param bool|null $must_be_recently_modified must_be_recently_modified
     *
     * @return self
     */
    public function setMustBeRecentlyModified($must_be_recently_modified)
    {
        if (is_null($must_be_recently_modified)) {
            throw new \InvalidArgumentException('non-nullable must_be_recently_modified cannot be null');
        }
        $this->container['must_be_recently_modified'] = $must_be_recently_modified;

        return $this;
    }

    /**
     * Gets must_be_new_on_market
     *
     * @return bool|null
     */
    public function getMustBeNewOnMarket()
    {
        return $this->container['must_be_new_on_market'];
    }

    /**
     * Sets must_be_new_on_market
     *
     * @param bool|null $must_be_new_on_market must_be_new_on_market
     *
     * @return self
     */
    public function setMustBeNewOnMarket($must_be_new_on_market)
    {
        if (is_null($must_be_new_on_market)) {
            throw new \InvalidArgumentException('non-nullable must_be_new_on_market cannot be null');
        }
        $this->container['must_be_new_on_market'] = $must_be_new_on_market;

        return $this;
    }

    /**
     * Gets must_be_topper
     *
     * @return bool|null
     */
    public function getMustBeTopper()
    {
        return $this->container['must_be_topper'];
    }

    /**
     * Sets must_be_topper
     *
     * @param bool|null $must_be_topper must_be_topper
     *
     * @return self
     */
    public function setMustBeTopper($must_be_topper)
    {
        if (is_null($must_be_topper)) {
            throw new \InvalidArgumentException('non-nullable must_be_topper cannot be null');
        }
        $this->container['must_be_topper'] = $must_be_topper;

        return $this;
    }

    /**
     * Gets must_be_special
     *
     * @return bool|null
     */
    public function getMustBeSpecial()
    {
        return $this->container['must_be_special'];
    }

    /**
     * Sets must_be_special
     *
     * @param bool|null $must_be_special must_be_special
     *
     * @return self
     */
    public function setMustBeSpecial($must_be_special)
    {
        if (is_null($must_be_special)) {
            throw new \InvalidArgumentException('non-nullable must_be_special cannot be null');
        }
        $this->container['must_be_special'] = $must_be_special;

        return $this;
    }

    /**
     * Gets must_have_open_house
     *
     * @return bool|null
     */
    public function getMustHaveOpenHouse()
    {
        return $this->container['must_have_open_house'];
    }

    /**
     * Sets must_have_open_house
     *
     * @param bool|null $must_have_open_house must_have_open_house
     *
     * @return self
     */
    public function setMustHaveOpenHouse($must_have_open_house)
    {
        if (is_null($must_have_open_house)) {
            throw new \InvalidArgumentException('non-nullable must_have_open_house cannot be null');
        }
        $this->container['must_have_open_house'] = $must_have_open_house;

        return $this;
    }

    /**
     * Gets min_livable_area
     *
     * @return int|null
     */
    public function getMinLivableArea()
    {
        return $this->container['min_livable_area'];
    }

    /**
     * Sets min_livable_area
     *
     * @param int|null $min_livable_area min_livable_area
     *
     * @return self
     */
    public function setMinLivableArea($min_livable_area)
    {
        if (is_null($min_livable_area)) {
            throw new \InvalidArgumentException('non-nullable min_livable_area cannot be null');
        }
        $this->container['min_livable_area'] = $min_livable_area;

        return $this;
    }

    /**
     * Gets max_livable_area
     *
     * @return int|null
     */
    public function getMaxLivableArea()
    {
        return $this->container['max_livable_area'];
    }

    /**
     * Sets max_livable_area
     *
     * @param int|null $max_livable_area max_livable_area
     *
     * @return self
     */
    public function setMaxLivableArea($max_livable_area)
    {
        if (is_null($max_livable_area)) {
            throw new \InvalidArgumentException('non-nullable max_livable_area cannot be null');
        }
        $this->container['max_livable_area'] = $max_livable_area;

        return $this;
    }

    /**
     * Gets min_buildable_area
     *
     * @return int|null
     */
    public function getMinBuildableArea()
    {
        return $this->container['min_buildable_area'];
    }

    /**
     * Sets min_buildable_area
     *
     * @param int|null $min_buildable_area min_buildable_area
     *
     * @return self
     */
    public function setMinBuildableArea($min_buildable_area)
    {
        if (is_null($min_buildable_area)) {
            throw new \InvalidArgumentException('non-nullable min_buildable_area cannot be null');
        }
        $this->container['min_buildable_area'] = $min_buildable_area;

        return $this;
    }

    /**
     * Gets max_buildable_area
     *
     * @return int|null
     */
    public function getMaxBuildableArea()
    {
        return $this->container['max_buildable_area'];
    }

    /**
     * Sets max_buildable_area
     *
     * @param int|null $max_buildable_area max_buildable_area
     *
     * @return self
     */
    public function setMaxBuildableArea($max_buildable_area)
    {
        if (is_null($max_buildable_area)) {
            throw new \InvalidArgumentException('non-nullable max_buildable_area cannot be null');
        }
        $this->container['max_buildable_area'] = $max_buildable_area;

        return $this;
    }

    /**
     * Gets min_garden_area
     *
     * @return int|null
     */
    public function getMinGardenArea()
    {
        return $this->container['min_garden_area'];
    }

    /**
     * Sets min_garden_area
     *
     * @param int|null $min_garden_area min_garden_area
     *
     * @return self
     */
    public function setMinGardenArea($min_garden_area)
    {
        if (is_null($min_garden_area)) {
            throw new \InvalidArgumentException('non-nullable min_garden_area cannot be null');
        }
        $this->container['min_garden_area'] = $min_garden_area;

        return $this;
    }

    /**
     * Gets max_garden_area
     *
     * @return int|null
     */
    public function getMaxGardenArea()
    {
        return $this->container['max_garden_area'];
    }

    /**
     * Sets max_garden_area
     *
     * @param int|null $max_garden_area max_garden_area
     *
     * @return self
     */
    public function setMaxGardenArea($max_garden_area)
    {
        if (is_null($max_garden_area)) {
            throw new \InvalidArgumentException('non-nullable max_garden_area cannot be null');
        }
        $this->container['max_garden_area'] = $max_garden_area;

        return $this;
    }

    /**
     * Gets min_nr_of_rooms
     *
     * @return int|null
     */
    public function getMinNrOfRooms()
    {
        return $this->container['min_nr_of_rooms'];
    }

    /**
     * Sets min_nr_of_rooms
     *
     * @param int|null $min_nr_of_rooms min_nr_of_rooms
     *
     * @return self
     */
    public function setMinNrOfRooms($min_nr_of_rooms)
    {
        if (is_null($min_nr_of_rooms)) {
            throw new \InvalidArgumentException('non-nullable min_nr_of_rooms cannot be null');
        }
        $this->container['min_nr_of_rooms'] = $min_nr_of_rooms;

        return $this;
    }

    /**
     * Gets max_nr_of_rooms
     *
     * @return int|null
     */
    public function getMaxNrOfRooms()
    {
        return $this->container['max_nr_of_rooms'];
    }

    /**
     * Sets max_nr_of_rooms
     *
     * @param int|null $max_nr_of_rooms max_nr_of_rooms
     *
     * @return self
     */
    public function setMaxNrOfRooms($max_nr_of_rooms)
    {
        if (is_null($max_nr_of_rooms)) {
            throw new \InvalidArgumentException('non-nullable max_nr_of_rooms cannot be null');
        }
        $this->container['max_nr_of_rooms'] = $max_nr_of_rooms;

        return $this;
    }

    /**
     * Gets min_nr_of_bathrooms
     *
     * @return int|null
     */
    public function getMinNrOfBathrooms()
    {
        return $this->container['min_nr_of_bathrooms'];
    }

    /**
     * Sets min_nr_of_bathrooms
     *
     * @param int|null $min_nr_of_bathrooms min_nr_of_bathrooms
     *
     * @return self
     */
    public function setMinNrOfBathrooms($min_nr_of_bathrooms)
    {
        if (is_null($min_nr_of_bathrooms)) {
            throw new \InvalidArgumentException('non-nullable min_nr_of_bathrooms cannot be null');
        }
        $this->container['min_nr_of_bathrooms'] = $min_nr_of_bathrooms;

        return $this;
    }

    /**
     * Gets max_nr_of_bathrooms
     *
     * @return int|null
     */
    public function getMaxNrOfBathrooms()
    {
        return $this->container['max_nr_of_bathrooms'];
    }

    /**
     * Sets max_nr_of_bathrooms
     *
     * @param int|null $max_nr_of_bathrooms max_nr_of_bathrooms
     *
     * @return self
     */
    public function setMaxNrOfBathrooms($max_nr_of_bathrooms)
    {
        if (is_null($max_nr_of_bathrooms)) {
            throw new \InvalidArgumentException('non-nullable max_nr_of_bathrooms cannot be null');
        }
        $this->container['max_nr_of_bathrooms'] = $max_nr_of_bathrooms;

        return $this;
    }

    /**
     * Gets min_nr_of_bedrooms
     *
     * @return int|null
     */
    public function getMinNrOfBedrooms()
    {
        return $this->container['min_nr_of_bedrooms'];
    }

    /**
     * Sets min_nr_of_bedrooms
     *
     * @param int|null $min_nr_of_bedrooms min_nr_of_bedrooms
     *
     * @return self
     */
    public function setMinNrOfBedrooms($min_nr_of_bedrooms)
    {
        if (is_null($min_nr_of_bedrooms)) {
            throw new \InvalidArgumentException('non-nullable min_nr_of_bedrooms cannot be null');
        }
        $this->container['min_nr_of_bedrooms'] = $min_nr_of_bedrooms;

        return $this;
    }

    /**
     * Gets max_nr_of_bedrooms
     *
     * @return int|null
     */
    public function getMaxNrOfBedrooms()
    {
        return $this->container['max_nr_of_bedrooms'];
    }

    /**
     * Sets max_nr_of_bedrooms
     *
     * @param int|null $max_nr_of_bedrooms max_nr_of_bedrooms
     *
     * @return self
     */
    public function setMaxNrOfBedrooms($max_nr_of_bedrooms)
    {
        if (is_null($max_nr_of_bedrooms)) {
            throw new \InvalidArgumentException('non-nullable max_nr_of_bedrooms cannot be null');
        }
        $this->container['max_nr_of_bedrooms'] = $max_nr_of_bedrooms;

        return $this;
    }

    /**
     * Gets min_parking_capacity
     *
     * @return int|null
     */
    public function getMinParkingCapacity()
    {
        return $this->container['min_parking_capacity'];
    }

    /**
     * Sets min_parking_capacity
     *
     * @param int|null $min_parking_capacity min_parking_capacity
     *
     * @return self
     */
    public function setMinParkingCapacity($min_parking_capacity)
    {
        if (is_null($min_parking_capacity)) {
            throw new \InvalidArgumentException('non-nullable min_parking_capacity cannot be null');
        }
        $this->container['min_parking_capacity'] = $min_parking_capacity;

        return $this;
    }

    /**
     * Gets max_parking_capacity
     *
     * @return int|null
     */
    public function getMaxParkingCapacity()
    {
        return $this->container['max_parking_capacity'];
    }

    /**
     * Sets max_parking_capacity
     *
     * @param int|null $max_parking_capacity max_parking_capacity
     *
     * @return self
     */
    public function setMaxParkingCapacity($max_parking_capacity)
    {
        if (is_null($max_parking_capacity)) {
            throw new \InvalidArgumentException('non-nullable max_parking_capacity cannot be null');
        }
        $this->container['max_parking_capacity'] = $max_parking_capacity;

        return $this;
    }

    /**
     * Gets must_be_qualified_for_seniors
     *
     * @return bool|null
     */
    public function getMustBeQualifiedForSeniors()
    {
        return $this->container['must_be_qualified_for_seniors'];
    }

    /**
     * Sets must_be_qualified_for_seniors
     *
     * @param bool|null $must_be_qualified_for_seniors must_be_qualified_for_seniors
     *
     * @return self
     */
    public function setMustBeQualifiedForSeniors($must_be_qualified_for_seniors)
    {
        if (is_null($must_be_qualified_for_seniors)) {
            throw new \InvalidArgumentException('non-nullable must_be_qualified_for_seniors cannot be null');
        }
        $this->container['must_be_qualified_for_seniors'] = $must_be_qualified_for_seniors;

        return $this;
    }

    /**
     * Gets max_energy_class
     *
     * @return \Brixion\Kolibri\Model\EnergyClass|null
     */
    public function getMaxEnergyClass()
    {
        return $this->container['max_energy_class'];
    }

    /**
     * Sets max_energy_class
     *
     * @param \Brixion\Kolibri\Model\EnergyClass|null $max_energy_class max_energy_class
     *
     * @return self
     */
    public function setMaxEnergyClass($max_energy_class)
    {
        if (is_null($max_energy_class)) {
            throw new \InvalidArgumentException('non-nullable max_energy_class cannot be null');
        }
        $this->container['max_energy_class'] = $max_energy_class;

        return $this;
    }

    /**
     * Gets min_condition_inside
     *
     * @return \Brixion\Kolibri\Model\Condition|null
     */
    public function getMinConditionInside()
    {
        return $this->container['min_condition_inside'];
    }

    /**
     * Sets min_condition_inside
     *
     * @param \Brixion\Kolibri\Model\Condition|null $min_condition_inside min_condition_inside
     *
     * @return self
     */
    public function setMinConditionInside($min_condition_inside)
    {
        if (is_null($min_condition_inside)) {
            throw new \InvalidArgumentException('non-nullable min_condition_inside cannot be null');
        }
        $this->container['min_condition_inside'] = $min_condition_inside;

        return $this;
    }

    /**
     * Gets max_condition_inside
     *
     * @return \Brixion\Kolibri\Model\Condition|null
     */
    public function getMaxConditionInside()
    {
        return $this->container['max_condition_inside'];
    }

    /**
     * Sets max_condition_inside
     *
     * @param \Brixion\Kolibri\Model\Condition|null $max_condition_inside max_condition_inside
     *
     * @return self
     */
    public function setMaxConditionInside($max_condition_inside)
    {
        if (is_null($max_condition_inside)) {
            throw new \InvalidArgumentException('non-nullable max_condition_inside cannot be null');
        }
        $this->container['max_condition_inside'] = $max_condition_inside;

        return $this;
    }

    /**
     * Gets min_condition_outside
     *
     * @return \Brixion\Kolibri\Model\Condition|null
     */
    public function getMinConditionOutside()
    {
        return $this->container['min_condition_outside'];
    }

    /**
     * Sets min_condition_outside
     *
     * @param \Brixion\Kolibri\Model\Condition|null $min_condition_outside min_condition_outside
     *
     * @return self
     */
    public function setMinConditionOutside($min_condition_outside)
    {
        if (is_null($min_condition_outside)) {
            throw new \InvalidArgumentException('non-nullable min_condition_outside cannot be null');
        }
        $this->container['min_condition_outside'] = $min_condition_outside;

        return $this;
    }

    /**
     * Gets max_condition_outside
     *
     * @return \Brixion\Kolibri\Model\Condition|null
     */
    public function getMaxConditionOutside()
    {
        return $this->container['max_condition_outside'];
    }

    /**
     * Sets max_condition_outside
     *
     * @param \Brixion\Kolibri\Model\Condition|null $max_condition_outside max_condition_outside
     *
     * @return self
     */
    public function setMaxConditionOutside($max_condition_outside)
    {
        if (is_null($max_condition_outside)) {
            throw new \InvalidArgumentException('non-nullable max_condition_outside cannot be null');
        }
        $this->container['max_condition_outside'] = $max_condition_outside;

        return $this;
    }

    /**
     * Gets must_be_on_top_floor
     *
     * @return bool|null
     */
    public function getMustBeOnTopFloor()
    {
        return $this->container['must_be_on_top_floor'];
    }

    /**
     * Sets must_be_on_top_floor
     *
     * @param bool|null $must_be_on_top_floor must_be_on_top_floor
     *
     * @return self
     */
    public function setMustBeOnTopFloor($must_be_on_top_floor)
    {
        if (is_null($must_be_on_top_floor)) {
            throw new \InvalidArgumentException('non-nullable must_be_on_top_floor cannot be null');
        }
        $this->container['must_be_on_top_floor'] = $must_be_on_top_floor;

        return $this;
    }

    /**
     * Gets must_be_on_ground_floor
     *
     * @return bool|null
     */
    public function getMustBeOnGroundFloor()
    {
        return $this->container['must_be_on_ground_floor'];
    }

    /**
     * Sets must_be_on_ground_floor
     *
     * @param bool|null $must_be_on_ground_floor must_be_on_ground_floor
     *
     * @return self
     */
    public function setMustBeOnGroundFloor($must_be_on_ground_floor)
    {
        if (is_null($must_be_on_ground_floor)) {
            throw new \InvalidArgumentException('non-nullable must_be_on_ground_floor cannot be null');
        }
        $this->container['must_be_on_ground_floor'] = $must_be_on_ground_floor;

        return $this;
    }

    /**
     * Gets facilities
     *
     * @return \Brixion\Kolibri\Model\SearchAssignmentFacilityType[]|null
     */
    public function getFacilities()
    {
        return $this->container['facilities'];
    }

    /**
     * Sets facilities
     *
     * @param \Brixion\Kolibri\Model\SearchAssignmentFacilityType[]|null $facilities facilities
     *
     * @return self
     */
    public function setFacilities($facilities)
    {
        if (is_null($facilities)) {
            throw new \InvalidArgumentException('non-nullable facilities cannot be null');
        }
        $this->container['facilities'] = $facilities;

        return $this;
    }

    /**
     * Gets peculiarities
     *
     * @return \Brixion\Kolibri\Model\SearchAssignmentPeculiarityType[]|null
     */
    public function getPeculiarities()
    {
        return $this->container['peculiarities'];
    }

    /**
     * Sets peculiarities
     *
     * @param \Brixion\Kolibri\Model\SearchAssignmentPeculiarityType[]|null $peculiarities peculiarities
     *
     * @return self
     */
    public function setPeculiarities($peculiarities)
    {
        if (is_null($peculiarities)) {
            throw new \InvalidArgumentException('non-nullable peculiarities cannot be null');
        }
        $this->container['peculiarities'] = $peculiarities;

        return $this;
    }

    /**
     * Gets house_sorts
     *
     * @return \Brixion\Kolibri\Model\HouseSort[]|null
     */
    public function getHouseSorts()
    {
        return $this->container['house_sorts'];
    }

    /**
     * Sets house_sorts
     *
     * @param \Brixion\Kolibri\Model\HouseSort[]|null $house_sorts house_sorts
     *
     * @return self
     */
    public function setHouseSorts($house_sorts)
    {
        if (is_null($house_sorts)) {
            throw new \InvalidArgumentException('non-nullable house_sorts cannot be null');
        }
        $this->container['house_sorts'] = $house_sorts;

        return $this;
    }

    /**
     * Gets house_types
     *
     * @return \Brixion\Kolibri\Model\HouseType[]|null
     */
    public function getHouseTypes()
    {
        return $this->container['house_types'];
    }

    /**
     * Sets house_types
     *
     * @param \Brixion\Kolibri\Model\HouseType[]|null $house_types house_types
     *
     * @return self
     */
    public function setHouseTypes($house_types)
    {
        if (is_null($house_types)) {
            throw new \InvalidArgumentException('non-nullable house_types cannot be null');
        }
        $this->container['house_types'] = $house_types;

        return $this;
    }

    /**
     * Gets furnishing
     *
     * @return \Brixion\Kolibri\Model\Furnishing|null
     */
    public function getFurnishing()
    {
        return $this->container['furnishing'];
    }

    /**
     * Sets furnishing
     *
     * @param \Brixion\Kolibri\Model\Furnishing|null $furnishing furnishing
     *
     * @return self
     */
    public function setFurnishing($furnishing)
    {
        if (is_null($furnishing)) {
            throw new \InvalidArgumentException('non-nullable furnishing cannot be null');
        }
        $this->container['furnishing'] = $furnishing;

        return $this;
    }

    /**
     * Gets is_paid
     *
     * @return bool
     */
    public function getIsPaid()
    {
        return $this->container['is_paid'];
    }

    /**
     * Sets is_paid
     *
     * @param bool $is_paid is_paid
     *
     * @return self
     */
    public function setIsPaid($is_paid)
    {
        if (is_null($is_paid)) {
            throw new \InvalidArgumentException('non-nullable is_paid cannot be null');
        }
        $this->container['is_paid'] = $is_paid;

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
            throw new \InvalidArgumentException('invalid length for $id when calling SearchAssignment., must be bigger than or equal to 1.');
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
