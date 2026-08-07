<?php

declare(strict_types=1);

/**
 * SoilType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SoilType.
 *
 *
 */
class SoilType
{
    /**
     * Possible values of this enum
     */
    public const CLAY = 'Clay';

    public const LOAM = 'Loam';

    public const PEAT = 'Peat';

    public const SAND = 'Sand';

    public const SABULOUS_CLAY = 'SabulousClay';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLAY,
            self::LOAM,
            self::PEAT,
            self::SAND,
            self::SABULOUS_CLAY,
        ];
    }
}
