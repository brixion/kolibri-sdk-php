<?php

declare(strict_types=1);

/**
 * RentOffer - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * RentOffer.
 * @implements \ArrayAccess<string, mixed>
 */
class RentOffer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'RentOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'advance' => 'float',
        'availability_is_temporary' => 'bool',
        'available_from' => '\DateTime',
        'available_until' => '\DateTime',
        'basic_rent' => 'float',
        'commission_contact_months_rent' => 'float',
        'commission_customer_months_rent' => 'float',
        'commission_owner_months_rent' => 'float',
        'contract_free_rental_period_in_months' => 'int',
        'date_reservation' => '\DateTime',
        'deposit' => 'float',
        'furniture' => 'float',
        'inspection_list' => '\DateTime',
        'is_vacant_property_act' => 'bool',
        'maximum_lease_term' => '\Brixion\Kolibri\Model\LeaseTerm',
        'minimum_lease_term' => '\Brixion\Kolibri\Model\LeaseTerm',
        'points_evaluation_system' => 'int',
        'realized_per_month' => 'float',
        'rent_condition' => '\Brixion\Kolibri\Model\RentCondition',
        'rented_from' => '\DateTime',
        'rented_until' => '\DateTime',
        'date_sign_deed' => '\DateTime',
        'rent_price' => 'float',
        'target_rent_price' => 'float',
        'rent_commission_total' => 'float',
        'rent_price_is_indexed' => 'bool',
        'rent_price_max' => 'float',
        'rent_price_office_space' => 'float',
        'rent_price_per_unit' => 'float',
        'rent_price_per_unit_size' => '\Brixion\Kolibri\Model\UnitSize',
        'rent_price_terrain' => 'float',
        'rent_specifications' => '\Brixion\Kolibri\Model\RentSpecification[]',
        'short_term' => 'bool',
        'soft_furnishings' => 'float',
        'start_date_rent' => '\DateTime',
        'value_assignment' => 'float',
        'btw_percentage' => 'float',
        'buy_price_per_parking_lot' => 'float',
        'commission_contact_gross' => 'float',
        'commission_contact_note' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'commission_contact_percent' => 'float',
        'commission_contact_type' => '\Brixion\Kolibri\Model\CommissionType',
        'commission_customer_gross' => 'float',
        'commission_customer_note' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'commission_customer_percent' => 'float',
        'commission_owner_gross' => 'float',
        'commission_owner_note' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'commission_owner_percent' => 'float',
        'commission_paid_by' => '\Brixion\Kolibri\Model\CommissionPaidBy',
        'commission_type' => '\Brixion\Kolibri\Model\CommissionType',
        'customer_budget' => 'float',
        'excluding_capitalized_interest' => 'bool',
        'furnishing' => '\Brixion\Kolibri\Model\Furnishing',
        'has_retailers_contribution' => 'bool',
        'indication_electra' => 'float',
        'indication_gas' => 'float',
        'indication_heating_costs' => 'float',
        'indication_incentives' => 'bool',
        'indication_internet' => 'float',
        'indication_television' => 'float',
        'indication_water' => 'float',
        'internal_budget' => 'float',
        'price_code' => '\Brixion\Kolibri\Model\PriceCode',
        'price_history' => '\Brixion\Kolibri\Model\PriceHistory[]',
        'commission_scales' => '\Brixion\Kolibri\Model\CommissionScale[]',
        'rend_price_per_parking_lot' => 'float',
        'rent_condition_parking_place' => '\Brixion\Kolibri\Model\RentCondition',
        'retailers_contribution' => 'float',
        'sale_condition_parking_place' => '\Brixion\Kolibri\Model\SaleCondition',
        'service_costs' => 'float',
        'sewerage_charges' => 'float',
        'valuation_of_immovable_property_act' => '\Brixion\Kolibri\Model\ValuationOfImmovablePropertyAct',
        'vat_condition' => '\Brixion\Kolibri\Model\VatCondition',
        'water_authority_charges' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'advance' => 'decimal',
        'availability_is_temporary' => null,
        'available_from' => 'date-time',
        'available_until' => 'date-time',
        'basic_rent' => 'decimal',
        'commission_contact_months_rent' => 'decimal',
        'commission_customer_months_rent' => 'decimal',
        'commission_owner_months_rent' => 'decimal',
        'contract_free_rental_period_in_months' => 'int32',
        'date_reservation' => 'date-time',
        'deposit' => 'decimal',
        'furniture' => 'decimal',
        'inspection_list' => 'date-time',
        'is_vacant_property_act' => null,
        'maximum_lease_term' => null,
        'minimum_lease_term' => null,
        'points_evaluation_system' => 'int32',
        'realized_per_month' => 'decimal',
        'rent_condition' => null,
        'rented_from' => 'date-time',
        'rented_until' => 'date-time',
        'date_sign_deed' => 'date-time',
        'rent_price' => 'decimal',
        'target_rent_price' => 'decimal',
        'rent_commission_total' => 'decimal',
        'rent_price_is_indexed' => null,
        'rent_price_max' => 'decimal',
        'rent_price_office_space' => 'decimal',
        'rent_price_per_unit' => 'decimal',
        'rent_price_per_unit_size' => null,
        'rent_price_terrain' => 'decimal',
        'rent_specifications' => null,
        'short_term' => null,
        'soft_furnishings' => 'decimal',
        'start_date_rent' => 'date-time',
        'value_assignment' => 'decimal',
        'btw_percentage' => 'decimal',
        'buy_price_per_parking_lot' => 'decimal',
        'commission_contact_gross' => 'decimal',
        'commission_contact_note' => null,
        'commission_contact_percent' => 'decimal',
        'commission_contact_type' => null,
        'commission_customer_gross' => 'decimal',
        'commission_customer_note' => null,
        'commission_customer_percent' => 'decimal',
        'commission_owner_gross' => 'decimal',
        'commission_owner_note' => null,
        'commission_owner_percent' => 'decimal',
        'commission_paid_by' => null,
        'commission_type' => null,
        'customer_budget' => 'decimal',
        'excluding_capitalized_interest' => null,
        'furnishing' => null,
        'has_retailers_contribution' => null,
        'indication_electra' => 'decimal',
        'indication_gas' => 'decimal',
        'indication_heating_costs' => 'decimal',
        'indication_incentives' => null,
        'indication_internet' => 'decimal',
        'indication_television' => 'decimal',
        'indication_water' => 'decimal',
        'internal_budget' => 'decimal',
        'price_code' => null,
        'price_history' => null,
        'commission_scales' => null,
        'rend_price_per_parking_lot' => 'decimal',
        'rent_condition_parking_place' => null,
        'retailers_contribution' => 'decimal',
        'sale_condition_parking_place' => null,
        'service_costs' => 'decimal',
        'sewerage_charges' => 'decimal',
        'valuation_of_immovable_property_act' => null,
        'vat_condition' => null,
        'water_authority_charges' => 'decimal',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'advance' => false,
        'availability_is_temporary' => false,
        'available_from' => false,
        'available_until' => false,
        'basic_rent' => false,
        'commission_contact_months_rent' => false,
        'commission_customer_months_rent' => false,
        'commission_owner_months_rent' => false,
        'contract_free_rental_period_in_months' => false,
        'date_reservation' => false,
        'deposit' => false,
        'furniture' => false,
        'inspection_list' => false,
        'is_vacant_property_act' => false,
        'maximum_lease_term' => false,
        'minimum_lease_term' => false,
        'points_evaluation_system' => false,
        'realized_per_month' => false,
        'rent_condition' => false,
        'rented_from' => false,
        'rented_until' => false,
        'date_sign_deed' => false,
        'rent_price' => false,
        'target_rent_price' => false,
        'rent_commission_total' => false,
        'rent_price_is_indexed' => false,
        'rent_price_max' => false,
        'rent_price_office_space' => false,
        'rent_price_per_unit' => false,
        'rent_price_per_unit_size' => false,
        'rent_price_terrain' => false,
        'rent_specifications' => false,
        'short_term' => false,
        'soft_furnishings' => false,
        'start_date_rent' => false,
        'value_assignment' => false,
        'btw_percentage' => false,
        'buy_price_per_parking_lot' => false,
        'commission_contact_gross' => false,
        'commission_contact_note' => false,
        'commission_contact_percent' => false,
        'commission_contact_type' => false,
        'commission_customer_gross' => false,
        'commission_customer_note' => false,
        'commission_customer_percent' => false,
        'commission_owner_gross' => false,
        'commission_owner_note' => false,
        'commission_owner_percent' => false,
        'commission_paid_by' => false,
        'commission_type' => false,
        'customer_budget' => false,
        'excluding_capitalized_interest' => false,
        'furnishing' => false,
        'has_retailers_contribution' => false,
        'indication_electra' => false,
        'indication_gas' => false,
        'indication_heating_costs' => false,
        'indication_incentives' => false,
        'indication_internet' => false,
        'indication_television' => false,
        'indication_water' => false,
        'internal_budget' => false,
        'price_code' => false,
        'price_history' => false,
        'commission_scales' => false,
        'rend_price_per_parking_lot' => false,
        'rent_condition_parking_place' => false,
        'retailers_contribution' => false,
        'sale_condition_parking_place' => false,
        'service_costs' => false,
        'sewerage_charges' => false,
        'valuation_of_immovable_property_act' => false,
        'vat_condition' => false,
        'water_authority_charges' => false,
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
        'advance' => 'advance',
        'availability_is_temporary' => 'availabilityIsTemporary',
        'available_from' => 'availableFrom',
        'available_until' => 'availableUntil',
        'basic_rent' => 'basicRent',
        'commission_contact_months_rent' => 'commissionContactMonthsRent',
        'commission_customer_months_rent' => 'commissionCustomerMonthsRent',
        'commission_owner_months_rent' => 'commissionOwnerMonthsRent',
        'contract_free_rental_period_in_months' => 'contractFreeRentalPeriodInMonths',
        'date_reservation' => 'dateReservation',
        'deposit' => 'deposit',
        'furniture' => 'furniture',
        'inspection_list' => 'inspectionList',
        'is_vacant_property_act' => 'isVacantPropertyAct',
        'maximum_lease_term' => 'maximumLeaseTerm',
        'minimum_lease_term' => 'minimumLeaseTerm',
        'points_evaluation_system' => 'pointsEvaluationSystem',
        'realized_per_month' => 'realizedPerMonth',
        'rent_condition' => 'rentCondition',
        'rented_from' => 'rentedFrom',
        'rented_until' => 'rentedUntil',
        'date_sign_deed' => 'dateSignDeed',
        'rent_price' => 'rentPrice',
        'target_rent_price' => 'targetRentPrice',
        'rent_commission_total' => 'rentCommissionTotal',
        'rent_price_is_indexed' => 'rentPriceIsIndexed',
        'rent_price_max' => 'rentPriceMax',
        'rent_price_office_space' => 'rentPriceOfficeSpace',
        'rent_price_per_unit' => 'rentPricePerUnit',
        'rent_price_per_unit_size' => 'rentPricePerUnitSize',
        'rent_price_terrain' => 'rentPriceTerrain',
        'rent_specifications' => 'rentSpecifications',
        'short_term' => 'shortTerm',
        'soft_furnishings' => 'softFurnishings',
        'start_date_rent' => 'startDateRent',
        'value_assignment' => 'valueAssignment',
        'btw_percentage' => 'btwPercentage',
        'buy_price_per_parking_lot' => 'buyPricePerParkingLot',
        'commission_contact_gross' => 'commissionContactGross',
        'commission_contact_note' => 'commissionContactNote',
        'commission_contact_percent' => 'commissionContactPercent',
        'commission_contact_type' => 'commissionContactType',
        'commission_customer_gross' => 'commissionCustomerGross',
        'commission_customer_note' => 'commissionCustomerNote',
        'commission_customer_percent' => 'commissionCustomerPercent',
        'commission_owner_gross' => 'commissionOwnerGross',
        'commission_owner_note' => 'commissionOwnerNote',
        'commission_owner_percent' => 'commissionOwnerPercent',
        'commission_paid_by' => 'commissionPaidBy',
        'commission_type' => 'commissionType',
        'customer_budget' => 'customerBudget',
        'excluding_capitalized_interest' => 'excludingCapitalizedInterest',
        'furnishing' => 'furnishing',
        'has_retailers_contribution' => 'hasRetailersContribution',
        'indication_electra' => 'indicationElectra',
        'indication_gas' => 'indicationGas',
        'indication_heating_costs' => 'indicationHeatingCosts',
        'indication_incentives' => 'indicationIncentives',
        'indication_internet' => 'indicationInternet',
        'indication_television' => 'indicationTelevision',
        'indication_water' => 'indicationWater',
        'internal_budget' => 'internalBudget',
        'price_code' => 'priceCode',
        'price_history' => 'priceHistory',
        'commission_scales' => 'commissionScales',
        'rend_price_per_parking_lot' => 'rendPricePerParkingLot',
        'rent_condition_parking_place' => 'rentConditionParkingPlace',
        'retailers_contribution' => 'retailersContribution',
        'sale_condition_parking_place' => 'saleConditionParkingPlace',
        'service_costs' => 'serviceCosts',
        'sewerage_charges' => 'sewerageCharges',
        'valuation_of_immovable_property_act' => 'valuationOfImmovablePropertyAct',
        'vat_condition' => 'vatCondition',
        'water_authority_charges' => 'waterAuthorityCharges',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advance' => 'setAdvance',
        'availability_is_temporary' => 'setAvailabilityIsTemporary',
        'available_from' => 'setAvailableFrom',
        'available_until' => 'setAvailableUntil',
        'basic_rent' => 'setBasicRent',
        'commission_contact_months_rent' => 'setCommissionContactMonthsRent',
        'commission_customer_months_rent' => 'setCommissionCustomerMonthsRent',
        'commission_owner_months_rent' => 'setCommissionOwnerMonthsRent',
        'contract_free_rental_period_in_months' => 'setContractFreeRentalPeriodInMonths',
        'date_reservation' => 'setDateReservation',
        'deposit' => 'setDeposit',
        'furniture' => 'setFurniture',
        'inspection_list' => 'setInspectionList',
        'is_vacant_property_act' => 'setIsVacantPropertyAct',
        'maximum_lease_term' => 'setMaximumLeaseTerm',
        'minimum_lease_term' => 'setMinimumLeaseTerm',
        'points_evaluation_system' => 'setPointsEvaluationSystem',
        'realized_per_month' => 'setRealizedPerMonth',
        'rent_condition' => 'setRentCondition',
        'rented_from' => 'setRentedFrom',
        'rented_until' => 'setRentedUntil',
        'date_sign_deed' => 'setDateSignDeed',
        'rent_price' => 'setRentPrice',
        'target_rent_price' => 'setTargetRentPrice',
        'rent_commission_total' => 'setRentCommissionTotal',
        'rent_price_is_indexed' => 'setRentPriceIsIndexed',
        'rent_price_max' => 'setRentPriceMax',
        'rent_price_office_space' => 'setRentPriceOfficeSpace',
        'rent_price_per_unit' => 'setRentPricePerUnit',
        'rent_price_per_unit_size' => 'setRentPricePerUnitSize',
        'rent_price_terrain' => 'setRentPriceTerrain',
        'rent_specifications' => 'setRentSpecifications',
        'short_term' => 'setShortTerm',
        'soft_furnishings' => 'setSoftFurnishings',
        'start_date_rent' => 'setStartDateRent',
        'value_assignment' => 'setValueAssignment',
        'btw_percentage' => 'setBtwPercentage',
        'buy_price_per_parking_lot' => 'setBuyPricePerParkingLot',
        'commission_contact_gross' => 'setCommissionContactGross',
        'commission_contact_note' => 'setCommissionContactNote',
        'commission_contact_percent' => 'setCommissionContactPercent',
        'commission_contact_type' => 'setCommissionContactType',
        'commission_customer_gross' => 'setCommissionCustomerGross',
        'commission_customer_note' => 'setCommissionCustomerNote',
        'commission_customer_percent' => 'setCommissionCustomerPercent',
        'commission_owner_gross' => 'setCommissionOwnerGross',
        'commission_owner_note' => 'setCommissionOwnerNote',
        'commission_owner_percent' => 'setCommissionOwnerPercent',
        'commission_paid_by' => 'setCommissionPaidBy',
        'commission_type' => 'setCommissionType',
        'customer_budget' => 'setCustomerBudget',
        'excluding_capitalized_interest' => 'setExcludingCapitalizedInterest',
        'furnishing' => 'setFurnishing',
        'has_retailers_contribution' => 'setHasRetailersContribution',
        'indication_electra' => 'setIndicationElectra',
        'indication_gas' => 'setIndicationGas',
        'indication_heating_costs' => 'setIndicationHeatingCosts',
        'indication_incentives' => 'setIndicationIncentives',
        'indication_internet' => 'setIndicationInternet',
        'indication_television' => 'setIndicationTelevision',
        'indication_water' => 'setIndicationWater',
        'internal_budget' => 'setInternalBudget',
        'price_code' => 'setPriceCode',
        'price_history' => 'setPriceHistory',
        'commission_scales' => 'setCommissionScales',
        'rend_price_per_parking_lot' => 'setRendPricePerParkingLot',
        'rent_condition_parking_place' => 'setRentConditionParkingPlace',
        'retailers_contribution' => 'setRetailersContribution',
        'sale_condition_parking_place' => 'setSaleConditionParkingPlace',
        'service_costs' => 'setServiceCosts',
        'sewerage_charges' => 'setSewerageCharges',
        'valuation_of_immovable_property_act' => 'setValuationOfImmovablePropertyAct',
        'vat_condition' => 'setVatCondition',
        'water_authority_charges' => 'setWaterAuthorityCharges',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advance' => 'getAdvance',
        'availability_is_temporary' => 'getAvailabilityIsTemporary',
        'available_from' => 'getAvailableFrom',
        'available_until' => 'getAvailableUntil',
        'basic_rent' => 'getBasicRent',
        'commission_contact_months_rent' => 'getCommissionContactMonthsRent',
        'commission_customer_months_rent' => 'getCommissionCustomerMonthsRent',
        'commission_owner_months_rent' => 'getCommissionOwnerMonthsRent',
        'contract_free_rental_period_in_months' => 'getContractFreeRentalPeriodInMonths',
        'date_reservation' => 'getDateReservation',
        'deposit' => 'getDeposit',
        'furniture' => 'getFurniture',
        'inspection_list' => 'getInspectionList',
        'is_vacant_property_act' => 'getIsVacantPropertyAct',
        'maximum_lease_term' => 'getMaximumLeaseTerm',
        'minimum_lease_term' => 'getMinimumLeaseTerm',
        'points_evaluation_system' => 'getPointsEvaluationSystem',
        'realized_per_month' => 'getRealizedPerMonth',
        'rent_condition' => 'getRentCondition',
        'rented_from' => 'getRentedFrom',
        'rented_until' => 'getRentedUntil',
        'date_sign_deed' => 'getDateSignDeed',
        'rent_price' => 'getRentPrice',
        'target_rent_price' => 'getTargetRentPrice',
        'rent_commission_total' => 'getRentCommissionTotal',
        'rent_price_is_indexed' => 'getRentPriceIsIndexed',
        'rent_price_max' => 'getRentPriceMax',
        'rent_price_office_space' => 'getRentPriceOfficeSpace',
        'rent_price_per_unit' => 'getRentPricePerUnit',
        'rent_price_per_unit_size' => 'getRentPricePerUnitSize',
        'rent_price_terrain' => 'getRentPriceTerrain',
        'rent_specifications' => 'getRentSpecifications',
        'short_term' => 'getShortTerm',
        'soft_furnishings' => 'getSoftFurnishings',
        'start_date_rent' => 'getStartDateRent',
        'value_assignment' => 'getValueAssignment',
        'btw_percentage' => 'getBtwPercentage',
        'buy_price_per_parking_lot' => 'getBuyPricePerParkingLot',
        'commission_contact_gross' => 'getCommissionContactGross',
        'commission_contact_note' => 'getCommissionContactNote',
        'commission_contact_percent' => 'getCommissionContactPercent',
        'commission_contact_type' => 'getCommissionContactType',
        'commission_customer_gross' => 'getCommissionCustomerGross',
        'commission_customer_note' => 'getCommissionCustomerNote',
        'commission_customer_percent' => 'getCommissionCustomerPercent',
        'commission_owner_gross' => 'getCommissionOwnerGross',
        'commission_owner_note' => 'getCommissionOwnerNote',
        'commission_owner_percent' => 'getCommissionOwnerPercent',
        'commission_paid_by' => 'getCommissionPaidBy',
        'commission_type' => 'getCommissionType',
        'customer_budget' => 'getCustomerBudget',
        'excluding_capitalized_interest' => 'getExcludingCapitalizedInterest',
        'furnishing' => 'getFurnishing',
        'has_retailers_contribution' => 'getHasRetailersContribution',
        'indication_electra' => 'getIndicationElectra',
        'indication_gas' => 'getIndicationGas',
        'indication_heating_costs' => 'getIndicationHeatingCosts',
        'indication_incentives' => 'getIndicationIncentives',
        'indication_internet' => 'getIndicationInternet',
        'indication_television' => 'getIndicationTelevision',
        'indication_water' => 'getIndicationWater',
        'internal_budget' => 'getInternalBudget',
        'price_code' => 'getPriceCode',
        'price_history' => 'getPriceHistory',
        'commission_scales' => 'getCommissionScales',
        'rend_price_per_parking_lot' => 'getRendPricePerParkingLot',
        'rent_condition_parking_place' => 'getRentConditionParkingPlace',
        'retailers_contribution' => 'getRetailersContribution',
        'sale_condition_parking_place' => 'getSaleConditionParkingPlace',
        'service_costs' => 'getServiceCosts',
        'sewerage_charges' => 'getSewerageCharges',
        'valuation_of_immovable_property_act' => 'getValuationOfImmovablePropertyAct',
        'vat_condition' => 'getVatCondition',
        'water_authority_charges' => 'getWaterAuthorityCharges',
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
        $this->setIfExists('advance', $data ?? [], null);
        $this->setIfExists('availability_is_temporary', $data ?? [], null);
        $this->setIfExists('available_from', $data ?? [], null);
        $this->setIfExists('available_until', $data ?? [], null);
        $this->setIfExists('basic_rent', $data ?? [], null);
        $this->setIfExists('commission_contact_months_rent', $data ?? [], null);
        $this->setIfExists('commission_customer_months_rent', $data ?? [], null);
        $this->setIfExists('commission_owner_months_rent', $data ?? [], null);
        $this->setIfExists('contract_free_rental_period_in_months', $data ?? [], null);
        $this->setIfExists('date_reservation', $data ?? [], null);
        $this->setIfExists('deposit', $data ?? [], null);
        $this->setIfExists('furniture', $data ?? [], null);
        $this->setIfExists('inspection_list', $data ?? [], null);
        $this->setIfExists('is_vacant_property_act', $data ?? [], null);
        $this->setIfExists('maximum_lease_term', $data ?? [], null);
        $this->setIfExists('minimum_lease_term', $data ?? [], null);
        $this->setIfExists('points_evaluation_system', $data ?? [], null);
        $this->setIfExists('realized_per_month', $data ?? [], null);
        $this->setIfExists('rent_condition', $data ?? [], null);
        $this->setIfExists('rented_from', $data ?? [], null);
        $this->setIfExists('rented_until', $data ?? [], null);
        $this->setIfExists('date_sign_deed', $data ?? [], null);
        $this->setIfExists('rent_price', $data ?? [], null);
        $this->setIfExists('target_rent_price', $data ?? [], null);
        $this->setIfExists('rent_commission_total', $data ?? [], null);
        $this->setIfExists('rent_price_is_indexed', $data ?? [], null);
        $this->setIfExists('rent_price_max', $data ?? [], null);
        $this->setIfExists('rent_price_office_space', $data ?? [], null);
        $this->setIfExists('rent_price_per_unit', $data ?? [], null);
        $this->setIfExists('rent_price_per_unit_size', $data ?? [], null);
        $this->setIfExists('rent_price_terrain', $data ?? [], null);
        $this->setIfExists('rent_specifications', $data ?? [], null);
        $this->setIfExists('short_term', $data ?? [], null);
        $this->setIfExists('soft_furnishings', $data ?? [], null);
        $this->setIfExists('start_date_rent', $data ?? [], null);
        $this->setIfExists('value_assignment', $data ?? [], null);
        $this->setIfExists('btw_percentage', $data ?? [], null);
        $this->setIfExists('buy_price_per_parking_lot', $data ?? [], null);
        $this->setIfExists('commission_contact_gross', $data ?? [], null);
        $this->setIfExists('commission_contact_note', $data ?? [], null);
        $this->setIfExists('commission_contact_percent', $data ?? [], null);
        $this->setIfExists('commission_contact_type', $data ?? [], null);
        $this->setIfExists('commission_customer_gross', $data ?? [], null);
        $this->setIfExists('commission_customer_note', $data ?? [], null);
        $this->setIfExists('commission_customer_percent', $data ?? [], null);
        $this->setIfExists('commission_owner_gross', $data ?? [], null);
        $this->setIfExists('commission_owner_note', $data ?? [], null);
        $this->setIfExists('commission_owner_percent', $data ?? [], null);
        $this->setIfExists('commission_paid_by', $data ?? [], null);
        $this->setIfExists('commission_type', $data ?? [], null);
        $this->setIfExists('customer_budget', $data ?? [], null);
        $this->setIfExists('excluding_capitalized_interest', $data ?? [], null);
        $this->setIfExists('furnishing', $data ?? [], null);
        $this->setIfExists('has_retailers_contribution', $data ?? [], null);
        $this->setIfExists('indication_electra', $data ?? [], null);
        $this->setIfExists('indication_gas', $data ?? [], null);
        $this->setIfExists('indication_heating_costs', $data ?? [], null);
        $this->setIfExists('indication_incentives', $data ?? [], null);
        $this->setIfExists('indication_internet', $data ?? [], null);
        $this->setIfExists('indication_television', $data ?? [], null);
        $this->setIfExists('indication_water', $data ?? [], null);
        $this->setIfExists('internal_budget', $data ?? [], null);
        $this->setIfExists('price_code', $data ?? [], null);
        $this->setIfExists('price_history', $data ?? [], null);
        $this->setIfExists('commission_scales', $data ?? [], null);
        $this->setIfExists('rend_price_per_parking_lot', $data ?? [], null);
        $this->setIfExists('rent_condition_parking_place', $data ?? [], null);
        $this->setIfExists('retailers_contribution', $data ?? [], null);
        $this->setIfExists('sale_condition_parking_place', $data ?? [], null);
        $this->setIfExists('service_costs', $data ?? [], null);
        $this->setIfExists('sewerage_charges', $data ?? [], null);
        $this->setIfExists('valuation_of_immovable_property_act', $data ?? [], null);
        $this->setIfExists('vat_condition', $data ?? [], null);
        $this->setIfExists('water_authority_charges', $data ?? [], null);
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
     * Gets advance
     *
     * @return float|null
     */
    public function getAdvance()
    {
        return $this->container['advance'];
    }

    /**
     * Sets advance
     *
     * @param float|null $advance advance
     *
     * @return self
     */
    public function setAdvance($advance)
    {
        if (is_null($advance)) {
            throw new \InvalidArgumentException('non-nullable advance cannot be null');
        }
        $this->container['advance'] = $advance;

        return $this;
    }

    /**
     * Gets availability_is_temporary
     *
     * @return bool|null
     */
    public function getAvailabilityIsTemporary()
    {
        return $this->container['availability_is_temporary'];
    }

    /**
     * Sets availability_is_temporary
     *
     * @param bool|null $availability_is_temporary availability_is_temporary
     *
     * @return self
     */
    public function setAvailabilityIsTemporary($availability_is_temporary)
    {
        if (is_null($availability_is_temporary)) {
            throw new \InvalidArgumentException('non-nullable availability_is_temporary cannot be null');
        }
        $this->container['availability_is_temporary'] = $availability_is_temporary;

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
     * Gets basic_rent
     *
     * @return float|null
     */
    public function getBasicRent()
    {
        return $this->container['basic_rent'];
    }

    /**
     * Sets basic_rent
     *
     * @param float|null $basic_rent basic_rent
     *
     * @return self
     */
    public function setBasicRent($basic_rent)
    {
        if (is_null($basic_rent)) {
            throw new \InvalidArgumentException('non-nullable basic_rent cannot be null');
        }
        $this->container['basic_rent'] = $basic_rent;

        return $this;
    }

    /**
     * Gets commission_contact_months_rent
     *
     * @return float|null
     */
    public function getCommissionContactMonthsRent()
    {
        return $this->container['commission_contact_months_rent'];
    }

    /**
     * Sets commission_contact_months_rent
     *
     * @param float|null $commission_contact_months_rent commission_contact_months_rent
     *
     * @return self
     */
    public function setCommissionContactMonthsRent($commission_contact_months_rent)
    {
        if (is_null($commission_contact_months_rent)) {
            throw new \InvalidArgumentException('non-nullable commission_contact_months_rent cannot be null');
        }
        $this->container['commission_contact_months_rent'] = $commission_contact_months_rent;

        return $this;
    }

    /**
     * Gets commission_customer_months_rent
     *
     * @return float|null
     */
    public function getCommissionCustomerMonthsRent()
    {
        return $this->container['commission_customer_months_rent'];
    }

    /**
     * Sets commission_customer_months_rent
     *
     * @param float|null $commission_customer_months_rent commission_customer_months_rent
     *
     * @return self
     */
    public function setCommissionCustomerMonthsRent($commission_customer_months_rent)
    {
        if (is_null($commission_customer_months_rent)) {
            throw new \InvalidArgumentException('non-nullable commission_customer_months_rent cannot be null');
        }
        $this->container['commission_customer_months_rent'] = $commission_customer_months_rent;

        return $this;
    }

    /**
     * Gets commission_owner_months_rent
     *
     * @return float|null
     */
    public function getCommissionOwnerMonthsRent()
    {
        return $this->container['commission_owner_months_rent'];
    }

    /**
     * Sets commission_owner_months_rent
     *
     * @param float|null $commission_owner_months_rent commission_owner_months_rent
     *
     * @return self
     */
    public function setCommissionOwnerMonthsRent($commission_owner_months_rent)
    {
        if (is_null($commission_owner_months_rent)) {
            throw new \InvalidArgumentException('non-nullable commission_owner_months_rent cannot be null');
        }
        $this->container['commission_owner_months_rent'] = $commission_owner_months_rent;

        return $this;
    }

    /**
     * Gets contract_free_rental_period_in_months
     *
     * @return int|null
     */
    public function getContractFreeRentalPeriodInMonths()
    {
        return $this->container['contract_free_rental_period_in_months'];
    }

    /**
     * Sets contract_free_rental_period_in_months
     *
     * @param int|null $contract_free_rental_period_in_months contract_free_rental_period_in_months
     *
     * @return self
     */
    public function setContractFreeRentalPeriodInMonths($contract_free_rental_period_in_months)
    {
        if (is_null($contract_free_rental_period_in_months)) {
            throw new \InvalidArgumentException('non-nullable contract_free_rental_period_in_months cannot be null');
        }
        $this->container['contract_free_rental_period_in_months'] = $contract_free_rental_period_in_months;

        return $this;
    }

    /**
     * Gets date_reservation
     *
     * @return \DateTime|null
     */
    public function getDateReservation()
    {
        return $this->container['date_reservation'];
    }

    /**
     * Sets date_reservation
     *
     * @param \DateTime|null $date_reservation date_reservation
     *
     * @return self
     */
    public function setDateReservation($date_reservation)
    {
        if (is_null($date_reservation)) {
            throw new \InvalidArgumentException('non-nullable date_reservation cannot be null');
        }
        $this->container['date_reservation'] = $date_reservation;

        return $this;
    }

    /**
     * Gets deposit
     *
     * @return float|null
     */
    public function getDeposit()
    {
        return $this->container['deposit'];
    }

    /**
     * Sets deposit
     *
     * @param float|null $deposit deposit
     *
     * @return self
     */
    public function setDeposit($deposit)
    {
        if (is_null($deposit)) {
            throw new \InvalidArgumentException('non-nullable deposit cannot be null');
        }
        $this->container['deposit'] = $deposit;

        return $this;
    }

    /**
     * Gets furniture
     *
     * @return float|null
     */
    public function getFurniture()
    {
        return $this->container['furniture'];
    }

    /**
     * Sets furniture
     *
     * @param float|null $furniture furniture
     *
     * @return self
     */
    public function setFurniture($furniture)
    {
        if (is_null($furniture)) {
            throw new \InvalidArgumentException('non-nullable furniture cannot be null');
        }
        $this->container['furniture'] = $furniture;

        return $this;
    }

    /**
     * Gets inspection_list
     *
     * @return \DateTime|null
     */
    public function getInspectionList()
    {
        return $this->container['inspection_list'];
    }

    /**
     * Sets inspection_list
     *
     * @param \DateTime|null $inspection_list inspection_list
     *
     * @return self
     */
    public function setInspectionList($inspection_list)
    {
        if (is_null($inspection_list)) {
            throw new \InvalidArgumentException('non-nullable inspection_list cannot be null');
        }
        $this->container['inspection_list'] = $inspection_list;

        return $this;
    }

    /**
     * Gets is_vacant_property_act
     *
     * @return bool|null
     */
    public function getIsVacantPropertyAct()
    {
        return $this->container['is_vacant_property_act'];
    }

    /**
     * Sets is_vacant_property_act
     *
     * @param bool|null $is_vacant_property_act is_vacant_property_act
     *
     * @return self
     */
    public function setIsVacantPropertyAct($is_vacant_property_act)
    {
        if (is_null($is_vacant_property_act)) {
            throw new \InvalidArgumentException('non-nullable is_vacant_property_act cannot be null');
        }
        $this->container['is_vacant_property_act'] = $is_vacant_property_act;

        return $this;
    }

    /**
     * Gets maximum_lease_term
     *
     * @return \Brixion\Kolibri\Model\LeaseTerm|null
     */
    public function getMaximumLeaseTerm()
    {
        return $this->container['maximum_lease_term'];
    }

    /**
     * Sets maximum_lease_term
     *
     * @param \Brixion\Kolibri\Model\LeaseTerm|null $maximum_lease_term maximum_lease_term
     *
     * @return self
     */
    public function setMaximumLeaseTerm($maximum_lease_term)
    {
        if (is_null($maximum_lease_term)) {
            throw new \InvalidArgumentException('non-nullable maximum_lease_term cannot be null');
        }
        $this->container['maximum_lease_term'] = $maximum_lease_term;

        return $this;
    }

    /**
     * Gets minimum_lease_term
     *
     * @return \Brixion\Kolibri\Model\LeaseTerm|null
     */
    public function getMinimumLeaseTerm()
    {
        return $this->container['minimum_lease_term'];
    }

    /**
     * Sets minimum_lease_term
     *
     * @param \Brixion\Kolibri\Model\LeaseTerm|null $minimum_lease_term minimum_lease_term
     *
     * @return self
     */
    public function setMinimumLeaseTerm($minimum_lease_term)
    {
        if (is_null($minimum_lease_term)) {
            throw new \InvalidArgumentException('non-nullable minimum_lease_term cannot be null');
        }
        $this->container['minimum_lease_term'] = $minimum_lease_term;

        return $this;
    }

    /**
     * Gets points_evaluation_system
     *
     * @return int|null
     */
    public function getPointsEvaluationSystem()
    {
        return $this->container['points_evaluation_system'];
    }

    /**
     * Sets points_evaluation_system
     *
     * @param int|null $points_evaluation_system points_evaluation_system
     *
     * @return self
     */
    public function setPointsEvaluationSystem($points_evaluation_system)
    {
        if (is_null($points_evaluation_system)) {
            throw new \InvalidArgumentException('non-nullable points_evaluation_system cannot be null');
        }
        $this->container['points_evaluation_system'] = $points_evaluation_system;

        return $this;
    }

    /**
     * Gets realized_per_month
     *
     * @return float|null
     */
    public function getRealizedPerMonth()
    {
        return $this->container['realized_per_month'];
    }

    /**
     * Sets realized_per_month
     *
     * @param float|null $realized_per_month realized_per_month
     *
     * @return self
     */
    public function setRealizedPerMonth($realized_per_month)
    {
        if (is_null($realized_per_month)) {
            throw new \InvalidArgumentException('non-nullable realized_per_month cannot be null');
        }
        $this->container['realized_per_month'] = $realized_per_month;

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
     * Gets rented_until
     *
     * @return \DateTime|null
     */
    public function getRentedUntil()
    {
        return $this->container['rented_until'];
    }

    /**
     * Sets rented_until
     *
     * @param \DateTime|null $rented_until rented_until
     *
     * @return self
     */
    public function setRentedUntil($rented_until)
    {
        if (is_null($rented_until)) {
            throw new \InvalidArgumentException('non-nullable rented_until cannot be null');
        }
        $this->container['rented_until'] = $rented_until;

        return $this;
    }

    /**
     * Gets date_sign_deed
     *
     * @return \DateTime|null
     */
    public function getDateSignDeed()
    {
        return $this->container['date_sign_deed'];
    }

    /**
     * Sets date_sign_deed
     *
     * @param \DateTime|null $date_sign_deed date_sign_deed
     *
     * @return self
     */
    public function setDateSignDeed($date_sign_deed)
    {
        if (is_null($date_sign_deed)) {
            throw new \InvalidArgumentException('non-nullable date_sign_deed cannot be null');
        }
        $this->container['date_sign_deed'] = $date_sign_deed;

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
     * Gets target_rent_price
     *
     * @return float|null
     */
    public function getTargetRentPrice()
    {
        return $this->container['target_rent_price'];
    }

    /**
     * Sets target_rent_price
     *
     * @param float|null $target_rent_price target_rent_price
     *
     * @return self
     */
    public function setTargetRentPrice($target_rent_price)
    {
        if (is_null($target_rent_price)) {
            throw new \InvalidArgumentException('non-nullable target_rent_price cannot be null');
        }
        $this->container['target_rent_price'] = $target_rent_price;

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
     * Gets rent_price_is_indexed
     *
     * @return bool|null
     */
    public function getRentPriceIsIndexed()
    {
        return $this->container['rent_price_is_indexed'];
    }

    /**
     * Sets rent_price_is_indexed
     *
     * @param bool|null $rent_price_is_indexed rent_price_is_indexed
     *
     * @return self
     */
    public function setRentPriceIsIndexed($rent_price_is_indexed)
    {
        if (is_null($rent_price_is_indexed)) {
            throw new \InvalidArgumentException('non-nullable rent_price_is_indexed cannot be null');
        }
        $this->container['rent_price_is_indexed'] = $rent_price_is_indexed;

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
     * Gets rent_price_office_space
     *
     * @return float|null
     */
    public function getRentPriceOfficeSpace()
    {
        return $this->container['rent_price_office_space'];
    }

    /**
     * Sets rent_price_office_space
     *
     * @param float|null $rent_price_office_space rent_price_office_space
     *
     * @return self
     */
    public function setRentPriceOfficeSpace($rent_price_office_space)
    {
        if (is_null($rent_price_office_space)) {
            throw new \InvalidArgumentException('non-nullable rent_price_office_space cannot be null');
        }
        $this->container['rent_price_office_space'] = $rent_price_office_space;

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
     * Gets rent_price_per_unit_size
     *
     * @return \Brixion\Kolibri\Model\UnitSize|null
     */
    public function getRentPricePerUnitSize()
    {
        return $this->container['rent_price_per_unit_size'];
    }

    /**
     * Sets rent_price_per_unit_size
     *
     * @param \Brixion\Kolibri\Model\UnitSize|null $rent_price_per_unit_size rent_price_per_unit_size
     *
     * @return self
     */
    public function setRentPricePerUnitSize($rent_price_per_unit_size)
    {
        if (is_null($rent_price_per_unit_size)) {
            throw new \InvalidArgumentException('non-nullable rent_price_per_unit_size cannot be null');
        }
        $this->container['rent_price_per_unit_size'] = $rent_price_per_unit_size;

        return $this;
    }

    /**
     * Gets rent_price_terrain
     *
     * @return float|null
     */
    public function getRentPriceTerrain()
    {
        return $this->container['rent_price_terrain'];
    }

    /**
     * Sets rent_price_terrain
     *
     * @param float|null $rent_price_terrain rent_price_terrain
     *
     * @return self
     */
    public function setRentPriceTerrain($rent_price_terrain)
    {
        if (is_null($rent_price_terrain)) {
            throw new \InvalidArgumentException('non-nullable rent_price_terrain cannot be null');
        }
        $this->container['rent_price_terrain'] = $rent_price_terrain;

        return $this;
    }

    /**
     * Gets rent_specifications
     *
     * @return \Brixion\Kolibri\Model\RentSpecification[]|null
     */
    public function getRentSpecifications()
    {
        return $this->container['rent_specifications'];
    }

    /**
     * Sets rent_specifications
     *
     * @param \Brixion\Kolibri\Model\RentSpecification[]|null $rent_specifications rent_specifications
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
     * Gets short_term
     *
     * @return bool|null
     */
    public function getShortTerm()
    {
        return $this->container['short_term'];
    }

    /**
     * Sets short_term
     *
     * @param bool|null $short_term short_term
     *
     * @return self
     */
    public function setShortTerm($short_term)
    {
        if (is_null($short_term)) {
            throw new \InvalidArgumentException('non-nullable short_term cannot be null');
        }
        $this->container['short_term'] = $short_term;

        return $this;
    }

    /**
     * Gets soft_furnishings
     *
     * @return float|null
     */
    public function getSoftFurnishings()
    {
        return $this->container['soft_furnishings'];
    }

    /**
     * Sets soft_furnishings
     *
     * @param float|null $soft_furnishings soft_furnishings
     *
     * @return self
     */
    public function setSoftFurnishings($soft_furnishings)
    {
        if (is_null($soft_furnishings)) {
            throw new \InvalidArgumentException('non-nullable soft_furnishings cannot be null');
        }
        $this->container['soft_furnishings'] = $soft_furnishings;

        return $this;
    }

    /**
     * Gets start_date_rent
     *
     * @return \DateTime|null
     */
    public function getStartDateRent()
    {
        return $this->container['start_date_rent'];
    }

    /**
     * Sets start_date_rent
     *
     * @param \DateTime|null $start_date_rent start_date_rent
     *
     * @return self
     */
    public function setStartDateRent($start_date_rent)
    {
        if (is_null($start_date_rent)) {
            throw new \InvalidArgumentException('non-nullable start_date_rent cannot be null');
        }
        $this->container['start_date_rent'] = $start_date_rent;

        return $this;
    }

    /**
     * Gets value_assignment
     *
     * @return float|null
     */
    public function getValueAssignment()
    {
        return $this->container['value_assignment'];
    }

    /**
     * Sets value_assignment
     *
     * @param float|null $value_assignment value_assignment
     *
     * @return self
     */
    public function setValueAssignment($value_assignment)
    {
        if (is_null($value_assignment)) {
            throw new \InvalidArgumentException('non-nullable value_assignment cannot be null');
        }
        $this->container['value_assignment'] = $value_assignment;

        return $this;
    }

    /**
     * Gets btw_percentage
     *
     * @return float|null
     */
    public function getBtwPercentage()
    {
        return $this->container['btw_percentage'];
    }

    /**
     * Sets btw_percentage
     *
     * @param float|null $btw_percentage btw_percentage
     *
     * @return self
     */
    public function setBtwPercentage($btw_percentage)
    {
        if (is_null($btw_percentage)) {
            throw new \InvalidArgumentException('non-nullable btw_percentage cannot be null');
        }
        $this->container['btw_percentage'] = $btw_percentage;

        return $this;
    }

    /**
     * Gets buy_price_per_parking_lot
     *
     * @return float|null
     */
    public function getBuyPricePerParkingLot()
    {
        return $this->container['buy_price_per_parking_lot'];
    }

    /**
     * Sets buy_price_per_parking_lot
     *
     * @param float|null $buy_price_per_parking_lot buy_price_per_parking_lot
     *
     * @return self
     */
    public function setBuyPricePerParkingLot($buy_price_per_parking_lot)
    {
        if (is_null($buy_price_per_parking_lot)) {
            throw new \InvalidArgumentException('non-nullable buy_price_per_parking_lot cannot be null');
        }
        $this->container['buy_price_per_parking_lot'] = $buy_price_per_parking_lot;

        return $this;
    }

    /**
     * Gets commission_contact_gross
     *
     * @return float|null
     */
    public function getCommissionContactGross()
    {
        return $this->container['commission_contact_gross'];
    }

    /**
     * Sets commission_contact_gross
     *
     * @param float|null $commission_contact_gross commission_contact_gross
     *
     * @return self
     */
    public function setCommissionContactGross($commission_contact_gross)
    {
        if (is_null($commission_contact_gross)) {
            throw new \InvalidArgumentException('non-nullable commission_contact_gross cannot be null');
        }
        $this->container['commission_contact_gross'] = $commission_contact_gross;

        return $this;
    }

    /**
     * Gets commission_contact_note
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getCommissionContactNote()
    {
        return $this->container['commission_contact_note'];
    }

    /**
     * Sets commission_contact_note
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $commission_contact_note commission_contact_note
     *
     * @return self
     */
    public function setCommissionContactNote($commission_contact_note)
    {
        if (is_null($commission_contact_note)) {
            throw new \InvalidArgumentException('non-nullable commission_contact_note cannot be null');
        }
        $this->container['commission_contact_note'] = $commission_contact_note;

        return $this;
    }

    /**
     * Gets commission_contact_percent
     *
     * @return float|null
     */
    public function getCommissionContactPercent()
    {
        return $this->container['commission_contact_percent'];
    }

    /**
     * Sets commission_contact_percent
     *
     * @param float|null $commission_contact_percent commission_contact_percent
     *
     * @return self
     */
    public function setCommissionContactPercent($commission_contact_percent)
    {
        if (is_null($commission_contact_percent)) {
            throw new \InvalidArgumentException('non-nullable commission_contact_percent cannot be null');
        }
        $this->container['commission_contact_percent'] = $commission_contact_percent;

        return $this;
    }

    /**
     * Gets commission_contact_type
     *
     * @return \Brixion\Kolibri\Model\CommissionType|null
     */
    public function getCommissionContactType()
    {
        return $this->container['commission_contact_type'];
    }

    /**
     * Sets commission_contact_type
     *
     * @param \Brixion\Kolibri\Model\CommissionType|null $commission_contact_type Is the Contact paying a fixed amound, a percentage, or both?
     *
     * @return self
     */
    public function setCommissionContactType($commission_contact_type)
    {
        if (is_null($commission_contact_type)) {
            throw new \InvalidArgumentException('non-nullable commission_contact_type cannot be null');
        }
        $this->container['commission_contact_type'] = $commission_contact_type;

        return $this;
    }

    /**
     * Gets commission_customer_gross
     *
     * @return float|null
     */
    public function getCommissionCustomerGross()
    {
        return $this->container['commission_customer_gross'];
    }

    /**
     * Sets commission_customer_gross
     *
     * @param float|null $commission_customer_gross commission_customer_gross
     *
     * @return self
     */
    public function setCommissionCustomerGross($commission_customer_gross)
    {
        if (is_null($commission_customer_gross)) {
            throw new \InvalidArgumentException('non-nullable commission_customer_gross cannot be null');
        }
        $this->container['commission_customer_gross'] = $commission_customer_gross;

        return $this;
    }

    /**
     * Gets commission_customer_note
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getCommissionCustomerNote()
    {
        return $this->container['commission_customer_note'];
    }

    /**
     * Sets commission_customer_note
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $commission_customer_note commission_customer_note
     *
     * @return self
     */
    public function setCommissionCustomerNote($commission_customer_note)
    {
        if (is_null($commission_customer_note)) {
            throw new \InvalidArgumentException('non-nullable commission_customer_note cannot be null');
        }
        $this->container['commission_customer_note'] = $commission_customer_note;

        return $this;
    }

    /**
     * Gets commission_customer_percent
     *
     * @return float|null
     */
    public function getCommissionCustomerPercent()
    {
        return $this->container['commission_customer_percent'];
    }

    /**
     * Sets commission_customer_percent
     *
     * @param float|null $commission_customer_percent commission_customer_percent
     *
     * @return self
     */
    public function setCommissionCustomerPercent($commission_customer_percent)
    {
        if (is_null($commission_customer_percent)) {
            throw new \InvalidArgumentException('non-nullable commission_customer_percent cannot be null');
        }
        $this->container['commission_customer_percent'] = $commission_customer_percent;

        return $this;
    }

    /**
     * Gets commission_owner_gross
     *
     * @return float|null
     */
    public function getCommissionOwnerGross()
    {
        return $this->container['commission_owner_gross'];
    }

    /**
     * Sets commission_owner_gross
     *
     * @param float|null $commission_owner_gross commission_owner_gross
     *
     * @return self
     */
    public function setCommissionOwnerGross($commission_owner_gross)
    {
        if (is_null($commission_owner_gross)) {
            throw new \InvalidArgumentException('non-nullable commission_owner_gross cannot be null');
        }
        $this->container['commission_owner_gross'] = $commission_owner_gross;

        return $this;
    }

    /**
     * Gets commission_owner_note
     *
     * @return \Brixion\Kolibri\Model\TranslatedText[]|null
     */
    public function getCommissionOwnerNote()
    {
        return $this->container['commission_owner_note'];
    }

    /**
     * Sets commission_owner_note
     *
     * @param \Brixion\Kolibri\Model\TranslatedText[]|null $commission_owner_note commission_owner_note
     *
     * @return self
     */
    public function setCommissionOwnerNote($commission_owner_note)
    {
        if (is_null($commission_owner_note)) {
            throw new \InvalidArgumentException('non-nullable commission_owner_note cannot be null');
        }
        $this->container['commission_owner_note'] = $commission_owner_note;

        return $this;
    }

    /**
     * Gets commission_owner_percent
     *
     * @return float|null
     */
    public function getCommissionOwnerPercent()
    {
        return $this->container['commission_owner_percent'];
    }

    /**
     * Sets commission_owner_percent
     *
     * @param float|null $commission_owner_percent commission_owner_percent
     *
     * @return self
     */
    public function setCommissionOwnerPercent($commission_owner_percent)
    {
        if (is_null($commission_owner_percent)) {
            throw new \InvalidArgumentException('non-nullable commission_owner_percent cannot be null');
        }
        $this->container['commission_owner_percent'] = $commission_owner_percent;

        return $this;
    }

    /**
     * Gets commission_paid_by
     *
     * @return \Brixion\Kolibri\Model\CommissionPaidBy|null
     */
    public function getCommissionPaidBy()
    {
        return $this->container['commission_paid_by'];
    }

    /**
     * Sets commission_paid_by
     *
     * @param \Brixion\Kolibri\Model\CommissionPaidBy|null $commission_paid_by Who is paying the commission? Owner, Customer, both or nobody?
     *
     * @return self
     */
    public function setCommissionPaidBy($commission_paid_by)
    {
        if (is_null($commission_paid_by)) {
            throw new \InvalidArgumentException('non-nullable commission_paid_by cannot be null');
        }
        $this->container['commission_paid_by'] = $commission_paid_by;

        return $this;
    }

    /**
     * Gets commission_type
     *
     * @return \Brixion\Kolibri\Model\CommissionType|null
     */
    public function getCommissionType()
    {
        return $this->container['commission_type'];
    }

    /**
     * Sets commission_type
     *
     * @param \Brixion\Kolibri\Model\CommissionType|null $commission_type What kind of commission? A fixed amound, a percentage, or both?
     *
     * @return self
     */
    public function setCommissionType($commission_type)
    {
        if (is_null($commission_type)) {
            throw new \InvalidArgumentException('non-nullable commission_type cannot be null');
        }
        $this->container['commission_type'] = $commission_type;

        return $this;
    }

    /**
     * Gets customer_budget
     *
     * @return float|null
     */
    public function getCustomerBudget()
    {
        return $this->container['customer_budget'];
    }

    /**
     * Sets customer_budget
     *
     * @param float|null $customer_budget customer_budget
     *
     * @return self
     */
    public function setCustomerBudget($customer_budget)
    {
        if (is_null($customer_budget)) {
            throw new \InvalidArgumentException('non-nullable customer_budget cannot be null');
        }
        $this->container['customer_budget'] = $customer_budget;

        return $this;
    }

    /**
     * Gets excluding_capitalized_interest
     *
     * @return bool|null
     */
    public function getExcludingCapitalizedInterest()
    {
        return $this->container['excluding_capitalized_interest'];
    }

    /**
     * Sets excluding_capitalized_interest
     *
     * @param bool|null $excluding_capitalized_interest excluding_capitalized_interest
     *
     * @return self
     */
    public function setExcludingCapitalizedInterest($excluding_capitalized_interest)
    {
        if (is_null($excluding_capitalized_interest)) {
            throw new \InvalidArgumentException('non-nullable excluding_capitalized_interest cannot be null');
        }
        $this->container['excluding_capitalized_interest'] = $excluding_capitalized_interest;

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
     * Gets has_retailers_contribution
     *
     * @return bool|null
     */
    public function getHasRetailersContribution()
    {
        return $this->container['has_retailers_contribution'];
    }

    /**
     * Sets has_retailers_contribution
     *
     * @param bool|null $has_retailers_contribution has_retailers_contribution
     *
     * @return self
     */
    public function setHasRetailersContribution($has_retailers_contribution)
    {
        if (is_null($has_retailers_contribution)) {
            throw new \InvalidArgumentException('non-nullable has_retailers_contribution cannot be null');
        }
        $this->container['has_retailers_contribution'] = $has_retailers_contribution;

        return $this;
    }

    /**
     * Gets indication_electra
     *
     * @return float|null
     */
    public function getIndicationElectra()
    {
        return $this->container['indication_electra'];
    }

    /**
     * Sets indication_electra
     *
     * @param float|null $indication_electra indication_electra
     *
     * @return self
     */
    public function setIndicationElectra($indication_electra)
    {
        if (is_null($indication_electra)) {
            throw new \InvalidArgumentException('non-nullable indication_electra cannot be null');
        }
        $this->container['indication_electra'] = $indication_electra;

        return $this;
    }

    /**
     * Gets indication_gas
     *
     * @return float|null
     */
    public function getIndicationGas()
    {
        return $this->container['indication_gas'];
    }

    /**
     * Sets indication_gas
     *
     * @param float|null $indication_gas indication_gas
     *
     * @return self
     */
    public function setIndicationGas($indication_gas)
    {
        if (is_null($indication_gas)) {
            throw new \InvalidArgumentException('non-nullable indication_gas cannot be null');
        }
        $this->container['indication_gas'] = $indication_gas;

        return $this;
    }

    /**
     * Gets indication_heating_costs
     *
     * @return float|null
     */
    public function getIndicationHeatingCosts()
    {
        return $this->container['indication_heating_costs'];
    }

    /**
     * Sets indication_heating_costs
     *
     * @param float|null $indication_heating_costs indication_heating_costs
     *
     * @return self
     */
    public function setIndicationHeatingCosts($indication_heating_costs)
    {
        if (is_null($indication_heating_costs)) {
            throw new \InvalidArgumentException('non-nullable indication_heating_costs cannot be null');
        }
        $this->container['indication_heating_costs'] = $indication_heating_costs;

        return $this;
    }

    /**
     * Gets indication_incentives
     *
     * @return bool|null
     */
    public function getIndicationIncentives()
    {
        return $this->container['indication_incentives'];
    }

    /**
     * Sets indication_incentives
     *
     * @param bool|null $indication_incentives indication_incentives
     *
     * @return self
     */
    public function setIndicationIncentives($indication_incentives)
    {
        if (is_null($indication_incentives)) {
            throw new \InvalidArgumentException('non-nullable indication_incentives cannot be null');
        }
        $this->container['indication_incentives'] = $indication_incentives;

        return $this;
    }

    /**
     * Gets indication_internet
     *
     * @return float|null
     */
    public function getIndicationInternet()
    {
        return $this->container['indication_internet'];
    }

    /**
     * Sets indication_internet
     *
     * @param float|null $indication_internet indication_internet
     *
     * @return self
     */
    public function setIndicationInternet($indication_internet)
    {
        if (is_null($indication_internet)) {
            throw new \InvalidArgumentException('non-nullable indication_internet cannot be null');
        }
        $this->container['indication_internet'] = $indication_internet;

        return $this;
    }

    /**
     * Gets indication_television
     *
     * @return float|null
     */
    public function getIndicationTelevision()
    {
        return $this->container['indication_television'];
    }

    /**
     * Sets indication_television
     *
     * @param float|null $indication_television indication_television
     *
     * @return self
     */
    public function setIndicationTelevision($indication_television)
    {
        if (is_null($indication_television)) {
            throw new \InvalidArgumentException('non-nullable indication_television cannot be null');
        }
        $this->container['indication_television'] = $indication_television;

        return $this;
    }

    /**
     * Gets indication_water
     *
     * @return float|null
     */
    public function getIndicationWater()
    {
        return $this->container['indication_water'];
    }

    /**
     * Sets indication_water
     *
     * @param float|null $indication_water indication_water
     *
     * @return self
     */
    public function setIndicationWater($indication_water)
    {
        if (is_null($indication_water)) {
            throw new \InvalidArgumentException('non-nullable indication_water cannot be null');
        }
        $this->container['indication_water'] = $indication_water;

        return $this;
    }

    /**
     * Gets internal_budget
     *
     * @return float|null
     */
    public function getInternalBudget()
    {
        return $this->container['internal_budget'];
    }

    /**
     * Sets internal_budget
     *
     * @param float|null $internal_budget internal_budget
     *
     * @return self
     */
    public function setInternalBudget($internal_budget)
    {
        if (is_null($internal_budget)) {
            throw new \InvalidArgumentException('non-nullable internal_budget cannot be null');
        }
        $this->container['internal_budget'] = $internal_budget;

        return $this;
    }

    /**
     * Gets price_code
     *
     * @return \Brixion\Kolibri\Model\PriceCode|null
     */
    public function getPriceCode()
    {
        return $this->container['price_code'];
    }

    /**
     * Sets price_code
     *
     * @param \Brixion\Kolibri\Model\PriceCode|null $price_code price_code
     *
     * @return self
     */
    public function setPriceCode($price_code)
    {
        if (is_null($price_code)) {
            throw new \InvalidArgumentException('non-nullable price_code cannot be null');
        }
        $this->container['price_code'] = $price_code;

        return $this;
    }

    /**
     * Gets price_history
     *
     * @return \Brixion\Kolibri\Model\PriceHistory[]|null
     */
    public function getPriceHistory()
    {
        return $this->container['price_history'];
    }

    /**
     * Sets price_history
     *
     * @param \Brixion\Kolibri\Model\PriceHistory[]|null $price_history price_history
     *
     * @return self
     */
    public function setPriceHistory($price_history)
    {
        if (is_null($price_history)) {
            throw new \InvalidArgumentException('non-nullable price_history cannot be null');
        }
        $this->container['price_history'] = $price_history;

        return $this;
    }

    /**
     * Gets commission_scales
     *
     * @return \Brixion\Kolibri\Model\CommissionScale[]|null
     */
    public function getCommissionScales()
    {
        return $this->container['commission_scales'];
    }

    /**
     * Sets commission_scales
     *
     * @param \Brixion\Kolibri\Model\CommissionScale[]|null $commission_scales commission_scales
     *
     * @return self
     */
    public function setCommissionScales($commission_scales)
    {
        if (is_null($commission_scales)) {
            throw new \InvalidArgumentException('non-nullable commission_scales cannot be null');
        }
        $this->container['commission_scales'] = $commission_scales;

        return $this;
    }

    /**
     * Gets rend_price_per_parking_lot
     *
     * @return float|null
     */
    public function getRendPricePerParkingLot()
    {
        return $this->container['rend_price_per_parking_lot'];
    }

    /**
     * Sets rend_price_per_parking_lot
     *
     * @param float|null $rend_price_per_parking_lot rend_price_per_parking_lot
     *
     * @return self
     */
    public function setRendPricePerParkingLot($rend_price_per_parking_lot)
    {
        if (is_null($rend_price_per_parking_lot)) {
            throw new \InvalidArgumentException('non-nullable rend_price_per_parking_lot cannot be null');
        }
        $this->container['rend_price_per_parking_lot'] = $rend_price_per_parking_lot;

        return $this;
    }

    /**
     * Gets rent_condition_parking_place
     *
     * @return \Brixion\Kolibri\Model\RentCondition|null
     */
    public function getRentConditionParkingPlace()
    {
        return $this->container['rent_condition_parking_place'];
    }

    /**
     * Sets rent_condition_parking_place
     *
     * @param \Brixion\Kolibri\Model\RentCondition|null $rent_condition_parking_place rent_condition_parking_place
     *
     * @return self
     */
    public function setRentConditionParkingPlace($rent_condition_parking_place)
    {
        if (is_null($rent_condition_parking_place)) {
            throw new \InvalidArgumentException('non-nullable rent_condition_parking_place cannot be null');
        }
        $this->container['rent_condition_parking_place'] = $rent_condition_parking_place;

        return $this;
    }

    /**
     * Gets retailers_contribution
     *
     * @return float|null
     */
    public function getRetailersContribution()
    {
        return $this->container['retailers_contribution'];
    }

    /**
     * Sets retailers_contribution
     *
     * @param float|null $retailers_contribution retailers_contribution
     *
     * @return self
     */
    public function setRetailersContribution($retailers_contribution)
    {
        if (is_null($retailers_contribution)) {
            throw new \InvalidArgumentException('non-nullable retailers_contribution cannot be null');
        }
        $this->container['retailers_contribution'] = $retailers_contribution;

        return $this;
    }

    /**
     * Gets sale_condition_parking_place
     *
     * @return \Brixion\Kolibri\Model\SaleCondition|null
     */
    public function getSaleConditionParkingPlace()
    {
        return $this->container['sale_condition_parking_place'];
    }

    /**
     * Sets sale_condition_parking_place
     *
     * @param \Brixion\Kolibri\Model\SaleCondition|null $sale_condition_parking_place sale_condition_parking_place
     *
     * @return self
     */
    public function setSaleConditionParkingPlace($sale_condition_parking_place)
    {
        if (is_null($sale_condition_parking_place)) {
            throw new \InvalidArgumentException('non-nullable sale_condition_parking_place cannot be null');
        }
        $this->container['sale_condition_parking_place'] = $sale_condition_parking_place;

        return $this;
    }

    /**
     * Gets service_costs
     *
     * @return float|null
     */
    public function getServiceCosts()
    {
        return $this->container['service_costs'];
    }

    /**
     * Sets service_costs
     *
     * @param float|null $service_costs - Huuraanbieding -&gt; Servicekosten - Koopaanbieding -&gt; Bijdrage VVE (Vereniging Van Eigenaren/Owners Association)
     *
     * @return self
     */
    public function setServiceCosts($service_costs)
    {
        if (is_null($service_costs)) {
            throw new \InvalidArgumentException('non-nullable service_costs cannot be null');
        }
        $this->container['service_costs'] = $service_costs;

        return $this;
    }

    /**
     * Gets sewerage_charges
     *
     * @return float|null
     */
    public function getSewerageCharges()
    {
        return $this->container['sewerage_charges'];
    }

    /**
     * Sets sewerage_charges
     *
     * @param float|null $sewerage_charges Sewerage charges per year. In Dutch: Rioolrechten
     *
     * @return self
     */
    public function setSewerageCharges($sewerage_charges)
    {
        if (is_null($sewerage_charges)) {
            throw new \InvalidArgumentException('non-nullable sewerage_charges cannot be null');
        }
        $this->container['sewerage_charges'] = $sewerage_charges;

        return $this;
    }

    /**
     * Gets valuation_of_immovable_property_act
     *
     * @return \Brixion\Kolibri\Model\ValuationOfImmovablePropertyAct|null
     */
    public function getValuationOfImmovablePropertyAct()
    {
        return $this->container['valuation_of_immovable_property_act'];
    }

    /**
     * Sets valuation_of_immovable_property_act
     *
     * @param \Brixion\Kolibri\Model\ValuationOfImmovablePropertyAct|null $valuation_of_immovable_property_act In Dutch: WOZ.
     *
     * @return self
     */
    public function setValuationOfImmovablePropertyAct($valuation_of_immovable_property_act)
    {
        if (is_null($valuation_of_immovable_property_act)) {
            throw new \InvalidArgumentException('non-nullable valuation_of_immovable_property_act cannot be null');
        }
        $this->container['valuation_of_immovable_property_act'] = $valuation_of_immovable_property_act;

        return $this;
    }

    /**
     * Gets vat_condition
     *
     * @return \Brixion\Kolibri\Model\VatCondition|null
     */
    public function getVatCondition()
    {
        return $this->container['vat_condition'];
    }

    /**
     * Sets vat_condition
     *
     * @param \Brixion\Kolibri\Model\VatCondition|null $vat_condition vat_condition
     *
     * @return self
     */
    public function setVatCondition($vat_condition)
    {
        if (is_null($vat_condition)) {
            throw new \InvalidArgumentException('non-nullable vat_condition cannot be null');
        }
        $this->container['vat_condition'] = $vat_condition;

        return $this;
    }

    /**
     * Gets water_authority_charges
     *
     * @return float|null
     */
    public function getWaterAuthorityCharges()
    {
        return $this->container['water_authority_charges'];
    }

    /**
     * Sets water_authority_charges
     *
     * @param float|null $water_authority_charges Water authority charges per year. In Dutch: Waterschapslasten
     *
     * @return self
     */
    public function setWaterAuthorityCharges($water_authority_charges)
    {
        if (is_null($water_authority_charges)) {
            throw new \InvalidArgumentException('non-nullable water_authority_charges cannot be null');
        }
        $this->container['water_authority_charges'] = $water_authority_charges;

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
