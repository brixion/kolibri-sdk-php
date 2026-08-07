<?php

declare(strict_types=1);

/**
 * SubTypeBog - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SubTypeBog.
 *
 *
 */
class SubTypeBog
{
    /**
     * Possible values of this enum
     */
    public const CAFE = 'Cafe';

    public const EAT_CAFE = 'EatCafe';

    public const DISCO = 'Disco';

    public const CAFE_HALL_CENTER = 'CafeHallCenter';

    public const SNACKBAR = 'Snackbar';

    public const CAFETERIA_RESTARIA = 'CafeteriaRestaria';

    public const LUNCHROOM_SANDWICH_SHOP = 'LunchroomSandwichShop';

    public const ICE_CREAM_PARLOR = 'IceCreamParlor';

    public const CONGRESS_HALL = 'CongressHall';

    public const RESTAURANT_PARTY_CENTER = 'RestaurantPartyCenter';

    public const PANCAKE_HOUSE = 'PancakeHouse';

    public const CHINESE_INDIAN_RESTAURANT = 'ChineseIndianRestaurant';

    public const LUXURY_RESTAURANT = 'LuxuryRestaurant';

    public const CAFE_RESTAURANT = 'CafeRestaurant';

    public const ROADHOUSE = 'Roadhouse';

    public const RESTAURANT = 'Restaurant';

    public const HOTEL = 'Hotel';

    public const LUXURY_HOTEL = 'LuxuryHotel';

    public const CONGRESS_HOTEL = 'CongressHotel';

    public const HOTEL_GARNI = 'HotelGarni';

    public const CAMPING = 'Camping';

    public const BUNGALOW_PARK = 'BungalowPark';

    public const DAY_RECREATION = 'DayRecreation';

    public const WELLNESS = 'Wellness';

    public const RETAIL = 'Retail';

    public const OFFICE = 'Office';

    public const BUSINESS = 'Business';

    public const HOTEL_RESTAURANT_CAFE = 'HotelRestaurantCafe';

    public const LEISURE = 'Leisure';

    public const SOCIAL_PROPERTY = 'SocialProperty';

    public const RESIDENTIAL = 'Residential';

    public const LOT = 'Lot';

    public const LOOSE_SOIL = 'LooseSoil';

    public const OUTDOOR_AREA = 'OutdoorArea';

    public const AGRICULTURAL = 'Agricultural';

    public const HEALTHCARE = 'Healthcare';

    public const SPORTS = 'Sports';

    public const CULTURAL = 'Cultural';

    public const RELIGIOUS = 'Religious';

    public const EDUCATIONAL = 'Educational';

    public const OFFICE_SPACE = 'OfficeSpace';

    public const TERRAIN = 'Terrain';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAFE,
            self::EAT_CAFE,
            self::DISCO,
            self::CAFE_HALL_CENTER,
            self::SNACKBAR,
            self::CAFETERIA_RESTARIA,
            self::LUNCHROOM_SANDWICH_SHOP,
            self::ICE_CREAM_PARLOR,
            self::CONGRESS_HALL,
            self::RESTAURANT_PARTY_CENTER,
            self::PANCAKE_HOUSE,
            self::CHINESE_INDIAN_RESTAURANT,
            self::LUXURY_RESTAURANT,
            self::CAFE_RESTAURANT,
            self::ROADHOUSE,
            self::RESTAURANT,
            self::HOTEL,
            self::LUXURY_HOTEL,
            self::CONGRESS_HOTEL,
            self::HOTEL_GARNI,
            self::CAMPING,
            self::BUNGALOW_PARK,
            self::DAY_RECREATION,
            self::WELLNESS,
            self::RETAIL,
            self::OFFICE,
            self::BUSINESS,
            self::HOTEL_RESTAURANT_CAFE,
            self::LEISURE,
            self::SOCIAL_PROPERTY,
            self::RESIDENTIAL,
            self::LOT,
            self::LOOSE_SOIL,
            self::OUTDOOR_AREA,
            self::AGRICULTURAL,
            self::HEALTHCARE,
            self::SPORTS,
            self::CULTURAL,
            self::RELIGIOUS,
            self::EDUCATIONAL,
            self::OFFICE_SPACE,
            self::TERRAIN,
            self::OTHER,
        ];
    }
}
