<?php

declare(strict_types=1);

/**
 * GarageType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * GarageType.
 *
 *
 */
class GarageType
{
    /**
     * Possible values of this enum
     */
    public const NO_GARAGE = 'NoGarage';

    public const ATTACHED_STONE = 'AttachedStone';

    public const ATTACHED_WOOD = 'AttachedWood';

    public const DETACHED_STONE = 'DetachedStone';

    public const DETACHED_WOOD = 'DetachedWood';

    public const INDOOR = 'Indoor';

    public const GARAGE_BOX = 'GarageBox';

    public const UNDERGROUND_PARKING = 'UndergroundParking';

    public const OPTION_FOR_GARAGE = 'OptionForGarage';

    public const CAR_PORT = 'CarPort';

    public const PARKING_SPACE = 'ParkingSpace';

    public const GARAGE_WITH_CAR_PORT = 'GarageWithCarPort';

    public const GARAGE = 'Garage';

    public const PARKING_FEE = 'ParkingFee';

    public const NO_PARKING = 'NoParking';

    public const FREE_PARKING = 'FreeParking';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_GARAGE,
            self::ATTACHED_STONE,
            self::ATTACHED_WOOD,
            self::DETACHED_STONE,
            self::DETACHED_WOOD,
            self::INDOOR,
            self::GARAGE_BOX,
            self::UNDERGROUND_PARKING,
            self::OPTION_FOR_GARAGE,
            self::CAR_PORT,
            self::PARKING_SPACE,
            self::GARAGE_WITH_CAR_PORT,
            self::GARAGE,
            self::PARKING_FEE,
            self::NO_PARKING,
            self::FREE_PARKING,
        ];
    }
}
