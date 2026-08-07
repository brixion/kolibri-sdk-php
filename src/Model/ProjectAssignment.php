<?php

declare(strict_types=1);

/**
 * ProjectAssignment - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * ProjectAssignment.
 * @implements \ArrayAccess<string, mixed>
 */
class ProjectAssignment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'ProjectAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'address' => '\Brixion\Kolibri\Model\Address',
        'amount_of_free_units' => 'int',
        'amount_of_units' => 'int',
        'building_bound_outside_spaces' => '\Brixion\Kolibri\Model\DimensionsRange',
        'building_start' => '\DateTime',
        'building_start_date_parts' => 'bool',
        'hide_building_start_date' => 'bool',
        'building_start_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'building_type' => '\Brixion\Kolibri\Model\BuildingType',
        'comfort_quality' => '\Brixion\Kolibri\Model\ComfortQuality',
        'content' => '\Brixion\Kolibri\Model\DimensionsRange',
        'delivery_start' => '\DateTime',
        'delivery_start_date_parts' => 'bool',
        'hide_delivery_start_date' => 'bool',
        'delivery_start_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'display_name' => 'string',
        'external_storages_spaces' => '\Brixion\Kolibri\Model\DimensionsRange',
        'hide_address' => 'bool',
        'in_park' => 'bool',
        'is_permanently_inhabited' => 'bool',
        'is_recreational' => 'bool',
        'living_room_surface' => '\Brixion\Kolibri\Model\DimensionsRange',
        'location_places' => '\Brixion\Kolibri\Model\LocationPlace[]',
        'maintenance_inside' => '\Brixion\Kolibri\Model\Maintenance',
        'maintenance_outside' => '\Brixion\Kolibri\Model\Maintenance',
        'open_house_for_underlaying_objects_too' => 'bool',
        'other_inside_spaces' => '\Brixion\Kolibri\Model\DimensionsRange',
        'parcel_surface' => '\Brixion\Kolibri\Model\DimensionsRange',
        'parking_facilities' => '\Brixion\Kolibri\Model\TypeOfParkingFacility[]',
        'public_reference' => 'string',
        'sale_start' => '\DateTime',
        'sale_start_date_parts' => 'bool',
        'hide_sale_start_date' => 'bool',
        'sale_start_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'usage_area' => '\Brixion\Kolibri\Model\DimensionsRange',
        'year_of_construction' => '\Brixion\Kolibri\Model\YearOfConstruction',
        'linked_employees' => '\Brixion\Kolibri\Model\LinkedEmployee[]',
        'linked_office' => '\Brixion\Kolibri\Model\LinkedOffice',
        'linked_folder_tree' => '\Brixion\Kolibri\Model\LinkedFolderTree',
        'real_estate_group' => '\Brixion\Kolibri\Model\RealEstateGroup',
        'number_of_floors' => 'int',
        'acceptance_details' => '\Brixion\Kolibri\Model\AcceptanceDetails',
        'advertisement_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'assignment_phase' => '\Brixion\Kolibri\Model\AssignmentPhase',
        'availability_status' => '\Brixion\Kolibri\Model\AvailabilityStatus',
        'balcony_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'brochures' => '\Brixion\Kolibri\Model\BrochureBlob[]',
        'business_partners' => '\Brixion\Kolibri\Model\AssignmentBusinessPartner[]',
        'calculate_price_per_m2' => 'bool',
        'changes_number_of_inside_parking_lots' => '\Brixion\Kolibri\Model\PartialChange[]',
        'changes_number_of_parking_lots' => '\Brixion\Kolibri\Model\PartialChange[]',
        'changes_surface' => '\Brixion\Kolibri\Model\PartialChange[]',
        'confidentiality_level' => '\Brixion\Kolibri\Model\ConfidentialityLevel',
        'contract_reason' => '\Brixion\Kolibri\Model\ContractReason',
        'contract_source' => '\Brixion\Kolibri\Model\ContractSource',
        'end_date_publication' => '\DateTime',
        'environment_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'first_floor_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'for_rent' => 'bool',
        'for_sale' => 'bool',
        'gardens_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'ground_floor_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'hide_on_funda_until' => '\DateTime',
        'funda_postal_code' => 'string',
        'funda_street' => 'string',
        'funda_locality' => 'string',
        'is_temporarily_removed_from_funda' => 'bool',
        'mls_group' => 'string',
        'mls_release_date' => '\DateTime',
        'hide_price' => 'bool',
        'import_details' => '\Brixion\Kolibri\Model\ImportDetails',
        'internal_memo' => 'string',
        'is_acquisition_assignment' => 'bool',
        'is_cleared' => 'bool',
        'is_confidential' => 'bool',
        'is_private' => 'bool',
        'is_production_rights' => 'bool',
        'is_self_interest' => 'bool',
        'is_special' => 'bool',
        'is_topper' => 'bool',
        'is_transaction_data_confidential' => 'bool',
        'key_note' => 'string',
        'key_nr' => 'int',
        'linked_cadastres' => '\Brixion\Kolibri\Model\LinkedCadastre[]',
        'linked_company_listings' => '\Brixion\Kolibri\Model\LinkedCompanyListing[]',
        'linked_applicants' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_notaries' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_property_managers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_vendors' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_financial_advisors' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_appraisers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_clients' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_offering_agencies' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_purchasing_brokers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_inspectors' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_stylists' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_photographers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_potentials' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_occupants' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_people_who_opted' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_project_developers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_tenant_representation_brokers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_rental_agents' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_sales_brokers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_contact_persons' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'list_of_business' => '\Brixion\Kolibri\Model\BusinessToTakeOver[]',
        'lot_description_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'mandate_date_time' => '\DateTime',
        'maps' => '\Brixion\Kolibri\Model\MapBlob[]',
        'office_id' => 'string',
        'open_house' => '\Brixion\Kolibri\Model\OpenHouse',
        'other_contract_source' => 'string',
        'other_floors_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'parking_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'parties_description_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'peculiarities_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'photos' => '\Brixion\Kolibri\Model\PhotoBlob[]',
        'price_description_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'products_to_pass_on' => '\Brixion\Kolibri\Model\ProductToPassOn[]',
        'registration_conditions' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'rent_offer' => '\Brixion\Kolibri\Model\RentOffer',
        'sale_offer' => '\Brixion\Kolibri\Model\SaleOffer',
        'second_floor_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'special_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'tags' => 'string',
        'third_party_media' => '\Brixion\Kolibri\Model\ThirdPartyMedia[]',
        'title_text' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'videos' => '\Brixion\Kolibri\Model\VideoBlob[]',
        'waiting_time' => '\Brixion\Kolibri\Model\WaitingTime',
        'web_address' => 'string',
        'withdrawn_date_time' => '\DateTime',
        'withdraw_reason' => '\Brixion\Kolibri\Model\WithdrawReason',
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
        'address' => null,
        'amount_of_free_units' => 'int32',
        'amount_of_units' => 'int32',
        'building_bound_outside_spaces' => null,
        'building_start' => 'date-time',
        'building_start_date_parts' => null,
        'hide_building_start_date' => null,
        'building_start_text' => null,
        'building_type' => null,
        'comfort_quality' => null,
        'content' => null,
        'delivery_start' => 'date-time',
        'delivery_start_date_parts' => null,
        'hide_delivery_start_date' => null,
        'delivery_start_text' => null,
        'display_name' => null,
        'external_storages_spaces' => null,
        'hide_address' => null,
        'in_park' => null,
        'is_permanently_inhabited' => null,
        'is_recreational' => null,
        'living_room_surface' => null,
        'location_places' => null,
        'maintenance_inside' => null,
        'maintenance_outside' => null,
        'open_house_for_underlaying_objects_too' => null,
        'other_inside_spaces' => null,
        'parcel_surface' => null,
        'parking_facilities' => null,
        'public_reference' => null,
        'sale_start' => 'date-time',
        'sale_start_date_parts' => null,
        'hide_sale_start_date' => null,
        'sale_start_text' => null,
        'usage_area' => null,
        'year_of_construction' => null,
        'linked_employees' => null,
        'linked_office' => null,
        'linked_folder_tree' => null,
        'real_estate_group' => null,
        'number_of_floors' => 'int32',
        'acceptance_details' => null,
        'advertisement_text' => null,
        'assignment_phase' => null,
        'availability_status' => null,
        'balcony_text' => null,
        'brochures' => null,
        'business_partners' => null,
        'calculate_price_per_m2' => null,
        'changes_number_of_inside_parking_lots' => null,
        'changes_number_of_parking_lots' => null,
        'changes_surface' => null,
        'confidentiality_level' => null,
        'contract_reason' => null,
        'contract_source' => null,
        'end_date_publication' => 'date-time',
        'environment_text' => null,
        'first_floor_text' => null,
        'for_rent' => null,
        'for_sale' => null,
        'gardens_text' => null,
        'ground_floor_text' => null,
        'hide_on_funda_until' => 'date-time',
        'funda_postal_code' => null,
        'funda_street' => null,
        'funda_locality' => null,
        'is_temporarily_removed_from_funda' => null,
        'mls_group' => null,
        'mls_release_date' => 'date-time',
        'hide_price' => null,
        'import_details' => null,
        'internal_memo' => null,
        'is_acquisition_assignment' => null,
        'is_cleared' => null,
        'is_confidential' => null,
        'is_private' => null,
        'is_production_rights' => null,
        'is_self_interest' => null,
        'is_special' => null,
        'is_topper' => null,
        'is_transaction_data_confidential' => null,
        'key_note' => null,
        'key_nr' => 'int32',
        'linked_cadastres' => null,
        'linked_company_listings' => null,
        'linked_applicants' => null,
        'linked_notaries' => null,
        'linked_property_managers' => null,
        'linked_vendors' => null,
        'linked_financial_advisors' => null,
        'linked_appraisers' => null,
        'linked_clients' => null,
        'linked_offering_agencies' => null,
        'linked_purchasing_brokers' => null,
        'linked_inspectors' => null,
        'linked_stylists' => null,
        'linked_photographers' => null,
        'linked_potentials' => null,
        'linked_occupants' => null,
        'linked_people_who_opted' => null,
        'linked_project_developers' => null,
        'linked_tenant_representation_brokers' => null,
        'linked_rental_agents' => null,
        'linked_sales_brokers' => null,
        'linked_contact_persons' => null,
        'list_of_business' => null,
        'lot_description_text' => null,
        'mandate_date_time' => 'date-time',
        'maps' => null,
        'office_id' => 'guid',
        'open_house' => null,
        'other_contract_source' => null,
        'other_floors_text' => null,
        'parking_text' => null,
        'parties_description_text' => null,
        'peculiarities_text' => null,
        'photos' => null,
        'price_description_text' => null,
        'products_to_pass_on' => null,
        'registration_conditions' => null,
        'rent_offer' => null,
        'sale_offer' => null,
        'second_floor_text' => null,
        'special_text' => null,
        'tags' => null,
        'third_party_media' => null,
        'title_text' => null,
        'videos' => null,
        'waiting_time' => null,
        'web_address' => null,
        'withdrawn_date_time' => 'date-time',
        'withdraw_reason' => null,
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
        'address' => false,
        'amount_of_free_units' => false,
        'amount_of_units' => false,
        'building_bound_outside_spaces' => false,
        'building_start' => false,
        'building_start_date_parts' => false,
        'hide_building_start_date' => false,
        'building_start_text' => false,
        'building_type' => false,
        'comfort_quality' => false,
        'content' => false,
        'delivery_start' => false,
        'delivery_start_date_parts' => false,
        'hide_delivery_start_date' => false,
        'delivery_start_text' => false,
        'display_name' => false,
        'external_storages_spaces' => false,
        'hide_address' => false,
        'in_park' => false,
        'is_permanently_inhabited' => false,
        'is_recreational' => false,
        'living_room_surface' => false,
        'location_places' => false,
        'maintenance_inside' => false,
        'maintenance_outside' => false,
        'open_house_for_underlaying_objects_too' => false,
        'other_inside_spaces' => false,
        'parcel_surface' => false,
        'parking_facilities' => false,
        'public_reference' => false,
        'sale_start' => false,
        'sale_start_date_parts' => false,
        'hide_sale_start_date' => false,
        'sale_start_text' => false,
        'usage_area' => false,
        'year_of_construction' => false,
        'linked_employees' => false,
        'linked_office' => false,
        'linked_folder_tree' => false,
        'real_estate_group' => false,
        'number_of_floors' => false,
        'acceptance_details' => false,
        'advertisement_text' => false,
        'assignment_phase' => false,
        'availability_status' => false,
        'balcony_text' => false,
        'brochures' => false,
        'business_partners' => false,
        'calculate_price_per_m2' => false,
        'changes_number_of_inside_parking_lots' => false,
        'changes_number_of_parking_lots' => false,
        'changes_surface' => false,
        'confidentiality_level' => false,
        'contract_reason' => false,
        'contract_source' => false,
        'end_date_publication' => false,
        'environment_text' => false,
        'first_floor_text' => false,
        'for_rent' => false,
        'for_sale' => false,
        'gardens_text' => false,
        'ground_floor_text' => false,
        'hide_on_funda_until' => false,
        'funda_postal_code' => false,
        'funda_street' => false,
        'funda_locality' => false,
        'is_temporarily_removed_from_funda' => false,
        'mls_group' => false,
        'mls_release_date' => false,
        'hide_price' => false,
        'import_details' => false,
        'internal_memo' => false,
        'is_acquisition_assignment' => false,
        'is_cleared' => false,
        'is_confidential' => false,
        'is_private' => false,
        'is_production_rights' => false,
        'is_self_interest' => false,
        'is_special' => false,
        'is_topper' => false,
        'is_transaction_data_confidential' => false,
        'key_note' => false,
        'key_nr' => false,
        'linked_cadastres' => false,
        'linked_company_listings' => false,
        'linked_applicants' => false,
        'linked_notaries' => false,
        'linked_property_managers' => false,
        'linked_vendors' => false,
        'linked_financial_advisors' => false,
        'linked_appraisers' => false,
        'linked_clients' => false,
        'linked_offering_agencies' => false,
        'linked_purchasing_brokers' => false,
        'linked_inspectors' => false,
        'linked_stylists' => false,
        'linked_photographers' => false,
        'linked_potentials' => false,
        'linked_occupants' => false,
        'linked_people_who_opted' => false,
        'linked_project_developers' => false,
        'linked_tenant_representation_brokers' => false,
        'linked_rental_agents' => false,
        'linked_sales_brokers' => false,
        'linked_contact_persons' => false,
        'list_of_business' => false,
        'lot_description_text' => false,
        'mandate_date_time' => false,
        'maps' => false,
        'office_id' => false,
        'open_house' => false,
        'other_contract_source' => false,
        'other_floors_text' => false,
        'parking_text' => false,
        'parties_description_text' => false,
        'peculiarities_text' => false,
        'photos' => false,
        'price_description_text' => false,
        'products_to_pass_on' => false,
        'registration_conditions' => false,
        'rent_offer' => false,
        'sale_offer' => false,
        'second_floor_text' => false,
        'special_text' => false,
        'tags' => false,
        'third_party_media' => false,
        'title_text' => false,
        'videos' => false,
        'waiting_time' => false,
        'web_address' => false,
        'withdrawn_date_time' => false,
        'withdraw_reason' => false,
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
        'address' => 'address',
        'amount_of_free_units' => 'amountOfFreeUnits',
        'amount_of_units' => 'amountOfUnits',
        'building_bound_outside_spaces' => 'buildingBoundOutsideSpaces',
        'building_start' => 'buildingStart',
        'building_start_date_parts' => 'buildingStartDateParts',
        'hide_building_start_date' => 'hideBuildingStartDate',
        'building_start_text' => 'buildingStartText',
        'building_type' => 'buildingType',
        'comfort_quality' => 'comfortQuality',
        'content' => 'content',
        'delivery_start' => 'deliveryStart',
        'delivery_start_date_parts' => 'deliveryStartDateParts',
        'hide_delivery_start_date' => 'hideDeliveryStartDate',
        'delivery_start_text' => 'deliveryStartText',
        'display_name' => 'displayName',
        'external_storages_spaces' => 'externalStoragesSpaces',
        'hide_address' => 'hideAddress',
        'in_park' => 'inPark',
        'is_permanently_inhabited' => 'isPermanentlyInhabited',
        'is_recreational' => 'isRecreational',
        'living_room_surface' => 'livingRoomSurface',
        'location_places' => 'locationPlaces',
        'maintenance_inside' => 'maintenanceInside',
        'maintenance_outside' => 'maintenanceOutside',
        'open_house_for_underlaying_objects_too' => 'openHouseForUnderlayingObjectsToo',
        'other_inside_spaces' => 'otherInsideSpaces',
        'parcel_surface' => 'parcelSurface',
        'parking_facilities' => 'parkingFacilities',
        'public_reference' => 'publicReference',
        'sale_start' => 'saleStart',
        'sale_start_date_parts' => 'saleStartDateParts',
        'hide_sale_start_date' => 'hideSaleStartDate',
        'sale_start_text' => 'saleStartText',
        'usage_area' => 'usageArea',
        'year_of_construction' => 'yearOfConstruction',
        'linked_employees' => 'linkedEmployees',
        'linked_office' => 'linkedOffice',
        'linked_folder_tree' => 'linkedFolderTree',
        'real_estate_group' => 'realEstateGroup',
        'number_of_floors' => 'numberOfFloors',
        'acceptance_details' => 'acceptanceDetails',
        'advertisement_text' => 'advertisementText',
        'assignment_phase' => 'assignmentPhase',
        'availability_status' => 'availabilityStatus',
        'balcony_text' => 'balconyText',
        'brochures' => 'brochures',
        'business_partners' => 'businessPartners',
        'calculate_price_per_m2' => 'calculatePricePerM2',
        'changes_number_of_inside_parking_lots' => 'changesNumberOfInsideParkingLots',
        'changes_number_of_parking_lots' => 'changesNumberOfParkingLots',
        'changes_surface' => 'changesSurface',
        'confidentiality_level' => 'confidentialityLevel',
        'contract_reason' => 'contractReason',
        'contract_source' => 'contractSource',
        'end_date_publication' => 'endDatePublication',
        'environment_text' => 'environmentText',
        'first_floor_text' => 'firstFloorText',
        'for_rent' => 'forRent',
        'for_sale' => 'forSale',
        'gardens_text' => 'gardensText',
        'ground_floor_text' => 'groundFloorText',
        'hide_on_funda_until' => 'hideOnFundaUntil',
        'funda_postal_code' => 'fundaPostalCode',
        'funda_street' => 'fundaStreet',
        'funda_locality' => 'fundaLocality',
        'is_temporarily_removed_from_funda' => 'isTemporarilyRemovedFromFunda',
        'mls_group' => 'mlsGroup',
        'mls_release_date' => 'mlsReleaseDate',
        'hide_price' => 'hidePrice',
        'import_details' => 'importDetails',
        'internal_memo' => 'internalMemo',
        'is_acquisition_assignment' => 'isAcquisitionAssignment',
        'is_cleared' => 'isCleared',
        'is_confidential' => 'isConfidential',
        'is_private' => 'isPrivate',
        'is_production_rights' => 'isProductionRights',
        'is_self_interest' => 'isSelfInterest',
        'is_special' => 'isSpecial',
        'is_topper' => 'isTopper',
        'is_transaction_data_confidential' => 'isTransactionDataConfidential',
        'key_note' => 'keyNote',
        'key_nr' => 'keyNr',
        'linked_cadastres' => 'linkedCadastres',
        'linked_company_listings' => 'linkedCompanyListings',
        'linked_applicants' => 'linkedApplicants',
        'linked_notaries' => 'linkedNotaries',
        'linked_property_managers' => 'linkedPropertyManagers',
        'linked_vendors' => 'linkedVendors',
        'linked_financial_advisors' => 'linkedFinancialAdvisors',
        'linked_appraisers' => 'linkedAppraisers',
        'linked_clients' => 'linkedClients',
        'linked_offering_agencies' => 'linkedOfferingAgencies',
        'linked_purchasing_brokers' => 'linkedPurchasingBrokers',
        'linked_inspectors' => 'linkedInspectors',
        'linked_stylists' => 'linkedStylists',
        'linked_photographers' => 'linkedPhotographers',
        'linked_potentials' => 'linkedPotentials',
        'linked_occupants' => 'linkedOccupants',
        'linked_people_who_opted' => 'linkedPeopleWhoOpted',
        'linked_project_developers' => 'linkedProjectDevelopers',
        'linked_tenant_representation_brokers' => 'linkedTenantRepresentationBrokers',
        'linked_rental_agents' => 'linkedRentalAgents',
        'linked_sales_brokers' => 'linkedSalesBrokers',
        'linked_contact_persons' => 'linkedContactPersons',
        'list_of_business' => 'listOfBusiness',
        'lot_description_text' => 'lotDescriptionText',
        'mandate_date_time' => 'mandateDateTime',
        'maps' => 'maps',
        'office_id' => 'officeID',
        'open_house' => 'openHouse',
        'other_contract_source' => 'otherContractSource',
        'other_floors_text' => 'otherFloorsText',
        'parking_text' => 'parkingText',
        'parties_description_text' => 'partiesDescriptionText',
        'peculiarities_text' => 'peculiaritiesText',
        'photos' => 'photos',
        'price_description_text' => 'priceDescriptionText',
        'products_to_pass_on' => 'productsToPassOn',
        'registration_conditions' => 'registrationConditions',
        'rent_offer' => 'rentOffer',
        'sale_offer' => 'saleOffer',
        'second_floor_text' => 'secondFloorText',
        'special_text' => 'specialText',
        'tags' => 'tags',
        'third_party_media' => 'thirdPartyMedia',
        'title_text' => 'titleText',
        'videos' => 'videos',
        'waiting_time' => 'waitingTime',
        'web_address' => 'webAddress',
        'withdrawn_date_time' => 'withdrawnDateTime',
        'withdraw_reason' => 'withdrawReason',
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
        'address' => 'setAddress',
        'amount_of_free_units' => 'setAmountOfFreeUnits',
        'amount_of_units' => 'setAmountOfUnits',
        'building_bound_outside_spaces' => 'setBuildingBoundOutsideSpaces',
        'building_start' => 'setBuildingStart',
        'building_start_date_parts' => 'setBuildingStartDateParts',
        'hide_building_start_date' => 'setHideBuildingStartDate',
        'building_start_text' => 'setBuildingStartText',
        'building_type' => 'setBuildingType',
        'comfort_quality' => 'setComfortQuality',
        'content' => 'setContent',
        'delivery_start' => 'setDeliveryStart',
        'delivery_start_date_parts' => 'setDeliveryStartDateParts',
        'hide_delivery_start_date' => 'setHideDeliveryStartDate',
        'delivery_start_text' => 'setDeliveryStartText',
        'display_name' => 'setDisplayName',
        'external_storages_spaces' => 'setExternalStoragesSpaces',
        'hide_address' => 'setHideAddress',
        'in_park' => 'setInPark',
        'is_permanently_inhabited' => 'setIsPermanentlyInhabited',
        'is_recreational' => 'setIsRecreational',
        'living_room_surface' => 'setLivingRoomSurface',
        'location_places' => 'setLocationPlaces',
        'maintenance_inside' => 'setMaintenanceInside',
        'maintenance_outside' => 'setMaintenanceOutside',
        'open_house_for_underlaying_objects_too' => 'setOpenHouseForUnderlayingObjectsToo',
        'other_inside_spaces' => 'setOtherInsideSpaces',
        'parcel_surface' => 'setParcelSurface',
        'parking_facilities' => 'setParkingFacilities',
        'public_reference' => 'setPublicReference',
        'sale_start' => 'setSaleStart',
        'sale_start_date_parts' => 'setSaleStartDateParts',
        'hide_sale_start_date' => 'setHideSaleStartDate',
        'sale_start_text' => 'setSaleStartText',
        'usage_area' => 'setUsageArea',
        'year_of_construction' => 'setYearOfConstruction',
        'linked_employees' => 'setLinkedEmployees',
        'linked_office' => 'setLinkedOffice',
        'linked_folder_tree' => 'setLinkedFolderTree',
        'real_estate_group' => 'setRealEstateGroup',
        'number_of_floors' => 'setNumberOfFloors',
        'acceptance_details' => 'setAcceptanceDetails',
        'advertisement_text' => 'setAdvertisementText',
        'assignment_phase' => 'setAssignmentPhase',
        'availability_status' => 'setAvailabilityStatus',
        'balcony_text' => 'setBalconyText',
        'brochures' => 'setBrochures',
        'business_partners' => 'setBusinessPartners',
        'calculate_price_per_m2' => 'setCalculatePricePerM2',
        'changes_number_of_inside_parking_lots' => 'setChangesNumberOfInsideParkingLots',
        'changes_number_of_parking_lots' => 'setChangesNumberOfParkingLots',
        'changes_surface' => 'setChangesSurface',
        'confidentiality_level' => 'setConfidentialityLevel',
        'contract_reason' => 'setContractReason',
        'contract_source' => 'setContractSource',
        'end_date_publication' => 'setEndDatePublication',
        'environment_text' => 'setEnvironmentText',
        'first_floor_text' => 'setFirstFloorText',
        'for_rent' => 'setForRent',
        'for_sale' => 'setForSale',
        'gardens_text' => 'setGardensText',
        'ground_floor_text' => 'setGroundFloorText',
        'hide_on_funda_until' => 'setHideOnFundaUntil',
        'funda_postal_code' => 'setFundaPostalCode',
        'funda_street' => 'setFundaStreet',
        'funda_locality' => 'setFundaLocality',
        'is_temporarily_removed_from_funda' => 'setIsTemporarilyRemovedFromFunda',
        'mls_group' => 'setMlsGroup',
        'mls_release_date' => 'setMlsReleaseDate',
        'hide_price' => 'setHidePrice',
        'import_details' => 'setImportDetails',
        'internal_memo' => 'setInternalMemo',
        'is_acquisition_assignment' => 'setIsAcquisitionAssignment',
        'is_cleared' => 'setIsCleared',
        'is_confidential' => 'setIsConfidential',
        'is_private' => 'setIsPrivate',
        'is_production_rights' => 'setIsProductionRights',
        'is_self_interest' => 'setIsSelfInterest',
        'is_special' => 'setIsSpecial',
        'is_topper' => 'setIsTopper',
        'is_transaction_data_confidential' => 'setIsTransactionDataConfidential',
        'key_note' => 'setKeyNote',
        'key_nr' => 'setKeyNr',
        'linked_cadastres' => 'setLinkedCadastres',
        'linked_company_listings' => 'setLinkedCompanyListings',
        'linked_applicants' => 'setLinkedApplicants',
        'linked_notaries' => 'setLinkedNotaries',
        'linked_property_managers' => 'setLinkedPropertyManagers',
        'linked_vendors' => 'setLinkedVendors',
        'linked_financial_advisors' => 'setLinkedFinancialAdvisors',
        'linked_appraisers' => 'setLinkedAppraisers',
        'linked_clients' => 'setLinkedClients',
        'linked_offering_agencies' => 'setLinkedOfferingAgencies',
        'linked_purchasing_brokers' => 'setLinkedPurchasingBrokers',
        'linked_inspectors' => 'setLinkedInspectors',
        'linked_stylists' => 'setLinkedStylists',
        'linked_photographers' => 'setLinkedPhotographers',
        'linked_potentials' => 'setLinkedPotentials',
        'linked_occupants' => 'setLinkedOccupants',
        'linked_people_who_opted' => 'setLinkedPeopleWhoOpted',
        'linked_project_developers' => 'setLinkedProjectDevelopers',
        'linked_tenant_representation_brokers' => 'setLinkedTenantRepresentationBrokers',
        'linked_rental_agents' => 'setLinkedRentalAgents',
        'linked_sales_brokers' => 'setLinkedSalesBrokers',
        'linked_contact_persons' => 'setLinkedContactPersons',
        'list_of_business' => 'setListOfBusiness',
        'lot_description_text' => 'setLotDescriptionText',
        'mandate_date_time' => 'setMandateDateTime',
        'maps' => 'setMaps',
        'office_id' => 'setOfficeId',
        'open_house' => 'setOpenHouse',
        'other_contract_source' => 'setOtherContractSource',
        'other_floors_text' => 'setOtherFloorsText',
        'parking_text' => 'setParkingText',
        'parties_description_text' => 'setPartiesDescriptionText',
        'peculiarities_text' => 'setPeculiaritiesText',
        'photos' => 'setPhotos',
        'price_description_text' => 'setPriceDescriptionText',
        'products_to_pass_on' => 'setProductsToPassOn',
        'registration_conditions' => 'setRegistrationConditions',
        'rent_offer' => 'setRentOffer',
        'sale_offer' => 'setSaleOffer',
        'second_floor_text' => 'setSecondFloorText',
        'special_text' => 'setSpecialText',
        'tags' => 'setTags',
        'third_party_media' => 'setThirdPartyMedia',
        'title_text' => 'setTitleText',
        'videos' => 'setVideos',
        'waiting_time' => 'setWaitingTime',
        'web_address' => 'setWebAddress',
        'withdrawn_date_time' => 'setWithdrawnDateTime',
        'withdraw_reason' => 'setWithdrawReason',
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
        'address' => 'getAddress',
        'amount_of_free_units' => 'getAmountOfFreeUnits',
        'amount_of_units' => 'getAmountOfUnits',
        'building_bound_outside_spaces' => 'getBuildingBoundOutsideSpaces',
        'building_start' => 'getBuildingStart',
        'building_start_date_parts' => 'getBuildingStartDateParts',
        'hide_building_start_date' => 'getHideBuildingStartDate',
        'building_start_text' => 'getBuildingStartText',
        'building_type' => 'getBuildingType',
        'comfort_quality' => 'getComfortQuality',
        'content' => 'getContent',
        'delivery_start' => 'getDeliveryStart',
        'delivery_start_date_parts' => 'getDeliveryStartDateParts',
        'hide_delivery_start_date' => 'getHideDeliveryStartDate',
        'delivery_start_text' => 'getDeliveryStartText',
        'display_name' => 'getDisplayName',
        'external_storages_spaces' => 'getExternalStoragesSpaces',
        'hide_address' => 'getHideAddress',
        'in_park' => 'getInPark',
        'is_permanently_inhabited' => 'getIsPermanentlyInhabited',
        'is_recreational' => 'getIsRecreational',
        'living_room_surface' => 'getLivingRoomSurface',
        'location_places' => 'getLocationPlaces',
        'maintenance_inside' => 'getMaintenanceInside',
        'maintenance_outside' => 'getMaintenanceOutside',
        'open_house_for_underlaying_objects_too' => 'getOpenHouseForUnderlayingObjectsToo',
        'other_inside_spaces' => 'getOtherInsideSpaces',
        'parcel_surface' => 'getParcelSurface',
        'parking_facilities' => 'getParkingFacilities',
        'public_reference' => 'getPublicReference',
        'sale_start' => 'getSaleStart',
        'sale_start_date_parts' => 'getSaleStartDateParts',
        'hide_sale_start_date' => 'getHideSaleStartDate',
        'sale_start_text' => 'getSaleStartText',
        'usage_area' => 'getUsageArea',
        'year_of_construction' => 'getYearOfConstruction',
        'linked_employees' => 'getLinkedEmployees',
        'linked_office' => 'getLinkedOffice',
        'linked_folder_tree' => 'getLinkedFolderTree',
        'real_estate_group' => 'getRealEstateGroup',
        'number_of_floors' => 'getNumberOfFloors',
        'acceptance_details' => 'getAcceptanceDetails',
        'advertisement_text' => 'getAdvertisementText',
        'assignment_phase' => 'getAssignmentPhase',
        'availability_status' => 'getAvailabilityStatus',
        'balcony_text' => 'getBalconyText',
        'brochures' => 'getBrochures',
        'business_partners' => 'getBusinessPartners',
        'calculate_price_per_m2' => 'getCalculatePricePerM2',
        'changes_number_of_inside_parking_lots' => 'getChangesNumberOfInsideParkingLots',
        'changes_number_of_parking_lots' => 'getChangesNumberOfParkingLots',
        'changes_surface' => 'getChangesSurface',
        'confidentiality_level' => 'getConfidentialityLevel',
        'contract_reason' => 'getContractReason',
        'contract_source' => 'getContractSource',
        'end_date_publication' => 'getEndDatePublication',
        'environment_text' => 'getEnvironmentText',
        'first_floor_text' => 'getFirstFloorText',
        'for_rent' => 'getForRent',
        'for_sale' => 'getForSale',
        'gardens_text' => 'getGardensText',
        'ground_floor_text' => 'getGroundFloorText',
        'hide_on_funda_until' => 'getHideOnFundaUntil',
        'funda_postal_code' => 'getFundaPostalCode',
        'funda_street' => 'getFundaStreet',
        'funda_locality' => 'getFundaLocality',
        'is_temporarily_removed_from_funda' => 'getIsTemporarilyRemovedFromFunda',
        'mls_group' => 'getMlsGroup',
        'mls_release_date' => 'getMlsReleaseDate',
        'hide_price' => 'getHidePrice',
        'import_details' => 'getImportDetails',
        'internal_memo' => 'getInternalMemo',
        'is_acquisition_assignment' => 'getIsAcquisitionAssignment',
        'is_cleared' => 'getIsCleared',
        'is_confidential' => 'getIsConfidential',
        'is_private' => 'getIsPrivate',
        'is_production_rights' => 'getIsProductionRights',
        'is_self_interest' => 'getIsSelfInterest',
        'is_special' => 'getIsSpecial',
        'is_topper' => 'getIsTopper',
        'is_transaction_data_confidential' => 'getIsTransactionDataConfidential',
        'key_note' => 'getKeyNote',
        'key_nr' => 'getKeyNr',
        'linked_cadastres' => 'getLinkedCadastres',
        'linked_company_listings' => 'getLinkedCompanyListings',
        'linked_applicants' => 'getLinkedApplicants',
        'linked_notaries' => 'getLinkedNotaries',
        'linked_property_managers' => 'getLinkedPropertyManagers',
        'linked_vendors' => 'getLinkedVendors',
        'linked_financial_advisors' => 'getLinkedFinancialAdvisors',
        'linked_appraisers' => 'getLinkedAppraisers',
        'linked_clients' => 'getLinkedClients',
        'linked_offering_agencies' => 'getLinkedOfferingAgencies',
        'linked_purchasing_brokers' => 'getLinkedPurchasingBrokers',
        'linked_inspectors' => 'getLinkedInspectors',
        'linked_stylists' => 'getLinkedStylists',
        'linked_photographers' => 'getLinkedPhotographers',
        'linked_potentials' => 'getLinkedPotentials',
        'linked_occupants' => 'getLinkedOccupants',
        'linked_people_who_opted' => 'getLinkedPeopleWhoOpted',
        'linked_project_developers' => 'getLinkedProjectDevelopers',
        'linked_tenant_representation_brokers' => 'getLinkedTenantRepresentationBrokers',
        'linked_rental_agents' => 'getLinkedRentalAgents',
        'linked_sales_brokers' => 'getLinkedSalesBrokers',
        'linked_contact_persons' => 'getLinkedContactPersons',
        'list_of_business' => 'getListOfBusiness',
        'lot_description_text' => 'getLotDescriptionText',
        'mandate_date_time' => 'getMandateDateTime',
        'maps' => 'getMaps',
        'office_id' => 'getOfficeId',
        'open_house' => 'getOpenHouse',
        'other_contract_source' => 'getOtherContractSource',
        'other_floors_text' => 'getOtherFloorsText',
        'parking_text' => 'getParkingText',
        'parties_description_text' => 'getPartiesDescriptionText',
        'peculiarities_text' => 'getPeculiaritiesText',
        'photos' => 'getPhotos',
        'price_description_text' => 'getPriceDescriptionText',
        'products_to_pass_on' => 'getProductsToPassOn',
        'registration_conditions' => 'getRegistrationConditions',
        'rent_offer' => 'getRentOffer',
        'sale_offer' => 'getSaleOffer',
        'second_floor_text' => 'getSecondFloorText',
        'special_text' => 'getSpecialText',
        'tags' => 'getTags',
        'third_party_media' => 'getThirdPartyMedia',
        'title_text' => 'getTitleText',
        'videos' => 'getVideos',
        'waiting_time' => 'getWaitingTime',
        'web_address' => 'getWebAddress',
        'withdrawn_date_time' => 'getWithdrawnDateTime',
        'withdraw_reason' => 'getWithdrawReason',
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
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('amount_of_free_units', $data ?? [], null);
        $this->setIfExists('amount_of_units', $data ?? [], null);
        $this->setIfExists('building_bound_outside_spaces', $data ?? [], null);
        $this->setIfExists('building_start', $data ?? [], null);
        $this->setIfExists('building_start_date_parts', $data ?? [], null);
        $this->setIfExists('hide_building_start_date', $data ?? [], null);
        $this->setIfExists('building_start_text', $data ?? [], null);
        $this->setIfExists('building_type', $data ?? [], null);
        $this->setIfExists('comfort_quality', $data ?? [], null);
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('delivery_start', $data ?? [], null);
        $this->setIfExists('delivery_start_date_parts', $data ?? [], null);
        $this->setIfExists('hide_delivery_start_date', $data ?? [], null);
        $this->setIfExists('delivery_start_text', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('external_storages_spaces', $data ?? [], null);
        $this->setIfExists('hide_address', $data ?? [], null);
        $this->setIfExists('in_park', $data ?? [], null);
        $this->setIfExists('is_permanently_inhabited', $data ?? [], null);
        $this->setIfExists('is_recreational', $data ?? [], null);
        $this->setIfExists('living_room_surface', $data ?? [], null);
        $this->setIfExists('location_places', $data ?? [], null);
        $this->setIfExists('maintenance_inside', $data ?? [], null);
        $this->setIfExists('maintenance_outside', $data ?? [], null);
        $this->setIfExists('open_house_for_underlaying_objects_too', $data ?? [], null);
        $this->setIfExists('other_inside_spaces', $data ?? [], null);
        $this->setIfExists('parcel_surface', $data ?? [], null);
        $this->setIfExists('parking_facilities', $data ?? [], null);
        $this->setIfExists('public_reference', $data ?? [], null);
        $this->setIfExists('sale_start', $data ?? [], null);
        $this->setIfExists('sale_start_date_parts', $data ?? [], null);
        $this->setIfExists('hide_sale_start_date', $data ?? [], null);
        $this->setIfExists('sale_start_text', $data ?? [], null);
        $this->setIfExists('usage_area', $data ?? [], null);
        $this->setIfExists('year_of_construction', $data ?? [], null);
        $this->setIfExists('linked_employees', $data ?? [], null);
        $this->setIfExists('linked_office', $data ?? [], null);
        $this->setIfExists('linked_folder_tree', $data ?? [], null);
        $this->setIfExists('real_estate_group', $data ?? [], null);
        $this->setIfExists('number_of_floors', $data ?? [], null);
        $this->setIfExists('acceptance_details', $data ?? [], null);
        $this->setIfExists('advertisement_text', $data ?? [], null);
        $this->setIfExists('assignment_phase', $data ?? [], null);
        $this->setIfExists('availability_status', $data ?? [], null);
        $this->setIfExists('balcony_text', $data ?? [], null);
        $this->setIfExists('brochures', $data ?? [], null);
        $this->setIfExists('business_partners', $data ?? [], null);
        $this->setIfExists('calculate_price_per_m2', $data ?? [], null);
        $this->setIfExists('changes_number_of_inside_parking_lots', $data ?? [], null);
        $this->setIfExists('changes_number_of_parking_lots', $data ?? [], null);
        $this->setIfExists('changes_surface', $data ?? [], null);
        $this->setIfExists('confidentiality_level', $data ?? [], null);
        $this->setIfExists('contract_reason', $data ?? [], null);
        $this->setIfExists('contract_source', $data ?? [], null);
        $this->setIfExists('end_date_publication', $data ?? [], null);
        $this->setIfExists('environment_text', $data ?? [], null);
        $this->setIfExists('first_floor_text', $data ?? [], null);
        $this->setIfExists('for_rent', $data ?? [], null);
        $this->setIfExists('for_sale', $data ?? [], null);
        $this->setIfExists('gardens_text', $data ?? [], null);
        $this->setIfExists('ground_floor_text', $data ?? [], null);
        $this->setIfExists('hide_on_funda_until', $data ?? [], null);
        $this->setIfExists('funda_postal_code', $data ?? [], null);
        $this->setIfExists('funda_street', $data ?? [], null);
        $this->setIfExists('funda_locality', $data ?? [], null);
        $this->setIfExists('is_temporarily_removed_from_funda', $data ?? [], null);
        $this->setIfExists('mls_group', $data ?? [], null);
        $this->setIfExists('mls_release_date', $data ?? [], null);
        $this->setIfExists('hide_price', $data ?? [], null);
        $this->setIfExists('import_details', $data ?? [], null);
        $this->setIfExists('internal_memo', $data ?? [], null);
        $this->setIfExists('is_acquisition_assignment', $data ?? [], null);
        $this->setIfExists('is_cleared', $data ?? [], null);
        $this->setIfExists('is_confidential', $data ?? [], null);
        $this->setIfExists('is_private', $data ?? [], null);
        $this->setIfExists('is_production_rights', $data ?? [], null);
        $this->setIfExists('is_self_interest', $data ?? [], null);
        $this->setIfExists('is_special', $data ?? [], null);
        $this->setIfExists('is_topper', $data ?? [], null);
        $this->setIfExists('is_transaction_data_confidential', $data ?? [], null);
        $this->setIfExists('key_note', $data ?? [], null);
        $this->setIfExists('key_nr', $data ?? [], null);
        $this->setIfExists('linked_cadastres', $data ?? [], null);
        $this->setIfExists('linked_company_listings', $data ?? [], null);
        $this->setIfExists('linked_applicants', $data ?? [], null);
        $this->setIfExists('linked_notaries', $data ?? [], null);
        $this->setIfExists('linked_property_managers', $data ?? [], null);
        $this->setIfExists('linked_vendors', $data ?? [], null);
        $this->setIfExists('linked_financial_advisors', $data ?? [], null);
        $this->setIfExists('linked_appraisers', $data ?? [], null);
        $this->setIfExists('linked_clients', $data ?? [], null);
        $this->setIfExists('linked_offering_agencies', $data ?? [], null);
        $this->setIfExists('linked_purchasing_brokers', $data ?? [], null);
        $this->setIfExists('linked_inspectors', $data ?? [], null);
        $this->setIfExists('linked_stylists', $data ?? [], null);
        $this->setIfExists('linked_photographers', $data ?? [], null);
        $this->setIfExists('linked_potentials', $data ?? [], null);
        $this->setIfExists('linked_occupants', $data ?? [], null);
        $this->setIfExists('linked_people_who_opted', $data ?? [], null);
        $this->setIfExists('linked_project_developers', $data ?? [], null);
        $this->setIfExists('linked_tenant_representation_brokers', $data ?? [], null);
        $this->setIfExists('linked_rental_agents', $data ?? [], null);
        $this->setIfExists('linked_sales_brokers', $data ?? [], null);
        $this->setIfExists('linked_contact_persons', $data ?? [], null);
        $this->setIfExists('list_of_business', $data ?? [], null);
        $this->setIfExists('lot_description_text', $data ?? [], null);
        $this->setIfExists('mandate_date_time', $data ?? [], null);
        $this->setIfExists('maps', $data ?? [], null);
        $this->setIfExists('office_id', $data ?? [], null);
        $this->setIfExists('open_house', $data ?? [], null);
        $this->setIfExists('other_contract_source', $data ?? [], null);
        $this->setIfExists('other_floors_text', $data ?? [], null);
        $this->setIfExists('parking_text', $data ?? [], null);
        $this->setIfExists('parties_description_text', $data ?? [], null);
        $this->setIfExists('peculiarities_text', $data ?? [], null);
        $this->setIfExists('photos', $data ?? [], null);
        $this->setIfExists('price_description_text', $data ?? [], null);
        $this->setIfExists('products_to_pass_on', $data ?? [], null);
        $this->setIfExists('registration_conditions', $data ?? [], null);
        $this->setIfExists('rent_offer', $data ?? [], null);
        $this->setIfExists('sale_offer', $data ?? [], null);
        $this->setIfExists('second_floor_text', $data ?? [], null);
        $this->setIfExists('special_text', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('third_party_media', $data ?? [], null);
        $this->setIfExists('title_text', $data ?? [], null);
        $this->setIfExists('videos', $data ?? [], null);
        $this->setIfExists('waiting_time', $data ?? [], null);
        $this->setIfExists('web_address', $data ?? [], null);
        $this->setIfExists('withdrawn_date_time', $data ?? [], null);
        $this->setIfExists('withdraw_reason', $data ?? [], null);
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

        if ($this->container['linked_employees'] === null) {
            $invalidProperties[] = "'linked_employees' can't be null";
        }
        if ($this->container['linked_office'] === null) {
            $invalidProperties[] = "'linked_office' can't be null";
        }
        if ($this->container['real_estate_group'] === null) {
            $invalidProperties[] = "'real_estate_group' can't be null";
        }
        if (!is_null($this->container['funda_postal_code']) && (mb_strlen($this->container['funda_postal_code']) > 7)) {
            $invalidProperties[] = "invalid value for 'funda_postal_code', the character length must be smaller than or equal to 7.";
        }

        if (!is_null($this->container['funda_street']) && (mb_strlen($this->container['funda_street']) > 43)) {
            $invalidProperties[] = "invalid value for 'funda_street', the character length must be smaller than or equal to 43.";
        }

        if (!is_null($this->container['funda_locality']) && (mb_strlen($this->container['funda_locality']) > 24)) {
            $invalidProperties[] = "invalid value for 'funda_locality', the character length must be smaller than or equal to 24.";
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
     * Gets address
     *
     * @return \Brixion\Kolibri\Model\Address|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Brixion\Kolibri\Model\Address|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        if (is_null($address)) {
            throw new \InvalidArgumentException('non-nullable address cannot be null');
        }
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets amount_of_free_units
     *
     * @return int|null
     */
    public function getAmountOfFreeUnits()
    {
        return $this->container['amount_of_free_units'];
    }

    /**
     * Sets amount_of_free_units
     *
     * @param int|null $amount_of_free_units amount_of_free_units
     *
     * @return self
     */
    public function setAmountOfFreeUnits($amount_of_free_units)
    {
        if (is_null($amount_of_free_units)) {
            throw new \InvalidArgumentException('non-nullable amount_of_free_units cannot be null');
        }
        $this->container['amount_of_free_units'] = $amount_of_free_units;

        return $this;
    }

    /**
     * Gets amount_of_units
     *
     * @return int|null
     */
    public function getAmountOfUnits()
    {
        return $this->container['amount_of_units'];
    }

    /**
     * Sets amount_of_units
     *
     * @param int|null $amount_of_units amount_of_units
     *
     * @return self
     */
    public function setAmountOfUnits($amount_of_units)
    {
        if (is_null($amount_of_units)) {
            throw new \InvalidArgumentException('non-nullable amount_of_units cannot be null');
        }
        $this->container['amount_of_units'] = $amount_of_units;

        return $this;
    }

    /**
     * Gets building_bound_outside_spaces
     *
     * @return \Brixion\Kolibri\Model\DimensionsRange|null
     */
    public function getBuildingBoundOutsideSpaces()
    {
        return $this->container['building_bound_outside_spaces'];
    }

    /**
     * Sets building_bound_outside_spaces
     *
     * @param \Brixion\Kolibri\Model\DimensionsRange|null $building_bound_outside_spaces building_bound_outside_spaces
     *
     * @return self
     */
    public function setBuildingBoundOutsideSpaces($building_bound_outside_spaces)
    {
        if (is_null($building_bound_outside_spaces)) {
            throw new \InvalidArgumentException('non-nullable building_bound_outside_spaces cannot be null');
        }
        $this->container['building_bound_outside_spaces'] = $building_bound_outside_spaces;

        return $this;
    }

    /**
     * Gets building_start
     *
     * @return \DateTime|null
     */
    public function getBuildingStart()
    {
        return $this->container['building_start'];
    }

    /**
     * Sets building_start
     *
     * @param \DateTime|null $building_start building_start
     *
     * @return self
     */
    public function setBuildingStart($building_start)
    {
        if (is_null($building_start)) {
            throw new \InvalidArgumentException('non-nullable building_start cannot be null');
        }
        $this->container['building_start'] = $building_start;

        return $this;
    }

    /**
     * Gets building_start_date_parts
     *
     * @return bool|null
     */
    public function getBuildingStartDateParts()
    {
        return $this->container['building_start_date_parts'];
    }

    /**
     * Sets building_start_date_parts
     *
     * @param bool|null $building_start_date_parts building_start_date_parts
     *
     * @return self
     */
    public function setBuildingStartDateParts($building_start_date_parts)
    {
        if (is_null($building_start_date_parts)) {
            throw new \InvalidArgumentException('non-nullable building_start_date_parts cannot be null');
        }
        $this->container['building_start_date_parts'] = $building_start_date_parts;

        return $this;
    }

    /**
     * Gets hide_building_start_date
     *
     * @return bool|null
     */
    public function getHideBuildingStartDate()
    {
        return $this->container['hide_building_start_date'];
    }

    /**
     * Sets hide_building_start_date
     *
     * @param bool|null $hide_building_start_date hide_building_start_date
     *
     * @return self
     */
    public function setHideBuildingStartDate($hide_building_start_date)
    {
        if (is_null($hide_building_start_date)) {
            throw new \InvalidArgumentException('non-nullable hide_building_start_date cannot be null');
        }
        $this->container['hide_building_start_date'] = $hide_building_start_date;

        return $this;
    }

    /**
     * Gets building_start_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getBuildingStartText()
    {
        return $this->container['building_start_text'];
    }

    /**
     * Sets building_start_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $building_start_text building_start_text
     *
     * @return self
     */
    public function setBuildingStartText($building_start_text)
    {
        if (is_null($building_start_text)) {
            throw new \InvalidArgumentException('non-nullable building_start_text cannot be null');
        }
        $this->container['building_start_text'] = $building_start_text;

        return $this;
    }

    /**
     * Gets building_type
     *
     * @return \Brixion\Kolibri\Model\BuildingType|null
     */
    public function getBuildingType()
    {
        return $this->container['building_type'];
    }

    /**
     * Sets building_type
     *
     * @param \Brixion\Kolibri\Model\BuildingType|null $building_type building_type
     *
     * @return self
     */
    public function setBuildingType($building_type)
    {
        if (is_null($building_type)) {
            throw new \InvalidArgumentException('non-nullable building_type cannot be null');
        }
        $this->container['building_type'] = $building_type;

        return $this;
    }

    /**
     * Gets comfort_quality
     *
     * @return \Brixion\Kolibri\Model\ComfortQuality|null
     */
    public function getComfortQuality()
    {
        return $this->container['comfort_quality'];
    }

    /**
     * Sets comfort_quality
     *
     * @param \Brixion\Kolibri\Model\ComfortQuality|null $comfort_quality comfort_quality
     *
     * @return self
     */
    public function setComfortQuality($comfort_quality)
    {
        if (is_null($comfort_quality)) {
            throw new \InvalidArgumentException('non-nullable comfort_quality cannot be null');
        }
        $this->container['comfort_quality'] = $comfort_quality;

        return $this;
    }

    /**
     * Gets content
     *
     * @return \Brixion\Kolibri\Model\DimensionsRange|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \Brixion\Kolibri\Model\DimensionsRange|null $content content
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
     * Gets delivery_start
     *
     * @return \DateTime|null
     */
    public function getDeliveryStart()
    {
        return $this->container['delivery_start'];
    }

    /**
     * Sets delivery_start
     *
     * @param \DateTime|null $delivery_start delivery_start
     *
     * @return self
     */
    public function setDeliveryStart($delivery_start)
    {
        if (is_null($delivery_start)) {
            throw new \InvalidArgumentException('non-nullable delivery_start cannot be null');
        }
        $this->container['delivery_start'] = $delivery_start;

        return $this;
    }

    /**
     * Gets delivery_start_date_parts
     *
     * @return bool|null
     */
    public function getDeliveryStartDateParts()
    {
        return $this->container['delivery_start_date_parts'];
    }

    /**
     * Sets delivery_start_date_parts
     *
     * @param bool|null $delivery_start_date_parts delivery_start_date_parts
     *
     * @return self
     */
    public function setDeliveryStartDateParts($delivery_start_date_parts)
    {
        if (is_null($delivery_start_date_parts)) {
            throw new \InvalidArgumentException('non-nullable delivery_start_date_parts cannot be null');
        }
        $this->container['delivery_start_date_parts'] = $delivery_start_date_parts;

        return $this;
    }

    /**
     * Gets hide_delivery_start_date
     *
     * @return bool|null
     */
    public function getHideDeliveryStartDate()
    {
        return $this->container['hide_delivery_start_date'];
    }

    /**
     * Sets hide_delivery_start_date
     *
     * @param bool|null $hide_delivery_start_date hide_delivery_start_date
     *
     * @return self
     */
    public function setHideDeliveryStartDate($hide_delivery_start_date)
    {
        if (is_null($hide_delivery_start_date)) {
            throw new \InvalidArgumentException('non-nullable hide_delivery_start_date cannot be null');
        }
        $this->container['hide_delivery_start_date'] = $hide_delivery_start_date;

        return $this;
    }

    /**
     * Gets delivery_start_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getDeliveryStartText()
    {
        return $this->container['delivery_start_text'];
    }

    /**
     * Sets delivery_start_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $delivery_start_text delivery_start_text
     *
     * @return self
     */
    public function setDeliveryStartText($delivery_start_text)
    {
        if (is_null($delivery_start_text)) {
            throw new \InvalidArgumentException('non-nullable delivery_start_text cannot be null');
        }
        $this->container['delivery_start_text'] = $delivery_start_text;

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
     * Gets external_storages_spaces
     *
     * @return \Brixion\Kolibri\Model\DimensionsRange|null
     */
    public function getExternalStoragesSpaces()
    {
        return $this->container['external_storages_spaces'];
    }

    /**
     * Sets external_storages_spaces
     *
     * @param \Brixion\Kolibri\Model\DimensionsRange|null $external_storages_spaces external_storages_spaces
     *
     * @return self
     */
    public function setExternalStoragesSpaces($external_storages_spaces)
    {
        if (is_null($external_storages_spaces)) {
            throw new \InvalidArgumentException('non-nullable external_storages_spaces cannot be null');
        }
        $this->container['external_storages_spaces'] = $external_storages_spaces;

        return $this;
    }

    /**
     * Gets hide_address
     *
     * @return bool|null
     */
    public function getHideAddress()
    {
        return $this->container['hide_address'];
    }

    /**
     * Sets hide_address
     *
     * @param bool|null $hide_address hide_address
     *
     * @return self
     */
    public function setHideAddress($hide_address)
    {
        if (is_null($hide_address)) {
            throw new \InvalidArgumentException('non-nullable hide_address cannot be null');
        }
        $this->container['hide_address'] = $hide_address;

        return $this;
    }

    /**
     * Gets in_park
     *
     * @return bool|null
     */
    public function getInPark()
    {
        return $this->container['in_park'];
    }

    /**
     * Sets in_park
     *
     * @param bool|null $in_park in_park
     *
     * @return self
     */
    public function setInPark($in_park)
    {
        if (is_null($in_park)) {
            throw new \InvalidArgumentException('non-nullable in_park cannot be null');
        }
        $this->container['in_park'] = $in_park;

        return $this;
    }

    /**
     * Gets is_permanently_inhabited
     *
     * @return bool|null
     */
    public function getIsPermanentlyInhabited()
    {
        return $this->container['is_permanently_inhabited'];
    }

    /**
     * Sets is_permanently_inhabited
     *
     * @param bool|null $is_permanently_inhabited is_permanently_inhabited
     *
     * @return self
     */
    public function setIsPermanentlyInhabited($is_permanently_inhabited)
    {
        if (is_null($is_permanently_inhabited)) {
            throw new \InvalidArgumentException('non-nullable is_permanently_inhabited cannot be null');
        }
        $this->container['is_permanently_inhabited'] = $is_permanently_inhabited;

        return $this;
    }

    /**
     * Gets is_recreational
     *
     * @return bool|null
     */
    public function getIsRecreational()
    {
        return $this->container['is_recreational'];
    }

    /**
     * Sets is_recreational
     *
     * @param bool|null $is_recreational is_recreational
     *
     * @return self
     */
    public function setIsRecreational($is_recreational)
    {
        if (is_null($is_recreational)) {
            throw new \InvalidArgumentException('non-nullable is_recreational cannot be null');
        }
        $this->container['is_recreational'] = $is_recreational;

        return $this;
    }

    /**
     * Gets living_room_surface
     *
     * @return \Brixion\Kolibri\Model\DimensionsRange|null
     */
    public function getLivingRoomSurface()
    {
        return $this->container['living_room_surface'];
    }

    /**
     * Sets living_room_surface
     *
     * @param \Brixion\Kolibri\Model\DimensionsRange|null $living_room_surface living_room_surface
     *
     * @return self
     */
    public function setLivingRoomSurface($living_room_surface)
    {
        if (is_null($living_room_surface)) {
            throw new \InvalidArgumentException('non-nullable living_room_surface cannot be null');
        }
        $this->container['living_room_surface'] = $living_room_surface;

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
     * Gets open_house_for_underlaying_objects_too
     *
     * @return bool|null
     */
    public function getOpenHouseForUnderlayingObjectsToo()
    {
        return $this->container['open_house_for_underlaying_objects_too'];
    }

    /**
     * Sets open_house_for_underlaying_objects_too
     *
     * @param bool|null $open_house_for_underlaying_objects_too open_house_for_underlaying_objects_too
     *
     * @return self
     */
    public function setOpenHouseForUnderlayingObjectsToo($open_house_for_underlaying_objects_too)
    {
        if (is_null($open_house_for_underlaying_objects_too)) {
            throw new \InvalidArgumentException('non-nullable open_house_for_underlaying_objects_too cannot be null');
        }
        $this->container['open_house_for_underlaying_objects_too'] = $open_house_for_underlaying_objects_too;

        return $this;
    }

    /**
     * Gets other_inside_spaces
     *
     * @return \Brixion\Kolibri\Model\DimensionsRange|null
     */
    public function getOtherInsideSpaces()
    {
        return $this->container['other_inside_spaces'];
    }

    /**
     * Sets other_inside_spaces
     *
     * @param \Brixion\Kolibri\Model\DimensionsRange|null $other_inside_spaces other_inside_spaces
     *
     * @return self
     */
    public function setOtherInsideSpaces($other_inside_spaces)
    {
        if (is_null($other_inside_spaces)) {
            throw new \InvalidArgumentException('non-nullable other_inside_spaces cannot be null');
        }
        $this->container['other_inside_spaces'] = $other_inside_spaces;

        return $this;
    }

    /**
     * Gets parcel_surface
     *
     * @return \Brixion\Kolibri\Model\DimensionsRange|null
     */
    public function getParcelSurface()
    {
        return $this->container['parcel_surface'];
    }

    /**
     * Sets parcel_surface
     *
     * @param \Brixion\Kolibri\Model\DimensionsRange|null $parcel_surface parcel_surface
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
     * Gets parking_facilities
     *
     * @return \Brixion\Kolibri\Model\TypeOfParkingFacility[]|null
     */
    public function getParkingFacilities()
    {
        return $this->container['parking_facilities'];
    }

    /**
     * Sets parking_facilities
     *
     * @param \Brixion\Kolibri\Model\TypeOfParkingFacility[]|null $parking_facilities parking_facilities
     *
     * @return self
     */
    public function setParkingFacilities($parking_facilities)
    {
        if (is_null($parking_facilities)) {
            throw new \InvalidArgumentException('non-nullable parking_facilities cannot be null');
        }
        $this->container['parking_facilities'] = $parking_facilities;

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
     * Gets sale_start
     *
     * @return \DateTime|null
     */
    public function getSaleStart()
    {
        return $this->container['sale_start'];
    }

    /**
     * Sets sale_start
     *
     * @param \DateTime|null $sale_start sale_start
     *
     * @return self
     */
    public function setSaleStart($sale_start)
    {
        if (is_null($sale_start)) {
            throw new \InvalidArgumentException('non-nullable sale_start cannot be null');
        }
        $this->container['sale_start'] = $sale_start;

        return $this;
    }

    /**
     * Gets sale_start_date_parts
     *
     * @return bool|null
     */
    public function getSaleStartDateParts()
    {
        return $this->container['sale_start_date_parts'];
    }

    /**
     * Sets sale_start_date_parts
     *
     * @param bool|null $sale_start_date_parts sale_start_date_parts
     *
     * @return self
     */
    public function setSaleStartDateParts($sale_start_date_parts)
    {
        if (is_null($sale_start_date_parts)) {
            throw new \InvalidArgumentException('non-nullable sale_start_date_parts cannot be null');
        }
        $this->container['sale_start_date_parts'] = $sale_start_date_parts;

        return $this;
    }

    /**
     * Gets hide_sale_start_date
     *
     * @return bool|null
     */
    public function getHideSaleStartDate()
    {
        return $this->container['hide_sale_start_date'];
    }

    /**
     * Sets hide_sale_start_date
     *
     * @param bool|null $hide_sale_start_date hide_sale_start_date
     *
     * @return self
     */
    public function setHideSaleStartDate($hide_sale_start_date)
    {
        if (is_null($hide_sale_start_date)) {
            throw new \InvalidArgumentException('non-nullable hide_sale_start_date cannot be null');
        }
        $this->container['hide_sale_start_date'] = $hide_sale_start_date;

        return $this;
    }

    /**
     * Gets sale_start_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getSaleStartText()
    {
        return $this->container['sale_start_text'];
    }

    /**
     * Sets sale_start_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $sale_start_text sale_start_text
     *
     * @return self
     */
    public function setSaleStartText($sale_start_text)
    {
        if (is_null($sale_start_text)) {
            throw new \InvalidArgumentException('non-nullable sale_start_text cannot be null');
        }
        $this->container['sale_start_text'] = $sale_start_text;

        return $this;
    }

    /**
     * Gets usage_area
     *
     * @return \Brixion\Kolibri\Model\DimensionsRange|null
     */
    public function getUsageArea()
    {
        return $this->container['usage_area'];
    }

    /**
     * Sets usage_area
     *
     * @param \Brixion\Kolibri\Model\DimensionsRange|null $usage_area usage_area
     *
     * @return self
     */
    public function setUsageArea($usage_area)
    {
        if (is_null($usage_area)) {
            throw new \InvalidArgumentException('non-nullable usage_area cannot be null');
        }
        $this->container['usage_area'] = $usage_area;

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
     * Gets linked_employees
     *
     * @return \Brixion\Kolibri\Model\LinkedEmployee[]
     */
    public function getLinkedEmployees()
    {
        return $this->container['linked_employees'];
    }

    /**
     * Sets linked_employees
     *
     * @param \Brixion\Kolibri\Model\LinkedEmployee[] $linked_employees linked_employees
     *
     * @return self
     */
    public function setLinkedEmployees($linked_employees)
    {
        if (is_null($linked_employees)) {
            throw new \InvalidArgumentException('non-nullable linked_employees cannot be null');
        }
        $this->container['linked_employees'] = $linked_employees;

        return $this;
    }

    /**
     * Gets linked_office
     *
     * @return \Brixion\Kolibri\Model\LinkedOffice
     */
    public function getLinkedOffice()
    {
        return $this->container['linked_office'];
    }

    /**
     * Sets linked_office
     *
     * @param \Brixion\Kolibri\Model\LinkedOffice $linked_office linked_office
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
     * Gets linked_folder_tree
     *
     * @return \Brixion\Kolibri\Model\LinkedFolderTree|null
     */
    public function getLinkedFolderTree()
    {
        return $this->container['linked_folder_tree'];
    }

    /**
     * Sets linked_folder_tree
     *
     * @param \Brixion\Kolibri\Model\LinkedFolderTree|null $linked_folder_tree linked_folder_tree
     *
     * @return self
     */
    public function setLinkedFolderTree($linked_folder_tree)
    {
        if (is_null($linked_folder_tree)) {
            throw new \InvalidArgumentException('non-nullable linked_folder_tree cannot be null');
        }
        $this->container['linked_folder_tree'] = $linked_folder_tree;

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
     * Gets number_of_floors
     *
     * @return int|null
     */
    public function getNumberOfFloors()
    {
        return $this->container['number_of_floors'];
    }

    /**
     * Sets number_of_floors
     *
     * @param int|null $number_of_floors number_of_floors
     *
     * @return self
     */
    public function setNumberOfFloors($number_of_floors)
    {
        if (is_null($number_of_floors)) {
            throw new \InvalidArgumentException('non-nullable number_of_floors cannot be null');
        }
        $this->container['number_of_floors'] = $number_of_floors;

        return $this;
    }

    /**
     * Gets acceptance_details
     *
     * @return \Brixion\Kolibri\Model\AcceptanceDetails|null
     */
    public function getAcceptanceDetails()
    {
        return $this->container['acceptance_details'];
    }

    /**
     * Sets acceptance_details
     *
     * @param \Brixion\Kolibri\Model\AcceptanceDetails|null $acceptance_details acceptance_details
     *
     * @return self
     */
    public function setAcceptanceDetails($acceptance_details)
    {
        if (is_null($acceptance_details)) {
            throw new \InvalidArgumentException('non-nullable acceptance_details cannot be null');
        }
        $this->container['acceptance_details'] = $acceptance_details;

        return $this;
    }

    /**
     * Gets advertisement_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getAdvertisementText()
    {
        return $this->container['advertisement_text'];
    }

    /**
     * Sets advertisement_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $advertisement_text advertisement_text
     *
     * @return self
     */
    public function setAdvertisementText($advertisement_text)
    {
        if (is_null($advertisement_text)) {
            throw new \InvalidArgumentException('non-nullable advertisement_text cannot be null');
        }
        $this->container['advertisement_text'] = $advertisement_text;

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
     * Gets balcony_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getBalconyText()
    {
        return $this->container['balcony_text'];
    }

    /**
     * Sets balcony_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $balcony_text balcony_text
     *
     * @return self
     */
    public function setBalconyText($balcony_text)
    {
        if (is_null($balcony_text)) {
            throw new \InvalidArgumentException('non-nullable balcony_text cannot be null');
        }
        $this->container['balcony_text'] = $balcony_text;

        return $this;
    }

    /**
     * Gets brochures
     *
     * @return \Brixion\Kolibri\Model\BrochureBlob[]|null
     */
    public function getBrochures()
    {
        return $this->container['brochures'];
    }

    /**
     * Sets brochures
     *
     * @param \Brixion\Kolibri\Model\BrochureBlob[]|null $brochures brochures
     *
     * @return self
     */
    public function setBrochures($brochures)
    {
        if (is_null($brochures)) {
            throw new \InvalidArgumentException('non-nullable brochures cannot be null');
        }
        $this->container['brochures'] = $brochures;

        return $this;
    }

    /**
     * Gets business_partners
     *
     * @return \Brixion\Kolibri\Model\AssignmentBusinessPartner[]|null
     */
    public function getBusinessPartners()
    {
        return $this->container['business_partners'];
    }

    /**
     * Sets business_partners
     *
     * @param \Brixion\Kolibri\Model\AssignmentBusinessPartner[]|null $business_partners business_partners
     *
     * @return self
     */
    public function setBusinessPartners($business_partners)
    {
        if (is_null($business_partners)) {
            throw new \InvalidArgumentException('non-nullable business_partners cannot be null');
        }
        $this->container['business_partners'] = $business_partners;

        return $this;
    }

    /**
     * Gets calculate_price_per_m2
     *
     * @return bool|null
     */
    public function getCalculatePricePerM2()
    {
        return $this->container['calculate_price_per_m2'];
    }

    /**
     * Sets calculate_price_per_m2
     *
     * @param bool|null $calculate_price_per_m2 calculate_price_per_m2
     *
     * @return self
     */
    public function setCalculatePricePerM2($calculate_price_per_m2)
    {
        if (is_null($calculate_price_per_m2)) {
            throw new \InvalidArgumentException('non-nullable calculate_price_per_m2 cannot be null');
        }
        $this->container['calculate_price_per_m2'] = $calculate_price_per_m2;

        return $this;
    }

    /**
     * Gets changes_number_of_inside_parking_lots
     *
     * @return \Brixion\Kolibri\Model\PartialChange[]|null
     */
    public function getChangesNumberOfInsideParkingLots()
    {
        return $this->container['changes_number_of_inside_parking_lots'];
    }

    /**
     * Sets changes_number_of_inside_parking_lots
     *
     * @param \Brixion\Kolibri\Model\PartialChange[]|null $changes_number_of_inside_parking_lots changes_number_of_inside_parking_lots
     *
     * @return self
     */
    public function setChangesNumberOfInsideParkingLots($changes_number_of_inside_parking_lots)
    {
        if (is_null($changes_number_of_inside_parking_lots)) {
            throw new \InvalidArgumentException('non-nullable changes_number_of_inside_parking_lots cannot be null');
        }
        $this->container['changes_number_of_inside_parking_lots'] = $changes_number_of_inside_parking_lots;

        return $this;
    }

    /**
     * Gets changes_number_of_parking_lots
     *
     * @return \Brixion\Kolibri\Model\PartialChange[]|null
     */
    public function getChangesNumberOfParkingLots()
    {
        return $this->container['changes_number_of_parking_lots'];
    }

    /**
     * Sets changes_number_of_parking_lots
     *
     * @param \Brixion\Kolibri\Model\PartialChange[]|null $changes_number_of_parking_lots changes_number_of_parking_lots
     *
     * @return self
     */
    public function setChangesNumberOfParkingLots($changes_number_of_parking_lots)
    {
        if (is_null($changes_number_of_parking_lots)) {
            throw new \InvalidArgumentException('non-nullable changes_number_of_parking_lots cannot be null');
        }
        $this->container['changes_number_of_parking_lots'] = $changes_number_of_parking_lots;

        return $this;
    }

    /**
     * Gets changes_surface
     *
     * @return \Brixion\Kolibri\Model\PartialChange[]|null
     */
    public function getChangesSurface()
    {
        return $this->container['changes_surface'];
    }

    /**
     * Sets changes_surface
     *
     * @param \Brixion\Kolibri\Model\PartialChange[]|null $changes_surface changes_surface
     *
     * @return self
     */
    public function setChangesSurface($changes_surface)
    {
        if (is_null($changes_surface)) {
            throw new \InvalidArgumentException('non-nullable changes_surface cannot be null');
        }
        $this->container['changes_surface'] = $changes_surface;

        return $this;
    }

    /**
     * Gets confidentiality_level
     *
     * @return \Brixion\Kolibri\Model\ConfidentialityLevel|null
     */
    public function getConfidentialityLevel()
    {
        return $this->container['confidentiality_level'];
    }

    /**
     * Sets confidentiality_level
     *
     * @param \Brixion\Kolibri\Model\ConfidentialityLevel|null $confidentiality_level confidentiality_level
     *
     * @return self
     */
    public function setConfidentialityLevel($confidentiality_level)
    {
        if (is_null($confidentiality_level)) {
            throw new \InvalidArgumentException('non-nullable confidentiality_level cannot be null');
        }
        $this->container['confidentiality_level'] = $confidentiality_level;

        return $this;
    }

    /**
     * Gets contract_reason
     *
     * @return \Brixion\Kolibri\Model\ContractReason|null
     */
    public function getContractReason()
    {
        return $this->container['contract_reason'];
    }

    /**
     * Sets contract_reason
     *
     * @param \Brixion\Kolibri\Model\ContractReason|null $contract_reason contract_reason
     *
     * @return self
     */
    public function setContractReason($contract_reason)
    {
        if (is_null($contract_reason)) {
            throw new \InvalidArgumentException('non-nullable contract_reason cannot be null');
        }
        $this->container['contract_reason'] = $contract_reason;

        return $this;
    }

    /**
     * Gets contract_source
     *
     * @return \Brixion\Kolibri\Model\ContractSource|null
     */
    public function getContractSource()
    {
        return $this->container['contract_source'];
    }

    /**
     * Sets contract_source
     *
     * @param \Brixion\Kolibri\Model\ContractSource|null $contract_source contract_source
     *
     * @return self
     */
    public function setContractSource($contract_source)
    {
        if (is_null($contract_source)) {
            throw new \InvalidArgumentException('non-nullable contract_source cannot be null');
        }
        $this->container['contract_source'] = $contract_source;

        return $this;
    }

    /**
     * Gets end_date_publication
     *
     * @return \DateTime|null
     */
    public function getEndDatePublication()
    {
        return $this->container['end_date_publication'];
    }

    /**
     * Sets end_date_publication
     *
     * @param \DateTime|null $end_date_publication end_date_publication
     *
     * @return self
     */
    public function setEndDatePublication($end_date_publication)
    {
        if (is_null($end_date_publication)) {
            throw new \InvalidArgumentException('non-nullable end_date_publication cannot be null');
        }
        $this->container['end_date_publication'] = $end_date_publication;

        return $this;
    }

    /**
     * Gets environment_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getEnvironmentText()
    {
        return $this->container['environment_text'];
    }

    /**
     * Sets environment_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $environment_text environment_text
     *
     * @return self
     */
    public function setEnvironmentText($environment_text)
    {
        if (is_null($environment_text)) {
            throw new \InvalidArgumentException('non-nullable environment_text cannot be null');
        }
        $this->container['environment_text'] = $environment_text;

        return $this;
    }

    /**
     * Gets first_floor_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getFirstFloorText()
    {
        return $this->container['first_floor_text'];
    }

    /**
     * Sets first_floor_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $first_floor_text first_floor_text
     *
     * @return self
     */
    public function setFirstFloorText($first_floor_text)
    {
        if (is_null($first_floor_text)) {
            throw new \InvalidArgumentException('non-nullable first_floor_text cannot be null');
        }
        $this->container['first_floor_text'] = $first_floor_text;

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
     * @param bool|null $for_rent for_rent
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
     * @param bool|null $for_sale for_sale
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
     * Gets gardens_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getGardensText()
    {
        return $this->container['gardens_text'];
    }

    /**
     * Sets gardens_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $gardens_text gardens_text
     *
     * @return self
     */
    public function setGardensText($gardens_text)
    {
        if (is_null($gardens_text)) {
            throw new \InvalidArgumentException('non-nullable gardens_text cannot be null');
        }
        $this->container['gardens_text'] = $gardens_text;

        return $this;
    }

    /**
     * Gets ground_floor_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getGroundFloorText()
    {
        return $this->container['ground_floor_text'];
    }

    /**
     * Sets ground_floor_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $ground_floor_text ground_floor_text
     *
     * @return self
     */
    public function setGroundFloorText($ground_floor_text)
    {
        if (is_null($ground_floor_text)) {
            throw new \InvalidArgumentException('non-nullable ground_floor_text cannot be null');
        }
        $this->container['ground_floor_text'] = $ground_floor_text;

        return $this;
    }

    /**
     * Gets hide_on_funda_until
     *
     * @return \DateTime|null
     */
    public function getHideOnFundaUntil()
    {
        return $this->container['hide_on_funda_until'];
    }

    /**
     * Sets hide_on_funda_until
     *
     * @param \DateTime|null $hide_on_funda_until hide_on_funda_until
     *
     * @return self
     */
    public function setHideOnFundaUntil($hide_on_funda_until)
    {
        if (is_null($hide_on_funda_until)) {
            throw new \InvalidArgumentException('non-nullable hide_on_funda_until cannot be null');
        }
        $this->container['hide_on_funda_until'] = $hide_on_funda_until;

        return $this;
    }

    /**
     * Gets funda_postal_code
     *
     * @return string|null
     */
    public function getFundaPostalCode()
    {
        return $this->container['funda_postal_code'];
    }

    /**
     * Sets funda_postal_code
     *
     * @param string|null $funda_postal_code funda_postal_code
     *
     * @return self
     */
    public function setFundaPostalCode($funda_postal_code)
    {
        if (is_null($funda_postal_code)) {
            throw new \InvalidArgumentException('non-nullable funda_postal_code cannot be null');
        }
        if ((mb_strlen($funda_postal_code) > 7)) {
            throw new \InvalidArgumentException('invalid length for $funda_postal_code when calling ProjectAssignment., must be smaller than or equal to 7.');
        }

        $this->container['funda_postal_code'] = $funda_postal_code;

        return $this;
    }

    /**
     * Gets funda_street
     *
     * @return string|null
     */
    public function getFundaStreet()
    {
        return $this->container['funda_street'];
    }

    /**
     * Sets funda_street
     *
     * @param string|null $funda_street funda_street
     *
     * @return self
     */
    public function setFundaStreet($funda_street)
    {
        if (is_null($funda_street)) {
            throw new \InvalidArgumentException('non-nullable funda_street cannot be null');
        }
        if ((mb_strlen($funda_street) > 43)) {
            throw new \InvalidArgumentException('invalid length for $funda_street when calling ProjectAssignment., must be smaller than or equal to 43.');
        }

        $this->container['funda_street'] = $funda_street;

        return $this;
    }

    /**
     * Gets funda_locality
     *
     * @return string|null
     */
    public function getFundaLocality()
    {
        return $this->container['funda_locality'];
    }

    /**
     * Sets funda_locality
     *
     * @param string|null $funda_locality funda_locality
     *
     * @return self
     */
    public function setFundaLocality($funda_locality)
    {
        if (is_null($funda_locality)) {
            throw new \InvalidArgumentException('non-nullable funda_locality cannot be null');
        }
        if ((mb_strlen($funda_locality) > 24)) {
            throw new \InvalidArgumentException('invalid length for $funda_locality when calling ProjectAssignment., must be smaller than or equal to 24.');
        }

        $this->container['funda_locality'] = $funda_locality;

        return $this;
    }

    /**
     * Gets is_temporarily_removed_from_funda
     *
     * @return bool|null
     */
    public function getIsTemporarilyRemovedFromFunda()
    {
        return $this->container['is_temporarily_removed_from_funda'];
    }

    /**
     * Sets is_temporarily_removed_from_funda
     *
     * @param bool|null $is_temporarily_removed_from_funda is_temporarily_removed_from_funda
     *
     * @return self
     */
    public function setIsTemporarilyRemovedFromFunda($is_temporarily_removed_from_funda)
    {
        if (is_null($is_temporarily_removed_from_funda)) {
            throw new \InvalidArgumentException('non-nullable is_temporarily_removed_from_funda cannot be null');
        }
        $this->container['is_temporarily_removed_from_funda'] = $is_temporarily_removed_from_funda;

        return $this;
    }

    /**
     * Gets mls_group
     *
     * @return string|null
     */
    public function getMlsGroup()
    {
        return $this->container['mls_group'];
    }

    /**
     * Sets mls_group
     *
     * @param string|null $mls_group mls_group
     *
     * @return self
     */
    public function setMlsGroup($mls_group)
    {
        if (is_null($mls_group)) {
            throw new \InvalidArgumentException('non-nullable mls_group cannot be null');
        }
        $this->container['mls_group'] = $mls_group;

        return $this;
    }

    /**
     * Gets mls_release_date
     *
     * @return \DateTime|null
     */
    public function getMlsReleaseDate()
    {
        return $this->container['mls_release_date'];
    }

    /**
     * Sets mls_release_date
     *
     * @param \DateTime|null $mls_release_date mls_release_date
     *
     * @return self
     */
    public function setMlsReleaseDate($mls_release_date)
    {
        if (is_null($mls_release_date)) {
            throw new \InvalidArgumentException('non-nullable mls_release_date cannot be null');
        }
        $this->container['mls_release_date'] = $mls_release_date;

        return $this;
    }

    /**
     * Gets hide_price
     *
     * @return bool|null
     */
    public function getHidePrice()
    {
        return $this->container['hide_price'];
    }

    /**
     * Sets hide_price
     *
     * @param bool|null $hide_price hide_price
     *
     * @return self
     */
    public function setHidePrice($hide_price)
    {
        if (is_null($hide_price)) {
            throw new \InvalidArgumentException('non-nullable hide_price cannot be null');
        }
        $this->container['hide_price'] = $hide_price;

        return $this;
    }

    /**
     * Gets import_details
     *
     * @return \Brixion\Kolibri\Model\ImportDetails|null
     */
    public function getImportDetails()
    {
        return $this->container['import_details'];
    }

    /**
     * Sets import_details
     *
     * @param \Brixion\Kolibri\Model\ImportDetails|null $import_details import_details
     *
     * @return self
     */
    public function setImportDetails($import_details)
    {
        if (is_null($import_details)) {
            throw new \InvalidArgumentException('non-nullable import_details cannot be null');
        }
        $this->container['import_details'] = $import_details;

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
     * Gets is_acquisition_assignment
     *
     * @return bool|null
     */
    public function getIsAcquisitionAssignment()
    {
        return $this->container['is_acquisition_assignment'];
    }

    /**
     * Sets is_acquisition_assignment
     *
     * @param bool|null $is_acquisition_assignment is_acquisition_assignment
     *
     * @return self
     */
    public function setIsAcquisitionAssignment($is_acquisition_assignment)
    {
        if (is_null($is_acquisition_assignment)) {
            throw new \InvalidArgumentException('non-nullable is_acquisition_assignment cannot be null');
        }
        $this->container['is_acquisition_assignment'] = $is_acquisition_assignment;

        return $this;
    }

    /**
     * Gets is_cleared
     *
     * @return bool|null
     */
    public function getIsCleared()
    {
        return $this->container['is_cleared'];
    }

    /**
     * Sets is_cleared
     *
     * @param bool|null $is_cleared is_cleared
     *
     * @return self
     */
    public function setIsCleared($is_cleared)
    {
        if (is_null($is_cleared)) {
            throw new \InvalidArgumentException('non-nullable is_cleared cannot be null');
        }
        $this->container['is_cleared'] = $is_cleared;

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
     * Gets is_private
     *
     * @return bool|null
     */
    public function getIsPrivate()
    {
        return $this->container['is_private'];
    }

    /**
     * Sets is_private
     *
     * @param bool|null $is_private is_private
     *
     * @return self
     */
    public function setIsPrivate($is_private)
    {
        if (is_null($is_private)) {
            throw new \InvalidArgumentException('non-nullable is_private cannot be null');
        }
        $this->container['is_private'] = $is_private;

        return $this;
    }

    /**
     * Gets is_production_rights
     *
     * @return bool|null
     */
    public function getIsProductionRights()
    {
        return $this->container['is_production_rights'];
    }

    /**
     * Sets is_production_rights
     *
     * @param bool|null $is_production_rights is_production_rights
     *
     * @return self
     */
    public function setIsProductionRights($is_production_rights)
    {
        if (is_null($is_production_rights)) {
            throw new \InvalidArgumentException('non-nullable is_production_rights cannot be null');
        }
        $this->container['is_production_rights'] = $is_production_rights;

        return $this;
    }

    /**
     * Gets is_self_interest
     *
     * @return bool|null
     */
    public function getIsSelfInterest()
    {
        return $this->container['is_self_interest'];
    }

    /**
     * Sets is_self_interest
     *
     * @param bool|null $is_self_interest is_self_interest
     *
     * @return self
     */
    public function setIsSelfInterest($is_self_interest)
    {
        if (is_null($is_self_interest)) {
            throw new \InvalidArgumentException('non-nullable is_self_interest cannot be null');
        }
        $this->container['is_self_interest'] = $is_self_interest;

        return $this;
    }

    /**
     * Gets is_special
     *
     * @return bool|null
     */
    public function getIsSpecial()
    {
        return $this->container['is_special'];
    }

    /**
     * Sets is_special
     *
     * @param bool|null $is_special is_special
     *
     * @return self
     */
    public function setIsSpecial($is_special)
    {
        if (is_null($is_special)) {
            throw new \InvalidArgumentException('non-nullable is_special cannot be null');
        }
        $this->container['is_special'] = $is_special;

        return $this;
    }

    /**
     * Gets is_topper
     *
     * @return bool|null
     */
    public function getIsTopper()
    {
        return $this->container['is_topper'];
    }

    /**
     * Sets is_topper
     *
     * @param bool|null $is_topper is_topper
     *
     * @return self
     */
    public function setIsTopper($is_topper)
    {
        if (is_null($is_topper)) {
            throw new \InvalidArgumentException('non-nullable is_topper cannot be null');
        }
        $this->container['is_topper'] = $is_topper;

        return $this;
    }

    /**
     * Gets is_transaction_data_confidential
     *
     * @return bool|null
     */
    public function getIsTransactionDataConfidential()
    {
        return $this->container['is_transaction_data_confidential'];
    }

    /**
     * Sets is_transaction_data_confidential
     *
     * @param bool|null $is_transaction_data_confidential is_transaction_data_confidential
     *
     * @return self
     */
    public function setIsTransactionDataConfidential($is_transaction_data_confidential)
    {
        if (is_null($is_transaction_data_confidential)) {
            throw new \InvalidArgumentException('non-nullable is_transaction_data_confidential cannot be null');
        }
        $this->container['is_transaction_data_confidential'] = $is_transaction_data_confidential;

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
     * Gets linked_cadastres
     *
     * @return \Brixion\Kolibri\Model\LinkedCadastre[]|null
     */
    public function getLinkedCadastres()
    {
        return $this->container['linked_cadastres'];
    }

    /**
     * Sets linked_cadastres
     *
     * @param \Brixion\Kolibri\Model\LinkedCadastre[]|null $linked_cadastres linked_cadastres
     *
     * @return self
     */
    public function setLinkedCadastres($linked_cadastres)
    {
        if (is_null($linked_cadastres)) {
            throw new \InvalidArgumentException('non-nullable linked_cadastres cannot be null');
        }
        $this->container['linked_cadastres'] = $linked_cadastres;

        return $this;
    }

    /**
     * Gets linked_company_listings
     *
     * @return \Brixion\Kolibri\Model\LinkedCompanyListing[]|null
     */
    public function getLinkedCompanyListings()
    {
        return $this->container['linked_company_listings'];
    }

    /**
     * Sets linked_company_listings
     *
     * @param \Brixion\Kolibri\Model\LinkedCompanyListing[]|null $linked_company_listings linked_company_listings
     *
     * @return self
     */
    public function setLinkedCompanyListings($linked_company_listings)
    {
        if (is_null($linked_company_listings)) {
            throw new \InvalidArgumentException('non-nullable linked_company_listings cannot be null');
        }
        $this->container['linked_company_listings'] = $linked_company_listings;

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
     * Gets linked_financial_advisors
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedFinancialAdvisors()
    {
        return $this->container['linked_financial_advisors'];
    }

    /**
     * Sets linked_financial_advisors
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_financial_advisors linked_financial_advisors
     *
     * @return self
     */
    public function setLinkedFinancialAdvisors($linked_financial_advisors)
    {
        if (is_null($linked_financial_advisors)) {
            throw new \InvalidArgumentException('non-nullable linked_financial_advisors cannot be null');
        }
        $this->container['linked_financial_advisors'] = $linked_financial_advisors;

        return $this;
    }

    /**
     * Gets linked_appraisers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedAppraisers()
    {
        return $this->container['linked_appraisers'];
    }

    /**
     * Sets linked_appraisers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_appraisers linked_appraisers
     *
     * @return self
     */
    public function setLinkedAppraisers($linked_appraisers)
    {
        if (is_null($linked_appraisers)) {
            throw new \InvalidArgumentException('non-nullable linked_appraisers cannot be null');
        }
        $this->container['linked_appraisers'] = $linked_appraisers;

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
     * Gets linked_offering_agencies
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedOfferingAgencies()
    {
        return $this->container['linked_offering_agencies'];
    }

    /**
     * Sets linked_offering_agencies
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_offering_agencies linked_offering_agencies
     *
     * @return self
     */
    public function setLinkedOfferingAgencies($linked_offering_agencies)
    {
        if (is_null($linked_offering_agencies)) {
            throw new \InvalidArgumentException('non-nullable linked_offering_agencies cannot be null');
        }
        $this->container['linked_offering_agencies'] = $linked_offering_agencies;

        return $this;
    }

    /**
     * Gets linked_purchasing_brokers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedPurchasingBrokers()
    {
        return $this->container['linked_purchasing_brokers'];
    }

    /**
     * Sets linked_purchasing_brokers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_purchasing_brokers linked_purchasing_brokers
     *
     * @return self
     */
    public function setLinkedPurchasingBrokers($linked_purchasing_brokers)
    {
        if (is_null($linked_purchasing_brokers)) {
            throw new \InvalidArgumentException('non-nullable linked_purchasing_brokers cannot be null');
        }
        $this->container['linked_purchasing_brokers'] = $linked_purchasing_brokers;

        return $this;
    }

    /**
     * Gets linked_inspectors
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedInspectors()
    {
        return $this->container['linked_inspectors'];
    }

    /**
     * Sets linked_inspectors
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_inspectors linked_inspectors
     *
     * @return self
     */
    public function setLinkedInspectors($linked_inspectors)
    {
        if (is_null($linked_inspectors)) {
            throw new \InvalidArgumentException('non-nullable linked_inspectors cannot be null');
        }
        $this->container['linked_inspectors'] = $linked_inspectors;

        return $this;
    }

    /**
     * Gets linked_stylists
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedStylists()
    {
        return $this->container['linked_stylists'];
    }

    /**
     * Sets linked_stylists
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_stylists linked_stylists
     *
     * @return self
     */
    public function setLinkedStylists($linked_stylists)
    {
        if (is_null($linked_stylists)) {
            throw new \InvalidArgumentException('non-nullable linked_stylists cannot be null');
        }
        $this->container['linked_stylists'] = $linked_stylists;

        return $this;
    }

    /**
     * Gets linked_photographers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedPhotographers()
    {
        return $this->container['linked_photographers'];
    }

    /**
     * Sets linked_photographers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_photographers linked_photographers
     *
     * @return self
     */
    public function setLinkedPhotographers($linked_photographers)
    {
        if (is_null($linked_photographers)) {
            throw new \InvalidArgumentException('non-nullable linked_photographers cannot be null');
        }
        $this->container['linked_photographers'] = $linked_photographers;

        return $this;
    }

    /**
     * Gets linked_potentials
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedPotentials()
    {
        return $this->container['linked_potentials'];
    }

    /**
     * Sets linked_potentials
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_potentials linked_potentials
     *
     * @return self
     */
    public function setLinkedPotentials($linked_potentials)
    {
        if (is_null($linked_potentials)) {
            throw new \InvalidArgumentException('non-nullable linked_potentials cannot be null');
        }
        $this->container['linked_potentials'] = $linked_potentials;

        return $this;
    }

    /**
     * Gets linked_occupants
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedOccupants()
    {
        return $this->container['linked_occupants'];
    }

    /**
     * Sets linked_occupants
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_occupants linked_occupants
     *
     * @return self
     */
    public function setLinkedOccupants($linked_occupants)
    {
        if (is_null($linked_occupants)) {
            throw new \InvalidArgumentException('non-nullable linked_occupants cannot be null');
        }
        $this->container['linked_occupants'] = $linked_occupants;

        return $this;
    }

    /**
     * Gets linked_people_who_opted
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedPeopleWhoOpted()
    {
        return $this->container['linked_people_who_opted'];
    }

    /**
     * Sets linked_people_who_opted
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_people_who_opted linked_people_who_opted
     *
     * @return self
     */
    public function setLinkedPeopleWhoOpted($linked_people_who_opted)
    {
        if (is_null($linked_people_who_opted)) {
            throw new \InvalidArgumentException('non-nullable linked_people_who_opted cannot be null');
        }
        $this->container['linked_people_who_opted'] = $linked_people_who_opted;

        return $this;
    }

    /**
     * Gets linked_project_developers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedProjectDevelopers()
    {
        return $this->container['linked_project_developers'];
    }

    /**
     * Sets linked_project_developers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_project_developers linked_project_developers
     *
     * @return self
     */
    public function setLinkedProjectDevelopers($linked_project_developers)
    {
        if (is_null($linked_project_developers)) {
            throw new \InvalidArgumentException('non-nullable linked_project_developers cannot be null');
        }
        $this->container['linked_project_developers'] = $linked_project_developers;

        return $this;
    }

    /**
     * Gets linked_tenant_representation_brokers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedTenantRepresentationBrokers()
    {
        return $this->container['linked_tenant_representation_brokers'];
    }

    /**
     * Sets linked_tenant_representation_brokers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_tenant_representation_brokers linked_tenant_representation_brokers
     *
     * @return self
     */
    public function setLinkedTenantRepresentationBrokers($linked_tenant_representation_brokers)
    {
        if (is_null($linked_tenant_representation_brokers)) {
            throw new \InvalidArgumentException('non-nullable linked_tenant_representation_brokers cannot be null');
        }
        $this->container['linked_tenant_representation_brokers'] = $linked_tenant_representation_brokers;

        return $this;
    }

    /**
     * Gets linked_rental_agents
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedRentalAgents()
    {
        return $this->container['linked_rental_agents'];
    }

    /**
     * Sets linked_rental_agents
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_rental_agents linked_rental_agents
     *
     * @return self
     */
    public function setLinkedRentalAgents($linked_rental_agents)
    {
        if (is_null($linked_rental_agents)) {
            throw new \InvalidArgumentException('non-nullable linked_rental_agents cannot be null');
        }
        $this->container['linked_rental_agents'] = $linked_rental_agents;

        return $this;
    }

    /**
     * Gets linked_sales_brokers
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedSalesBrokers()
    {
        return $this->container['linked_sales_brokers'];
    }

    /**
     * Sets linked_sales_brokers
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_sales_brokers linked_sales_brokers
     *
     * @return self
     */
    public function setLinkedSalesBrokers($linked_sales_brokers)
    {
        if (is_null($linked_sales_brokers)) {
            throw new \InvalidArgumentException('non-nullable linked_sales_brokers cannot be null');
        }
        $this->container['linked_sales_brokers'] = $linked_sales_brokers;

        return $this;
    }

    /**
     * Gets linked_contact_persons
     *
     * @return \Brixion\Kolibri\Model\LinkedRelation[]|null
     */
    public function getLinkedContactPersons()
    {
        return $this->container['linked_contact_persons'];
    }

    /**
     * Sets linked_contact_persons
     *
     * @param \Brixion\Kolibri\Model\LinkedRelation[]|null $linked_contact_persons linked_contact_persons
     *
     * @return self
     */
    public function setLinkedContactPersons($linked_contact_persons)
    {
        if (is_null($linked_contact_persons)) {
            throw new \InvalidArgumentException('non-nullable linked_contact_persons cannot be null');
        }
        $this->container['linked_contact_persons'] = $linked_contact_persons;

        return $this;
    }

    /**
     * Gets list_of_business
     *
     * @return \Brixion\Kolibri\Model\BusinessToTakeOver[]|null
     */
    public function getListOfBusiness()
    {
        return $this->container['list_of_business'];
    }

    /**
     * Sets list_of_business
     *
     * @param \Brixion\Kolibri\Model\BusinessToTakeOver[]|null $list_of_business list_of_business
     *
     * @return self
     */
    public function setListOfBusiness($list_of_business)
    {
        if (is_null($list_of_business)) {
            throw new \InvalidArgumentException('non-nullable list_of_business cannot be null');
        }
        $this->container['list_of_business'] = $list_of_business;

        return $this;
    }

    /**
     * Gets lot_description_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getLotDescriptionText()
    {
        return $this->container['lot_description_text'];
    }

    /**
     * Sets lot_description_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $lot_description_text lot_description_text
     *
     * @return self
     */
    public function setLotDescriptionText($lot_description_text)
    {
        if (is_null($lot_description_text)) {
            throw new \InvalidArgumentException('non-nullable lot_description_text cannot be null');
        }
        $this->container['lot_description_text'] = $lot_description_text;

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
     * Gets maps
     *
     * @return \Brixion\Kolibri\Model\MapBlob[]|null
     */
    public function getMaps()
    {
        return $this->container['maps'];
    }

    /**
     * Sets maps
     *
     * @param \Brixion\Kolibri\Model\MapBlob[]|null $maps maps
     *
     * @return self
     */
    public function setMaps($maps)
    {
        if (is_null($maps)) {
            throw new \InvalidArgumentException('non-nullable maps cannot be null');
        }
        $this->container['maps'] = $maps;

        return $this;
    }

    /**
     * Gets office_id
     *
     * @return string|null
     */
    public function getOfficeId()
    {
        return $this->container['office_id'];
    }

    /**
     * Sets office_id
     *
     * @param string|null $office_id office_id
     *
     * @return self
     */
    public function setOfficeId($office_id)
    {
        if (is_null($office_id)) {
            throw new \InvalidArgumentException('non-nullable office_id cannot be null');
        }
        $this->container['office_id'] = $office_id;

        return $this;
    }

    /**
     * Gets open_house
     *
     * @return \Brixion\Kolibri\Model\OpenHouse|null
     */
    public function getOpenHouse()
    {
        return $this->container['open_house'];
    }

    /**
     * Sets open_house
     *
     * @param \Brixion\Kolibri\Model\OpenHouse|null $open_house open_house
     *
     * @return self
     */
    public function setOpenHouse($open_house)
    {
        if (is_null($open_house)) {
            throw new \InvalidArgumentException('non-nullable open_house cannot be null');
        }
        $this->container['open_house'] = $open_house;

        return $this;
    }

    /**
     * Gets other_contract_source
     *
     * @return string|null
     */
    public function getOtherContractSource()
    {
        return $this->container['other_contract_source'];
    }

    /**
     * Sets other_contract_source
     *
     * @param string|null $other_contract_source other_contract_source
     *
     * @return self
     */
    public function setOtherContractSource($other_contract_source)
    {
        if (is_null($other_contract_source)) {
            throw new \InvalidArgumentException('non-nullable other_contract_source cannot be null');
        }
        $this->container['other_contract_source'] = $other_contract_source;

        return $this;
    }

    /**
     * Gets other_floors_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getOtherFloorsText()
    {
        return $this->container['other_floors_text'];
    }

    /**
     * Sets other_floors_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $other_floors_text other_floors_text
     *
     * @return self
     */
    public function setOtherFloorsText($other_floors_text)
    {
        if (is_null($other_floors_text)) {
            throw new \InvalidArgumentException('non-nullable other_floors_text cannot be null');
        }
        $this->container['other_floors_text'] = $other_floors_text;

        return $this;
    }

    /**
     * Gets parking_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getParkingText()
    {
        return $this->container['parking_text'];
    }

    /**
     * Sets parking_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $parking_text parking_text
     *
     * @return self
     */
    public function setParkingText($parking_text)
    {
        if (is_null($parking_text)) {
            throw new \InvalidArgumentException('non-nullable parking_text cannot be null');
        }
        $this->container['parking_text'] = $parking_text;

        return $this;
    }

    /**
     * Gets parties_description_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getPartiesDescriptionText()
    {
        return $this->container['parties_description_text'];
    }

    /**
     * Sets parties_description_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $parties_description_text parties_description_text
     *
     * @return self
     */
    public function setPartiesDescriptionText($parties_description_text)
    {
        if (is_null($parties_description_text)) {
            throw new \InvalidArgumentException('non-nullable parties_description_text cannot be null');
        }
        $this->container['parties_description_text'] = $parties_description_text;

        return $this;
    }

    /**
     * Gets peculiarities_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getPeculiaritiesText()
    {
        return $this->container['peculiarities_text'];
    }

    /**
     * Sets peculiarities_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $peculiarities_text peculiarities_text
     *
     * @return self
     */
    public function setPeculiaritiesText($peculiarities_text)
    {
        if (is_null($peculiarities_text)) {
            throw new \InvalidArgumentException('non-nullable peculiarities_text cannot be null');
        }
        $this->container['peculiarities_text'] = $peculiarities_text;

        return $this;
    }

    /**
     * Gets photos
     *
     * @return \Brixion\Kolibri\Model\PhotoBlob[]|null
     */
    public function getPhotos()
    {
        return $this->container['photos'];
    }

    /**
     * Sets photos
     *
     * @param \Brixion\Kolibri\Model\PhotoBlob[]|null $photos photos
     *
     * @return self
     */
    public function setPhotos($photos)
    {
        if (is_null($photos)) {
            throw new \InvalidArgumentException('non-nullable photos cannot be null');
        }
        $this->container['photos'] = $photos;

        return $this;
    }

    /**
     * Gets price_description_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getPriceDescriptionText()
    {
        return $this->container['price_description_text'];
    }

    /**
     * Sets price_description_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $price_description_text price_description_text
     *
     * @return self
     */
    public function setPriceDescriptionText($price_description_text)
    {
        if (is_null($price_description_text)) {
            throw new \InvalidArgumentException('non-nullable price_description_text cannot be null');
        }
        $this->container['price_description_text'] = $price_description_text;

        return $this;
    }

    /**
     * Gets products_to_pass_on
     *
     * @return \Brixion\Kolibri\Model\ProductToPassOn[]|null
     */
    public function getProductsToPassOn()
    {
        return $this->container['products_to_pass_on'];
    }

    /**
     * Sets products_to_pass_on
     *
     * @param \Brixion\Kolibri\Model\ProductToPassOn[]|null $products_to_pass_on products_to_pass_on
     *
     * @return self
     */
    public function setProductsToPassOn($products_to_pass_on)
    {
        if (is_null($products_to_pass_on)) {
            throw new \InvalidArgumentException('non-nullable products_to_pass_on cannot be null');
        }
        $this->container['products_to_pass_on'] = $products_to_pass_on;

        return $this;
    }

    /**
     * Gets registration_conditions
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getRegistrationConditions()
    {
        return $this->container['registration_conditions'];
    }

    /**
     * Sets registration_conditions
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $registration_conditions registration_conditions
     *
     * @return self
     */
    public function setRegistrationConditions($registration_conditions)
    {
        if (is_null($registration_conditions)) {
            throw new \InvalidArgumentException('non-nullable registration_conditions cannot be null');
        }
        $this->container['registration_conditions'] = $registration_conditions;

        return $this;
    }

    /**
     * Gets rent_offer
     *
     * @return \Brixion\Kolibri\Model\RentOffer|null
     */
    public function getRentOffer()
    {
        return $this->container['rent_offer'];
    }

    /**
     * Sets rent_offer
     *
     * @param \Brixion\Kolibri\Model\RentOffer|null $rent_offer rent_offer
     *
     * @return self
     */
    public function setRentOffer($rent_offer)
    {
        if (is_null($rent_offer)) {
            throw new \InvalidArgumentException('non-nullable rent_offer cannot be null');
        }
        $this->container['rent_offer'] = $rent_offer;

        return $this;
    }

    /**
     * Gets sale_offer
     *
     * @return \Brixion\Kolibri\Model\SaleOffer|null
     */
    public function getSaleOffer()
    {
        return $this->container['sale_offer'];
    }

    /**
     * Sets sale_offer
     *
     * @param \Brixion\Kolibri\Model\SaleOffer|null $sale_offer sale_offer
     *
     * @return self
     */
    public function setSaleOffer($sale_offer)
    {
        if (is_null($sale_offer)) {
            throw new \InvalidArgumentException('non-nullable sale_offer cannot be null');
        }
        $this->container['sale_offer'] = $sale_offer;

        return $this;
    }

    /**
     * Gets second_floor_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getSecondFloorText()
    {
        return $this->container['second_floor_text'];
    }

    /**
     * Sets second_floor_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $second_floor_text second_floor_text
     *
     * @return self
     */
    public function setSecondFloorText($second_floor_text)
    {
        if (is_null($second_floor_text)) {
            throw new \InvalidArgumentException('non-nullable second_floor_text cannot be null');
        }
        $this->container['second_floor_text'] = $second_floor_text;

        return $this;
    }

    /**
     * Gets special_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getSpecialText()
    {
        return $this->container['special_text'];
    }

    /**
     * Sets special_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $special_text special_text
     *
     * @return self
     */
    public function setSpecialText($special_text)
    {
        if (is_null($special_text)) {
            throw new \InvalidArgumentException('non-nullable special_text cannot be null');
        }
        $this->container['special_text'] = $special_text;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string|null $tags tags
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets third_party_media
     *
     * @return \Brixion\Kolibri\Model\ThirdPartyMedia[]|null
     */
    public function getThirdPartyMedia()
    {
        return $this->container['third_party_media'];
    }

    /**
     * Sets third_party_media
     *
     * @param \Brixion\Kolibri\Model\ThirdPartyMedia[]|null $third_party_media third_party_media
     *
     * @return self
     */
    public function setThirdPartyMedia($third_party_media)
    {
        if (is_null($third_party_media)) {
            throw new \InvalidArgumentException('non-nullable third_party_media cannot be null');
        }
        $this->container['third_party_media'] = $third_party_media;

        return $this;
    }

    /**
     * Gets title_text
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getTitleText()
    {
        return $this->container['title_text'];
    }

    /**
     * Sets title_text
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $title_text title_text
     *
     * @return self
     */
    public function setTitleText($title_text)
    {
        if (is_null($title_text)) {
            throw new \InvalidArgumentException('non-nullable title_text cannot be null');
        }
        $this->container['title_text'] = $title_text;

        return $this;
    }

    /**
     * Gets videos
     *
     * @return \Brixion\Kolibri\Model\VideoBlob[]|null
     */
    public function getVideos()
    {
        return $this->container['videos'];
    }

    /**
     * Sets videos
     *
     * @param \Brixion\Kolibri\Model\VideoBlob[]|null $videos videos
     *
     * @return self
     */
    public function setVideos($videos)
    {
        if (is_null($videos)) {
            throw new \InvalidArgumentException('non-nullable videos cannot be null');
        }
        $this->container['videos'] = $videos;

        return $this;
    }

    /**
     * Gets waiting_time
     *
     * @return \Brixion\Kolibri\Model\WaitingTime|null
     */
    public function getWaitingTime()
    {
        return $this->container['waiting_time'];
    }

    /**
     * Sets waiting_time
     *
     * @param \Brixion\Kolibri\Model\WaitingTime|null $waiting_time waiting_time
     *
     * @return self
     */
    public function setWaitingTime($waiting_time)
    {
        if (is_null($waiting_time)) {
            throw new \InvalidArgumentException('non-nullable waiting_time cannot be null');
        }
        $this->container['waiting_time'] = $waiting_time;

        return $this;
    }

    /**
     * Gets web_address
     *
     * @return string|null
     */
    public function getWebAddress()
    {
        return $this->container['web_address'];
    }

    /**
     * Sets web_address
     *
     * @param string|null $web_address web_address
     *
     * @return self
     */
    public function setWebAddress($web_address)
    {
        if (is_null($web_address)) {
            throw new \InvalidArgumentException('non-nullable web_address cannot be null');
        }
        $this->container['web_address'] = $web_address;

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
            throw new \InvalidArgumentException('invalid length for $id when calling ProjectAssignment., must be bigger than or equal to 1.');
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
