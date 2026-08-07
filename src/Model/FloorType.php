<?php

declare(strict_types=1);

/**
 * FloorType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * FloorType.
 *
 *
 */
class FloorType
{
    /**
     * Possible values of this enum
     */
    public const GROUND_FLOOR = 'GroundFloor';

    public const BASEMENT = 'Basement';

    public const FLOOR = 'Floor';

    public const ATTIC = 'Attic';

    public const TOP_FLOOR = 'TopFloor';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GROUND_FLOOR,
            self::BASEMENT,
            self::FLOOR,
            self::ATTIC,
            self::TOP_FLOOR,
        ];
    }
}
