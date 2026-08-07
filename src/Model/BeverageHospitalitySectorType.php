<?php

declare(strict_types=1);

/**
 * BeverageHospitalitySectorType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BeverageHospitalitySectorType.
 *
 *
 */
class BeverageHospitalitySectorType
{
    /**
     * Possible values of this enum
     */
    public const CAFE = 'Cafe';

    public const EAT_CAFE = 'EatCafe';

    public const DISCO = 'Disco';

    public const CAFE_HALL_CENTER = 'CafeHallCenter';

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
        ];
    }
}
