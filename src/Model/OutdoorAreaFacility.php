<?php

declare(strict_types=1);

/**
 * OutdoorAreaFacility - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * OutdoorAreaFacility.
 *
 *
 */
class OutdoorAreaFacility
{
    /**
     * Possible values of this enum
     */
    public const CLOSEABLE = 'Closeable';

    public const FENCE = 'Fence';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLOSEABLE,
            self::FENCE,
        ];
    }
}
