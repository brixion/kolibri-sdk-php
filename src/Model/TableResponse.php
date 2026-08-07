<?php

declare(strict_types=1);

/**
 * TableResponse - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * TableResponse.
 * @implements \ArrayAccess<string, mixed>
 */
class TableResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'TableResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'acceptances' => '\Brixion\Kolibri\Model\AcceptanceOption[]',
        'acquisition_status_options' => '\Brixion\Kolibri\Model\AcquisitionStatusOption[]',
        'address_type_options' => '\Brixion\Kolibri\Model\AddressTypeOption[]',
        'agenda_item_category_types' => '\Brixion\Kolibri\Model\AgendaItemCategoryTypeOption[]',
        'agenda_item_reminder_merge_field_options' => '\Brixion\Kolibri\Model\AgendaItemReminderMergeFieldOption[]',
        'agenda_standard_duration_options' => '\Brixion\Kolibri\Model\AgendaStandardDurationOption[]',
        'age_range_options' => '\Brixion\Kolibri\Model\AgeRangeOption[]',
        'agricultural_subtype_others' => '\Brixion\Kolibri\Model\AgriculturalSubtypeOtherOption[]',
        'air_treatment_options' => '\Brixion\Kolibri\Model\AirTreatmentOption[]',
        'alv_agricultural_function_options' => '\Brixion\Kolibri\Model\AlvAgriculturalFunctionOption[]',
        'alv_building_plot_destination_options' => '\Brixion\Kolibri\Model\AlvBuildingPlotDestinationOption[]',
        'alv_continuation_options' => '\Brixion\Kolibri\Model\AlvContinuationOption[]',
        'alv_non_agricultural_function_options' => '\Brixion\Kolibri\Model\AlvNonAgriculturalFunctionOption[]',
        'amenities_options' => '\Brixion\Kolibri\Model\AmenitiesOption[]',
        'apartment_characteristics' => '\Brixion\Kolibri\Model\ApartmentCharacteristicOption[]',
        'apartment_sorts' => '\Brixion\Kolibri\Model\ApartmentSortOption[]',
        'applicant_type_options' => '\Brixion\Kolibri\Model\ApplicantTypeOption[]',
        'appraisal_certifications' => '\Brixion\Kolibri\Model\AppraisalCertificationOption[]',
        'assignment_phases' => '\Brixion\Kolibri\Model\AssignmentPhaseOption[]',
        'assignment_types' => '\Brixion\Kolibri\Model\AssignmentTypeOption[]',
        'attic_options' => '\Brixion\Kolibri\Model\AtticOptionOption[]',
        'availability_statuses' => '\Brixion\Kolibri\Model\AvailabilityStatusOption[]',
        'balcony_types' => '\Brixion\Kolibri\Model\BalconyTypeOption[]',
        'bathroom_facilities' => '\Brixion\Kolibri\Model\BathroomFacilityOption[]',
        'beverage_hospitality_sector_types' => '\Brixion\Kolibri\Model\BeverageHospitalityTypeOption[]',
        'bid_status_options' => '\Brixion\Kolibri\Model\BidStatusOption[]',
        'bid_type_options' => '\Brixion\Kolibri\Model\BidTypeOption[]',
        'bog_combination_object_situation_options' => '\Brixion\Kolibri\Model\BogCombinationObjectSituationOption[]',
        'bog_combination_object_status_options' => '\Brixion\Kolibri\Model\BogCombinationObjectStatusOption[]',
        'bog_combination_object_type_options' => '\Brixion\Kolibri\Model\BogCombinationObjectTypeOption[]',
        'building_type_options' => '\Brixion\Kolibri\Model\BuildingTypeOption[]',
        'buyer_type_options' => '\Brixion\Kolibri\Model\BuyerTypeOption[]',
        'cadastral_lot_size_options' => '\Brixion\Kolibri\Model\CadastralLotSizeOption[]',
        'cattle_farming_subtypes' => '\Brixion\Kolibri\Model\CattleFarmingSubtypeOption[]',
        'certification_options' => '\Brixion\Kolibri\Model\CertificationOption[]',
        'child_age_range_options' => '\Brixion\Kolibri\Model\ChildAgeRangeOption[]',
        'civil_states' => '\Brixion\Kolibri\Model\CivilStateOption[]',
        'comfort_quality_options' => '\Brixion\Kolibri\Model\ComfortQualityOption[]',
        'commission_paid_by_options' => '\Brixion\Kolibri\Model\CommissionPaidByOption[]',
        'commission_type_options' => '\Brixion\Kolibri\Model\CommissionTypeOption[]',
        'condition_options' => '\Brixion\Kolibri\Model\ConditionOption[]',
        'condition_type_options' => '\Brixion\Kolibri\Model\ConditionTypeOption[]',
        'construction_option_options' => '\Brixion\Kolibri\Model\ConstructionOptionOption[]',
        'construction_periods' => '\Brixion\Kolibri\Model\ConstructionPeriodOption[]',
        'contact_link_types' => '\Brixion\Kolibri\Model\ContactLinkTypeSuggestion[]',
        'contact_person_title_suggestions' => '\Brixion\Kolibri\Model\ContactPersonTitleSuggestionOption[]',
        'countries' => '\Brixion\Kolibri\Model\CountryOption[]',
        'default_folder_tree_category_options' => '\Brixion\Kolibri\Model\DefaultFolderTreeCategoryOption[]',
        'document_template_type_options' => '\Brixion\Kolibri\Model\DocumentTemplateTypeOption[]',
        'drainage_options' => '\Brixion\Kolibri\Model\DrainageOption[]',
        'email_address_types' => '\Brixion\Kolibri\Model\EmailAddressTypeOption[]',
        'energy_class_options' => '\Brixion\Kolibri\Model\EnergyClassOption[]',
        'energy_source_options' => '\Brixion\Kolibri\Model\EnergySourceOption[]',
        'exclusive_status_options' => '\Brixion\Kolibri\Model\ExclusiveStatusOption[]',
        'facility_options' => '\Brixion\Kolibri\Model\FacilityOption[]',
        'family_income_options' => '\Brixion\Kolibri\Model\FamilyIncomeOption[]',
        'fastfood_hospitality_sector_types' => '\Brixion\Kolibri\Model\FastfoodHospitalitySectorTypeOption[]',
        'fixed_variable_options' => '\Brixion\Kolibri\Model\FixedVariableOption[]',
        'floor_type_options' => '\Brixion\Kolibri\Model\FloorTypeOption[]',
        'furnishing_options' => '\Brixion\Kolibri\Model\FurnishingOption[]',
        'garage_type_options' => '\Brixion\Kolibri\Model\GarageTypeOption[]',
        'garden_quality_options' => '\Brixion\Kolibri\Model\GardenQualityOption[]',
        'garden_type_options' => '\Brixion\Kolibri\Model\GardenTypeOption[]',
        'gender' => '\Brixion\Kolibri\Model\GenderOption[]',
        'ground_lease_period_options' => '\Brixion\Kolibri\Model\GroundLeasePeriodOption[]',
        'ground_ownership_type_options' => '\Brixion\Kolibri\Model\GroundOwnershipTypeOption[]',
        'ground_usage_options' => '\Brixion\Kolibri\Model\GroundUsageOption[]',
        'heating_method_options' => '\Brixion\Kolibri\Model\HeatingMethodOption[]',
        'heating_water_method_options' => '\Brixion\Kolibri\Model\HeatingWaterMethodOption[]',
        'horeca_sector_type_options' => '\Brixion\Kolibri\Model\HorecaSectorTypeOption[]',
        'horse_company_subtypes' => '\Brixion\Kolibri\Model\HorseCompanySubtypeOption[]',
        'horse_trough_location_options' => '\Brixion\Kolibri\Model\HorseTroughLocationOption[]',
        'horticultural_company_types' => '\Brixion\Kolibri\Model\HorticulturalCompanyTypeOption[]',
        'hotel_hospitality_sector_types' => '\Brixion\Kolibri\Model\HotelHospitalitySectorTypeOption[]',
        'house_characteristics' => '\Brixion\Kolibri\Model\HouseCharacteristicOption[]',
        'household_composition_options' => '\Brixion\Kolibri\Model\HouseholdCompositionOption[]',
        'house_sorts' => '\Brixion\Kolibri\Model\HouseSortOption[]',
        'house_types' => '\Brixion\Kolibri\Model\HouseTypeOption[]',
        'identification_types' => '\Brixion\Kolibri\Model\IdentificationTypeOption[]',
        'industrial_building_facility_options' => '\Brixion\Kolibri\Model\IndustrialBuildingFacilityOption[]',
        'investment_type_options' => '\Brixion\Kolibri\Model\InvestmentTypeOption[]',
        'invoice_due_terms' => '\Brixion\Kolibri\Model\InvoiceDueTermOption[]',
        'invoice_statuses' => '\Brixion\Kolibri\Model\InvoiceStatusOption[]',
        'invoice_types' => '\Brixion\Kolibri\Model\InvoiceTypeOption[]',
        'isolation_type_options' => '\Brixion\Kolibri\Model\IsolationTypeOption[]',
        'kitchen_facility_options' => '\Brixion\Kolibri\Model\KitchenFacilityOption[]',
        'kitchen_types' => '\Brixion\Kolibri\Model\KitchenTypeOption[]',
        'land_property_sub_type_options' => '\Brixion\Kolibri\Model\LandPropertySubTypeOption[]',
        'languages' => '\Brixion\Kolibri\Model\LanguageSpokenOption[]',
        'leasehold_owner_type_options' => '\Brixion\Kolibri\Model\LeaseholdOwnerTypeOption[]',
        'lease_term_unit_options' => '\Brixion\Kolibri\Model\LeaseTermUnitOption[]',
        'legal_status_options' => '\Brixion\Kolibri\Model\LegalStatusOption[]',
        'leisure_facility_type_options' => '\Brixion\Kolibri\Model\LeisureFacilityOption[]',
        'leisure_type_options' => '\Brixion\Kolibri\Model\LeisureTypeOption[]',
        'listing_types' => '\Brixion\Kolibri\Model\ListingTypeOption[]',
        'living_room_types' => '\Brixion\Kolibri\Model\LivingRoomTypeOption[]',
        'location_places' => '\Brixion\Kolibri\Model\LocationPlaceOption[]',
        'match_mail_period_options' => '\Brixion\Kolibri\Model\MatchMailPeriodOption[]',
        'match_mail_trigger_options' => '\Brixion\Kolibri\Model\MatchMailTriggerOption[]',
        'measurment_options' => '\Brixion\Kolibri\Model\MeasurementUnitOption[]',
        'media_contract_status_options' => '\Brixion\Kolibri\Model\MediaContractStatusOption[]',
        'media_partner_categories' => '\Brixion\Kolibri\Model\MediaPartnerCategoryOption[]',
        'mixed_forms' => '\Brixion\Kolibri\Model\MixedFormOption[]',
        'moving_reason_options' => '\Brixion\Kolibri\Model\MovingReasonOption[]',
        'nature_registration_options' => '\Brixion\Kolibri\Model\NatureRegistrationOption[]',
        'notification_date_format_options' => '\Brixion\Kolibri\Model\NotificationDateFormatOption[]',
        'offer_type_options' => '\Brixion\Kolibri\Model\OfferTypeOption[]',
        'open_house_recurrency_options' => '\Brixion\Kolibri\Model\OpenHouseRecurrenceOption[]',
        'orientations' => '\Brixion\Kolibri\Model\OrientationOption[]',
        'ownership_options' => '\Brixion\Kolibri\Model\OwnershipOption[]',
        'ownership_type_options' => '\Brixion\Kolibri\Model\OwnershipTypeOption[]',
        'parking_facility_options' => '\Brixion\Kolibri\Model\ParkingFacilityOption[]',
        'parking_type_options' => '\Brixion\Kolibri\Model\ParkingTypeOption[]',
        'pavement_type_options' => '\Brixion\Kolibri\Model\PavementTypeOption[]',
        'peculiarity_options' => '\Brixion\Kolibri\Model\PeculiarityOption[]',
        'phone_number_types' => '\Brixion\Kolibri\Model\PhoneNumberTypeOption[]',
        'pig_company_types' => '\Brixion\Kolibri\Model\PigCompanyTypeOption[]',
        'point_of_interest_options' => '\Brixion\Kolibri\Model\PointOfInterestTypeOption[]',
        'polution_type_options' => '\Brixion\Kolibri\Model\PollutionTypeOption[]',
        'poultry_farming_subtypes' => '\Brixion\Kolibri\Model\PoultryFarmingSubtypeOption[]',
        'poultry_housing_type_options' => '\Brixion\Kolibri\Model\PoultryHousingTypeOption[]',
        'price_codes' => '\Brixion\Kolibri\Model\PriceCodeOption[]',
        'price_history_events' => '\Brixion\Kolibri\Model\PriceHistoryEventOption[]',
        'priorities' => '\Brixion\Kolibri\Model\PriorityOption[]',
        'publication_statuses' => '\Brixion\Kolibri\Model\PublicationStatusOption[]',
        'real_estate_associations' => '\Brixion\Kolibri\Model\RealEstateAssociationOption[]',
        'real_estate_groups' => '\Brixion\Kolibri\Model\RealEstateGroupOption[]',
        'register_reason_options' => '\Brixion\Kolibri\Model\RegisterReasonOption[]',
        'relation_roles' => '\Brixion\Kolibri\Model\RelationRoleOption[]',
        'relation_types' => '\Brixion\Kolibri\Model\RelationTypeOption[]',
        'reminder_minutes_options' => '\Brixion\Kolibri\Model\ReminderMinutesOption[]',
        'reminder_notification_settings_type_option_list' => '\Brixion\Kolibri\Model\ReminderNotificationSettingTypeOption[]',
        'rent_conditions' => '\Brixion\Kolibri\Model\RentConditionOption[]',
        'rent_specifications' => '\Brixion\Kolibri\Model\RentSpecificationOption[]',
        'residential_building_type_options' => '\Brixion\Kolibri\Model\ResidentialBuildingTypeOption[]',
        'residential_facility_options' => '\Brixion\Kolibri\Model\ResidentialFacilityOption[]',
        'residential_subtype_others' => '\Brixion\Kolibri\Model\ResidentialSubtypeOtherOption[]',
        'restaurant_hospitality_sector_types' => '\Brixion\Kolibri\Model\RestaurantHospitalitySectorTypeOption[]',
        'roof_material_options' => '\Brixion\Kolibri\Model\RoofMaterialOption[]',
        'roof_type_options' => '\Brixion\Kolibri\Model\RoofTypeOption[]',
        'sale_conditions' => '\Brixion\Kolibri\Model\SaleConditionOption[]',
        'search_assignment_facility_options' => '\Brixion\Kolibri\Model\SearchAssignmentFacilityOption[]',
        'search_assignment_peculiarity_options' => '\Brixion\Kolibri\Model\SearchAssignmentPeculiarityOption[]',
        'situated_type_options' => '\Brixion\Kolibri\Model\SituatedTypeOption[]',
        'social_media_type_options' => '\Brixion\Kolibri\Model\SocialMediaTypeOption[]',
        'social_property_facility_type_options' => '\Brixion\Kolibri\Model\SocialPropertyFacilityOption[]',
        'social_property_type_options' => '\Brixion\Kolibri\Model\SocialPropertyTypeOption[]',
        'soil_type_options' => '\Brixion\Kolibri\Model\SoilTypeOption[]',
        'space_types' => '\Brixion\Kolibri\Model\SpaceTypeOption[]',
        'storage_room_type_options' => '\Brixion\Kolibri\Model\StorageRoomTypeOption[]',
        'stoves' => '\Brixion\Kolibri\Model\StoveOption[]',
        'take_over_specification_options' => '\Brixion\Kolibri\Model\TakeOverSpecificationOption[]',
        'task_categories' => '\Brixion\Kolibri\Model\TaskCategoryOption[]',
        'task_follow_ups' => '\Brixion\Kolibri\Model\TaskFollowUpOption[]',
        'task_statuses' => '\Brixion\Kolibri\Model\TaskStatusOption[]',
        'template_definition_category_options' => '\Brixion\Kolibri\Model\TemplateDefinitionCategoryOption[]',
        'timeline_action_sub_options' => '\Brixion\Kolibri\Model\TimelineActionSubOption[]',
        'timeline_action_types' => '\Brixion\Kolibri\Model\TimelineActionTypeOption[]',
        'type_alv_options' => '\Brixion\Kolibri\Model\TypeAlvOption[]',
        'type_alv_other_options' => '\Brixion\Kolibri\Model\TypeAlvOtherOption[]',
        'type_bog_options' => '\Brixion\Kolibri\Model\TypeBOGOption[]',
        'type_of_business_law_options' => '\Brixion\Kolibri\Model\TypeOfBusinessLawOption[]',
        'type_of_floor_options' => '\Brixion\Kolibri\Model\TypeOfFloorOption[]',
        'type_of_habitation_options' => '\Brixion\Kolibri\Model\TypeOfHabitationOption[]',
        'type_of_window_frame_options' => '\Brixion\Kolibri\Model\TypeOfWindowFrameOption[]',
        'type_part_options' => '\Brixion\Kolibri\Model\TypePARTOption[]',
        'type_part_other_options' => '\Brixion\Kolibri\Model\TypePARTOtherOption[]',
        'types_of_communal_area' => '\Brixion\Kolibri\Model\TypeOfCommunalAreaOption[]',
        'unit_of_measurement_options' => '\Brixion\Kolibri\Model\UnitOfMeasurementOption[]',
        'unit_of_volume_options' => '\Brixion\Kolibri\Model\UnitOfVolumeOption[]',
        'unit_size_options' => '\Brixion\Kolibri\Model\UnitSizeOption[]',
        'vat_conditions' => '\Brixion\Kolibri\Model\VatConditionOption[]',
        'vendor_type_options' => '\Brixion\Kolibri\Model\VendorTypeOption[]',
        'waiting_time_options' => '\Brixion\Kolibri\Model\WaitingTimeOption[]',
        'website_provider_options' => '\Brixion\Kolibri\Model\WebsiteProviderOption[]',
        'welfare_state_options' => '\Brixion\Kolibri\Model\WelfareStateOption[]',
        'withdraw_reason_options' => '\Brixion\Kolibri\Model\WithdrawReasonOption[]',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'acceptances' => null,
        'acquisition_status_options' => null,
        'address_type_options' => null,
        'agenda_item_category_types' => null,
        'agenda_item_reminder_merge_field_options' => null,
        'agenda_standard_duration_options' => null,
        'age_range_options' => null,
        'agricultural_subtype_others' => null,
        'air_treatment_options' => null,
        'alv_agricultural_function_options' => null,
        'alv_building_plot_destination_options' => null,
        'alv_continuation_options' => null,
        'alv_non_agricultural_function_options' => null,
        'amenities_options' => null,
        'apartment_characteristics' => null,
        'apartment_sorts' => null,
        'applicant_type_options' => null,
        'appraisal_certifications' => null,
        'assignment_phases' => null,
        'assignment_types' => null,
        'attic_options' => null,
        'availability_statuses' => null,
        'balcony_types' => null,
        'bathroom_facilities' => null,
        'beverage_hospitality_sector_types' => null,
        'bid_status_options' => null,
        'bid_type_options' => null,
        'bog_combination_object_situation_options' => null,
        'bog_combination_object_status_options' => null,
        'bog_combination_object_type_options' => null,
        'building_type_options' => null,
        'buyer_type_options' => null,
        'cadastral_lot_size_options' => null,
        'cattle_farming_subtypes' => null,
        'certification_options' => null,
        'child_age_range_options' => null,
        'civil_states' => null,
        'comfort_quality_options' => null,
        'commission_paid_by_options' => null,
        'commission_type_options' => null,
        'condition_options' => null,
        'condition_type_options' => null,
        'construction_option_options' => null,
        'construction_periods' => null,
        'contact_link_types' => null,
        'contact_person_title_suggestions' => null,
        'countries' => null,
        'default_folder_tree_category_options' => null,
        'document_template_type_options' => null,
        'drainage_options' => null,
        'email_address_types' => null,
        'energy_class_options' => null,
        'energy_source_options' => null,
        'exclusive_status_options' => null,
        'facility_options' => null,
        'family_income_options' => null,
        'fastfood_hospitality_sector_types' => null,
        'fixed_variable_options' => null,
        'floor_type_options' => null,
        'furnishing_options' => null,
        'garage_type_options' => null,
        'garden_quality_options' => null,
        'garden_type_options' => null,
        'gender' => null,
        'ground_lease_period_options' => null,
        'ground_ownership_type_options' => null,
        'ground_usage_options' => null,
        'heating_method_options' => null,
        'heating_water_method_options' => null,
        'horeca_sector_type_options' => null,
        'horse_company_subtypes' => null,
        'horse_trough_location_options' => null,
        'horticultural_company_types' => null,
        'hotel_hospitality_sector_types' => null,
        'house_characteristics' => null,
        'household_composition_options' => null,
        'house_sorts' => null,
        'house_types' => null,
        'identification_types' => null,
        'industrial_building_facility_options' => null,
        'investment_type_options' => null,
        'invoice_due_terms' => null,
        'invoice_statuses' => null,
        'invoice_types' => null,
        'isolation_type_options' => null,
        'kitchen_facility_options' => null,
        'kitchen_types' => null,
        'land_property_sub_type_options' => null,
        'languages' => null,
        'leasehold_owner_type_options' => null,
        'lease_term_unit_options' => null,
        'legal_status_options' => null,
        'leisure_facility_type_options' => null,
        'leisure_type_options' => null,
        'listing_types' => null,
        'living_room_types' => null,
        'location_places' => null,
        'match_mail_period_options' => null,
        'match_mail_trigger_options' => null,
        'measurment_options' => null,
        'media_contract_status_options' => null,
        'media_partner_categories' => null,
        'mixed_forms' => null,
        'moving_reason_options' => null,
        'nature_registration_options' => null,
        'notification_date_format_options' => null,
        'offer_type_options' => null,
        'open_house_recurrency_options' => null,
        'orientations' => null,
        'ownership_options' => null,
        'ownership_type_options' => null,
        'parking_facility_options' => null,
        'parking_type_options' => null,
        'pavement_type_options' => null,
        'peculiarity_options' => null,
        'phone_number_types' => null,
        'pig_company_types' => null,
        'point_of_interest_options' => null,
        'polution_type_options' => null,
        'poultry_farming_subtypes' => null,
        'poultry_housing_type_options' => null,
        'price_codes' => null,
        'price_history_events' => null,
        'priorities' => null,
        'publication_statuses' => null,
        'real_estate_associations' => null,
        'real_estate_groups' => null,
        'register_reason_options' => null,
        'relation_roles' => null,
        'relation_types' => null,
        'reminder_minutes_options' => null,
        'reminder_notification_settings_type_option_list' => null,
        'rent_conditions' => null,
        'rent_specifications' => null,
        'residential_building_type_options' => null,
        'residential_facility_options' => null,
        'residential_subtype_others' => null,
        'restaurant_hospitality_sector_types' => null,
        'roof_material_options' => null,
        'roof_type_options' => null,
        'sale_conditions' => null,
        'search_assignment_facility_options' => null,
        'search_assignment_peculiarity_options' => null,
        'situated_type_options' => null,
        'social_media_type_options' => null,
        'social_property_facility_type_options' => null,
        'social_property_type_options' => null,
        'soil_type_options' => null,
        'space_types' => null,
        'storage_room_type_options' => null,
        'stoves' => null,
        'take_over_specification_options' => null,
        'task_categories' => null,
        'task_follow_ups' => null,
        'task_statuses' => null,
        'template_definition_category_options' => null,
        'timeline_action_sub_options' => null,
        'timeline_action_types' => null,
        'type_alv_options' => null,
        'type_alv_other_options' => null,
        'type_bog_options' => null,
        'type_of_business_law_options' => null,
        'type_of_floor_options' => null,
        'type_of_habitation_options' => null,
        'type_of_window_frame_options' => null,
        'type_part_options' => null,
        'type_part_other_options' => null,
        'types_of_communal_area' => null,
        'unit_of_measurement_options' => null,
        'unit_of_volume_options' => null,
        'unit_size_options' => null,
        'vat_conditions' => null,
        'vendor_type_options' => null,
        'waiting_time_options' => null,
        'website_provider_options' => null,
        'welfare_state_options' => null,
        'withdraw_reason_options' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'acceptances' => false,
        'acquisition_status_options' => false,
        'address_type_options' => false,
        'agenda_item_category_types' => false,
        'agenda_item_reminder_merge_field_options' => false,
        'agenda_standard_duration_options' => false,
        'age_range_options' => false,
        'agricultural_subtype_others' => false,
        'air_treatment_options' => false,
        'alv_agricultural_function_options' => false,
        'alv_building_plot_destination_options' => false,
        'alv_continuation_options' => false,
        'alv_non_agricultural_function_options' => false,
        'amenities_options' => false,
        'apartment_characteristics' => false,
        'apartment_sorts' => false,
        'applicant_type_options' => false,
        'appraisal_certifications' => false,
        'assignment_phases' => false,
        'assignment_types' => false,
        'attic_options' => false,
        'availability_statuses' => false,
        'balcony_types' => false,
        'bathroom_facilities' => false,
        'beverage_hospitality_sector_types' => false,
        'bid_status_options' => false,
        'bid_type_options' => false,
        'bog_combination_object_situation_options' => false,
        'bog_combination_object_status_options' => false,
        'bog_combination_object_type_options' => false,
        'building_type_options' => false,
        'buyer_type_options' => false,
        'cadastral_lot_size_options' => false,
        'cattle_farming_subtypes' => false,
        'certification_options' => false,
        'child_age_range_options' => false,
        'civil_states' => false,
        'comfort_quality_options' => false,
        'commission_paid_by_options' => false,
        'commission_type_options' => false,
        'condition_options' => false,
        'condition_type_options' => false,
        'construction_option_options' => false,
        'construction_periods' => false,
        'contact_link_types' => false,
        'contact_person_title_suggestions' => false,
        'countries' => false,
        'default_folder_tree_category_options' => false,
        'document_template_type_options' => false,
        'drainage_options' => false,
        'email_address_types' => false,
        'energy_class_options' => false,
        'energy_source_options' => false,
        'exclusive_status_options' => false,
        'facility_options' => false,
        'family_income_options' => false,
        'fastfood_hospitality_sector_types' => false,
        'fixed_variable_options' => false,
        'floor_type_options' => false,
        'furnishing_options' => false,
        'garage_type_options' => false,
        'garden_quality_options' => false,
        'garden_type_options' => false,
        'gender' => false,
        'ground_lease_period_options' => false,
        'ground_ownership_type_options' => false,
        'ground_usage_options' => false,
        'heating_method_options' => false,
        'heating_water_method_options' => false,
        'horeca_sector_type_options' => false,
        'horse_company_subtypes' => false,
        'horse_trough_location_options' => false,
        'horticultural_company_types' => false,
        'hotel_hospitality_sector_types' => false,
        'house_characteristics' => false,
        'household_composition_options' => false,
        'house_sorts' => false,
        'house_types' => false,
        'identification_types' => false,
        'industrial_building_facility_options' => false,
        'investment_type_options' => false,
        'invoice_due_terms' => false,
        'invoice_statuses' => false,
        'invoice_types' => false,
        'isolation_type_options' => false,
        'kitchen_facility_options' => false,
        'kitchen_types' => false,
        'land_property_sub_type_options' => false,
        'languages' => false,
        'leasehold_owner_type_options' => false,
        'lease_term_unit_options' => false,
        'legal_status_options' => false,
        'leisure_facility_type_options' => false,
        'leisure_type_options' => false,
        'listing_types' => false,
        'living_room_types' => false,
        'location_places' => false,
        'match_mail_period_options' => false,
        'match_mail_trigger_options' => false,
        'measurment_options' => false,
        'media_contract_status_options' => false,
        'media_partner_categories' => false,
        'mixed_forms' => false,
        'moving_reason_options' => false,
        'nature_registration_options' => false,
        'notification_date_format_options' => false,
        'offer_type_options' => false,
        'open_house_recurrency_options' => false,
        'orientations' => false,
        'ownership_options' => false,
        'ownership_type_options' => false,
        'parking_facility_options' => false,
        'parking_type_options' => false,
        'pavement_type_options' => false,
        'peculiarity_options' => false,
        'phone_number_types' => false,
        'pig_company_types' => false,
        'point_of_interest_options' => false,
        'polution_type_options' => false,
        'poultry_farming_subtypes' => false,
        'poultry_housing_type_options' => false,
        'price_codes' => false,
        'price_history_events' => false,
        'priorities' => false,
        'publication_statuses' => false,
        'real_estate_associations' => false,
        'real_estate_groups' => false,
        'register_reason_options' => false,
        'relation_roles' => false,
        'relation_types' => false,
        'reminder_minutes_options' => false,
        'reminder_notification_settings_type_option_list' => false,
        'rent_conditions' => false,
        'rent_specifications' => false,
        'residential_building_type_options' => false,
        'residential_facility_options' => false,
        'residential_subtype_others' => false,
        'restaurant_hospitality_sector_types' => false,
        'roof_material_options' => false,
        'roof_type_options' => false,
        'sale_conditions' => false,
        'search_assignment_facility_options' => false,
        'search_assignment_peculiarity_options' => false,
        'situated_type_options' => false,
        'social_media_type_options' => false,
        'social_property_facility_type_options' => false,
        'social_property_type_options' => false,
        'soil_type_options' => false,
        'space_types' => false,
        'storage_room_type_options' => false,
        'stoves' => false,
        'take_over_specification_options' => false,
        'task_categories' => false,
        'task_follow_ups' => false,
        'task_statuses' => false,
        'template_definition_category_options' => false,
        'timeline_action_sub_options' => false,
        'timeline_action_types' => false,
        'type_alv_options' => false,
        'type_alv_other_options' => false,
        'type_bog_options' => false,
        'type_of_business_law_options' => false,
        'type_of_floor_options' => false,
        'type_of_habitation_options' => false,
        'type_of_window_frame_options' => false,
        'type_part_options' => false,
        'type_part_other_options' => false,
        'types_of_communal_area' => false,
        'unit_of_measurement_options' => false,
        'unit_of_volume_options' => false,
        'unit_size_options' => false,
        'vat_conditions' => false,
        'vendor_type_options' => false,
        'waiting_time_options' => false,
        'website_provider_options' => false,
        'welfare_state_options' => false,
        'withdraw_reason_options' => false,
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
        'acceptances' => 'acceptances',
        'acquisition_status_options' => 'acquisitionStatusOptions',
        'address_type_options' => 'addressTypeOptions',
        'agenda_item_category_types' => 'agendaItemCategoryTypes',
        'agenda_item_reminder_merge_field_options' => 'agendaItemReminderMergeFieldOptions',
        'agenda_standard_duration_options' => 'agendaStandardDurationOptions',
        'age_range_options' => 'ageRangeOptions',
        'agricultural_subtype_others' => 'agriculturalSubtypeOthers',
        'air_treatment_options' => 'airTreatmentOptions',
        'alv_agricultural_function_options' => 'alvAgriculturalFunctionOptions',
        'alv_building_plot_destination_options' => 'alvBuildingPlotDestinationOptions',
        'alv_continuation_options' => 'alvContinuationOptions',
        'alv_non_agricultural_function_options' => 'alvNonAgriculturalFunctionOptions',
        'amenities_options' => 'amenitiesOptions',
        'apartment_characteristics' => 'apartmentCharacteristics',
        'apartment_sorts' => 'apartmentSorts',
        'applicant_type_options' => 'applicantTypeOptions',
        'appraisal_certifications' => 'appraisalCertifications',
        'assignment_phases' => 'assignmentPhases',
        'assignment_types' => 'assignmentTypes',
        'attic_options' => 'atticOptions',
        'availability_statuses' => 'availabilityStatuses',
        'balcony_types' => 'balconyTypes',
        'bathroom_facilities' => 'bathroomFacilities',
        'beverage_hospitality_sector_types' => 'beverageHospitalitySectorTypes',
        'bid_status_options' => 'bidStatusOptions',
        'bid_type_options' => 'bidTypeOptions',
        'bog_combination_object_situation_options' => 'bogCombinationObjectSituationOptions',
        'bog_combination_object_status_options' => 'bogCombinationObjectStatusOptions',
        'bog_combination_object_type_options' => 'bogCombinationObjectTypeOptions',
        'building_type_options' => 'buildingTypeOptions',
        'buyer_type_options' => 'buyerTypeOptions',
        'cadastral_lot_size_options' => 'cadastralLotSizeOptions',
        'cattle_farming_subtypes' => 'cattleFarmingSubtypes',
        'certification_options' => 'certificationOptions',
        'child_age_range_options' => 'childAgeRangeOptions',
        'civil_states' => 'civilStates',
        'comfort_quality_options' => 'comfortQualityOptions',
        'commission_paid_by_options' => 'commissionPaidByOptions',
        'commission_type_options' => 'commissionTypeOptions',
        'condition_options' => 'conditionOptions',
        'condition_type_options' => 'conditionTypeOptions',
        'construction_option_options' => 'constructionOptionOptions',
        'construction_periods' => 'constructionPeriods',
        'contact_link_types' => 'contactLinkTypes',
        'contact_person_title_suggestions' => 'contactPersonTitleSuggestions',
        'countries' => 'countries',
        'default_folder_tree_category_options' => 'defaultFolderTreeCategoryOptions',
        'document_template_type_options' => 'documentTemplateTypeOptions',
        'drainage_options' => 'drainageOptions',
        'email_address_types' => 'emailAddressTypes',
        'energy_class_options' => 'energyClassOptions',
        'energy_source_options' => 'energySourceOptions',
        'exclusive_status_options' => 'exclusiveStatusOptions',
        'facility_options' => 'facilityOptions',
        'family_income_options' => 'familyIncomeOptions',
        'fastfood_hospitality_sector_types' => 'fastfoodHospitalitySectorTypes',
        'fixed_variable_options' => 'fixedVariableOptions',
        'floor_type_options' => 'floorTypeOptions',
        'furnishing_options' => 'furnishingOptions',
        'garage_type_options' => 'garageTypeOptions',
        'garden_quality_options' => 'gardenQualityOptions',
        'garden_type_options' => 'gardenTypeOptions',
        'gender' => 'gender',
        'ground_lease_period_options' => 'groundLeasePeriodOptions',
        'ground_ownership_type_options' => 'groundOwnershipTypeOptions',
        'ground_usage_options' => 'groundUsageOptions',
        'heating_method_options' => 'heatingMethodOptions',
        'heating_water_method_options' => 'heatingWaterMethodOptions',
        'horeca_sector_type_options' => 'horecaSectorTypeOptions',
        'horse_company_subtypes' => 'horseCompanySubtypes',
        'horse_trough_location_options' => 'horseTroughLocationOptions',
        'horticultural_company_types' => 'horticulturalCompanyTypes',
        'hotel_hospitality_sector_types' => 'hotelHospitalitySectorTypes',
        'house_characteristics' => 'houseCharacteristics',
        'household_composition_options' => 'householdCompositionOptions',
        'house_sorts' => 'houseSorts',
        'house_types' => 'houseTypes',
        'identification_types' => 'identificationTypes',
        'industrial_building_facility_options' => 'industrialBuildingFacilityOptions',
        'investment_type_options' => 'investmentTypeOptions',
        'invoice_due_terms' => 'invoiceDueTerms',
        'invoice_statuses' => 'invoiceStatuses',
        'invoice_types' => 'invoiceTypes',
        'isolation_type_options' => 'isolationTypeOptions',
        'kitchen_facility_options' => 'kitchenFacilityOptions',
        'kitchen_types' => 'kitchenTypes',
        'land_property_sub_type_options' => 'landPropertySubTypeOptions',
        'languages' => 'languages',
        'leasehold_owner_type_options' => 'leaseholdOwnerTypeOptions',
        'lease_term_unit_options' => 'leaseTermUnitOptions',
        'legal_status_options' => 'legalStatusOptions',
        'leisure_facility_type_options' => 'leisureFacilityTypeOptions',
        'leisure_type_options' => 'leisureTypeOptions',
        'listing_types' => 'listingTypes',
        'living_room_types' => 'livingRoomTypes',
        'location_places' => 'locationPlaces',
        'match_mail_period_options' => 'matchMailPeriodOptions',
        'match_mail_trigger_options' => 'matchMailTriggerOptions',
        'measurment_options' => 'measurmentOptions',
        'media_contract_status_options' => 'mediaContractStatusOptions',
        'media_partner_categories' => 'mediaPartnerCategories',
        'mixed_forms' => 'mixedForms',
        'moving_reason_options' => 'movingReasonOptions',
        'nature_registration_options' => 'natureRegistrationOptions',
        'notification_date_format_options' => 'notificationDateFormatOptions',
        'offer_type_options' => 'offerTypeOptions',
        'open_house_recurrency_options' => 'openHouseRecurrencyOptions',
        'orientations' => 'orientations',
        'ownership_options' => 'ownershipOptions',
        'ownership_type_options' => 'ownershipTypeOptions',
        'parking_facility_options' => 'parkingFacilityOptions',
        'parking_type_options' => 'parkingTypeOptions',
        'pavement_type_options' => 'pavementTypeOptions',
        'peculiarity_options' => 'peculiarityOptions',
        'phone_number_types' => 'phoneNumberTypes',
        'pig_company_types' => 'pigCompanyTypes',
        'point_of_interest_options' => 'pointOfInterestOptions',
        'polution_type_options' => 'polutionTypeOptions',
        'poultry_farming_subtypes' => 'poultryFarmingSubtypes',
        'poultry_housing_type_options' => 'poultryHousingTypeOptions',
        'price_codes' => 'priceCodes',
        'price_history_events' => 'priceHistoryEvents',
        'priorities' => 'priorities',
        'publication_statuses' => 'publicationStatuses',
        'real_estate_associations' => 'realEstateAssociations',
        'real_estate_groups' => 'realEstateGroups',
        'register_reason_options' => 'registerReasonOptions',
        'relation_roles' => 'relationRoles',
        'relation_types' => 'relationTypes',
        'reminder_minutes_options' => 'reminderMinutesOptions',
        'reminder_notification_settings_type_option_list' => 'reminderNotificationSettingsTypeOptionList',
        'rent_conditions' => 'rentConditions',
        'rent_specifications' => 'rentSpecifications',
        'residential_building_type_options' => 'residentialBuildingTypeOptions',
        'residential_facility_options' => 'residentialFacilityOptions',
        'residential_subtype_others' => 'residentialSubtypeOthers',
        'restaurant_hospitality_sector_types' => 'restaurantHospitalitySectorTypes',
        'roof_material_options' => 'roofMaterialOptions',
        'roof_type_options' => 'roofTypeOptions',
        'sale_conditions' => 'saleConditions',
        'search_assignment_facility_options' => 'searchAssignmentFacilityOptions',
        'search_assignment_peculiarity_options' => 'searchAssignmentPeculiarityOptions',
        'situated_type_options' => 'situatedTypeOptions',
        'social_media_type_options' => 'socialMediaTypeOptions',
        'social_property_facility_type_options' => 'socialPropertyFacilityTypeOptions',
        'social_property_type_options' => 'socialPropertyTypeOptions',
        'soil_type_options' => 'soilTypeOptions',
        'space_types' => 'spaceTypes',
        'storage_room_type_options' => 'storageRoomTypeOptions',
        'stoves' => 'stoves',
        'take_over_specification_options' => 'takeOverSpecificationOptions',
        'task_categories' => 'taskCategories',
        'task_follow_ups' => 'taskFollowUps',
        'task_statuses' => 'taskStatuses',
        'template_definition_category_options' => 'templateDefinitionCategoryOptions',
        'timeline_action_sub_options' => 'timelineActionSubOptions',
        'timeline_action_types' => 'timelineActionTypes',
        'type_alv_options' => 'typeALVOptions',
        'type_alv_other_options' => 'typeALVOtherOptions',
        'type_bog_options' => 'typeBOGOptions',
        'type_of_business_law_options' => 'typeOfBusinessLawOptions',
        'type_of_floor_options' => 'typeOfFloorOptions',
        'type_of_habitation_options' => 'typeOfHabitationOptions',
        'type_of_window_frame_options' => 'typeOfWindowFrameOptions',
        'type_part_options' => 'typePARTOptions',
        'type_part_other_options' => 'typePARTOtherOptions',
        'types_of_communal_area' => 'typesOfCommunalArea',
        'unit_of_measurement_options' => 'unitOfMeasurementOptions',
        'unit_of_volume_options' => 'unitOfVolumeOptions',
        'unit_size_options' => 'unitSizeOptions',
        'vat_conditions' => 'vatConditions',
        'vendor_type_options' => 'vendorTypeOptions',
        'waiting_time_options' => 'waitingTimeOptions',
        'website_provider_options' => 'websiteProviderOptions',
        'welfare_state_options' => 'welfareStateOptions',
        'withdraw_reason_options' => 'withdrawReasonOptions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acceptances' => 'setAcceptances',
        'acquisition_status_options' => 'setAcquisitionStatusOptions',
        'address_type_options' => 'setAddressTypeOptions',
        'agenda_item_category_types' => 'setAgendaItemCategoryTypes',
        'agenda_item_reminder_merge_field_options' => 'setAgendaItemReminderMergeFieldOptions',
        'agenda_standard_duration_options' => 'setAgendaStandardDurationOptions',
        'age_range_options' => 'setAgeRangeOptions',
        'agricultural_subtype_others' => 'setAgriculturalSubtypeOthers',
        'air_treatment_options' => 'setAirTreatmentOptions',
        'alv_agricultural_function_options' => 'setAlvAgriculturalFunctionOptions',
        'alv_building_plot_destination_options' => 'setAlvBuildingPlotDestinationOptions',
        'alv_continuation_options' => 'setAlvContinuationOptions',
        'alv_non_agricultural_function_options' => 'setAlvNonAgriculturalFunctionOptions',
        'amenities_options' => 'setAmenitiesOptions',
        'apartment_characteristics' => 'setApartmentCharacteristics',
        'apartment_sorts' => 'setApartmentSorts',
        'applicant_type_options' => 'setApplicantTypeOptions',
        'appraisal_certifications' => 'setAppraisalCertifications',
        'assignment_phases' => 'setAssignmentPhases',
        'assignment_types' => 'setAssignmentTypes',
        'attic_options' => 'setAtticOptions',
        'availability_statuses' => 'setAvailabilityStatuses',
        'balcony_types' => 'setBalconyTypes',
        'bathroom_facilities' => 'setBathroomFacilities',
        'beverage_hospitality_sector_types' => 'setBeverageHospitalitySectorTypes',
        'bid_status_options' => 'setBidStatusOptions',
        'bid_type_options' => 'setBidTypeOptions',
        'bog_combination_object_situation_options' => 'setBogCombinationObjectSituationOptions',
        'bog_combination_object_status_options' => 'setBogCombinationObjectStatusOptions',
        'bog_combination_object_type_options' => 'setBogCombinationObjectTypeOptions',
        'building_type_options' => 'setBuildingTypeOptions',
        'buyer_type_options' => 'setBuyerTypeOptions',
        'cadastral_lot_size_options' => 'setCadastralLotSizeOptions',
        'cattle_farming_subtypes' => 'setCattleFarmingSubtypes',
        'certification_options' => 'setCertificationOptions',
        'child_age_range_options' => 'setChildAgeRangeOptions',
        'civil_states' => 'setCivilStates',
        'comfort_quality_options' => 'setComfortQualityOptions',
        'commission_paid_by_options' => 'setCommissionPaidByOptions',
        'commission_type_options' => 'setCommissionTypeOptions',
        'condition_options' => 'setConditionOptions',
        'condition_type_options' => 'setConditionTypeOptions',
        'construction_option_options' => 'setConstructionOptionOptions',
        'construction_periods' => 'setConstructionPeriods',
        'contact_link_types' => 'setContactLinkTypes',
        'contact_person_title_suggestions' => 'setContactPersonTitleSuggestions',
        'countries' => 'setCountries',
        'default_folder_tree_category_options' => 'setDefaultFolderTreeCategoryOptions',
        'document_template_type_options' => 'setDocumentTemplateTypeOptions',
        'drainage_options' => 'setDrainageOptions',
        'email_address_types' => 'setEmailAddressTypes',
        'energy_class_options' => 'setEnergyClassOptions',
        'energy_source_options' => 'setEnergySourceOptions',
        'exclusive_status_options' => 'setExclusiveStatusOptions',
        'facility_options' => 'setFacilityOptions',
        'family_income_options' => 'setFamilyIncomeOptions',
        'fastfood_hospitality_sector_types' => 'setFastfoodHospitalitySectorTypes',
        'fixed_variable_options' => 'setFixedVariableOptions',
        'floor_type_options' => 'setFloorTypeOptions',
        'furnishing_options' => 'setFurnishingOptions',
        'garage_type_options' => 'setGarageTypeOptions',
        'garden_quality_options' => 'setGardenQualityOptions',
        'garden_type_options' => 'setGardenTypeOptions',
        'gender' => 'setGender',
        'ground_lease_period_options' => 'setGroundLeasePeriodOptions',
        'ground_ownership_type_options' => 'setGroundOwnershipTypeOptions',
        'ground_usage_options' => 'setGroundUsageOptions',
        'heating_method_options' => 'setHeatingMethodOptions',
        'heating_water_method_options' => 'setHeatingWaterMethodOptions',
        'horeca_sector_type_options' => 'setHorecaSectorTypeOptions',
        'horse_company_subtypes' => 'setHorseCompanySubtypes',
        'horse_trough_location_options' => 'setHorseTroughLocationOptions',
        'horticultural_company_types' => 'setHorticulturalCompanyTypes',
        'hotel_hospitality_sector_types' => 'setHotelHospitalitySectorTypes',
        'house_characteristics' => 'setHouseCharacteristics',
        'household_composition_options' => 'setHouseholdCompositionOptions',
        'house_sorts' => 'setHouseSorts',
        'house_types' => 'setHouseTypes',
        'identification_types' => 'setIdentificationTypes',
        'industrial_building_facility_options' => 'setIndustrialBuildingFacilityOptions',
        'investment_type_options' => 'setInvestmentTypeOptions',
        'invoice_due_terms' => 'setInvoiceDueTerms',
        'invoice_statuses' => 'setInvoiceStatuses',
        'invoice_types' => 'setInvoiceTypes',
        'isolation_type_options' => 'setIsolationTypeOptions',
        'kitchen_facility_options' => 'setKitchenFacilityOptions',
        'kitchen_types' => 'setKitchenTypes',
        'land_property_sub_type_options' => 'setLandPropertySubTypeOptions',
        'languages' => 'setLanguages',
        'leasehold_owner_type_options' => 'setLeaseholdOwnerTypeOptions',
        'lease_term_unit_options' => 'setLeaseTermUnitOptions',
        'legal_status_options' => 'setLegalStatusOptions',
        'leisure_facility_type_options' => 'setLeisureFacilityTypeOptions',
        'leisure_type_options' => 'setLeisureTypeOptions',
        'listing_types' => 'setListingTypes',
        'living_room_types' => 'setLivingRoomTypes',
        'location_places' => 'setLocationPlaces',
        'match_mail_period_options' => 'setMatchMailPeriodOptions',
        'match_mail_trigger_options' => 'setMatchMailTriggerOptions',
        'measurment_options' => 'setMeasurmentOptions',
        'media_contract_status_options' => 'setMediaContractStatusOptions',
        'media_partner_categories' => 'setMediaPartnerCategories',
        'mixed_forms' => 'setMixedForms',
        'moving_reason_options' => 'setMovingReasonOptions',
        'nature_registration_options' => 'setNatureRegistrationOptions',
        'notification_date_format_options' => 'setNotificationDateFormatOptions',
        'offer_type_options' => 'setOfferTypeOptions',
        'open_house_recurrency_options' => 'setOpenHouseRecurrencyOptions',
        'orientations' => 'setOrientations',
        'ownership_options' => 'setOwnershipOptions',
        'ownership_type_options' => 'setOwnershipTypeOptions',
        'parking_facility_options' => 'setParkingFacilityOptions',
        'parking_type_options' => 'setParkingTypeOptions',
        'pavement_type_options' => 'setPavementTypeOptions',
        'peculiarity_options' => 'setPeculiarityOptions',
        'phone_number_types' => 'setPhoneNumberTypes',
        'pig_company_types' => 'setPigCompanyTypes',
        'point_of_interest_options' => 'setPointOfInterestOptions',
        'polution_type_options' => 'setPolutionTypeOptions',
        'poultry_farming_subtypes' => 'setPoultryFarmingSubtypes',
        'poultry_housing_type_options' => 'setPoultryHousingTypeOptions',
        'price_codes' => 'setPriceCodes',
        'price_history_events' => 'setPriceHistoryEvents',
        'priorities' => 'setPriorities',
        'publication_statuses' => 'setPublicationStatuses',
        'real_estate_associations' => 'setRealEstateAssociations',
        'real_estate_groups' => 'setRealEstateGroups',
        'register_reason_options' => 'setRegisterReasonOptions',
        'relation_roles' => 'setRelationRoles',
        'relation_types' => 'setRelationTypes',
        'reminder_minutes_options' => 'setReminderMinutesOptions',
        'reminder_notification_settings_type_option_list' => 'setReminderNotificationSettingsTypeOptionList',
        'rent_conditions' => 'setRentConditions',
        'rent_specifications' => 'setRentSpecifications',
        'residential_building_type_options' => 'setResidentialBuildingTypeOptions',
        'residential_facility_options' => 'setResidentialFacilityOptions',
        'residential_subtype_others' => 'setResidentialSubtypeOthers',
        'restaurant_hospitality_sector_types' => 'setRestaurantHospitalitySectorTypes',
        'roof_material_options' => 'setRoofMaterialOptions',
        'roof_type_options' => 'setRoofTypeOptions',
        'sale_conditions' => 'setSaleConditions',
        'search_assignment_facility_options' => 'setSearchAssignmentFacilityOptions',
        'search_assignment_peculiarity_options' => 'setSearchAssignmentPeculiarityOptions',
        'situated_type_options' => 'setSituatedTypeOptions',
        'social_media_type_options' => 'setSocialMediaTypeOptions',
        'social_property_facility_type_options' => 'setSocialPropertyFacilityTypeOptions',
        'social_property_type_options' => 'setSocialPropertyTypeOptions',
        'soil_type_options' => 'setSoilTypeOptions',
        'space_types' => 'setSpaceTypes',
        'storage_room_type_options' => 'setStorageRoomTypeOptions',
        'stoves' => 'setStoves',
        'take_over_specification_options' => 'setTakeOverSpecificationOptions',
        'task_categories' => 'setTaskCategories',
        'task_follow_ups' => 'setTaskFollowUps',
        'task_statuses' => 'setTaskStatuses',
        'template_definition_category_options' => 'setTemplateDefinitionCategoryOptions',
        'timeline_action_sub_options' => 'setTimelineActionSubOptions',
        'timeline_action_types' => 'setTimelineActionTypes',
        'type_alv_options' => 'setTypeAlvOptions',
        'type_alv_other_options' => 'setTypeAlvOtherOptions',
        'type_bog_options' => 'setTypeBogOptions',
        'type_of_business_law_options' => 'setTypeOfBusinessLawOptions',
        'type_of_floor_options' => 'setTypeOfFloorOptions',
        'type_of_habitation_options' => 'setTypeOfHabitationOptions',
        'type_of_window_frame_options' => 'setTypeOfWindowFrameOptions',
        'type_part_options' => 'setTypePartOptions',
        'type_part_other_options' => 'setTypePartOtherOptions',
        'types_of_communal_area' => 'setTypesOfCommunalArea',
        'unit_of_measurement_options' => 'setUnitOfMeasurementOptions',
        'unit_of_volume_options' => 'setUnitOfVolumeOptions',
        'unit_size_options' => 'setUnitSizeOptions',
        'vat_conditions' => 'setVatConditions',
        'vendor_type_options' => 'setVendorTypeOptions',
        'waiting_time_options' => 'setWaitingTimeOptions',
        'website_provider_options' => 'setWebsiteProviderOptions',
        'welfare_state_options' => 'setWelfareStateOptions',
        'withdraw_reason_options' => 'setWithdrawReasonOptions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acceptances' => 'getAcceptances',
        'acquisition_status_options' => 'getAcquisitionStatusOptions',
        'address_type_options' => 'getAddressTypeOptions',
        'agenda_item_category_types' => 'getAgendaItemCategoryTypes',
        'agenda_item_reminder_merge_field_options' => 'getAgendaItemReminderMergeFieldOptions',
        'agenda_standard_duration_options' => 'getAgendaStandardDurationOptions',
        'age_range_options' => 'getAgeRangeOptions',
        'agricultural_subtype_others' => 'getAgriculturalSubtypeOthers',
        'air_treatment_options' => 'getAirTreatmentOptions',
        'alv_agricultural_function_options' => 'getAlvAgriculturalFunctionOptions',
        'alv_building_plot_destination_options' => 'getAlvBuildingPlotDestinationOptions',
        'alv_continuation_options' => 'getAlvContinuationOptions',
        'alv_non_agricultural_function_options' => 'getAlvNonAgriculturalFunctionOptions',
        'amenities_options' => 'getAmenitiesOptions',
        'apartment_characteristics' => 'getApartmentCharacteristics',
        'apartment_sorts' => 'getApartmentSorts',
        'applicant_type_options' => 'getApplicantTypeOptions',
        'appraisal_certifications' => 'getAppraisalCertifications',
        'assignment_phases' => 'getAssignmentPhases',
        'assignment_types' => 'getAssignmentTypes',
        'attic_options' => 'getAtticOptions',
        'availability_statuses' => 'getAvailabilityStatuses',
        'balcony_types' => 'getBalconyTypes',
        'bathroom_facilities' => 'getBathroomFacilities',
        'beverage_hospitality_sector_types' => 'getBeverageHospitalitySectorTypes',
        'bid_status_options' => 'getBidStatusOptions',
        'bid_type_options' => 'getBidTypeOptions',
        'bog_combination_object_situation_options' => 'getBogCombinationObjectSituationOptions',
        'bog_combination_object_status_options' => 'getBogCombinationObjectStatusOptions',
        'bog_combination_object_type_options' => 'getBogCombinationObjectTypeOptions',
        'building_type_options' => 'getBuildingTypeOptions',
        'buyer_type_options' => 'getBuyerTypeOptions',
        'cadastral_lot_size_options' => 'getCadastralLotSizeOptions',
        'cattle_farming_subtypes' => 'getCattleFarmingSubtypes',
        'certification_options' => 'getCertificationOptions',
        'child_age_range_options' => 'getChildAgeRangeOptions',
        'civil_states' => 'getCivilStates',
        'comfort_quality_options' => 'getComfortQualityOptions',
        'commission_paid_by_options' => 'getCommissionPaidByOptions',
        'commission_type_options' => 'getCommissionTypeOptions',
        'condition_options' => 'getConditionOptions',
        'condition_type_options' => 'getConditionTypeOptions',
        'construction_option_options' => 'getConstructionOptionOptions',
        'construction_periods' => 'getConstructionPeriods',
        'contact_link_types' => 'getContactLinkTypes',
        'contact_person_title_suggestions' => 'getContactPersonTitleSuggestions',
        'countries' => 'getCountries',
        'default_folder_tree_category_options' => 'getDefaultFolderTreeCategoryOptions',
        'document_template_type_options' => 'getDocumentTemplateTypeOptions',
        'drainage_options' => 'getDrainageOptions',
        'email_address_types' => 'getEmailAddressTypes',
        'energy_class_options' => 'getEnergyClassOptions',
        'energy_source_options' => 'getEnergySourceOptions',
        'exclusive_status_options' => 'getExclusiveStatusOptions',
        'facility_options' => 'getFacilityOptions',
        'family_income_options' => 'getFamilyIncomeOptions',
        'fastfood_hospitality_sector_types' => 'getFastfoodHospitalitySectorTypes',
        'fixed_variable_options' => 'getFixedVariableOptions',
        'floor_type_options' => 'getFloorTypeOptions',
        'furnishing_options' => 'getFurnishingOptions',
        'garage_type_options' => 'getGarageTypeOptions',
        'garden_quality_options' => 'getGardenQualityOptions',
        'garden_type_options' => 'getGardenTypeOptions',
        'gender' => 'getGender',
        'ground_lease_period_options' => 'getGroundLeasePeriodOptions',
        'ground_ownership_type_options' => 'getGroundOwnershipTypeOptions',
        'ground_usage_options' => 'getGroundUsageOptions',
        'heating_method_options' => 'getHeatingMethodOptions',
        'heating_water_method_options' => 'getHeatingWaterMethodOptions',
        'horeca_sector_type_options' => 'getHorecaSectorTypeOptions',
        'horse_company_subtypes' => 'getHorseCompanySubtypes',
        'horse_trough_location_options' => 'getHorseTroughLocationOptions',
        'horticultural_company_types' => 'getHorticulturalCompanyTypes',
        'hotel_hospitality_sector_types' => 'getHotelHospitalitySectorTypes',
        'house_characteristics' => 'getHouseCharacteristics',
        'household_composition_options' => 'getHouseholdCompositionOptions',
        'house_sorts' => 'getHouseSorts',
        'house_types' => 'getHouseTypes',
        'identification_types' => 'getIdentificationTypes',
        'industrial_building_facility_options' => 'getIndustrialBuildingFacilityOptions',
        'investment_type_options' => 'getInvestmentTypeOptions',
        'invoice_due_terms' => 'getInvoiceDueTerms',
        'invoice_statuses' => 'getInvoiceStatuses',
        'invoice_types' => 'getInvoiceTypes',
        'isolation_type_options' => 'getIsolationTypeOptions',
        'kitchen_facility_options' => 'getKitchenFacilityOptions',
        'kitchen_types' => 'getKitchenTypes',
        'land_property_sub_type_options' => 'getLandPropertySubTypeOptions',
        'languages' => 'getLanguages',
        'leasehold_owner_type_options' => 'getLeaseholdOwnerTypeOptions',
        'lease_term_unit_options' => 'getLeaseTermUnitOptions',
        'legal_status_options' => 'getLegalStatusOptions',
        'leisure_facility_type_options' => 'getLeisureFacilityTypeOptions',
        'leisure_type_options' => 'getLeisureTypeOptions',
        'listing_types' => 'getListingTypes',
        'living_room_types' => 'getLivingRoomTypes',
        'location_places' => 'getLocationPlaces',
        'match_mail_period_options' => 'getMatchMailPeriodOptions',
        'match_mail_trigger_options' => 'getMatchMailTriggerOptions',
        'measurment_options' => 'getMeasurmentOptions',
        'media_contract_status_options' => 'getMediaContractStatusOptions',
        'media_partner_categories' => 'getMediaPartnerCategories',
        'mixed_forms' => 'getMixedForms',
        'moving_reason_options' => 'getMovingReasonOptions',
        'nature_registration_options' => 'getNatureRegistrationOptions',
        'notification_date_format_options' => 'getNotificationDateFormatOptions',
        'offer_type_options' => 'getOfferTypeOptions',
        'open_house_recurrency_options' => 'getOpenHouseRecurrencyOptions',
        'orientations' => 'getOrientations',
        'ownership_options' => 'getOwnershipOptions',
        'ownership_type_options' => 'getOwnershipTypeOptions',
        'parking_facility_options' => 'getParkingFacilityOptions',
        'parking_type_options' => 'getParkingTypeOptions',
        'pavement_type_options' => 'getPavementTypeOptions',
        'peculiarity_options' => 'getPeculiarityOptions',
        'phone_number_types' => 'getPhoneNumberTypes',
        'pig_company_types' => 'getPigCompanyTypes',
        'point_of_interest_options' => 'getPointOfInterestOptions',
        'polution_type_options' => 'getPolutionTypeOptions',
        'poultry_farming_subtypes' => 'getPoultryFarmingSubtypes',
        'poultry_housing_type_options' => 'getPoultryHousingTypeOptions',
        'price_codes' => 'getPriceCodes',
        'price_history_events' => 'getPriceHistoryEvents',
        'priorities' => 'getPriorities',
        'publication_statuses' => 'getPublicationStatuses',
        'real_estate_associations' => 'getRealEstateAssociations',
        'real_estate_groups' => 'getRealEstateGroups',
        'register_reason_options' => 'getRegisterReasonOptions',
        'relation_roles' => 'getRelationRoles',
        'relation_types' => 'getRelationTypes',
        'reminder_minutes_options' => 'getReminderMinutesOptions',
        'reminder_notification_settings_type_option_list' => 'getReminderNotificationSettingsTypeOptionList',
        'rent_conditions' => 'getRentConditions',
        'rent_specifications' => 'getRentSpecifications',
        'residential_building_type_options' => 'getResidentialBuildingTypeOptions',
        'residential_facility_options' => 'getResidentialFacilityOptions',
        'residential_subtype_others' => 'getResidentialSubtypeOthers',
        'restaurant_hospitality_sector_types' => 'getRestaurantHospitalitySectorTypes',
        'roof_material_options' => 'getRoofMaterialOptions',
        'roof_type_options' => 'getRoofTypeOptions',
        'sale_conditions' => 'getSaleConditions',
        'search_assignment_facility_options' => 'getSearchAssignmentFacilityOptions',
        'search_assignment_peculiarity_options' => 'getSearchAssignmentPeculiarityOptions',
        'situated_type_options' => 'getSituatedTypeOptions',
        'social_media_type_options' => 'getSocialMediaTypeOptions',
        'social_property_facility_type_options' => 'getSocialPropertyFacilityTypeOptions',
        'social_property_type_options' => 'getSocialPropertyTypeOptions',
        'soil_type_options' => 'getSoilTypeOptions',
        'space_types' => 'getSpaceTypes',
        'storage_room_type_options' => 'getStorageRoomTypeOptions',
        'stoves' => 'getStoves',
        'take_over_specification_options' => 'getTakeOverSpecificationOptions',
        'task_categories' => 'getTaskCategories',
        'task_follow_ups' => 'getTaskFollowUps',
        'task_statuses' => 'getTaskStatuses',
        'template_definition_category_options' => 'getTemplateDefinitionCategoryOptions',
        'timeline_action_sub_options' => 'getTimelineActionSubOptions',
        'timeline_action_types' => 'getTimelineActionTypes',
        'type_alv_options' => 'getTypeAlvOptions',
        'type_alv_other_options' => 'getTypeAlvOtherOptions',
        'type_bog_options' => 'getTypeBogOptions',
        'type_of_business_law_options' => 'getTypeOfBusinessLawOptions',
        'type_of_floor_options' => 'getTypeOfFloorOptions',
        'type_of_habitation_options' => 'getTypeOfHabitationOptions',
        'type_of_window_frame_options' => 'getTypeOfWindowFrameOptions',
        'type_part_options' => 'getTypePartOptions',
        'type_part_other_options' => 'getTypePartOtherOptions',
        'types_of_communal_area' => 'getTypesOfCommunalArea',
        'unit_of_measurement_options' => 'getUnitOfMeasurementOptions',
        'unit_of_volume_options' => 'getUnitOfVolumeOptions',
        'unit_size_options' => 'getUnitSizeOptions',
        'vat_conditions' => 'getVatConditions',
        'vendor_type_options' => 'getVendorTypeOptions',
        'waiting_time_options' => 'getWaitingTimeOptions',
        'website_provider_options' => 'getWebsiteProviderOptions',
        'welfare_state_options' => 'getWelfareStateOptions',
        'withdraw_reason_options' => 'getWithdrawReasonOptions',
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
        $this->setIfExists('acceptances', $data ?? [], null);
        $this->setIfExists('acquisition_status_options', $data ?? [], null);
        $this->setIfExists('address_type_options', $data ?? [], null);
        $this->setIfExists('agenda_item_category_types', $data ?? [], null);
        $this->setIfExists('agenda_item_reminder_merge_field_options', $data ?? [], null);
        $this->setIfExists('agenda_standard_duration_options', $data ?? [], null);
        $this->setIfExists('age_range_options', $data ?? [], null);
        $this->setIfExists('agricultural_subtype_others', $data ?? [], null);
        $this->setIfExists('air_treatment_options', $data ?? [], null);
        $this->setIfExists('alv_agricultural_function_options', $data ?? [], null);
        $this->setIfExists('alv_building_plot_destination_options', $data ?? [], null);
        $this->setIfExists('alv_continuation_options', $data ?? [], null);
        $this->setIfExists('alv_non_agricultural_function_options', $data ?? [], null);
        $this->setIfExists('amenities_options', $data ?? [], null);
        $this->setIfExists('apartment_characteristics', $data ?? [], null);
        $this->setIfExists('apartment_sorts', $data ?? [], null);
        $this->setIfExists('applicant_type_options', $data ?? [], null);
        $this->setIfExists('appraisal_certifications', $data ?? [], null);
        $this->setIfExists('assignment_phases', $data ?? [], null);
        $this->setIfExists('assignment_types', $data ?? [], null);
        $this->setIfExists('attic_options', $data ?? [], null);
        $this->setIfExists('availability_statuses', $data ?? [], null);
        $this->setIfExists('balcony_types', $data ?? [], null);
        $this->setIfExists('bathroom_facilities', $data ?? [], null);
        $this->setIfExists('beverage_hospitality_sector_types', $data ?? [], null);
        $this->setIfExists('bid_status_options', $data ?? [], null);
        $this->setIfExists('bid_type_options', $data ?? [], null);
        $this->setIfExists('bog_combination_object_situation_options', $data ?? [], null);
        $this->setIfExists('bog_combination_object_status_options', $data ?? [], null);
        $this->setIfExists('bog_combination_object_type_options', $data ?? [], null);
        $this->setIfExists('building_type_options', $data ?? [], null);
        $this->setIfExists('buyer_type_options', $data ?? [], null);
        $this->setIfExists('cadastral_lot_size_options', $data ?? [], null);
        $this->setIfExists('cattle_farming_subtypes', $data ?? [], null);
        $this->setIfExists('certification_options', $data ?? [], null);
        $this->setIfExists('child_age_range_options', $data ?? [], null);
        $this->setIfExists('civil_states', $data ?? [], null);
        $this->setIfExists('comfort_quality_options', $data ?? [], null);
        $this->setIfExists('commission_paid_by_options', $data ?? [], null);
        $this->setIfExists('commission_type_options', $data ?? [], null);
        $this->setIfExists('condition_options', $data ?? [], null);
        $this->setIfExists('condition_type_options', $data ?? [], null);
        $this->setIfExists('construction_option_options', $data ?? [], null);
        $this->setIfExists('construction_periods', $data ?? [], null);
        $this->setIfExists('contact_link_types', $data ?? [], null);
        $this->setIfExists('contact_person_title_suggestions', $data ?? [], null);
        $this->setIfExists('countries', $data ?? [], null);
        $this->setIfExists('default_folder_tree_category_options', $data ?? [], null);
        $this->setIfExists('document_template_type_options', $data ?? [], null);
        $this->setIfExists('drainage_options', $data ?? [], null);
        $this->setIfExists('email_address_types', $data ?? [], null);
        $this->setIfExists('energy_class_options', $data ?? [], null);
        $this->setIfExists('energy_source_options', $data ?? [], null);
        $this->setIfExists('exclusive_status_options', $data ?? [], null);
        $this->setIfExists('facility_options', $data ?? [], null);
        $this->setIfExists('family_income_options', $data ?? [], null);
        $this->setIfExists('fastfood_hospitality_sector_types', $data ?? [], null);
        $this->setIfExists('fixed_variable_options', $data ?? [], null);
        $this->setIfExists('floor_type_options', $data ?? [], null);
        $this->setIfExists('furnishing_options', $data ?? [], null);
        $this->setIfExists('garage_type_options', $data ?? [], null);
        $this->setIfExists('garden_quality_options', $data ?? [], null);
        $this->setIfExists('garden_type_options', $data ?? [], null);
        $this->setIfExists('gender', $data ?? [], null);
        $this->setIfExists('ground_lease_period_options', $data ?? [], null);
        $this->setIfExists('ground_ownership_type_options', $data ?? [], null);
        $this->setIfExists('ground_usage_options', $data ?? [], null);
        $this->setIfExists('heating_method_options', $data ?? [], null);
        $this->setIfExists('heating_water_method_options', $data ?? [], null);
        $this->setIfExists('horeca_sector_type_options', $data ?? [], null);
        $this->setIfExists('horse_company_subtypes', $data ?? [], null);
        $this->setIfExists('horse_trough_location_options', $data ?? [], null);
        $this->setIfExists('horticultural_company_types', $data ?? [], null);
        $this->setIfExists('hotel_hospitality_sector_types', $data ?? [], null);
        $this->setIfExists('house_characteristics', $data ?? [], null);
        $this->setIfExists('household_composition_options', $data ?? [], null);
        $this->setIfExists('house_sorts', $data ?? [], null);
        $this->setIfExists('house_types', $data ?? [], null);
        $this->setIfExists('identification_types', $data ?? [], null);
        $this->setIfExists('industrial_building_facility_options', $data ?? [], null);
        $this->setIfExists('investment_type_options', $data ?? [], null);
        $this->setIfExists('invoice_due_terms', $data ?? [], null);
        $this->setIfExists('invoice_statuses', $data ?? [], null);
        $this->setIfExists('invoice_types', $data ?? [], null);
        $this->setIfExists('isolation_type_options', $data ?? [], null);
        $this->setIfExists('kitchen_facility_options', $data ?? [], null);
        $this->setIfExists('kitchen_types', $data ?? [], null);
        $this->setIfExists('land_property_sub_type_options', $data ?? [], null);
        $this->setIfExists('languages', $data ?? [], null);
        $this->setIfExists('leasehold_owner_type_options', $data ?? [], null);
        $this->setIfExists('lease_term_unit_options', $data ?? [], null);
        $this->setIfExists('legal_status_options', $data ?? [], null);
        $this->setIfExists('leisure_facility_type_options', $data ?? [], null);
        $this->setIfExists('leisure_type_options', $data ?? [], null);
        $this->setIfExists('listing_types', $data ?? [], null);
        $this->setIfExists('living_room_types', $data ?? [], null);
        $this->setIfExists('location_places', $data ?? [], null);
        $this->setIfExists('match_mail_period_options', $data ?? [], null);
        $this->setIfExists('match_mail_trigger_options', $data ?? [], null);
        $this->setIfExists('measurment_options', $data ?? [], null);
        $this->setIfExists('media_contract_status_options', $data ?? [], null);
        $this->setIfExists('media_partner_categories', $data ?? [], null);
        $this->setIfExists('mixed_forms', $data ?? [], null);
        $this->setIfExists('moving_reason_options', $data ?? [], null);
        $this->setIfExists('nature_registration_options', $data ?? [], null);
        $this->setIfExists('notification_date_format_options', $data ?? [], null);
        $this->setIfExists('offer_type_options', $data ?? [], null);
        $this->setIfExists('open_house_recurrency_options', $data ?? [], null);
        $this->setIfExists('orientations', $data ?? [], null);
        $this->setIfExists('ownership_options', $data ?? [], null);
        $this->setIfExists('ownership_type_options', $data ?? [], null);
        $this->setIfExists('parking_facility_options', $data ?? [], null);
        $this->setIfExists('parking_type_options', $data ?? [], null);
        $this->setIfExists('pavement_type_options', $data ?? [], null);
        $this->setIfExists('peculiarity_options', $data ?? [], null);
        $this->setIfExists('phone_number_types', $data ?? [], null);
        $this->setIfExists('pig_company_types', $data ?? [], null);
        $this->setIfExists('point_of_interest_options', $data ?? [], null);
        $this->setIfExists('polution_type_options', $data ?? [], null);
        $this->setIfExists('poultry_farming_subtypes', $data ?? [], null);
        $this->setIfExists('poultry_housing_type_options', $data ?? [], null);
        $this->setIfExists('price_codes', $data ?? [], null);
        $this->setIfExists('price_history_events', $data ?? [], null);
        $this->setIfExists('priorities', $data ?? [], null);
        $this->setIfExists('publication_statuses', $data ?? [], null);
        $this->setIfExists('real_estate_associations', $data ?? [], null);
        $this->setIfExists('real_estate_groups', $data ?? [], null);
        $this->setIfExists('register_reason_options', $data ?? [], null);
        $this->setIfExists('relation_roles', $data ?? [], null);
        $this->setIfExists('relation_types', $data ?? [], null);
        $this->setIfExists('reminder_minutes_options', $data ?? [], null);
        $this->setIfExists('reminder_notification_settings_type_option_list', $data ?? [], null);
        $this->setIfExists('rent_conditions', $data ?? [], null);
        $this->setIfExists('rent_specifications', $data ?? [], null);
        $this->setIfExists('residential_building_type_options', $data ?? [], null);
        $this->setIfExists('residential_facility_options', $data ?? [], null);
        $this->setIfExists('residential_subtype_others', $data ?? [], null);
        $this->setIfExists('restaurant_hospitality_sector_types', $data ?? [], null);
        $this->setIfExists('roof_material_options', $data ?? [], null);
        $this->setIfExists('roof_type_options', $data ?? [], null);
        $this->setIfExists('sale_conditions', $data ?? [], null);
        $this->setIfExists('search_assignment_facility_options', $data ?? [], null);
        $this->setIfExists('search_assignment_peculiarity_options', $data ?? [], null);
        $this->setIfExists('situated_type_options', $data ?? [], null);
        $this->setIfExists('social_media_type_options', $data ?? [], null);
        $this->setIfExists('social_property_facility_type_options', $data ?? [], null);
        $this->setIfExists('social_property_type_options', $data ?? [], null);
        $this->setIfExists('soil_type_options', $data ?? [], null);
        $this->setIfExists('space_types', $data ?? [], null);
        $this->setIfExists('storage_room_type_options', $data ?? [], null);
        $this->setIfExists('stoves', $data ?? [], null);
        $this->setIfExists('take_over_specification_options', $data ?? [], null);
        $this->setIfExists('task_categories', $data ?? [], null);
        $this->setIfExists('task_follow_ups', $data ?? [], null);
        $this->setIfExists('task_statuses', $data ?? [], null);
        $this->setIfExists('template_definition_category_options', $data ?? [], null);
        $this->setIfExists('timeline_action_sub_options', $data ?? [], null);
        $this->setIfExists('timeline_action_types', $data ?? [], null);
        $this->setIfExists('type_alv_options', $data ?? [], null);
        $this->setIfExists('type_alv_other_options', $data ?? [], null);
        $this->setIfExists('type_bog_options', $data ?? [], null);
        $this->setIfExists('type_of_business_law_options', $data ?? [], null);
        $this->setIfExists('type_of_floor_options', $data ?? [], null);
        $this->setIfExists('type_of_habitation_options', $data ?? [], null);
        $this->setIfExists('type_of_window_frame_options', $data ?? [], null);
        $this->setIfExists('type_part_options', $data ?? [], null);
        $this->setIfExists('type_part_other_options', $data ?? [], null);
        $this->setIfExists('types_of_communal_area', $data ?? [], null);
        $this->setIfExists('unit_of_measurement_options', $data ?? [], null);
        $this->setIfExists('unit_of_volume_options', $data ?? [], null);
        $this->setIfExists('unit_size_options', $data ?? [], null);
        $this->setIfExists('vat_conditions', $data ?? [], null);
        $this->setIfExists('vendor_type_options', $data ?? [], null);
        $this->setIfExists('waiting_time_options', $data ?? [], null);
        $this->setIfExists('website_provider_options', $data ?? [], null);
        $this->setIfExists('welfare_state_options', $data ?? [], null);
        $this->setIfExists('withdraw_reason_options', $data ?? [], null);
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
     * Gets acceptances
     *
     * @return \Brixion\Kolibri\Model\AcceptanceOption[]|null
     */
    public function getAcceptances()
    {
        return $this->container['acceptances'];
    }

    /**
     * Sets acceptances
     *
     * @param \Brixion\Kolibri\Model\AcceptanceOption[]|null $acceptances Acceptances (E.g. 'In Consultation', 'Per Date').
     *
     * @return self
     */
    public function setAcceptances($acceptances)
    {
        if (is_null($acceptances)) {
            throw new \InvalidArgumentException('non-nullable acceptances cannot be null');
        }
        $this->container['acceptances'] = $acceptances;

        return $this;
    }

    /**
     * Gets acquisition_status_options
     *
     * @return \Brixion\Kolibri\Model\AcquisitionStatusOption[]|null
     */
    public function getAcquisitionStatusOptions()
    {
        return $this->container['acquisition_status_options'];
    }

    /**
     * Sets acquisition_status_options
     *
     * @param \Brixion\Kolibri\Model\AcquisitionStatusOption[]|null $acquisition_status_options List of all Acquisition Status(E.g. 'New', 'Under Negociation', 'Canceled', 'Purchased')
     *
     * @return self
     */
    public function setAcquisitionStatusOptions($acquisition_status_options)
    {
        if (is_null($acquisition_status_options)) {
            throw new \InvalidArgumentException('non-nullable acquisition_status_options cannot be null');
        }
        $this->container['acquisition_status_options'] = $acquisition_status_options;

        return $this;
    }

    /**
     * Gets address_type_options
     *
     * @return \Brixion\Kolibri\Model\AddressTypeOption[]|null
     */
    public function getAddressTypeOptions()
    {
        return $this->container['address_type_options'];
    }

    /**
     * Sets address_type_options
     *
     * @param \Brixion\Kolibri\Model\AddressTypeOption[]|null $address_type_options Address type options (E.g. 'future', 'past', 'current')
     *
     * @return self
     */
    public function setAddressTypeOptions($address_type_options)
    {
        if (is_null($address_type_options)) {
            throw new \InvalidArgumentException('non-nullable address_type_options cannot be null');
        }
        $this->container['address_type_options'] = $address_type_options;

        return $this;
    }

    /**
     * Gets agenda_item_category_types
     *
     * @return \Brixion\Kolibri\Model\AgendaItemCategoryTypeOption[]|null
     */
    public function getAgendaItemCategoryTypes()
    {
        return $this->container['agenda_item_category_types'];
    }

    /**
     * Sets agenda_item_category_types
     *
     * @param \Brixion\Kolibri\Model\AgendaItemCategoryTypeOption[]|null $agenda_item_category_types Agenda item category types (E.g. 'Viewing', 'Other')
     *
     * @return self
     */
    public function setAgendaItemCategoryTypes($agenda_item_category_types)
    {
        if (is_null($agenda_item_category_types)) {
            throw new \InvalidArgumentException('non-nullable agenda_item_category_types cannot be null');
        }
        $this->container['agenda_item_category_types'] = $agenda_item_category_types;

        return $this;
    }

    /**
     * Gets agenda_item_reminder_merge_field_options
     *
     * @return \Brixion\Kolibri\Model\AgendaItemReminderMergeFieldOption[]|null
     */
    public function getAgendaItemReminderMergeFieldOptions()
    {
        return $this->container['agenda_item_reminder_merge_field_options'];
    }

    /**
     * Sets agenda_item_reminder_merge_field_options
     *
     * @param \Brixion\Kolibri\Model\AgendaItemReminderMergeFieldOption[]|null $agenda_item_reminder_merge_field_options Agenda Item Category reminder merge fields (E.g. '{address}', '{ContactEmailAddress}')
     *
     * @return self
     */
    public function setAgendaItemReminderMergeFieldOptions($agenda_item_reminder_merge_field_options)
    {
        if (is_null($agenda_item_reminder_merge_field_options)) {
            throw new \InvalidArgumentException('non-nullable agenda_item_reminder_merge_field_options cannot be null');
        }
        $this->container['agenda_item_reminder_merge_field_options'] = $agenda_item_reminder_merge_field_options;

        return $this;
    }

    /**
     * Gets agenda_standard_duration_options
     *
     * @return \Brixion\Kolibri\Model\AgendaStandardDurationOption[]|null
     */
    public function getAgendaStandardDurationOptions()
    {
        return $this->container['agenda_standard_duration_options'];
    }

    /**
     * Sets agenda_standard_duration_options
     *
     * @param \Brixion\Kolibri\Model\AgendaStandardDurationOption[]|null $agenda_standard_duration_options Agenda StandardDuration Options (E.g. '15 minutes', '2 hours', 'All day'). Dutch: Standaard duur afspraak
     *
     * @return self
     */
    public function setAgendaStandardDurationOptions($agenda_standard_duration_options)
    {
        if (is_null($agenda_standard_duration_options)) {
            throw new \InvalidArgumentException('non-nullable agenda_standard_duration_options cannot be null');
        }
        $this->container['agenda_standard_duration_options'] = $agenda_standard_duration_options;

        return $this;
    }

    /**
     * Gets age_range_options
     *
     * @return \Brixion\Kolibri\Model\AgeRangeOption[]|null
     */
    public function getAgeRangeOptions()
    {
        return $this->container['age_range_options'];
    }

    /**
     * Sets age_range_options
     *
     * @param \Brixion\Kolibri\Model\AgeRangeOption[]|null $age_range_options Age Range options (E.g. '25 - 34 year', 'Older then 75').
     *
     * @return self
     */
    public function setAgeRangeOptions($age_range_options)
    {
        if (is_null($age_range_options)) {
            throw new \InvalidArgumentException('non-nullable age_range_options cannot be null');
        }
        $this->container['age_range_options'] = $age_range_options;

        return $this;
    }

    /**
     * Gets agricultural_subtype_others
     *
     * @return \Brixion\Kolibri\Model\AgriculturalSubtypeOtherOption[]|null
     */
    public function getAgriculturalSubtypeOthers()
    {
        return $this->container['agricultural_subtype_others'];
    }

    /**
     * Sets agricultural_subtype_others
     *
     * @param \Brixion\Kolibri\Model\AgriculturalSubtypeOtherOption[]|null $agricultural_subtype_others Agricultural subtype 'others'.  (E.g. 'sheep', 'goat', 'worms')
     *
     * @return self
     */
    public function setAgriculturalSubtypeOthers($agricultural_subtype_others)
    {
        if (is_null($agricultural_subtype_others)) {
            throw new \InvalidArgumentException('non-nullable agricultural_subtype_others cannot be null');
        }
        $this->container['agricultural_subtype_others'] = $agricultural_subtype_others;

        return $this;
    }

    /**
     * Gets air_treatment_options
     *
     * @return \Brixion\Kolibri\Model\AirTreatmentOption[]|null
     */
    public function getAirTreatmentOptions()
    {
        return $this->container['air_treatment_options'];
    }

    /**
     * Sets air_treatment_options
     *
     * @param \Brixion\Kolibri\Model\AirTreatmentOption[]|null $air_treatment_options Air treatment Options (E.g. 'Airconditioning', 'Ventilation', 'Peak cooling'). Dutch: Luchtbehandeling
     *
     * @return self
     */
    public function setAirTreatmentOptions($air_treatment_options)
    {
        if (is_null($air_treatment_options)) {
            throw new \InvalidArgumentException('non-nullable air_treatment_options cannot be null');
        }
        $this->container['air_treatment_options'] = $air_treatment_options;

        return $this;
    }

    /**
     * Gets alv_agricultural_function_options
     *
     * @return \Brixion\Kolibri\Model\AlvAgriculturalFunctionOption[]|null
     */
    public function getAlvAgriculturalFunctionOptions()
    {
        return $this->container['alv_agricultural_function_options'];
    }

    /**
     * Sets alv_agricultural_function_options
     *
     * @param \Brixion\Kolibri\Model\AlvAgriculturalFunctionOption[]|null $alv_agricultural_function_options Alv agricultural function options (E.g. 'Arable farm', 'Fruit growing company')
     *
     * @return self
     */
    public function setAlvAgriculturalFunctionOptions($alv_agricultural_function_options)
    {
        if (is_null($alv_agricultural_function_options)) {
            throw new \InvalidArgumentException('non-nullable alv_agricultural_function_options cannot be null');
        }
        $this->container['alv_agricultural_function_options'] = $alv_agricultural_function_options;

        return $this;
    }

    /**
     * Gets alv_building_plot_destination_options
     *
     * @return \Brixion\Kolibri\Model\AlvBuildingPlotDestinationOption[]|null
     */
    public function getAlvBuildingPlotDestinationOptions()
    {
        return $this->container['alv_building_plot_destination_options'];
    }

    /**
     * Sets alv_building_plot_destination_options
     *
     * @param \Brixion\Kolibri\Model\AlvBuildingPlotDestinationOption[]|null $alv_building_plot_destination_options Alv building plot destination options (E.g. 'Veal calf holding', 'dairy farm')
     *
     * @return self
     */
    public function setAlvBuildingPlotDestinationOptions($alv_building_plot_destination_options)
    {
        if (is_null($alv_building_plot_destination_options)) {
            throw new \InvalidArgumentException('non-nullable alv_building_plot_destination_options cannot be null');
        }
        $this->container['alv_building_plot_destination_options'] = $alv_building_plot_destination_options;

        return $this;
    }

    /**
     * Gets alv_continuation_options
     *
     * @return \Brixion\Kolibri\Model\AlvContinuationOption[]|null
     */
    public function getAlvContinuationOptions()
    {
        return $this->container['alv_continuation_options'];
    }

    /**
     * Sets alv_continuation_options
     *
     * @param \Brixion\Kolibri\Model\AlvContinuationOption[]|null $alv_continuation_options Alv continuation options (E.g. 'Current function', 'Other agricultural function')
     *
     * @return self
     */
    public function setAlvContinuationOptions($alv_continuation_options)
    {
        if (is_null($alv_continuation_options)) {
            throw new \InvalidArgumentException('non-nullable alv_continuation_options cannot be null');
        }
        $this->container['alv_continuation_options'] = $alv_continuation_options;

        return $this;
    }

    /**
     * Gets alv_non_agricultural_function_options
     *
     * @return \Brixion\Kolibri\Model\AlvNonAgriculturalFunctionOption[]|null
     */
    public function getAlvNonAgriculturalFunctionOptions()
    {
        return $this->container['alv_non_agricultural_function_options'];
    }

    /**
     * Sets alv_non_agricultural_function_options
     *
     * @param \Brixion\Kolibri\Model\AlvNonAgriculturalFunctionOption[]|null $alv_non_agricultural_function_options Non alv agricultural function options (E.g. 'care function', 'Non agricultural company')
     *
     * @return self
     */
    public function setAlvNonAgriculturalFunctionOptions($alv_non_agricultural_function_options)
    {
        if (is_null($alv_non_agricultural_function_options)) {
            throw new \InvalidArgumentException('non-nullable alv_non_agricultural_function_options cannot be null');
        }
        $this->container['alv_non_agricultural_function_options'] = $alv_non_agricultural_function_options;

        return $this;
    }

    /**
     * Gets amenities_options
     *
     * @return \Brixion\Kolibri\Model\AmenitiesOption[]|null
     */
    public function getAmenitiesOptions()
    {
        return $this->container['amenities_options'];
    }

    /**
     * Sets amenities_options
     *
     * @param \Brixion\Kolibri\Model\AmenitiesOption[]|null $amenities_options Amentities options (E.g. 'Heating', 'Electirc door', 'Water')
     *
     * @return self
     */
    public function setAmenitiesOptions($amenities_options)
    {
        if (is_null($amenities_options)) {
            throw new \InvalidArgumentException('non-nullable amenities_options cannot be null');
        }
        $this->container['amenities_options'] = $amenities_options;

        return $this;
    }

    /**
     * Gets apartment_characteristics
     *
     * @return \Brixion\Kolibri\Model\ApartmentCharacteristicOption[]|null
     */
    public function getApartmentCharacteristics()
    {
        return $this->container['apartment_characteristics'];
    }

    /**
     * Sets apartment_characteristics
     *
     * @param \Brixion\Kolibri\Model\ApartmentCharacteristicOption[]|null $apartment_characteristics Apartment characteristics.  (E.g. 'ServiceFlat', Common Apartmen', 'CorridorFlat').
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
     * Gets apartment_sorts
     *
     * @return \Brixion\Kolibri\Model\ApartmentSortOption[]|null
     */
    public function getApartmentSorts()
    {
        return $this->container['apartment_sorts'];
    }

    /**
     * Sets apartment_sorts
     *
     * @param \Brixion\Kolibri\Model\ApartmentSortOption[]|null $apartment_sorts Apartment sort. (E.g. 'Upstairs Apartment', 'Ground Floor Apartment', 'Maisonette')
     *
     * @return self
     */
    public function setApartmentSorts($apartment_sorts)
    {
        if (is_null($apartment_sorts)) {
            throw new \InvalidArgumentException('non-nullable apartment_sorts cannot be null');
        }
        $this->container['apartment_sorts'] = $apartment_sorts;

        return $this;
    }

    /**
     * Gets applicant_type_options
     *
     * @return \Brixion\Kolibri\Model\ApplicantTypeOption[]|null
     */
    public function getApplicantTypeOptions()
    {
        return $this->container['applicant_type_options'];
    }

    /**
     * Sets applicant_type_options
     *
     * @param \Brixion\Kolibri\Model\ApplicantTypeOption[]|null $applicant_type_options Applicant type options (E.g. Buyers, tenants)
     *
     * @return self
     */
    public function setApplicantTypeOptions($applicant_type_options)
    {
        if (is_null($applicant_type_options)) {
            throw new \InvalidArgumentException('non-nullable applicant_type_options cannot be null');
        }
        $this->container['applicant_type_options'] = $applicant_type_options;

        return $this;
    }

    /**
     * Gets appraisal_certifications
     *
     * @return \Brixion\Kolibri\Model\AppraisalCertificationOption[]|null
     */
    public function getAppraisalCertifications()
    {
        return $this->container['appraisal_certifications'];
    }

    /**
     * Sets appraisal_certifications
     *
     * @param \Brixion\Kolibri\Model\AppraisalCertificationOption[]|null $appraisal_certifications appraisal_certifications
     *
     * @return self
     */
    public function setAppraisalCertifications($appraisal_certifications)
    {
        if (is_null($appraisal_certifications)) {
            throw new \InvalidArgumentException('non-nullable appraisal_certifications cannot be null');
        }
        $this->container['appraisal_certifications'] = $appraisal_certifications;

        return $this;
    }

    /**
     * Gets assignment_phases
     *
     * @return \Brixion\Kolibri\Model\AssignmentPhaseOption[]|null
     */
    public function getAssignmentPhases()
    {
        return $this->container['assignment_phases'];
    }

    /**
     * Sets assignment_phases
     *
     * @param \Brixion\Kolibri\Model\AssignmentPhaseOption[]|null $assignment_phases Available assignment phases ('Concept', 'Initiated' or 'Completed').
     *
     * @return self
     */
    public function setAssignmentPhases($assignment_phases)
    {
        if (is_null($assignment_phases)) {
            throw new \InvalidArgumentException('non-nullable assignment_phases cannot be null');
        }
        $this->container['assignment_phases'] = $assignment_phases;

        return $this;
    }

    /**
     * Gets assignment_types
     *
     * @return \Brixion\Kolibri\Model\AssignmentTypeOption[]|null
     */
    public function getAssignmentTypes()
    {
        return $this->container['assignment_types'];
    }

    /**
     * Sets assignment_types
     *
     * @param \Brixion\Kolibri\Model\AssignmentTypeOption[]|null $assignment_types Available assignment types ('Listing', 'ObjectType' or 'Project').
     *
     * @return self
     */
    public function setAssignmentTypes($assignment_types)
    {
        if (is_null($assignment_types)) {
            throw new \InvalidArgumentException('non-nullable assignment_types cannot be null');
        }
        $this->container['assignment_types'] = $assignment_types;

        return $this;
    }

    /**
     * Gets attic_options
     *
     * @return \Brixion\Kolibri\Model\AtticOptionOption[]|null
     */
    public function getAtticOptions()
    {
        return $this->container['attic_options'];
    }

    /**
     * Sets attic_options
     *
     * @param \Brixion\Kolibri\Model\AtticOptionOption[]|null $attic_options Attic options codes (E.g. 'Option for room', 'Staircase', etc.).
     *
     * @return self
     */
    public function setAtticOptions($attic_options)
    {
        if (is_null($attic_options)) {
            throw new \InvalidArgumentException('non-nullable attic_options cannot be null');
        }
        $this->container['attic_options'] = $attic_options;

        return $this;
    }

    /**
     * Gets availability_statuses
     *
     * @return \Brixion\Kolibri\Model\AvailabilityStatusOption[]|null
     */
    public function getAvailabilityStatuses()
    {
        return $this->container['availability_statuses'];
    }

    /**
     * Sets availability_statuses
     *
     * @param \Brixion\Kolibri\Model\AvailabilityStatusOption[]|null $availability_statuses Available availabilty statusses (E.g. 'Sold', 'Withdrawn' or 'Rented').
     *
     * @return self
     */
    public function setAvailabilityStatuses($availability_statuses)
    {
        if (is_null($availability_statuses)) {
            throw new \InvalidArgumentException('non-nullable availability_statuses cannot be null');
        }
        $this->container['availability_statuses'] = $availability_statuses;

        return $this;
    }

    /**
     * Gets balcony_types
     *
     * @return \Brixion\Kolibri\Model\BalconyTypeOption[]|null
     */
    public function getBalconyTypes()
    {
        return $this->container['balcony_types'];
    }

    /**
     * Sets balcony_types
     *
     * @param \Brixion\Kolibri\Model\BalconyTypeOption[]|null $balcony_types Balcony Types (E.g. 'Closed', 'Glazed')]
     *
     * @return self
     */
    public function setBalconyTypes($balcony_types)
    {
        if (is_null($balcony_types)) {
            throw new \InvalidArgumentException('non-nullable balcony_types cannot be null');
        }
        $this->container['balcony_types'] = $balcony_types;

        return $this;
    }

    /**
     * Gets bathroom_facilities
     *
     * @return \Brixion\Kolibri\Model\BathroomFacilityOption[]|null
     */
    public function getBathroomFacilities()
    {
        return $this->container['bathroom_facilities'];
    }

    /**
     * Sets bathroom_facilities
     *
     * @param \Brixion\Kolibri\Model\BathroomFacilityOption[]|null $bathroom_facilities Bathroom facilities (E.g. 'Bath', 'Shower').
     *
     * @return self
     */
    public function setBathroomFacilities($bathroom_facilities)
    {
        if (is_null($bathroom_facilities)) {
            throw new \InvalidArgumentException('non-nullable bathroom_facilities cannot be null');
        }
        $this->container['bathroom_facilities'] = $bathroom_facilities;

        return $this;
    }

    /**
     * Gets beverage_hospitality_sector_types
     *
     * @return \Brixion\Kolibri\Model\BeverageHospitalityTypeOption[]|null
     */
    public function getBeverageHospitalitySectorTypes()
    {
        return $this->container['beverage_hospitality_sector_types'];
    }

    /**
     * Sets beverage_hospitality_sector_types
     *
     * @param \Brixion\Kolibri\Model\BeverageHospitalityTypeOption[]|null $beverage_hospitality_sector_types Beverage hospitality types (E.g. 'Cafe', 'EatCafe', 'Disco')
     *
     * @return self
     */
    public function setBeverageHospitalitySectorTypes($beverage_hospitality_sector_types)
    {
        if (is_null($beverage_hospitality_sector_types)) {
            throw new \InvalidArgumentException('non-nullable beverage_hospitality_sector_types cannot be null');
        }
        $this->container['beverage_hospitality_sector_types'] = $beverage_hospitality_sector_types;

        return $this;
    }

    /**
     * Gets bid_status_options
     *
     * @return \Brixion\Kolibri\Model\BidStatusOption[]|null
     */
    public function getBidStatusOptions()
    {
        return $this->container['bid_status_options'];
    }

    /**
     * Sets bid_status_options
     *
     * @param \Brixion\Kolibri\Model\BidStatusOption[]|null $bid_status_options Bid status options (E.g. 'Active', 'Rejected', 'Accepted')
     *
     * @return self
     */
    public function setBidStatusOptions($bid_status_options)
    {
        if (is_null($bid_status_options)) {
            throw new \InvalidArgumentException('non-nullable bid_status_options cannot be null');
        }
        $this->container['bid_status_options'] = $bid_status_options;

        return $this;
    }

    /**
     * Gets bid_type_options
     *
     * @return \Brixion\Kolibri\Model\BidTypeOption[]|null
     */
    public function getBidTypeOptions()
    {
        return $this->container['bid_type_options'];
    }

    /**
     * Sets bid_type_options
     *
     * @param \Brixion\Kolibri\Model\BidTypeOption[]|null $bid_type_options Bid type options (E.g. 'Incoming', 'Outgoing')
     *
     * @return self
     */
    public function setBidTypeOptions($bid_type_options)
    {
        if (is_null($bid_type_options)) {
            throw new \InvalidArgumentException('non-nullable bid_type_options cannot be null');
        }
        $this->container['bid_type_options'] = $bid_type_options;

        return $this;
    }

    /**
     * Gets bog_combination_object_situation_options
     *
     * @return \Brixion\Kolibri\Model\BogCombinationObjectSituationOption[]|null
     */
    public function getBogCombinationObjectSituationOptions()
    {
        return $this->container['bog_combination_object_situation_options'];
    }

    /**
     * Sets bog_combination_object_situation_options
     *
     * @param \Brixion\Kolibri\Model\BogCombinationObjectSituationOption[]|null $bog_combination_object_situation_options Bog combination object situation options (E.g. 'Indoors', 'Detached')
     *
     * @return self
     */
    public function setBogCombinationObjectSituationOptions($bog_combination_object_situation_options)
    {
        if (is_null($bog_combination_object_situation_options)) {
            throw new \InvalidArgumentException('non-nullable bog_combination_object_situation_options cannot be null');
        }
        $this->container['bog_combination_object_situation_options'] = $bog_combination_object_situation_options;

        return $this;
    }

    /**
     * Gets bog_combination_object_status_options
     *
     * @return \Brixion\Kolibri\Model\BogCombinationObjectStatusOption[]|null
     */
    public function getBogCombinationObjectStatusOptions()
    {
        return $this->container['bog_combination_object_status_options'];
    }

    /**
     * Sets bog_combination_object_status_options
     *
     * @param \Brixion\Kolibri\Model\BogCombinationObjectStatusOption[]|null $bog_combination_object_status_options Bog combination object status options (E.g. 'Possible', 'Present')
     *
     * @return self
     */
    public function setBogCombinationObjectStatusOptions($bog_combination_object_status_options)
    {
        if (is_null($bog_combination_object_status_options)) {
            throw new \InvalidArgumentException('non-nullable bog_combination_object_status_options cannot be null');
        }
        $this->container['bog_combination_object_status_options'] = $bog_combination_object_status_options;

        return $this;
    }

    /**
     * Gets bog_combination_object_type_options
     *
     * @return \Brixion\Kolibri\Model\BogCombinationObjectTypeOption[]|null
     */
    public function getBogCombinationObjectTypeOptions()
    {
        return $this->container['bog_combination_object_type_options'];
    }

    /**
     * Sets bog_combination_object_type_options
     *
     * @param \Brixion\Kolibri\Model\BogCombinationObjectTypeOption[]|null $bog_combination_object_type_options Bog combination object type options (E.g. 'Office space', 'Practice room')
     *
     * @return self
     */
    public function setBogCombinationObjectTypeOptions($bog_combination_object_type_options)
    {
        if (is_null($bog_combination_object_type_options)) {
            throw new \InvalidArgumentException('non-nullable bog_combination_object_type_options cannot be null');
        }
        $this->container['bog_combination_object_type_options'] = $bog_combination_object_type_options;

        return $this;
    }

    /**
     * Gets building_type_options
     *
     * @return \Brixion\Kolibri\Model\BuildingTypeOption[]|null
     */
    public function getBuildingTypeOptions()
    {
        return $this->container['building_type_options'];
    }

    /**
     * Sets building_type_options
     *
     * @param \Brixion\Kolibri\Model\BuildingTypeOption[]|null $building_type_options Building type options (E.g. 'New', 'Existing')
     *
     * @return self
     */
    public function setBuildingTypeOptions($building_type_options)
    {
        if (is_null($building_type_options)) {
            throw new \InvalidArgumentException('non-nullable building_type_options cannot be null');
        }
        $this->container['building_type_options'] = $building_type_options;

        return $this;
    }

    /**
     * Gets buyer_type_options
     *
     * @return \Brixion\Kolibri\Model\BuyerTypeOption[]|null
     */
    public function getBuyerTypeOptions()
    {
        return $this->container['buyer_type_options'];
    }

    /**
     * Sets buyer_type_options
     *
     * @param \Brixion\Kolibri\Model\BuyerTypeOption[]|null $buyer_type_options Buyer type options (E.g. 'Starter', 'Parents').
     *
     * @return self
     */
    public function setBuyerTypeOptions($buyer_type_options)
    {
        if (is_null($buyer_type_options)) {
            throw new \InvalidArgumentException('non-nullable buyer_type_options cannot be null');
        }
        $this->container['buyer_type_options'] = $buyer_type_options;

        return $this;
    }

    /**
     * Gets cadastral_lot_size_options
     *
     * @return \Brixion\Kolibri\Model\CadastralLotSizeOption[]|null
     */
    public function getCadastralLotSizeOptions()
    {
        return $this->container['cadastral_lot_size_options'];
    }

    /**
     * Sets cadastral_lot_size_options
     *
     * @param \Brixion\Kolibri\Model\CadastralLotSizeOption[]|null $cadastral_lot_size_options Cadastral lot size options (E.g. 'Partial lot', 'Entire lot')
     *
     * @return self
     */
    public function setCadastralLotSizeOptions($cadastral_lot_size_options)
    {
        if (is_null($cadastral_lot_size_options)) {
            throw new \InvalidArgumentException('non-nullable cadastral_lot_size_options cannot be null');
        }
        $this->container['cadastral_lot_size_options'] = $cadastral_lot_size_options;

        return $this;
    }

    /**
     * Gets cattle_farming_subtypes
     *
     * @return \Brixion\Kolibri\Model\CattleFarmingSubtypeOption[]|null
     */
    public function getCattleFarmingSubtypes()
    {
        return $this->container['cattle_farming_subtypes'];
    }

    /**
     * Sets cattle_farming_subtypes
     *
     * @param \Brixion\Kolibri\Model\CattleFarmingSubtypeOption[]|null $cattle_farming_subtypes Cattle Farming Subtypes (E.g. 'Dairy cattle', 'Suckler cows').
     *
     * @return self
     */
    public function setCattleFarmingSubtypes($cattle_farming_subtypes)
    {
        if (is_null($cattle_farming_subtypes)) {
            throw new \InvalidArgumentException('non-nullable cattle_farming_subtypes cannot be null');
        }
        $this->container['cattle_farming_subtypes'] = $cattle_farming_subtypes;

        return $this;
    }

    /**
     * Gets certification_options
     *
     * @return \Brixion\Kolibri\Model\CertificationOption[]|null
     */
    public function getCertificationOptions()
    {
        return $this->container['certification_options'];
    }

    /**
     * Sets certification_options
     *
     * @param \Brixion\Kolibri\Model\CertificationOption[]|null $certification_options Certification Options (E.g. 'GIW waarborgcertificaat', 'Brandveiligheid', 'Politiekeurmerk'). Dutch: Keurmerk
     *
     * @return self
     */
    public function setCertificationOptions($certification_options)
    {
        if (is_null($certification_options)) {
            throw new \InvalidArgumentException('non-nullable certification_options cannot be null');
        }
        $this->container['certification_options'] = $certification_options;

        return $this;
    }

    /**
     * Gets child_age_range_options
     *
     * @return \Brixion\Kolibri\Model\ChildAgeRangeOption[]|null
     */
    public function getChildAgeRangeOptions()
    {
        return $this->container['child_age_range_options'];
    }

    /**
     * Sets child_age_range_options
     *
     * @param \Brixion\Kolibri\Model\ChildAgeRangeOption[]|null $child_age_range_options Child age range options (E.g. 'younger then 7', '7 - 11 year')
     *
     * @return self
     */
    public function setChildAgeRangeOptions($child_age_range_options)
    {
        if (is_null($child_age_range_options)) {
            throw new \InvalidArgumentException('non-nullable child_age_range_options cannot be null');
        }
        $this->container['child_age_range_options'] = $child_age_range_options;

        return $this;
    }

    /**
     * Gets civil_states
     *
     * @return \Brixion\Kolibri\Model\CivilStateOption[]|null
     */
    public function getCivilStates()
    {
        return $this->container['civil_states'];
    }

    /**
     * Sets civil_states
     *
     * @param \Brixion\Kolibri\Model\CivilStateOption[]|null $civil_states civil_states
     *
     * @return self
     */
    public function setCivilStates($civil_states)
    {
        if (is_null($civil_states)) {
            throw new \InvalidArgumentException('non-nullable civil_states cannot be null');
        }
        $this->container['civil_states'] = $civil_states;

        return $this;
    }

    /**
     * Gets comfort_quality_options
     *
     * @return \Brixion\Kolibri\Model\ComfortQualityOption[]|null
     */
    public function getComfortQualityOptions()
    {
        return $this->container['comfort_quality_options'];
    }

    /**
     * Sets comfort_quality_options
     *
     * @param \Brixion\Kolibri\Model\ComfortQualityOption[]|null $comfort_quality_options ComfortQuality Options (E.g. 'Luxury', 'Normal', 'Simple'). Dutch: ComfortKwaliteit
     *
     * @return self
     */
    public function setComfortQualityOptions($comfort_quality_options)
    {
        if (is_null($comfort_quality_options)) {
            throw new \InvalidArgumentException('non-nullable comfort_quality_options cannot be null');
        }
        $this->container['comfort_quality_options'] = $comfort_quality_options;

        return $this;
    }

    /**
     * Gets commission_paid_by_options
     *
     * @return \Brixion\Kolibri\Model\CommissionPaidByOption[]|null
     */
    public function getCommissionPaidByOptions()
    {
        return $this->container['commission_paid_by_options'];
    }

    /**
     * Sets commission_paid_by_options
     *
     * @param \Brixion\Kolibri\Model\CommissionPaidByOption[]|null $commission_paid_by_options Commission PaidBy Options (E.g. 'Owner', 'Customer', 'OwnerAndCustomer').]
     *
     * @return self
     */
    public function setCommissionPaidByOptions($commission_paid_by_options)
    {
        if (is_null($commission_paid_by_options)) {
            throw new \InvalidArgumentException('non-nullable commission_paid_by_options cannot be null');
        }
        $this->container['commission_paid_by_options'] = $commission_paid_by_options;

        return $this;
    }

    /**
     * Gets commission_type_options
     *
     * @return \Brixion\Kolibri\Model\CommissionTypeOption[]|null
     */
    public function getCommissionTypeOptions()
    {
        return $this->container['commission_type_options'];
    }

    /**
     * Sets commission_type_options
     *
     * @param \Brixion\Kolibri\Model\CommissionTypeOption[]|null $commission_type_options Commission Type Options (E.g. 'Fixed', 'Percentage' or 'FixedAndPercentage').]
     *
     * @return self
     */
    public function setCommissionTypeOptions($commission_type_options)
    {
        if (is_null($commission_type_options)) {
            throw new \InvalidArgumentException('non-nullable commission_type_options cannot be null');
        }
        $this->container['commission_type_options'] = $commission_type_options;

        return $this;
    }

    /**
     * Gets condition_options
     *
     * @return \Brixion\Kolibri\Model\ConditionOption[]|null
     */
    public function getConditionOptions()
    {
        return $this->container['condition_options'];
    }

    /**
     * Sets condition_options
     *
     * @param \Brixion\Kolibri\Model\ConditionOption[]|null $condition_options Condition Options (E.g. 'Bad', 'Moderate', 'Good'). Dutch: OnderhoudsWaardering
     *
     * @return self
     */
    public function setConditionOptions($condition_options)
    {
        if (is_null($condition_options)) {
            throw new \InvalidArgumentException('non-nullable condition_options cannot be null');
        }
        $this->container['condition_options'] = $condition_options;

        return $this;
    }

    /**
     * Gets condition_type_options
     *
     * @return \Brixion\Kolibri\Model\ConditionTypeOption[]|null
     */
    public function getConditionTypeOptions()
    {
        return $this->container['condition_type_options'];
    }

    /**
     * Sets condition_type_options
     *
     * @param \Brixion\Kolibri\Model\ConditionTypeOption[]|null $condition_type_options Condition Type Options (E.g. 'Foundation only', 'In need of renovation', 'First time use after renovation'). Dutch: StaatVanOnderhoud
     *
     * @return self
     */
    public function setConditionTypeOptions($condition_type_options)
    {
        if (is_null($condition_type_options)) {
            throw new \InvalidArgumentException('non-nullable condition_type_options cannot be null');
        }
        $this->container['condition_type_options'] = $condition_type_options;

        return $this;
    }

    /**
     * Gets construction_option_options
     *
     * @return \Brixion\Kolibri\Model\ConstructionOptionOption[]|null
     */
    public function getConstructionOptionOptions()
    {
        return $this->container['construction_option_options'];
    }

    /**
     * Sets construction_option_options
     *
     * @param \Brixion\Kolibri\Model\ConstructionOptionOption[]|null $construction_option_options ConstructionOption Options (E.g. 'ProductionHall', 'Office').
     *
     * @return self
     */
    public function setConstructionOptionOptions($construction_option_options)
    {
        if (is_null($construction_option_options)) {
            throw new \InvalidArgumentException('non-nullable construction_option_options cannot be null');
        }
        $this->container['construction_option_options'] = $construction_option_options;

        return $this;
    }

    /**
     * Gets construction_periods
     *
     * @return \Brixion\Kolibri\Model\ConstructionPeriodOption[]|null
     */
    public function getConstructionPeriods()
    {
        return $this->container['construction_periods'];
    }

    /**
     * Sets construction_periods
     *
     * @param \Brixion\Kolibri\Model\ConstructionPeriodOption[]|null $construction_periods Construction Periods (E.g. 'before 1906', 'between 2001 and 2010').
     *
     * @return self
     */
    public function setConstructionPeriods($construction_periods)
    {
        if (is_null($construction_periods)) {
            throw new \InvalidArgumentException('non-nullable construction_periods cannot be null');
        }
        $this->container['construction_periods'] = $construction_periods;

        return $this;
    }

    /**
     * Gets contact_link_types
     *
     * @return \Brixion\Kolibri\Model\ContactLinkTypeSuggestion[]|null
     */
    public function getContactLinkTypes()
    {
        return $this->container['contact_link_types'];
    }

    /**
     * Sets contact_link_types
     *
     * @param \Brixion\Kolibri\Model\ContactLinkTypeSuggestion[]|null $contact_link_types contact_link_types
     *
     * @return self
     */
    public function setContactLinkTypes($contact_link_types)
    {
        if (is_null($contact_link_types)) {
            throw new \InvalidArgumentException('non-nullable contact_link_types cannot be null');
        }
        $this->container['contact_link_types'] = $contact_link_types;

        return $this;
    }

    /**
     * Gets contact_person_title_suggestions
     *
     * @return \Brixion\Kolibri\Model\ContactPersonTitleSuggestionOption[]|null
     */
    public function getContactPersonTitleSuggestions()
    {
        return $this->container['contact_person_title_suggestions'];
    }

    /**
     * Sets contact_person_title_suggestions
     *
     * @param \Brixion\Kolibri\Model\ContactPersonTitleSuggestionOption[]|null $contact_person_title_suggestions contact_person_title_suggestions
     *
     * @return self
     */
    public function setContactPersonTitleSuggestions($contact_person_title_suggestions)
    {
        if (is_null($contact_person_title_suggestions)) {
            throw new \InvalidArgumentException('non-nullable contact_person_title_suggestions cannot be null');
        }
        $this->container['contact_person_title_suggestions'] = $contact_person_title_suggestions;

        return $this;
    }

    /**
     * Gets countries
     *
     * @return \Brixion\Kolibri\Model\CountryOption[]|null
     */
    public function getCountries()
    {
        return $this->container['countries'];
    }

    /**
     * Sets countries
     *
     * @param \Brixion\Kolibri\Model\CountryOption[]|null $countries countries
     *
     * @return self
     */
    public function setCountries($countries)
    {
        if (is_null($countries)) {
            throw new \InvalidArgumentException('non-nullable countries cannot be null');
        }
        $this->container['countries'] = $countries;

        return $this;
    }

    /**
     * Gets default_folder_tree_category_options
     *
     * @return \Brixion\Kolibri\Model\DefaultFolderTreeCategoryOption[]|null
     */
    public function getDefaultFolderTreeCategoryOptions()
    {
        return $this->container['default_folder_tree_category_options'];
    }

    /**
     * Sets default_folder_tree_category_options
     *
     * @param \Brixion\Kolibri\Model\DefaultFolderTreeCategoryOption[]|null $default_folder_tree_category_options List of all Default Folder Tree categories (E.g. 'Contact companies', 'Object Assignments for rent', 'Real estate projects')
     *
     * @return self
     */
    public function setDefaultFolderTreeCategoryOptions($default_folder_tree_category_options)
    {
        if (is_null($default_folder_tree_category_options)) {
            throw new \InvalidArgumentException('non-nullable default_folder_tree_category_options cannot be null');
        }
        $this->container['default_folder_tree_category_options'] = $default_folder_tree_category_options;

        return $this;
    }

    /**
     * Gets document_template_type_options
     *
     * @return \Brixion\Kolibri\Model\DocumentTemplateTypeOption[]|null
     */
    public function getDocumentTemplateTypeOptions()
    {
        return $this->container['document_template_type_options'];
    }

    /**
     * Sets document_template_type_options
     *
     * @param \Brixion\Kolibri\Model\DocumentTemplateTypeOption[]|null $document_template_type_options Document template type options (E.g. 'Agreement', 'Form')
     *
     * @return self
     */
    public function setDocumentTemplateTypeOptions($document_template_type_options)
    {
        if (is_null($document_template_type_options)) {
            throw new \InvalidArgumentException('non-nullable document_template_type_options cannot be null');
        }
        $this->container['document_template_type_options'] = $document_template_type_options;

        return $this;
    }

    /**
     * Gets drainage_options
     *
     * @return \Brixion\Kolibri\Model\DrainageOption[]|null
     */
    public function getDrainageOptions()
    {
        return $this->container['drainage_options'];
    }

    /**
     * Sets drainage_options
     *
     * @param \Brixion\Kolibri\Model\DrainageOption[]|null $drainage_options Drainage options (E.g. 'Sanitary', 'DownspoutAfvoer', 'FranseDrain')
     *
     * @return self
     */
    public function setDrainageOptions($drainage_options)
    {
        if (is_null($drainage_options)) {
            throw new \InvalidArgumentException('non-nullable drainage_options cannot be null');
        }
        $this->container['drainage_options'] = $drainage_options;

        return $this;
    }

    /**
     * Gets email_address_types
     *
     * @return \Brixion\Kolibri\Model\EmailAddressTypeOption[]|null
     */
    public function getEmailAddressTypes()
    {
        return $this->container['email_address_types'];
    }

    /**
     * Sets email_address_types
     *
     * @param \Brixion\Kolibri\Model\EmailAddressTypeOption[]|null $email_address_types email_address_types
     *
     * @return self
     */
    public function setEmailAddressTypes($email_address_types)
    {
        if (is_null($email_address_types)) {
            throw new \InvalidArgumentException('non-nullable email_address_types cannot be null');
        }
        $this->container['email_address_types'] = $email_address_types;

        return $this;
    }

    /**
     * Gets energy_class_options
     *
     * @return \Brixion\Kolibri\Model\EnergyClassOption[]|null
     */
    public function getEnergyClassOptions()
    {
        return $this->container['energy_class_options'];
    }

    /**
     * Sets energy_class_options
     *
     * @param \Brixion\Kolibri\Model\EnergyClassOption[]|null $energy_class_options EnergyClass Options (E.g. 'APLUSPLUS', 'A', 'B').
     *
     * @return self
     */
    public function setEnergyClassOptions($energy_class_options)
    {
        if (is_null($energy_class_options)) {
            throw new \InvalidArgumentException('non-nullable energy_class_options cannot be null');
        }
        $this->container['energy_class_options'] = $energy_class_options;

        return $this;
    }

    /**
     * Gets energy_source_options
     *
     * @return \Brixion\Kolibri\Model\EnergySourceOption[]|null
     */
    public function getEnergySourceOptions()
    {
        return $this->container['energy_source_options'];
    }

    /**
     * Sets energy_source_options
     *
     * @param \Brixion\Kolibri\Model\EnergySourceOption[]|null $energy_source_options EnergySource Options (E.g. 'gas', 'oil', 'electricity'). Dutch: KetelBrandstof
     *
     * @return self
     */
    public function setEnergySourceOptions($energy_source_options)
    {
        if (is_null($energy_source_options)) {
            throw new \InvalidArgumentException('non-nullable energy_source_options cannot be null');
        }
        $this->container['energy_source_options'] = $energy_source_options;

        return $this;
    }

    /**
     * Gets exclusive_status_options
     *
     * @return \Brixion\Kolibri\Model\ExclusiveStatusOption[]|null
     */
    public function getExclusiveStatusOptions()
    {
        return $this->container['exclusive_status_options'];
    }

    /**
     * Sets exclusive_status_options
     *
     * @param \Brixion\Kolibri\Model\ExclusiveStatusOption[]|null $exclusive_status_options ExclusiveStatus Options (E.g. 'Exclusive', 'Non-exclusive').
     *
     * @return self
     */
    public function setExclusiveStatusOptions($exclusive_status_options)
    {
        if (is_null($exclusive_status_options)) {
            throw new \InvalidArgumentException('non-nullable exclusive_status_options cannot be null');
        }
        $this->container['exclusive_status_options'] = $exclusive_status_options;

        return $this;
    }

    /**
     * Gets facility_options
     *
     * @return \Brixion\Kolibri\Model\FacilityOption[]|null
     */
    public function getFacilityOptions()
    {
        return $this->container['facility_options'];
    }

    /**
     * Sets facility_options
     *
     * @param \Brixion\Kolibri\Model\FacilityOption[]|null $facility_options Facility Options (E.g. 'Recessed lighting', 'elevator', 'opening windows'). Dutch: Opleveringsnivo / Kantoorvoorziening
     *
     * @return self
     */
    public function setFacilityOptions($facility_options)
    {
        if (is_null($facility_options)) {
            throw new \InvalidArgumentException('non-nullable facility_options cannot be null');
        }
        $this->container['facility_options'] = $facility_options;

        return $this;
    }

    /**
     * Gets family_income_options
     *
     * @return \Brixion\Kolibri\Model\FamilyIncomeOption[]|null
     */
    public function getFamilyIncomeOptions()
    {
        return $this->container['family_income_options'];
    }

    /**
     * Sets family_income_options
     *
     * @param \Brixion\Kolibri\Model\FamilyIncomeOption[]|null $family_income_options Family income options (e.g. 'less than minimum', 'minimum to modal')
     *
     * @return self
     */
    public function setFamilyIncomeOptions($family_income_options)
    {
        if (is_null($family_income_options)) {
            throw new \InvalidArgumentException('non-nullable family_income_options cannot be null');
        }
        $this->container['family_income_options'] = $family_income_options;

        return $this;
    }

    /**
     * Gets fastfood_hospitality_sector_types
     *
     * @return \Brixion\Kolibri\Model\FastfoodHospitalitySectorTypeOption[]|null
     */
    public function getFastfoodHospitalitySectorTypes()
    {
        return $this->container['fastfood_hospitality_sector_types'];
    }

    /**
     * Sets fastfood_hospitality_sector_types
     *
     * @param \Brixion\Kolibri\Model\FastfoodHospitalitySectorTypeOption[]|null $fastfood_hospitality_sector_types Fastfood hospitality types (E.g. 'Snackbar', 'Ice Cream Parlor')
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
     * Gets fixed_variable_options
     *
     * @return \Brixion\Kolibri\Model\FixedVariableOption[]|null
     */
    public function getFixedVariableOptions()
    {
        return $this->container['fixed_variable_options'];
    }

    /**
     * Sets fixed_variable_options
     *
     * @param \Brixion\Kolibri\Model\FixedVariableOption[]|null $fixed_variable_options FixedVariable options (E.g. 'Variable', 'Fixed')
     *
     * @return self
     */
    public function setFixedVariableOptions($fixed_variable_options)
    {
        if (is_null($fixed_variable_options)) {
            throw new \InvalidArgumentException('non-nullable fixed_variable_options cannot be null');
        }
        $this->container['fixed_variable_options'] = $fixed_variable_options;

        return $this;
    }

    /**
     * Gets floor_type_options
     *
     * @return \Brixion\Kolibri\Model\FloorTypeOption[]|null
     */
    public function getFloorTypeOptions()
    {
        return $this->container['floor_type_options'];
    }

    /**
     * Sets floor_type_options
     *
     * @param \Brixion\Kolibri\Model\FloorTypeOption[]|null $floor_type_options Type of floor options (E.g. 'Ground floor', 'basement')
     *
     * @return self
     */
    public function setFloorTypeOptions($floor_type_options)
    {
        if (is_null($floor_type_options)) {
            throw new \InvalidArgumentException('non-nullable floor_type_options cannot be null');
        }
        $this->container['floor_type_options'] = $floor_type_options;

        return $this;
    }

    /**
     * Gets furnishing_options
     *
     * @return \Brixion\Kolibri\Model\FurnishingOption[]|null
     */
    public function getFurnishingOptions()
    {
        return $this->container['furnishing_options'];
    }

    /**
     * Sets furnishing_options
     *
     * @param \Brixion\Kolibri\Model\FurnishingOption[]|null $furnishing_options Furnishing Options (E.g. 'Furnished', 'Upholstered', 'As a shell'). Dutch: Inrichting (gemeubilieerd, gestoffeerd, kaal).
     *
     * @return self
     */
    public function setFurnishingOptions($furnishing_options)
    {
        if (is_null($furnishing_options)) {
            throw new \InvalidArgumentException('non-nullable furnishing_options cannot be null');
        }
        $this->container['furnishing_options'] = $furnishing_options;

        return $this;
    }

    /**
     * Gets garage_type_options
     *
     * @return \Brixion\Kolibri\Model\GarageTypeOption[]|null
     */
    public function getGarageTypeOptions()
    {
        return $this->container['garage_type_options'];
    }

    /**
     * Sets garage_type_options
     *
     * @param \Brixion\Kolibri\Model\GarageTypeOption[]|null $garage_type_options Garage Type Options (E.g. 'Attached stone', 'Carport', 'Garagebox'). Dutch: TypeGarage
     *
     * @return self
     */
    public function setGarageTypeOptions($garage_type_options)
    {
        if (is_null($garage_type_options)) {
            throw new \InvalidArgumentException('non-nullable garage_type_options cannot be null');
        }
        $this->container['garage_type_options'] = $garage_type_options;

        return $this;
    }

    /**
     * Gets garden_quality_options
     *
     * @return \Brixion\Kolibri\Model\GardenQualityOption[]|null
     */
    public function getGardenQualityOptions()
    {
        return $this->container['garden_quality_options'];
    }

    /**
     * Sets garden_quality_options
     *
     * @param \Brixion\Kolibri\Model\GardenQualityOption[]|null $garden_quality_options Garden Quality Options (E.g. 'Neglected', 'Beautifully landscaped', 'Well maintained'). Dutch: KwaliteitTuin
     *
     * @return self
     */
    public function setGardenQualityOptions($garden_quality_options)
    {
        if (is_null($garden_quality_options)) {
            throw new \InvalidArgumentException('non-nullable garden_quality_options cannot be null');
        }
        $this->container['garden_quality_options'] = $garden_quality_options;

        return $this;
    }

    /**
     * Gets garden_type_options
     *
     * @return \Brixion\Kolibri\Model\GardenTypeOption[]|null
     */
    public function getGardenTypeOptions()
    {
        return $this->container['garden_type_options'];
    }

    /**
     * Sets garden_type_options
     *
     * @param \Brixion\Kolibri\Model\GardenTypeOption[]|null $garden_type_options Garden type Options (E.g. 'Back yard', 'Front yard', 'Patio atrium'). Dutch: TypeTuin
     *
     * @return self
     */
    public function setGardenTypeOptions($garden_type_options)
    {
        if (is_null($garden_type_options)) {
            throw new \InvalidArgumentException('non-nullable garden_type_options cannot be null');
        }
        $this->container['garden_type_options'] = $garden_type_options;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return \Brixion\Kolibri\Model\GenderOption[]|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param \Brixion\Kolibri\Model\GenderOption[]|null $gender gender
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
     * Gets ground_lease_period_options
     *
     * @return \Brixion\Kolibri\Model\GroundLeasePeriodOption[]|null
     */
    public function getGroundLeasePeriodOptions()
    {
        return $this->container['ground_lease_period_options'];
    }

    /**
     * Sets ground_lease_period_options
     *
     * @param \Brixion\Kolibri\Model\GroundLeasePeriodOption[]|null $ground_lease_period_options GroundLeasePeriod Options (E.g. 'Eternal', 'Temporary', 'Progressing'). Dutch: Erfpachtduur
     *
     * @return self
     */
    public function setGroundLeasePeriodOptions($ground_lease_period_options)
    {
        if (is_null($ground_lease_period_options)) {
            throw new \InvalidArgumentException('non-nullable ground_lease_period_options cannot be null');
        }
        $this->container['ground_lease_period_options'] = $ground_lease_period_options;

        return $this;
    }

    /**
     * Gets ground_ownership_type_options
     *
     * @return \Brixion\Kolibri\Model\GroundOwnershipTypeOption[]|null
     */
    public function getGroundOwnershipTypeOptions()
    {
        return $this->container['ground_ownership_type_options'];
    }

    /**
     * Sets ground_ownership_type_options
     *
     * @param \Brixion\Kolibri\Model\GroundOwnershipTypeOption[]|null $ground_ownership_type_options Ground Ownership Type Options (E.g. 'Full ownership', 'Ground lease'). Dutch: TypeGrondEigendom
     *
     * @return self
     */
    public function setGroundOwnershipTypeOptions($ground_ownership_type_options)
    {
        if (is_null($ground_ownership_type_options)) {
            throw new \InvalidArgumentException('non-nullable ground_ownership_type_options cannot be null');
        }
        $this->container['ground_ownership_type_options'] = $ground_ownership_type_options;

        return $this;
    }

    /**
     * Gets ground_usage_options
     *
     * @return \Brixion\Kolibri\Model\GroundUsageOption[]|null
     */
    public function getGroundUsageOptions()
    {
        return $this->container['ground_usage_options'];
    }

    /**
     * Sets ground_usage_options
     *
     * @param \Brixion\Kolibri\Model\GroundUsageOption[]|null $ground_usage_options GroundUsage Options (E.g. 'Aspargus', 'Forest', 'Fruit').
     *
     * @return self
     */
    public function setGroundUsageOptions($ground_usage_options)
    {
        if (is_null($ground_usage_options)) {
            throw new \InvalidArgumentException('non-nullable ground_usage_options cannot be null');
        }
        $this->container['ground_usage_options'] = $ground_usage_options;

        return $this;
    }

    /**
     * Gets heating_method_options
     *
     * @return \Brixion\Kolibri\Model\HeatingMethodOption[]|null
     */
    public function getHeatingMethodOptions()
    {
        return $this->container['heating_method_options'];
    }

    /**
     * Sets heating_method_options
     *
     * @param \Brixion\Kolibri\Model\HeatingMethodOption[]|null $heating_method_options Heating method Options (E.g. 'Central fireplace', 'Coal stove', 'Underfloor heating'). Dutch: Verwarming
     *
     * @return self
     */
    public function setHeatingMethodOptions($heating_method_options)
    {
        if (is_null($heating_method_options)) {
            throw new \InvalidArgumentException('non-nullable heating_method_options cannot be null');
        }
        $this->container['heating_method_options'] = $heating_method_options;

        return $this;
    }

    /**
     * Gets heating_water_method_options
     *
     * @return \Brixion\Kolibri\Model\HeatingWaterMethodOption[]|null
     */
    public function getHeatingWaterMethodOptions()
    {
        return $this->container['heating_water_method_options'];
    }

    /**
     * Sets heating_water_method_options
     *
     * @param \Brixion\Kolibri\Model\HeatingWaterMethodOption[]|null $heating_water_method_options HeatingWaterMethod Options (E.g. 'Central heating system', 'Geyser', 'Gas boiler'). Dutch: SoortWarmWater
     *
     * @return self
     */
    public function setHeatingWaterMethodOptions($heating_water_method_options)
    {
        if (is_null($heating_water_method_options)) {
            throw new \InvalidArgumentException('non-nullable heating_water_method_options cannot be null');
        }
        $this->container['heating_water_method_options'] = $heating_water_method_options;

        return $this;
    }

    /**
     * Gets horeca_sector_type_options
     *
     * @return \Brixion\Kolibri\Model\HorecaSectorTypeOption[]|null
     */
    public function getHorecaSectorTypeOptions()
    {
        return $this->container['horeca_sector_type_options'];
    }

    /**
     * Sets horeca_sector_type_options
     *
     * @param \Brixion\Kolibri\Model\HorecaSectorTypeOption[]|null $horeca_sector_type_options HorecaSectorTypes options (E.g. 'Beverages', 'Fastfood')
     *
     * @return self
     */
    public function setHorecaSectorTypeOptions($horeca_sector_type_options)
    {
        if (is_null($horeca_sector_type_options)) {
            throw new \InvalidArgumentException('non-nullable horeca_sector_type_options cannot be null');
        }
        $this->container['horeca_sector_type_options'] = $horeca_sector_type_options;

        return $this;
    }

    /**
     * Gets horse_company_subtypes
     *
     * @return \Brixion\Kolibri\Model\HorseCompanySubtypeOption[]|null
     */
    public function getHorseCompanySubtypes()
    {
        return $this->container['horse_company_subtypes'];
    }

    /**
     * Sets horse_company_subtypes
     *
     * @param \Brixion\Kolibri\Model\HorseCompanySubtypeOption[]|null $horse_company_subtypes Horse Company Subtypes (E.g. 'RidingSchool', 'Pension').
     *
     * @return self
     */
    public function setHorseCompanySubtypes($horse_company_subtypes)
    {
        if (is_null($horse_company_subtypes)) {
            throw new \InvalidArgumentException('non-nullable horse_company_subtypes cannot be null');
        }
        $this->container['horse_company_subtypes'] = $horse_company_subtypes;

        return $this;
    }

    /**
     * Gets horse_trough_location_options
     *
     * @return \Brixion\Kolibri\Model\HorseTroughLocationOption[]|null
     */
    public function getHorseTroughLocationOptions()
    {
        return $this->container['horse_trough_location_options'];
    }

    /**
     * Sets horse_trough_location_options
     *
     * @param \Brixion\Kolibri\Model\HorseTroughLocationOption[]|null $horse_trough_location_options HorseTroughLocation Options (E.g. 'Indoor', 'Outdoor'). Dutch: Paardenbak
     *
     * @return self
     */
    public function setHorseTroughLocationOptions($horse_trough_location_options)
    {
        if (is_null($horse_trough_location_options)) {
            throw new \InvalidArgumentException('non-nullable horse_trough_location_options cannot be null');
        }
        $this->container['horse_trough_location_options'] = $horse_trough_location_options;

        return $this;
    }

    /**
     * Gets horticultural_company_types
     *
     * @return \Brixion\Kolibri\Model\HorticulturalCompanyTypeOption[]|null
     */
    public function getHorticulturalCompanyTypes()
    {
        return $this->container['horticultural_company_types'];
    }

    /**
     * Sets horticultural_company_types
     *
     * @param \Brixion\Kolibri\Model\HorticulturalCompanyTypeOption[]|null $horticultural_company_types Horticultural Company Types (E.g. 'Greenhouse', 'FruitGrowing').
     *
     * @return self
     */
    public function setHorticulturalCompanyTypes($horticultural_company_types)
    {
        if (is_null($horticultural_company_types)) {
            throw new \InvalidArgumentException('non-nullable horticultural_company_types cannot be null');
        }
        $this->container['horticultural_company_types'] = $horticultural_company_types;

        return $this;
    }

    /**
     * Gets hotel_hospitality_sector_types
     *
     * @return \Brixion\Kolibri\Model\HotelHospitalitySectorTypeOption[]|null
     */
    public function getHotelHospitalitySectorTypes()
    {
        return $this->container['hotel_hospitality_sector_types'];
    }

    /**
     * Sets hotel_hospitality_sector_types
     *
     * @param \Brixion\Kolibri\Model\HotelHospitalitySectorTypeOption[]|null $hotel_hospitality_sector_types Hotel hospitality types (E.g. 'Hotel', 'Hotel Garni')
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
     * Gets house_characteristics
     *
     * @return \Brixion\Kolibri\Model\HouseCharacteristicOption[]|null
     */
    public function getHouseCharacteristics()
    {
        return $this->container['house_characteristics'];
    }

    /**
     * Sets house_characteristics
     *
     * @param \Brixion\Kolibri\Model\HouseCharacteristicOption[]|null $house_characteristics House characteristics. (E.g. 'DikeHouse', 'SplitLevelHouse', 'DriveInHouse').
     *
     * @return self
     */
    public function setHouseCharacteristics($house_characteristics)
    {
        if (is_null($house_characteristics)) {
            throw new \InvalidArgumentException('non-nullable house_characteristics cannot be null');
        }
        $this->container['house_characteristics'] = $house_characteristics;

        return $this;
    }

    /**
     * Gets household_composition_options
     *
     * @return \Brixion\Kolibri\Model\HouseholdCompositionOption[]|null
     */
    public function getHouseholdCompositionOptions()
    {
        return $this->container['household_composition_options'];
    }

    /**
     * Sets household_composition_options
     *
     * @param \Brixion\Kolibri\Model\HouseholdCompositionOption[]|null $household_composition_options Household Composition options (E.g. 'Refuses', 'Single parent with kid living at home').
     *
     * @return self
     */
    public function setHouseholdCompositionOptions($household_composition_options)
    {
        if (is_null($household_composition_options)) {
            throw new \InvalidArgumentException('non-nullable household_composition_options cannot be null');
        }
        $this->container['household_composition_options'] = $household_composition_options;

        return $this;
    }

    /**
     * Gets house_sorts
     *
     * @return \Brixion\Kolibri\Model\HouseSortOption[]|null
     */
    public function getHouseSorts()
    {
        return $this->container['house_sorts'];
    }

    /**
     * Sets house_sorts
     *
     * @param \Brixion\Kolibri\Model\HouseSortOption[]|null $house_sorts House sorts.  (E.g. 'Single Family House', 'Mansion', 'Villa').
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
     * @return \Brixion\Kolibri\Model\HouseTypeOption[]|null
     */
    public function getHouseTypes()
    {
        return $this->container['house_types'];
    }

    /**
     * Sets house_types
     *
     * @param \Brixion\Kolibri\Model\HouseTypeOption[]|null $house_types House types.  (E.g. 'DetachedHous', 'LinkedHouse', 'SemiDetachedHouseOneRoof').
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
     * Gets identification_types
     *
     * @return \Brixion\Kolibri\Model\IdentificationTypeOption[]|null
     */
    public function getIdentificationTypes()
    {
        return $this->container['identification_types'];
    }

    /**
     * Sets identification_types
     *
     * @param \Brixion\Kolibri\Model\IdentificationTypeOption[]|null $identification_types identification_types
     *
     * @return self
     */
    public function setIdentificationTypes($identification_types)
    {
        if (is_null($identification_types)) {
            throw new \InvalidArgumentException('non-nullable identification_types cannot be null');
        }
        $this->container['identification_types'] = $identification_types;

        return $this;
    }

    /**
     * Gets industrial_building_facility_options
     *
     * @return \Brixion\Kolibri\Model\IndustrialBuildingFacilityOption[]|null
     */
    public function getIndustrialBuildingFacilityOptions()
    {
        return $this->container['industrial_building_facility_options'];
    }

    /**
     * Sets industrial_building_facility_options
     *
     * @param \Brixion\Kolibri\Model\IndustrialBuildingFacilityOption[]|null $industrial_building_facility_options IndustrialBuildingFacility Options (E.g. 'Skylights', 'LoadingDocks').
     *
     * @return self
     */
    public function setIndustrialBuildingFacilityOptions($industrial_building_facility_options)
    {
        if (is_null($industrial_building_facility_options)) {
            throw new \InvalidArgumentException('non-nullable industrial_building_facility_options cannot be null');
        }
        $this->container['industrial_building_facility_options'] = $industrial_building_facility_options;

        return $this;
    }

    /**
     * Gets investment_type_options
     *
     * @return \Brixion\Kolibri\Model\InvestmentTypeOption[]|null
     */
    public function getInvestmentTypeOptions()
    {
        return $this->container['investment_type_options'];
    }

    /**
     * Sets investment_type_options
     *
     * @param \Brixion\Kolibri\Model\InvestmentTypeOption[]|null $investment_type_options InvestmentTypes options (E.g. 'Retail', 'Office', 'Residential')
     *
     * @return self
     */
    public function setInvestmentTypeOptions($investment_type_options)
    {
        if (is_null($investment_type_options)) {
            throw new \InvalidArgumentException('non-nullable investment_type_options cannot be null');
        }
        $this->container['investment_type_options'] = $investment_type_options;

        return $this;
    }

    /**
     * Gets invoice_due_terms
     *
     * @return \Brixion\Kolibri\Model\InvoiceDueTermOption[]|null
     */
    public function getInvoiceDueTerms()
    {
        return $this->container['invoice_due_terms'];
    }

    /**
     * Sets invoice_due_terms
     *
     * @param \Brixion\Kolibri\Model\InvoiceDueTermOption[]|null $invoice_due_terms invoice_due_terms
     *
     * @return self
     */
    public function setInvoiceDueTerms($invoice_due_terms)
    {
        if (is_null($invoice_due_terms)) {
            throw new \InvalidArgumentException('non-nullable invoice_due_terms cannot be null');
        }
        $this->container['invoice_due_terms'] = $invoice_due_terms;

        return $this;
    }

    /**
     * Gets invoice_statuses
     *
     * @return \Brixion\Kolibri\Model\InvoiceStatusOption[]|null
     */
    public function getInvoiceStatuses()
    {
        return $this->container['invoice_statuses'];
    }

    /**
     * Sets invoice_statuses
     *
     * @param \Brixion\Kolibri\Model\InvoiceStatusOption[]|null $invoice_statuses invoice_statuses
     *
     * @return self
     */
    public function setInvoiceStatuses($invoice_statuses)
    {
        if (is_null($invoice_statuses)) {
            throw new \InvalidArgumentException('non-nullable invoice_statuses cannot be null');
        }
        $this->container['invoice_statuses'] = $invoice_statuses;

        return $this;
    }

    /**
     * Gets invoice_types
     *
     * @return \Brixion\Kolibri\Model\InvoiceTypeOption[]|null
     */
    public function getInvoiceTypes()
    {
        return $this->container['invoice_types'];
    }

    /**
     * Sets invoice_types
     *
     * @param \Brixion\Kolibri\Model\InvoiceTypeOption[]|null $invoice_types invoice_types
     *
     * @return self
     */
    public function setInvoiceTypes($invoice_types)
    {
        if (is_null($invoice_types)) {
            throw new \InvalidArgumentException('non-nullable invoice_types cannot be null');
        }
        $this->container['invoice_types'] = $invoice_types;

        return $this;
    }

    /**
     * Gets isolation_type_options
     *
     * @return \Brixion\Kolibri\Model\IsolationTypeOption[]|null
     */
    public function getIsolationTypeOptions()
    {
        return $this->container['isolation_type_options'];
    }

    /**
     * Sets isolation_type_options
     *
     * @param \Brixion\Kolibri\Model\IsolationTypeOption[]|null $isolation_type_options IsolationType Options (E.g. 'Roof', 'Wall', 'Floor'). Dutch: IsolatieVorm
     *
     * @return self
     */
    public function setIsolationTypeOptions($isolation_type_options)
    {
        if (is_null($isolation_type_options)) {
            throw new \InvalidArgumentException('non-nullable isolation_type_options cannot be null');
        }
        $this->container['isolation_type_options'] = $isolation_type_options;

        return $this;
    }

    /**
     * Gets kitchen_facility_options
     *
     * @return \Brixion\Kolibri\Model\KitchenFacilityOption[]|null
     */
    public function getKitchenFacilityOptions()
    {
        return $this->container['kitchen_facility_options'];
    }

    /**
     * Sets kitchen_facility_options
     *
     * @param \Brixion\Kolibri\Model\KitchenFacilityOption[]|null $kitchen_facility_options Kitchen facility options (E.g. 'Built in equipment', 'Cooking island')
     *
     * @return self
     */
    public function setKitchenFacilityOptions($kitchen_facility_options)
    {
        if (is_null($kitchen_facility_options)) {
            throw new \InvalidArgumentException('non-nullable kitchen_facility_options cannot be null');
        }
        $this->container['kitchen_facility_options'] = $kitchen_facility_options;

        return $this;
    }

    /**
     * Gets kitchen_types
     *
     * @return \Brixion\Kolibri\Model\KitchenTypeOption[]|null
     */
    public function getKitchenTypes()
    {
        return $this->container['kitchen_types'];
    }

    /**
     * Sets kitchen_types
     *
     * @param \Brixion\Kolibri\Model\KitchenTypeOption[]|null $kitchen_types Kitchen Types (E.g. 'Open', 'Dining')]
     *
     * @return self
     */
    public function setKitchenTypes($kitchen_types)
    {
        if (is_null($kitchen_types)) {
            throw new \InvalidArgumentException('non-nullable kitchen_types cannot be null');
        }
        $this->container['kitchen_types'] = $kitchen_types;

        return $this;
    }

    /**
     * Gets land_property_sub_type_options
     *
     * @return \Brixion\Kolibri\Model\LandPropertySubTypeOption[]|null
     */
    public function getLandPropertySubTypeOptions()
    {
        return $this->container['land_property_sub_type_options'];
    }

    /**
     * Sets land_property_sub_type_options
     *
     * @param \Brixion\Kolibri\Model\LandPropertySubTypeOption[]|null $land_property_sub_type_options LandPropertySubType Options (E.g. 'Forest land', 'Land by waters', 'Social land'). Dutch: SubTypeLand
     *
     * @return self
     */
    public function setLandPropertySubTypeOptions($land_property_sub_type_options)
    {
        if (is_null($land_property_sub_type_options)) {
            throw new \InvalidArgumentException('non-nullable land_property_sub_type_options cannot be null');
        }
        $this->container['land_property_sub_type_options'] = $land_property_sub_type_options;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return \Brixion\Kolibri\Model\LanguageSpokenOption[]|null
     */
    public function getLanguages()
    {
        return $this->container['languages'];
    }

    /**
     * Sets languages
     *
     * @param \Brixion\Kolibri\Model\LanguageSpokenOption[]|null $languages languages
     *
     * @return self
     */
    public function setLanguages($languages)
    {
        if (is_null($languages)) {
            throw new \InvalidArgumentException('non-nullable languages cannot be null');
        }
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets leasehold_owner_type_options
     *
     * @return \Brixion\Kolibri\Model\LeaseholdOwnerTypeOption[]|null
     */
    public function getLeaseholdOwnerTypeOptions()
    {
        return $this->container['leasehold_owner_type_options'];
    }

    /**
     * Sets leasehold_owner_type_options
     *
     * @param \Brixion\Kolibri\Model\LeaseholdOwnerTypeOption[]|null $leasehold_owner_type_options LeaseholdOwnerType Options (E.g. 'Private', 'Municipality' or 'Other'.
     *
     * @return self
     */
    public function setLeaseholdOwnerTypeOptions($leasehold_owner_type_options)
    {
        if (is_null($leasehold_owner_type_options)) {
            throw new \InvalidArgumentException('non-nullable leasehold_owner_type_options cannot be null');
        }
        $this->container['leasehold_owner_type_options'] = $leasehold_owner_type_options;

        return $this;
    }

    /**
     * Gets lease_term_unit_options
     *
     * @return \Brixion\Kolibri\Model\LeaseTermUnitOption[]|null
     */
    public function getLeaseTermUnitOptions()
    {
        return $this->container['lease_term_unit_options'];
    }

    /**
     * Sets lease_term_unit_options
     *
     * @param \Brixion\Kolibri\Model\LeaseTermUnitOption[]|null $lease_term_unit_options LeaseTermUnit Options (E.g. 'Days', 'Weeks' or 'Months'.
     *
     * @return self
     */
    public function setLeaseTermUnitOptions($lease_term_unit_options)
    {
        if (is_null($lease_term_unit_options)) {
            throw new \InvalidArgumentException('non-nullable lease_term_unit_options cannot be null');
        }
        $this->container['lease_term_unit_options'] = $lease_term_unit_options;

        return $this;
    }

    /**
     * Gets legal_status_options
     *
     * @return \Brixion\Kolibri\Model\LegalStatusOption[]|null
     */
    public function getLegalStatusOptions()
    {
        return $this->container['legal_status_options'];
    }

    /**
     * Sets legal_status_options
     *
     * @param \Brixion\Kolibri\Model\LegalStatusOption[]|null $legal_status_options LegalStatus Options (E.g. 'shared ownership', 'new construction', 'Condominium'). Dutch: JuridischeStatus
     *
     * @return self
     */
    public function setLegalStatusOptions($legal_status_options)
    {
        if (is_null($legal_status_options)) {
            throw new \InvalidArgumentException('non-nullable legal_status_options cannot be null');
        }
        $this->container['legal_status_options'] = $legal_status_options;

        return $this;
    }

    /**
     * Gets leisure_facility_type_options
     *
     * @return \Brixion\Kolibri\Model\LeisureFacilityOption[]|null
     */
    public function getLeisureFacilityTypeOptions()
    {
        return $this->container['leisure_facility_type_options'];
    }

    /**
     * Sets leisure_facility_type_options
     *
     * @param \Brixion\Kolibri\Model\LeisureFacilityOption[]|null $leisure_facility_type_options LeisureFacilityTypes options (E.g. 'Mini market', 'Toilet buildings')
     *
     * @return self
     */
    public function setLeisureFacilityTypeOptions($leisure_facility_type_options)
    {
        if (is_null($leisure_facility_type_options)) {
            throw new \InvalidArgumentException('non-nullable leisure_facility_type_options cannot be null');
        }
        $this->container['leisure_facility_type_options'] = $leisure_facility_type_options;

        return $this;
    }

    /**
     * Gets leisure_type_options
     *
     * @return \Brixion\Kolibri\Model\LeisureTypeOption[]|null
     */
    public function getLeisureTypeOptions()
    {
        return $this->container['leisure_type_options'];
    }

    /**
     * Sets leisure_type_options
     *
     * @param \Brixion\Kolibri\Model\LeisureTypeOption[]|null $leisure_type_options LeisureType options (E.g. 'Camping', 'Bungalow park', 'Daytime operation')
     *
     * @return self
     */
    public function setLeisureTypeOptions($leisure_type_options)
    {
        if (is_null($leisure_type_options)) {
            throw new \InvalidArgumentException('non-nullable leisure_type_options cannot be null');
        }
        $this->container['leisure_type_options'] = $leisure_type_options;

        return $this;
    }

    /**
     * Gets listing_types
     *
     * @return \Brixion\Kolibri\Model\ListingTypeOption[]|null
     */
    public function getListingTypes()
    {
        return $this->container['listing_types'];
    }

    /**
     * Sets listing_types
     *
     * @param \Brixion\Kolibri\Model\ListingTypeOption[]|null $listing_types Available isting types (e.g. 'Woonhuis', 'Appartement' or 'Parkeergelegenheid').
     *
     * @return self
     */
    public function setListingTypes($listing_types)
    {
        if (is_null($listing_types)) {
            throw new \InvalidArgumentException('non-nullable listing_types cannot be null');
        }
        $this->container['listing_types'] = $listing_types;

        return $this;
    }

    /**
     * Gets living_room_types
     *
     * @return \Brixion\Kolibri\Model\LivingRoomTypeOption[]|null
     */
    public function getLivingRoomTypes()
    {
        return $this->container['living_room_types'];
    }

    /**
     * Sets living_room_types
     *
     * @param \Brixion\Kolibri\Model\LivingRoomTypeOption[]|null $living_room_types Living room types (E.g. 'T-room', 'U-room')]
     *
     * @return self
     */
    public function setLivingRoomTypes($living_room_types)
    {
        if (is_null($living_room_types)) {
            throw new \InvalidArgumentException('non-nullable living_room_types cannot be null');
        }
        $this->container['living_room_types'] = $living_room_types;

        return $this;
    }

    /**
     * Gets location_places
     *
     * @return \Brixion\Kolibri\Model\LocationPlaceOption[]|null
     */
    public function getLocationPlaces()
    {
        return $this->container['location_places'];
    }

    /**
     * Sets location_places
     *
     * @param \Brixion\Kolibri\Model\LocationPlaceOption[]|null $location_places Location Places Periods (E.g. 'OnBusyStreet', 'NearRailwayStation').
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
     * Gets match_mail_period_options
     *
     * @return \Brixion\Kolibri\Model\MatchMailPeriodOption[]|null
     */
    public function getMatchMailPeriodOptions()
    {
        return $this->container['match_mail_period_options'];
    }

    /**
     * Sets match_mail_period_options
     *
     * @param \Brixion\Kolibri\Model\MatchMailPeriodOption[]|null $match_mail_period_options Matchmail period options (E.g. 'Never', 'Daily')
     *
     * @return self
     */
    public function setMatchMailPeriodOptions($match_mail_period_options)
    {
        if (is_null($match_mail_period_options)) {
            throw new \InvalidArgumentException('non-nullable match_mail_period_options cannot be null');
        }
        $this->container['match_mail_period_options'] = $match_mail_period_options;

        return $this;
    }

    /**
     * Gets match_mail_trigger_options
     *
     * @return \Brixion\Kolibri\Model\MatchMailTriggerOption[]|null
     */
    public function getMatchMailTriggerOptions()
    {
        return $this->container['match_mail_trigger_options'];
    }

    /**
     * Sets match_mail_trigger_options
     *
     * @param \Brixion\Kolibri\Model\MatchMailTriggerOption[]|null $match_mail_trigger_options Matchmail trigger options (E.g. 'AllChanges', 'PriceChanges')
     *
     * @return self
     */
    public function setMatchMailTriggerOptions($match_mail_trigger_options)
    {
        if (is_null($match_mail_trigger_options)) {
            throw new \InvalidArgumentException('non-nullable match_mail_trigger_options cannot be null');
        }
        $this->container['match_mail_trigger_options'] = $match_mail_trigger_options;

        return $this;
    }

    /**
     * Gets measurment_options
     *
     * @return \Brixion\Kolibri\Model\MeasurementUnitOption[]|null
     */
    public function getMeasurmentOptions()
    {
        return $this->container['measurment_options'];
    }

    /**
     * Sets measurment_options
     *
     * @param \Brixion\Kolibri\Model\MeasurementUnitOption[]|null $measurment_options Measurment unit optionss (E.g. 'Metric', 'Imperial')
     *
     * @return self
     */
    public function setMeasurmentOptions($measurment_options)
    {
        if (is_null($measurment_options)) {
            throw new \InvalidArgumentException('non-nullable measurment_options cannot be null');
        }
        $this->container['measurment_options'] = $measurment_options;

        return $this;
    }

    /**
     * Gets media_contract_status_options
     *
     * @return \Brixion\Kolibri\Model\MediaContractStatusOption[]|null
     */
    public function getMediaContractStatusOptions()
    {
        return $this->container['media_contract_status_options'];
    }

    /**
     * Sets media_contract_status_options
     *
     * @param \Brixion\Kolibri\Model\MediaContractStatusOption[]|null $media_contract_status_options Media Contract status options (E.g. 'Inactive', 'PendingActivation', 'Active')
     *
     * @return self
     */
    public function setMediaContractStatusOptions($media_contract_status_options)
    {
        if (is_null($media_contract_status_options)) {
            throw new \InvalidArgumentException('non-nullable media_contract_status_options cannot be null');
        }
        $this->container['media_contract_status_options'] = $media_contract_status_options;

        return $this;
    }

    /**
     * Gets media_partner_categories
     *
     * @return \Brixion\Kolibri\Model\MediaPartnerCategoryOption[]|null
     */
    public function getMediaPartnerCategories()
    {
        return $this->container['media_partner_categories'];
    }

    /**
     * Sets media_partner_categories
     *
     * @param \Brixion\Kolibri\Model\MediaPartnerCategoryOption[]|null $media_partner_categories MediaPartner Categories (E.g. 'Other', 'Portals', 'Printing').]
     *
     * @return self
     */
    public function setMediaPartnerCategories($media_partner_categories)
    {
        if (is_null($media_partner_categories)) {
            throw new \InvalidArgumentException('non-nullable media_partner_categories cannot be null');
        }
        $this->container['media_partner_categories'] = $media_partner_categories;

        return $this;
    }

    /**
     * Gets mixed_forms
     *
     * @return \Brixion\Kolibri\Model\MixedFormOption[]|null
     */
    public function getMixedForms()
    {
        return $this->container['mixed_forms'];
    }

    /**
     * Sets mixed_forms
     *
     * @param \Brixion\Kolibri\Model\MixedFormOption[]|null $mixed_forms Mengvormen (E.g. 'MGE constructie', 'HomeSaleGuarantee', 'uitpondproject').]
     *
     * @return self
     */
    public function setMixedForms($mixed_forms)
    {
        if (is_null($mixed_forms)) {
            throw new \InvalidArgumentException('non-nullable mixed_forms cannot be null');
        }
        $this->container['mixed_forms'] = $mixed_forms;

        return $this;
    }

    /**
     * Gets moving_reason_options
     *
     * @return \Brixion\Kolibri\Model\MovingReasonOption[]|null
     */
    public function getMovingReasonOptions()
    {
        return $this->container['moving_reason_options'];
    }

    /**
     * Sets moving_reason_options
     *
     * @param \Brixion\Kolibri\Model\MovingReasonOption[]|null $moving_reason_options Moving reason options (E.g. 'too small', 'too big')
     *
     * @return self
     */
    public function setMovingReasonOptions($moving_reason_options)
    {
        if (is_null($moving_reason_options)) {
            throw new \InvalidArgumentException('non-nullable moving_reason_options cannot be null');
        }
        $this->container['moving_reason_options'] = $moving_reason_options;

        return $this;
    }

    /**
     * Gets nature_registration_options
     *
     * @return \Brixion\Kolibri\Model\NatureRegistrationOption[]|null
     */
    public function getNatureRegistrationOptions()
    {
        return $this->container['nature_registration_options'];
    }

    /**
     * Sets nature_registration_options
     *
     * @param \Brixion\Kolibri\Model\NatureRegistrationOption[]|null $nature_registration_options Nature of registration options (E.g. 'Voluntarily for personal reasons', 'Forced due to business economic reasons')
     *
     * @return self
     */
    public function setNatureRegistrationOptions($nature_registration_options)
    {
        if (is_null($nature_registration_options)) {
            throw new \InvalidArgumentException('non-nullable nature_registration_options cannot be null');
        }
        $this->container['nature_registration_options'] = $nature_registration_options;

        return $this;
    }

    /**
     * Gets notification_date_format_options
     *
     * @return \Brixion\Kolibri\Model\NotificationDateFormatOption[]|null
     */
    public function getNotificationDateFormatOptions()
    {
        return $this->container['notification_date_format_options'];
    }

    /**
     * Sets notification_date_format_options
     *
     * @param \Brixion\Kolibri\Model\NotificationDateFormatOption[]|null $notification_date_format_options Notification date format options (E.g. 'week', 'month')
     *
     * @return self
     */
    public function setNotificationDateFormatOptions($notification_date_format_options)
    {
        if (is_null($notification_date_format_options)) {
            throw new \InvalidArgumentException('non-nullable notification_date_format_options cannot be null');
        }
        $this->container['notification_date_format_options'] = $notification_date_format_options;

        return $this;
    }

    /**
     * Gets offer_type_options
     *
     * @return \Brixion\Kolibri\Model\OfferTypeOption[]|null
     */
    public function getOfferTypeOptions()
    {
        return $this->container['offer_type_options'];
    }

    /**
     * Sets offer_type_options
     *
     * @param \Brixion\Kolibri\Model\OfferTypeOption[]|null $offer_type_options Offer type options (E.g. 'ForSale', 'ForRent')
     *
     * @return self
     */
    public function setOfferTypeOptions($offer_type_options)
    {
        if (is_null($offer_type_options)) {
            throw new \InvalidArgumentException('non-nullable offer_type_options cannot be null');
        }
        $this->container['offer_type_options'] = $offer_type_options;

        return $this;
    }

    /**
     * Gets open_house_recurrency_options
     *
     * @return \Brixion\Kolibri\Model\OpenHouseRecurrenceOption[]|null
     */
    public function getOpenHouseRecurrencyOptions()
    {
        return $this->container['open_house_recurrency_options'];
    }

    /**
     * Sets open_house_recurrency_options
     *
     * @param \Brixion\Kolibri\Model\OpenHouseRecurrenceOption[]|null $open_house_recurrency_options OpenHouseRecurrence Options (E.g. 'Single', 'Weekly'). Dutch: OpenHuisOptie
     *
     * @return self
     */
    public function setOpenHouseRecurrencyOptions($open_house_recurrency_options)
    {
        if (is_null($open_house_recurrency_options)) {
            throw new \InvalidArgumentException('non-nullable open_house_recurrency_options cannot be null');
        }
        $this->container['open_house_recurrency_options'] = $open_house_recurrency_options;

        return $this;
    }

    /**
     * Gets orientations
     *
     * @return \Brixion\Kolibri\Model\OrientationOption[]|null
     */
    public function getOrientations()
    {
        return $this->container['orientations'];
    }

    /**
     * Sets orientations
     *
     * @param \Brixion\Kolibri\Model\OrientationOption[]|null $orientations Orientations (E.g. 'North', 'South')]
     *
     * @return self
     */
    public function setOrientations($orientations)
    {
        if (is_null($orientations)) {
            throw new \InvalidArgumentException('non-nullable orientations cannot be null');
        }
        $this->container['orientations'] = $orientations;

        return $this;
    }

    /**
     * Gets ownership_options
     *
     * @return \Brixion\Kolibri\Model\OwnershipOption[]|null
     */
    public function getOwnershipOptions()
    {
        return $this->container['ownership_options'];
    }

    /**
     * Sets ownership_options
     *
     * @param \Brixion\Kolibri\Model\OwnershipOption[]|null $ownership_options Ownership Options (E.g. 'owned', 'rented', 'leased'). Dutch: KetelEigendom
     *
     * @return self
     */
    public function setOwnershipOptions($ownership_options)
    {
        if (is_null($ownership_options)) {
            throw new \InvalidArgumentException('non-nullable ownership_options cannot be null');
        }
        $this->container['ownership_options'] = $ownership_options;

        return $this;
    }

    /**
     * Gets ownership_type_options
     *
     * @return \Brixion\Kolibri\Model\OwnershipTypeOption[]|null
     */
    public function getOwnershipTypeOptions()
    {
        return $this->container['ownership_type_options'];
    }

    /**
     * Sets ownership_type_options
     *
     * @param \Brixion\Kolibri\Model\OwnershipTypeOption[]|null $ownership_type_options Ownership Type Options (E.g. 'Full ownership', 'Sublease', 'Use and occupancy'). Dutch: SoortEigendomsGegeven
     *
     * @return self
     */
    public function setOwnershipTypeOptions($ownership_type_options)
    {
        if (is_null($ownership_type_options)) {
            throw new \InvalidArgumentException('non-nullable ownership_type_options cannot be null');
        }
        $this->container['ownership_type_options'] = $ownership_type_options;

        return $this;
    }

    /**
     * Gets parking_facility_options
     *
     * @return \Brixion\Kolibri\Model\ParkingFacilityOption[]|null
     */
    public function getParkingFacilityOptions()
    {
        return $this->container['parking_facility_options'];
    }

    /**
     * Sets parking_facility_options
     *
     * @param \Brixion\Kolibri\Model\ParkingFacilityOption[]|null $parking_facility_options Parking Facility Options (E.g. 'Public parking', 'Paid parking', 'Car park'). Dutch: Parkeerfaciliteit, zoals betaald parkeren, parkeren met een vergunning.
     *
     * @return self
     */
    public function setParkingFacilityOptions($parking_facility_options)
    {
        if (is_null($parking_facility_options)) {
            throw new \InvalidArgumentException('non-nullable parking_facility_options cannot be null');
        }
        $this->container['parking_facility_options'] = $parking_facility_options;

        return $this;
    }

    /**
     * Gets parking_type_options
     *
     * @return \Brixion\Kolibri\Model\ParkingTypeOption[]|null
     */
    public function getParkingTypeOptions()
    {
        return $this->container['parking_type_options'];
    }

    /**
     * Sets parking_type_options
     *
     * @param \Brixion\Kolibri\Model\ParkingTypeOption[]|null $parking_type_options ParkingType Options (E.g. 'Public parking', 'Paid parking', 'Car park'). Dutch: TypeParkeerfaciliteit OR TypeParkeergelegenheid ?!?!
     *
     * @return self
     */
    public function setParkingTypeOptions($parking_type_options)
    {
        if (is_null($parking_type_options)) {
            throw new \InvalidArgumentException('non-nullable parking_type_options cannot be null');
        }
        $this->container['parking_type_options'] = $parking_type_options;

        return $this;
    }

    /**
     * Gets pavement_type_options
     *
     * @return \Brixion\Kolibri\Model\PavementTypeOption[]|null
     */
    public function getPavementTypeOptions()
    {
        return $this->container['pavement_type_options'];
    }

    /**
     * Sets pavement_type_options
     *
     * @param \Brixion\Kolibri\Model\PavementTypeOption[]|null $pavement_type_options Pavement types (E.g. 'Bitumen', 'Pavers')
     *
     * @return self
     */
    public function setPavementTypeOptions($pavement_type_options)
    {
        if (is_null($pavement_type_options)) {
            throw new \InvalidArgumentException('non-nullable pavement_type_options cannot be null');
        }
        $this->container['pavement_type_options'] = $pavement_type_options;

        return $this;
    }

    /**
     * Gets peculiarity_options
     *
     * @return \Brixion\Kolibri\Model\PeculiarityOption[]|null
     */
    public function getPeculiarityOptions()
    {
        return $this->container['peculiarity_options'];
    }

    /**
     * Sets peculiarity_options
     *
     * @param \Brixion\Kolibri\Model\PeculiarityOption[]|null $peculiarity_options Peculiarity Options (E.g. 'Monumental Building', 'Padded', 'Partially Leased').]
     *
     * @return self
     */
    public function setPeculiarityOptions($peculiarity_options)
    {
        if (is_null($peculiarity_options)) {
            throw new \InvalidArgumentException('non-nullable peculiarity_options cannot be null');
        }
        $this->container['peculiarity_options'] = $peculiarity_options;

        return $this;
    }

    /**
     * Gets phone_number_types
     *
     * @return \Brixion\Kolibri\Model\PhoneNumberTypeOption[]|null
     */
    public function getPhoneNumberTypes()
    {
        return $this->container['phone_number_types'];
    }

    /**
     * Sets phone_number_types
     *
     * @param \Brixion\Kolibri\Model\PhoneNumberTypeOption[]|null $phone_number_types phone_number_types
     *
     * @return self
     */
    public function setPhoneNumberTypes($phone_number_types)
    {
        if (is_null($phone_number_types)) {
            throw new \InvalidArgumentException('non-nullable phone_number_types cannot be null');
        }
        $this->container['phone_number_types'] = $phone_number_types;

        return $this;
    }

    /**
     * Gets pig_company_types
     *
     * @return \Brixion\Kolibri\Model\PigCompanyTypeOption[]|null
     */
    public function getPigCompanyTypes()
    {
        return $this->container['pig_company_types'];
    }

    /**
     * Sets pig_company_types
     *
     * @param \Brixion\Kolibri\Model\PigCompanyTypeOption[]|null $pig_company_types Pig Company Types (E.g. 'Sows', 'Meat').
     *
     * @return self
     */
    public function setPigCompanyTypes($pig_company_types)
    {
        if (is_null($pig_company_types)) {
            throw new \InvalidArgumentException('non-nullable pig_company_types cannot be null');
        }
        $this->container['pig_company_types'] = $pig_company_types;

        return $this;
    }

    /**
     * Gets point_of_interest_options
     *
     * @return \Brixion\Kolibri\Model\PointOfInterestTypeOption[]|null
     */
    public function getPointOfInterestOptions()
    {
        return $this->container['point_of_interest_options'];
    }

    /**
     * Sets point_of_interest_options
     *
     * @param \Brixion\Kolibri\Model\PointOfInterestTypeOption[]|null $point_of_interest_options PointOfInterest Options (E.g. 'Bank', 'Bus stop', 'metro stop').
     *
     * @return self
     */
    public function setPointOfInterestOptions($point_of_interest_options)
    {
        if (is_null($point_of_interest_options)) {
            throw new \InvalidArgumentException('non-nullable point_of_interest_options cannot be null');
        }
        $this->container['point_of_interest_options'] = $point_of_interest_options;

        return $this;
    }

    /**
     * Gets polution_type_options
     *
     * @return \Brixion\Kolibri\Model\PollutionTypeOption[]|null
     */
    public function getPolutionTypeOptions()
    {
        return $this->container['polution_type_options'];
    }

    /**
     * Sets polution_type_options
     *
     * @param \Brixion\Kolibri\Model\PollutionTypeOption[]|null $polution_type_options Polution Type Options (E.g. 'Removed', 'With certificate', 'Filled'). Dutch: Verontreiniging
     *
     * @return self
     */
    public function setPolutionTypeOptions($polution_type_options)
    {
        if (is_null($polution_type_options)) {
            throw new \InvalidArgumentException('non-nullable polution_type_options cannot be null');
        }
        $this->container['polution_type_options'] = $polution_type_options;

        return $this;
    }

    /**
     * Gets poultry_farming_subtypes
     *
     * @return \Brixion\Kolibri\Model\PoultryFarmingSubtypeOption[]|null
     */
    public function getPoultryFarmingSubtypes()
    {
        return $this->container['poultry_farming_subtypes'];
    }

    /**
     * Sets poultry_farming_subtypes
     *
     * @param \Brixion\Kolibri\Model\PoultryFarmingSubtypeOption[]|null $poultry_farming_subtypes Poultry Farming Subtypes (E.g. 'Broilers', 'Breeding Hens').
     *
     * @return self
     */
    public function setPoultryFarmingSubtypes($poultry_farming_subtypes)
    {
        if (is_null($poultry_farming_subtypes)) {
            throw new \InvalidArgumentException('non-nullable poultry_farming_subtypes cannot be null');
        }
        $this->container['poultry_farming_subtypes'] = $poultry_farming_subtypes;

        return $this;
    }

    /**
     * Gets poultry_housing_type_options
     *
     * @return \Brixion\Kolibri\Model\PoultryHousingTypeOption[]|null
     */
    public function getPoultryHousingTypeOptions()
    {
        return $this->container['poultry_housing_type_options'];
    }

    /**
     * Sets poultry_housing_type_options
     *
     * @param \Brixion\Kolibri\Model\PoultryHousingTypeOption[]|null $poultry_housing_type_options Poultry housing type options (E.g. 'Cage housing', 'Traditional housing')
     *
     * @return self
     */
    public function setPoultryHousingTypeOptions($poultry_housing_type_options)
    {
        if (is_null($poultry_housing_type_options)) {
            throw new \InvalidArgumentException('non-nullable poultry_housing_type_options cannot be null');
        }
        $this->container['poultry_housing_type_options'] = $poultry_housing_type_options;

        return $this;
    }

    /**
     * Gets price_codes
     *
     * @return \Brixion\Kolibri\Model\PriceCodeOption[]|null
     */
    public function getPriceCodes()
    {
        return $this->container['price_codes'];
    }

    /**
     * Sets price_codes
     *
     * @param \Brixion\Kolibri\Model\PriceCodeOption[]|null $price_codes Price codes (E.g. 'higher budget', 'public auction', etc.).
     *
     * @return self
     */
    public function setPriceCodes($price_codes)
    {
        if (is_null($price_codes)) {
            throw new \InvalidArgumentException('non-nullable price_codes cannot be null');
        }
        $this->container['price_codes'] = $price_codes;

        return $this;
    }

    /**
     * Gets price_history_events
     *
     * @return \Brixion\Kolibri\Model\PriceHistoryEventOption[]|null
     */
    public function getPriceHistoryEvents()
    {
        return $this->container['price_history_events'];
    }

    /**
     * Sets price_history_events
     *
     * @param \Brixion\Kolibri\Model\PriceHistoryEventOption[]|null $price_history_events PriceHistory Events (E.g. 'Registered', 'Changed').
     *
     * @return self
     */
    public function setPriceHistoryEvents($price_history_events)
    {
        if (is_null($price_history_events)) {
            throw new \InvalidArgumentException('non-nullable price_history_events cannot be null');
        }
        $this->container['price_history_events'] = $price_history_events;

        return $this;
    }

    /**
     * Gets priorities
     *
     * @return \Brixion\Kolibri\Model\PriorityOption[]|null
     */
    public function getPriorities()
    {
        return $this->container['priorities'];
    }

    /**
     * Sets priorities
     *
     * @param \Brixion\Kolibri\Model\PriorityOption[]|null $priorities priorities
     *
     * @return self
     */
    public function setPriorities($priorities)
    {
        if (is_null($priorities)) {
            throw new \InvalidArgumentException('non-nullable priorities cannot be null');
        }
        $this->container['priorities'] = $priorities;

        return $this;
    }

    /**
     * Gets publication_statuses
     *
     * @return \Brixion\Kolibri\Model\PublicationStatusOption[]|null
     */
    public function getPublicationStatuses()
    {
        return $this->container['publication_statuses'];
    }

    /**
     * Sets publication_statuses
     *
     * @param \Brixion\Kolibri\Model\PublicationStatusOption[]|null $publication_statuses Publication Statuses Options (E.g. 'Inactive', 'Publish Request Enqueued', 'Published').]
     *
     * @return self
     */
    public function setPublicationStatuses($publication_statuses)
    {
        if (is_null($publication_statuses)) {
            throw new \InvalidArgumentException('non-nullable publication_statuses cannot be null');
        }
        $this->container['publication_statuses'] = $publication_statuses;

        return $this;
    }

    /**
     * Gets real_estate_associations
     *
     * @return \Brixion\Kolibri\Model\RealEstateAssociationOption[]|null
     */
    public function getRealEstateAssociations()
    {
        return $this->container['real_estate_associations'];
    }

    /**
     * Sets real_estate_associations
     *
     * @param \Brixion\Kolibri\Model\RealEstateAssociationOption[]|null $real_estate_associations real_estate_associations
     *
     * @return self
     */
    public function setRealEstateAssociations($real_estate_associations)
    {
        if (is_null($real_estate_associations)) {
            throw new \InvalidArgumentException('non-nullable real_estate_associations cannot be null');
        }
        $this->container['real_estate_associations'] = $real_estate_associations;

        return $this;
    }

    /**
     * Gets real_estate_groups
     *
     * @return \Brixion\Kolibri\Model\RealEstateGroupOption[]|null
     */
    public function getRealEstateGroups()
    {
        return $this->container['real_estate_groups'];
    }

    /**
     * Sets real_estate_groups
     *
     * @param \Brixion\Kolibri\Model\RealEstateGroupOption[]|null $real_estate_groups Available realEstate groups ('Residential', 'Commercial', 'Agricultural', 'Production rights').
     *
     * @return self
     */
    public function setRealEstateGroups($real_estate_groups)
    {
        if (is_null($real_estate_groups)) {
            throw new \InvalidArgumentException('non-nullable real_estate_groups cannot be null');
        }
        $this->container['real_estate_groups'] = $real_estate_groups;

        return $this;
    }

    /**
     * Gets register_reason_options
     *
     * @return \Brixion\Kolibri\Model\RegisterReasonOption[]|null
     */
    public function getRegisterReasonOptions()
    {
        return $this->container['register_reason_options'];
    }

    /**
     * Sets register_reason_options
     *
     * @param \Brixion\Kolibri\Model\RegisterReasonOption[]|null $register_reason_options Register reason options (E.g. 'Relocation to other country', 'Business termination')
     *
     * @return self
     */
    public function setRegisterReasonOptions($register_reason_options)
    {
        if (is_null($register_reason_options)) {
            throw new \InvalidArgumentException('non-nullable register_reason_options cannot be null');
        }
        $this->container['register_reason_options'] = $register_reason_options;

        return $this;
    }

    /**
     * Gets relation_roles
     *
     * @return \Brixion\Kolibri\Model\RelationRoleOption[]|null
     */
    public function getRelationRoles()
    {
        return $this->container['relation_roles'];
    }

    /**
     * Sets relation_roles
     *
     * @param \Brixion\Kolibri\Model\RelationRoleOption[]|null $relation_roles Relation Roles (E.g. 'Vendor', 'Applicant', 'Notary').
     *
     * @return self
     */
    public function setRelationRoles($relation_roles)
    {
        if (is_null($relation_roles)) {
            throw new \InvalidArgumentException('non-nullable relation_roles cannot be null');
        }
        $this->container['relation_roles'] = $relation_roles;

        return $this;
    }

    /**
     * Gets relation_types
     *
     * @return \Brixion\Kolibri\Model\RelationTypeOption[]|null
     */
    public function getRelationTypes()
    {
        return $this->container['relation_types'];
    }

    /**
     * Sets relation_types
     *
     * @param \Brixion\Kolibri\Model\RelationTypeOption[]|null $relation_types relation_types
     *
     * @return self
     */
    public function setRelationTypes($relation_types)
    {
        if (is_null($relation_types)) {
            throw new \InvalidArgumentException('non-nullable relation_types cannot be null');
        }
        $this->container['relation_types'] = $relation_types;

        return $this;
    }

    /**
     * Gets reminder_minutes_options
     *
     * @return \Brixion\Kolibri\Model\ReminderMinutesOption[]|null
     */
    public function getReminderMinutesOptions()
    {
        return $this->container['reminder_minutes_options'];
    }

    /**
     * Sets reminder_minutes_options
     *
     * @param \Brixion\Kolibri\Model\ReminderMinutesOption[]|null $reminder_minutes_options reminder_minutes_options
     *
     * @return self
     */
    public function setReminderMinutesOptions($reminder_minutes_options)
    {
        if (is_null($reminder_minutes_options)) {
            throw new \InvalidArgumentException('non-nullable reminder_minutes_options cannot be null');
        }
        $this->container['reminder_minutes_options'] = $reminder_minutes_options;

        return $this;
    }

    /**
     * Gets reminder_notification_settings_type_option_list
     *
     * @return \Brixion\Kolibri\Model\ReminderNotificationSettingTypeOption[]|null
     */
    public function getReminderNotificationSettingsTypeOptionList()
    {
        return $this->container['reminder_notification_settings_type_option_list'];
    }

    /**
     * Sets reminder_notification_settings_type_option_list
     *
     * @param \Brixion\Kolibri\Model\ReminderNotificationSettingTypeOption[]|null $reminder_notification_settings_type_option_list Reminder notification setting type options (E.g. 'BankGuarantee', 'CallAfterViewing')
     *
     * @return self
     */
    public function setReminderNotificationSettingsTypeOptionList($reminder_notification_settings_type_option_list)
    {
        if (is_null($reminder_notification_settings_type_option_list)) {
            throw new \InvalidArgumentException('non-nullable reminder_notification_settings_type_option_list cannot be null');
        }
        $this->container['reminder_notification_settings_type_option_list'] = $reminder_notification_settings_type_option_list;

        return $this;
    }

    /**
     * Gets rent_conditions
     *
     * @return \Brixion\Kolibri\Model\RentConditionOption[]|null
     */
    public function getRentConditions()
    {
        return $this->container['rent_conditions'];
    }

    /**
     * Sets rent_conditions
     *
     * @param \Brixion\Kolibri\Model\RentConditionOption[]|null $rent_conditions Available Rent conditions (E.g. 'Per month', 'Per year').
     *
     * @return self
     */
    public function setRentConditions($rent_conditions)
    {
        if (is_null($rent_conditions)) {
            throw new \InvalidArgumentException('non-nullable rent_conditions cannot be null');
        }
        $this->container['rent_conditions'] = $rent_conditions;

        return $this;
    }

    /**
     * Gets rent_specifications
     *
     * @return \Brixion\Kolibri\Model\RentSpecificationOption[]|null
     */
    public function getRentSpecifications()
    {
        return $this->container['rent_specifications'];
    }

    /**
     * Sets rent_specifications
     *
     * @param \Brixion\Kolibri\Model\RentSpecificationOption[]|null $rent_specifications Rent specifications (E.g. including 'Gas', 'Water', 'ServiceCosts', 'Upholstered', etc.).
     *
     * @return self
     */
    public function setRentSpecifications($rent_specifications)
    {
        if (is_null($rent_specifications)) {
            throw new \InvalidArgumentException('non-nullable rent_specifications cannot be null');
        }
        $this->container['rent_specifications'] = $rent_specifications;

        return $this;
    }

    /**
     * Gets residential_building_type_options
     *
     * @return \Brixion\Kolibri\Model\ResidentialBuildingTypeOption[]|null
     */
    public function getResidentialBuildingTypeOptions()
    {
        return $this->container['residential_building_type_options'];
    }

    /**
     * Sets residential_building_type_options
     *
     * @param \Brixion\Kolibri\Model\ResidentialBuildingTypeOption[]|null $residential_building_type_options ResidentialBuildingType options (E.g. 'Apartment', 'House', 'Apartment complex')
     *
     * @return self
     */
    public function setResidentialBuildingTypeOptions($residential_building_type_options)
    {
        if (is_null($residential_building_type_options)) {
            throw new \InvalidArgumentException('non-nullable residential_building_type_options cannot be null');
        }
        $this->container['residential_building_type_options'] = $residential_building_type_options;

        return $this;
    }

    /**
     * Gets residential_facility_options
     *
     * @return \Brixion\Kolibri\Model\ResidentialFacilityOption[]|null
     */
    public function getResidentialFacilityOptions()
    {
        return $this->container['residential_facility_options'];
    }

    /**
     * Sets residential_facility_options
     *
     * @param \Brixion\Kolibri\Model\ResidentialFacilityOption[]|null $residential_facility_options Residential facility options (E.g. 'Elevator', 'Alarm system', 'Solar panels')
     *
     * @return self
     */
    public function setResidentialFacilityOptions($residential_facility_options)
    {
        if (is_null($residential_facility_options)) {
            throw new \InvalidArgumentException('non-nullable residential_facility_options cannot be null');
        }
        $this->container['residential_facility_options'] = $residential_facility_options;

        return $this;
    }

    /**
     * Gets residential_subtype_others
     *
     * @return \Brixion\Kolibri\Model\ResidentialSubtypeOtherOption[]|null
     */
    public function getResidentialSubtypeOthers()
    {
        return $this->container['residential_subtype_others'];
    }

    /**
     * Sets residential_subtype_others
     *
     * @param \Brixion\Kolibri\Model\ResidentialSubtypeOtherOption[]|null $residential_subtype_others Residential Subtype 'Others' (E.g. 'MobileHomePitch', 'StorageSpace').
     *
     * @return self
     */
    public function setResidentialSubtypeOthers($residential_subtype_others)
    {
        if (is_null($residential_subtype_others)) {
            throw new \InvalidArgumentException('non-nullable residential_subtype_others cannot be null');
        }
        $this->container['residential_subtype_others'] = $residential_subtype_others;

        return $this;
    }

    /**
     * Gets restaurant_hospitality_sector_types
     *
     * @return \Brixion\Kolibri\Model\RestaurantHospitalitySectorTypeOption[]|null
     */
    public function getRestaurantHospitalitySectorTypes()
    {
        return $this->container['restaurant_hospitality_sector_types'];
    }

    /**
     * Sets restaurant_hospitality_sector_types
     *
     * @param \Brixion\Kolibri\Model\RestaurantHospitalitySectorTypeOption[]|null $restaurant_hospitality_sector_types Restaurant hospitality types (E.g. 'CafeRestaurant', 'Roadhouse')
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
     * Gets roof_material_options
     *
     * @return \Brixion\Kolibri\Model\RoofMaterialOption[]|null
     */
    public function getRoofMaterialOptions()
    {
        return $this->container['roof_material_options'];
    }

    /**
     * Sets roof_material_options
     *
     * @param \Brixion\Kolibri\Model\RoofMaterialOption[]|null $roof_material_options RoofMaterial Options (E.g. 'Asbestos', 'Concrete', 'Wood'). Dutch: DakMateriaal
     *
     * @return self
     */
    public function setRoofMaterialOptions($roof_material_options)
    {
        if (is_null($roof_material_options)) {
            throw new \InvalidArgumentException('non-nullable roof_material_options cannot be null');
        }
        $this->container['roof_material_options'] = $roof_material_options;

        return $this;
    }

    /**
     * Gets roof_type_options
     *
     * @return \Brixion\Kolibri\Model\RoofTypeOption[]|null
     */
    public function getRoofTypeOptions()
    {
        return $this->container['roof_type_options'];
    }

    /**
     * Sets roof_type_options
     *
     * @param \Brixion\Kolibri\Model\RoofTypeOption[]|null $roof_type_options Roof type Options (E.g. 'Flat', 'Shed', 'Gambrel'). Dutch: TypeDak
     *
     * @return self
     */
    public function setRoofTypeOptions($roof_type_options)
    {
        if (is_null($roof_type_options)) {
            throw new \InvalidArgumentException('non-nullable roof_type_options cannot be null');
        }
        $this->container['roof_type_options'] = $roof_type_options;

        return $this;
    }

    /**
     * Gets sale_conditions
     *
     * @return \Brixion\Kolibri\Model\SaleConditionOption[]|null
     */
    public function getSaleConditions()
    {
        return $this->container['sale_conditions'];
    }

    /**
     * Sets sale_conditions
     *
     * @param \Brixion\Kolibri\Model\SaleConditionOption[]|null $sale_conditions Available Sale conditions (E.g. 'Costs Buyer', 'Costs split').
     *
     * @return self
     */
    public function setSaleConditions($sale_conditions)
    {
        if (is_null($sale_conditions)) {
            throw new \InvalidArgumentException('non-nullable sale_conditions cannot be null');
        }
        $this->container['sale_conditions'] = $sale_conditions;

        return $this;
    }

    /**
     * Gets search_assignment_facility_options
     *
     * @return \Brixion\Kolibri\Model\SearchAssignmentFacilityOption[]|null
     */
    public function getSearchAssignmentFacilityOptions()
    {
        return $this->container['search_assignment_facility_options'];
    }

    /**
     * Sets search_assignment_facility_options
     *
     * @param \Brixion\Kolibri\Model\SearchAssignmentFacilityOption[]|null $search_assignment_facility_options Search Assignment fAcility Options (E.g. 'Garden', 'ElevatorInBuilding', 'Basement')
     *
     * @return self
     */
    public function setSearchAssignmentFacilityOptions($search_assignment_facility_options)
    {
        if (is_null($search_assignment_facility_options)) {
            throw new \InvalidArgumentException('non-nullable search_assignment_facility_options cannot be null');
        }
        $this->container['search_assignment_facility_options'] = $search_assignment_facility_options;

        return $this;
    }

    /**
     * Gets search_assignment_peculiarity_options
     *
     * @return \Brixion\Kolibri\Model\SearchAssignmentPeculiarityOption[]|null
     */
    public function getSearchAssignmentPeculiarityOptions()
    {
        return $this->container['search_assignment_peculiarity_options'];
    }

    /**
     * Sets search_assignment_peculiarity_options
     *
     * @param \Brixion\Kolibri\Model\SearchAssignmentPeculiarityOption[]|null $search_assignment_peculiarity_options Search Assignment Peculiarity options (E.g. 'TargetGroupListing', 'RecreationalListing', 'MoumentalListing')
     *
     * @return self
     */
    public function setSearchAssignmentPeculiarityOptions($search_assignment_peculiarity_options)
    {
        if (is_null($search_assignment_peculiarity_options)) {
            throw new \InvalidArgumentException('non-nullable search_assignment_peculiarity_options cannot be null');
        }
        $this->container['search_assignment_peculiarity_options'] = $search_assignment_peculiarity_options;

        return $this;
    }

    /**
     * Gets situated_type_options
     *
     * @return \Brixion\Kolibri\Model\SituatedTypeOption[]|null
     */
    public function getSituatedTypeOptions()
    {
        return $this->container['situated_type_options'];
    }

    /**
     * Sets situated_type_options
     *
     * @param \Brixion\Kolibri\Model\SituatedTypeOption[]|null $situated_type_options Situated Type Options (E.g. 'Indoor', 'Annex', 'Detached'). Dutch: Situatie
     *
     * @return self
     */
    public function setSituatedTypeOptions($situated_type_options)
    {
        if (is_null($situated_type_options)) {
            throw new \InvalidArgumentException('non-nullable situated_type_options cannot be null');
        }
        $this->container['situated_type_options'] = $situated_type_options;

        return $this;
    }

    /**
     * Gets social_media_type_options
     *
     * @return \Brixion\Kolibri\Model\SocialMediaTypeOption[]|null
     */
    public function getSocialMediaTypeOptions()
    {
        return $this->container['social_media_type_options'];
    }

    /**
     * Sets social_media_type_options
     *
     * @param \Brixion\Kolibri\Model\SocialMediaTypeOption[]|null $social_media_type_options SocialMediaTypes Options (E.g. 'LinkedIn', 'Facebook', 'Twitter').
     *
     * @return self
     */
    public function setSocialMediaTypeOptions($social_media_type_options)
    {
        if (is_null($social_media_type_options)) {
            throw new \InvalidArgumentException('non-nullable social_media_type_options cannot be null');
        }
        $this->container['social_media_type_options'] = $social_media_type_options;

        return $this;
    }

    /**
     * Gets social_property_facility_type_options
     *
     * @return \Brixion\Kolibri\Model\SocialPropertyFacilityOption[]|null
     */
    public function getSocialPropertyFacilityTypeOptions()
    {
        return $this->container['social_property_facility_type_options'];
    }

    /**
     * Sets social_property_facility_type_options
     *
     * @param \Brixion\Kolibri\Model\SocialPropertyFacilityOption[]|null $social_property_facility_type_options SocialPropertyFacilityTypes options (E.g. 'Private parking', 'Elevator', 'Swimming pool')
     *
     * @return self
     */
    public function setSocialPropertyFacilityTypeOptions($social_property_facility_type_options)
    {
        if (is_null($social_property_facility_type_options)) {
            throw new \InvalidArgumentException('non-nullable social_property_facility_type_options cannot be null');
        }
        $this->container['social_property_facility_type_options'] = $social_property_facility_type_options;

        return $this;
    }

    /**
     * Gets social_property_type_options
     *
     * @return \Brixion\Kolibri\Model\SocialPropertyTypeOption[]|null
     */
    public function getSocialPropertyTypeOptions()
    {
        return $this->container['social_property_type_options'];
    }

    /**
     * Sets social_property_type_options
     *
     * @param \Brixion\Kolibri\Model\SocialPropertyTypeOption[]|null $social_property_type_options SocialPropertyType options (E.g. 'Healthcare', 'Sports', 'Cultural')
     *
     * @return self
     */
    public function setSocialPropertyTypeOptions($social_property_type_options)
    {
        if (is_null($social_property_type_options)) {
            throw new \InvalidArgumentException('non-nullable social_property_type_options cannot be null');
        }
        $this->container['social_property_type_options'] = $social_property_type_options;

        return $this;
    }

    /**
     * Gets soil_type_options
     *
     * @return \Brixion\Kolibri\Model\SoilTypeOption[]|null
     */
    public function getSoilTypeOptions()
    {
        return $this->container['soil_type_options'];
    }

    /**
     * Sets soil_type_options
     *
     * @param \Brixion\Kolibri\Model\SoilTypeOption[]|null $soil_type_options Soil type options (E.g. 'Clay', 'MarineClay', 'ConcreteFloor')
     *
     * @return self
     */
    public function setSoilTypeOptions($soil_type_options)
    {
        if (is_null($soil_type_options)) {
            throw new \InvalidArgumentException('non-nullable soil_type_options cannot be null');
        }
        $this->container['soil_type_options'] = $soil_type_options;

        return $this;
    }

    /**
     * Gets space_types
     *
     * @return \Brixion\Kolibri\Model\SpaceTypeOption[]|null
     */
    public function getSpaceTypes()
    {
        return $this->container['space_types'];
    }

    /**
     * Sets space_types
     *
     * @param \Brixion\Kolibri\Model\SpaceTypeOption[]|null $space_types Space types (E.g. 'Kitchen', 'Bathroom')]
     *
     * @return self
     */
    public function setSpaceTypes($space_types)
    {
        if (is_null($space_types)) {
            throw new \InvalidArgumentException('non-nullable space_types cannot be null');
        }
        $this->container['space_types'] = $space_types;

        return $this;
    }

    /**
     * Gets storage_room_type_options
     *
     * @return \Brixion\Kolibri\Model\StorageRoomTypeOption[]|null
     */
    public function getStorageRoomTypeOptions()
    {
        return $this->container['storage_room_type_options'];
    }

    /**
     * Sets storage_room_type_options
     *
     * @param \Brixion\Kolibri\Model\StorageRoomTypeOption[]|null $storage_room_type_options StorageRoomType Options (E.g. 'Attached stone', 'Indoor', 'Detached wood'). Dutch: TypeBerging
     *
     * @return self
     */
    public function setStorageRoomTypeOptions($storage_room_type_options)
    {
        if (is_null($storage_room_type_options)) {
            throw new \InvalidArgumentException('non-nullable storage_room_type_options cannot be null');
        }
        $this->container['storage_room_type_options'] = $storage_room_type_options;

        return $this;
    }

    /**
     * Gets stoves
     *
     * @return \Brixion\Kolibri\Model\StoveOption[]|null
     */
    public function getStoves()
    {
        return $this->container['stoves'];
    }

    /**
     * Sets stoves
     *
     * @param \Brixion\Kolibri\Model\StoveOption[]|null $stoves Stove type (E.g. 'Electric', 'Gas')]
     *
     * @return self
     */
    public function setStoves($stoves)
    {
        if (is_null($stoves)) {
            throw new \InvalidArgumentException('non-nullable stoves cannot be null');
        }
        $this->container['stoves'] = $stoves;

        return $this;
    }

    /**
     * Gets take_over_specification_options
     *
     * @return \Brixion\Kolibri\Model\TakeOverSpecificationOption[]|null
     */
    public function getTakeOverSpecificationOptions()
    {
        return $this->container['take_over_specification_options'];
    }

    /**
     * Sets take_over_specification_options
     *
     * @param \Brixion\Kolibri\Model\TakeOverSpecificationOption[]|null $take_over_specification_options TakeOver specification options (E.g. 'StaysBehind', 'GoesAlong')
     *
     * @return self
     */
    public function setTakeOverSpecificationOptions($take_over_specification_options)
    {
        if (is_null($take_over_specification_options)) {
            throw new \InvalidArgumentException('non-nullable take_over_specification_options cannot be null');
        }
        $this->container['take_over_specification_options'] = $take_over_specification_options;

        return $this;
    }

    /**
     * Gets task_categories
     *
     * @return \Brixion\Kolibri\Model\TaskCategoryOption[]|null
     */
    public function getTaskCategories()
    {
        return $this->container['task_categories'];
    }

    /**
     * Sets task_categories
     *
     * @param \Brixion\Kolibri\Model\TaskCategoryOption[]|null $task_categories task_categories
     *
     * @return self
     */
    public function setTaskCategories($task_categories)
    {
        if (is_null($task_categories)) {
            throw new \InvalidArgumentException('non-nullable task_categories cannot be null');
        }
        $this->container['task_categories'] = $task_categories;

        return $this;
    }

    /**
     * Gets task_follow_ups
     *
     * @return \Brixion\Kolibri\Model\TaskFollowUpOption[]|null
     */
    public function getTaskFollowUps()
    {
        return $this->container['task_follow_ups'];
    }

    /**
     * Sets task_follow_ups
     *
     * @param \Brixion\Kolibri\Model\TaskFollowUpOption[]|null $task_follow_ups task_follow_ups
     *
     * @return self
     */
    public function setTaskFollowUps($task_follow_ups)
    {
        if (is_null($task_follow_ups)) {
            throw new \InvalidArgumentException('non-nullable task_follow_ups cannot be null');
        }
        $this->container['task_follow_ups'] = $task_follow_ups;

        return $this;
    }

    /**
     * Gets task_statuses
     *
     * @return \Brixion\Kolibri\Model\TaskStatusOption[]|null
     */
    public function getTaskStatuses()
    {
        return $this->container['task_statuses'];
    }

    /**
     * Sets task_statuses
     *
     * @param \Brixion\Kolibri\Model\TaskStatusOption[]|null $task_statuses task_statuses
     *
     * @return self
     */
    public function setTaskStatuses($task_statuses)
    {
        if (is_null($task_statuses)) {
            throw new \InvalidArgumentException('non-nullable task_statuses cannot be null');
        }
        $this->container['task_statuses'] = $task_statuses;

        return $this;
    }

    /**
     * Gets template_definition_category_options
     *
     * @return \Brixion\Kolibri\Model\TemplateDefinitionCategoryOption[]|null
     */
    public function getTemplateDefinitionCategoryOptions()
    {
        return $this->container['template_definition_category_options'];
    }

    /**
     * Sets template_definition_category_options
     *
     * @param \Brixion\Kolibri\Model\TemplateDefinitionCategoryOption[]|null $template_definition_category_options Template definition category options (E.g. email signature, email template)
     *
     * @return self
     */
    public function setTemplateDefinitionCategoryOptions($template_definition_category_options)
    {
        if (is_null($template_definition_category_options)) {
            throw new \InvalidArgumentException('non-nullable template_definition_category_options cannot be null');
        }
        $this->container['template_definition_category_options'] = $template_definition_category_options;

        return $this;
    }

    /**
     * Gets timeline_action_sub_options
     *
     * @return \Brixion\Kolibri\Model\TimelineActionSubOption[]|null
     */
    public function getTimelineActionSubOptions()
    {
        return $this->container['timeline_action_sub_options'];
    }

    /**
     * Sets timeline_action_sub_options
     *
     * @param \Brixion\Kolibri\Model\TimelineActionSubOption[]|null $timeline_action_sub_options Timeline Action Sub options (E.g. 'Mandate', 'DateAuction')
     *
     * @return self
     */
    public function setTimelineActionSubOptions($timeline_action_sub_options)
    {
        if (is_null($timeline_action_sub_options)) {
            throw new \InvalidArgumentException('non-nullable timeline_action_sub_options cannot be null');
        }
        $this->container['timeline_action_sub_options'] = $timeline_action_sub_options;

        return $this;
    }

    /**
     * Gets timeline_action_types
     *
     * @return \Brixion\Kolibri\Model\TimelineActionTypeOption[]|null
     */
    public function getTimelineActionTypes()
    {
        return $this->container['timeline_action_types'];
    }

    /**
     * Sets timeline_action_types
     *
     * @param \Brixion\Kolibri\Model\TimelineActionTypeOption[]|null $timeline_action_types timeline_action_types
     *
     * @return self
     */
    public function setTimelineActionTypes($timeline_action_types)
    {
        if (is_null($timeline_action_types)) {
            throw new \InvalidArgumentException('non-nullable timeline_action_types cannot be null');
        }
        $this->container['timeline_action_types'] = $timeline_action_types;

        return $this;
    }

    /**
     * Gets type_alv_options
     *
     * @return \Brixion\Kolibri\Model\TypeAlvOption[]|null
     */
    public function getTypeAlvOptions()
    {
        return $this->container['type_alv_options'];
    }

    /**
     * Sets type_alv_options
     *
     * @param \Brixion\Kolibri\Model\TypeAlvOption[]|null $type_alv_options ALV types (E.g. 'CattleFarming', 'MeatCalves', 'DairyFarming')
     *
     * @return self
     */
    public function setTypeAlvOptions($type_alv_options)
    {
        if (is_null($type_alv_options)) {
            throw new \InvalidArgumentException('non-nullable type_alv_options cannot be null');
        }
        $this->container['type_alv_options'] = $type_alv_options;

        return $this;
    }

    /**
     * Gets type_alv_other_options
     *
     * @return \Brixion\Kolibri\Model\TypeAlvOtherOption[]|null
     */
    public function getTypeAlvOtherOptions()
    {
        return $this->container['type_alv_other_options'];
    }

    /**
     * Sets type_alv_other_options
     *
     * @param \Brixion\Kolibri\Model\TypeAlvOtherOption[]|null $type_alv_other_options Type ALV Other options (E.g. 'Sheep', 'Goats', 'Eel')
     *
     * @return self
     */
    public function setTypeAlvOtherOptions($type_alv_other_options)
    {
        if (is_null($type_alv_other_options)) {
            throw new \InvalidArgumentException('non-nullable type_alv_other_options cannot be null');
        }
        $this->container['type_alv_other_options'] = $type_alv_other_options;

        return $this;
    }

    /**
     * Gets type_bog_options
     *
     * @return \Brixion\Kolibri\Model\TypeBOGOption[]|null
     */
    public function getTypeBogOptions()
    {
        return $this->container['type_bog_options'];
    }

    /**
     * Sets type_bog_options
     *
     * @param \Brixion\Kolibri\Model\TypeBOGOption[]|null $type_bog_options BOG types (E.g. 'Leisure', 'Social Property', 'Investment')
     *
     * @return self
     */
    public function setTypeBogOptions($type_bog_options)
    {
        if (is_null($type_bog_options)) {
            throw new \InvalidArgumentException('non-nullable type_bog_options cannot be null');
        }
        $this->container['type_bog_options'] = $type_bog_options;

        return $this;
    }

    /**
     * Gets type_of_business_law_options
     *
     * @return \Brixion\Kolibri\Model\TypeOfBusinessLawOption[]|null
     */
    public function getTypeOfBusinessLawOptions()
    {
        return $this->container['type_of_business_law_options'];
    }

    /**
     * Sets type_of_business_law_options
     *
     * @param \Brixion\Kolibri\Model\TypeOfBusinessLawOption[]|null $type_of_business_law_options Type of business law options (E.g. 'ProtectedMonument', 'CategringAllowed')
     *
     * @return self
     */
    public function setTypeOfBusinessLawOptions($type_of_business_law_options)
    {
        if (is_null($type_of_business_law_options)) {
            throw new \InvalidArgumentException('non-nullable type_of_business_law_options cannot be null');
        }
        $this->container['type_of_business_law_options'] = $type_of_business_law_options;

        return $this;
    }

    /**
     * Gets type_of_floor_options
     *
     * @return \Brixion\Kolibri\Model\TypeOfFloorOption[]|null
     */
    public function getTypeOfFloorOptions()
    {
        return $this->container['type_of_floor_options'];
    }

    /**
     * Sets type_of_floor_options
     *
     * @param \Brixion\Kolibri\Model\TypeOfFloorOption[]|null $type_of_floor_options Type of floors (E.g. 'Attic', 'Ground floor', etc.).
     *
     * @return self
     */
    public function setTypeOfFloorOptions($type_of_floor_options)
    {
        if (is_null($type_of_floor_options)) {
            throw new \InvalidArgumentException('non-nullable type_of_floor_options cannot be null');
        }
        $this->container['type_of_floor_options'] = $type_of_floor_options;

        return $this;
    }

    /**
     * Gets type_of_habitation_options
     *
     * @return \Brixion\Kolibri\Model\TypeOfHabitationOption[]|null
     */
    public function getTypeOfHabitationOptions()
    {
        return $this->container['type_of_habitation_options'];
    }

    /**
     * Sets type_of_habitation_options
     *
     * @param \Brixion\Kolibri\Model\TypeOfHabitationOption[]|null $type_of_habitation_options Type of habitation options (E.g. 'rent', 'buy')
     *
     * @return self
     */
    public function setTypeOfHabitationOptions($type_of_habitation_options)
    {
        if (is_null($type_of_habitation_options)) {
            throw new \InvalidArgumentException('non-nullable type_of_habitation_options cannot be null');
        }
        $this->container['type_of_habitation_options'] = $type_of_habitation_options;

        return $this;
    }

    /**
     * Gets type_of_window_frame_options
     *
     * @return \Brixion\Kolibri\Model\TypeOfWindowFrameOption[]|null
     */
    public function getTypeOfWindowFrameOptions()
    {
        return $this->container['type_of_window_frame_options'];
    }

    /**
     * Sets type_of_window_frame_options
     *
     * @param \Brixion\Kolibri\Model\TypeOfWindowFrameOption[]|null $type_of_window_frame_options Window frame type options (E.g. 'Wood', 'Aluminium', 'Plastic'). Dutch: TypeOfWindowFrame
     *
     * @return self
     */
    public function setTypeOfWindowFrameOptions($type_of_window_frame_options)
    {
        if (is_null($type_of_window_frame_options)) {
            throw new \InvalidArgumentException('non-nullable type_of_window_frame_options cannot be null');
        }
        $this->container['type_of_window_frame_options'] = $type_of_window_frame_options;

        return $this;
    }

    /**
     * Gets type_part_options
     *
     * @return \Brixion\Kolibri\Model\TypePARTOption[]|null
     */
    public function getTypePartOptions()
    {
        return $this->container['type_part_options'];
    }

    /**
     * Sets type_part_options
     *
     * @param \Brixion\Kolibri\Model\TypePARTOption[]|null $type_part_options PART types (E.g. 'Apartment', 'BuildingGround', 'Other')
     *
     * @return self
     */
    public function setTypePartOptions($type_part_options)
    {
        if (is_null($type_part_options)) {
            throw new \InvalidArgumentException('non-nullable type_part_options cannot be null');
        }
        $this->container['type_part_options'] = $type_part_options;

        return $this;
    }

    /**
     * Gets type_part_other_options
     *
     * @return \Brixion\Kolibri\Model\TypePARTOtherOption[]|null
     */
    public function getTypePartOtherOptions()
    {
        return $this->container['type_part_other_options'];
    }

    /**
     * Sets type_part_other_options
     *
     * @param \Brixion\Kolibri\Model\TypePARTOtherOption[]|null $type_part_other_options Type PART Other options (E.g. 'Storage', 'Caravan Place', 'Parking space')
     *
     * @return self
     */
    public function setTypePartOtherOptions($type_part_other_options)
    {
        if (is_null($type_part_other_options)) {
            throw new \InvalidArgumentException('non-nullable type_part_other_options cannot be null');
        }
        $this->container['type_part_other_options'] = $type_part_other_options;

        return $this;
    }

    /**
     * Gets types_of_communal_area
     *
     * @return \Brixion\Kolibri\Model\TypeOfCommunalAreaOption[]|null
     */
    public function getTypesOfCommunalArea()
    {
        return $this->container['types_of_communal_area'];
    }

    /**
     * Sets types_of_communal_area
     *
     * @param \Brixion\Kolibri\Model\TypeOfCommunalAreaOption[]|null $types_of_communal_area Types of communal area options (E.g. 'Cafeteria', 'ConferenceRoom', 'Reception')
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
     * Gets unit_of_measurement_options
     *
     * @return \Brixion\Kolibri\Model\UnitOfMeasurementOption[]|null
     */
    public function getUnitOfMeasurementOptions()
    {
        return $this->container['unit_of_measurement_options'];
    }

    /**
     * Sets unit_of_measurement_options
     *
     * @param \Brixion\Kolibri\Model\UnitOfMeasurementOption[]|null $unit_of_measurement_options UnitOfMeasurement Options (E.g. '', '', '').
     *
     * @return self
     */
    public function setUnitOfMeasurementOptions($unit_of_measurement_options)
    {
        if (is_null($unit_of_measurement_options)) {
            throw new \InvalidArgumentException('non-nullable unit_of_measurement_options cannot be null');
        }
        $this->container['unit_of_measurement_options'] = $unit_of_measurement_options;

        return $this;
    }

    /**
     * Gets unit_of_volume_options
     *
     * @return \Brixion\Kolibri\Model\UnitOfVolumeOption[]|null
     */
    public function getUnitOfVolumeOptions()
    {
        return $this->container['unit_of_volume_options'];
    }

    /**
     * Sets unit_of_volume_options
     *
     * @param \Brixion\Kolibri\Model\UnitOfVolumeOption[]|null $unit_of_volume_options UnitOfVolume Options (E.g. '', '', '').
     *
     * @return self
     */
    public function setUnitOfVolumeOptions($unit_of_volume_options)
    {
        if (is_null($unit_of_volume_options)) {
            throw new \InvalidArgumentException('non-nullable unit_of_volume_options cannot be null');
        }
        $this->container['unit_of_volume_options'] = $unit_of_volume_options;

        return $this;
    }

    /**
     * Gets unit_size_options
     *
     * @return \Brixion\Kolibri\Model\UnitSizeOption[]|null
     */
    public function getUnitSizeOptions()
    {
        return $this->container['unit_size_options'];
    }

    /**
     * Sets unit_size_options
     *
     * @param \Brixion\Kolibri\Model\UnitSizeOption[]|null $unit_size_options UnitSize Options (E.g. '', '', ''). Dutch: UnitSize
     *
     * @return self
     */
    public function setUnitSizeOptions($unit_size_options)
    {
        if (is_null($unit_size_options)) {
            throw new \InvalidArgumentException('non-nullable unit_size_options cannot be null');
        }
        $this->container['unit_size_options'] = $unit_size_options;

        return $this;
    }

    /**
     * Gets vat_conditions
     *
     * @return \Brixion\Kolibri\Model\VatConditionOption[]|null
     */
    public function getVatConditions()
    {
        return $this->container['vat_conditions'];
    }

    /**
     * Sets vat_conditions
     *
     * @param \Brixion\Kolibri\Model\VatConditionOption[]|null $vat_conditions Available VAT conditions (E.g. 'Included VAT', 'Excluded VAT').
     *
     * @return self
     */
    public function setVatConditions($vat_conditions)
    {
        if (is_null($vat_conditions)) {
            throw new \InvalidArgumentException('non-nullable vat_conditions cannot be null');
        }
        $this->container['vat_conditions'] = $vat_conditions;

        return $this;
    }

    /**
     * Gets vendor_type_options
     *
     * @return \Brixion\Kolibri\Model\VendorTypeOption[]|null
     */
    public function getVendorTypeOptions()
    {
        return $this->container['vendor_type_options'];
    }

    /**
     * Sets vendor_type_options
     *
     * @param \Brixion\Kolibri\Model\VendorTypeOption[]|null $vendor_type_options Vendor type options (E.g. sellers, Vendor)
     *
     * @return self
     */
    public function setVendorTypeOptions($vendor_type_options)
    {
        if (is_null($vendor_type_options)) {
            throw new \InvalidArgumentException('non-nullable vendor_type_options cannot be null');
        }
        $this->container['vendor_type_options'] = $vendor_type_options;

        return $this;
    }

    /**
     * Gets waiting_time_options
     *
     * @return \Brixion\Kolibri\Model\WaitingTimeOption[]|null
     */
    public function getWaitingTimeOptions()
    {
        return $this->container['waiting_time_options'];
    }

    /**
     * Sets waiting_time_options
     *
     * @param \Brixion\Kolibri\Model\WaitingTimeOption[]|null $waiting_time_options Waitingtime for projects
     *
     * @return self
     */
    public function setWaitingTimeOptions($waiting_time_options)
    {
        if (is_null($waiting_time_options)) {
            throw new \InvalidArgumentException('non-nullable waiting_time_options cannot be null');
        }
        $this->container['waiting_time_options'] = $waiting_time_options;

        return $this;
    }

    /**
     * Gets website_provider_options
     *
     * @return \Brixion\Kolibri\Model\WebsiteProviderOption[]|null
     */
    public function getWebsiteProviderOptions()
    {
        return $this->container['website_provider_options'];
    }

    /**
     * Sets website_provider_options
     *
     * @param \Brixion\Kolibri\Model\WebsiteProviderOption[]|null $website_provider_options Website provider options (E.g. 'Housenet 3', 'Other')
     *
     * @return self
     */
    public function setWebsiteProviderOptions($website_provider_options)
    {
        if (is_null($website_provider_options)) {
            throw new \InvalidArgumentException('non-nullable website_provider_options cannot be null');
        }
        $this->container['website_provider_options'] = $website_provider_options;

        return $this;
    }

    /**
     * Gets welfare_state_options
     *
     * @return \Brixion\Kolibri\Model\WelfareStateOption[]|null
     */
    public function getWelfareStateOptions()
    {
        return $this->container['welfare_state_options'];
    }

    /**
     * Sets welfare_state_options
     *
     * @param \Brixion\Kolibri\Model\WelfareStateOption[]|null $welfare_state_options Welfare State Options (E.g. 'A1', 'A2', 'B1'). Dutch: Welstandsklasse
     *
     * @return self
     */
    public function setWelfareStateOptions($welfare_state_options)
    {
        if (is_null($welfare_state_options)) {
            throw new \InvalidArgumentException('non-nullable welfare_state_options cannot be null');
        }
        $this->container['welfare_state_options'] = $welfare_state_options;

        return $this;
    }

    /**
     * Gets withdraw_reason_options
     *
     * @return \Brixion\Kolibri\Model\WithdrawReasonOption[]|null
     */
    public function getWithdrawReasonOptions()
    {
        return $this->container['withdraw_reason_options'];
    }

    /**
     * Sets withdraw_reason_options
     *
     * @param \Brixion\Kolibri\Model\WithdrawReasonOption[]|null $withdraw_reason_options WithdrawReason Options (E.g. 'No more reason to move', 'Set price not met', 'Change of realtor'). Dutch: RedenVanIntrekken
     *
     * @return self
     */
    public function setWithdrawReasonOptions($withdraw_reason_options)
    {
        if (is_null($withdraw_reason_options)) {
            throw new \InvalidArgumentException('non-nullable withdraw_reason_options cannot be null');
        }
        $this->container['withdraw_reason_options'] = $withdraw_reason_options;

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
