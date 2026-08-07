<?php

declare(strict_types=1);

/**
 * ConstructionOption - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ConstructionOption.
 *
 *
 */
class ConstructionOption
{
    /**
     * Possible values of this enum
     */
    public const PRODUCTION_HALL = 'ProductionHall';

    public const OFFICE = 'Office';

    public const HOTEL_RESTAURANT_CAFE = 'HotelRestaurantCafe';

    public const RETAIL_SPACE = 'RetailSpace';

    public const COMMERCIAL_OTHERS = 'CommercialOthers';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRODUCTION_HALL,
            self::OFFICE,
            self::HOTEL_RESTAURANT_CAFE,
            self::RETAIL_SPACE,
            self::COMMERCIAL_OTHERS,
        ];
    }
}
