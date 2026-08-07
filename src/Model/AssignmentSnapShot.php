<?php

declare(strict_types=1);

/**
 * AssignmentSnapShot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AssignmentSnapShot.
 * @implements \ArrayAccess<string, mixed>
 */
class AssignmentSnapShot implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AssignmentSnapShot';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'assignment_phase' => '\Brixion\Kolibri\Model\AssignmentPhase',
        'availability_status' => '\Brixion\Kolibri\Model\AvailabilityStatus',
        'country_code' => 'string',
        'date_rented_reservation' => '\DateTime',
        'date_sold' => '\DateTime',
        'date_sold_reservation' => '\DateTime',
        'date_transfer' => '\DateTime',
        'display_name' => 'string',
        'for_rent' => 'bool',
        'for_sale' => 'bool',
        'has_cadastres' => 'bool',
        'is_active' => 'bool',
        'is_part_of_project' => 'bool',
        'construction_number' => 'int',
        'construction_number_string' => 'string',
        'key_note' => 'string',
        'key_nr' => 'int',
        'linked_applicants' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_employee' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_notaries' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_office' => '\Brixion\Kolibri\Model\LinkedOffice',
        'linked_property_managers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_vendors' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_clients' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'listing_type' => '\Brixion\Kolibri\Model\ListingType',
        'locality' => 'string',
        'mandate_date_time' => '\DateTime',
        'photo1_url' => 'string',
        'photo2_url' => 'string',
        'photo3_url' => 'string',
        'postal_code' => 'string',
        'linked_project_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'linked_object_type_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'linked_bids' => '\Brixion\Kolibri\Model\LinkedBid[]',
        'public_reference' => 'string',
        'real_estate_agency_id' => 'string',
        'real_estate_group' => '\Brixion\Kolibri\Model\RealEstateGroup',
        'rent_commission_total' => 'float',
        'rent_condition' => '\Brixion\Kolibri\Model\RentCondition',
        'rented_from' => '\DateTime',
        'rent_price' => 'float',
        'rent_price_per_unit' => 'float',
        'rent_price_max' => 'float',
        'rent_vat_condition' => '\Brixion\Kolibri\Model\VatCondition',
        'sale_commission_total' => 'float',
        'sale_condition' => '\Brixion\Kolibri\Model\SaleCondition',
        'sale_price' => 'float',
        'sale_price_per_unit' => 'float',
        'sale_price_max' => 'float',
        'sale_vat_condition' => '\Brixion\Kolibri\Model\VatCondition',
        'street_name_and_number' => 'string',
        'total_nr_of_photos' => 'int',
        'total_nr_of_videos' => 'int',
        'type_of_assignment' => '\Brixion\Kolibri\Model\AssignmentType',
        'video1_url' => 'string',
        'withdrawn_date_time' => '\DateTime',
        'withdraw_reason' => '\Brixion\Kolibri\Model\WithdrawReason',
        'date_time_created' => '\DateTime',
        'latitude' => 'float',
        'longitude' => 'float',
        'date_time_modified' => '\DateTime',
        'linked_created_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'linked_modified_by' => '\Brixion\Kolibri\Model\LinkedEmployee',
        'furnishing' => '\Brixion\Kolibri\Model\Furnishing',
        'number_of_bedrooms' => 'int',
        'number_of_bath_rooms' => 'int',
        'acquisition_status' => '\Brixion\Kolibri\Model\AcquisitionStatus',
        'is_confidential' => 'bool',
        'available_from' => '\DateTime',
        'available_until' => '\DateTime',
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
        'date_rented_reservation' => 'date-time',
        'date_sold' => 'date-time',
        'date_sold_reservation' => 'date-time',
        'date_transfer' => 'date-time',
        'display_name' => null,
        'for_rent' => null,
        'for_sale' => null,
        'has_cadastres' => null,
        'is_active' => null,
        'is_part_of_project' => null,
        'construction_number' => 'int32',
        'construction_number_string' => null,
        'key_note' => null,
        'key_nr' => 'int32',
        'linked_applicants' => null,
        'linked_employee' => null,
        'linked_notaries' => null,
        'linked_office' => null,
        'linked_property_managers' => null,
        'linked_vendors' => null,
        'linked_clients' => null,
        'listing_type' => null,
        'locality' => null,
        'mandate_date_time' => 'date-time',
        'photo1_url' => null,
        'photo2_url' => null,
        'photo3_url' => null,
        'postal_code' => null,
        'linked_project_assignment' => null,
        'linked_object_type_assignment' => null,
        'linked_bids' => null,
        'public_reference' => null,
        'real_estate_agency_id' => 'guid',
        'real_estate_group' => null,
        'rent_commission_total' => 'decimal',
        'rent_condition' => null,
        'rented_from' => 'date-time',
        'rent_price' => 'decimal',
        'rent_price_per_unit' => 'decimal',
        'rent_price_max' => 'decimal',
        'rent_vat_condition' => null,
        'sale_commission_total' => 'decimal',
        'sale_condition' => null,
        'sale_price' => 'decimal',
        'sale_price_per_unit' => 'decimal',
        'sale_price_max' => 'decimal',
        'sale_vat_condition' => null,
        'street_name_and_number' => null,
        'total_nr_of_photos' => 'int32',
        'total_nr_of_videos' => 'int32',
        'type_of_assignment' => null,
        'video1_url' => null,
        'withdrawn_date_time' => 'date-time',
        'withdraw_reason' => null,
        'date_time_created' => 'date-time',
        'latitude' => 'decimal',
        'longitude' => 'decimal',
        'date_time_modified' => 'date-time',
        'linked_created_by' => null,
        'linked_modified_by' => null,
        'furnishing' => null,
        'number_of_bedrooms' => 'int32',
        'number_of_bath_rooms' => 'int32',
        'acquisition_status' => null,
        'is_confidential' => null,
        'available_from' => 'date-time',
        'available_until' => 'date-time',
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
        'date_rented_reservation' => false,
        'date_sold' => false,
        'date_sold_reservation' => false,
        'date_transfer' => false,
        'display_name' => false,
        'for_rent' => false,
        'for_sale' => false,
        'has_cadastres' => false,
        'is_active' => false,
        'is_part_of_project' => false,
        'construction_number' => false,
        'construction_number_string' => false,
        'key_note' => false,
        'key_nr' => false,
        'linked_applicants' => false,
        'linked_employee' => false,
        'linked_notaries' => false,
        'linked_office' => false,
        'linked_property_managers' => false,
        'linked_vendors' => false,
        'linked_clients' => false,
        'listing_type' => false,
        'locality' => false,
        'mandate_date_time' => false,
        'photo1_url' => false,
        'photo2_url' => false,
        'photo3_url' => false,
        'postal_code' => false,
        'linked_project_assignment' => false,
        'linked_object_type_assignment' => false,
        'linked_bids' => false,
        'public_reference' => false,
        'real_estate_agency_id' => false,
        'real_estate_group' => false,
        'rent_commission_total' => false,
        'rent_condition' => false,
        'rented_from' => false,
        'rent_price' => false,
        'rent_price_per_unit' => false,
        'rent_price_max' => false,
        'rent_vat_condition' => false,
        'sale_commission_total' => false,
        'sale_condition' => false,
        'sale_price' => false,
        'sale_price_per_unit' => false,
        'sale_price_max' => false,
        'sale_vat_condition' => false,
        'street_name_and_number' => false,
        'total_nr_of_photos' => false,
        'total_nr_of_videos' => false,
        'type_of_assignment' => false,
        'video1_url' => false,
        'withdrawn_date_time' => false,
        'withdraw_reason' => false,
        'date_time_created' => false,
        'latitude' => false,
        'longitude' => false,
        'date_time_modified' => false,
        'linked_created_by' => false,
        'linked_modified_by' => false,
        'furnishing' => false,
        'number_of_bedrooms' => false,
        'number_of_bath_rooms' => false,
        'acquisition_status' => false,
        'is_confidential' => false,
        'available_from' => false,
        'available_until' => false,
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
        'date_rented_reservation' => 'dateRentedReservation',
        'date_sold' => 'dateSold',
        'date_sold_reservation' => 'dateSoldReservation',
        'date_transfer' => 'dateTransfer',
        'display_name' => 'displayName',
        'for_rent' => 'forRent',
        'for_sale' => 'forSale',
        'has_cadastres' => 'hasCadastres',
        'is_active' => 'isActive',
        'is_part_of_project' => 'isPartOfProject',
        'construction_number' => 'constructionNumber',
        'construction_number_string' => 'constructionNumberString',
        'key_note' => 'keyNote',
        'key_nr' => 'keyNr',
        'linked_applicants' => 'linkedApplicants',
        'linked_employee' => 'linkedEmployee',
        'linked_notaries' => 'linkedNotaries',
        'linked_office' => 'linkedOffice',
        'linked_property_managers' => 'linkedPropertyManagers',
        'linked_vendors' => 'linkedVendors',
        'linked_clients' => 'linkedClients',
        'listing_type' => 'listingType',
        'locality' => 'locality',
        'mandate_date_time' => 'mandateDateTime',
        'photo1_url' => 'photo1Url',
        'photo2_url' => 'photo2Url',
        'photo3_url' => 'photo3Url',
        'postal_code' => 'postalCode',
        'linked_project_assignment' => 'linkedProjectAssignment',
        'linked_object_type_assignment' => 'linkedObjectTypeAssignment',
        'linked_bids' => 'linkedBids',
        'public_reference' => 'publicReference',
        'real_estate_agency_id' => 'realEstateAgencyId',
        'real_estate_group' => 'realEstateGroup',
        'rent_commission_total' => 'rentCommissionTotal',
        'rent_condition' => 'rentCondition',
        'rented_from' => 'rentedFrom',
        'rent_price' => 'rentPrice',
        'rent_price_per_unit' => 'rentPricePerUnit',
        'rent_price_max' => 'rentPriceMax',
        'rent_vat_condition' => 'rentVatCondition',
        'sale_commission_total' => 'saleCommissionTotal',
        'sale_condition' => 'saleCondition',
        'sale_price' => 'salePrice',
        'sale_price_per_unit' => 'salePricePerUnit',
        'sale_price_max' => 'salePriceMax',
        'sale_vat_condition' => 'saleVatCondition',
        'street_name_and_number' => 'streetNameAndNumber',
        'total_nr_of_photos' => 'totalNrOfPhotos',
        'total_nr_of_videos' => 'totalNrOfVideos',
        'type_of_assignment' => 'typeOfAssignment',
        'video1_url' => 'video1Url',
        'withdrawn_date_time' => 'withdrawnDateTime',
        'withdraw_reason' => 'withdrawReason',
        'date_time_created' => 'dateTimeCreated',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'date_time_modified' => 'dateTimeModified',
        'linked_created_by' => 'linkedCreatedBy',
        'linked_modified_by' => 'linkedModifiedBy',
        'furnishing' => 'furnishing',
        'number_of_bedrooms' => 'numberOfBedrooms',
        'number_of_bath_rooms' => 'numberOfBathRooms',
        'acquisition_status' => 'acquisitionStatus',
        'is_confidential' => 'isConfidential',
        'available_from' => 'availableFrom',
        'available_until' => 'availableUntil',
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
        'date_rented_reservation' => 'setDateRentedReservation',
        'date_sold' => 'setDateSold',
        'date_sold_reservation' => 'setDateSoldReservation',
        'date_transfer' => 'setDateTransfer',
        'display_name' => 'setDisplayName',
        'for_rent' => 'setForRent',
        'for_sale' => 'setForSale',
        'has_cadastres' => 'setHasCadastres',
        'is_active' => 'setIsActive',
        'is_part_of_project' => 'setIsPartOfProject',
        'construction_number' => 'setConstructionNumber',
        'construction_number_string' => 'setConstructionNumberString',
        'key_note' => 'setKeyNote',
        'key_nr' => 'setKeyNr',
        'linked_applicants' => 'setLinkedApplicants',
        'linked_employee' => 'setLinkedEmployee',
        'linked_notaries' => 'setLinkedNotaries',
        'linked_office' => 'setLinkedOffice',
        'linked_property_managers' => 'setLinkedPropertyManagers',
        'linked_vendors' => 'setLinkedVendors',
        'linked_clients' => 'setLinkedClients',
        'listing_type' => 'setListingType',
        'locality' => 'setLocality',
        'mandate_date_time' => 'setMandateDateTime',
        'photo1_url' => 'setPhoto1Url',
        'photo2_url' => 'setPhoto2Url',
        'photo3_url' => 'setPhoto3Url',
        'postal_code' => 'setPostalCode',
        'linked_project_assignment' => 'setLinkedProjectAssignment',
        'linked_object_type_assignment' => 'setLinkedObjectTypeAssignment',
        'linked_bids' => 'setLinkedBids',
        'public_reference' => 'setPublicReference',
        'real_estate_agency_id' => 'setRealEstateAgencyId',
        'real_estate_group' => 'setRealEstateGroup',
        'rent_commission_total' => 'setRentCommissionTotal',
        'rent_condition' => 'setRentCondition',
        'rented_from' => 'setRentedFrom',
        'rent_price' => 'setRentPrice',
        'rent_price_per_unit' => 'setRentPricePerUnit',
        'rent_price_max' => 'setRentPriceMax',
        'rent_vat_condition' => 'setRentVatCondition',
        'sale_commission_total' => 'setSaleCommissionTotal',
        'sale_condition' => 'setSaleCondition',
        'sale_price' => 'setSalePrice',
        'sale_price_per_unit' => 'setSalePricePerUnit',
        'sale_price_max' => 'setSalePriceMax',
        'sale_vat_condition' => 'setSaleVatCondition',
        'street_name_and_number' => 'setStreetNameAndNumber',
        'total_nr_of_photos' => 'setTotalNrOfPhotos',
        'total_nr_of_videos' => 'setTotalNrOfVideos',
        'type_of_assignment' => 'setTypeOfAssignment',
        'video1_url' => 'setVideo1Url',
        'withdrawn_date_time' => 'setWithdrawnDateTime',
        'withdraw_reason' => 'setWithdrawReason',
        'date_time_created' => 'setDateTimeCreated',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'date_time_modified' => 'setDateTimeModified',
        'linked_created_by' => 'setLinkedCreatedBy',
        'linked_modified_by' => 'setLinkedModifiedBy',
        'furnishing' => 'setFurnishing',
        'number_of_bedrooms' => 'setNumberOfBedrooms',
        'number_of_bath_rooms' => 'setNumberOfBathRooms',
        'acquisition_status' => 'setAcquisitionStatus',
        'is_confidential' => 'setIsConfidential',
        'available_from' => 'setAvailableFrom',
        'available_until' => 'setAvailableUntil',
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
        'date_rented_reservation' => 'getDateRentedReservation',
        'date_sold' => 'getDateSold',
        'date_sold_reservation' => 'getDateSoldReservation',
        'date_transfer' => 'getDateTransfer',
        'display_name' => 'getDisplayName',
        'for_rent' => 'getForRent',
        'for_sale' => 'getForSale',
        'has_cadastres' => 'getHasCadastres',
        'is_active' => 'getIsActive',
        'is_part_of_project' => 'getIsPartOfProject',
        'construction_number' => 'getConstructionNumber',
        'construction_number_string' => 'getConstructionNumberString',
        'key_note' => 'getKeyNote',
        'key_nr' => 'getKeyNr',
        'linked_applicants' => 'getLinkedApplicants',
        'linked_employee' => 'getLinkedEmployee',
        'linked_notaries' => 'getLinkedNotaries',
        'linked_office' => 'getLinkedOffice',
        'linked_property_managers' => 'getLinkedPropertyManagers',
        'linked_vendors' => 'getLinkedVendors',
        'linked_clients' => 'getLinkedClients',
        'listing_type' => 'getListingType',
        'locality' => 'getLocality',
        'mandate_date_time' => 'getMandateDateTime',
        'photo1_url' => 'getPhoto1Url',
        'photo2_url' => 'getPhoto2Url',
        'photo3_url' => 'getPhoto3Url',
        'postal_code' => 'getPostalCode',
        'linked_project_assignment' => 'getLinkedProjectAssignment',
        'linked_object_type_assignment' => 'getLinkedObjectTypeAssignment',
        'linked_bids' => 'getLinkedBids',
        'public_reference' => 'getPublicReference',
        'real_estate_agency_id' => 'getRealEstateAgencyId',
        'real_estate_group' => 'getRealEstateGroup',
        'rent_commission_total' => 'getRentCommissionTotal',
        'rent_condition' => 'getRentCondition',
        'rented_from' => 'getRentedFrom',
        'rent_price' => 'getRentPrice',
        'rent_price_per_unit' => 'getRentPricePerUnit',
        'rent_price_max' => 'getRentPriceMax',
        'rent_vat_condition' => 'getRentVatCondition',
        'sale_commission_total' => 'getSaleCommissionTotal',
        'sale_condition' => 'getSaleCondition',
        'sale_price' => 'getSalePrice',
        'sale_price_per_unit' => 'getSalePricePerUnit',
        'sale_price_max' => 'getSalePriceMax',
        'sale_vat_condition' => 'getSaleVatCondition',
        'street_name_and_number' => 'getStreetNameAndNumber',
        'total_nr_of_photos' => 'getTotalNrOfPhotos',
        'total_nr_of_videos' => 'getTotalNrOfVideos',
        'type_of_assignment' => 'getTypeOfAssignment',
        'video1_url' => 'getVideo1Url',
        'withdrawn_date_time' => 'getWithdrawnDateTime',
        'withdraw_reason' => 'getWithdrawReason',
        'date_time_created' => 'getDateTimeCreated',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'date_time_modified' => 'getDateTimeModified',
        'linked_created_by' => 'getLinkedCreatedBy',
        'linked_modified_by' => 'getLinkedModifiedBy',
        'furnishing' => 'getFurnishing',
        'number_of_bedrooms' => 'getNumberOfBedrooms',
        'number_of_bath_rooms' => 'getNumberOfBathRooms',
        'acquisition_status' => 'getAcquisitionStatus',
        'is_confidential' => 'getIsConfidential',
        'available_from' => 'getAvailableFrom',
        'available_until' => 'getAvailableUntil',
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
        $this->setIfExists('date_rented_reservation', $data ?? [], null);
        $this->setIfExists('date_sold', $data ?? [], null);
        $this->setIfExists('date_sold_reservation', $data ?? [], null);
        $this->setIfExists('date_transfer', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('for_rent', $data ?? [], null);
        $this->setIfExists('for_sale', $data ?? [], null);
        $this->setIfExists('has_cadastres', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('is_part_of_project', $data ?? [], null);
        $this->setIfExists('construction_number', $data ?? [], null);
        $this->setIfExists('construction_number_string', $data ?? [], null);
        $this->setIfExists('key_note', $data ?? [], null);
        $this->setIfExists('key_nr', $data ?? [], null);
        $this->setIfExists('linked_applicants', $data ?? [], null);
        $this->setIfExists('linked_employee', $data ?? [], null);
        $this->setIfExists('linked_notaries', $data ?? [], null);
        $this->setIfExists('linked_office', $data ?? [], null);
        $this->setIfExists('linked_property_managers', $data ?? [], null);
        $this->setIfExists('linked_vendors', $data ?? [], null);
        $this->setIfExists('linked_clients', $data ?? [], null);
        $this->setIfExists('listing_type', $data ?? [], null);
        $this->setIfExists('locality', $data ?? [], null);
        $this->setIfExists('mandate_date_time', $data ?? [], null);
        $this->setIfExists('photo1_url', $data ?? [], null);
        $this->setIfExists('photo2_url', $data ?? [], null);
        $this->setIfExists('photo3_url', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
        $this->setIfExists('linked_project_assignment', $data ?? [], null);
        $this->setIfExists('linked_object_type_assignment', $data ?? [], null);
        $this->setIfExists('linked_bids', $data ?? [], null);
        $this->setIfExists('public_reference', $data ?? [], null);
        $this->setIfExists('real_estate_agency_id', $data ?? [], null);
        $this->setIfExists('real_estate_group', $data ?? [], null);
        $this->setIfExists('rent_commission_total', $data ?? [], null);
        $this->setIfExists('rent_condition', $data ?? [], null);
        $this->setIfExists('rented_from', $data ?? [], null);
        $this->setIfExists('rent_price', $data ?? [], null);
        $this->setIfExists('rent_price_per_unit', $data ?? [], null);
        $this->setIfExists('rent_price_max', $data ?? [], null);
        $this->setIfExists('rent_vat_condition', $data ?? [], null);
        $this->setIfExists('sale_commission_total', $data ?? [], null);
        $this->setIfExists('sale_condition', $data ?? [], null);
        $this->setIfExists('sale_price', $data ?? [], null);
        $this->setIfExists('sale_price_per_unit', $data ?? [], null);
        $this->setIfExists('sale_price_max', $data ?? [], null);
        $this->setIfExists('sale_vat_condition', $data ?? [], null);
        $this->setIfExists('street_name_and_number', $data ?? [], null);
        $this->setIfExists('total_nr_of_photos', $data ?? [], null);
        $this->setIfExists('total_nr_of_videos', $data ?? [], null);
        $this->setIfExists('type_of_assignment', $data ?? [], null);
        $this->setIfExists('video1_url', $data ?? [], null);
        $this->setIfExists('withdrawn_date_time', $data ?? [], null);
        $this->setIfExists('withdraw_reason', $data ?? [], null);
        $this->setIfExists('date_time_created', $data ?? [], null);
        $this->setIfExists('latitude', $data ?? [], null);
        $this->setIfExists('longitude', $data ?? [], null);
        $this->setIfExists('date_time_modified', $data ?? [], null);
        $this->setIfExists('linked_created_by', $data ?? [], null);
        $this->setIfExists('linked_modified_by', $data ?? [], null);
        $this->setIfExists('furnishing', $data ?? [], null);
        $this->setIfExists('number_of_bedrooms', $data ?? [], null);
        $this->setIfExists('number_of_bath_rooms', $data ?? [], null);
        $this->setIfExists('acquisition_status', $data ?? [], null);
        $this->setIfExists('is_confidential', $data ?? [], null);
        $this->setIfExists('available_from', $data ?? [], null);
        $this->setIfExists('available_until', $data ?? [], null);
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

        if ($this->container['assignment_phase'] === null) {
            $invalidProperties[] = "'assignment_phase' can't be null";
        }
        if ($this->container['for_rent'] === null) {
            $invalidProperties[] = "'for_rent' can't be null";
        }
        if ($this->container['for_sale'] === null) {
            $invalidProperties[] = "'for_sale' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['real_estate_agency_id'] === null) {
            $invalidProperties[] = "'real_estate_agency_id' can't be null";
        }
        if ($this->container['real_estate_group'] === null) {
            $invalidProperties[] = "'real_estate_group' can't be null";
        }
        if ($this->container['type_of_assignment'] === null) {
            $invalidProperties[] = "'type_of_assignment' can't be null";
        }
        if ($this->container['date_time_created'] === null) {
            $invalidProperties[] = "'date_time_created' can't be null";
        }
        if ($this->container['date_time_modified'] === null) {
            $invalidProperties[] = "'date_time_modified' can't be null";
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
     * Gets date_rented_reservation
     *
     * @return \DateTime|null
     */
    public function getDateRentedReservation()
    {
        return $this->container['date_rented_reservation'];
    }

    /**
     * Sets date_rented_reservation
     *
     * @param \DateTime|null $date_rented_reservation date_rented_reservation
     *
     * @return self
     */
    public function setDateRentedReservation($date_rented_reservation)
    {
        if (is_null($date_rented_reservation)) {
            throw new \InvalidArgumentException('non-nullable date_rented_reservation cannot be null');
        }
        $this->container['date_rented_reservation'] = $date_rented_reservation;

        return $this;
    }

    /**
     * Gets date_sold
     *
     * @return \DateTime|null
     */
    public function getDateSold()
    {
        return $this->container['date_sold'];
    }

    /**
     * Sets date_sold
     *
     * @param \DateTime|null $date_sold date_sold
     *
     * @return self
     */
    public function setDateSold($date_sold)
    {
        if (is_null($date_sold)) {
            throw new \InvalidArgumentException('non-nullable date_sold cannot be null');
        }
        $this->container['date_sold'] = $date_sold;

        return $this;
    }

    /**
     * Gets date_sold_reservation
     *
     * @return \DateTime|null
     */
    public function getDateSoldReservation()
    {
        return $this->container['date_sold_reservation'];
    }

    /**
     * Sets date_sold_reservation
     *
     * @param \DateTime|null $date_sold_reservation date_sold_reservation
     *
     * @return self
     */
    public function setDateSoldReservation($date_sold_reservation)
    {
        if (is_null($date_sold_reservation)) {
            throw new \InvalidArgumentException('non-nullable date_sold_reservation cannot be null');
        }
        $this->container['date_sold_reservation'] = $date_sold_reservation;

        return $this;
    }

    /**
     * Gets date_transfer
     *
     * @return \DateTime|null
     */
    public function getDateTransfer()
    {
        return $this->container['date_transfer'];
    }

    /**
     * Sets date_transfer
     *
     * @param \DateTime|null $date_transfer date_transfer
     *
     * @return self
     */
    public function setDateTransfer($date_transfer)
    {
        if (is_null($date_transfer)) {
            throw new \InvalidArgumentException('non-nullable date_transfer cannot be null');
        }
        $this->container['date_transfer'] = $date_transfer;

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
     * @return bool
     */
    public function getForRent()
    {
        return $this->container['for_rent'];
    }

    /**
     * Sets for_rent
     *
     * @param bool $for_rent Is this a 'for rent' assignment?
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
     * @return bool
     */
    public function getForSale()
    {
        return $this->container['for_sale'];
    }

    /**
     * Sets for_sale
     *
     * @param bool $for_sale Is this a 'for sale' assignment?
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
     * Gets is_part_of_project
     *
     * @return bool|null
     */
    public function getIsPartOfProject()
    {
        return $this->container['is_part_of_project'];
    }

    /**
     * Sets is_part_of_project
     *
     * @param bool|null $is_part_of_project Is this assignment linked at a project assignment?
     *
     * @return self
     */
    public function setIsPartOfProject($is_part_of_project)
    {
        if (is_null($is_part_of_project)) {
            throw new \InvalidArgumentException('non-nullable is_part_of_project cannot be null');
        }
        $this->container['is_part_of_project'] = $is_part_of_project;

        return $this;
    }

    /**
     * Gets construction_number
     *
     * @return int|null
     */
    public function getConstructionNumber()
    {
        return $this->container['construction_number'];
    }

    /**
     * Sets construction_number
     *
     * @param int|null $construction_number construction_number
     *
     * @return self
     */
    public function setConstructionNumber($construction_number)
    {
        if (is_null($construction_number)) {
            throw new \InvalidArgumentException('non-nullable construction_number cannot be null');
        }
        $this->container['construction_number'] = $construction_number;

        return $this;
    }

    /**
     * Gets construction_number_string
     *
     * @return string|null
     */
    public function getConstructionNumberString()
    {
        return $this->container['construction_number_string'];
    }

    /**
     * Sets construction_number_string
     *
     * @param string|null $construction_number_string construction_number_string
     *
     * @return self
     */
    public function setConstructionNumberString($construction_number_string)
    {
        if (is_null($construction_number_string)) {
            throw new \InvalidArgumentException('non-nullable construction_number_string cannot be null');
        }
        $this->container['construction_number_string'] = $construction_number_string;

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
     * Gets linked_applicants
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedApplicants()
    {
        return $this->container['linked_applicants'];
    }

    /**
     * Sets linked_applicants
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_applicants linked_applicants
     *
     * @return self
     */
    public function setLinkedApplicants($linked_applicants)
    {
        if (is_null($linked_applicants)) {
            throw new \InvalidArgumentException('non-nullable linked_applicants cannot be null');
        }
        $this->container['linked_applicants'] = $linked_applicants;

        return $this;
    }

    /**
     * Gets linked_employee
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee|null
     */
    public function getLinkedEmployee()
    {
        return $this->container['linked_employee'];
    }

    /**
     * Sets linked_employee
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee|null $linked_employee linked_employee
     *
     * @return self
     */
    public function setLinkedEmployee($linked_employee)
    {
        if (is_null($linked_employee)) {
            throw new \InvalidArgumentException('non-nullable linked_employee cannot be null');
        }
        $this->container['linked_employee'] = $linked_employee;

        return $this;
    }

    /**
     * Gets linked_notaries
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedNotaries()
    {
        return $this->container['linked_notaries'];
    }

    /**
     * Sets linked_notaries
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_notaries linked_notaries
     *
     * @return self
     */
    public function setLinkedNotaries($linked_notaries)
    {
        if (is_null($linked_notaries)) {
            throw new \InvalidArgumentException('non-nullable linked_notaries cannot be null');
        }
        $this->container['linked_notaries'] = $linked_notaries;

        return $this;
    }

    /**
     * Gets linked_office
     *
     * @return \Brixion\Kolibri\Model\LinkedOffice|null
     */
    public function getLinkedOffice()
    {
        return $this->container['linked_office'];
    }

    /**
     * Sets linked_office
     *
     * @param \Brixion\Kolibri\Model\LinkedOffice|null $linked_office linked_office
     *
     * @return self
     */
    public function setLinkedOffice($linked_office)
    {
        if (is_null($linked_office)) {
            throw new \InvalidArgumentException('non-nullable linked_office cannot be null');
        }
        $this->container['linked_office'] = $linked_office;

        return $this;
    }

    /**
     * Gets linked_property_managers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedPropertyManagers()
    {
        return $this->container['linked_property_managers'];
    }

    /**
     * Sets linked_property_managers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_property_managers linked_property_managers
     *
     * @return self
     */
    public function setLinkedPropertyManagers($linked_property_managers)
    {
        if (is_null($linked_property_managers)) {
            throw new \InvalidArgumentException('non-nullable linked_property_managers cannot be null');
        }
        $this->container['linked_property_managers'] = $linked_property_managers;

        return $this;
    }

    /**
     * Gets linked_vendors
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedVendors()
    {
        return $this->container['linked_vendors'];
    }

    /**
     * Sets linked_vendors
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_vendors linked_vendors
     *
     * @return self
     */
    public function setLinkedVendors($linked_vendors)
    {
        if (is_null($linked_vendors)) {
            throw new \InvalidArgumentException('non-nullable linked_vendors cannot be null');
        }
        $this->container['linked_vendors'] = $linked_vendors;

        return $this;
    }

    /**
     * Gets linked_clients
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedClients()
    {
        return $this->container['linked_clients'];
    }

    /**
     * Sets linked_clients
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_clients linked_clients
     *
     * @return self
     */
    public function setLinkedClients($linked_clients)
    {
        if (is_null($linked_clients)) {
            throw new \InvalidArgumentException('non-nullable linked_clients cannot be null');
        }
        $this->container['linked_clients'] = $linked_clients;

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
     * Gets mandate_date_time
     *
     * @return \DateTime|null
     */
    public function getMandateDateTime()
    {
        return $this->container['mandate_date_time'];
    }

    /**
     * Sets mandate_date_time
     *
     * @param \DateTime|null $mandate_date_time mandate_date_time
     *
     * @return self
     */
    public function setMandateDateTime($mandate_date_time)
    {
        if (is_null($mandate_date_time)) {
            throw new \InvalidArgumentException('non-nullable mandate_date_time cannot be null');
        }
        $this->container['mandate_date_time'] = $mandate_date_time;

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
     * Gets linked_project_assignment
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment|null
     */
    public function getLinkedProjectAssignment()
    {
        return $this->container['linked_project_assignment'];
    }

    /**
     * Sets linked_project_assignment
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment|null $linked_project_assignment linked_project_assignment
     *
     * @return self
     */
    public function setLinkedProjectAssignment($linked_project_assignment)
    {
        if (is_null($linked_project_assignment)) {
            throw new \InvalidArgumentException('non-nullable linked_project_assignment cannot be null');
        }
        $this->container['linked_project_assignment'] = $linked_project_assignment;

        return $this;
    }

    /**
     * Gets linked_object_type_assignment
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment|null
     */
    public function getLinkedObjectTypeAssignment()
    {
        return $this->container['linked_object_type_assignment'];
    }

    /**
     * Sets linked_object_type_assignment
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment|null $linked_object_type_assignment linked_object_type_assignment
     *
     * @return self
     */
    public function setLinkedObjectTypeAssignment($linked_object_type_assignment)
    {
        if (is_null($linked_object_type_assignment)) {
            throw new \InvalidArgumentException('non-nullable linked_object_type_assignment cannot be null');
        }
        $this->container['linked_object_type_assignment'] = $linked_object_type_assignment;

        return $this;
    }

    /**
     * Gets linked_bids
     *
     * @return \Brixion\Kolibri\Model\LinkedBid[]|null
     */
    public function getLinkedBids()
    {
        return $this->container['linked_bids'];
    }

    /**
     * Sets linked_bids
     *
     * @param \Brixion\Kolibri\Model\LinkedBid[]|null $linked_bids linked_bids
     *
     * @return self
     */
    public function setLinkedBids($linked_bids)
    {
        if (is_null($linked_bids)) {
            throw new \InvalidArgumentException('non-nullable linked_bids cannot be null');
        }
        $this->container['linked_bids'] = $linked_bids;

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
     * Gets rent_commission_total
     *
     * @return float|null
     */
    public function getRentCommissionTotal()
    {
        return $this->container['rent_commission_total'];
    }

    /**
     * Sets rent_commission_total
     *
     * @param float|null $rent_commission_total rent_commission_total
     *
     * @return self
     */
    public function setRentCommissionTotal($rent_commission_total)
    {
        if (is_null($rent_commission_total)) {
            throw new \InvalidArgumentException('non-nullable rent_commission_total cannot be null');
        }
        $this->container['rent_commission_total'] = $rent_commission_total;

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
     * Gets rented_from
     *
     * @return \DateTime|null
     */
    public function getRentedFrom()
    {
        return $this->container['rented_from'];
    }

    /**
     * Sets rented_from
     *
     * @param \DateTime|null $rented_from rented_from
     *
     * @return self
     */
    public function setRentedFrom($rented_from)
    {
        if (is_null($rented_from)) {
            throw new \InvalidArgumentException('non-nullable rented_from cannot be null');
        }
        $this->container['rented_from'] = $rented_from;

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
     * Gets rent_price_per_unit
     *
     * @return float|null
     */
    public function getRentPricePerUnit()
    {
        return $this->container['rent_price_per_unit'];
    }

    /**
     * Sets rent_price_per_unit
     *
     * @param float|null $rent_price_per_unit rent_price_per_unit
     *
     * @return self
     */
    public function setRentPricePerUnit($rent_price_per_unit)
    {
        if (is_null($rent_price_per_unit)) {
            throw new \InvalidArgumentException('non-nullable rent_price_per_unit cannot be null');
        }
        $this->container['rent_price_per_unit'] = $rent_price_per_unit;

        return $this;
    }

    /**
     * Gets rent_price_max
     *
     * @return float|null
     */
    public function getRentPriceMax()
    {
        return $this->container['rent_price_max'];
    }

    /**
     * Sets rent_price_max
     *
     * @param float|null $rent_price_max rent_price_max
     *
     * @return self
     */
    public function setRentPriceMax($rent_price_max)
    {
        if (is_null($rent_price_max)) {
            throw new \InvalidArgumentException('non-nullable rent_price_max cannot be null');
        }
        $this->container['rent_price_max'] = $rent_price_max;

        return $this;
    }

    /**
     * Gets rent_vat_condition
     *
     * @return \Brixion\Kolibri\Model\VatCondition|null
     */
    public function getRentVatCondition()
    {
        return $this->container['rent_vat_condition'];
    }

    /**
     * Sets rent_vat_condition
     *
     * @param \Brixion\Kolibri\Model\VatCondition|null $rent_vat_condition rent_vat_condition
     *
     * @return self
     */
    public function setRentVatCondition($rent_vat_condition)
    {
        if (is_null($rent_vat_condition)) {
            throw new \InvalidArgumentException('non-nullable rent_vat_condition cannot be null');
        }
        $this->container['rent_vat_condition'] = $rent_vat_condition;

        return $this;
    }

    /**
     * Gets sale_commission_total
     *
     * @return float|null
     */
    public function getSaleCommissionTotal()
    {
        return $this->container['sale_commission_total'];
    }

    /**
     * Sets sale_commission_total
     *
     * @param float|null $sale_commission_total sale_commission_total
     *
     * @return self
     */
    public function setSaleCommissionTotal($sale_commission_total)
    {
        if (is_null($sale_commission_total)) {
            throw new \InvalidArgumentException('non-nullable sale_commission_total cannot be null');
        }
        $this->container['sale_commission_total'] = $sale_commission_total;

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
     * Gets sale_price_per_unit
     *
     * @return float|null
     */
    public function getSalePricePerUnit()
    {
        return $this->container['sale_price_per_unit'];
    }

    /**
     * Sets sale_price_per_unit
     *
     * @param float|null $sale_price_per_unit sale_price_per_unit
     *
     * @return self
     */
    public function setSalePricePerUnit($sale_price_per_unit)
    {
        if (is_null($sale_price_per_unit)) {
            throw new \InvalidArgumentException('non-nullable sale_price_per_unit cannot be null');
        }
        $this->container['sale_price_per_unit'] = $sale_price_per_unit;

        return $this;
    }

    /**
     * Gets sale_price_max
     *
     * @return float|null
     */
    public function getSalePriceMax()
    {
        return $this->container['sale_price_max'];
    }

    /**
     * Sets sale_price_max
     *
     * @param float|null $sale_price_max sale_price_max
     *
     * @return self
     */
    public function setSalePriceMax($sale_price_max)
    {
        if (is_null($sale_price_max)) {
            throw new \InvalidArgumentException('non-nullable sale_price_max cannot be null');
        }
        $this->container['sale_price_max'] = $sale_price_max;

        return $this;
    }

    /**
     * Gets sale_vat_condition
     *
     * @return \Brixion\Kolibri\Model\VatCondition|null
     */
    public function getSaleVatCondition()
    {
        return $this->container['sale_vat_condition'];
    }

    /**
     * Sets sale_vat_condition
     *
     * @param \Brixion\Kolibri\Model\VatCondition|null $sale_vat_condition sale_vat_condition
     *
     * @return self
     */
    public function setSaleVatCondition($sale_vat_condition)
    {
        if (is_null($sale_vat_condition)) {
            throw new \InvalidArgumentException('non-nullable sale_vat_condition cannot be null');
        }
        $this->container['sale_vat_condition'] = $sale_vat_condition;

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
     * Gets total_nr_of_photos
     *
     * @return int|null
     */
    public function getTotalNrOfPhotos()
    {
        return $this->container['total_nr_of_photos'];
    }

    /**
     * Sets total_nr_of_photos
     *
     * @param int|null $total_nr_of_photos total_nr_of_photos
     *
     * @return self
     */
    public function setTotalNrOfPhotos($total_nr_of_photos)
    {
        if (is_null($total_nr_of_photos)) {
            throw new \InvalidArgumentException('non-nullable total_nr_of_photos cannot be null');
        }
        $this->container['total_nr_of_photos'] = $total_nr_of_photos;

        return $this;
    }

    /**
     * Gets total_nr_of_videos
     *
     * @return int|null
     */
    public function getTotalNrOfVideos()
    {
        return $this->container['total_nr_of_videos'];
    }

    /**
     * Sets total_nr_of_videos
     *
     * @param int|null $total_nr_of_videos total_nr_of_videos
     *
     * @return self
     */
    public function setTotalNrOfVideos($total_nr_of_videos)
    {
        if (is_null($total_nr_of_videos)) {
            throw new \InvalidArgumentException('non-nullable total_nr_of_videos cannot be null');
        }
        $this->container['total_nr_of_videos'] = $total_nr_of_videos;

        return $this;
    }

    /**
     * Gets type_of_assignment
     *
     * @return \Brixion\Kolibri\Model\AssignmentType
     */
    public function getTypeOfAssignment()
    {
        return $this->container['type_of_assignment'];
    }

    /**
     * Sets type_of_assignment
     *
     * @param \Brixion\Kolibri\Model\AssignmentType $type_of_assignment Like 'Pand', 'ObjectType' or 'Project'.
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
     * Gets video1_url
     *
     * @return string|null
     */
    public function getVideo1Url()
    {
        return $this->container['video1_url'];
    }

    /**
     * Sets video1_url
     *
     * @param string|null $video1_url video1_url
     *
     * @return self
     */
    public function setVideo1Url($video1_url)
    {
        if (is_null($video1_url)) {
            throw new \InvalidArgumentException('non-nullable video1_url cannot be null');
        }
        $this->container['video1_url'] = $video1_url;

        return $this;
    }

    /**
     * Gets withdrawn_date_time
     *
     * @return \DateTime|null
     */
    public function getWithdrawnDateTime()
    {
        return $this->container['withdrawn_date_time'];
    }

    /**
     * Sets withdrawn_date_time
     *
     * @param \DateTime|null $withdrawn_date_time withdrawn_date_time
     *
     * @return self
     */
    public function setWithdrawnDateTime($withdrawn_date_time)
    {
        if (is_null($withdrawn_date_time)) {
            throw new \InvalidArgumentException('non-nullable withdrawn_date_time cannot be null');
        }
        $this->container['withdrawn_date_time'] = $withdrawn_date_time;

        return $this;
    }

    /**
     * Gets withdraw_reason
     *
     * @return \Brixion\Kolibri\Model\WithdrawReason|null
     */
    public function getWithdrawReason()
    {
        return $this->container['withdraw_reason'];
    }

    /**
     * Sets withdraw_reason
     *
     * @param \Brixion\Kolibri\Model\WithdrawReason|null $withdraw_reason withdraw_reason
     *
     * @return self
     */
    public function setWithdrawReason($withdraw_reason)
    {
        if (is_null($withdraw_reason)) {
            throw new \InvalidArgumentException('non-nullable withdraw_reason cannot be null');
        }
        $this->container['withdraw_reason'] = $withdraw_reason;

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
     * Gets latitude
     *
     * @return float|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param float|null $latitude latitude
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        if (is_null($latitude)) {
            throw new \InvalidArgumentException('non-nullable latitude cannot be null');
        }
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return float|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param float|null $longitude longitude
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        if (is_null($longitude)) {
            throw new \InvalidArgumentException('non-nullable longitude cannot be null');
        }
        $this->container['longitude'] = $longitude;

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
     * Gets number_of_bedrooms
     *
     * @return int|null
     */
    public function getNumberOfBedrooms()
    {
        return $this->container['number_of_bedrooms'];
    }

    /**
     * Sets number_of_bedrooms
     *
     * @param int|null $number_of_bedrooms number_of_bedrooms
     *
     * @return self
     */
    public function setNumberOfBedrooms($number_of_bedrooms)
    {
        if (is_null($number_of_bedrooms)) {
            throw new \InvalidArgumentException('non-nullable number_of_bedrooms cannot be null');
        }
        $this->container['number_of_bedrooms'] = $number_of_bedrooms;

        return $this;
    }

    /**
     * Gets number_of_bath_rooms
     *
     * @return int|null
     */
    public function getNumberOfBathRooms()
    {
        return $this->container['number_of_bath_rooms'];
    }

    /**
     * Sets number_of_bath_rooms
     *
     * @param int|null $number_of_bath_rooms number_of_bath_rooms
     *
     * @return self
     */
    public function setNumberOfBathRooms($number_of_bath_rooms)
    {
        if (is_null($number_of_bath_rooms)) {
            throw new \InvalidArgumentException('non-nullable number_of_bath_rooms cannot be null');
        }
        $this->container['number_of_bath_rooms'] = $number_of_bath_rooms;

        return $this;
    }

    /**
     * Gets acquisition_status
     *
     * @return \Brixion\Kolibri\Model\AcquisitionStatus|null
     */
    public function getAcquisitionStatus()
    {
        return $this->container['acquisition_status'];
    }

    /**
     * Sets acquisition_status
     *
     * @param \Brixion\Kolibri\Model\AcquisitionStatus|null $acquisition_status acquisition_status
     *
     * @return self
     */
    public function setAcquisitionStatus($acquisition_status)
    {
        if (is_null($acquisition_status)) {
            throw new \InvalidArgumentException('non-nullable acquisition_status cannot be null');
        }
        $this->container['acquisition_status'] = $acquisition_status;

        return $this;
    }

    /**
     * Gets is_confidential
     *
     * @return bool|null
     */
    public function getIsConfidential()
    {
        return $this->container['is_confidential'];
    }

    /**
     * Sets is_confidential
     *
     * @param bool|null $is_confidential is_confidential
     *
     * @return self
     */
    public function setIsConfidential($is_confidential)
    {
        if (is_null($is_confidential)) {
            throw new \InvalidArgumentException('non-nullable is_confidential cannot be null');
        }
        $this->container['is_confidential'] = $is_confidential;

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
     * Gets available_until
     *
     * @return \DateTime|null
     */
    public function getAvailableUntil()
    {
        return $this->container['available_until'];
    }

    /**
     * Sets available_until
     *
     * @param \DateTime|null $available_until available_until
     *
     * @return self
     */
    public function setAvailableUntil($available_until)
    {
        if (is_null($available_until)) {
            throw new \InvalidArgumentException('non-nullable available_until cannot be null');
        }
        $this->container['available_until'] = $available_until;

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
            throw new \InvalidArgumentException('invalid length for $id when calling AssignmentSnapShot., must be bigger than or equal to 1.');
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
