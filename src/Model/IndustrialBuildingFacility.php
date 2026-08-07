<?php

declare(strict_types=1);

/**
 * IndustrialBuildingFacility - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * IndustrialBuildingFacility.
 *
 *
 */
class IndustrialBuildingFacility
{
    /**
     * Possible values of this enum
     */
    public const SKYLIGHTS = 'Skylights';

    public const LOADING_DOCKS = 'LoadingDocks';

    public const OVERHEAD_DOORS = 'OverheadDoors';

    public const POWER_FLOW = 'PowerFlow';

    public const CONCRETE_FLOOR = 'ConcreteFloor';

    public const SPRINKLER = 'Sprinkler';

    public const HEATER = 'Heater';

    public const TOILET = 'Toilet';

    public const PANTRY = 'Pantry';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SKYLIGHTS,
            self::LOADING_DOCKS,
            self::OVERHEAD_DOORS,
            self::POWER_FLOW,
            self::CONCRETE_FLOOR,
            self::SPRINKLER,
            self::HEATER,
            self::TOILET,
            self::PANTRY,
        ];
    }
}
