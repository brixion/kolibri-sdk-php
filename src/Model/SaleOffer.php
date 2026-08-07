<?php

declare(strict_types=1);

/**
 * SaleOffer - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * SaleOffer.
 * @implements \ArrayAccess<string, mixed>
 */
class SaleOffer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'SaleOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'agreement_date' => '\DateTime',
        'buy_price_office_space' => 'float',
        'buy_price_terrain' => 'float',
        'date_auction' => '\DateTime',
        'date_reservation' => '\DateTime',
        'date_sold' => '\DateTime',
        'date_transfer' => '\DateTime',
        'description' => '\Brixion\Kolibri\Model\TranslatedText[]',
        'deviation' => 'int',
        'end_date_bank_warranty' => '\DateTime',
        'intermediate_form' => '\Brixion\Kolibri\Model\IntermediateForm',
        'is_sale_and_lease_back' => 'bool',
        'price_per_unit' => 'float',
        'price_per_unit_size' => '\Brixion\Kolibri\Model\UnitSize',
        'purchase_price' => 'float',
        'target_purchase_price' => 'float',
        'sale_commission_total' => 'float',
        'sale_condition' => '\Brixion\Kolibri\Model\SaleCondition',
        'sale_price' => 'float',
        'sale_price_max' => 'float',
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
        'agreement_date' => 'date-time',
        'buy_price_office_space' => 'decimal',
        'buy_price_terrain' => 'decimal',
        'date_auction' => 'date-time',
        'date_reservation' => 'date-time',
        'date_sold' => 'date-time',
        'date_transfer' => 'date-time',
        'description' => null,
        'deviation' => 'int32',
        'end_date_bank_warranty' => 'date-time',
        'intermediate_form' => null,
        'is_sale_and_lease_back' => null,
        'price_per_unit' => 'decimal',
        'price_per_unit_size' => null,
        'purchase_price' => 'decimal',
        'target_purchase_price' => 'decimal',
        'sale_commission_total' => 'decimal',
        'sale_condition' => null,
        'sale_price' => 'decimal',
        'sale_price_max' => 'decimal',
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
        'agreement_date' => false,
        'buy_price_office_space' => false,
        'buy_price_terrain' => false,
        'date_auction' => false,
        'date_reservation' => false,
        'date_sold' => false,
        'date_transfer' => false,
        'description' => false,
        'deviation' => false,
        'end_date_bank_warranty' => false,
        'intermediate_form' => false,
        'is_sale_and_lease_back' => false,
        'price_per_unit' => false,
        'price_per_unit_size' => false,
        'purchase_price' => false,
        'target_purchase_price' => false,
        'sale_commission_total' => false,
        'sale_condition' => false,
        'sale_price' => false,
        'sale_price_max' => false,
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
        'agreement_date' => 'agreementDate',
        'buy_price_office_space' => 'buyPriceOfficeSpace',
        'buy_price_terrain' => 'buyPriceTerrain',
        'date_auction' => 'dateAuction',
        'date_reservation' => 'dateReservation',
        'date_sold' => 'dateSold',
        'date_transfer' => 'dateTransfer',
        'description' => 'description',
        'deviation' => 'deviation',
        'end_date_bank_warranty' => 'endDateBankWarranty',
        'intermediate_form' => 'intermediateForm',
        'is_sale_and_lease_back' => 'isSaleAndLeaseBack',
        'price_per_unit' => 'pricePerUnit',
        'price_per_unit_size' => 'pricePerUnitSize',
        'purchase_price' => 'purchasePrice',
        'target_purchase_price' => 'targetPurchasePrice',
        'sale_commission_total' => 'saleCommissionTotal',
        'sale_condition' => 'saleCondition',
        'sale_price' => 'salePrice',
        'sale_price_max' => 'salePriceMax',
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
        'agreement_date' => 'setAgreementDate',
        'buy_price_office_space' => 'setBuyPriceOfficeSpace',
        'buy_price_terrain' => 'setBuyPriceTerrain',
        'date_auction' => 'setDateAuction',
        'date_reservation' => 'setDateReservation',
        'date_sold' => 'setDateSold',
        'date_transfer' => 'setDateTransfer',
        'description' => 'setDescription',
        'deviation' => 'setDeviation',
        'end_date_bank_warranty' => 'setEndDateBankWarranty',
        'intermediate_form' => 'setIntermediateForm',
        'is_sale_and_lease_back' => 'setIsSaleAndLeaseBack',
        'price_per_unit' => 'setPricePerUnit',
        'price_per_unit_size' => 'setPricePerUnitSize',
        'purchase_price' => 'setPurchasePrice',
        'target_purchase_price' => 'setTargetPurchasePrice',
        'sale_commission_total' => 'setSaleCommissionTotal',
        'sale_condition' => 'setSaleCondition',
        'sale_price' => 'setSalePrice',
        'sale_price_max' => 'setSalePriceMax',
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
        'agreement_date' => 'getAgreementDate',
        'buy_price_office_space' => 'getBuyPriceOfficeSpace',
        'buy_price_terrain' => 'getBuyPriceTerrain',
        'date_auction' => 'getDateAuction',
        'date_reservation' => 'getDateReservation',
        'date_sold' => 'getDateSold',
        'date_transfer' => 'getDateTransfer',
        'description' => 'getDescription',
        'deviation' => 'getDeviation',
        'end_date_bank_warranty' => 'getEndDateBankWarranty',
        'intermediate_form' => 'getIntermediateForm',
        'is_sale_and_lease_back' => 'getIsSaleAndLeaseBack',
        'price_per_unit' => 'getPricePerUnit',
        'price_per_unit_size' => 'getPricePerUnitSize',
        'purchase_price' => 'getPurchasePrice',
        'target_purchase_price' => 'getTargetPurchasePrice',
        'sale_commission_total' => 'getSaleCommissionTotal',
        'sale_condition' => 'getSaleCondition',
        'sale_price' => 'getSalePrice',
        'sale_price_max' => 'getSalePriceMax',
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
        $this->setIfExists('agreement_date', $data ?? [], null);
        $this->setIfExists('buy_price_office_space', $data ?? [], null);
        $this->setIfExists('buy_price_terrain', $data ?? [], null);
        $this->setIfExists('date_auction', $data ?? [], null);
        $this->setIfExists('date_reservation', $data ?? [], null);
        $this->setIfExists('date_sold', $data ?? [], null);
        $this->setIfExists('date_transfer', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('deviation', $data ?? [], null);
        $this->setIfExists('end_date_bank_warranty', $data ?? [], null);
        $this->setIfExists('intermediate_form', $data ?? [], null);
        $this->setIfExists('is_sale_and_lease_back', $data ?? [], null);
        $this->setIfExists('price_per_unit', $data ?? [], null);
        $this->setIfExists('price_per_unit_size', $data ?? [], null);
        $this->setIfExists('purchase_price', $data ?? [], null);
        $this->setIfExists('target_purchase_price', $data ?? [], null);
        $this->setIfExists('sale_commission_total', $data ?? [], null);
        $this->setIfExists('sale_condition', $data ?? [], null);
        $this->setIfExists('sale_price', $data ?? [], null);
        $this->setIfExists('sale_price_max', $data ?? [], null);
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
     * Gets agreement_date
     *
     * @return \DateTime|null
     */
    public function getAgreementDate()
    {
        return $this->container['agreement_date'];
    }

    /**
     * Sets agreement_date
     *
     * @param \DateTime|null $agreement_date agreement_date
     *
     * @return self
     */
    public function setAgreementDate($agreement_date)
    {
        if (is_null($agreement_date)) {
            throw new \InvalidArgumentException('non-nullable agreement_date cannot be null');
        }
        $this->container['agreement_date'] = $agreement_date;

        return $this;
    }

    /**
     * Gets buy_price_office_space
     *
     * @return float|null
     */
    public function getBuyPriceOfficeSpace()
    {
        return $this->container['buy_price_office_space'];
    }

    /**
     * Sets buy_price_office_space
     *
     * @param float|null $buy_price_office_space buy_price_office_space
     *
     * @return self
     */
    public function setBuyPriceOfficeSpace($buy_price_office_space)
    {
        if (is_null($buy_price_office_space)) {
            throw new \InvalidArgumentException('non-nullable buy_price_office_space cannot be null');
        }
        $this->container['buy_price_office_space'] = $buy_price_office_space;

        return $this;
    }

    /**
     * Gets buy_price_terrain
     *
     * @return float|null
     */
    public function getBuyPriceTerrain()
    {
        return $this->container['buy_price_terrain'];
    }

    /**
     * Sets buy_price_terrain
     *
     * @param float|null $buy_price_terrain buy_price_terrain
     *
     * @return self
     */
    public function setBuyPriceTerrain($buy_price_terrain)
    {
        if (is_null($buy_price_terrain)) {
            throw new \InvalidArgumentException('non-nullable buy_price_terrain cannot be null');
        }
        $this->container['buy_price_terrain'] = $buy_price_terrain;

        return $this;
    }

    /**
     * Gets date_auction
     *
     * @return \DateTime|null
     */
    public function getDateAuction()
    {
        return $this->container['date_auction'];
    }

    /**
     * Sets date_auction
     *
     * @param \DateTime|null $date_auction date_auction
     *
     * @return self
     */
    public function setDateAuction($date_auction)
    {
        if (is_null($date_auction)) {
            throw new \InvalidArgumentException('non-nullable date_auction cannot be null');
        }
        $this->container['date_auction'] = $date_auction;

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
     * Gets deviation
     *
     * @return int|null
     */
    public function getDeviation()
    {
        return $this->container['deviation'];
    }

    /**
     * Sets deviation
     *
     * @param int|null $deviation deviation
     *
     * @return self
     */
    public function setDeviation($deviation)
    {
        if (is_null($deviation)) {
            throw new \InvalidArgumentException('non-nullable deviation cannot be null');
        }
        $this->container['deviation'] = $deviation;

        return $this;
    }

    /**
     * Gets end_date_bank_warranty
     *
     * @return \DateTime|null
     */
    public function getEndDateBankWarranty()
    {
        return $this->container['end_date_bank_warranty'];
    }

    /**
     * Sets end_date_bank_warranty
     *
     * @param \DateTime|null $end_date_bank_warranty end_date_bank_warranty
     *
     * @return self
     */
    public function setEndDateBankWarranty($end_date_bank_warranty)
    {
        if (is_null($end_date_bank_warranty)) {
            throw new \InvalidArgumentException('non-nullable end_date_bank_warranty cannot be null');
        }
        $this->container['end_date_bank_warranty'] = $end_date_bank_warranty;

        return $this;
    }

    /**
     * Gets intermediate_form
     *
     * @return \Brixion\Kolibri\Model\IntermediateForm|null
     */
    public function getIntermediateForm()
    {
        return $this->container['intermediate_form'];
    }

    /**
     * Sets intermediate_form
     *
     * @param \Brixion\Kolibri\Model\IntermediateForm|null $intermediate_form intermediate_form
     *
     * @return self
     */
    public function setIntermediateForm($intermediate_form)
    {
        if (is_null($intermediate_form)) {
            throw new \InvalidArgumentException('non-nullable intermediate_form cannot be null');
        }
        $this->container['intermediate_form'] = $intermediate_form;

        return $this;
    }

    /**
     * Gets is_sale_and_lease_back
     *
     * @return bool|null
     */
    public function getIsSaleAndLeaseBack()
    {
        return $this->container['is_sale_and_lease_back'];
    }

    /**
     * Sets is_sale_and_lease_back
     *
     * @param bool|null $is_sale_and_lease_back is_sale_and_lease_back
     *
     * @return self
     */
    public function setIsSaleAndLeaseBack($is_sale_and_lease_back)
    {
        if (is_null($is_sale_and_lease_back)) {
            throw new \InvalidArgumentException('non-nullable is_sale_and_lease_back cannot be null');
        }
        $this->container['is_sale_and_lease_back'] = $is_sale_and_lease_back;

        return $this;
    }

    /**
     * Gets price_per_unit
     *
     * @return float|null
     */
    public function getPricePerUnit()
    {
        return $this->container['price_per_unit'];
    }

    /**
     * Sets price_per_unit
     *
     * @param float|null $price_per_unit price_per_unit
     *
     * @return self
     */
    public function setPricePerUnit($price_per_unit)
    {
        if (is_null($price_per_unit)) {
            throw new \InvalidArgumentException('non-nullable price_per_unit cannot be null');
        }
        $this->container['price_per_unit'] = $price_per_unit;

        return $this;
    }

    /**
     * Gets price_per_unit_size
     *
     * @return \Brixion\Kolibri\Model\UnitSize|null
     */
    public function getPricePerUnitSize()
    {
        return $this->container['price_per_unit_size'];
    }

    /**
     * Sets price_per_unit_size
     *
     * @param \Brixion\Kolibri\Model\UnitSize|null $price_per_unit_size price_per_unit_size
     *
     * @return self
     */
    public function setPricePerUnitSize($price_per_unit_size)
    {
        if (is_null($price_per_unit_size)) {
            throw new \InvalidArgumentException('non-nullable price_per_unit_size cannot be null');
        }
        $this->container['price_per_unit_size'] = $price_per_unit_size;

        return $this;
    }

    /**
     * Gets purchase_price
     *
     * @return float|null
     */
    public function getPurchasePrice()
    {
        return $this->container['purchase_price'];
    }

    /**
     * Sets purchase_price
     *
     * @param float|null $purchase_price In Dutch: gerealiseerde prijs.
     *
     * @return self
     */
    public function setPurchasePrice($purchase_price)
    {
        if (is_null($purchase_price)) {
            throw new \InvalidArgumentException('non-nullable purchase_price cannot be null');
        }
        $this->container['purchase_price'] = $purchase_price;

        return $this;
    }

    /**
     * Gets target_purchase_price
     *
     * @return float|null
     */
    public function getTargetPurchasePrice()
    {
        return $this->container['target_purchase_price'];
    }

    /**
     * Sets target_purchase_price
     *
     * @param float|null $target_purchase_price target_purchase_price
     *
     * @return self
     */
    public function setTargetPurchasePrice($target_purchase_price)
    {
        if (is_null($target_purchase_price)) {
            throw new \InvalidArgumentException('non-nullable target_purchase_price cannot be null');
        }
        $this->container['target_purchase_price'] = $target_purchase_price;

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
