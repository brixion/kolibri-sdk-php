<?php

declare(strict_types=1);

/**
 * PoultryHousingType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PoultryHousingType.
 *
 *
 */
class PoultryHousingType
{
    /**
     * Possible values of this enum
     */
    public const CAGE_HOUSING = 'CageHousing';

    public const TRADITIONAL_HOUSING = 'TraditionalHousing';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAGE_HOUSING,
            self::TRADITIONAL_HOUSING,
            self::OTHER,
        ];
    }
}
