<?php

declare(strict_types=1);

/**
 * Orientation - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Orientation.
 *
 *
 */
class Orientation
{
    /**
     * Possible values of this enum
     */
    public const NORTH = 'North';

    public const NORTH_EAST = 'NorthEast';

    public const EAST = 'East';

    public const SOUTH_EAST = 'SouthEast';

    public const SOUTH = 'South';

    public const SOUTH_WEST = 'SouthWest';

    public const WEST = 'West';

    public const NORTH_WEST = 'NorthWest';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NORTH,
            self::NORTH_EAST,
            self::EAST,
            self::SOUTH_EAST,
            self::SOUTH,
            self::SOUTH_WEST,
            self::WEST,
            self::NORTH_WEST,
        ];
    }
}
