<?php

declare(strict_types=1);

/**
 * InvestmentType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * InvestmentType.
 *
 *
 */
class InvestmentType
{
    /**
     * Possible values of this enum
     */
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

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
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
            self::OTHER,
        ];
    }
}
