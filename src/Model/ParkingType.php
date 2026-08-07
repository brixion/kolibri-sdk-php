<?php

declare(strict_types=1);

/**
 * ParkingType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ParkingType.
 *
 *
 */
class ParkingType
{
    /**
     * Possible values of this enum
     */
    public const GARAGE = 'Garage';

    public const INDOOR_GARAGE = 'IndoorGarage';

    public const PARKING_CELLAR = 'ParkingCellar';

    public const PARKING_SPACE = 'ParkingSpace';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GARAGE,
            self::INDOOR_GARAGE,
            self::PARKING_CELLAR,
            self::PARKING_SPACE,
        ];
    }
}
