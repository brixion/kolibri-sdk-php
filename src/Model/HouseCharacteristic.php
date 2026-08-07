<?php

declare(strict_types=1);

/**
 * HouseCharacteristic - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HouseCharacteristic.
 *
 *
 */
class HouseCharacteristic
{
    /**
     * Possible values of this enum
     */
    public const DIKE_HOUSE = 'DikeHouse';

    public const SPLIT_LEVEL_HOUSE = 'SplitLevelHouse';

    public const DRIVE_IN_HOUSE = 'DriveInHouse';

    public const SEMI_BUNGALOW = 'SemiBungalow';

    public const PATIO_HOUSE = 'PatioHouse';

    public const PILE_HOUSE = 'PileHouse';

    public const COURTYARD_HOUSE = 'CourtyardHouse';

    public const BUSINESS_SERVICE_HOUSE = 'BusinessServiceHouse';

    public const WATER_HOUSE = 'WaterHouse';

    public const WIND_WATER_MILL = 'WindWaterMill';

    public const QUADRANT_HOUSE = 'QuadrantHouse';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DIKE_HOUSE,
            self::SPLIT_LEVEL_HOUSE,
            self::DRIVE_IN_HOUSE,
            self::SEMI_BUNGALOW,
            self::PATIO_HOUSE,
            self::PILE_HOUSE,
            self::COURTYARD_HOUSE,
            self::BUSINESS_SERVICE_HOUSE,
            self::WATER_HOUSE,
            self::WIND_WATER_MILL,
            self::QUADRANT_HOUSE,
        ];
    }
}
