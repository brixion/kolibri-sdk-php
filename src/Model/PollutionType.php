<?php

declare(strict_types=1);

/**
 * PollutionType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PollutionType.
 *
 *
 */
class PollutionType
{
    /**
     * Possible values of this enum
     */
    public const REMOVED = 'Removed';

    public const CERTIFIED = 'Certified';

    public const FILLED = 'Filled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REMOVED,
            self::CERTIFIED,
            self::FILLED,
        ];
    }
}
