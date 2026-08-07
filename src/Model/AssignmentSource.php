<?php

declare(strict_types=1);

/**
 * AssignmentSource - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AssignmentSource.
 *
 *
 */
class AssignmentSource
{
    /**
     * Possible values of this enum
     */
    public const FRIEND = 'Friend';

    public const HOUSENET3 = 'Housenet3';

    public const INTERNET = 'Internet';

    public const WALK_IN = 'WalkIn';

    public const COLLEAGUE = 'Colleague';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FRIEND,
            self::HOUSENET3,
            self::INTERNET,
            self::WALK_IN,
            self::COLLEAGUE,
            self::OTHER,
        ];
    }
}
