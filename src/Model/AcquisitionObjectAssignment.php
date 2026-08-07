<?php

declare(strict_types=1);

/**
 * AcquisitionObjectAssignment - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * AcquisitionObjectAssignment.
 * @implements \ArrayAccess<string, mixed>
 */
class AcquisitionObjectAssignment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'AcquisitionObjectAssignment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'summary' => 'string',
        'address' => '\Brixion\Kolibri\Model\BagAddress',
        'status' => '\Brixion\Kolibri\Model\AcquisitionStatus',
        'linked_acquisition_assignment' => '\Brixion\Kolibri\Model\LinkedAssignment',
        'agricultural_subtype_other' => '\Brixion\Kolibri\Model\AgriculturalSubtypeOther',
        'air_treatments' => '\Brixion\Kolibri\Model\AirTreatment[]',
        'apartment_characteristic' => '\Brixion\Kolibri\Model\ApartmentCharacteristic',
        'apartment_sort' => '\Brixion\Kolibri\Model\ApartmentSort',
        'approval_marks' => '\Brixion\Kolibri\Model\Certification[]',
        'beverages_count_of_seats' => 'int',
        'beverages_hospitality_industry_area' => '\Brixion\Kolibri\Model\Size',
        'beverages_non_hospitality_industry_area' => '\Brixion\Kolibri\Model\Size',
        'boiler_fuel' => '\Brixion\Kolibri\Model\EnergySource',
        'boiler_property' => '\Brixion\Kolibri\Model\Ownership',
        'boiler_type' => 'string',
        'boiler_year_of_construction' => 'int',
        'building_capacity' => '\Brixion\Kolibri\Model\Size',
        'building_capacity_area_percentage' => 'float',
        'building_layer' => 'int',
        'building_layer_amount' => 'int',
        'business_expenses' => '\Brixion\Kolibri\Model\BusinessExpenses',
        'company_listings' => '\Brixion\Kolibri\Model\CompanyListing[]',
        'business_rights' => '\Brixion\Kolibri\Model\BusinessRights',
        'b_vo' => '\Brixion\Kolibri\Model\Size',
        'capacity' => 'int',
        'comfort_quality' => '\Brixion\Kolibri\Model\ComfortQuality',
        'company_name' => 'string',
        'complete_space' => '\Brixion\Kolibri\Model\Size',
        'construction_options' => '\Brixion\Kolibri\Model\ConstructionOption[]',
        'building_related_outdoor_space' => '\Brixion\Kolibri\Model\Size',
        'contents' => '\Brixion\Kolibri\Model\Size',
        'count_of_hotelrooms' => 'int',
        'current_destinationd' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'current_usages' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'description' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'display_name' => 'string',
        'drainage' => '\Brixion\Kolibri\Model\Drainage',
        'drainage_horse_rack' => 'bool',
        'energy_label' => '\Brixion\Kolibri\Model\EnergyLabel',
        'exclusive_status' => '\Brixion\Kolibri\Model\ExclusiveStatus',
        'external_storage' => '\Brixion\Kolibri\Model\Size',
        'facilities' => '\Brixion\Kolibri\Model\OutdoorAreaFacility[]',
        'fastfood_count_of_seats' => 'int',
        'fastfood_hospitality_industry_area' => '\Brixion\Kolibri\Model\Size',
        'features' => '\Brixion\Kolibri\Model\FeatureCategory[]',
        'floor_level' => 'int',
        'floor_load' => 'float',
        'floors' => '\Brixion\Kolibri\Model\Floor[]',
        'free_height' => 'float',
        'free_overcurrent' => 'float',
        'front_width' => 'float',
        'garages' => '\Brixion\Kolibri\Model\Garage[]',
        'gardens' => '\Brixion\Kolibri\Model\Garden[]',
        'ground_property' => '\Brixion\Kolibri\Model\GroundProperty',
        'ground_usage' => '\Brixion\Kolibri\Model\GroundUsage',
        'alv_main_plot_destination' => '\Brixion\Kolibri\Model\AlvBuildingPlotDestination',
        'has_cable_tv' => 'bool',
        'has_combi_boiler' => 'bool',
        'has_drainage' => 'bool',
        'has_electricity_connection' => 'bool',
        'has_electric_power' => 'bool',
        'has_gas_connection' => 'bool',
        'has_hygiene_barrier' => 'bool',
        'has_internet_connection' => 'bool',
        'has_office_space' => 'bool',
        'has_open_porch' => 'bool',
        'has_own_entrance' => 'bool',
        'has_owners_association_buildings_insurance' => 'bool',
        'has_owners_association_maintenance_expectations' => 'bool',
        'has_owners_association_multiple_years_maintenance_plan' => 'bool',
        'has_owners_association_periodic_contribution' => 'bool',
        'has_owners_association_reserve_fund' => 'bool',
        'has_owners_association_yearly_meeting' => 'bool',
        'has_road_connection' => 'bool',
        'has_septic_tank' => 'bool',
        'has_sewage_connection' => 'bool',
        'has_tank' => 'bool',
        'has_terrain' => 'bool',
        'has_ventilation' => 'bool',
        'has_water_connection' => 'bool',
        'has_house' => 'bool',
        'heating' => '\Brixion\Kolibri\Model\HeatingMethod[]',
        'home_plot' => 'bool',
        'horse_company_subtype' => '\Brixion\Kolibri\Model\HorseCompanySubtype',
        'horse_trough_location' => '\Brixion\Kolibri\Model\HorseTroughLocation',
        'horticultural_company_type' => '\Brixion\Kolibri\Model\HorticulturalCompanyType',
        'hospitality_permitted' => 'bool',
        'beverage_hospitality_types' => '\Brixion\Kolibri\Model\BeverageHospitalitySectorType[]',
        'fastfood_hospitality_sector_types' => '\Brixion\Kolibri\Model\FastfoodHospitalitySectorType[]',
        'restaurant_hospitality_sector_types' => '\Brixion\Kolibri\Model\RestaurantHospitalitySectorType[]',
        'hotel_hospitality_sector_types' => '\Brixion\Kolibri\Model\HotelHospitalitySectorType[]',
        'hotel_hospitality_industry_area' => '\Brixion\Kolibri\Model\Size',
        'hotel_non_hospitality_industry_area' => '\Brixion\Kolibri\Model\Size',
        'house_characteristic' => '\Brixion\Kolibri\Model\HouseCharacteristic',
        'house_sort' => '\Brixion\Kolibri\Model\HouseSort',
        'house_type' => '\Brixion\Kolibri\Model\HouseType',
        'in_dense_hospitality_area' => 'bool',
        'indoor_parking_capacity' => 'int',
        'industrial_building_facilities' => '\Brixion\Kolibri\Model\IndustrialBuildingFacility[]',
        'in_park' => 'bool',
        'insulation_types' => '\Brixion\Kolibri\Model\InsulationType[]',
        'insulation_types_barn_storage' => '\Brixion\Kolibri\Model\InsulationType[]',
        'in_units_from' => '\Brixion\Kolibri\Model\Size',
        'is_barn_storage_available' => 'bool',
        'is_biological_company' => 'bool',
        'is_building_ready' => 'bool',
        'is_home_plot' => 'bool',
        'is_house_in_need_of_refurbishment' => 'bool',
        'is_new_estate' => 'bool',
        'is_office_space_available' => 'bool',
        'is_owners_association_checklist_available' => 'bool',
        'is_owners_association_registered_kv_k' => 'bool',
        'is_permanently_inhabited' => 'bool',
        'is_recreational' => 'bool',
        'is_shared' => 'bool',
        'is_skal_certified' => 'bool',
        'is_target_home' => 'bool',
        'is_turnkey' => 'bool',
        'land_property_sub_type' => '\Brixion\Kolibri\Model\LandPropertySubType',
        'length' => 'float',
        'listing_type' => '\Brixion\Kolibri\Model\ListingType',
        'living_room_surface' => '\Brixion\Kolibri\Model\Size',
        'location_places' => '\Brixion\Kolibri\Model\LocationPlace[]',
        'logistic_function' => 'bool',
        'loose_soil_price' => 'float',
        'lot_name' => 'string',
        'maintenance_inside' => '\Brixion\Kolibri\Model\Maintenance',
        'maintenance_outside' => '\Brixion\Kolibri\Model\Maintenance',
        'number_of_animal_places' => 'int',
        'number_of_animals' => 'int',
        'number_of_bath_rooms' => 'int',
        'number_of_bed_rooms' => 'int',
        'number_of_floors' => 'int',
        'number_of_garages' => 'int',
        'number_of_gardens' => 'int',
        'number_of_kitchens' => 'int',
        'number_of_meat_pigs' => 'int',
        'number_of_mooring_places_milking_cattle' => 'int',
        'number_of_mooring_places_young_cattle' => 'int',
        'number_of_rooms' => 'int',
        'number_of_showers' => 'int',
        'number_of_sowing_sights' => 'int',
        'number_of_toilets' => 'int',
        'number_of_weaned_piglets' => 'int',
        'number_of_breeding_pigs' => 'int',
        'number_of_meat_pig_stables' => 'int',
        'number_of_breeding_pig_stables' => 'int',
        'number_of_piglet_stables' => 'int',
        'office_facilities' => '\Brixion\Kolibri\Model\Facility[]',
        'office_space_air_treatments' => '\Brixion\Kolibri\Model\AirTreatment[]',
        'office_space_building_layer_number' => 'int',
        'office_space_facilities' => '\Brixion\Kolibri\Model\Facility[]',
        'office_space_surface' => '\Brixion\Kolibri\Model\Size',
        'other_inside_spaces' => '\Brixion\Kolibri\Model\Size',
        'parcel_surface' => '\Brixion\Kolibri\Model\Size',
        'parking_facilities' => '\Brixion\Kolibri\Model\TypeOfParkingFacility[]',
        'parking_type' => '\Brixion\Kolibri\Model\ParkingType',
        'paved_percentage' => 'float',
        'pavement_type' => '\Brixion\Kolibri\Model\PavementType',
        'peculiarities' => '\Brixion\Kolibri\Model\Peculiarity[]',
        'pig_company_type' => '\Brixion\Kolibri\Model\PigCompanyType',
        'points_of_interest' => '\Brixion\Kolibri\Model\PointOfInterest[]',
        'pollution' => '\Brixion\Kolibri\Model\PollutionType[]',
        'poultry_farming_subtype' => '\Brixion\Kolibri\Model\PoultryFarmingSubtype',
        'public_oriented_services' => 'bool',
        'public_reference' => 'string',
        'real_estate_group' => '\Brixion\Kolibri\Model\RealEstateGroup',
        'region_keys_dsv' => 'string',
        'renovation_year' => '\Brixion\Kolibri\Model\YearOfConstruction',
        'residential_building' => '\Brixion\Kolibri\Model\ResidentialBuilding',
        'residential_subtype_other' => '\Brixion\Kolibri\Model\ResidentialSubtypeOther',
        'restaurant_count_of_seats' => 'int',
        'restaurant_hospitality_industry_area' => '\Brixion\Kolibri\Model\Size',
        'restaurant_non_hospitality_industry_area' => '\Brixion\Kolibri\Model\Size',
        'retail' => 'bool',
        'revenue_per_year' => 'float',
        'roof' => '\Brixion\Kolibri\Model\Roof',
        'secondary_listing_types' => '\Brixion\Kolibri\Model\ListingType[]',
        'sector_limitation' => 'bool',
        'showroom' => 'bool',
        'size' => '\Brixion\Kolibri\Model\Size',
        'soil_type' => '\Brixion\Kolibri\Model\SoilType',
        'status_rented' => '\Brixion\Kolibri\Model\StatusRented',
        'step_mill' => 'bool',
        'number_of_horse_boxes' => 'int',
        'storage_has_attic' => 'bool',
        'storage_has_electra' => 'bool',
        'storage_has_heating' => 'bool',
        'storage_has_water' => 'bool',
        'storage_insulation_types' => '\Brixion\Kolibri\Model\InsulationType[]',
        'storage_room_type' => '\Brixion\Kolibri\Model\StorageRoomType',
        'sub_type' => '\Brixion\Kolibri\Model\SubTypeAlvPlot',
        'surface_glass_upholstery' => '\Brixion\Kolibri\Model\Size',
        'terrace' => 'bool',
        'terrain_building_volume' => '\Brixion\Kolibri\Model\Size',
        'terrain_building_volume_area_percentage' => 'float',
        'terrain_surface' => '\Brixion\Kolibri\Model\Size',
        'total_parking_capacity' => 'int',
        'type_code_house' => '\Brixion\Kolibri\Model\TypeCodeHouse',
        'type_of_floor_floors' => '\Brixion\Kolibri\Model\TypeOfFloor',
        'type_of_floor_ground_floor' => '\Brixion\Kolibri\Model\TypeOfFloor',
        'types_of_communal_area' => '\Brixion\Kolibri\Model\TypeOfCommunualArea[]',
        'types_of_window_frames' => '\Brixion\Kolibri\Model\TypeOfWindowFrame[]',
        'usable_area' => '\Brixion\Kolibri\Model\Size',
        'cattle_farming_subtype' => '\Brixion\Kolibri\Model\CattleFarmingSubtype',
        'v_vo' => '\Brixion\Kolibri\Model\Size',
        'warm_water_types' => '\Brixion\Kolibri\Model\HeatingWaterMethod[]',
        'welfare_state' => '\Brixion\Kolibri\Model\WelfareState',
        'width' => 'float',
        'wvo' => '\Brixion\Kolibri\Model\Size',
        'year_of_construction' => '\Brixion\Kolibri\Model\YearOfConstruction',
        'count_of_pitches' => 'int',
        'has_annual_pitches' => 'bool',
        'count_of_accommodations' => 'int',
        'capacity_in_number_of_persons' => 'int',
        'leisure_type' => '\Brixion\Kolibri\Model\LeisureType',
        'leisure_facility_types' => '\Brixion\Kolibri\Model\LeisureFacilityType[]',
        'investment_type' => '\Brixion\Kolibri\Model\InvestmentType',
        'horeca_sector_types' => '\Brixion\Kolibri\Model\HorecaSectorType[]',
        'remaining_term_of_a_contract' => 'int',
        'vacancy_area' => '\Brixion\Kolibri\Model\Size',
        'vacancy_rental_value' => 'float',
        'gross_initial_yield' => 'int',
        'gross_rental_income' => 'float',
        'count_of_tenants' => 'int',
        'count_of_separately_lettable_housing_units' => 'int',
        'portefeuille' => 'bool',
        'social_property_type' => '\Brixion\Kolibri\Model\SocialPropertyType',
        'social_property_facility_types' => '\Brixion\Kolibri\Model\SocialPropertyFacilityType[]',
        'redesignation_possible' => 'bool',
        'return_of_services' => 'bool',
        'practic_area' => 'bool',
        'practic_area_capacity' => 'int',
        'with_accommodations' => 'bool',
        'count_of_housing_units_in_accommodations' => 'int',
        'shared_accommodations' => 'bool',
        'shared_sanitary_facilities' => 'bool',
        'name_of_building' => 'string',
        'residential_facilities' => '\Brixion\Kolibri\Model\ResidentialFacility[]',
        'home_plot_surface' => 'float',
        'field_plot_surface' => 'float',
        'number_of_veal_calves' => 'int',
        'has_green_label' => 'bool',
        'poultry_housing_types' => '\Brixion\Kolibri\Model\PoultryHousingType[]',
        'bog_combination_object_type' => '\Brixion\Kolibri\Model\BogCombinationObjectType',
        'bog_combination_object_situation' => '\Brixion\Kolibri\Model\BogCombinationObjectSituation',
        'bog_combination_object_status' => '\Brixion\Kolibri\Model\BogCombinationObjectStatus',
        'bog_combination_object_area' => '\Brixion\Kolibri\Model\Size',
        'glass_structures' => '\Brixion\Kolibri\Model\BaseAlvStructure[]',
        'riding_halls' => '\Brixion\Kolibri\Model\RidingHall[]',
        'linked_folder_tree' => '\Brixion\Kolibri\Model\LinkedFolderTree',
        'linked_bids' => '\Brixion\Kolibri\Model\LinkedBid[]',
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
        'is_cleared' => 'bool',
        'is_confidential' => 'bool',
        'is_private' => 'bool',
        'is_production_rights' => 'bool',
        'is_self_interest' => 'bool',
        'is_special' => 'bool',
        'is_topper' => 'bool',
        'is_transaction_data_confidential' => 'bool',
        'linked_company_listings' => '\Brixion\Kolibri\Model\LinkedCompanyListing[]',
        'linked_applicants' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_notaries' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_property_managers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_vendors' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_tenant_representation_brokers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_rental_agents' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_sales_brokers' => '\Brixion\Kolibri\Model\LinkedRelation[]',
        'linked_contact_persons' => '\Brixion\Kolibri\Model\LinkedRelation[]',
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
        'summary' => null,
        'address' => null,
        'status' => null,
        'linked_acquisition_assignment' => null,
        'agricultural_subtype_other' => null,
        'air_treatments' => null,
        'apartment_characteristic' => null,
        'apartment_sort' => null,
        'approval_marks' => null,
        'beverages_count_of_seats' => 'int32',
        'beverages_hospitality_industry_area' => null,
        'beverages_non_hospitality_industry_area' => null,
        'boiler_fuel' => null,
        'boiler_property' => null,
        'boiler_type' => null,
        'boiler_year_of_construction' => 'int32',
        'building_capacity' => null,
        'building_capacity_area_percentage' => 'decimal',
        'building_layer' => 'int32',
        'building_layer_amount' => 'int32',
        'business_expenses' => null,
        'company_listings' => null,
        'business_rights' => null,
        'b_vo' => null,
        'capacity' => 'int32',
        'comfort_quality' => null,
        'company_name' => null,
        'complete_space' => null,
        'construction_options' => null,
        'building_related_outdoor_space' => null,
        'contents' => null,
        'count_of_hotelrooms' => 'int32',
        'current_destinationd' => null,
        'current_usages' => null,
        'description' => null,
        'display_name' => null,
        'drainage' => null,
        'drainage_horse_rack' => null,
        'energy_label' => null,
        'exclusive_status' => null,
        'external_storage' => null,
        'facilities' => null,
        'fastfood_count_of_seats' => 'int32',
        'fastfood_hospitality_industry_area' => null,
        'features' => null,
        'floor_level' => 'int32',
        'floor_load' => 'decimal',
        'floors' => null,
        'free_height' => 'decimal',
        'free_overcurrent' => 'decimal',
        'front_width' => 'decimal',
        'garages' => null,
        'gardens' => null,
        'ground_property' => null,
        'ground_usage' => null,
        'alv_main_plot_destination' => null,
        'has_cable_tv' => null,
        'has_combi_boiler' => null,
        'has_drainage' => null,
        'has_electricity_connection' => null,
        'has_electric_power' => null,
        'has_gas_connection' => null,
        'has_hygiene_barrier' => null,
        'has_internet_connection' => null,
        'has_office_space' => null,
        'has_open_porch' => null,
        'has_own_entrance' => null,
        'has_owners_association_buildings_insurance' => null,
        'has_owners_association_maintenance_expectations' => null,
        'has_owners_association_multiple_years_maintenance_plan' => null,
        'has_owners_association_periodic_contribution' => null,
        'has_owners_association_reserve_fund' => null,
        'has_owners_association_yearly_meeting' => null,
        'has_road_connection' => null,
        'has_septic_tank' => null,
        'has_sewage_connection' => null,
        'has_tank' => null,
        'has_terrain' => null,
        'has_ventilation' => null,
        'has_water_connection' => null,
        'has_house' => null,
        'heating' => null,
        'home_plot' => null,
        'horse_company_subtype' => null,
        'horse_trough_location' => null,
        'horticultural_company_type' => null,
        'hospitality_permitted' => null,
        'beverage_hospitality_types' => null,
        'fastfood_hospitality_sector_types' => null,
        'restaurant_hospitality_sector_types' => null,
        'hotel_hospitality_sector_types' => null,
        'hotel_hospitality_industry_area' => null,
        'hotel_non_hospitality_industry_area' => null,
        'house_characteristic' => null,
        'house_sort' => null,
        'house_type' => null,
        'in_dense_hospitality_area' => null,
        'indoor_parking_capacity' => 'int32',
        'industrial_building_facilities' => null,
        'in_park' => null,
        'insulation_types' => null,
        'insulation_types_barn_storage' => null,
        'in_units_from' => null,
        'is_barn_storage_available' => null,
        'is_biological_company' => null,
        'is_building_ready' => null,
        'is_home_plot' => null,
        'is_house_in_need_of_refurbishment' => null,
        'is_new_estate' => null,
        'is_office_space_available' => null,
        'is_owners_association_checklist_available' => null,
        'is_owners_association_registered_kv_k' => null,
        'is_permanently_inhabited' => null,
        'is_recreational' => null,
        'is_shared' => null,
        'is_skal_certified' => null,
        'is_target_home' => null,
        'is_turnkey' => null,
        'land_property_sub_type' => null,
        'length' => 'double',
        'listing_type' => null,
        'living_room_surface' => null,
        'location_places' => null,
        'logistic_function' => null,
        'loose_soil_price' => 'decimal',
        'lot_name' => null,
        'maintenance_inside' => null,
        'maintenance_outside' => null,
        'number_of_animal_places' => 'int32',
        'number_of_animals' => 'int32',
        'number_of_bath_rooms' => 'int32',
        'number_of_bed_rooms' => 'int32',
        'number_of_floors' => 'int32',
        'number_of_garages' => 'int32',
        'number_of_gardens' => 'int32',
        'number_of_kitchens' => 'int32',
        'number_of_meat_pigs' => 'int32',
        'number_of_mooring_places_milking_cattle' => 'int32',
        'number_of_mooring_places_young_cattle' => 'int32',
        'number_of_rooms' => 'int32',
        'number_of_showers' => 'int32',
        'number_of_sowing_sights' => 'int32',
        'number_of_toilets' => 'int32',
        'number_of_weaned_piglets' => 'int32',
        'number_of_breeding_pigs' => 'int32',
        'number_of_meat_pig_stables' => 'int32',
        'number_of_breeding_pig_stables' => 'int32',
        'number_of_piglet_stables' => 'int32',
        'office_facilities' => null,
        'office_space_air_treatments' => null,
        'office_space_building_layer_number' => 'int32',
        'office_space_facilities' => null,
        'office_space_surface' => null,
        'other_inside_spaces' => null,
        'parcel_surface' => null,
        'parking_facilities' => null,
        'parking_type' => null,
        'paved_percentage' => 'decimal',
        'pavement_type' => null,
        'peculiarities' => null,
        'pig_company_type' => null,
        'points_of_interest' => null,
        'pollution' => null,
        'poultry_farming_subtype' => null,
        'public_oriented_services' => null,
        'public_reference' => null,
        'real_estate_group' => null,
        'region_keys_dsv' => null,
        'renovation_year' => null,
        'residential_building' => null,
        'residential_subtype_other' => null,
        'restaurant_count_of_seats' => 'int32',
        'restaurant_hospitality_industry_area' => null,
        'restaurant_non_hospitality_industry_area' => null,
        'retail' => null,
        'revenue_per_year' => 'decimal',
        'roof' => null,
        'secondary_listing_types' => null,
        'sector_limitation' => null,
        'showroom' => null,
        'size' => null,
        'soil_type' => null,
        'status_rented' => null,
        'step_mill' => null,
        'number_of_horse_boxes' => 'int32',
        'storage_has_attic' => null,
        'storage_has_electra' => null,
        'storage_has_heating' => null,
        'storage_has_water' => null,
        'storage_insulation_types' => null,
        'storage_room_type' => null,
        'sub_type' => null,
        'surface_glass_upholstery' => null,
        'terrace' => null,
        'terrain_building_volume' => null,
        'terrain_building_volume_area_percentage' => 'decimal',
        'terrain_surface' => null,
        'total_parking_capacity' => 'int32',
        'type_code_house' => null,
        'type_of_floor_floors' => null,
        'type_of_floor_ground_floor' => null,
        'types_of_communal_area' => null,
        'types_of_window_frames' => null,
        'usable_area' => null,
        'cattle_farming_subtype' => null,
        'v_vo' => null,
        'warm_water_types' => null,
        'welfare_state' => null,
        'width' => 'double',
        'wvo' => null,
        'year_of_construction' => null,
        'count_of_pitches' => 'int32',
        'has_annual_pitches' => null,
        'count_of_accommodations' => 'int32',
        'capacity_in_number_of_persons' => 'int32',
        'leisure_type' => null,
        'leisure_facility_types' => null,
        'investment_type' => null,
        'horeca_sector_types' => null,
        'remaining_term_of_a_contract' => 'int32',
        'vacancy_area' => null,
        'vacancy_rental_value' => 'decimal',
        'gross_initial_yield' => 'int32',
        'gross_rental_income' => 'decimal',
        'count_of_tenants' => 'int32',
        'count_of_separately_lettable_housing_units' => 'int32',
        'portefeuille' => null,
        'social_property_type' => null,
        'social_property_facility_types' => null,
        'redesignation_possible' => null,
        'return_of_services' => null,
        'practic_area' => null,
        'practic_area_capacity' => 'int32',
        'with_accommodations' => null,
        'count_of_housing_units_in_accommodations' => 'int32',
        'shared_accommodations' => null,
        'shared_sanitary_facilities' => null,
        'name_of_building' => null,
        'residential_facilities' => null,
        'home_plot_surface' => 'decimal',
        'field_plot_surface' => 'decimal',
        'number_of_veal_calves' => 'int32',
        'has_green_label' => null,
        'poultry_housing_types' => null,
        'bog_combination_object_type' => null,
        'bog_combination_object_situation' => null,
        'bog_combination_object_status' => null,
        'bog_combination_object_area' => null,
        'glass_structures' => null,
        'riding_halls' => null,
        'linked_folder_tree' => null,
        'linked_bids' => null,
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
        'is_cleared' => null,
        'is_confidential' => null,
        'is_private' => null,
        'is_production_rights' => null,
        'is_self_interest' => null,
        'is_special' => null,
        'is_topper' => null,
        'is_transaction_data_confidential' => null,
        'linked_company_listings' => null,
        'linked_applicants' => null,
        'linked_notaries' => null,
        'linked_property_managers' => null,
        'linked_vendors' => null,
        'linked_tenant_representation_brokers' => null,
        'linked_rental_agents' => null,
        'linked_sales_brokers' => null,
        'linked_contact_persons' => null,
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
        'summary' => false,
        'address' => false,
        'status' => false,
        'linked_acquisition_assignment' => false,
        'agricultural_subtype_other' => false,
        'air_treatments' => false,
        'apartment_characteristic' => false,
        'apartment_sort' => false,
        'approval_marks' => false,
        'beverages_count_of_seats' => false,
        'beverages_hospitality_industry_area' => false,
        'beverages_non_hospitality_industry_area' => false,
        'boiler_fuel' => false,
        'boiler_property' => false,
        'boiler_type' => false,
        'boiler_year_of_construction' => false,
        'building_capacity' => false,
        'building_capacity_area_percentage' => false,
        'building_layer' => false,
        'building_layer_amount' => false,
        'business_expenses' => false,
        'company_listings' => false,
        'business_rights' => false,
        'b_vo' => false,
        'capacity' => false,
        'comfort_quality' => false,
        'company_name' => false,
        'complete_space' => false,
        'construction_options' => false,
        'building_related_outdoor_space' => false,
        'contents' => false,
        'count_of_hotelrooms' => false,
        'current_destinationd' => false,
        'current_usages' => false,
        'description' => false,
        'display_name' => false,
        'drainage' => false,
        'drainage_horse_rack' => false,
        'energy_label' => false,
        'exclusive_status' => false,
        'external_storage' => false,
        'facilities' => false,
        'fastfood_count_of_seats' => false,
        'fastfood_hospitality_industry_area' => false,
        'features' => false,
        'floor_level' => false,
        'floor_load' => false,
        'floors' => false,
        'free_height' => false,
        'free_overcurrent' => false,
        'front_width' => false,
        'garages' => false,
        'gardens' => false,
        'ground_property' => false,
        'ground_usage' => false,
        'alv_main_plot_destination' => false,
        'has_cable_tv' => false,
        'has_combi_boiler' => false,
        'has_drainage' => false,
        'has_electricity_connection' => false,
        'has_electric_power' => false,
        'has_gas_connection' => false,
        'has_hygiene_barrier' => false,
        'has_internet_connection' => false,
        'has_office_space' => false,
        'has_open_porch' => false,
        'has_own_entrance' => false,
        'has_owners_association_buildings_insurance' => false,
        'has_owners_association_maintenance_expectations' => false,
        'has_owners_association_multiple_years_maintenance_plan' => false,
        'has_owners_association_periodic_contribution' => false,
        'has_owners_association_reserve_fund' => false,
        'has_owners_association_yearly_meeting' => false,
        'has_road_connection' => false,
        'has_septic_tank' => false,
        'has_sewage_connection' => false,
        'has_tank' => false,
        'has_terrain' => false,
        'has_ventilation' => false,
        'has_water_connection' => false,
        'has_house' => false,
        'heating' => false,
        'home_plot' => false,
        'horse_company_subtype' => false,
        'horse_trough_location' => false,
        'horticultural_company_type' => false,
        'hospitality_permitted' => false,
        'beverage_hospitality_types' => false,
        'fastfood_hospitality_sector_types' => false,
        'restaurant_hospitality_sector_types' => false,
        'hotel_hospitality_sector_types' => false,
        'hotel_hospitality_industry_area' => false,
        'hotel_non_hospitality_industry_area' => false,
        'house_characteristic' => false,
        'house_sort' => false,
        'house_type' => false,
        'in_dense_hospitality_area' => false,
        'indoor_parking_capacity' => false,
        'industrial_building_facilities' => false,
        'in_park' => false,
        'insulation_types' => false,
        'insulation_types_barn_storage' => false,
        'in_units_from' => false,
        'is_barn_storage_available' => false,
        'is_biological_company' => false,
        'is_building_ready' => false,
        'is_home_plot' => false,
        'is_house_in_need_of_refurbishment' => false,
        'is_new_estate' => false,
        'is_office_space_available' => false,
        'is_owners_association_checklist_available' => false,
        'is_owners_association_registered_kv_k' => false,
        'is_permanently_inhabited' => false,
        'is_recreational' => false,
        'is_shared' => false,
        'is_skal_certified' => false,
        'is_target_home' => false,
        'is_turnkey' => false,
        'land_property_sub_type' => false,
        'length' => false,
        'listing_type' => false,
        'living_room_surface' => false,
        'location_places' => false,
        'logistic_function' => false,
        'loose_soil_price' => false,
        'lot_name' => false,
        'maintenance_inside' => false,
        'maintenance_outside' => false,
        'number_of_animal_places' => false,
        'number_of_animals' => false,
        'number_of_bath_rooms' => false,
        'number_of_bed_rooms' => false,
        'number_of_floors' => false,
        'number_of_garages' => false,
        'number_of_gardens' => false,
        'number_of_kitchens' => false,
        'number_of_meat_pigs' => false,
        'number_of_mooring_places_milking_cattle' => false,
        'number_of_mooring_places_young_cattle' => false,
        'number_of_rooms' => false,
        'number_of_showers' => false,
        'number_of_sowing_sights' => false,
        'number_of_toilets' => false,
        'number_of_weaned_piglets' => false,
        'number_of_breeding_pigs' => false,
        'number_of_meat_pig_stables' => false,
        'number_of_breeding_pig_stables' => false,
        'number_of_piglet_stables' => false,
        'office_facilities' => false,
        'office_space_air_treatments' => false,
        'office_space_building_layer_number' => false,
        'office_space_facilities' => false,
        'office_space_surface' => false,
        'other_inside_spaces' => false,
        'parcel_surface' => false,
        'parking_facilities' => false,
        'parking_type' => false,
        'paved_percentage' => false,
        'pavement_type' => false,
        'peculiarities' => false,
        'pig_company_type' => false,
        'points_of_interest' => false,
        'pollution' => false,
        'poultry_farming_subtype' => false,
        'public_oriented_services' => false,
        'public_reference' => false,
        'real_estate_group' => false,
        'region_keys_dsv' => false,
        'renovation_year' => false,
        'residential_building' => false,
        'residential_subtype_other' => false,
        'restaurant_count_of_seats' => false,
        'restaurant_hospitality_industry_area' => false,
        'restaurant_non_hospitality_industry_area' => false,
        'retail' => false,
        'revenue_per_year' => false,
        'roof' => false,
        'secondary_listing_types' => false,
        'sector_limitation' => false,
        'showroom' => false,
        'size' => false,
        'soil_type' => false,
        'status_rented' => false,
        'step_mill' => false,
        'number_of_horse_boxes' => false,
        'storage_has_attic' => false,
        'storage_has_electra' => false,
        'storage_has_heating' => false,
        'storage_has_water' => false,
        'storage_insulation_types' => false,
        'storage_room_type' => false,
        'sub_type' => false,
        'surface_glass_upholstery' => false,
        'terrace' => false,
        'terrain_building_volume' => false,
        'terrain_building_volume_area_percentage' => false,
        'terrain_surface' => false,
        'total_parking_capacity' => false,
        'type_code_house' => false,
        'type_of_floor_floors' => false,
        'type_of_floor_ground_floor' => false,
        'types_of_communal_area' => false,
        'types_of_window_frames' => false,
        'usable_area' => false,
        'cattle_farming_subtype' => false,
        'v_vo' => false,
        'warm_water_types' => false,
        'welfare_state' => false,
        'width' => false,
        'wvo' => false,
        'year_of_construction' => false,
        'count_of_pitches' => false,
        'has_annual_pitches' => false,
        'count_of_accommodations' => false,
        'capacity_in_number_of_persons' => false,
        'leisure_type' => false,
        'leisure_facility_types' => false,
        'investment_type' => false,
        'horeca_sector_types' => false,
        'remaining_term_of_a_contract' => false,
        'vacancy_area' => false,
        'vacancy_rental_value' => false,
        'gross_initial_yield' => false,
        'gross_rental_income' => false,
        'count_of_tenants' => false,
        'count_of_separately_lettable_housing_units' => false,
        'portefeuille' => false,
        'social_property_type' => false,
        'social_property_facility_types' => false,
        'redesignation_possible' => false,
        'return_of_services' => false,
        'practic_area' => false,
        'practic_area_capacity' => false,
        'with_accommodations' => false,
        'count_of_housing_units_in_accommodations' => false,
        'shared_accommodations' => false,
        'shared_sanitary_facilities' => false,
        'name_of_building' => false,
        'residential_facilities' => false,
        'home_plot_surface' => false,
        'field_plot_surface' => false,
        'number_of_veal_calves' => false,
        'has_green_label' => false,
        'poultry_housing_types' => false,
        'bog_combination_object_type' => false,
        'bog_combination_object_situation' => false,
        'bog_combination_object_status' => false,
        'bog_combination_object_area' => false,
        'glass_structures' => false,
        'riding_halls' => false,
        'linked_folder_tree' => false,
        'linked_bids' => false,
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
        'is_cleared' => false,
        'is_confidential' => false,
        'is_private' => false,
        'is_production_rights' => false,
        'is_self_interest' => false,
        'is_special' => false,
        'is_topper' => false,
        'is_transaction_data_confidential' => false,
        'linked_company_listings' => false,
        'linked_applicants' => false,
        'linked_notaries' => false,
        'linked_property_managers' => false,
        'linked_vendors' => false,
        'linked_tenant_representation_brokers' => false,
        'linked_rental_agents' => false,
        'linked_sales_brokers' => false,
        'linked_contact_persons' => false,
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
        'summary' => 'summary',
        'address' => 'address',
        'status' => 'status',
        'linked_acquisition_assignment' => 'linkedAcquisitionAssignment',
        'agricultural_subtype_other' => 'agriculturalSubtypeOther',
        'air_treatments' => 'airTreatments',
        'apartment_characteristic' => 'apartmentCharacteristic',
        'apartment_sort' => 'apartmentSort',
        'approval_marks' => 'approvalMarks',
        'beverages_count_of_seats' => 'beveragesCountOfSeats',
        'beverages_hospitality_industry_area' => 'beveragesHospitalityIndustryArea',
        'beverages_non_hospitality_industry_area' => 'beveragesNonHospitalityIndustryArea',
        'boiler_fuel' => 'boilerFuel',
        'boiler_property' => 'boilerProperty',
        'boiler_type' => 'boilerType',
        'boiler_year_of_construction' => 'boilerYearOfConstruction',
        'building_capacity' => 'buildingCapacity',
        'building_capacity_area_percentage' => 'buildingCapacityAreaPercentage',
        'building_layer' => 'buildingLayer',
        'building_layer_amount' => 'buildingLayerAmount',
        'business_expenses' => 'businessExpenses',
        'company_listings' => 'companyListings',
        'business_rights' => 'businessRights',
        'b_vo' => 'bVO',
        'capacity' => 'capacity',
        'comfort_quality' => 'comfortQuality',
        'company_name' => 'companyName',
        'complete_space' => 'completeSpace',
        'construction_options' => 'constructionOptions',
        'building_related_outdoor_space' => 'buildingRelatedOutdoorSpace',
        'contents' => 'contents',
        'count_of_hotelrooms' => 'countOfHotelrooms',
        'current_destinationd' => 'currentDestinationd',
        'current_usages' => 'currentUsages',
        'description' => 'description',
        'display_name' => 'displayName',
        'drainage' => 'drainage',
        'drainage_horse_rack' => 'drainageHorseRack',
        'energy_label' => 'energyLabel',
        'exclusive_status' => 'exclusiveStatus',
        'external_storage' => 'externalStorage',
        'facilities' => 'facilities',
        'fastfood_count_of_seats' => 'fastfoodCountOfSeats',
        'fastfood_hospitality_industry_area' => 'fastfoodHospitalityIndustryArea',
        'features' => 'features',
        'floor_level' => 'floorLevel',
        'floor_load' => 'floorLoad',
        'floors' => 'floors',
        'free_height' => 'freeHeight',
        'free_overcurrent' => 'freeOvercurrent',
        'front_width' => 'frontWidth',
        'garages' => 'garages',
        'gardens' => 'gardens',
        'ground_property' => 'groundProperty',
        'ground_usage' => 'groundUsage',
        'alv_main_plot_destination' => 'alvMainPlotDestination',
        'has_cable_tv' => 'hasCableTV',
        'has_combi_boiler' => 'hasCombiBoiler',
        'has_drainage' => 'hasDrainage',
        'has_electricity_connection' => 'hasElectricityConnection',
        'has_electric_power' => 'hasElectricPower',
        'has_gas_connection' => 'hasGasConnection',
        'has_hygiene_barrier' => 'hasHygieneBarrier',
        'has_internet_connection' => 'hasInternetConnection',
        'has_office_space' => 'hasOfficeSpace',
        'has_open_porch' => 'hasOpenPorch',
        'has_own_entrance' => 'hasOwnEntrance',
        'has_owners_association_buildings_insurance' => 'hasOwnersAssociationBuildingsInsurance',
        'has_owners_association_maintenance_expectations' => 'hasOwnersAssociationMaintenanceExpectations',
        'has_owners_association_multiple_years_maintenance_plan' => 'hasOwnersAssociationMultipleYearsMaintenancePlan',
        'has_owners_association_periodic_contribution' => 'hasOwnersAssociationPeriodicContribution',
        'has_owners_association_reserve_fund' => 'hasOwnersAssociationReserveFund',
        'has_owners_association_yearly_meeting' => 'hasOwnersAssociationYearlyMeeting',
        'has_road_connection' => 'hasRoadConnection',
        'has_septic_tank' => 'hasSepticTank',
        'has_sewage_connection' => 'hasSewageConnection',
        'has_tank' => 'hasTank',
        'has_terrain' => 'hasTerrain',
        'has_ventilation' => 'hasVentilation',
        'has_water_connection' => 'hasWaterConnection',
        'has_house' => 'hasHouse',
        'heating' => 'heating',
        'home_plot' => 'homePlot',
        'horse_company_subtype' => 'horseCompanySubtype',
        'horse_trough_location' => 'horseTroughLocation',
        'horticultural_company_type' => 'horticulturalCompanyType',
        'hospitality_permitted' => 'hospitalityPermitted',
        'beverage_hospitality_types' => 'beverageHospitalityTypes',
        'fastfood_hospitality_sector_types' => 'fastfoodHospitalitySectorTypes',
        'restaurant_hospitality_sector_types' => 'restaurantHospitalitySectorTypes',
        'hotel_hospitality_sector_types' => 'hotelHospitalitySectorTypes',
        'hotel_hospitality_industry_area' => 'hotelHospitalityIndustryArea',
        'hotel_non_hospitality_industry_area' => 'hotelNonHospitalityIndustryArea',
        'house_characteristic' => 'houseCharacteristic',
        'house_sort' => 'houseSort',
        'house_type' => 'houseType',
        'in_dense_hospitality_area' => 'inDenseHospitalityArea',
        'indoor_parking_capacity' => 'indoorParkingCapacity',
        'industrial_building_facilities' => 'industrialBuildingFacilities',
        'in_park' => 'inPark',
        'insulation_types' => 'insulationTypes',
        'insulation_types_barn_storage' => 'insulationTypesBarnStorage',
        'in_units_from' => 'inUnitsFrom',
        'is_barn_storage_available' => 'isBarnStorageAvailable',
        'is_biological_company' => 'isBiologicalCompany',
        'is_building_ready' => 'isBuildingReady',
        'is_home_plot' => 'isHomePlot',
        'is_house_in_need_of_refurbishment' => 'isHouseInNeedOfRefurbishment',
        'is_new_estate' => 'isNewEstate',
        'is_office_space_available' => 'isOfficeSpaceAvailable',
        'is_owners_association_checklist_available' => 'isOwnersAssociationChecklistAvailable',
        'is_owners_association_registered_kv_k' => 'isOwnersAssociationRegisteredKvK',
        'is_permanently_inhabited' => 'isPermanentlyInhabited',
        'is_recreational' => 'isRecreational',
        'is_shared' => 'isShared',
        'is_skal_certified' => 'isSKALCertified',
        'is_target_home' => 'isTargetHome',
        'is_turnkey' => 'isTurnkey',
        'land_property_sub_type' => 'landPropertySubType',
        'length' => 'length',
        'listing_type' => 'listingType',
        'living_room_surface' => 'livingRoomSurface',
        'location_places' => 'locationPlaces',
        'logistic_function' => 'logisticFunction',
        'loose_soil_price' => 'looseSoilPrice',
        'lot_name' => 'lotName',
        'maintenance_inside' => 'maintenanceInside',
        'maintenance_outside' => 'maintenanceOutside',
        'number_of_animal_places' => 'numberOfAnimalPlaces',
        'number_of_animals' => 'numberOfAnimals',
        'number_of_bath_rooms' => 'numberOfBathRooms',
        'number_of_bed_rooms' => 'numberOfBedRooms',
        'number_of_floors' => 'numberOfFloors',
        'number_of_garages' => 'numberOfGarages',
        'number_of_gardens' => 'numberOfGardens',
        'number_of_kitchens' => 'numberOfKitchens',
        'number_of_meat_pigs' => 'numberOfMeatPigs',
        'number_of_mooring_places_milking_cattle' => 'numberOfMooringPlacesMilkingCattle',
        'number_of_mooring_places_young_cattle' => 'numberOfMooringPlacesYoungCattle',
        'number_of_rooms' => 'numberOfRooms',
        'number_of_showers' => 'numberOfShowers',
        'number_of_sowing_sights' => 'numberOfSowingSights',
        'number_of_toilets' => 'numberOfToilets',
        'number_of_weaned_piglets' => 'numberOfWeanedPiglets',
        'number_of_breeding_pigs' => 'numberOfBreedingPigs',
        'number_of_meat_pig_stables' => 'numberOfMeatPigStables',
        'number_of_breeding_pig_stables' => 'numberOfBreedingPigStables',
        'number_of_piglet_stables' => 'numberOfPigletStables',
        'office_facilities' => 'officeFacilities',
        'office_space_air_treatments' => 'officeSpaceAirTreatments',
        'office_space_building_layer_number' => 'officeSpaceBuildingLayerNumber',
        'office_space_facilities' => 'officeSpaceFacilities',
        'office_space_surface' => 'officeSpaceSurface',
        'other_inside_spaces' => 'otherInsideSpaces',
        'parcel_surface' => 'parcelSurface',
        'parking_facilities' => 'parkingFacilities',
        'parking_type' => 'parkingType',
        'paved_percentage' => 'pavedPercentage',
        'pavement_type' => 'pavementType',
        'peculiarities' => 'peculiarities',
        'pig_company_type' => 'pigCompanyType',
        'points_of_interest' => 'pointsOfInterest',
        'pollution' => 'pollution',
        'poultry_farming_subtype' => 'poultryFarmingSubtype',
        'public_oriented_services' => 'publicOrientedServices',
        'public_reference' => 'publicReference',
        'real_estate_group' => 'realEstateGroup',
        'region_keys_dsv' => 'regionKeysDsv',
        'renovation_year' => 'renovationYear',
        'residential_building' => 'residentialBuilding',
        'residential_subtype_other' => 'residentialSubtypeOther',
        'restaurant_count_of_seats' => 'restaurantCountOfSeats',
        'restaurant_hospitality_industry_area' => 'restaurantHospitalityIndustryArea',
        'restaurant_non_hospitality_industry_area' => 'restaurantNonHospitalityIndustryArea',
        'retail' => 'retail',
        'revenue_per_year' => 'revenuePerYear',
        'roof' => 'roof',
        'secondary_listing_types' => 'secondaryListingTypes',
        'sector_limitation' => 'sectorLimitation',
        'showroom' => 'showroom',
        'size' => 'size',
        'soil_type' => 'soilType',
        'status_rented' => 'statusRented',
        'step_mill' => 'stepMill',
        'number_of_horse_boxes' => 'numberOfHorseBoxes',
        'storage_has_attic' => 'storageHasAttic',
        'storage_has_electra' => 'storageHasElectra',
        'storage_has_heating' => 'storageHasHeating',
        'storage_has_water' => 'storageHasWater',
        'storage_insulation_types' => 'storageInsulationTypes',
        'storage_room_type' => 'storageRoomType',
        'sub_type' => 'subType',
        'surface_glass_upholstery' => 'surfaceGlassUpholstery',
        'terrace' => 'terrace',
        'terrain_building_volume' => 'terrainBuildingVolume',
        'terrain_building_volume_area_percentage' => 'terrainBuildingVolumeAreaPercentage',
        'terrain_surface' => 'terrainSurface',
        'total_parking_capacity' => 'totalParkingCapacity',
        'type_code_house' => 'typeCodeHouse',
        'type_of_floor_floors' => 'typeOfFloorFloors',
        'type_of_floor_ground_floor' => 'typeOfFloorGroundFloor',
        'types_of_communal_area' => 'typesOfCommunalArea',
        'types_of_window_frames' => 'typesOfWindowFrames',
        'usable_area' => 'usableArea',
        'cattle_farming_subtype' => 'cattleFarmingSubtype',
        'v_vo' => 'vVO',
        'warm_water_types' => 'warmWaterTypes',
        'welfare_state' => 'welfareState',
        'width' => 'width',
        'wvo' => 'wvo',
        'year_of_construction' => 'yearOfConstruction',
        'count_of_pitches' => 'countOfPitches',
        'has_annual_pitches' => 'hasAnnualPitches',
        'count_of_accommodations' => 'countOfAccommodations',
        'capacity_in_number_of_persons' => 'capacityInNumberOfPersons',
        'leisure_type' => 'leisureType',
        'leisure_facility_types' => 'leisureFacilityTypes',
        'investment_type' => 'investmentType',
        'horeca_sector_types' => 'horecaSectorTypes',
        'remaining_term_of_a_contract' => 'remainingTermOfAContract',
        'vacancy_area' => 'vacancyArea',
        'vacancy_rental_value' => 'vacancyRentalValue',
        'gross_initial_yield' => 'grossInitialYield',
        'gross_rental_income' => 'grossRentalIncome',
        'count_of_tenants' => 'countOfTenants',
        'count_of_separately_lettable_housing_units' => 'countOfSeparatelyLettableHousingUnits',
        'portefeuille' => 'portefeuille',
        'social_property_type' => 'socialPropertyType',
        'social_property_facility_types' => 'socialPropertyFacilityTypes',
        'redesignation_possible' => 'redesignationPossible',
        'return_of_services' => 'returnOfServices',
        'practic_area' => 'practicArea',
        'practic_area_capacity' => 'practicAreaCapacity',
        'with_accommodations' => 'withAccommodations',
        'count_of_housing_units_in_accommodations' => 'countOfHousingUnitsInAccommodations',
        'shared_accommodations' => 'sharedAccommodations',
        'shared_sanitary_facilities' => 'sharedSanitaryFacilities',
        'name_of_building' => 'nameOfBuilding',
        'residential_facilities' => 'residentialFacilities',
        'home_plot_surface' => 'homePlotSurface',
        'field_plot_surface' => 'fieldPlotSurface',
        'number_of_veal_calves' => 'numberOfVealCalves',
        'has_green_label' => 'hasGreenLabel',
        'poultry_housing_types' => 'poultryHousingTypes',
        'bog_combination_object_type' => 'bogCombinationObjectType',
        'bog_combination_object_situation' => 'bogCombinationObjectSituation',
        'bog_combination_object_status' => 'bogCombinationObjectStatus',
        'bog_combination_object_area' => 'bogCombinationObjectArea',
        'glass_structures' => 'glassStructures',
        'riding_halls' => 'ridingHalls',
        'linked_folder_tree' => 'linkedFolderTree',
        'linked_bids' => 'linkedBids',
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
        'is_cleared' => 'isCleared',
        'is_confidential' => 'isConfidential',
        'is_private' => 'isPrivate',
        'is_production_rights' => 'isProductionRights',
        'is_self_interest' => 'isSelfInterest',
        'is_special' => 'isSpecial',
        'is_topper' => 'isTopper',
        'is_transaction_data_confidential' => 'isTransactionDataConfidential',
        'linked_company_listings' => 'linkedCompanyListings',
        'linked_applicants' => 'linkedApplicants',
        'linked_notaries' => 'linkedNotaries',
        'linked_property_managers' => 'linkedPropertyManagers',
        'linked_vendors' => 'linkedVendors',
        'linked_tenant_representation_brokers' => 'linkedTenantRepresentationBrokers',
        'linked_rental_agents' => 'linkedRentalAgents',
        'linked_sales_brokers' => 'linkedSalesBrokers',
        'linked_contact_persons' => 'linkedContactPersons',
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
        'summary' => 'setSummary',
        'address' => 'setAddress',
        'status' => 'setStatus',
        'linked_acquisition_assignment' => 'setLinkedAcquisitionAssignment',
        'agricultural_subtype_other' => 'setAgriculturalSubtypeOther',
        'air_treatments' => 'setAirTreatments',
        'apartment_characteristic' => 'setApartmentCharacteristic',
        'apartment_sort' => 'setApartmentSort',
        'approval_marks' => 'setApprovalMarks',
        'beverages_count_of_seats' => 'setBeveragesCountOfSeats',
        'beverages_hospitality_industry_area' => 'setBeveragesHospitalityIndustryArea',
        'beverages_non_hospitality_industry_area' => 'setBeveragesNonHospitalityIndustryArea',
        'boiler_fuel' => 'setBoilerFuel',
        'boiler_property' => 'setBoilerProperty',
        'boiler_type' => 'setBoilerType',
        'boiler_year_of_construction' => 'setBoilerYearOfConstruction',
        'building_capacity' => 'setBuildingCapacity',
        'building_capacity_area_percentage' => 'setBuildingCapacityAreaPercentage',
        'building_layer' => 'setBuildingLayer',
        'building_layer_amount' => 'setBuildingLayerAmount',
        'business_expenses' => 'setBusinessExpenses',
        'company_listings' => 'setCompanyListings',
        'business_rights' => 'setBusinessRights',
        'b_vo' => 'setBVo',
        'capacity' => 'setCapacity',
        'comfort_quality' => 'setComfortQuality',
        'company_name' => 'setCompanyName',
        'complete_space' => 'setCompleteSpace',
        'construction_options' => 'setConstructionOptions',
        'building_related_outdoor_space' => 'setBuildingRelatedOutdoorSpace',
        'contents' => 'setContents',
        'count_of_hotelrooms' => 'setCountOfHotelrooms',
        'current_destinationd' => 'setCurrentDestinationd',
        'current_usages' => 'setCurrentUsages',
        'description' => 'setDescription',
        'display_name' => 'setDisplayName',
        'drainage' => 'setDrainage',
        'drainage_horse_rack' => 'setDrainageHorseRack',
        'energy_label' => 'setEnergyLabel',
        'exclusive_status' => 'setExclusiveStatus',
        'external_storage' => 'setExternalStorage',
        'facilities' => 'setFacilities',
        'fastfood_count_of_seats' => 'setFastfoodCountOfSeats',
        'fastfood_hospitality_industry_area' => 'setFastfoodHospitalityIndustryArea',
        'features' => 'setFeatures',
        'floor_level' => 'setFloorLevel',
        'floor_load' => 'setFloorLoad',
        'floors' => 'setFloors',
        'free_height' => 'setFreeHeight',
        'free_overcurrent' => 'setFreeOvercurrent',
        'front_width' => 'setFrontWidth',
        'garages' => 'setGarages',
        'gardens' => 'setGardens',
        'ground_property' => 'setGroundProperty',
        'ground_usage' => 'setGroundUsage',
        'alv_main_plot_destination' => 'setAlvMainPlotDestination',
        'has_cable_tv' => 'setHasCableTv',
        'has_combi_boiler' => 'setHasCombiBoiler',
        'has_drainage' => 'setHasDrainage',
        'has_electricity_connection' => 'setHasElectricityConnection',
        'has_electric_power' => 'setHasElectricPower',
        'has_gas_connection' => 'setHasGasConnection',
        'has_hygiene_barrier' => 'setHasHygieneBarrier',
        'has_internet_connection' => 'setHasInternetConnection',
        'has_office_space' => 'setHasOfficeSpace',
        'has_open_porch' => 'setHasOpenPorch',
        'has_own_entrance' => 'setHasOwnEntrance',
        'has_owners_association_buildings_insurance' => 'setHasOwnersAssociationBuildingsInsurance',
        'has_owners_association_maintenance_expectations' => 'setHasOwnersAssociationMaintenanceExpectations',
        'has_owners_association_multiple_years_maintenance_plan' => 'setHasOwnersAssociationMultipleYearsMaintenancePlan',
        'has_owners_association_periodic_contribution' => 'setHasOwnersAssociationPeriodicContribution',
        'has_owners_association_reserve_fund' => 'setHasOwnersAssociationReserveFund',
        'has_owners_association_yearly_meeting' => 'setHasOwnersAssociationYearlyMeeting',
        'has_road_connection' => 'setHasRoadConnection',
        'has_septic_tank' => 'setHasSepticTank',
        'has_sewage_connection' => 'setHasSewageConnection',
        'has_tank' => 'setHasTank',
        'has_terrain' => 'setHasTerrain',
        'has_ventilation' => 'setHasVentilation',
        'has_water_connection' => 'setHasWaterConnection',
        'has_house' => 'setHasHouse',
        'heating' => 'setHeating',
        'home_plot' => 'setHomePlot',
        'horse_company_subtype' => 'setHorseCompanySubtype',
        'horse_trough_location' => 'setHorseTroughLocation',
        'horticultural_company_type' => 'setHorticulturalCompanyType',
        'hospitality_permitted' => 'setHospitalityPermitted',
        'beverage_hospitality_types' => 'setBeverageHospitalityTypes',
        'fastfood_hospitality_sector_types' => 'setFastfoodHospitalitySectorTypes',
        'restaurant_hospitality_sector_types' => 'setRestaurantHospitalitySectorTypes',
        'hotel_hospitality_sector_types' => 'setHotelHospitalitySectorTypes',
        'hotel_hospitality_industry_area' => 'setHotelHospitalityIndustryArea',
        'hotel_non_hospitality_industry_area' => 'setHotelNonHospitalityIndustryArea',
        'house_characteristic' => 'setHouseCharacteristic',
        'house_sort' => 'setHouseSort',
        'house_type' => 'setHouseType',
        'in_dense_hospitality_area' => 'setInDenseHospitalityArea',
        'indoor_parking_capacity' => 'setIndoorParkingCapacity',
        'industrial_building_facilities' => 'setIndustrialBuildingFacilities',
        'in_park' => 'setInPark',
        'insulation_types' => 'setInsulationTypes',
        'insulation_types_barn_storage' => 'setInsulationTypesBarnStorage',
        'in_units_from' => 'setInUnitsFrom',
        'is_barn_storage_available' => 'setIsBarnStorageAvailable',
        'is_biological_company' => 'setIsBiologicalCompany',
        'is_building_ready' => 'setIsBuildingReady',
        'is_home_plot' => 'setIsHomePlot',
        'is_house_in_need_of_refurbishment' => 'setIsHouseInNeedOfRefurbishment',
        'is_new_estate' => 'setIsNewEstate',
        'is_office_space_available' => 'setIsOfficeSpaceAvailable',
        'is_owners_association_checklist_available' => 'setIsOwnersAssociationChecklistAvailable',
        'is_owners_association_registered_kv_k' => 'setIsOwnersAssociationRegisteredKvK',
        'is_permanently_inhabited' => 'setIsPermanentlyInhabited',
        'is_recreational' => 'setIsRecreational',
        'is_shared' => 'setIsShared',
        'is_skal_certified' => 'setIsSkalCertified',
        'is_target_home' => 'setIsTargetHome',
        'is_turnkey' => 'setIsTurnkey',
        'land_property_sub_type' => 'setLandPropertySubType',
        'length' => 'setLength',
        'listing_type' => 'setListingType',
        'living_room_surface' => 'setLivingRoomSurface',
        'location_places' => 'setLocationPlaces',
        'logistic_function' => 'setLogisticFunction',
        'loose_soil_price' => 'setLooseSoilPrice',
        'lot_name' => 'setLotName',
        'maintenance_inside' => 'setMaintenanceInside',
        'maintenance_outside' => 'setMaintenanceOutside',
        'number_of_animal_places' => 'setNumberOfAnimalPlaces',
        'number_of_animals' => 'setNumberOfAnimals',
        'number_of_bath_rooms' => 'setNumberOfBathRooms',
        'number_of_bed_rooms' => 'setNumberOfBedRooms',
        'number_of_floors' => 'setNumberOfFloors',
        'number_of_garages' => 'setNumberOfGarages',
        'number_of_gardens' => 'setNumberOfGardens',
        'number_of_kitchens' => 'setNumberOfKitchens',
        'number_of_meat_pigs' => 'setNumberOfMeatPigs',
        'number_of_mooring_places_milking_cattle' => 'setNumberOfMooringPlacesMilkingCattle',
        'number_of_mooring_places_young_cattle' => 'setNumberOfMooringPlacesYoungCattle',
        'number_of_rooms' => 'setNumberOfRooms',
        'number_of_showers' => 'setNumberOfShowers',
        'number_of_sowing_sights' => 'setNumberOfSowingSights',
        'number_of_toilets' => 'setNumberOfToilets',
        'number_of_weaned_piglets' => 'setNumberOfWeanedPiglets',
        'number_of_breeding_pigs' => 'setNumberOfBreedingPigs',
        'number_of_meat_pig_stables' => 'setNumberOfMeatPigStables',
        'number_of_breeding_pig_stables' => 'setNumberOfBreedingPigStables',
        'number_of_piglet_stables' => 'setNumberOfPigletStables',
        'office_facilities' => 'setOfficeFacilities',
        'office_space_air_treatments' => 'setOfficeSpaceAirTreatments',
        'office_space_building_layer_number' => 'setOfficeSpaceBuildingLayerNumber',
        'office_space_facilities' => 'setOfficeSpaceFacilities',
        'office_space_surface' => 'setOfficeSpaceSurface',
        'other_inside_spaces' => 'setOtherInsideSpaces',
        'parcel_surface' => 'setParcelSurface',
        'parking_facilities' => 'setParkingFacilities',
        'parking_type' => 'setParkingType',
        'paved_percentage' => 'setPavedPercentage',
        'pavement_type' => 'setPavementType',
        'peculiarities' => 'setPeculiarities',
        'pig_company_type' => 'setPigCompanyType',
        'points_of_interest' => 'setPointsOfInterest',
        'pollution' => 'setPollution',
        'poultry_farming_subtype' => 'setPoultryFarmingSubtype',
        'public_oriented_services' => 'setPublicOrientedServices',
        'public_reference' => 'setPublicReference',
        'real_estate_group' => 'setRealEstateGroup',
        'region_keys_dsv' => 'setRegionKeysDsv',
        'renovation_year' => 'setRenovationYear',
        'residential_building' => 'setResidentialBuilding',
        'residential_subtype_other' => 'setResidentialSubtypeOther',
        'restaurant_count_of_seats' => 'setRestaurantCountOfSeats',
        'restaurant_hospitality_industry_area' => 'setRestaurantHospitalityIndustryArea',
        'restaurant_non_hospitality_industry_area' => 'setRestaurantNonHospitalityIndustryArea',
        'retail' => 'setRetail',
        'revenue_per_year' => 'setRevenuePerYear',
        'roof' => 'setRoof',
        'secondary_listing_types' => 'setSecondaryListingTypes',
        'sector_limitation' => 'setSectorLimitation',
        'showroom' => 'setShowroom',
        'size' => 'setSize',
        'soil_type' => 'setSoilType',
        'status_rented' => 'setStatusRented',
        'step_mill' => 'setStepMill',
        'number_of_horse_boxes' => 'setNumberOfHorseBoxes',
        'storage_has_attic' => 'setStorageHasAttic',
        'storage_has_electra' => 'setStorageHasElectra',
        'storage_has_heating' => 'setStorageHasHeating',
        'storage_has_water' => 'setStorageHasWater',
        'storage_insulation_types' => 'setStorageInsulationTypes',
        'storage_room_type' => 'setStorageRoomType',
        'sub_type' => 'setSubType',
        'surface_glass_upholstery' => 'setSurfaceGlassUpholstery',
        'terrace' => 'setTerrace',
        'terrain_building_volume' => 'setTerrainBuildingVolume',
        'terrain_building_volume_area_percentage' => 'setTerrainBuildingVolumeAreaPercentage',
        'terrain_surface' => 'setTerrainSurface',
        'total_parking_capacity' => 'setTotalParkingCapacity',
        'type_code_house' => 'setTypeCodeHouse',
        'type_of_floor_floors' => 'setTypeOfFloorFloors',
        'type_of_floor_ground_floor' => 'setTypeOfFloorGroundFloor',
        'types_of_communal_area' => 'setTypesOfCommunalArea',
        'types_of_window_frames' => 'setTypesOfWindowFrames',
        'usable_area' => 'setUsableArea',
        'cattle_farming_subtype' => 'setCattleFarmingSubtype',
        'v_vo' => 'setVVo',
        'warm_water_types' => 'setWarmWaterTypes',
        'welfare_state' => 'setWelfareState',
        'width' => 'setWidth',
        'wvo' => 'setWvo',
        'year_of_construction' => 'setYearOfConstruction',
        'count_of_pitches' => 'setCountOfPitches',
        'has_annual_pitches' => 'setHasAnnualPitches',
        'count_of_accommodations' => 'setCountOfAccommodations',
        'capacity_in_number_of_persons' => 'setCapacityInNumberOfPersons',
        'leisure_type' => 'setLeisureType',
        'leisure_facility_types' => 'setLeisureFacilityTypes',
        'investment_type' => 'setInvestmentType',
        'horeca_sector_types' => 'setHorecaSectorTypes',
        'remaining_term_of_a_contract' => 'setRemainingTermOfAContract',
        'vacancy_area' => 'setVacancyArea',
        'vacancy_rental_value' => 'setVacancyRentalValue',
        'gross_initial_yield' => 'setGrossInitialYield',
        'gross_rental_income' => 'setGrossRentalIncome',
        'count_of_tenants' => 'setCountOfTenants',
        'count_of_separately_lettable_housing_units' => 'setCountOfSeparatelyLettableHousingUnits',
        'portefeuille' => 'setPortefeuille',
        'social_property_type' => 'setSocialPropertyType',
        'social_property_facility_types' => 'setSocialPropertyFacilityTypes',
        'redesignation_possible' => 'setRedesignationPossible',
        'return_of_services' => 'setReturnOfServices',
        'practic_area' => 'setPracticArea',
        'practic_area_capacity' => 'setPracticAreaCapacity',
        'with_accommodations' => 'setWithAccommodations',
        'count_of_housing_units_in_accommodations' => 'setCountOfHousingUnitsInAccommodations',
        'shared_accommodations' => 'setSharedAccommodations',
        'shared_sanitary_facilities' => 'setSharedSanitaryFacilities',
        'name_of_building' => 'setNameOfBuilding',
        'residential_facilities' => 'setResidentialFacilities',
        'home_plot_surface' => 'setHomePlotSurface',
        'field_plot_surface' => 'setFieldPlotSurface',
        'number_of_veal_calves' => 'setNumberOfVealCalves',
        'has_green_label' => 'setHasGreenLabel',
        'poultry_housing_types' => 'setPoultryHousingTypes',
        'bog_combination_object_type' => 'setBogCombinationObjectType',
        'bog_combination_object_situation' => 'setBogCombinationObjectSituation',
        'bog_combination_object_status' => 'setBogCombinationObjectStatus',
        'bog_combination_object_area' => 'setBogCombinationObjectArea',
        'glass_structures' => 'setGlassStructures',
        'riding_halls' => 'setRidingHalls',
        'linked_folder_tree' => 'setLinkedFolderTree',
        'linked_bids' => 'setLinkedBids',
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
        'is_cleared' => 'setIsCleared',
        'is_confidential' => 'setIsConfidential',
        'is_private' => 'setIsPrivate',
        'is_production_rights' => 'setIsProductionRights',
        'is_self_interest' => 'setIsSelfInterest',
        'is_special' => 'setIsSpecial',
        'is_topper' => 'setIsTopper',
        'is_transaction_data_confidential' => 'setIsTransactionDataConfidential',
        'linked_company_listings' => 'setLinkedCompanyListings',
        'linked_applicants' => 'setLinkedApplicants',
        'linked_notaries' => 'setLinkedNotaries',
        'linked_property_managers' => 'setLinkedPropertyManagers',
        'linked_vendors' => 'setLinkedVendors',
        'linked_tenant_representation_brokers' => 'setLinkedTenantRepresentationBrokers',
        'linked_rental_agents' => 'setLinkedRentalAgents',
        'linked_sales_brokers' => 'setLinkedSalesBrokers',
        'linked_contact_persons' => 'setLinkedContactPersons',
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
        'summary' => 'getSummary',
        'address' => 'getAddress',
        'status' => 'getStatus',
        'linked_acquisition_assignment' => 'getLinkedAcquisitionAssignment',
        'agricultural_subtype_other' => 'getAgriculturalSubtypeOther',
        'air_treatments' => 'getAirTreatments',
        'apartment_characteristic' => 'getApartmentCharacteristic',
        'apartment_sort' => 'getApartmentSort',
        'approval_marks' => 'getApprovalMarks',
        'beverages_count_of_seats' => 'getBeveragesCountOfSeats',
        'beverages_hospitality_industry_area' => 'getBeveragesHospitalityIndustryArea',
        'beverages_non_hospitality_industry_area' => 'getBeveragesNonHospitalityIndustryArea',
        'boiler_fuel' => 'getBoilerFuel',
        'boiler_property' => 'getBoilerProperty',
        'boiler_type' => 'getBoilerType',
        'boiler_year_of_construction' => 'getBoilerYearOfConstruction',
        'building_capacity' => 'getBuildingCapacity',
        'building_capacity_area_percentage' => 'getBuildingCapacityAreaPercentage',
        'building_layer' => 'getBuildingLayer',
        'building_layer_amount' => 'getBuildingLayerAmount',
        'business_expenses' => 'getBusinessExpenses',
        'company_listings' => 'getCompanyListings',
        'business_rights' => 'getBusinessRights',
        'b_vo' => 'getBVo',
        'capacity' => 'getCapacity',
        'comfort_quality' => 'getComfortQuality',
        'company_name' => 'getCompanyName',
        'complete_space' => 'getCompleteSpace',
        'construction_options' => 'getConstructionOptions',
        'building_related_outdoor_space' => 'getBuildingRelatedOutdoorSpace',
        'contents' => 'getContents',
        'count_of_hotelrooms' => 'getCountOfHotelrooms',
        'current_destinationd' => 'getCurrentDestinationd',
        'current_usages' => 'getCurrentUsages',
        'description' => 'getDescription',
        'display_name' => 'getDisplayName',
        'drainage' => 'getDrainage',
        'drainage_horse_rack' => 'getDrainageHorseRack',
        'energy_label' => 'getEnergyLabel',
        'exclusive_status' => 'getExclusiveStatus',
        'external_storage' => 'getExternalStorage',
        'facilities' => 'getFacilities',
        'fastfood_count_of_seats' => 'getFastfoodCountOfSeats',
        'fastfood_hospitality_industry_area' => 'getFastfoodHospitalityIndustryArea',
        'features' => 'getFeatures',
        'floor_level' => 'getFloorLevel',
        'floor_load' => 'getFloorLoad',
        'floors' => 'getFloors',
        'free_height' => 'getFreeHeight',
        'free_overcurrent' => 'getFreeOvercurrent',
        'front_width' => 'getFrontWidth',
        'garages' => 'getGarages',
        'gardens' => 'getGardens',
        'ground_property' => 'getGroundProperty',
        'ground_usage' => 'getGroundUsage',
        'alv_main_plot_destination' => 'getAlvMainPlotDestination',
        'has_cable_tv' => 'getHasCableTv',
        'has_combi_boiler' => 'getHasCombiBoiler',
        'has_drainage' => 'getHasDrainage',
        'has_electricity_connection' => 'getHasElectricityConnection',
        'has_electric_power' => 'getHasElectricPower',
        'has_gas_connection' => 'getHasGasConnection',
        'has_hygiene_barrier' => 'getHasHygieneBarrier',
        'has_internet_connection' => 'getHasInternetConnection',
        'has_office_space' => 'getHasOfficeSpace',
        'has_open_porch' => 'getHasOpenPorch',
        'has_own_entrance' => 'getHasOwnEntrance',
        'has_owners_association_buildings_insurance' => 'getHasOwnersAssociationBuildingsInsurance',
        'has_owners_association_maintenance_expectations' => 'getHasOwnersAssociationMaintenanceExpectations',
        'has_owners_association_multiple_years_maintenance_plan' => 'getHasOwnersAssociationMultipleYearsMaintenancePlan',
        'has_owners_association_periodic_contribution' => 'getHasOwnersAssociationPeriodicContribution',
        'has_owners_association_reserve_fund' => 'getHasOwnersAssociationReserveFund',
        'has_owners_association_yearly_meeting' => 'getHasOwnersAssociationYearlyMeeting',
        'has_road_connection' => 'getHasRoadConnection',
        'has_septic_tank' => 'getHasSepticTank',
        'has_sewage_connection' => 'getHasSewageConnection',
        'has_tank' => 'getHasTank',
        'has_terrain' => 'getHasTerrain',
        'has_ventilation' => 'getHasVentilation',
        'has_water_connection' => 'getHasWaterConnection',
        'has_house' => 'getHasHouse',
        'heating' => 'getHeating',
        'home_plot' => 'getHomePlot',
        'horse_company_subtype' => 'getHorseCompanySubtype',
        'horse_trough_location' => 'getHorseTroughLocation',
        'horticultural_company_type' => 'getHorticulturalCompanyType',
        'hospitality_permitted' => 'getHospitalityPermitted',
        'beverage_hospitality_types' => 'getBeverageHospitalityTypes',
        'fastfood_hospitality_sector_types' => 'getFastfoodHospitalitySectorTypes',
        'restaurant_hospitality_sector_types' => 'getRestaurantHospitalitySectorTypes',
        'hotel_hospitality_sector_types' => 'getHotelHospitalitySectorTypes',
        'hotel_hospitality_industry_area' => 'getHotelHospitalityIndustryArea',
        'hotel_non_hospitality_industry_area' => 'getHotelNonHospitalityIndustryArea',
        'house_characteristic' => 'getHouseCharacteristic',
        'house_sort' => 'getHouseSort',
        'house_type' => 'getHouseType',
        'in_dense_hospitality_area' => 'getInDenseHospitalityArea',
        'indoor_parking_capacity' => 'getIndoorParkingCapacity',
        'industrial_building_facilities' => 'getIndustrialBuildingFacilities',
        'in_park' => 'getInPark',
        'insulation_types' => 'getInsulationTypes',
        'insulation_types_barn_storage' => 'getInsulationTypesBarnStorage',
        'in_units_from' => 'getInUnitsFrom',
        'is_barn_storage_available' => 'getIsBarnStorageAvailable',
        'is_biological_company' => 'getIsBiologicalCompany',
        'is_building_ready' => 'getIsBuildingReady',
        'is_home_plot' => 'getIsHomePlot',
        'is_house_in_need_of_refurbishment' => 'getIsHouseInNeedOfRefurbishment',
        'is_new_estate' => 'getIsNewEstate',
        'is_office_space_available' => 'getIsOfficeSpaceAvailable',
        'is_owners_association_checklist_available' => 'getIsOwnersAssociationChecklistAvailable',
        'is_owners_association_registered_kv_k' => 'getIsOwnersAssociationRegisteredKvK',
        'is_permanently_inhabited' => 'getIsPermanentlyInhabited',
        'is_recreational' => 'getIsRecreational',
        'is_shared' => 'getIsShared',
        'is_skal_certified' => 'getIsSkalCertified',
        'is_target_home' => 'getIsTargetHome',
        'is_turnkey' => 'getIsTurnkey',
        'land_property_sub_type' => 'getLandPropertySubType',
        'length' => 'getLength',
        'listing_type' => 'getListingType',
        'living_room_surface' => 'getLivingRoomSurface',
        'location_places' => 'getLocationPlaces',
        'logistic_function' => 'getLogisticFunction',
        'loose_soil_price' => 'getLooseSoilPrice',
        'lot_name' => 'getLotName',
        'maintenance_inside' => 'getMaintenanceInside',
        'maintenance_outside' => 'getMaintenanceOutside',
        'number_of_animal_places' => 'getNumberOfAnimalPlaces',
        'number_of_animals' => 'getNumberOfAnimals',
        'number_of_bath_rooms' => 'getNumberOfBathRooms',
        'number_of_bed_rooms' => 'getNumberOfBedRooms',
        'number_of_floors' => 'getNumberOfFloors',
        'number_of_garages' => 'getNumberOfGarages',
        'number_of_gardens' => 'getNumberOfGardens',
        'number_of_kitchens' => 'getNumberOfKitchens',
        'number_of_meat_pigs' => 'getNumberOfMeatPigs',
        'number_of_mooring_places_milking_cattle' => 'getNumberOfMooringPlacesMilkingCattle',
        'number_of_mooring_places_young_cattle' => 'getNumberOfMooringPlacesYoungCattle',
        'number_of_rooms' => 'getNumberOfRooms',
        'number_of_showers' => 'getNumberOfShowers',
        'number_of_sowing_sights' => 'getNumberOfSowingSights',
        'number_of_toilets' => 'getNumberOfToilets',
        'number_of_weaned_piglets' => 'getNumberOfWeanedPiglets',
        'number_of_breeding_pigs' => 'getNumberOfBreedingPigs',
        'number_of_meat_pig_stables' => 'getNumberOfMeatPigStables',
        'number_of_breeding_pig_stables' => 'getNumberOfBreedingPigStables',
        'number_of_piglet_stables' => 'getNumberOfPigletStables',
        'office_facilities' => 'getOfficeFacilities',
        'office_space_air_treatments' => 'getOfficeSpaceAirTreatments',
        'office_space_building_layer_number' => 'getOfficeSpaceBuildingLayerNumber',
        'office_space_facilities' => 'getOfficeSpaceFacilities',
        'office_space_surface' => 'getOfficeSpaceSurface',
        'other_inside_spaces' => 'getOtherInsideSpaces',
        'parcel_surface' => 'getParcelSurface',
        'parking_facilities' => 'getParkingFacilities',
        'parking_type' => 'getParkingType',
        'paved_percentage' => 'getPavedPercentage',
        'pavement_type' => 'getPavementType',
        'peculiarities' => 'getPeculiarities',
        'pig_company_type' => 'getPigCompanyType',
        'points_of_interest' => 'getPointsOfInterest',
        'pollution' => 'getPollution',
        'poultry_farming_subtype' => 'getPoultryFarmingSubtype',
        'public_oriented_services' => 'getPublicOrientedServices',
        'public_reference' => 'getPublicReference',
        'real_estate_group' => 'getRealEstateGroup',
        'region_keys_dsv' => 'getRegionKeysDsv',
        'renovation_year' => 'getRenovationYear',
        'residential_building' => 'getResidentialBuilding',
        'residential_subtype_other' => 'getResidentialSubtypeOther',
        'restaurant_count_of_seats' => 'getRestaurantCountOfSeats',
        'restaurant_hospitality_industry_area' => 'getRestaurantHospitalityIndustryArea',
        'restaurant_non_hospitality_industry_area' => 'getRestaurantNonHospitalityIndustryArea',
        'retail' => 'getRetail',
        'revenue_per_year' => 'getRevenuePerYear',
        'roof' => 'getRoof',
        'secondary_listing_types' => 'getSecondaryListingTypes',
        'sector_limitation' => 'getSectorLimitation',
        'showroom' => 'getShowroom',
        'size' => 'getSize',
        'soil_type' => 'getSoilType',
        'status_rented' => 'getStatusRented',
        'step_mill' => 'getStepMill',
        'number_of_horse_boxes' => 'getNumberOfHorseBoxes',
        'storage_has_attic' => 'getStorageHasAttic',
        'storage_has_electra' => 'getStorageHasElectra',
        'storage_has_heating' => 'getStorageHasHeating',
        'storage_has_water' => 'getStorageHasWater',
        'storage_insulation_types' => 'getStorageInsulationTypes',
        'storage_room_type' => 'getStorageRoomType',
        'sub_type' => 'getSubType',
        'surface_glass_upholstery' => 'getSurfaceGlassUpholstery',
        'terrace' => 'getTerrace',
        'terrain_building_volume' => 'getTerrainBuildingVolume',
        'terrain_building_volume_area_percentage' => 'getTerrainBuildingVolumeAreaPercentage',
        'terrain_surface' => 'getTerrainSurface',
        'total_parking_capacity' => 'getTotalParkingCapacity',
        'type_code_house' => 'getTypeCodeHouse',
        'type_of_floor_floors' => 'getTypeOfFloorFloors',
        'type_of_floor_ground_floor' => 'getTypeOfFloorGroundFloor',
        'types_of_communal_area' => 'getTypesOfCommunalArea',
        'types_of_window_frames' => 'getTypesOfWindowFrames',
        'usable_area' => 'getUsableArea',
        'cattle_farming_subtype' => 'getCattleFarmingSubtype',
        'v_vo' => 'getVVo',
        'warm_water_types' => 'getWarmWaterTypes',
        'welfare_state' => 'getWelfareState',
        'width' => 'getWidth',
        'wvo' => 'getWvo',
        'year_of_construction' => 'getYearOfConstruction',
        'count_of_pitches' => 'getCountOfPitches',
        'has_annual_pitches' => 'getHasAnnualPitches',
        'count_of_accommodations' => 'getCountOfAccommodations',
        'capacity_in_number_of_persons' => 'getCapacityInNumberOfPersons',
        'leisure_type' => 'getLeisureType',
        'leisure_facility_types' => 'getLeisureFacilityTypes',
        'investment_type' => 'getInvestmentType',
        'horeca_sector_types' => 'getHorecaSectorTypes',
        'remaining_term_of_a_contract' => 'getRemainingTermOfAContract',
        'vacancy_area' => 'getVacancyArea',
        'vacancy_rental_value' => 'getVacancyRentalValue',
        'gross_initial_yield' => 'getGrossInitialYield',
        'gross_rental_income' => 'getGrossRentalIncome',
        'count_of_tenants' => 'getCountOfTenants',
        'count_of_separately_lettable_housing_units' => 'getCountOfSeparatelyLettableHousingUnits',
        'portefeuille' => 'getPortefeuille',
        'social_property_type' => 'getSocialPropertyType',
        'social_property_facility_types' => 'getSocialPropertyFacilityTypes',
        'redesignation_possible' => 'getRedesignationPossible',
        'return_of_services' => 'getReturnOfServices',
        'practic_area' => 'getPracticArea',
        'practic_area_capacity' => 'getPracticAreaCapacity',
        'with_accommodations' => 'getWithAccommodations',
        'count_of_housing_units_in_accommodations' => 'getCountOfHousingUnitsInAccommodations',
        'shared_accommodations' => 'getSharedAccommodations',
        'shared_sanitary_facilities' => 'getSharedSanitaryFacilities',
        'name_of_building' => 'getNameOfBuilding',
        'residential_facilities' => 'getResidentialFacilities',
        'home_plot_surface' => 'getHomePlotSurface',
        'field_plot_surface' => 'getFieldPlotSurface',
        'number_of_veal_calves' => 'getNumberOfVealCalves',
        'has_green_label' => 'getHasGreenLabel',
        'poultry_housing_types' => 'getPoultryHousingTypes',
        'bog_combination_object_type' => 'getBogCombinationObjectType',
        'bog_combination_object_situation' => 'getBogCombinationObjectSituation',
        'bog_combination_object_status' => 'getBogCombinationObjectStatus',
        'bog_combination_object_area' => 'getBogCombinationObjectArea',
        'glass_structures' => 'getGlassStructures',
        'riding_halls' => 'getRidingHalls',
        'linked_folder_tree' => 'getLinkedFolderTree',
        'linked_bids' => 'getLinkedBids',
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
        'is_cleared' => 'getIsCleared',
        'is_confidential' => 'getIsConfidential',
        'is_private' => 'getIsPrivate',
        'is_production_rights' => 'getIsProductionRights',
        'is_self_interest' => 'getIsSelfInterest',
        'is_special' => 'getIsSpecial',
        'is_topper' => 'getIsTopper',
        'is_transaction_data_confidential' => 'getIsTransactionDataConfidential',
        'linked_company_listings' => 'getLinkedCompanyListings',
        'linked_applicants' => 'getLinkedApplicants',
        'linked_notaries' => 'getLinkedNotaries',
        'linked_property_managers' => 'getLinkedPropertyManagers',
        'linked_vendors' => 'getLinkedVendors',
        'linked_tenant_representation_brokers' => 'getLinkedTenantRepresentationBrokers',
        'linked_rental_agents' => 'getLinkedRentalAgents',
        'linked_sales_brokers' => 'getLinkedSalesBrokers',
        'linked_contact_persons' => 'getLinkedContactPersons',
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
        $this->setIfExists('summary', $data ?? [], null);
        $this->setIfExists('address', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('linked_acquisition_assignment', $data ?? [], null);
        $this->setIfExists('agricultural_subtype_other', $data ?? [], null);
        $this->setIfExists('air_treatments', $data ?? [], null);
        $this->setIfExists('apartment_characteristic', $data ?? [], null);
        $this->setIfExists('apartment_sort', $data ?? [], null);
        $this->setIfExists('approval_marks', $data ?? [], null);
        $this->setIfExists('beverages_count_of_seats', $data ?? [], null);
        $this->setIfExists('beverages_hospitality_industry_area', $data ?? [], null);
        $this->setIfExists('beverages_non_hospitality_industry_area', $data ?? [], null);
        $this->setIfExists('boiler_fuel', $data ?? [], null);
        $this->setIfExists('boiler_property', $data ?? [], null);
        $this->setIfExists('boiler_type', $data ?? [], '');
        $this->setIfExists('boiler_year_of_construction', $data ?? [], null);
        $this->setIfExists('building_capacity', $data ?? [], null);
        $this->setIfExists('building_capacity_area_percentage', $data ?? [], null);
        $this->setIfExists('building_layer', $data ?? [], null);
        $this->setIfExists('building_layer_amount', $data ?? [], null);
        $this->setIfExists('business_expenses', $data ?? [], null);
        $this->setIfExists('company_listings', $data ?? [], null);
        $this->setIfExists('business_rights', $data ?? [], null);
        $this->setIfExists('b_vo', $data ?? [], null);
        $this->setIfExists('capacity', $data ?? [], null);
        $this->setIfExists('comfort_quality', $data ?? [], null);
        $this->setIfExists('company_name', $data ?? [], '');
        $this->setIfExists('complete_space', $data ?? [], null);
        $this->setIfExists('construction_options', $data ?? [], null);
        $this->setIfExists('building_related_outdoor_space', $data ?? [], null);
        $this->setIfExists('contents', $data ?? [], null);
        $this->setIfExists('count_of_hotelrooms', $data ?? [], null);
        $this->setIfExists('current_destinationd', $data ?? [], null);
        $this->setIfExists('current_usages', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], '');
        $this->setIfExists('drainage', $data ?? [], null);
        $this->setIfExists('drainage_horse_rack', $data ?? [], null);
        $this->setIfExists('energy_label', $data ?? [], null);
        $this->setIfExists('exclusive_status', $data ?? [], null);
        $this->setIfExists('external_storage', $data ?? [], null);
        $this->setIfExists('facilities', $data ?? [], null);
        $this->setIfExists('fastfood_count_of_seats', $data ?? [], null);
        $this->setIfExists('fastfood_hospitality_industry_area', $data ?? [], null);
        $this->setIfExists('features', $data ?? [], null);
        $this->setIfExists('floor_level', $data ?? [], null);
        $this->setIfExists('floor_load', $data ?? [], null);
        $this->setIfExists('floors', $data ?? [], null);
        $this->setIfExists('free_height', $data ?? [], null);
        $this->setIfExists('free_overcurrent', $data ?? [], null);
        $this->setIfExists('front_width', $data ?? [], null);
        $this->setIfExists('garages', $data ?? [], null);
        $this->setIfExists('gardens', $data ?? [], null);
        $this->setIfExists('ground_property', $data ?? [], null);
        $this->setIfExists('ground_usage', $data ?? [], null);
        $this->setIfExists('alv_main_plot_destination', $data ?? [], null);
        $this->setIfExists('has_cable_tv', $data ?? [], null);
        $this->setIfExists('has_combi_boiler', $data ?? [], null);
        $this->setIfExists('has_drainage', $data ?? [], null);
        $this->setIfExists('has_electricity_connection', $data ?? [], null);
        $this->setIfExists('has_electric_power', $data ?? [], null);
        $this->setIfExists('has_gas_connection', $data ?? [], null);
        $this->setIfExists('has_hygiene_barrier', $data ?? [], null);
        $this->setIfExists('has_internet_connection', $data ?? [], null);
        $this->setIfExists('has_office_space', $data ?? [], null);
        $this->setIfExists('has_open_porch', $data ?? [], null);
        $this->setIfExists('has_own_entrance', $data ?? [], null);
        $this->setIfExists('has_owners_association_buildings_insurance', $data ?? [], null);
        $this->setIfExists('has_owners_association_maintenance_expectations', $data ?? [], null);
        $this->setIfExists('has_owners_association_multiple_years_maintenance_plan', $data ?? [], null);
        $this->setIfExists('has_owners_association_periodic_contribution', $data ?? [], null);
        $this->setIfExists('has_owners_association_reserve_fund', $data ?? [], null);
        $this->setIfExists('has_owners_association_yearly_meeting', $data ?? [], null);
        $this->setIfExists('has_road_connection', $data ?? [], null);
        $this->setIfExists('has_septic_tank', $data ?? [], null);
        $this->setIfExists('has_sewage_connection', $data ?? [], null);
        $this->setIfExists('has_tank', $data ?? [], null);
        $this->setIfExists('has_terrain', $data ?? [], null);
        $this->setIfExists('has_ventilation', $data ?? [], null);
        $this->setIfExists('has_water_connection', $data ?? [], null);
        $this->setIfExists('has_house', $data ?? [], null);
        $this->setIfExists('heating', $data ?? [], null);
        $this->setIfExists('home_plot', $data ?? [], null);
        $this->setIfExists('horse_company_subtype', $data ?? [], null);
        $this->setIfExists('horse_trough_location', $data ?? [], null);
        $this->setIfExists('horticultural_company_type', $data ?? [], null);
        $this->setIfExists('hospitality_permitted', $data ?? [], null);
        $this->setIfExists('beverage_hospitality_types', $data ?? [], null);
        $this->setIfExists('fastfood_hospitality_sector_types', $data ?? [], null);
        $this->setIfExists('restaurant_hospitality_sector_types', $data ?? [], null);
        $this->setIfExists('hotel_hospitality_sector_types', $data ?? [], null);
        $this->setIfExists('hotel_hospitality_industry_area', $data ?? [], null);
        $this->setIfExists('hotel_non_hospitality_industry_area', $data ?? [], null);
        $this->setIfExists('house_characteristic', $data ?? [], null);
        $this->setIfExists('house_sort', $data ?? [], null);
        $this->setIfExists('house_type', $data ?? [], null);
        $this->setIfExists('in_dense_hospitality_area', $data ?? [], null);
        $this->setIfExists('indoor_parking_capacity', $data ?? [], null);
        $this->setIfExists('industrial_building_facilities', $data ?? [], null);
        $this->setIfExists('in_park', $data ?? [], null);
        $this->setIfExists('insulation_types', $data ?? [], null);
        $this->setIfExists('insulation_types_barn_storage', $data ?? [], null);
        $this->setIfExists('in_units_from', $data ?? [], null);
        $this->setIfExists('is_barn_storage_available', $data ?? [], null);
        $this->setIfExists('is_biological_company', $data ?? [], null);
        $this->setIfExists('is_building_ready', $data ?? [], null);
        $this->setIfExists('is_home_plot', $data ?? [], null);
        $this->setIfExists('is_house_in_need_of_refurbishment', $data ?? [], null);
        $this->setIfExists('is_new_estate', $data ?? [], null);
        $this->setIfExists('is_office_space_available', $data ?? [], null);
        $this->setIfExists('is_owners_association_checklist_available', $data ?? [], null);
        $this->setIfExists('is_owners_association_registered_kv_k', $data ?? [], null);
        $this->setIfExists('is_permanently_inhabited', $data ?? [], null);
        $this->setIfExists('is_recreational', $data ?? [], null);
        $this->setIfExists('is_shared', $data ?? [], null);
        $this->setIfExists('is_skal_certified', $data ?? [], null);
        $this->setIfExists('is_target_home', $data ?? [], null);
        $this->setIfExists('is_turnkey', $data ?? [], null);
        $this->setIfExists('land_property_sub_type', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('listing_type', $data ?? [], null);
        $this->setIfExists('living_room_surface', $data ?? [], null);
        $this->setIfExists('location_places', $data ?? [], null);
        $this->setIfExists('logistic_function', $data ?? [], null);
        $this->setIfExists('loose_soil_price', $data ?? [], null);
        $this->setIfExists('lot_name', $data ?? [], '');
        $this->setIfExists('maintenance_inside', $data ?? [], null);
        $this->setIfExists('maintenance_outside', $data ?? [], null);
        $this->setIfExists('number_of_animal_places', $data ?? [], null);
        $this->setIfExists('number_of_animals', $data ?? [], null);
        $this->setIfExists('number_of_bath_rooms', $data ?? [], null);
        $this->setIfExists('number_of_bed_rooms', $data ?? [], null);
        $this->setIfExists('number_of_floors', $data ?? [], null);
        $this->setIfExists('number_of_garages', $data ?? [], null);
        $this->setIfExists('number_of_gardens', $data ?? [], null);
        $this->setIfExists('number_of_kitchens', $data ?? [], null);
        $this->setIfExists('number_of_meat_pigs', $data ?? [], null);
        $this->setIfExists('number_of_mooring_places_milking_cattle', $data ?? [], null);
        $this->setIfExists('number_of_mooring_places_young_cattle', $data ?? [], null);
        $this->setIfExists('number_of_rooms', $data ?? [], null);
        $this->setIfExists('number_of_showers', $data ?? [], null);
        $this->setIfExists('number_of_sowing_sights', $data ?? [], null);
        $this->setIfExists('number_of_toilets', $data ?? [], null);
        $this->setIfExists('number_of_weaned_piglets', $data ?? [], null);
        $this->setIfExists('number_of_breeding_pigs', $data ?? [], null);
        $this->setIfExists('number_of_meat_pig_stables', $data ?? [], null);
        $this->setIfExists('number_of_breeding_pig_stables', $data ?? [], null);
        $this->setIfExists('number_of_piglet_stables', $data ?? [], null);
        $this->setIfExists('office_facilities', $data ?? [], null);
        $this->setIfExists('office_space_air_treatments', $data ?? [], null);
        $this->setIfExists('office_space_building_layer_number', $data ?? [], null);
        $this->setIfExists('office_space_facilities', $data ?? [], null);
        $this->setIfExists('office_space_surface', $data ?? [], null);
        $this->setIfExists('other_inside_spaces', $data ?? [], null);
        $this->setIfExists('parcel_surface', $data ?? [], null);
        $this->setIfExists('parking_facilities', $data ?? [], null);
        $this->setIfExists('parking_type', $data ?? [], null);
        $this->setIfExists('paved_percentage', $data ?? [], null);
        $this->setIfExists('pavement_type', $data ?? [], null);
        $this->setIfExists('peculiarities', $data ?? [], null);
        $this->setIfExists('pig_company_type', $data ?? [], null);
        $this->setIfExists('points_of_interest', $data ?? [], null);
        $this->setIfExists('pollution', $data ?? [], null);
        $this->setIfExists('poultry_farming_subtype', $data ?? [], null);
        $this->setIfExists('public_oriented_services', $data ?? [], null);
        $this->setIfExists('public_reference', $data ?? [], '');
        $this->setIfExists('real_estate_group', $data ?? [], null);
        $this->setIfExists('region_keys_dsv', $data ?? [], '');
        $this->setIfExists('renovation_year', $data ?? [], null);
        $this->setIfExists('residential_building', $data ?? [], null);
        $this->setIfExists('residential_subtype_other', $data ?? [], null);
        $this->setIfExists('restaurant_count_of_seats', $data ?? [], null);
        $this->setIfExists('restaurant_hospitality_industry_area', $data ?? [], null);
        $this->setIfExists('restaurant_non_hospitality_industry_area', $data ?? [], null);
        $this->setIfExists('retail', $data ?? [], null);
        $this->setIfExists('revenue_per_year', $data ?? [], null);
        $this->setIfExists('roof', $data ?? [], null);
        $this->setIfExists('secondary_listing_types', $data ?? [], null);
        $this->setIfExists('sector_limitation', $data ?? [], null);
        $this->setIfExists('showroom', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('soil_type', $data ?? [], null);
        $this->setIfExists('status_rented', $data ?? [], null);
        $this->setIfExists('step_mill', $data ?? [], null);
        $this->setIfExists('number_of_horse_boxes', $data ?? [], null);
        $this->setIfExists('storage_has_attic', $data ?? [], null);
        $this->setIfExists('storage_has_electra', $data ?? [], null);
        $this->setIfExists('storage_has_heating', $data ?? [], null);
        $this->setIfExists('storage_has_water', $data ?? [], null);
        $this->setIfExists('storage_insulation_types', $data ?? [], null);
        $this->setIfExists('storage_room_type', $data ?? [], null);
        $this->setIfExists('sub_type', $data ?? [], null);
        $this->setIfExists('surface_glass_upholstery', $data ?? [], null);
        $this->setIfExists('terrace', $data ?? [], null);
        $this->setIfExists('terrain_building_volume', $data ?? [], null);
        $this->setIfExists('terrain_building_volume_area_percentage', $data ?? [], null);
        $this->setIfExists('terrain_surface', $data ?? [], null);
        $this->setIfExists('total_parking_capacity', $data ?? [], null);
        $this->setIfExists('type_code_house', $data ?? [], null);
        $this->setIfExists('type_of_floor_floors', $data ?? [], null);
        $this->setIfExists('type_of_floor_ground_floor', $data ?? [], null);
        $this->setIfExists('types_of_communal_area', $data ?? [], null);
        $this->setIfExists('types_of_window_frames', $data ?? [], null);
        $this->setIfExists('usable_area', $data ?? [], null);
        $this->setIfExists('cattle_farming_subtype', $data ?? [], null);
        $this->setIfExists('v_vo', $data ?? [], null);
        $this->setIfExists('warm_water_types', $data ?? [], null);
        $this->setIfExists('welfare_state', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('wvo', $data ?? [], null);
        $this->setIfExists('year_of_construction', $data ?? [], null);
        $this->setIfExists('count_of_pitches', $data ?? [], null);
        $this->setIfExists('has_annual_pitches', $data ?? [], null);
        $this->setIfExists('count_of_accommodations', $data ?? [], null);
        $this->setIfExists('capacity_in_number_of_persons', $data ?? [], null);
        $this->setIfExists('leisure_type', $data ?? [], null);
        $this->setIfExists('leisure_facility_types', $data ?? [], null);
        $this->setIfExists('investment_type', $data ?? [], null);
        $this->setIfExists('horeca_sector_types', $data ?? [], null);
        $this->setIfExists('remaining_term_of_a_contract', $data ?? [], null);
        $this->setIfExists('vacancy_area', $data ?? [], null);
        $this->setIfExists('vacancy_rental_value', $data ?? [], null);
        $this->setIfExists('gross_initial_yield', $data ?? [], null);
        $this->setIfExists('gross_rental_income', $data ?? [], null);
        $this->setIfExists('count_of_tenants', $data ?? [], null);
        $this->setIfExists('count_of_separately_lettable_housing_units', $data ?? [], null);
        $this->setIfExists('portefeuille', $data ?? [], null);
        $this->setIfExists('social_property_type', $data ?? [], null);
        $this->setIfExists('social_property_facility_types', $data ?? [], null);
        $this->setIfExists('redesignation_possible', $data ?? [], null);
        $this->setIfExists('return_of_services', $data ?? [], null);
        $this->setIfExists('practic_area', $data ?? [], null);
        $this->setIfExists('practic_area_capacity', $data ?? [], null);
        $this->setIfExists('with_accommodations', $data ?? [], null);
        $this->setIfExists('count_of_housing_units_in_accommodations', $data ?? [], null);
        $this->setIfExists('shared_accommodations', $data ?? [], null);
        $this->setIfExists('shared_sanitary_facilities', $data ?? [], null);
        $this->setIfExists('name_of_building', $data ?? [], null);
        $this->setIfExists('residential_facilities', $data ?? [], null);
        $this->setIfExists('home_plot_surface', $data ?? [], null);
        $this->setIfExists('field_plot_surface', $data ?? [], null);
        $this->setIfExists('number_of_veal_calves', $data ?? [], null);
        $this->setIfExists('has_green_label', $data ?? [], null);
        $this->setIfExists('poultry_housing_types', $data ?? [], null);
        $this->setIfExists('bog_combination_object_type', $data ?? [], null);
        $this->setIfExists('bog_combination_object_situation', $data ?? [], null);
        $this->setIfExists('bog_combination_object_status', $data ?? [], null);
        $this->setIfExists('bog_combination_object_area', $data ?? [], null);
        $this->setIfExists('glass_structures', $data ?? [], null);
        $this->setIfExists('riding_halls', $data ?? [], null);
        $this->setIfExists('linked_folder_tree', $data ?? [], null);
        $this->setIfExists('linked_bids', $data ?? [], null);
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
        $this->setIfExists('is_cleared', $data ?? [], null);
        $this->setIfExists('is_confidential', $data ?? [], null);
        $this->setIfExists('is_private', $data ?? [], null);
        $this->setIfExists('is_production_rights', $data ?? [], null);
        $this->setIfExists('is_self_interest', $data ?? [], null);
        $this->setIfExists('is_special', $data ?? [], null);
        $this->setIfExists('is_topper', $data ?? [], null);
        $this->setIfExists('is_transaction_data_confidential', $data ?? [], null);
        $this->setIfExists('linked_company_listings', $data ?? [], null);
        $this->setIfExists('linked_applicants', $data ?? [], null);
        $this->setIfExists('linked_notaries', $data ?? [], null);
        $this->setIfExists('linked_property_managers', $data ?? [], null);
        $this->setIfExists('linked_vendors', $data ?? [], null);
        $this->setIfExists('linked_tenant_representation_brokers', $data ?? [], null);
        $this->setIfExists('linked_rental_agents', $data ?? [], null);
        $this->setIfExists('linked_sales_brokers', $data ?? [], null);
        $this->setIfExists('linked_contact_persons', $data ?? [], null);
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

        if (!is_null($this->container['boiler_type']) && (mb_strlen($this->container['boiler_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'boiler_type', the character length must be smaller than or equal to 50.";
        }

        if ($this->container['listing_type'] === null) {
            $invalidProperties[] = "'listing_type' can't be null";
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
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary summary
     *
     * @return self
     */
    public function setSummary($summary)
    {
        if (is_null($summary)) {
            throw new \InvalidArgumentException('non-nullable summary cannot be null');
        }
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Brixion\Kolibri\Model\BagAddress|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Brixion\Kolibri\Model\BagAddress|null $address address
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
     * Gets status
     *
     * @return \Brixion\Kolibri\Model\AcquisitionStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Brixion\Kolibri\Model\AcquisitionStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets linked_acquisition_assignment
     *
     * @return \Brixion\Kolibri\Model\LinkedAssignment|null
     */
    public function getLinkedAcquisitionAssignment()
    {
        return $this->container['linked_acquisition_assignment'];
    }

    /**
     * Sets linked_acquisition_assignment
     *
     * @param \Brixion\Kolibri\Model\LinkedAssignment|null $linked_acquisition_assignment linked_acquisition_assignment
     *
     * @return self
     */
    public function setLinkedAcquisitionAssignment($linked_acquisition_assignment)
    {
        if (is_null($linked_acquisition_assignment)) {
            throw new \InvalidArgumentException('non-nullable linked_acquisition_assignment cannot be null');
        }
        $this->container['linked_acquisition_assignment'] = $linked_acquisition_assignment;

        return $this;
    }

    /**
     * Gets agricultural_subtype_other
     *
     * @return \Brixion\Kolibri\Model\AgriculturalSubtypeOther|null
     */
    public function getAgriculturalSubtypeOther()
    {
        return $this->container['agricultural_subtype_other'];
    }

    /**
     * Sets agricultural_subtype_other
     *
     * @param \Brixion\Kolibri\Model\AgriculturalSubtypeOther|null $agricultural_subtype_other agricultural_subtype_other
     *
     * @return self
     */
    public function setAgriculturalSubtypeOther($agricultural_subtype_other)
    {
        if (is_null($agricultural_subtype_other)) {
            throw new \InvalidArgumentException('non-nullable agricultural_subtype_other cannot be null');
        }
        $this->container['agricultural_subtype_other'] = $agricultural_subtype_other;

        return $this;
    }

    /**
     * Gets air_treatments
     *
     * @return \Brixion\Kolibri\Model\AirTreatment[]|null
     */
    public function getAirTreatments()
    {
        return $this->container['air_treatments'];
    }

    /**
     * Sets air_treatments
     *
     * @param \Brixion\Kolibri\Model\AirTreatment[]|null $air_treatments air_treatments
     *
     * @return self
     */
    public function setAirTreatments($air_treatments)
    {
        if (is_null($air_treatments)) {
            throw new \InvalidArgumentException('non-nullable air_treatments cannot be null');
        }
        $this->container['air_treatments'] = $air_treatments;

        return $this;
    }

    /**
     * Gets apartment_characteristic
     *
     * @return \Brixion\Kolibri\Model\ApartmentCharacteristic|null
     */
    public function getApartmentCharacteristic()
    {
        return $this->container['apartment_characteristic'];
    }

    /**
     * Sets apartment_characteristic
     *
     * @param \Brixion\Kolibri\Model\ApartmentCharacteristic|null $apartment_characteristic apartment_characteristic
     *
     * @return self
     */
    public function setApartmentCharacteristic($apartment_characteristic)
    {
        if (is_null($apartment_characteristic)) {
            throw new \InvalidArgumentException('non-nullable apartment_characteristic cannot be null');
        }
        $this->container['apartment_characteristic'] = $apartment_characteristic;

        return $this;
    }

    /**
     * Gets apartment_sort
     *
     * @return \Brixion\Kolibri\Model\ApartmentSort|null
     */
    public function getApartmentSort()
    {
        return $this->container['apartment_sort'];
    }

    /**
     * Sets apartment_sort
     *
     * @param \Brixion\Kolibri\Model\ApartmentSort|null $apartment_sort apartment_sort
     *
     * @return self
     */
    public function setApartmentSort($apartment_sort)
    {
        if (is_null($apartment_sort)) {
            throw new \InvalidArgumentException('non-nullable apartment_sort cannot be null');
        }
        $this->container['apartment_sort'] = $apartment_sort;

        return $this;
    }

    /**
     * Gets approval_marks
     *
     * @return \Brixion\Kolibri\Model\Certification[]|null
     */
    public function getApprovalMarks()
    {
        return $this->container['approval_marks'];
    }

    /**
     * Sets approval_marks
     *
     * @param \Brixion\Kolibri\Model\Certification[]|null $approval_marks approval_marks
     *
     * @return self
     */
    public function setApprovalMarks($approval_marks)
    {
        if (is_null($approval_marks)) {
            throw new \InvalidArgumentException('non-nullable approval_marks cannot be null');
        }
        $this->container['approval_marks'] = $approval_marks;

        return $this;
    }

    /**
     * Gets beverages_count_of_seats
     *
     * @return int|null
     */
    public function getBeveragesCountOfSeats()
    {
        return $this->container['beverages_count_of_seats'];
    }

    /**
     * Sets beverages_count_of_seats
     *
     * @param int|null $beverages_count_of_seats beverages_count_of_seats
     *
     * @return self
     */
    public function setBeveragesCountOfSeats($beverages_count_of_seats)
    {
        if (is_null($beverages_count_of_seats)) {
            throw new \InvalidArgumentException('non-nullable beverages_count_of_seats cannot be null');
        }
        $this->container['beverages_count_of_seats'] = $beverages_count_of_seats;

        return $this;
    }

    /**
     * Gets beverages_hospitality_industry_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getBeveragesHospitalityIndustryArea()
    {
        return $this->container['beverages_hospitality_industry_area'];
    }

    /**
     * Sets beverages_hospitality_industry_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $beverages_hospitality_industry_area beverages_hospitality_industry_area
     *
     * @return self
     */
    public function setBeveragesHospitalityIndustryArea($beverages_hospitality_industry_area)
    {
        if (is_null($beverages_hospitality_industry_area)) {
            throw new \InvalidArgumentException('non-nullable beverages_hospitality_industry_area cannot be null');
        }
        $this->container['beverages_hospitality_industry_area'] = $beverages_hospitality_industry_area;

        return $this;
    }

    /**
     * Gets beverages_non_hospitality_industry_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getBeveragesNonHospitalityIndustryArea()
    {
        return $this->container['beverages_non_hospitality_industry_area'];
    }

    /**
     * Sets beverages_non_hospitality_industry_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $beverages_non_hospitality_industry_area beverages_non_hospitality_industry_area
     *
     * @return self
     */
    public function setBeveragesNonHospitalityIndustryArea($beverages_non_hospitality_industry_area)
    {
        if (is_null($beverages_non_hospitality_industry_area)) {
            throw new \InvalidArgumentException('non-nullable beverages_non_hospitality_industry_area cannot be null');
        }
        $this->container['beverages_non_hospitality_industry_area'] = $beverages_non_hospitality_industry_area;

        return $this;
    }

    /**
     * Gets boiler_fuel
     *
     * @return \Brixion\Kolibri\Model\EnergySource|null
     */
    public function getBoilerFuel()
    {
        return $this->container['boiler_fuel'];
    }

    /**
     * Sets boiler_fuel
     *
     * @param \Brixion\Kolibri\Model\EnergySource|null $boiler_fuel boiler_fuel
     *
     * @return self
     */
    public function setBoilerFuel($boiler_fuel)
    {
        if (is_null($boiler_fuel)) {
            throw new \InvalidArgumentException('non-nullable boiler_fuel cannot be null');
        }
        $this->container['boiler_fuel'] = $boiler_fuel;

        return $this;
    }

    /**
     * Gets boiler_property
     *
     * @return \Brixion\Kolibri\Model\Ownership|null
     */
    public function getBoilerProperty()
    {
        return $this->container['boiler_property'];
    }

    /**
     * Sets boiler_property
     *
     * @param \Brixion\Kolibri\Model\Ownership|null $boiler_property boiler_property
     *
     * @return self
     */
    public function setBoilerProperty($boiler_property)
    {
        if (is_null($boiler_property)) {
            throw new \InvalidArgumentException('non-nullable boiler_property cannot be null');
        }
        $this->container['boiler_property'] = $boiler_property;

        return $this;
    }

    /**
     * Gets boiler_type
     *
     * @return string|null
     */
    public function getBoilerType()
    {
        return $this->container['boiler_type'];
    }

    /**
     * Sets boiler_type
     *
     * @param string|null $boiler_type boiler_type
     *
     * @return self
     */
    public function setBoilerType($boiler_type)
    {
        if (is_null($boiler_type)) {
            throw new \InvalidArgumentException('non-nullable boiler_type cannot be null');
        }
        if ((mb_strlen($boiler_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $boiler_type when calling AcquisitionObjectAssignment., must be smaller than or equal to 50.');
        }

        $this->container['boiler_type'] = $boiler_type;

        return $this;
    }

    /**
     * Gets boiler_year_of_construction
     *
     * @return int|null
     */
    public function getBoilerYearOfConstruction()
    {
        return $this->container['boiler_year_of_construction'];
    }

    /**
     * Sets boiler_year_of_construction
     *
     * @param int|null $boiler_year_of_construction boiler_year_of_construction
     *
     * @return self
     */
    public function setBoilerYearOfConstruction($boiler_year_of_construction)
    {
        if (is_null($boiler_year_of_construction)) {
            throw new \InvalidArgumentException('non-nullable boiler_year_of_construction cannot be null');
        }
        $this->container['boiler_year_of_construction'] = $boiler_year_of_construction;

        return $this;
    }

    /**
     * Gets building_capacity
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getBuildingCapacity()
    {
        return $this->container['building_capacity'];
    }

    /**
     * Sets building_capacity
     *
     * @param \Brixion\Kolibri\Model\Size|null $building_capacity building_capacity
     *
     * @return self
     */
    public function setBuildingCapacity($building_capacity)
    {
        if (is_null($building_capacity)) {
            throw new \InvalidArgumentException('non-nullable building_capacity cannot be null');
        }
        $this->container['building_capacity'] = $building_capacity;

        return $this;
    }

    /**
     * Gets building_capacity_area_percentage
     *
     * @return float|null
     */
    public function getBuildingCapacityAreaPercentage()
    {
        return $this->container['building_capacity_area_percentage'];
    }

    /**
     * Sets building_capacity_area_percentage
     *
     * @param float|null $building_capacity_area_percentage building_capacity_area_percentage
     *
     * @return self
     */
    public function setBuildingCapacityAreaPercentage($building_capacity_area_percentage)
    {
        if (is_null($building_capacity_area_percentage)) {
            throw new \InvalidArgumentException('non-nullable building_capacity_area_percentage cannot be null');
        }
        $this->container['building_capacity_area_percentage'] = $building_capacity_area_percentage;

        return $this;
    }

    /**
     * Gets building_layer
     *
     * @return int|null
     */
    public function getBuildingLayer()
    {
        return $this->container['building_layer'];
    }

    /**
     * Sets building_layer
     *
     * @param int|null $building_layer building_layer
     *
     * @return self
     */
    public function setBuildingLayer($building_layer)
    {
        if (is_null($building_layer)) {
            throw new \InvalidArgumentException('non-nullable building_layer cannot be null');
        }
        $this->container['building_layer'] = $building_layer;

        return $this;
    }

    /**
     * Gets building_layer_amount
     *
     * @return int|null
     */
    public function getBuildingLayerAmount()
    {
        return $this->container['building_layer_amount'];
    }

    /**
     * Sets building_layer_amount
     *
     * @param int|null $building_layer_amount building_layer_amount
     *
     * @return self
     */
    public function setBuildingLayerAmount($building_layer_amount)
    {
        if (is_null($building_layer_amount)) {
            throw new \InvalidArgumentException('non-nullable building_layer_amount cannot be null');
        }
        $this->container['building_layer_amount'] = $building_layer_amount;

        return $this;
    }

    /**
     * Gets business_expenses
     *
     * @return \Brixion\Kolibri\Model\BusinessExpenses|null
     */
    public function getBusinessExpenses()
    {
        return $this->container['business_expenses'];
    }

    /**
     * Sets business_expenses
     *
     * @param \Brixion\Kolibri\Model\BusinessExpenses|null $business_expenses business_expenses
     *
     * @return self
     */
    public function setBusinessExpenses($business_expenses)
    {
        if (is_null($business_expenses)) {
            throw new \InvalidArgumentException('non-nullable business_expenses cannot be null');
        }
        $this->container['business_expenses'] = $business_expenses;

        return $this;
    }

    /**
     * Gets company_listings
     *
     * @return \Brixion\Kolibri\Model\CompanyListing[]|null
     */
    public function getCompanyListings()
    {
        return $this->container['company_listings'];
    }

    /**
     * Sets company_listings
     *
     * @param \Brixion\Kolibri\Model\CompanyListing[]|null $company_listings company_listings
     *
     * @return self
     */
    public function setCompanyListings($company_listings)
    {
        if (is_null($company_listings)) {
            throw new \InvalidArgumentException('non-nullable company_listings cannot be null');
        }
        $this->container['company_listings'] = $company_listings;

        return $this;
    }

    /**
     * Gets business_rights
     *
     * @return \Brixion\Kolibri\Model\BusinessRights|null
     */
    public function getBusinessRights()
    {
        return $this->container['business_rights'];
    }

    /**
     * Sets business_rights
     *
     * @param \Brixion\Kolibri\Model\BusinessRights|null $business_rights business_rights
     *
     * @return self
     */
    public function setBusinessRights($business_rights)
    {
        if (is_null($business_rights)) {
            throw new \InvalidArgumentException('non-nullable business_rights cannot be null');
        }
        $this->container['business_rights'] = $business_rights;

        return $this;
    }

    /**
     * Gets b_vo
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getBVo()
    {
        return $this->container['b_vo'];
    }

    /**
     * Sets b_vo
     *
     * @param \Brixion\Kolibri\Model\Size|null $b_vo b_vo
     *
     * @return self
     */
    public function setBVo($b_vo)
    {
        if (is_null($b_vo)) {
            throw new \InvalidArgumentException('non-nullable b_vo cannot be null');
        }
        $this->container['b_vo'] = $b_vo;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int|null $capacity capacity
     *
     * @return self
     */
    public function setCapacity($capacity)
    {
        if (is_null($capacity)) {
            throw new \InvalidArgumentException('non-nullable capacity cannot be null');
        }
        $this->container['capacity'] = $capacity;

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
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        if (is_null($company_name)) {
            throw new \InvalidArgumentException('non-nullable company_name cannot be null');
        }
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets complete_space
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getCompleteSpace()
    {
        return $this->container['complete_space'];
    }

    /**
     * Sets complete_space
     *
     * @param \Brixion\Kolibri\Model\Size|null $complete_space complete_space
     *
     * @return self
     */
    public function setCompleteSpace($complete_space)
    {
        if (is_null($complete_space)) {
            throw new \InvalidArgumentException('non-nullable complete_space cannot be null');
        }
        $this->container['complete_space'] = $complete_space;

        return $this;
    }

    /**
     * Gets construction_options
     *
     * @return \Brixion\Kolibri\Model\ConstructionOption[]|null
     */
    public function getConstructionOptions()
    {
        return $this->container['construction_options'];
    }

    /**
     * Sets construction_options
     *
     * @param \Brixion\Kolibri\Model\ConstructionOption[]|null $construction_options construction_options
     *
     * @return self
     */
    public function setConstructionOptions($construction_options)
    {
        if (is_null($construction_options)) {
            throw new \InvalidArgumentException('non-nullable construction_options cannot be null');
        }
        $this->container['construction_options'] = $construction_options;

        return $this;
    }

    /**
     * Gets building_related_outdoor_space
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getBuildingRelatedOutdoorSpace()
    {
        return $this->container['building_related_outdoor_space'];
    }

    /**
     * Sets building_related_outdoor_space
     *
     * @param \Brixion\Kolibri\Model\Size|null $building_related_outdoor_space building_related_outdoor_space
     *
     * @return self
     */
    public function setBuildingRelatedOutdoorSpace($building_related_outdoor_space)
    {
        if (is_null($building_related_outdoor_space)) {
            throw new \InvalidArgumentException('non-nullable building_related_outdoor_space cannot be null');
        }
        $this->container['building_related_outdoor_space'] = $building_related_outdoor_space;

        return $this;
    }

    /**
     * Gets contents
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param \Brixion\Kolibri\Model\Size|null $contents contents
     *
     * @return self
     */
    public function setContents($contents)
    {
        if (is_null($contents)) {
            throw new \InvalidArgumentException('non-nullable contents cannot be null');
        }
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets count_of_hotelrooms
     *
     * @return int|null
     */
    public function getCountOfHotelrooms()
    {
        return $this->container['count_of_hotelrooms'];
    }

    /**
     * Sets count_of_hotelrooms
     *
     * @param int|null $count_of_hotelrooms count_of_hotelrooms
     *
     * @return self
     */
    public function setCountOfHotelrooms($count_of_hotelrooms)
    {
        if (is_null($count_of_hotelrooms)) {
            throw new \InvalidArgumentException('non-nullable count_of_hotelrooms cannot be null');
        }
        $this->container['count_of_hotelrooms'] = $count_of_hotelrooms;

        return $this;
    }

    /**
     * Gets current_destinationd
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getCurrentDestinationd()
    {
        return $this->container['current_destinationd'];
    }

    /**
     * Sets current_destinationd
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $current_destinationd current_destinationd
     *
     * @return self
     */
    public function setCurrentDestinationd($current_destinationd)
    {
        if (is_null($current_destinationd)) {
            throw new \InvalidArgumentException('non-nullable current_destinationd cannot be null');
        }
        $this->container['current_destinationd'] = $current_destinationd;

        return $this;
    }

    /**
     * Gets current_usages
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getCurrentUsages()
    {
        return $this->container['current_usages'];
    }

    /**
     * Sets current_usages
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $current_usages current_usages
     *
     * @return self
     */
    public function setCurrentUsages($current_usages)
    {
        if (is_null($current_usages)) {
            throw new \InvalidArgumentException('non-nullable current_usages cannot be null');
        }
        $this->container['current_usages'] = $current_usages;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
     * Gets drainage
     *
     * @return \Brixion\Kolibri\Model\Drainage|null
     */
    public function getDrainage()
    {
        return $this->container['drainage'];
    }

    /**
     * Sets drainage
     *
     * @param \Brixion\Kolibri\Model\Drainage|null $drainage drainage
     *
     * @return self
     */
    public function setDrainage($drainage)
    {
        if (is_null($drainage)) {
            throw new \InvalidArgumentException('non-nullable drainage cannot be null');
        }
        $this->container['drainage'] = $drainage;

        return $this;
    }

    /**
     * Gets drainage_horse_rack
     *
     * @return bool|null
     */
    public function getDrainageHorseRack()
    {
        return $this->container['drainage_horse_rack'];
    }

    /**
     * Sets drainage_horse_rack
     *
     * @param bool|null $drainage_horse_rack drainage_horse_rack
     *
     * @return self
     */
    public function setDrainageHorseRack($drainage_horse_rack)
    {
        if (is_null($drainage_horse_rack)) {
            throw new \InvalidArgumentException('non-nullable drainage_horse_rack cannot be null');
        }
        $this->container['drainage_horse_rack'] = $drainage_horse_rack;

        return $this;
    }

    /**
     * Gets energy_label
     *
     * @return \Brixion\Kolibri\Model\EnergyLabel|null
     */
    public function getEnergyLabel()
    {
        return $this->container['energy_label'];
    }

    /**
     * Sets energy_label
     *
     * @param \Brixion\Kolibri\Model\EnergyLabel|null $energy_label energy_label
     *
     * @return self
     */
    public function setEnergyLabel($energy_label)
    {
        if (is_null($energy_label)) {
            throw new \InvalidArgumentException('non-nullable energy_label cannot be null');
        }
        $this->container['energy_label'] = $energy_label;

        return $this;
    }

    /**
     * Gets exclusive_status
     *
     * @return \Brixion\Kolibri\Model\ExclusiveStatus|null
     */
    public function getExclusiveStatus()
    {
        return $this->container['exclusive_status'];
    }

    /**
     * Sets exclusive_status
     *
     * @param \Brixion\Kolibri\Model\ExclusiveStatus|null $exclusive_status exclusive_status
     *
     * @return self
     */
    public function setExclusiveStatus($exclusive_status)
    {
        if (is_null($exclusive_status)) {
            throw new \InvalidArgumentException('non-nullable exclusive_status cannot be null');
        }
        $this->container['exclusive_status'] = $exclusive_status;

        return $this;
    }

    /**
     * Gets external_storage
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getExternalStorage()
    {
        return $this->container['external_storage'];
    }

    /**
     * Sets external_storage
     *
     * @param \Brixion\Kolibri\Model\Size|null $external_storage external_storage
     *
     * @return self
     */
    public function setExternalStorage($external_storage)
    {
        if (is_null($external_storage)) {
            throw new \InvalidArgumentException('non-nullable external_storage cannot be null');
        }
        $this->container['external_storage'] = $external_storage;

        return $this;
    }

    /**
     * Gets facilities
     *
     * @return \Brixion\Kolibri\Model\OutdoorAreaFacility[]|null
     */
    public function getFacilities()
    {
        return $this->container['facilities'];
    }

    /**
     * Sets facilities
     *
     * @param \Brixion\Kolibri\Model\OutdoorAreaFacility[]|null $facilities facilities
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
     * Gets fastfood_count_of_seats
     *
     * @return int|null
     */
    public function getFastfoodCountOfSeats()
    {
        return $this->container['fastfood_count_of_seats'];
    }

    /**
     * Sets fastfood_count_of_seats
     *
     * @param int|null $fastfood_count_of_seats fastfood_count_of_seats
     *
     * @return self
     */
    public function setFastfoodCountOfSeats($fastfood_count_of_seats)
    {
        if (is_null($fastfood_count_of_seats)) {
            throw new \InvalidArgumentException('non-nullable fastfood_count_of_seats cannot be null');
        }
        $this->container['fastfood_count_of_seats'] = $fastfood_count_of_seats;

        return $this;
    }

    /**
     * Gets fastfood_hospitality_industry_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getFastfoodHospitalityIndustryArea()
    {
        return $this->container['fastfood_hospitality_industry_area'];
    }

    /**
     * Sets fastfood_hospitality_industry_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $fastfood_hospitality_industry_area fastfood_hospitality_industry_area
     *
     * @return self
     */
    public function setFastfoodHospitalityIndustryArea($fastfood_hospitality_industry_area)
    {
        if (is_null($fastfood_hospitality_industry_area)) {
            throw new \InvalidArgumentException('non-nullable fastfood_hospitality_industry_area cannot be null');
        }
        $this->container['fastfood_hospitality_industry_area'] = $fastfood_hospitality_industry_area;

        return $this;
    }

    /**
     * Gets features
     *
     * @return \Brixion\Kolibri\Model\FeatureCategory[]|null
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param \Brixion\Kolibri\Model\FeatureCategory[]|null $features features
     *
     * @return self
     */
    public function setFeatures($features)
    {
        if (is_null($features)) {
            throw new \InvalidArgumentException('non-nullable features cannot be null');
        }
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets floor_level
     *
     * @return int|null
     */
    public function getFloorLevel()
    {
        return $this->container['floor_level'];
    }

    /**
     * Sets floor_level
     *
     * @param int|null $floor_level floor_level
     *
     * @return self
     */
    public function setFloorLevel($floor_level)
    {
        if (is_null($floor_level)) {
            throw new \InvalidArgumentException('non-nullable floor_level cannot be null');
        }
        $this->container['floor_level'] = $floor_level;

        return $this;
    }

    /**
     * Gets floor_load
     *
     * @return float|null
     */
    public function getFloorLoad()
    {
        return $this->container['floor_load'];
    }

    /**
     * Sets floor_load
     *
     * @param float|null $floor_load floor_load
     *
     * @return self
     */
    public function setFloorLoad($floor_load)
    {
        if (is_null($floor_load)) {
            throw new \InvalidArgumentException('non-nullable floor_load cannot be null');
        }
        $this->container['floor_load'] = $floor_load;

        return $this;
    }

    /**
     * Gets floors
     *
     * @return \Brixion\Kolibri\Model\Floor[]|null
     */
    public function getFloors()
    {
        return $this->container['floors'];
    }

    /**
     * Sets floors
     *
     * @param \Brixion\Kolibri\Model\Floor[]|null $floors floors
     *
     * @return self
     */
    public function setFloors($floors)
    {
        if (is_null($floors)) {
            throw new \InvalidArgumentException('non-nullable floors cannot be null');
        }
        $this->container['floors'] = $floors;

        return $this;
    }

    /**
     * Gets free_height
     *
     * @return float|null
     */
    public function getFreeHeight()
    {
        return $this->container['free_height'];
    }

    /**
     * Sets free_height
     *
     * @param float|null $free_height free_height
     *
     * @return self
     */
    public function setFreeHeight($free_height)
    {
        if (is_null($free_height)) {
            throw new \InvalidArgumentException('non-nullable free_height cannot be null');
        }
        $this->container['free_height'] = $free_height;

        return $this;
    }

    /**
     * Gets free_overcurrent
     *
     * @return float|null
     */
    public function getFreeOvercurrent()
    {
        return $this->container['free_overcurrent'];
    }

    /**
     * Sets free_overcurrent
     *
     * @param float|null $free_overcurrent free_overcurrent
     *
     * @return self
     */
    public function setFreeOvercurrent($free_overcurrent)
    {
        if (is_null($free_overcurrent)) {
            throw new \InvalidArgumentException('non-nullable free_overcurrent cannot be null');
        }
        $this->container['free_overcurrent'] = $free_overcurrent;

        return $this;
    }

    /**
     * Gets front_width
     *
     * @return float|null
     */
    public function getFrontWidth()
    {
        return $this->container['front_width'];
    }

    /**
     * Sets front_width
     *
     * @param float|null $front_width front_width
     *
     * @return self
     */
    public function setFrontWidth($front_width)
    {
        if (is_null($front_width)) {
            throw new \InvalidArgumentException('non-nullable front_width cannot be null');
        }
        $this->container['front_width'] = $front_width;

        return $this;
    }

    /**
     * Gets garages
     *
     * @return \Brixion\Kolibri\Model\Garage[]|null
     */
    public function getGarages()
    {
        return $this->container['garages'];
    }

    /**
     * Sets garages
     *
     * @param \Brixion\Kolibri\Model\Garage[]|null $garages garages
     *
     * @return self
     */
    public function setGarages($garages)
    {
        if (is_null($garages)) {
            throw new \InvalidArgumentException('non-nullable garages cannot be null');
        }
        $this->container['garages'] = $garages;

        return $this;
    }

    /**
     * Gets gardens
     *
     * @return \Brixion\Kolibri\Model\Garden[]|null
     */
    public function getGardens()
    {
        return $this->container['gardens'];
    }

    /**
     * Sets gardens
     *
     * @param \Brixion\Kolibri\Model\Garden[]|null $gardens gardens
     *
     * @return self
     */
    public function setGardens($gardens)
    {
        if (is_null($gardens)) {
            throw new \InvalidArgumentException('non-nullable gardens cannot be null');
        }
        $this->container['gardens'] = $gardens;

        return $this;
    }

    /**
     * Gets ground_property
     *
     * @return \Brixion\Kolibri\Model\GroundProperty|null
     */
    public function getGroundProperty()
    {
        return $this->container['ground_property'];
    }

    /**
     * Sets ground_property
     *
     * @param \Brixion\Kolibri\Model\GroundProperty|null $ground_property ground_property
     *
     * @return self
     */
    public function setGroundProperty($ground_property)
    {
        if (is_null($ground_property)) {
            throw new \InvalidArgumentException('non-nullable ground_property cannot be null');
        }
        $this->container['ground_property'] = $ground_property;

        return $this;
    }

    /**
     * Gets ground_usage
     *
     * @return \Brixion\Kolibri\Model\GroundUsage|null
     */
    public function getGroundUsage()
    {
        return $this->container['ground_usage'];
    }

    /**
     * Sets ground_usage
     *
     * @param \Brixion\Kolibri\Model\GroundUsage|null $ground_usage ground_usage
     *
     * @return self
     */
    public function setGroundUsage($ground_usage)
    {
        if (is_null($ground_usage)) {
            throw new \InvalidArgumentException('non-nullable ground_usage cannot be null');
        }
        $this->container['ground_usage'] = $ground_usage;

        return $this;
    }

    /**
     * Gets alv_main_plot_destination
     *
     * @return \Brixion\Kolibri\Model\AlvBuildingPlotDestination|null
     */
    public function getAlvMainPlotDestination()
    {
        return $this->container['alv_main_plot_destination'];
    }

    /**
     * Sets alv_main_plot_destination
     *
     * @param \Brixion\Kolibri\Model\AlvBuildingPlotDestination|null $alv_main_plot_destination alv_main_plot_destination
     *
     * @return self
     */
    public function setAlvMainPlotDestination($alv_main_plot_destination)
    {
        if (is_null($alv_main_plot_destination)) {
            throw new \InvalidArgumentException('non-nullable alv_main_plot_destination cannot be null');
        }
        $this->container['alv_main_plot_destination'] = $alv_main_plot_destination;

        return $this;
    }

    /**
     * Gets has_cable_tv
     *
     * @return bool|null
     */
    public function getHasCableTv()
    {
        return $this->container['has_cable_tv'];
    }

    /**
     * Sets has_cable_tv
     *
     * @param bool|null $has_cable_tv has_cable_tv
     *
     * @return self
     */
    public function setHasCableTv($has_cable_tv)
    {
        if (is_null($has_cable_tv)) {
            throw new \InvalidArgumentException('non-nullable has_cable_tv cannot be null');
        }
        $this->container['has_cable_tv'] = $has_cable_tv;

        return $this;
    }

    /**
     * Gets has_combi_boiler
     *
     * @return bool|null
     */
    public function getHasCombiBoiler()
    {
        return $this->container['has_combi_boiler'];
    }

    /**
     * Sets has_combi_boiler
     *
     * @param bool|null $has_combi_boiler has_combi_boiler
     *
     * @return self
     */
    public function setHasCombiBoiler($has_combi_boiler)
    {
        if (is_null($has_combi_boiler)) {
            throw new \InvalidArgumentException('non-nullable has_combi_boiler cannot be null');
        }
        $this->container['has_combi_boiler'] = $has_combi_boiler;

        return $this;
    }

    /**
     * Gets has_drainage
     *
     * @return bool|null
     */
    public function getHasDrainage()
    {
        return $this->container['has_drainage'];
    }

    /**
     * Sets has_drainage
     *
     * @param bool|null $has_drainage has_drainage
     *
     * @return self
     */
    public function setHasDrainage($has_drainage)
    {
        if (is_null($has_drainage)) {
            throw new \InvalidArgumentException('non-nullable has_drainage cannot be null');
        }
        $this->container['has_drainage'] = $has_drainage;

        return $this;
    }

    /**
     * Gets has_electricity_connection
     *
     * @return bool|null
     */
    public function getHasElectricityConnection()
    {
        return $this->container['has_electricity_connection'];
    }

    /**
     * Sets has_electricity_connection
     *
     * @param bool|null $has_electricity_connection has_electricity_connection
     *
     * @return self
     */
    public function setHasElectricityConnection($has_electricity_connection)
    {
        if (is_null($has_electricity_connection)) {
            throw new \InvalidArgumentException('non-nullable has_electricity_connection cannot be null');
        }
        $this->container['has_electricity_connection'] = $has_electricity_connection;

        return $this;
    }

    /**
     * Gets has_electric_power
     *
     * @return bool|null
     */
    public function getHasElectricPower()
    {
        return $this->container['has_electric_power'];
    }

    /**
     * Sets has_electric_power
     *
     * @param bool|null $has_electric_power has_electric_power
     *
     * @return self
     */
    public function setHasElectricPower($has_electric_power)
    {
        if (is_null($has_electric_power)) {
            throw new \InvalidArgumentException('non-nullable has_electric_power cannot be null');
        }
        $this->container['has_electric_power'] = $has_electric_power;

        return $this;
    }

    /**
     * Gets has_gas_connection
     *
     * @return bool|null
     */
    public function getHasGasConnection()
    {
        return $this->container['has_gas_connection'];
    }

    /**
     * Sets has_gas_connection
     *
     * @param bool|null $has_gas_connection has_gas_connection
     *
     * @return self
     */
    public function setHasGasConnection($has_gas_connection)
    {
        if (is_null($has_gas_connection)) {
            throw new \InvalidArgumentException('non-nullable has_gas_connection cannot be null');
        }
        $this->container['has_gas_connection'] = $has_gas_connection;

        return $this;
    }

    /**
     * Gets has_hygiene_barrier
     *
     * @return bool|null
     */
    public function getHasHygieneBarrier()
    {
        return $this->container['has_hygiene_barrier'];
    }

    /**
     * Sets has_hygiene_barrier
     *
     * @param bool|null $has_hygiene_barrier has_hygiene_barrier
     *
     * @return self
     */
    public function setHasHygieneBarrier($has_hygiene_barrier)
    {
        if (is_null($has_hygiene_barrier)) {
            throw new \InvalidArgumentException('non-nullable has_hygiene_barrier cannot be null');
        }
        $this->container['has_hygiene_barrier'] = $has_hygiene_barrier;

        return $this;
    }

    /**
     * Gets has_internet_connection
     *
     * @return bool|null
     */
    public function getHasInternetConnection()
    {
        return $this->container['has_internet_connection'];
    }

    /**
     * Sets has_internet_connection
     *
     * @param bool|null $has_internet_connection has_internet_connection
     *
     * @return self
     */
    public function setHasInternetConnection($has_internet_connection)
    {
        if (is_null($has_internet_connection)) {
            throw new \InvalidArgumentException('non-nullable has_internet_connection cannot be null');
        }
        $this->container['has_internet_connection'] = $has_internet_connection;

        return $this;
    }

    /**
     * Gets has_office_space
     *
     * @return bool|null
     */
    public function getHasOfficeSpace()
    {
        return $this->container['has_office_space'];
    }

    /**
     * Sets has_office_space
     *
     * @param bool|null $has_office_space has_office_space
     *
     * @return self
     */
    public function setHasOfficeSpace($has_office_space)
    {
        if (is_null($has_office_space)) {
            throw new \InvalidArgumentException('non-nullable has_office_space cannot be null');
        }
        $this->container['has_office_space'] = $has_office_space;

        return $this;
    }

    /**
     * Gets has_open_porch
     *
     * @return bool|null
     */
    public function getHasOpenPorch()
    {
        return $this->container['has_open_porch'];
    }

    /**
     * Sets has_open_porch
     *
     * @param bool|null $has_open_porch has_open_porch
     *
     * @return self
     */
    public function setHasOpenPorch($has_open_porch)
    {
        if (is_null($has_open_porch)) {
            throw new \InvalidArgumentException('non-nullable has_open_porch cannot be null');
        }
        $this->container['has_open_porch'] = $has_open_porch;

        return $this;
    }

    /**
     * Gets has_own_entrance
     *
     * @return bool|null
     */
    public function getHasOwnEntrance()
    {
        return $this->container['has_own_entrance'];
    }

    /**
     * Sets has_own_entrance
     *
     * @param bool|null $has_own_entrance has_own_entrance
     *
     * @return self
     */
    public function setHasOwnEntrance($has_own_entrance)
    {
        if (is_null($has_own_entrance)) {
            throw new \InvalidArgumentException('non-nullable has_own_entrance cannot be null');
        }
        $this->container['has_own_entrance'] = $has_own_entrance;

        return $this;
    }

    /**
     * Gets has_owners_association_buildings_insurance
     *
     * @return bool|null
     */
    public function getHasOwnersAssociationBuildingsInsurance()
    {
        return $this->container['has_owners_association_buildings_insurance'];
    }

    /**
     * Sets has_owners_association_buildings_insurance
     *
     * @param bool|null $has_owners_association_buildings_insurance has_owners_association_buildings_insurance
     *
     * @return self
     */
    public function setHasOwnersAssociationBuildingsInsurance($has_owners_association_buildings_insurance)
    {
        if (is_null($has_owners_association_buildings_insurance)) {
            throw new \InvalidArgumentException('non-nullable has_owners_association_buildings_insurance cannot be null');
        }
        $this->container['has_owners_association_buildings_insurance'] = $has_owners_association_buildings_insurance;

        return $this;
    }

    /**
     * Gets has_owners_association_maintenance_expectations
     *
     * @return bool|null
     */
    public function getHasOwnersAssociationMaintenanceExpectations()
    {
        return $this->container['has_owners_association_maintenance_expectations'];
    }

    /**
     * Sets has_owners_association_maintenance_expectations
     *
     * @param bool|null $has_owners_association_maintenance_expectations has_owners_association_maintenance_expectations
     *
     * @return self
     */
    public function setHasOwnersAssociationMaintenanceExpectations($has_owners_association_maintenance_expectations)
    {
        if (is_null($has_owners_association_maintenance_expectations)) {
            throw new \InvalidArgumentException('non-nullable has_owners_association_maintenance_expectations cannot be null');
        }
        $this->container['has_owners_association_maintenance_expectations'] = $has_owners_association_maintenance_expectations;

        return $this;
    }

    /**
     * Gets has_owners_association_multiple_years_maintenance_plan
     *
     * @return bool|null
     */
    public function getHasOwnersAssociationMultipleYearsMaintenancePlan()
    {
        return $this->container['has_owners_association_multiple_years_maintenance_plan'];
    }

    /**
     * Sets has_owners_association_multiple_years_maintenance_plan
     *
     * @param bool|null $has_owners_association_multiple_years_maintenance_plan has_owners_association_multiple_years_maintenance_plan
     *
     * @return self
     */
    public function setHasOwnersAssociationMultipleYearsMaintenancePlan($has_owners_association_multiple_years_maintenance_plan)
    {
        if (is_null($has_owners_association_multiple_years_maintenance_plan)) {
            throw new \InvalidArgumentException('non-nullable has_owners_association_multiple_years_maintenance_plan cannot be null');
        }
        $this->container['has_owners_association_multiple_years_maintenance_plan'] = $has_owners_association_multiple_years_maintenance_plan;

        return $this;
    }

    /**
     * Gets has_owners_association_periodic_contribution
     *
     * @return bool|null
     */
    public function getHasOwnersAssociationPeriodicContribution()
    {
        return $this->container['has_owners_association_periodic_contribution'];
    }

    /**
     * Sets has_owners_association_periodic_contribution
     *
     * @param bool|null $has_owners_association_periodic_contribution has_owners_association_periodic_contribution
     *
     * @return self
     */
    public function setHasOwnersAssociationPeriodicContribution($has_owners_association_periodic_contribution)
    {
        if (is_null($has_owners_association_periodic_contribution)) {
            throw new \InvalidArgumentException('non-nullable has_owners_association_periodic_contribution cannot be null');
        }
        $this->container['has_owners_association_periodic_contribution'] = $has_owners_association_periodic_contribution;

        return $this;
    }

    /**
     * Gets has_owners_association_reserve_fund
     *
     * @return bool|null
     */
    public function getHasOwnersAssociationReserveFund()
    {
        return $this->container['has_owners_association_reserve_fund'];
    }

    /**
     * Sets has_owners_association_reserve_fund
     *
     * @param bool|null $has_owners_association_reserve_fund has_owners_association_reserve_fund
     *
     * @return self
     */
    public function setHasOwnersAssociationReserveFund($has_owners_association_reserve_fund)
    {
        if (is_null($has_owners_association_reserve_fund)) {
            throw new \InvalidArgumentException('non-nullable has_owners_association_reserve_fund cannot be null');
        }
        $this->container['has_owners_association_reserve_fund'] = $has_owners_association_reserve_fund;

        return $this;
    }

    /**
     * Gets has_owners_association_yearly_meeting
     *
     * @return bool|null
     */
    public function getHasOwnersAssociationYearlyMeeting()
    {
        return $this->container['has_owners_association_yearly_meeting'];
    }

    /**
     * Sets has_owners_association_yearly_meeting
     *
     * @param bool|null $has_owners_association_yearly_meeting has_owners_association_yearly_meeting
     *
     * @return self
     */
    public function setHasOwnersAssociationYearlyMeeting($has_owners_association_yearly_meeting)
    {
        if (is_null($has_owners_association_yearly_meeting)) {
            throw new \InvalidArgumentException('non-nullable has_owners_association_yearly_meeting cannot be null');
        }
        $this->container['has_owners_association_yearly_meeting'] = $has_owners_association_yearly_meeting;

        return $this;
    }

    /**
     * Gets has_road_connection
     *
     * @return bool|null
     */
    public function getHasRoadConnection()
    {
        return $this->container['has_road_connection'];
    }

    /**
     * Sets has_road_connection
     *
     * @param bool|null $has_road_connection has_road_connection
     *
     * @return self
     */
    public function setHasRoadConnection($has_road_connection)
    {
        if (is_null($has_road_connection)) {
            throw new \InvalidArgumentException('non-nullable has_road_connection cannot be null');
        }
        $this->container['has_road_connection'] = $has_road_connection;

        return $this;
    }

    /**
     * Gets has_septic_tank
     *
     * @return bool|null
     */
    public function getHasSepticTank()
    {
        return $this->container['has_septic_tank'];
    }

    /**
     * Sets has_septic_tank
     *
     * @param bool|null $has_septic_tank has_septic_tank
     *
     * @return self
     */
    public function setHasSepticTank($has_septic_tank)
    {
        if (is_null($has_septic_tank)) {
            throw new \InvalidArgumentException('non-nullable has_septic_tank cannot be null');
        }
        $this->container['has_septic_tank'] = $has_septic_tank;

        return $this;
    }

    /**
     * Gets has_sewage_connection
     *
     * @return bool|null
     */
    public function getHasSewageConnection()
    {
        return $this->container['has_sewage_connection'];
    }

    /**
     * Sets has_sewage_connection
     *
     * @param bool|null $has_sewage_connection has_sewage_connection
     *
     * @return self
     */
    public function setHasSewageConnection($has_sewage_connection)
    {
        if (is_null($has_sewage_connection)) {
            throw new \InvalidArgumentException('non-nullable has_sewage_connection cannot be null');
        }
        $this->container['has_sewage_connection'] = $has_sewage_connection;

        return $this;
    }

    /**
     * Gets has_tank
     *
     * @return bool|null
     */
    public function getHasTank()
    {
        return $this->container['has_tank'];
    }

    /**
     * Sets has_tank
     *
     * @param bool|null $has_tank has_tank
     *
     * @return self
     */
    public function setHasTank($has_tank)
    {
        if (is_null($has_tank)) {
            throw new \InvalidArgumentException('non-nullable has_tank cannot be null');
        }
        $this->container['has_tank'] = $has_tank;

        return $this;
    }

    /**
     * Gets has_terrain
     *
     * @return bool|null
     */
    public function getHasTerrain()
    {
        return $this->container['has_terrain'];
    }

    /**
     * Sets has_terrain
     *
     * @param bool|null $has_terrain has_terrain
     *
     * @return self
     */
    public function setHasTerrain($has_terrain)
    {
        if (is_null($has_terrain)) {
            throw new \InvalidArgumentException('non-nullable has_terrain cannot be null');
        }
        $this->container['has_terrain'] = $has_terrain;

        return $this;
    }

    /**
     * Gets has_ventilation
     *
     * @return bool|null
     */
    public function getHasVentilation()
    {
        return $this->container['has_ventilation'];
    }

    /**
     * Sets has_ventilation
     *
     * @param bool|null $has_ventilation has_ventilation
     *
     * @return self
     */
    public function setHasVentilation($has_ventilation)
    {
        if (is_null($has_ventilation)) {
            throw new \InvalidArgumentException('non-nullable has_ventilation cannot be null');
        }
        $this->container['has_ventilation'] = $has_ventilation;

        return $this;
    }

    /**
     * Gets has_water_connection
     *
     * @return bool|null
     */
    public function getHasWaterConnection()
    {
        return $this->container['has_water_connection'];
    }

    /**
     * Sets has_water_connection
     *
     * @param bool|null $has_water_connection has_water_connection
     *
     * @return self
     */
    public function setHasWaterConnection($has_water_connection)
    {
        if (is_null($has_water_connection)) {
            throw new \InvalidArgumentException('non-nullable has_water_connection cannot be null');
        }
        $this->container['has_water_connection'] = $has_water_connection;

        return $this;
    }

    /**
     * Gets has_house
     *
     * @return bool|null
     */
    public function getHasHouse()
    {
        return $this->container['has_house'];
    }

    /**
     * Sets has_house
     *
     * @param bool|null $has_house has_house
     *
     * @return self
     */
    public function setHasHouse($has_house)
    {
        if (is_null($has_house)) {
            throw new \InvalidArgumentException('non-nullable has_house cannot be null');
        }
        $this->container['has_house'] = $has_house;

        return $this;
    }

    /**
     * Gets heating
     *
     * @return \Brixion\Kolibri\Model\HeatingMethod[]|null
     */
    public function getHeating()
    {
        return $this->container['heating'];
    }

    /**
     * Sets heating
     *
     * @param \Brixion\Kolibri\Model\HeatingMethod[]|null $heating heating
     *
     * @return self
     */
    public function setHeating($heating)
    {
        if (is_null($heating)) {
            throw new \InvalidArgumentException('non-nullable heating cannot be null');
        }
        $this->container['heating'] = $heating;

        return $this;
    }

    /**
     * Gets home_plot
     *
     * @return bool|null
     */
    public function getHomePlot()
    {
        return $this->container['home_plot'];
    }

    /**
     * Sets home_plot
     *
     * @param bool|null $home_plot home_plot
     *
     * @return self
     */
    public function setHomePlot($home_plot)
    {
        if (is_null($home_plot)) {
            throw new \InvalidArgumentException('non-nullable home_plot cannot be null');
        }
        $this->container['home_plot'] = $home_plot;

        return $this;
    }

    /**
     * Gets horse_company_subtype
     *
     * @return \Brixion\Kolibri\Model\HorseCompanySubtype|null
     */
    public function getHorseCompanySubtype()
    {
        return $this->container['horse_company_subtype'];
    }

    /**
     * Sets horse_company_subtype
     *
     * @param \Brixion\Kolibri\Model\HorseCompanySubtype|null $horse_company_subtype horse_company_subtype
     *
     * @return self
     */
    public function setHorseCompanySubtype($horse_company_subtype)
    {
        if (is_null($horse_company_subtype)) {
            throw new \InvalidArgumentException('non-nullable horse_company_subtype cannot be null');
        }
        $this->container['horse_company_subtype'] = $horse_company_subtype;

        return $this;
    }

    /**
     * Gets horse_trough_location
     *
     * @return \Brixion\Kolibri\Model\HorseTroughLocation|null
     */
    public function getHorseTroughLocation()
    {
        return $this->container['horse_trough_location'];
    }

    /**
     * Sets horse_trough_location
     *
     * @param \Brixion\Kolibri\Model\HorseTroughLocation|null $horse_trough_location horse_trough_location
     *
     * @return self
     */
    public function setHorseTroughLocation($horse_trough_location)
    {
        if (is_null($horse_trough_location)) {
            throw new \InvalidArgumentException('non-nullable horse_trough_location cannot be null');
        }
        $this->container['horse_trough_location'] = $horse_trough_location;

        return $this;
    }

    /**
     * Gets horticultural_company_type
     *
     * @return \Brixion\Kolibri\Model\HorticulturalCompanyType|null
     */
    public function getHorticulturalCompanyType()
    {
        return $this->container['horticultural_company_type'];
    }

    /**
     * Sets horticultural_company_type
     *
     * @param \Brixion\Kolibri\Model\HorticulturalCompanyType|null $horticultural_company_type horticultural_company_type
     *
     * @return self
     */
    public function setHorticulturalCompanyType($horticultural_company_type)
    {
        if (is_null($horticultural_company_type)) {
            throw new \InvalidArgumentException('non-nullable horticultural_company_type cannot be null');
        }
        $this->container['horticultural_company_type'] = $horticultural_company_type;

        return $this;
    }

    /**
     * Gets hospitality_permitted
     *
     * @return bool|null
     */
    public function getHospitalityPermitted()
    {
        return $this->container['hospitality_permitted'];
    }

    /**
     * Sets hospitality_permitted
     *
     * @param bool|null $hospitality_permitted hospitality_permitted
     *
     * @return self
     */
    public function setHospitalityPermitted($hospitality_permitted)
    {
        if (is_null($hospitality_permitted)) {
            throw new \InvalidArgumentException('non-nullable hospitality_permitted cannot be null');
        }
        $this->container['hospitality_permitted'] = $hospitality_permitted;

        return $this;
    }

    /**
     * Gets beverage_hospitality_types
     *
     * @return \Brixion\Kolibri\Model\BeverageHospitalitySectorType[]|null
     */
    public function getBeverageHospitalityTypes()
    {
        return $this->container['beverage_hospitality_types'];
    }

    /**
     * Sets beverage_hospitality_types
     *
     * @param \Brixion\Kolibri\Model\BeverageHospitalitySectorType[]|null $beverage_hospitality_types beverage_hospitality_types
     *
     * @return self
     */
    public function setBeverageHospitalityTypes($beverage_hospitality_types)
    {
        if (is_null($beverage_hospitality_types)) {
            throw new \InvalidArgumentException('non-nullable beverage_hospitality_types cannot be null');
        }
        $this->container['beverage_hospitality_types'] = $beverage_hospitality_types;

        return $this;
    }

    /**
     * Gets fastfood_hospitality_sector_types
     *
     * @return \Brixion\Kolibri\Model\FastfoodHospitalitySectorType[]|null
     */
    public function getFastfoodHospitalitySectorTypes()
    {
        return $this->container['fastfood_hospitality_sector_types'];
    }

    /**
     * Sets fastfood_hospitality_sector_types
     *
     * @param \Brixion\Kolibri\Model\FastfoodHospitalitySectorType[]|null $fastfood_hospitality_sector_types fastfood_hospitality_sector_types
     *
     * @return self
     */
    public function setFastfoodHospitalitySectorTypes($fastfood_hospitality_sector_types)
    {
        if (is_null($fastfood_hospitality_sector_types)) {
            throw new \InvalidArgumentException('non-nullable fastfood_hospitality_sector_types cannot be null');
        }
        $this->container['fastfood_hospitality_sector_types'] = $fastfood_hospitality_sector_types;

        return $this;
    }

    /**
     * Gets restaurant_hospitality_sector_types
     *
     * @return \Brixion\Kolibri\Model\RestaurantHospitalitySectorType[]|null
     */
    public function getRestaurantHospitalitySectorTypes()
    {
        return $this->container['restaurant_hospitality_sector_types'];
    }

    /**
     * Sets restaurant_hospitality_sector_types
     *
     * @param \Brixion\Kolibri\Model\RestaurantHospitalitySectorType[]|null $restaurant_hospitality_sector_types restaurant_hospitality_sector_types
     *
     * @return self
     */
    public function setRestaurantHospitalitySectorTypes($restaurant_hospitality_sector_types)
    {
        if (is_null($restaurant_hospitality_sector_types)) {
            throw new \InvalidArgumentException('non-nullable restaurant_hospitality_sector_types cannot be null');
        }
        $this->container['restaurant_hospitality_sector_types'] = $restaurant_hospitality_sector_types;

        return $this;
    }

    /**
     * Gets hotel_hospitality_sector_types
     *
     * @return \Brixion\Kolibri\Model\HotelHospitalitySectorType[]|null
     */
    public function getHotelHospitalitySectorTypes()
    {
        return $this->container['hotel_hospitality_sector_types'];
    }

    /**
     * Sets hotel_hospitality_sector_types
     *
     * @param \Brixion\Kolibri\Model\HotelHospitalitySectorType[]|null $hotel_hospitality_sector_types hotel_hospitality_sector_types
     *
     * @return self
     */
    public function setHotelHospitalitySectorTypes($hotel_hospitality_sector_types)
    {
        if (is_null($hotel_hospitality_sector_types)) {
            throw new \InvalidArgumentException('non-nullable hotel_hospitality_sector_types cannot be null');
        }
        $this->container['hotel_hospitality_sector_types'] = $hotel_hospitality_sector_types;

        return $this;
    }

    /**
     * Gets hotel_hospitality_industry_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getHotelHospitalityIndustryArea()
    {
        return $this->container['hotel_hospitality_industry_area'];
    }

    /**
     * Sets hotel_hospitality_industry_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $hotel_hospitality_industry_area hotel_hospitality_industry_area
     *
     * @return self
     */
    public function setHotelHospitalityIndustryArea($hotel_hospitality_industry_area)
    {
        if (is_null($hotel_hospitality_industry_area)) {
            throw new \InvalidArgumentException('non-nullable hotel_hospitality_industry_area cannot be null');
        }
        $this->container['hotel_hospitality_industry_area'] = $hotel_hospitality_industry_area;

        return $this;
    }

    /**
     * Gets hotel_non_hospitality_industry_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getHotelNonHospitalityIndustryArea()
    {
        return $this->container['hotel_non_hospitality_industry_area'];
    }

    /**
     * Sets hotel_non_hospitality_industry_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $hotel_non_hospitality_industry_area hotel_non_hospitality_industry_area
     *
     * @return self
     */
    public function setHotelNonHospitalityIndustryArea($hotel_non_hospitality_industry_area)
    {
        if (is_null($hotel_non_hospitality_industry_area)) {
            throw new \InvalidArgumentException('non-nullable hotel_non_hospitality_industry_area cannot be null');
        }
        $this->container['hotel_non_hospitality_industry_area'] = $hotel_non_hospitality_industry_area;

        return $this;
    }

    /**
     * Gets house_characteristic
     *
     * @return \Brixion\Kolibri\Model\HouseCharacteristic|null
     */
    public function getHouseCharacteristic()
    {
        return $this->container['house_characteristic'];
    }

    /**
     * Sets house_characteristic
     *
     * @param \Brixion\Kolibri\Model\HouseCharacteristic|null $house_characteristic house_characteristic
     *
     * @return self
     */
    public function setHouseCharacteristic($house_characteristic)
    {
        if (is_null($house_characteristic)) {
            throw new \InvalidArgumentException('non-nullable house_characteristic cannot be null');
        }
        $this->container['house_characteristic'] = $house_characteristic;

        return $this;
    }

    /**
     * Gets house_sort
     *
     * @return \Brixion\Kolibri\Model\HouseSort|null
     */
    public function getHouseSort()
    {
        return $this->container['house_sort'];
    }

    /**
     * Sets house_sort
     *
     * @param \Brixion\Kolibri\Model\HouseSort|null $house_sort house_sort
     *
     * @return self
     */
    public function setHouseSort($house_sort)
    {
        if (is_null($house_sort)) {
            throw new \InvalidArgumentException('non-nullable house_sort cannot be null');
        }
        $this->container['house_sort'] = $house_sort;

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
     * Gets in_dense_hospitality_area
     *
     * @return bool|null
     */
    public function getInDenseHospitalityArea()
    {
        return $this->container['in_dense_hospitality_area'];
    }

    /**
     * Sets in_dense_hospitality_area
     *
     * @param bool|null $in_dense_hospitality_area in_dense_hospitality_area
     *
     * @return self
     */
    public function setInDenseHospitalityArea($in_dense_hospitality_area)
    {
        if (is_null($in_dense_hospitality_area)) {
            throw new \InvalidArgumentException('non-nullable in_dense_hospitality_area cannot be null');
        }
        $this->container['in_dense_hospitality_area'] = $in_dense_hospitality_area;

        return $this;
    }

    /**
     * Gets indoor_parking_capacity
     *
     * @return int|null
     */
    public function getIndoorParkingCapacity()
    {
        return $this->container['indoor_parking_capacity'];
    }

    /**
     * Sets indoor_parking_capacity
     *
     * @param int|null $indoor_parking_capacity indoor_parking_capacity
     *
     * @return self
     */
    public function setIndoorParkingCapacity($indoor_parking_capacity)
    {
        if (is_null($indoor_parking_capacity)) {
            throw new \InvalidArgumentException('non-nullable indoor_parking_capacity cannot be null');
        }
        $this->container['indoor_parking_capacity'] = $indoor_parking_capacity;

        return $this;
    }

    /**
     * Gets industrial_building_facilities
     *
     * @return \Brixion\Kolibri\Model\IndustrialBuildingFacility[]|null
     */
    public function getIndustrialBuildingFacilities()
    {
        return $this->container['industrial_building_facilities'];
    }

    /**
     * Sets industrial_building_facilities
     *
     * @param \Brixion\Kolibri\Model\IndustrialBuildingFacility[]|null $industrial_building_facilities industrial_building_facilities
     *
     * @return self
     */
    public function setIndustrialBuildingFacilities($industrial_building_facilities)
    {
        if (is_null($industrial_building_facilities)) {
            throw new \InvalidArgumentException('non-nullable industrial_building_facilities cannot be null');
        }
        $this->container['industrial_building_facilities'] = $industrial_building_facilities;

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
     * Gets insulation_types
     *
     * @return \Brixion\Kolibri\Model\InsulationType[]|null
     */
    public function getInsulationTypes()
    {
        return $this->container['insulation_types'];
    }

    /**
     * Sets insulation_types
     *
     * @param \Brixion\Kolibri\Model\InsulationType[]|null $insulation_types insulation_types
     *
     * @return self
     */
    public function setInsulationTypes($insulation_types)
    {
        if (is_null($insulation_types)) {
            throw new \InvalidArgumentException('non-nullable insulation_types cannot be null');
        }
        $this->container['insulation_types'] = $insulation_types;

        return $this;
    }

    /**
     * Gets insulation_types_barn_storage
     *
     * @return \Brixion\Kolibri\Model\InsulationType[]|null
     */
    public function getInsulationTypesBarnStorage()
    {
        return $this->container['insulation_types_barn_storage'];
    }

    /**
     * Sets insulation_types_barn_storage
     *
     * @param \Brixion\Kolibri\Model\InsulationType[]|null $insulation_types_barn_storage insulation_types_barn_storage
     *
     * @return self
     */
    public function setInsulationTypesBarnStorage($insulation_types_barn_storage)
    {
        if (is_null($insulation_types_barn_storage)) {
            throw new \InvalidArgumentException('non-nullable insulation_types_barn_storage cannot be null');
        }
        $this->container['insulation_types_barn_storage'] = $insulation_types_barn_storage;

        return $this;
    }

    /**
     * Gets in_units_from
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getInUnitsFrom()
    {
        return $this->container['in_units_from'];
    }

    /**
     * Sets in_units_from
     *
     * @param \Brixion\Kolibri\Model\Size|null $in_units_from in_units_from
     *
     * @return self
     */
    public function setInUnitsFrom($in_units_from)
    {
        if (is_null($in_units_from)) {
            throw new \InvalidArgumentException('non-nullable in_units_from cannot be null');
        }
        $this->container['in_units_from'] = $in_units_from;

        return $this;
    }

    /**
     * Gets is_barn_storage_available
     *
     * @return bool|null
     */
    public function getIsBarnStorageAvailable()
    {
        return $this->container['is_barn_storage_available'];
    }

    /**
     * Sets is_barn_storage_available
     *
     * @param bool|null $is_barn_storage_available is_barn_storage_available
     *
     * @return self
     */
    public function setIsBarnStorageAvailable($is_barn_storage_available)
    {
        if (is_null($is_barn_storage_available)) {
            throw new \InvalidArgumentException('non-nullable is_barn_storage_available cannot be null');
        }
        $this->container['is_barn_storage_available'] = $is_barn_storage_available;

        return $this;
    }

    /**
     * Gets is_biological_company
     *
     * @return bool|null
     */
    public function getIsBiologicalCompany()
    {
        return $this->container['is_biological_company'];
    }

    /**
     * Sets is_biological_company
     *
     * @param bool|null $is_biological_company is_biological_company
     *
     * @return self
     */
    public function setIsBiologicalCompany($is_biological_company)
    {
        if (is_null($is_biological_company)) {
            throw new \InvalidArgumentException('non-nullable is_biological_company cannot be null');
        }
        $this->container['is_biological_company'] = $is_biological_company;

        return $this;
    }

    /**
     * Gets is_building_ready
     *
     * @return bool|null
     */
    public function getIsBuildingReady()
    {
        return $this->container['is_building_ready'];
    }

    /**
     * Sets is_building_ready
     *
     * @param bool|null $is_building_ready is_building_ready
     *
     * @return self
     */
    public function setIsBuildingReady($is_building_ready)
    {
        if (is_null($is_building_ready)) {
            throw new \InvalidArgumentException('non-nullable is_building_ready cannot be null');
        }
        $this->container['is_building_ready'] = $is_building_ready;

        return $this;
    }

    /**
     * Gets is_home_plot
     *
     * @return bool|null
     */
    public function getIsHomePlot()
    {
        return $this->container['is_home_plot'];
    }

    /**
     * Sets is_home_plot
     *
     * @param bool|null $is_home_plot is_home_plot
     *
     * @return self
     */
    public function setIsHomePlot($is_home_plot)
    {
        if (is_null($is_home_plot)) {
            throw new \InvalidArgumentException('non-nullable is_home_plot cannot be null');
        }
        $this->container['is_home_plot'] = $is_home_plot;

        return $this;
    }

    /**
     * Gets is_house_in_need_of_refurbishment
     *
     * @return bool|null
     */
    public function getIsHouseInNeedOfRefurbishment()
    {
        return $this->container['is_house_in_need_of_refurbishment'];
    }

    /**
     * Sets is_house_in_need_of_refurbishment
     *
     * @param bool|null $is_house_in_need_of_refurbishment is_house_in_need_of_refurbishment
     *
     * @return self
     */
    public function setIsHouseInNeedOfRefurbishment($is_house_in_need_of_refurbishment)
    {
        if (is_null($is_house_in_need_of_refurbishment)) {
            throw new \InvalidArgumentException('non-nullable is_house_in_need_of_refurbishment cannot be null');
        }
        $this->container['is_house_in_need_of_refurbishment'] = $is_house_in_need_of_refurbishment;

        return $this;
    }

    /**
     * Gets is_new_estate
     *
     * @return bool|null
     */
    public function getIsNewEstate()
    {
        return $this->container['is_new_estate'];
    }

    /**
     * Sets is_new_estate
     *
     * @param bool|null $is_new_estate is_new_estate
     *
     * @return self
     */
    public function setIsNewEstate($is_new_estate)
    {
        if (is_null($is_new_estate)) {
            throw new \InvalidArgumentException('non-nullable is_new_estate cannot be null');
        }
        $this->container['is_new_estate'] = $is_new_estate;

        return $this;
    }

    /**
     * Gets is_office_space_available
     *
     * @return bool|null
     */
    public function getIsOfficeSpaceAvailable()
    {
        return $this->container['is_office_space_available'];
    }

    /**
     * Sets is_office_space_available
     *
     * @param bool|null $is_office_space_available is_office_space_available
     *
     * @return self
     */
    public function setIsOfficeSpaceAvailable($is_office_space_available)
    {
        if (is_null($is_office_space_available)) {
            throw new \InvalidArgumentException('non-nullable is_office_space_available cannot be null');
        }
        $this->container['is_office_space_available'] = $is_office_space_available;

        return $this;
    }

    /**
     * Gets is_owners_association_checklist_available
     *
     * @return bool|null
     */
    public function getIsOwnersAssociationChecklistAvailable()
    {
        return $this->container['is_owners_association_checklist_available'];
    }

    /**
     * Sets is_owners_association_checklist_available
     *
     * @param bool|null $is_owners_association_checklist_available is_owners_association_checklist_available
     *
     * @return self
     */
    public function setIsOwnersAssociationChecklistAvailable($is_owners_association_checklist_available)
    {
        if (is_null($is_owners_association_checklist_available)) {
            throw new \InvalidArgumentException('non-nullable is_owners_association_checklist_available cannot be null');
        }
        $this->container['is_owners_association_checklist_available'] = $is_owners_association_checklist_available;

        return $this;
    }

    /**
     * Gets is_owners_association_registered_kv_k
     *
     * @return bool|null
     */
    public function getIsOwnersAssociationRegisteredKvK()
    {
        return $this->container['is_owners_association_registered_kv_k'];
    }

    /**
     * Sets is_owners_association_registered_kv_k
     *
     * @param bool|null $is_owners_association_registered_kv_k is_owners_association_registered_kv_k
     *
     * @return self
     */
    public function setIsOwnersAssociationRegisteredKvK($is_owners_association_registered_kv_k)
    {
        if (is_null($is_owners_association_registered_kv_k)) {
            throw new \InvalidArgumentException('non-nullable is_owners_association_registered_kv_k cannot be null');
        }
        $this->container['is_owners_association_registered_kv_k'] = $is_owners_association_registered_kv_k;

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
     * Gets is_shared
     *
     * @return bool|null
     */
    public function getIsShared()
    {
        return $this->container['is_shared'];
    }

    /**
     * Sets is_shared
     *
     * @param bool|null $is_shared is_shared
     *
     * @return self
     */
    public function setIsShared($is_shared)
    {
        if (is_null($is_shared)) {
            throw new \InvalidArgumentException('non-nullable is_shared cannot be null');
        }
        $this->container['is_shared'] = $is_shared;

        return $this;
    }

    /**
     * Gets is_skal_certified
     *
     * @return bool|null
     */
    public function getIsSkalCertified()
    {
        return $this->container['is_skal_certified'];
    }

    /**
     * Sets is_skal_certified
     *
     * @param bool|null $is_skal_certified is_skal_certified
     *
     * @return self
     */
    public function setIsSkalCertified($is_skal_certified)
    {
        if (is_null($is_skal_certified)) {
            throw new \InvalidArgumentException('non-nullable is_skal_certified cannot be null');
        }
        $this->container['is_skal_certified'] = $is_skal_certified;

        return $this;
    }

    /**
     * Gets is_target_home
     *
     * @return bool|null
     */
    public function getIsTargetHome()
    {
        return $this->container['is_target_home'];
    }

    /**
     * Sets is_target_home
     *
     * @param bool|null $is_target_home is_target_home
     *
     * @return self
     */
    public function setIsTargetHome($is_target_home)
    {
        if (is_null($is_target_home)) {
            throw new \InvalidArgumentException('non-nullable is_target_home cannot be null');
        }
        $this->container['is_target_home'] = $is_target_home;

        return $this;
    }

    /**
     * Gets is_turnkey
     *
     * @return bool|null
     */
    public function getIsTurnkey()
    {
        return $this->container['is_turnkey'];
    }

    /**
     * Sets is_turnkey
     *
     * @param bool|null $is_turnkey is_turnkey
     *
     * @return self
     */
    public function setIsTurnkey($is_turnkey)
    {
        if (is_null($is_turnkey)) {
            throw new \InvalidArgumentException('non-nullable is_turnkey cannot be null');
        }
        $this->container['is_turnkey'] = $is_turnkey;

        return $this;
    }

    /**
     * Gets land_property_sub_type
     *
     * @return \Brixion\Kolibri\Model\LandPropertySubType|null
     */
    public function getLandPropertySubType()
    {
        return $this->container['land_property_sub_type'];
    }

    /**
     * Sets land_property_sub_type
     *
     * @param \Brixion\Kolibri\Model\LandPropertySubType|null $land_property_sub_type land_property_sub_type
     *
     * @return self
     */
    public function setLandPropertySubType($land_property_sub_type)
    {
        if (is_null($land_property_sub_type)) {
            throw new \InvalidArgumentException('non-nullable land_property_sub_type cannot be null');
        }
        $this->container['land_property_sub_type'] = $land_property_sub_type;

        return $this;
    }

    /**
     * Gets length
     *
     * @return float|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float|null $length length
     *
     * @return self
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets listing_type
     *
     * @return \Brixion\Kolibri\Model\ListingType
     */
    public function getListingType()
    {
        return $this->container['listing_type'];
    }

    /**
     * Sets listing_type
     *
     * @param \Brixion\Kolibri\Model\ListingType $listing_type Id of listingType (E.g. 'Woonhuis', 'Appartement' or 'Parkeergelegenheid').
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
     * Gets living_room_surface
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getLivingRoomSurface()
    {
        return $this->container['living_room_surface'];
    }

    /**
     * Sets living_room_surface
     *
     * @param \Brixion\Kolibri\Model\Size|null $living_room_surface living_room_surface
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
     * Gets logistic_function
     *
     * @return bool|null
     */
    public function getLogisticFunction()
    {
        return $this->container['logistic_function'];
    }

    /**
     * Sets logistic_function
     *
     * @param bool|null $logistic_function logistic_function
     *
     * @return self
     */
    public function setLogisticFunction($logistic_function)
    {
        if (is_null($logistic_function)) {
            throw new \InvalidArgumentException('non-nullable logistic_function cannot be null');
        }
        $this->container['logistic_function'] = $logistic_function;

        return $this;
    }

    /**
     * Gets loose_soil_price
     *
     * @return float|null
     */
    public function getLooseSoilPrice()
    {
        return $this->container['loose_soil_price'];
    }

    /**
     * Sets loose_soil_price
     *
     * @param float|null $loose_soil_price loose_soil_price
     *
     * @return self
     */
    public function setLooseSoilPrice($loose_soil_price)
    {
        if (is_null($loose_soil_price)) {
            throw new \InvalidArgumentException('non-nullable loose_soil_price cannot be null');
        }
        $this->container['loose_soil_price'] = $loose_soil_price;

        return $this;
    }

    /**
     * Gets lot_name
     *
     * @return string|null
     */
    public function getLotName()
    {
        return $this->container['lot_name'];
    }

    /**
     * Sets lot_name
     *
     * @param string|null $lot_name lot_name
     *
     * @return self
     */
    public function setLotName($lot_name)
    {
        if (is_null($lot_name)) {
            throw new \InvalidArgumentException('non-nullable lot_name cannot be null');
        }
        $this->container['lot_name'] = $lot_name;

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
     * Gets number_of_animal_places
     *
     * @return int|null
     */
    public function getNumberOfAnimalPlaces()
    {
        return $this->container['number_of_animal_places'];
    }

    /**
     * Sets number_of_animal_places
     *
     * @param int|null $number_of_animal_places number_of_animal_places
     *
     * @return self
     */
    public function setNumberOfAnimalPlaces($number_of_animal_places)
    {
        if (is_null($number_of_animal_places)) {
            throw new \InvalidArgumentException('non-nullable number_of_animal_places cannot be null');
        }
        $this->container['number_of_animal_places'] = $number_of_animal_places;

        return $this;
    }

    /**
     * Gets number_of_animals
     *
     * @return int|null
     */
    public function getNumberOfAnimals()
    {
        return $this->container['number_of_animals'];
    }

    /**
     * Sets number_of_animals
     *
     * @param int|null $number_of_animals number_of_animals
     *
     * @return self
     */
    public function setNumberOfAnimals($number_of_animals)
    {
        if (is_null($number_of_animals)) {
            throw new \InvalidArgumentException('non-nullable number_of_animals cannot be null');
        }
        $this->container['number_of_animals'] = $number_of_animals;

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
     * Gets number_of_bed_rooms
     *
     * @return int|null
     */
    public function getNumberOfBedRooms()
    {
        return $this->container['number_of_bed_rooms'];
    }

    /**
     * Sets number_of_bed_rooms
     *
     * @param int|null $number_of_bed_rooms number_of_bed_rooms
     *
     * @return self
     */
    public function setNumberOfBedRooms($number_of_bed_rooms)
    {
        if (is_null($number_of_bed_rooms)) {
            throw new \InvalidArgumentException('non-nullable number_of_bed_rooms cannot be null');
        }
        $this->container['number_of_bed_rooms'] = $number_of_bed_rooms;

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
     * Gets number_of_garages
     *
     * @return int|null
     */
    public function getNumberOfGarages()
    {
        return $this->container['number_of_garages'];
    }

    /**
     * Sets number_of_garages
     *
     * @param int|null $number_of_garages number_of_garages
     *
     * @return self
     */
    public function setNumberOfGarages($number_of_garages)
    {
        if (is_null($number_of_garages)) {
            throw new \InvalidArgumentException('non-nullable number_of_garages cannot be null');
        }
        $this->container['number_of_garages'] = $number_of_garages;

        return $this;
    }

    /**
     * Gets number_of_gardens
     *
     * @return int|null
     */
    public function getNumberOfGardens()
    {
        return $this->container['number_of_gardens'];
    }

    /**
     * Sets number_of_gardens
     *
     * @param int|null $number_of_gardens number_of_gardens
     *
     * @return self
     */
    public function setNumberOfGardens($number_of_gardens)
    {
        if (is_null($number_of_gardens)) {
            throw new \InvalidArgumentException('non-nullable number_of_gardens cannot be null');
        }
        $this->container['number_of_gardens'] = $number_of_gardens;

        return $this;
    }

    /**
     * Gets number_of_kitchens
     *
     * @return int|null
     */
    public function getNumberOfKitchens()
    {
        return $this->container['number_of_kitchens'];
    }

    /**
     * Sets number_of_kitchens
     *
     * @param int|null $number_of_kitchens number_of_kitchens
     *
     * @return self
     */
    public function setNumberOfKitchens($number_of_kitchens)
    {
        if (is_null($number_of_kitchens)) {
            throw new \InvalidArgumentException('non-nullable number_of_kitchens cannot be null');
        }
        $this->container['number_of_kitchens'] = $number_of_kitchens;

        return $this;
    }

    /**
     * Gets number_of_meat_pigs
     *
     * @return int|null
     */
    public function getNumberOfMeatPigs()
    {
        return $this->container['number_of_meat_pigs'];
    }

    /**
     * Sets number_of_meat_pigs
     *
     * @param int|null $number_of_meat_pigs number_of_meat_pigs
     *
     * @return self
     */
    public function setNumberOfMeatPigs($number_of_meat_pigs)
    {
        if (is_null($number_of_meat_pigs)) {
            throw new \InvalidArgumentException('non-nullable number_of_meat_pigs cannot be null');
        }
        $this->container['number_of_meat_pigs'] = $number_of_meat_pigs;

        return $this;
    }

    /**
     * Gets number_of_mooring_places_milking_cattle
     *
     * @return int|null
     */
    public function getNumberOfMooringPlacesMilkingCattle()
    {
        return $this->container['number_of_mooring_places_milking_cattle'];
    }

    /**
     * Sets number_of_mooring_places_milking_cattle
     *
     * @param int|null $number_of_mooring_places_milking_cattle number_of_mooring_places_milking_cattle
     *
     * @return self
     */
    public function setNumberOfMooringPlacesMilkingCattle($number_of_mooring_places_milking_cattle)
    {
        if (is_null($number_of_mooring_places_milking_cattle)) {
            throw new \InvalidArgumentException('non-nullable number_of_mooring_places_milking_cattle cannot be null');
        }
        $this->container['number_of_mooring_places_milking_cattle'] = $number_of_mooring_places_milking_cattle;

        return $this;
    }

    /**
     * Gets number_of_mooring_places_young_cattle
     *
     * @return int|null
     */
    public function getNumberOfMooringPlacesYoungCattle()
    {
        return $this->container['number_of_mooring_places_young_cattle'];
    }

    /**
     * Sets number_of_mooring_places_young_cattle
     *
     * @param int|null $number_of_mooring_places_young_cattle number_of_mooring_places_young_cattle
     *
     * @return self
     */
    public function setNumberOfMooringPlacesYoungCattle($number_of_mooring_places_young_cattle)
    {
        if (is_null($number_of_mooring_places_young_cattle)) {
            throw new \InvalidArgumentException('non-nullable number_of_mooring_places_young_cattle cannot be null');
        }
        $this->container['number_of_mooring_places_young_cattle'] = $number_of_mooring_places_young_cattle;

        return $this;
    }

    /**
     * Gets number_of_rooms
     *
     * @return int|null
     */
    public function getNumberOfRooms()
    {
        return $this->container['number_of_rooms'];
    }

    /**
     * Sets number_of_rooms
     *
     * @param int|null $number_of_rooms number_of_rooms
     *
     * @return self
     */
    public function setNumberOfRooms($number_of_rooms)
    {
        if (is_null($number_of_rooms)) {
            throw new \InvalidArgumentException('non-nullable number_of_rooms cannot be null');
        }
        $this->container['number_of_rooms'] = $number_of_rooms;

        return $this;
    }

    /**
     * Gets number_of_showers
     *
     * @return int|null
     */
    public function getNumberOfShowers()
    {
        return $this->container['number_of_showers'];
    }

    /**
     * Sets number_of_showers
     *
     * @param int|null $number_of_showers number_of_showers
     *
     * @return self
     */
    public function setNumberOfShowers($number_of_showers)
    {
        if (is_null($number_of_showers)) {
            throw new \InvalidArgumentException('non-nullable number_of_showers cannot be null');
        }
        $this->container['number_of_showers'] = $number_of_showers;

        return $this;
    }

    /**
     * Gets number_of_sowing_sights
     *
     * @return int|null
     */
    public function getNumberOfSowingSights()
    {
        return $this->container['number_of_sowing_sights'];
    }

    /**
     * Sets number_of_sowing_sights
     *
     * @param int|null $number_of_sowing_sights number_of_sowing_sights
     *
     * @return self
     */
    public function setNumberOfSowingSights($number_of_sowing_sights)
    {
        if (is_null($number_of_sowing_sights)) {
            throw new \InvalidArgumentException('non-nullable number_of_sowing_sights cannot be null');
        }
        $this->container['number_of_sowing_sights'] = $number_of_sowing_sights;

        return $this;
    }

    /**
     * Gets number_of_toilets
     *
     * @return int|null
     */
    public function getNumberOfToilets()
    {
        return $this->container['number_of_toilets'];
    }

    /**
     * Sets number_of_toilets
     *
     * @param int|null $number_of_toilets number_of_toilets
     *
     * @return self
     */
    public function setNumberOfToilets($number_of_toilets)
    {
        if (is_null($number_of_toilets)) {
            throw new \InvalidArgumentException('non-nullable number_of_toilets cannot be null');
        }
        $this->container['number_of_toilets'] = $number_of_toilets;

        return $this;
    }

    /**
     * Gets number_of_weaned_piglets
     *
     * @return int|null
     */
    public function getNumberOfWeanedPiglets()
    {
        return $this->container['number_of_weaned_piglets'];
    }

    /**
     * Sets number_of_weaned_piglets
     *
     * @param int|null $number_of_weaned_piglets number_of_weaned_piglets
     *
     * @return self
     */
    public function setNumberOfWeanedPiglets($number_of_weaned_piglets)
    {
        if (is_null($number_of_weaned_piglets)) {
            throw new \InvalidArgumentException('non-nullable number_of_weaned_piglets cannot be null');
        }
        $this->container['number_of_weaned_piglets'] = $number_of_weaned_piglets;

        return $this;
    }

    /**
     * Gets number_of_breeding_pigs
     *
     * @return int|null
     */
    public function getNumberOfBreedingPigs()
    {
        return $this->container['number_of_breeding_pigs'];
    }

    /**
     * Sets number_of_breeding_pigs
     *
     * @param int|null $number_of_breeding_pigs number_of_breeding_pigs
     *
     * @return self
     */
    public function setNumberOfBreedingPigs($number_of_breeding_pigs)
    {
        if (is_null($number_of_breeding_pigs)) {
            throw new \InvalidArgumentException('non-nullable number_of_breeding_pigs cannot be null');
        }
        $this->container['number_of_breeding_pigs'] = $number_of_breeding_pigs;

        return $this;
    }

    /**
     * Gets number_of_meat_pig_stables
     *
     * @return int|null
     */
    public function getNumberOfMeatPigStables()
    {
        return $this->container['number_of_meat_pig_stables'];
    }

    /**
     * Sets number_of_meat_pig_stables
     *
     * @param int|null $number_of_meat_pig_stables number_of_meat_pig_stables
     *
     * @return self
     */
    public function setNumberOfMeatPigStables($number_of_meat_pig_stables)
    {
        if (is_null($number_of_meat_pig_stables)) {
            throw new \InvalidArgumentException('non-nullable number_of_meat_pig_stables cannot be null');
        }
        $this->container['number_of_meat_pig_stables'] = $number_of_meat_pig_stables;

        return $this;
    }

    /**
     * Gets number_of_breeding_pig_stables
     *
     * @return int|null
     */
    public function getNumberOfBreedingPigStables()
    {
        return $this->container['number_of_breeding_pig_stables'];
    }

    /**
     * Sets number_of_breeding_pig_stables
     *
     * @param int|null $number_of_breeding_pig_stables number_of_breeding_pig_stables
     *
     * @return self
     */
    public function setNumberOfBreedingPigStables($number_of_breeding_pig_stables)
    {
        if (is_null($number_of_breeding_pig_stables)) {
            throw new \InvalidArgumentException('non-nullable number_of_breeding_pig_stables cannot be null');
        }
        $this->container['number_of_breeding_pig_stables'] = $number_of_breeding_pig_stables;

        return $this;
    }

    /**
     * Gets number_of_piglet_stables
     *
     * @return int|null
     */
    public function getNumberOfPigletStables()
    {
        return $this->container['number_of_piglet_stables'];
    }

    /**
     * Sets number_of_piglet_stables
     *
     * @param int|null $number_of_piglet_stables number_of_piglet_stables
     *
     * @return self
     */
    public function setNumberOfPigletStables($number_of_piglet_stables)
    {
        if (is_null($number_of_piglet_stables)) {
            throw new \InvalidArgumentException('non-nullable number_of_piglet_stables cannot be null');
        }
        $this->container['number_of_piglet_stables'] = $number_of_piglet_stables;

        return $this;
    }

    /**
     * Gets office_facilities
     *
     * @return \Brixion\Kolibri\Model\Facility[]|null
     */
    public function getOfficeFacilities()
    {
        return $this->container['office_facilities'];
    }

    /**
     * Sets office_facilities
     *
     * @param \Brixion\Kolibri\Model\Facility[]|null $office_facilities office_facilities
     *
     * @return self
     */
    public function setOfficeFacilities($office_facilities)
    {
        if (is_null($office_facilities)) {
            throw new \InvalidArgumentException('non-nullable office_facilities cannot be null');
        }
        $this->container['office_facilities'] = $office_facilities;

        return $this;
    }

    /**
     * Gets office_space_air_treatments
     *
     * @return \Brixion\Kolibri\Model\AirTreatment[]|null
     */
    public function getOfficeSpaceAirTreatments()
    {
        return $this->container['office_space_air_treatments'];
    }

    /**
     * Sets office_space_air_treatments
     *
     * @param \Brixion\Kolibri\Model\AirTreatment[]|null $office_space_air_treatments office_space_air_treatments
     *
     * @return self
     */
    public function setOfficeSpaceAirTreatments($office_space_air_treatments)
    {
        if (is_null($office_space_air_treatments)) {
            throw new \InvalidArgumentException('non-nullable office_space_air_treatments cannot be null');
        }
        $this->container['office_space_air_treatments'] = $office_space_air_treatments;

        return $this;
    }

    /**
     * Gets office_space_building_layer_number
     *
     * @return int|null
     */
    public function getOfficeSpaceBuildingLayerNumber()
    {
        return $this->container['office_space_building_layer_number'];
    }

    /**
     * Sets office_space_building_layer_number
     *
     * @param int|null $office_space_building_layer_number office_space_building_layer_number
     *
     * @return self
     */
    public function setOfficeSpaceBuildingLayerNumber($office_space_building_layer_number)
    {
        if (is_null($office_space_building_layer_number)) {
            throw new \InvalidArgumentException('non-nullable office_space_building_layer_number cannot be null');
        }
        $this->container['office_space_building_layer_number'] = $office_space_building_layer_number;

        return $this;
    }

    /**
     * Gets office_space_facilities
     *
     * @return \Brixion\Kolibri\Model\Facility[]|null
     */
    public function getOfficeSpaceFacilities()
    {
        return $this->container['office_space_facilities'];
    }

    /**
     * Sets office_space_facilities
     *
     * @param \Brixion\Kolibri\Model\Facility[]|null $office_space_facilities office_space_facilities
     *
     * @return self
     */
    public function setOfficeSpaceFacilities($office_space_facilities)
    {
        if (is_null($office_space_facilities)) {
            throw new \InvalidArgumentException('non-nullable office_space_facilities cannot be null');
        }
        $this->container['office_space_facilities'] = $office_space_facilities;

        return $this;
    }

    /**
     * Gets office_space_surface
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getOfficeSpaceSurface()
    {
        return $this->container['office_space_surface'];
    }

    /**
     * Sets office_space_surface
     *
     * @param \Brixion\Kolibri\Model\Size|null $office_space_surface office_space_surface
     *
     * @return self
     */
    public function setOfficeSpaceSurface($office_space_surface)
    {
        if (is_null($office_space_surface)) {
            throw new \InvalidArgumentException('non-nullable office_space_surface cannot be null');
        }
        $this->container['office_space_surface'] = $office_space_surface;

        return $this;
    }

    /**
     * Gets other_inside_spaces
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getOtherInsideSpaces()
    {
        return $this->container['other_inside_spaces'];
    }

    /**
     * Sets other_inside_spaces
     *
     * @param \Brixion\Kolibri\Model\Size|null $other_inside_spaces other_inside_spaces
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
     * Gets parking_type
     *
     * @return \Brixion\Kolibri\Model\ParkingType|null
     */
    public function getParkingType()
    {
        return $this->container['parking_type'];
    }

    /**
     * Sets parking_type
     *
     * @param \Brixion\Kolibri\Model\ParkingType|null $parking_type parking_type
     *
     * @return self
     */
    public function setParkingType($parking_type)
    {
        if (is_null($parking_type)) {
            throw new \InvalidArgumentException('non-nullable parking_type cannot be null');
        }
        $this->container['parking_type'] = $parking_type;

        return $this;
    }

    /**
     * Gets paved_percentage
     *
     * @return float|null
     */
    public function getPavedPercentage()
    {
        return $this->container['paved_percentage'];
    }

    /**
     * Sets paved_percentage
     *
     * @param float|null $paved_percentage paved_percentage
     *
     * @return self
     */
    public function setPavedPercentage($paved_percentage)
    {
        if (is_null($paved_percentage)) {
            throw new \InvalidArgumentException('non-nullable paved_percentage cannot be null');
        }
        $this->container['paved_percentage'] = $paved_percentage;

        return $this;
    }

    /**
     * Gets pavement_type
     *
     * @return \Brixion\Kolibri\Model\PavementType|null
     */
    public function getPavementType()
    {
        return $this->container['pavement_type'];
    }

    /**
     * Sets pavement_type
     *
     * @param \Brixion\Kolibri\Model\PavementType|null $pavement_type pavement_type
     *
     * @return self
     */
    public function setPavementType($pavement_type)
    {
        if (is_null($pavement_type)) {
            throw new \InvalidArgumentException('non-nullable pavement_type cannot be null');
        }
        $this->container['pavement_type'] = $pavement_type;

        return $this;
    }

    /**
     * Gets peculiarities
     *
     * @return \Brixion\Kolibri\Model\Peculiarity[]|null
     */
    public function getPeculiarities()
    {
        return $this->container['peculiarities'];
    }

    /**
     * Sets peculiarities
     *
     * @param \Brixion\Kolibri\Model\Peculiarity[]|null $peculiarities Peculiarities (in Dutch: bijzonderheden).
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
     * Gets pig_company_type
     *
     * @return \Brixion\Kolibri\Model\PigCompanyType|null
     */
    public function getPigCompanyType()
    {
        return $this->container['pig_company_type'];
    }

    /**
     * Sets pig_company_type
     *
     * @param \Brixion\Kolibri\Model\PigCompanyType|null $pig_company_type pig_company_type
     *
     * @return self
     */
    public function setPigCompanyType($pig_company_type)
    {
        if (is_null($pig_company_type)) {
            throw new \InvalidArgumentException('non-nullable pig_company_type cannot be null');
        }
        $this->container['pig_company_type'] = $pig_company_type;

        return $this;
    }

    /**
     * Gets points_of_interest
     *
     * @return \Brixion\Kolibri\Model\PointOfInterest[]|null
     */
    public function getPointsOfInterest()
    {
        return $this->container['points_of_interest'];
    }

    /**
     * Sets points_of_interest
     *
     * @param \Brixion\Kolibri\Model\PointOfInterest[]|null $points_of_interest points_of_interest
     *
     * @return self
     */
    public function setPointsOfInterest($points_of_interest)
    {
        if (is_null($points_of_interest)) {
            throw new \InvalidArgumentException('non-nullable points_of_interest cannot be null');
        }
        $this->container['points_of_interest'] = $points_of_interest;

        return $this;
    }

    /**
     * Gets pollution
     *
     * @return \Brixion\Kolibri\Model\PollutionType[]|null
     */
    public function getPollution()
    {
        return $this->container['pollution'];
    }

    /**
     * Sets pollution
     *
     * @param \Brixion\Kolibri\Model\PollutionType[]|null $pollution pollution
     *
     * @return self
     */
    public function setPollution($pollution)
    {
        if (is_null($pollution)) {
            throw new \InvalidArgumentException('non-nullable pollution cannot be null');
        }
        $this->container['pollution'] = $pollution;

        return $this;
    }

    /**
     * Gets poultry_farming_subtype
     *
     * @return \Brixion\Kolibri\Model\PoultryFarmingSubtype|null
     */
    public function getPoultryFarmingSubtype()
    {
        return $this->container['poultry_farming_subtype'];
    }

    /**
     * Sets poultry_farming_subtype
     *
     * @param \Brixion\Kolibri\Model\PoultryFarmingSubtype|null $poultry_farming_subtype poultry_farming_subtype
     *
     * @return self
     */
    public function setPoultryFarmingSubtype($poultry_farming_subtype)
    {
        if (is_null($poultry_farming_subtype)) {
            throw new \InvalidArgumentException('non-nullable poultry_farming_subtype cannot be null');
        }
        $this->container['poultry_farming_subtype'] = $poultry_farming_subtype;

        return $this;
    }

    /**
     * Gets public_oriented_services
     *
     * @return bool|null
     */
    public function getPublicOrientedServices()
    {
        return $this->container['public_oriented_services'];
    }

    /**
     * Sets public_oriented_services
     *
     * @param bool|null $public_oriented_services public_oriented_services
     *
     * @return self
     */
    public function setPublicOrientedServices($public_oriented_services)
    {
        if (is_null($public_oriented_services)) {
            throw new \InvalidArgumentException('non-nullable public_oriented_services cannot be null');
        }
        $this->container['public_oriented_services'] = $public_oriented_services;

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
     * Gets region_keys_dsv
     *
     * @return string|null
     */
    public function getRegionKeysDsv()
    {
        return $this->container['region_keys_dsv'];
    }

    /**
     * Sets region_keys_dsv
     *
     * @param string|null $region_keys_dsv region_keys_dsv
     *
     * @return self
     */
    public function setRegionKeysDsv($region_keys_dsv)
    {
        if (is_null($region_keys_dsv)) {
            throw new \InvalidArgumentException('non-nullable region_keys_dsv cannot be null');
        }
        $this->container['region_keys_dsv'] = $region_keys_dsv;

        return $this;
    }

    /**
     * Gets renovation_year
     *
     * @return \Brixion\Kolibri\Model\YearOfConstruction|null
     */
    public function getRenovationYear()
    {
        return $this->container['renovation_year'];
    }

    /**
     * Sets renovation_year
     *
     * @param \Brixion\Kolibri\Model\YearOfConstruction|null $renovation_year renovation_year
     *
     * @return self
     */
    public function setRenovationYear($renovation_year)
    {
        if (is_null($renovation_year)) {
            throw new \InvalidArgumentException('non-nullable renovation_year cannot be null');
        }
        $this->container['renovation_year'] = $renovation_year;

        return $this;
    }

    /**
     * Gets residential_building
     *
     * @return \Brixion\Kolibri\Model\ResidentialBuilding|null
     */
    public function getResidentialBuilding()
    {
        return $this->container['residential_building'];
    }

    /**
     * Sets residential_building
     *
     * @param \Brixion\Kolibri\Model\ResidentialBuilding|null $residential_building residential_building
     *
     * @return self
     */
    public function setResidentialBuilding($residential_building)
    {
        if (is_null($residential_building)) {
            throw new \InvalidArgumentException('non-nullable residential_building cannot be null');
        }
        $this->container['residential_building'] = $residential_building;

        return $this;
    }

    /**
     * Gets residential_subtype_other
     *
     * @return \Brixion\Kolibri\Model\ResidentialSubtypeOther|null
     */
    public function getResidentialSubtypeOther()
    {
        return $this->container['residential_subtype_other'];
    }

    /**
     * Sets residential_subtype_other
     *
     * @param \Brixion\Kolibri\Model\ResidentialSubtypeOther|null $residential_subtype_other residential_subtype_other
     *
     * @return self
     */
    public function setResidentialSubtypeOther($residential_subtype_other)
    {
        if (is_null($residential_subtype_other)) {
            throw new \InvalidArgumentException('non-nullable residential_subtype_other cannot be null');
        }
        $this->container['residential_subtype_other'] = $residential_subtype_other;

        return $this;
    }

    /**
     * Gets restaurant_count_of_seats
     *
     * @return int|null
     */
    public function getRestaurantCountOfSeats()
    {
        return $this->container['restaurant_count_of_seats'];
    }

    /**
     * Sets restaurant_count_of_seats
     *
     * @param int|null $restaurant_count_of_seats restaurant_count_of_seats
     *
     * @return self
     */
    public function setRestaurantCountOfSeats($restaurant_count_of_seats)
    {
        if (is_null($restaurant_count_of_seats)) {
            throw new \InvalidArgumentException('non-nullable restaurant_count_of_seats cannot be null');
        }
        $this->container['restaurant_count_of_seats'] = $restaurant_count_of_seats;

        return $this;
    }

    /**
     * Gets restaurant_hospitality_industry_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getRestaurantHospitalityIndustryArea()
    {
        return $this->container['restaurant_hospitality_industry_area'];
    }

    /**
     * Sets restaurant_hospitality_industry_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $restaurant_hospitality_industry_area restaurant_hospitality_industry_area
     *
     * @return self
     */
    public function setRestaurantHospitalityIndustryArea($restaurant_hospitality_industry_area)
    {
        if (is_null($restaurant_hospitality_industry_area)) {
            throw new \InvalidArgumentException('non-nullable restaurant_hospitality_industry_area cannot be null');
        }
        $this->container['restaurant_hospitality_industry_area'] = $restaurant_hospitality_industry_area;

        return $this;
    }

    /**
     * Gets restaurant_non_hospitality_industry_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getRestaurantNonHospitalityIndustryArea()
    {
        return $this->container['restaurant_non_hospitality_industry_area'];
    }

    /**
     * Sets restaurant_non_hospitality_industry_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $restaurant_non_hospitality_industry_area restaurant_non_hospitality_industry_area
     *
     * @return self
     */
    public function setRestaurantNonHospitalityIndustryArea($restaurant_non_hospitality_industry_area)
    {
        if (is_null($restaurant_non_hospitality_industry_area)) {
            throw new \InvalidArgumentException('non-nullable restaurant_non_hospitality_industry_area cannot be null');
        }
        $this->container['restaurant_non_hospitality_industry_area'] = $restaurant_non_hospitality_industry_area;

        return $this;
    }

    /**
     * Gets retail
     *
     * @return bool|null
     */
    public function getRetail()
    {
        return $this->container['retail'];
    }

    /**
     * Sets retail
     *
     * @param bool|null $retail retail
     *
     * @return self
     */
    public function setRetail($retail)
    {
        if (is_null($retail)) {
            throw new \InvalidArgumentException('non-nullable retail cannot be null');
        }
        $this->container['retail'] = $retail;

        return $this;
    }

    /**
     * Gets revenue_per_year
     *
     * @return float|null
     */
    public function getRevenuePerYear()
    {
        return $this->container['revenue_per_year'];
    }

    /**
     * Sets revenue_per_year
     *
     * @param float|null $revenue_per_year revenue_per_year
     *
     * @return self
     */
    public function setRevenuePerYear($revenue_per_year)
    {
        if (is_null($revenue_per_year)) {
            throw new \InvalidArgumentException('non-nullable revenue_per_year cannot be null');
        }
        $this->container['revenue_per_year'] = $revenue_per_year;

        return $this;
    }

    /**
     * Gets roof
     *
     * @return \Brixion\Kolibri\Model\Roof|null
     */
    public function getRoof()
    {
        return $this->container['roof'];
    }

    /**
     * Sets roof
     *
     * @param \Brixion\Kolibri\Model\Roof|null $roof roof
     *
     * @return self
     */
    public function setRoof($roof)
    {
        if (is_null($roof)) {
            throw new \InvalidArgumentException('non-nullable roof cannot be null');
        }
        $this->container['roof'] = $roof;

        return $this;
    }

    /**
     * Gets secondary_listing_types
     *
     * @return \Brixion\Kolibri\Model\ListingType[]|null
     */
    public function getSecondaryListingTypes()
    {
        return $this->container['secondary_listing_types'];
    }

    /**
     * Sets secondary_listing_types
     *
     * @param \Brixion\Kolibri\Model\ListingType[]|null $secondary_listing_types secondary_listing_types
     *
     * @return self
     */
    public function setSecondaryListingTypes($secondary_listing_types)
    {
        if (is_null($secondary_listing_types)) {
            throw new \InvalidArgumentException('non-nullable secondary_listing_types cannot be null');
        }
        $this->container['secondary_listing_types'] = $secondary_listing_types;

        return $this;
    }

    /**
     * Gets sector_limitation
     *
     * @return bool|null
     */
    public function getSectorLimitation()
    {
        return $this->container['sector_limitation'];
    }

    /**
     * Sets sector_limitation
     *
     * @param bool|null $sector_limitation sector_limitation
     *
     * @return self
     */
    public function setSectorLimitation($sector_limitation)
    {
        if (is_null($sector_limitation)) {
            throw new \InvalidArgumentException('non-nullable sector_limitation cannot be null');
        }
        $this->container['sector_limitation'] = $sector_limitation;

        return $this;
    }

    /**
     * Gets showroom
     *
     * @return bool|null
     */
    public function getShowroom()
    {
        return $this->container['showroom'];
    }

    /**
     * Sets showroom
     *
     * @param bool|null $showroom showroom
     *
     * @return self
     */
    public function setShowroom($showroom)
    {
        if (is_null($showroom)) {
            throw new \InvalidArgumentException('non-nullable showroom cannot be null');
        }
        $this->container['showroom'] = $showroom;

        return $this;
    }

    /**
     * Gets size
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param \Brixion\Kolibri\Model\Size|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets soil_type
     *
     * @return \Brixion\Kolibri\Model\SoilType|null
     */
    public function getSoilType()
    {
        return $this->container['soil_type'];
    }

    /**
     * Sets soil_type
     *
     * @param \Brixion\Kolibri\Model\SoilType|null $soil_type soil_type
     *
     * @return self
     */
    public function setSoilType($soil_type)
    {
        if (is_null($soil_type)) {
            throw new \InvalidArgumentException('non-nullable soil_type cannot be null');
        }
        $this->container['soil_type'] = $soil_type;

        return $this;
    }

    /**
     * Gets status_rented
     *
     * @return \Brixion\Kolibri\Model\StatusRented|null
     */
    public function getStatusRented()
    {
        return $this->container['status_rented'];
    }

    /**
     * Sets status_rented
     *
     * @param \Brixion\Kolibri\Model\StatusRented|null $status_rented status_rented
     *
     * @return self
     */
    public function setStatusRented($status_rented)
    {
        if (is_null($status_rented)) {
            throw new \InvalidArgumentException('non-nullable status_rented cannot be null');
        }
        $this->container['status_rented'] = $status_rented;

        return $this;
    }

    /**
     * Gets step_mill
     *
     * @return bool|null
     */
    public function getStepMill()
    {
        return $this->container['step_mill'];
    }

    /**
     * Sets step_mill
     *
     * @param bool|null $step_mill step_mill
     *
     * @return self
     */
    public function setStepMill($step_mill)
    {
        if (is_null($step_mill)) {
            throw new \InvalidArgumentException('non-nullable step_mill cannot be null');
        }
        $this->container['step_mill'] = $step_mill;

        return $this;
    }

    /**
     * Gets number_of_horse_boxes
     *
     * @return int|null
     */
    public function getNumberOfHorseBoxes()
    {
        return $this->container['number_of_horse_boxes'];
    }

    /**
     * Sets number_of_horse_boxes
     *
     * @param int|null $number_of_horse_boxes number_of_horse_boxes
     *
     * @return self
     */
    public function setNumberOfHorseBoxes($number_of_horse_boxes)
    {
        if (is_null($number_of_horse_boxes)) {
            throw new \InvalidArgumentException('non-nullable number_of_horse_boxes cannot be null');
        }
        $this->container['number_of_horse_boxes'] = $number_of_horse_boxes;

        return $this;
    }

    /**
     * Gets storage_has_attic
     *
     * @return bool|null
     */
    public function getStorageHasAttic()
    {
        return $this->container['storage_has_attic'];
    }

    /**
     * Sets storage_has_attic
     *
     * @param bool|null $storage_has_attic storage_has_attic
     *
     * @return self
     */
    public function setStorageHasAttic($storage_has_attic)
    {
        if (is_null($storage_has_attic)) {
            throw new \InvalidArgumentException('non-nullable storage_has_attic cannot be null');
        }
        $this->container['storage_has_attic'] = $storage_has_attic;

        return $this;
    }

    /**
     * Gets storage_has_electra
     *
     * @return bool|null
     */
    public function getStorageHasElectra()
    {
        return $this->container['storage_has_electra'];
    }

    /**
     * Sets storage_has_electra
     *
     * @param bool|null $storage_has_electra storage_has_electra
     *
     * @return self
     */
    public function setStorageHasElectra($storage_has_electra)
    {
        if (is_null($storage_has_electra)) {
            throw new \InvalidArgumentException('non-nullable storage_has_electra cannot be null');
        }
        $this->container['storage_has_electra'] = $storage_has_electra;

        return $this;
    }

    /**
     * Gets storage_has_heating
     *
     * @return bool|null
     */
    public function getStorageHasHeating()
    {
        return $this->container['storage_has_heating'];
    }

    /**
     * Sets storage_has_heating
     *
     * @param bool|null $storage_has_heating storage_has_heating
     *
     * @return self
     */
    public function setStorageHasHeating($storage_has_heating)
    {
        if (is_null($storage_has_heating)) {
            throw new \InvalidArgumentException('non-nullable storage_has_heating cannot be null');
        }
        $this->container['storage_has_heating'] = $storage_has_heating;

        return $this;
    }

    /**
     * Gets storage_has_water
     *
     * @return bool|null
     */
    public function getStorageHasWater()
    {
        return $this->container['storage_has_water'];
    }

    /**
     * Sets storage_has_water
     *
     * @param bool|null $storage_has_water storage_has_water
     *
     * @return self
     */
    public function setStorageHasWater($storage_has_water)
    {
        if (is_null($storage_has_water)) {
            throw new \InvalidArgumentException('non-nullable storage_has_water cannot be null');
        }
        $this->container['storage_has_water'] = $storage_has_water;

        return $this;
    }

    /**
     * Gets storage_insulation_types
     *
     * @return \Brixion\Kolibri\Model\InsulationType[]|null
     */
    public function getStorageInsulationTypes()
    {
        return $this->container['storage_insulation_types'];
    }

    /**
     * Sets storage_insulation_types
     *
     * @param \Brixion\Kolibri\Model\InsulationType[]|null $storage_insulation_types storage_insulation_types
     *
     * @return self
     */
    public function setStorageInsulationTypes($storage_insulation_types)
    {
        if (is_null($storage_insulation_types)) {
            throw new \InvalidArgumentException('non-nullable storage_insulation_types cannot be null');
        }
        $this->container['storage_insulation_types'] = $storage_insulation_types;

        return $this;
    }

    /**
     * Gets storage_room_type
     *
     * @return \Brixion\Kolibri\Model\StorageRoomType|null
     */
    public function getStorageRoomType()
    {
        return $this->container['storage_room_type'];
    }

    /**
     * Sets storage_room_type
     *
     * @param \Brixion\Kolibri\Model\StorageRoomType|null $storage_room_type storage_room_type
     *
     * @return self
     */
    public function setStorageRoomType($storage_room_type)
    {
        if (is_null($storage_room_type)) {
            throw new \InvalidArgumentException('non-nullable storage_room_type cannot be null');
        }
        $this->container['storage_room_type'] = $storage_room_type;

        return $this;
    }

    /**
     * Gets sub_type
     *
     * @return \Brixion\Kolibri\Model\SubTypeAlvPlot|null
     */
    public function getSubType()
    {
        return $this->container['sub_type'];
    }

    /**
     * Sets sub_type
     *
     * @param \Brixion\Kolibri\Model\SubTypeAlvPlot|null $sub_type sub_type
     *
     * @return self
     */
    public function setSubType($sub_type)
    {
        if (is_null($sub_type)) {
            throw new \InvalidArgumentException('non-nullable sub_type cannot be null');
        }
        $this->container['sub_type'] = $sub_type;

        return $this;
    }

    /**
     * Gets surface_glass_upholstery
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getSurfaceGlassUpholstery()
    {
        return $this->container['surface_glass_upholstery'];
    }

    /**
     * Sets surface_glass_upholstery
     *
     * @param \Brixion\Kolibri\Model\Size|null $surface_glass_upholstery surface_glass_upholstery
     *
     * @return self
     */
    public function setSurfaceGlassUpholstery($surface_glass_upholstery)
    {
        if (is_null($surface_glass_upholstery)) {
            throw new \InvalidArgumentException('non-nullable surface_glass_upholstery cannot be null');
        }
        $this->container['surface_glass_upholstery'] = $surface_glass_upholstery;

        return $this;
    }

    /**
     * Gets terrace
     *
     * @return bool|null
     */
    public function getTerrace()
    {
        return $this->container['terrace'];
    }

    /**
     * Sets terrace
     *
     * @param bool|null $terrace terrace
     *
     * @return self
     */
    public function setTerrace($terrace)
    {
        if (is_null($terrace)) {
            throw new \InvalidArgumentException('non-nullable terrace cannot be null');
        }
        $this->container['terrace'] = $terrace;

        return $this;
    }

    /**
     * Gets terrain_building_volume
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getTerrainBuildingVolume()
    {
        return $this->container['terrain_building_volume'];
    }

    /**
     * Sets terrain_building_volume
     *
     * @param \Brixion\Kolibri\Model\Size|null $terrain_building_volume terrain_building_volume
     *
     * @return self
     */
    public function setTerrainBuildingVolume($terrain_building_volume)
    {
        if (is_null($terrain_building_volume)) {
            throw new \InvalidArgumentException('non-nullable terrain_building_volume cannot be null');
        }
        $this->container['terrain_building_volume'] = $terrain_building_volume;

        return $this;
    }

    /**
     * Gets terrain_building_volume_area_percentage
     *
     * @return float|null
     */
    public function getTerrainBuildingVolumeAreaPercentage()
    {
        return $this->container['terrain_building_volume_area_percentage'];
    }

    /**
     * Sets terrain_building_volume_area_percentage
     *
     * @param float|null $terrain_building_volume_area_percentage terrain_building_volume_area_percentage
     *
     * @return self
     */
    public function setTerrainBuildingVolumeAreaPercentage($terrain_building_volume_area_percentage)
    {
        if (is_null($terrain_building_volume_area_percentage)) {
            throw new \InvalidArgumentException('non-nullable terrain_building_volume_area_percentage cannot be null');
        }
        $this->container['terrain_building_volume_area_percentage'] = $terrain_building_volume_area_percentage;

        return $this;
    }

    /**
     * Gets terrain_surface
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getTerrainSurface()
    {
        return $this->container['terrain_surface'];
    }

    /**
     * Sets terrain_surface
     *
     * @param \Brixion\Kolibri\Model\Size|null $terrain_surface terrain_surface
     *
     * @return self
     */
    public function setTerrainSurface($terrain_surface)
    {
        if (is_null($terrain_surface)) {
            throw new \InvalidArgumentException('non-nullable terrain_surface cannot be null');
        }
        $this->container['terrain_surface'] = $terrain_surface;

        return $this;
    }

    /**
     * Gets total_parking_capacity
     *
     * @return int|null
     */
    public function getTotalParkingCapacity()
    {
        return $this->container['total_parking_capacity'];
    }

    /**
     * Sets total_parking_capacity
     *
     * @param int|null $total_parking_capacity total_parking_capacity
     *
     * @return self
     */
    public function setTotalParkingCapacity($total_parking_capacity)
    {
        if (is_null($total_parking_capacity)) {
            throw new \InvalidArgumentException('non-nullable total_parking_capacity cannot be null');
        }
        $this->container['total_parking_capacity'] = $total_parking_capacity;

        return $this;
    }

    /**
     * Gets type_code_house
     *
     * @return \Brixion\Kolibri\Model\TypeCodeHouse|null
     */
    public function getTypeCodeHouse()
    {
        return $this->container['type_code_house'];
    }

    /**
     * Sets type_code_house
     *
     * @param \Brixion\Kolibri\Model\TypeCodeHouse|null $type_code_house type_code_house
     *
     * @return self
     */
    public function setTypeCodeHouse($type_code_house)
    {
        if (is_null($type_code_house)) {
            throw new \InvalidArgumentException('non-nullable type_code_house cannot be null');
        }
        $this->container['type_code_house'] = $type_code_house;

        return $this;
    }

    /**
     * Gets type_of_floor_floors
     *
     * @return \Brixion\Kolibri\Model\TypeOfFloor|null
     */
    public function getTypeOfFloorFloors()
    {
        return $this->container['type_of_floor_floors'];
    }

    /**
     * Sets type_of_floor_floors
     *
     * @param \Brixion\Kolibri\Model\TypeOfFloor|null $type_of_floor_floors type_of_floor_floors
     *
     * @return self
     */
    public function setTypeOfFloorFloors($type_of_floor_floors)
    {
        if (is_null($type_of_floor_floors)) {
            throw new \InvalidArgumentException('non-nullable type_of_floor_floors cannot be null');
        }
        $this->container['type_of_floor_floors'] = $type_of_floor_floors;

        return $this;
    }

    /**
     * Gets type_of_floor_ground_floor
     *
     * @return \Brixion\Kolibri\Model\TypeOfFloor|null
     */
    public function getTypeOfFloorGroundFloor()
    {
        return $this->container['type_of_floor_ground_floor'];
    }

    /**
     * Sets type_of_floor_ground_floor
     *
     * @param \Brixion\Kolibri\Model\TypeOfFloor|null $type_of_floor_ground_floor type_of_floor_ground_floor
     *
     * @return self
     */
    public function setTypeOfFloorGroundFloor($type_of_floor_ground_floor)
    {
        if (is_null($type_of_floor_ground_floor)) {
            throw new \InvalidArgumentException('non-nullable type_of_floor_ground_floor cannot be null');
        }
        $this->container['type_of_floor_ground_floor'] = $type_of_floor_ground_floor;

        return $this;
    }

    /**
     * Gets types_of_communal_area
     *
     * @return \Brixion\Kolibri\Model\TypeOfCommunualArea[]|null
     */
    public function getTypesOfCommunalArea()
    {
        return $this->container['types_of_communal_area'];
    }

    /**
     * Sets types_of_communal_area
     *
     * @param \Brixion\Kolibri\Model\TypeOfCommunualArea[]|null $types_of_communal_area types_of_communal_area
     *
     * @return self
     */
    public function setTypesOfCommunalArea($types_of_communal_area)
    {
        if (is_null($types_of_communal_area)) {
            throw new \InvalidArgumentException('non-nullable types_of_communal_area cannot be null');
        }
        $this->container['types_of_communal_area'] = $types_of_communal_area;

        return $this;
    }

    /**
     * Gets types_of_window_frames
     *
     * @return \Brixion\Kolibri\Model\TypeOfWindowFrame[]|null
     */
    public function getTypesOfWindowFrames()
    {
        return $this->container['types_of_window_frames'];
    }

    /**
     * Sets types_of_window_frames
     *
     * @param \Brixion\Kolibri\Model\TypeOfWindowFrame[]|null $types_of_window_frames types_of_window_frames
     *
     * @return self
     */
    public function setTypesOfWindowFrames($types_of_window_frames)
    {
        if (is_null($types_of_window_frames)) {
            throw new \InvalidArgumentException('non-nullable types_of_window_frames cannot be null');
        }
        $this->container['types_of_window_frames'] = $types_of_window_frames;

        return $this;
    }

    /**
     * Gets usable_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getUsableArea()
    {
        return $this->container['usable_area'];
    }

    /**
     * Sets usable_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $usable_area usable_area
     *
     * @return self
     */
    public function setUsableArea($usable_area)
    {
        if (is_null($usable_area)) {
            throw new \InvalidArgumentException('non-nullable usable_area cannot be null');
        }
        $this->container['usable_area'] = $usable_area;

        return $this;
    }

    /**
     * Gets cattle_farming_subtype
     *
     * @return \Brixion\Kolibri\Model\CattleFarmingSubtype|null
     */
    public function getCattleFarmingSubtype()
    {
        return $this->container['cattle_farming_subtype'];
    }

    /**
     * Sets cattle_farming_subtype
     *
     * @param \Brixion\Kolibri\Model\CattleFarmingSubtype|null $cattle_farming_subtype cattle_farming_subtype
     *
     * @return self
     */
    public function setCattleFarmingSubtype($cattle_farming_subtype)
    {
        if (is_null($cattle_farming_subtype)) {
            throw new \InvalidArgumentException('non-nullable cattle_farming_subtype cannot be null');
        }
        $this->container['cattle_farming_subtype'] = $cattle_farming_subtype;

        return $this;
    }

    /**
     * Gets v_vo
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getVVo()
    {
        return $this->container['v_vo'];
    }

    /**
     * Sets v_vo
     *
     * @param \Brixion\Kolibri\Model\Size|null $v_vo v_vo
     *
     * @return self
     */
    public function setVVo($v_vo)
    {
        if (is_null($v_vo)) {
            throw new \InvalidArgumentException('non-nullable v_vo cannot be null');
        }
        $this->container['v_vo'] = $v_vo;

        return $this;
    }

    /**
     * Gets warm_water_types
     *
     * @return \Brixion\Kolibri\Model\HeatingWaterMethod[]|null
     */
    public function getWarmWaterTypes()
    {
        return $this->container['warm_water_types'];
    }

    /**
     * Sets warm_water_types
     *
     * @param \Brixion\Kolibri\Model\HeatingWaterMethod[]|null $warm_water_types warm_water_types
     *
     * @return self
     */
    public function setWarmWaterTypes($warm_water_types)
    {
        if (is_null($warm_water_types)) {
            throw new \InvalidArgumentException('non-nullable warm_water_types cannot be null');
        }
        $this->container['warm_water_types'] = $warm_water_types;

        return $this;
    }

    /**
     * Gets welfare_state
     *
     * @return \Brixion\Kolibri\Model\WelfareState|null
     */
    public function getWelfareState()
    {
        return $this->container['welfare_state'];
    }

    /**
     * Sets welfare_state
     *
     * @param \Brixion\Kolibri\Model\WelfareState|null $welfare_state welfare_state
     *
     * @return self
     */
    public function setWelfareState($welfare_state)
    {
        if (is_null($welfare_state)) {
            throw new \InvalidArgumentException('non-nullable welfare_state cannot be null');
        }
        $this->container['welfare_state'] = $welfare_state;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float|null $width width
     *
     * @return self
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets wvo
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getWvo()
    {
        return $this->container['wvo'];
    }

    /**
     * Sets wvo
     *
     * @param \Brixion\Kolibri\Model\Size|null $wvo wvo
     *
     * @return self
     */
    public function setWvo($wvo)
    {
        if (is_null($wvo)) {
            throw new \InvalidArgumentException('non-nullable wvo cannot be null');
        }
        $this->container['wvo'] = $wvo;

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
     * Gets count_of_pitches
     *
     * @return int|null
     */
    public function getCountOfPitches()
    {
        return $this->container['count_of_pitches'];
    }

    /**
     * Sets count_of_pitches
     *
     * @param int|null $count_of_pitches count_of_pitches
     *
     * @return self
     */
    public function setCountOfPitches($count_of_pitches)
    {
        if (is_null($count_of_pitches)) {
            throw new \InvalidArgumentException('non-nullable count_of_pitches cannot be null');
        }
        $this->container['count_of_pitches'] = $count_of_pitches;

        return $this;
    }

    /**
     * Gets has_annual_pitches
     *
     * @return bool|null
     */
    public function getHasAnnualPitches()
    {
        return $this->container['has_annual_pitches'];
    }

    /**
     * Sets has_annual_pitches
     *
     * @param bool|null $has_annual_pitches has_annual_pitches
     *
     * @return self
     */
    public function setHasAnnualPitches($has_annual_pitches)
    {
        if (is_null($has_annual_pitches)) {
            throw new \InvalidArgumentException('non-nullable has_annual_pitches cannot be null');
        }
        $this->container['has_annual_pitches'] = $has_annual_pitches;

        return $this;
    }

    /**
     * Gets count_of_accommodations
     *
     * @return int|null
     */
    public function getCountOfAccommodations()
    {
        return $this->container['count_of_accommodations'];
    }

    /**
     * Sets count_of_accommodations
     *
     * @param int|null $count_of_accommodations count_of_accommodations
     *
     * @return self
     */
    public function setCountOfAccommodations($count_of_accommodations)
    {
        if (is_null($count_of_accommodations)) {
            throw new \InvalidArgumentException('non-nullable count_of_accommodations cannot be null');
        }
        $this->container['count_of_accommodations'] = $count_of_accommodations;

        return $this;
    }

    /**
     * Gets capacity_in_number_of_persons
     *
     * @return int|null
     */
    public function getCapacityInNumberOfPersons()
    {
        return $this->container['capacity_in_number_of_persons'];
    }

    /**
     * Sets capacity_in_number_of_persons
     *
     * @param int|null $capacity_in_number_of_persons capacity_in_number_of_persons
     *
     * @return self
     */
    public function setCapacityInNumberOfPersons($capacity_in_number_of_persons)
    {
        if (is_null($capacity_in_number_of_persons)) {
            throw new \InvalidArgumentException('non-nullable capacity_in_number_of_persons cannot be null');
        }
        $this->container['capacity_in_number_of_persons'] = $capacity_in_number_of_persons;

        return $this;
    }

    /**
     * Gets leisure_type
     *
     * @return \Brixion\Kolibri\Model\LeisureType|null
     */
    public function getLeisureType()
    {
        return $this->container['leisure_type'];
    }

    /**
     * Sets leisure_type
     *
     * @param \Brixion\Kolibri\Model\LeisureType|null $leisure_type leisure_type
     *
     * @return self
     */
    public function setLeisureType($leisure_type)
    {
        if (is_null($leisure_type)) {
            throw new \InvalidArgumentException('non-nullable leisure_type cannot be null');
        }
        $this->container['leisure_type'] = $leisure_type;

        return $this;
    }

    /**
     * Gets leisure_facility_types
     *
     * @return \Brixion\Kolibri\Model\LeisureFacilityType[]|null
     */
    public function getLeisureFacilityTypes()
    {
        return $this->container['leisure_facility_types'];
    }

    /**
     * Sets leisure_facility_types
     *
     * @param \Brixion\Kolibri\Model\LeisureFacilityType[]|null $leisure_facility_types leisure_facility_types
     *
     * @return self
     */
    public function setLeisureFacilityTypes($leisure_facility_types)
    {
        if (is_null($leisure_facility_types)) {
            throw new \InvalidArgumentException('non-nullable leisure_facility_types cannot be null');
        }
        $this->container['leisure_facility_types'] = $leisure_facility_types;

        return $this;
    }

    /**
     * Gets investment_type
     *
     * @return \Brixion\Kolibri\Model\InvestmentType|null
     */
    public function getInvestmentType()
    {
        return $this->container['investment_type'];
    }

    /**
     * Sets investment_type
     *
     * @param \Brixion\Kolibri\Model\InvestmentType|null $investment_type investment_type
     *
     * @return self
     */
    public function setInvestmentType($investment_type)
    {
        if (is_null($investment_type)) {
            throw new \InvalidArgumentException('non-nullable investment_type cannot be null');
        }
        $this->container['investment_type'] = $investment_type;

        return $this;
    }

    /**
     * Gets horeca_sector_types
     *
     * @return \Brixion\Kolibri\Model\HorecaSectorType[]|null
     */
    public function getHorecaSectorTypes()
    {
        return $this->container['horeca_sector_types'];
    }

    /**
     * Sets horeca_sector_types
     *
     * @param \Brixion\Kolibri\Model\HorecaSectorType[]|null $horeca_sector_types horeca_sector_types
     *
     * @return self
     */
    public function setHorecaSectorTypes($horeca_sector_types)
    {
        if (is_null($horeca_sector_types)) {
            throw new \InvalidArgumentException('non-nullable horeca_sector_types cannot be null');
        }
        $this->container['horeca_sector_types'] = $horeca_sector_types;

        return $this;
    }

    /**
     * Gets remaining_term_of_a_contract
     *
     * @return int|null
     */
    public function getRemainingTermOfAContract()
    {
        return $this->container['remaining_term_of_a_contract'];
    }

    /**
     * Sets remaining_term_of_a_contract
     *
     * @param int|null $remaining_term_of_a_contract remaining_term_of_a_contract
     *
     * @return self
     */
    public function setRemainingTermOfAContract($remaining_term_of_a_contract)
    {
        if (is_null($remaining_term_of_a_contract)) {
            throw new \InvalidArgumentException('non-nullable remaining_term_of_a_contract cannot be null');
        }
        $this->container['remaining_term_of_a_contract'] = $remaining_term_of_a_contract;

        return $this;
    }

    /**
     * Gets vacancy_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getVacancyArea()
    {
        return $this->container['vacancy_area'];
    }

    /**
     * Sets vacancy_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $vacancy_area vacancy_area
     *
     * @return self
     */
    public function setVacancyArea($vacancy_area)
    {
        if (is_null($vacancy_area)) {
            throw new \InvalidArgumentException('non-nullable vacancy_area cannot be null');
        }
        $this->container['vacancy_area'] = $vacancy_area;

        return $this;
    }

    /**
     * Gets vacancy_rental_value
     *
     * @return float|null
     */
    public function getVacancyRentalValue()
    {
        return $this->container['vacancy_rental_value'];
    }

    /**
     * Sets vacancy_rental_value
     *
     * @param float|null $vacancy_rental_value vacancy_rental_value
     *
     * @return self
     */
    public function setVacancyRentalValue($vacancy_rental_value)
    {
        if (is_null($vacancy_rental_value)) {
            throw new \InvalidArgumentException('non-nullable vacancy_rental_value cannot be null');
        }
        $this->container['vacancy_rental_value'] = $vacancy_rental_value;

        return $this;
    }

    /**
     * Gets gross_initial_yield
     *
     * @return int|null
     */
    public function getGrossInitialYield()
    {
        return $this->container['gross_initial_yield'];
    }

    /**
     * Sets gross_initial_yield
     *
     * @param int|null $gross_initial_yield gross_initial_yield
     *
     * @return self
     */
    public function setGrossInitialYield($gross_initial_yield)
    {
        if (is_null($gross_initial_yield)) {
            throw new \InvalidArgumentException('non-nullable gross_initial_yield cannot be null');
        }
        $this->container['gross_initial_yield'] = $gross_initial_yield;

        return $this;
    }

    /**
     * Gets gross_rental_income
     *
     * @return float|null
     */
    public function getGrossRentalIncome()
    {
        return $this->container['gross_rental_income'];
    }

    /**
     * Sets gross_rental_income
     *
     * @param float|null $gross_rental_income gross_rental_income
     *
     * @return self
     */
    public function setGrossRentalIncome($gross_rental_income)
    {
        if (is_null($gross_rental_income)) {
            throw new \InvalidArgumentException('non-nullable gross_rental_income cannot be null');
        }
        $this->container['gross_rental_income'] = $gross_rental_income;

        return $this;
    }

    /**
     * Gets count_of_tenants
     *
     * @return int|null
     */
    public function getCountOfTenants()
    {
        return $this->container['count_of_tenants'];
    }

    /**
     * Sets count_of_tenants
     *
     * @param int|null $count_of_tenants count_of_tenants
     *
     * @return self
     */
    public function setCountOfTenants($count_of_tenants)
    {
        if (is_null($count_of_tenants)) {
            throw new \InvalidArgumentException('non-nullable count_of_tenants cannot be null');
        }
        $this->container['count_of_tenants'] = $count_of_tenants;

        return $this;
    }

    /**
     * Gets count_of_separately_lettable_housing_units
     *
     * @return int|null
     */
    public function getCountOfSeparatelyLettableHousingUnits()
    {
        return $this->container['count_of_separately_lettable_housing_units'];
    }

    /**
     * Sets count_of_separately_lettable_housing_units
     *
     * @param int|null $count_of_separately_lettable_housing_units count_of_separately_lettable_housing_units
     *
     * @return self
     */
    public function setCountOfSeparatelyLettableHousingUnits($count_of_separately_lettable_housing_units)
    {
        if (is_null($count_of_separately_lettable_housing_units)) {
            throw new \InvalidArgumentException('non-nullable count_of_separately_lettable_housing_units cannot be null');
        }
        $this->container['count_of_separately_lettable_housing_units'] = $count_of_separately_lettable_housing_units;

        return $this;
    }

    /**
     * Gets portefeuille
     *
     * @return bool|null
     */
    public function getPortefeuille()
    {
        return $this->container['portefeuille'];
    }

    /**
     * Sets portefeuille
     *
     * @param bool|null $portefeuille portefeuille
     *
     * @return self
     */
    public function setPortefeuille($portefeuille)
    {
        if (is_null($portefeuille)) {
            throw new \InvalidArgumentException('non-nullable portefeuille cannot be null');
        }
        $this->container['portefeuille'] = $portefeuille;

        return $this;
    }

    /**
     * Gets social_property_type
     *
     * @return \Brixion\Kolibri\Model\SocialPropertyType|null
     */
    public function getSocialPropertyType()
    {
        return $this->container['social_property_type'];
    }

    /**
     * Sets social_property_type
     *
     * @param \Brixion\Kolibri\Model\SocialPropertyType|null $social_property_type social_property_type
     *
     * @return self
     */
    public function setSocialPropertyType($social_property_type)
    {
        if (is_null($social_property_type)) {
            throw new \InvalidArgumentException('non-nullable social_property_type cannot be null');
        }
        $this->container['social_property_type'] = $social_property_type;

        return $this;
    }

    /**
     * Gets social_property_facility_types
     *
     * @return \Brixion\Kolibri\Model\SocialPropertyFacilityType[]|null
     */
    public function getSocialPropertyFacilityTypes()
    {
        return $this->container['social_property_facility_types'];
    }

    /**
     * Sets social_property_facility_types
     *
     * @param \Brixion\Kolibri\Model\SocialPropertyFacilityType[]|null $social_property_facility_types social_property_facility_types
     *
     * @return self
     */
    public function setSocialPropertyFacilityTypes($social_property_facility_types)
    {
        if (is_null($social_property_facility_types)) {
            throw new \InvalidArgumentException('non-nullable social_property_facility_types cannot be null');
        }
        $this->container['social_property_facility_types'] = $social_property_facility_types;

        return $this;
    }

    /**
     * Gets redesignation_possible
     *
     * @return bool|null
     */
    public function getRedesignationPossible()
    {
        return $this->container['redesignation_possible'];
    }

    /**
     * Sets redesignation_possible
     *
     * @param bool|null $redesignation_possible redesignation_possible
     *
     * @return self
     */
    public function setRedesignationPossible($redesignation_possible)
    {
        if (is_null($redesignation_possible)) {
            throw new \InvalidArgumentException('non-nullable redesignation_possible cannot be null');
        }
        $this->container['redesignation_possible'] = $redesignation_possible;

        return $this;
    }

    /**
     * Gets return_of_services
     *
     * @return bool|null
     */
    public function getReturnOfServices()
    {
        return $this->container['return_of_services'];
    }

    /**
     * Sets return_of_services
     *
     * @param bool|null $return_of_services return_of_services
     *
     * @return self
     */
    public function setReturnOfServices($return_of_services)
    {
        if (is_null($return_of_services)) {
            throw new \InvalidArgumentException('non-nullable return_of_services cannot be null');
        }
        $this->container['return_of_services'] = $return_of_services;

        return $this;
    }

    /**
     * Gets practic_area
     *
     * @return bool|null
     */
    public function getPracticArea()
    {
        return $this->container['practic_area'];
    }

    /**
     * Sets practic_area
     *
     * @param bool|null $practic_area practic_area
     *
     * @return self
     */
    public function setPracticArea($practic_area)
    {
        if (is_null($practic_area)) {
            throw new \InvalidArgumentException('non-nullable practic_area cannot be null');
        }
        $this->container['practic_area'] = $practic_area;

        return $this;
    }

    /**
     * Gets practic_area_capacity
     *
     * @return int|null
     */
    public function getPracticAreaCapacity()
    {
        return $this->container['practic_area_capacity'];
    }

    /**
     * Sets practic_area_capacity
     *
     * @param int|null $practic_area_capacity practic_area_capacity
     *
     * @return self
     */
    public function setPracticAreaCapacity($practic_area_capacity)
    {
        if (is_null($practic_area_capacity)) {
            throw new \InvalidArgumentException('non-nullable practic_area_capacity cannot be null');
        }
        $this->container['practic_area_capacity'] = $practic_area_capacity;

        return $this;
    }

    /**
     * Gets with_accommodations
     *
     * @return bool|null
     */
    public function getWithAccommodations()
    {
        return $this->container['with_accommodations'];
    }

    /**
     * Sets with_accommodations
     *
     * @param bool|null $with_accommodations with_accommodations
     *
     * @return self
     */
    public function setWithAccommodations($with_accommodations)
    {
        if (is_null($with_accommodations)) {
            throw new \InvalidArgumentException('non-nullable with_accommodations cannot be null');
        }
        $this->container['with_accommodations'] = $with_accommodations;

        return $this;
    }

    /**
     * Gets count_of_housing_units_in_accommodations
     *
     * @return int|null
     */
    public function getCountOfHousingUnitsInAccommodations()
    {
        return $this->container['count_of_housing_units_in_accommodations'];
    }

    /**
     * Sets count_of_housing_units_in_accommodations
     *
     * @param int|null $count_of_housing_units_in_accommodations count_of_housing_units_in_accommodations
     *
     * @return self
     */
    public function setCountOfHousingUnitsInAccommodations($count_of_housing_units_in_accommodations)
    {
        if (is_null($count_of_housing_units_in_accommodations)) {
            throw new \InvalidArgumentException('non-nullable count_of_housing_units_in_accommodations cannot be null');
        }
        $this->container['count_of_housing_units_in_accommodations'] = $count_of_housing_units_in_accommodations;

        return $this;
    }

    /**
     * Gets shared_accommodations
     *
     * @return bool|null
     */
    public function getSharedAccommodations()
    {
        return $this->container['shared_accommodations'];
    }

    /**
     * Sets shared_accommodations
     *
     * @param bool|null $shared_accommodations shared_accommodations
     *
     * @return self
     */
    public function setSharedAccommodations($shared_accommodations)
    {
        if (is_null($shared_accommodations)) {
            throw new \InvalidArgumentException('non-nullable shared_accommodations cannot be null');
        }
        $this->container['shared_accommodations'] = $shared_accommodations;

        return $this;
    }

    /**
     * Gets shared_sanitary_facilities
     *
     * @return bool|null
     */
    public function getSharedSanitaryFacilities()
    {
        return $this->container['shared_sanitary_facilities'];
    }

    /**
     * Sets shared_sanitary_facilities
     *
     * @param bool|null $shared_sanitary_facilities shared_sanitary_facilities
     *
     * @return self
     */
    public function setSharedSanitaryFacilities($shared_sanitary_facilities)
    {
        if (is_null($shared_sanitary_facilities)) {
            throw new \InvalidArgumentException('non-nullable shared_sanitary_facilities cannot be null');
        }
        $this->container['shared_sanitary_facilities'] = $shared_sanitary_facilities;

        return $this;
    }

    /**
     * Gets name_of_building
     *
     * @return string|null
     */
    public function getNameOfBuilding()
    {
        return $this->container['name_of_building'];
    }

    /**
     * Sets name_of_building
     *
     * @param string|null $name_of_building name_of_building
     *
     * @return self
     */
    public function setNameOfBuilding($name_of_building)
    {
        if (is_null($name_of_building)) {
            throw new \InvalidArgumentException('non-nullable name_of_building cannot be null');
        }
        $this->container['name_of_building'] = $name_of_building;

        return $this;
    }

    /**
     * Gets residential_facilities
     *
     * @return \Brixion\Kolibri\Model\ResidentialFacility[]|null
     */
    public function getResidentialFacilities()
    {
        return $this->container['residential_facilities'];
    }

    /**
     * Sets residential_facilities
     *
     * @param \Brixion\Kolibri\Model\ResidentialFacility[]|null $residential_facilities residential_facilities
     *
     * @return self
     */
    public function setResidentialFacilities($residential_facilities)
    {
        if (is_null($residential_facilities)) {
            throw new \InvalidArgumentException('non-nullable residential_facilities cannot be null');
        }
        $this->container['residential_facilities'] = $residential_facilities;

        return $this;
    }

    /**
     * Gets home_plot_surface
     *
     * @return float|null
     */
    public function getHomePlotSurface()
    {
        return $this->container['home_plot_surface'];
    }

    /**
     * Sets home_plot_surface
     *
     * @param float|null $home_plot_surface home_plot_surface
     *
     * @return self
     */
    public function setHomePlotSurface($home_plot_surface)
    {
        if (is_null($home_plot_surface)) {
            throw new \InvalidArgumentException('non-nullable home_plot_surface cannot be null');
        }
        $this->container['home_plot_surface'] = $home_plot_surface;

        return $this;
    }

    /**
     * Gets field_plot_surface
     *
     * @return float|null
     */
    public function getFieldPlotSurface()
    {
        return $this->container['field_plot_surface'];
    }

    /**
     * Sets field_plot_surface
     *
     * @param float|null $field_plot_surface field_plot_surface
     *
     * @return self
     */
    public function setFieldPlotSurface($field_plot_surface)
    {
        if (is_null($field_plot_surface)) {
            throw new \InvalidArgumentException('non-nullable field_plot_surface cannot be null');
        }
        $this->container['field_plot_surface'] = $field_plot_surface;

        return $this;
    }

    /**
     * Gets number_of_veal_calves
     *
     * @return int|null
     */
    public function getNumberOfVealCalves()
    {
        return $this->container['number_of_veal_calves'];
    }

    /**
     * Sets number_of_veal_calves
     *
     * @param int|null $number_of_veal_calves number_of_veal_calves
     *
     * @return self
     */
    public function setNumberOfVealCalves($number_of_veal_calves)
    {
        if (is_null($number_of_veal_calves)) {
            throw new \InvalidArgumentException('non-nullable number_of_veal_calves cannot be null');
        }
        $this->container['number_of_veal_calves'] = $number_of_veal_calves;

        return $this;
    }

    /**
     * Gets has_green_label
     *
     * @return bool|null
     */
    public function getHasGreenLabel()
    {
        return $this->container['has_green_label'];
    }

    /**
     * Sets has_green_label
     *
     * @param bool|null $has_green_label has_green_label
     *
     * @return self
     */
    public function setHasGreenLabel($has_green_label)
    {
        if (is_null($has_green_label)) {
            throw new \InvalidArgumentException('non-nullable has_green_label cannot be null');
        }
        $this->container['has_green_label'] = $has_green_label;

        return $this;
    }

    /**
     * Gets poultry_housing_types
     *
     * @return \Brixion\Kolibri\Model\PoultryHousingType[]|null
     */
    public function getPoultryHousingTypes()
    {
        return $this->container['poultry_housing_types'];
    }

    /**
     * Sets poultry_housing_types
     *
     * @param \Brixion\Kolibri\Model\PoultryHousingType[]|null $poultry_housing_types poultry_housing_types
     *
     * @return self
     */
    public function setPoultryHousingTypes($poultry_housing_types)
    {
        if (is_null($poultry_housing_types)) {
            throw new \InvalidArgumentException('non-nullable poultry_housing_types cannot be null');
        }
        $this->container['poultry_housing_types'] = $poultry_housing_types;

        return $this;
    }

    /**
     * Gets bog_combination_object_type
     *
     * @return \Brixion\Kolibri\Model\BogCombinationObjectType|null
     */
    public function getBogCombinationObjectType()
    {
        return $this->container['bog_combination_object_type'];
    }

    /**
     * Sets bog_combination_object_type
     *
     * @param \Brixion\Kolibri\Model\BogCombinationObjectType|null $bog_combination_object_type bog_combination_object_type
     *
     * @return self
     */
    public function setBogCombinationObjectType($bog_combination_object_type)
    {
        if (is_null($bog_combination_object_type)) {
            throw new \InvalidArgumentException('non-nullable bog_combination_object_type cannot be null');
        }
        $this->container['bog_combination_object_type'] = $bog_combination_object_type;

        return $this;
    }

    /**
     * Gets bog_combination_object_situation
     *
     * @return \Brixion\Kolibri\Model\BogCombinationObjectSituation|null
     */
    public function getBogCombinationObjectSituation()
    {
        return $this->container['bog_combination_object_situation'];
    }

    /**
     * Sets bog_combination_object_situation
     *
     * @param \Brixion\Kolibri\Model\BogCombinationObjectSituation|null $bog_combination_object_situation bog_combination_object_situation
     *
     * @return self
     */
    public function setBogCombinationObjectSituation($bog_combination_object_situation)
    {
        if (is_null($bog_combination_object_situation)) {
            throw new \InvalidArgumentException('non-nullable bog_combination_object_situation cannot be null');
        }
        $this->container['bog_combination_object_situation'] = $bog_combination_object_situation;

        return $this;
    }

    /**
     * Gets bog_combination_object_status
     *
     * @return \Brixion\Kolibri\Model\BogCombinationObjectStatus|null
     */
    public function getBogCombinationObjectStatus()
    {
        return $this->container['bog_combination_object_status'];
    }

    /**
     * Sets bog_combination_object_status
     *
     * @param \Brixion\Kolibri\Model\BogCombinationObjectStatus|null $bog_combination_object_status bog_combination_object_status
     *
     * @return self
     */
    public function setBogCombinationObjectStatus($bog_combination_object_status)
    {
        if (is_null($bog_combination_object_status)) {
            throw new \InvalidArgumentException('non-nullable bog_combination_object_status cannot be null');
        }
        $this->container['bog_combination_object_status'] = $bog_combination_object_status;

        return $this;
    }

    /**
     * Gets bog_combination_object_area
     *
     * @return \Brixion\Kolibri\Model\Size|null
     */
    public function getBogCombinationObjectArea()
    {
        return $this->container['bog_combination_object_area'];
    }

    /**
     * Sets bog_combination_object_area
     *
     * @param \Brixion\Kolibri\Model\Size|null $bog_combination_object_area bog_combination_object_area
     *
     * @return self
     */
    public function setBogCombinationObjectArea($bog_combination_object_area)
    {
        if (is_null($bog_combination_object_area)) {
            throw new \InvalidArgumentException('non-nullable bog_combination_object_area cannot be null');
        }
        $this->container['bog_combination_object_area'] = $bog_combination_object_area;

        return $this;
    }

    /**
     * Gets glass_structures
     *
     * @return \Brixion\Kolibri\Model\BaseAlvStructure[]|null
     */
    public function getGlassStructures()
    {
        return $this->container['glass_structures'];
    }

    /**
     * Sets glass_structures
     *
     * @param \Brixion\Kolibri\Model\BaseAlvStructure[]|null $glass_structures glass_structures
     *
     * @return self
     */
    public function setGlassStructures($glass_structures)
    {
        if (is_null($glass_structures)) {
            throw new \InvalidArgumentException('non-nullable glass_structures cannot be null');
        }
        $this->container['glass_structures'] = $glass_structures;

        return $this;
    }

    /**
     * Gets riding_halls
     *
     * @return \Brixion\Kolibri\Model\RidingHall[]|null
     */
    public function getRidingHalls()
    {
        return $this->container['riding_halls'];
    }

    /**
     * Sets riding_halls
     *
     * @param \Brixion\Kolibri\Model\RidingHall[]|null $riding_halls riding_halls
     *
     * @return self
     */
    public function setRidingHalls($riding_halls)
    {
        if (is_null($riding_halls)) {
            throw new \InvalidArgumentException('non-nullable riding_halls cannot be null');
        }
        $this->container['riding_halls'] = $riding_halls;

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
            throw new \InvalidArgumentException('invalid length for $funda_postal_code when calling AcquisitionObjectAssignment., must be smaller than or equal to 7.');
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
            throw new \InvalidArgumentException('invalid length for $funda_street when calling AcquisitionObjectAssignment., must be smaller than or equal to 43.');
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
            throw new \InvalidArgumentException('invalid length for $funda_locality when calling AcquisitionObjectAssignment., must be smaller than or equal to 24.');
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
            throw new \InvalidArgumentException('invalid length for $id when calling AcquisitionObjectAssignment., must be bigger than or equal to 1.');
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
