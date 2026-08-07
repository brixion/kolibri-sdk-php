<?php

declare(strict_types=1);

/**
 * Facility - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Facility.
 *
 *
 */
class Facility
{
    /**
     * Possible values of this enum
     */
    public const INSTALLATION_FIXTURES = 'InstallationFixtures';

    public const ELEVATORS = 'Elevators';

    public const OPENABLE_WINDOWS = 'OpenableWindows';

    public const FLEX_SPOTS = 'FlexSpots';

    public const CABLE_DUCT = 'CableDuct';

    public const SYSTEM_CEILING = 'SystemCeiling';

    public const TOILET = 'Toilet';

    public const PANTRY = 'Pantry';

    public const HEATING = 'Heating';

    public const ROOM_LAYOUT = 'RoomLayout';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INSTALLATION_FIXTURES,
            self::ELEVATORS,
            self::OPENABLE_WINDOWS,
            self::FLEX_SPOTS,
            self::CABLE_DUCT,
            self::SYSTEM_CEILING,
            self::TOILET,
            self::PANTRY,
            self::HEATING,
            self::ROOM_LAYOUT,
        ];
    }
}
