<?php

declare(strict_types=1);

/**
 * GroundLeasePeriod - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * GroundLeasePeriod.
 *
 *
 */
class GroundLeasePeriod
{
    /**
     * Possible values of this enum
     */
    public const PERMANENT = 'Permanent';

    public const TEMPORARY = 'Temporary';

    public const ONGOING = 'Ongoing';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERMANENT,
            self::TEMPORARY,
            self::ONGOING,
        ];
    }
}
