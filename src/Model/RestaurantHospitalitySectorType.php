<?php

declare(strict_types=1);

/**
 * RestaurantHospitalitySectorType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RestaurantHospitalitySectorType.
 *
 *
 */
class RestaurantHospitalitySectorType
{
    /**
     * Possible values of this enum
     */
    public const CONGRESS_HALL = 'CongressHall';

    public const RESTAURANT_PARTY_CENTER = 'RestaurantPartyCenter';

    public const PANCAKE_HOUSE = 'PancakeHouse';

    public const CHINESE_INDIAN_RESTAURANT = 'ChineseIndianRestaurant';

    public const LUXURY_RESTAURANT = 'LuxuryRestaurant';

    public const CAFE_RESTAURANT = 'CafeRestaurant';

    public const ROADHOUSE = 'Roadhouse';

    public const RESTAURANT = 'Restaurant';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONGRESS_HALL,
            self::RESTAURANT_PARTY_CENTER,
            self::PANCAKE_HOUSE,
            self::CHINESE_INDIAN_RESTAURANT,
            self::LUXURY_RESTAURANT,
            self::CAFE_RESTAURANT,
            self::ROADHOUSE,
            self::RESTAURANT,
        ];
    }
}
