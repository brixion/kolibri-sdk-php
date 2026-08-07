<?php

declare(strict_types=1);

/**
 * LeisureType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * LeisureType.
 *
 *
 */
class LeisureType
{
    /**
     * Possible values of this enum
     */
    public const CAMPING = 'Camping';

    public const BUNGALOW_PARK = 'BungalowPark';

    public const DAY_RECRIATION = 'DayRecriation';

    public const WELLNESS = 'Wellness';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAMPING,
            self::BUNGALOW_PARK,
            self::DAY_RECRIATION,
            self::WELLNESS,
            self::OTHER,
        ];
    }
}
