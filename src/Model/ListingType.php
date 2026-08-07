<?php

declare(strict_types=1);

/**
 * ListingType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ListingType.
 *
 *
 */
class ListingType
{
    /**
     * Possible values of this enum
     */
    public const HOUSE = 'House';

    public const APARTMENT = 'Apartment';

    public const PARKING = 'Parking';

    public const PLOT = 'Plot';

    public const SUMMER_COTTAGE = 'SummerCottage';

    public const OTHER = 'Other';

    public const PRODUCTION_HALL = 'ProductionHall';

    public const OUTDOOR_AREA = 'OutdoorArea';

    public const HOTEL_RESTAURANT_CAFE = 'HotelRestaurantCafe';

    public const OFFICE = 'Office';

    public const LOT = 'Lot';

    public const PRACTICE_SPACE = 'PracticeSpace';

    public const RETAIL_SPACE = 'RetailSpace';

    public const WAREHOUSE = 'Warehouse';

    public const WAREHOUSE_PRODUCTION = 'WarehouseProduction';

    public const SERVICES = 'Services';

    public const GARAGE = 'Garage';

    public const ARABLE_COMPANY = 'ArableCompany';

    public const LOOSE_SOIL = 'LooseSoil';

    public const DAIRY_FARMING_COMPANY = 'DairyFarmingCompany';

    public const POULTRY_COMPANY = 'PoultryCompany';

    public const HORSES_COMPANY = 'HorsesCompany';

    public const PRODUCTION_RIGHTS = 'ProductionRights';

    public const HORTICULTURAL = 'Horticultural';

    public const PIG_HOLDING = 'PigHolding';

    public const VEAL_CALVES_FARMING = 'VealCalvesFarming';

    public const AGRICULTURAL_HOUSE = 'AgriculturalHouse';

    public const CATTLE_FARMING = 'CattleFarming';

    public const BUSINESS_SPACE = 'BusinessSpace';

    public const AMMONIAC = 'Ammoniac';

    public const AVEBE_SHARES = 'AvebeShares';

    public const BEET_QUOTA = 'BeetQuota';

    public const MILK_QUOTA = 'MilkQuota';

    public const POULTRY_RIGHTS = 'PoultryRights';

    public const PAYMENT_ENTITLEMENTS = 'PaymentEntitlements';

    public const PIG_RIGHTS = 'PigRights';

    public const LEISURE = 'Leisure';

    public const INVESTMENT = 'Investment';

    public const SOCIAL_PROPERTY = 'SocialProperty';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOUSE,
            self::APARTMENT,
            self::PARKING,
            self::PLOT,
            self::SUMMER_COTTAGE,
            self::OTHER,
            self::PRODUCTION_HALL,
            self::OUTDOOR_AREA,
            self::HOTEL_RESTAURANT_CAFE,
            self::OFFICE,
            self::LOT,
            self::PRACTICE_SPACE,
            self::RETAIL_SPACE,
            self::WAREHOUSE,
            self::WAREHOUSE_PRODUCTION,
            self::SERVICES,
            self::GARAGE,
            self::ARABLE_COMPANY,
            self::LOOSE_SOIL,
            self::DAIRY_FARMING_COMPANY,
            self::POULTRY_COMPANY,
            self::HORSES_COMPANY,
            self::PRODUCTION_RIGHTS,
            self::HORTICULTURAL,
            self::PIG_HOLDING,
            self::VEAL_CALVES_FARMING,
            self::AGRICULTURAL_HOUSE,
            self::CATTLE_FARMING,
            self::BUSINESS_SPACE,
            self::AMMONIAC,
            self::AVEBE_SHARES,
            self::BEET_QUOTA,
            self::MILK_QUOTA,
            self::POULTRY_RIGHTS,
            self::PAYMENT_ENTITLEMENTS,
            self::PIG_RIGHTS,
            self::LEISURE,
            self::INVESTMENT,
            self::SOCIAL_PROPERTY,
        ];
    }
}
