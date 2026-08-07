<?php

declare(strict_types=1);

/**
 * HorecaSectorType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HorecaSectorType.
 *
 *
 */
class HorecaSectorType
{
    /**
     * Possible values of this enum
     */
    public const BEVERAGES = 'Beverages';

    public const FASTFOOD = 'Fastfood';

    public const RESTAURANT = 'Restaurant';

    public const HOTEL = 'Hotel';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BEVERAGES,
            self::FASTFOOD,
            self::RESTAURANT,
            self::HOTEL,
        ];
    }
}
