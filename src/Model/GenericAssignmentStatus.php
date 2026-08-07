<?php

declare(strict_types=1);

/**
 * GenericAssignmentStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * GenericAssignmentStatus.
 *
 *
 */
class GenericAssignmentStatus
{
    /**
     * Possible values of this enum
     */
    public const ACTIVE = 'Active';

    public const NOT_STARTED = 'NotStarted';

    public const POSTPONED = 'Postponed';

    public const PENDING = 'Pending';

    public const EXECUTED = 'Executed';

    public const CANCELLED = 'Cancelled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACTIVE,
            self::NOT_STARTED,
            self::POSTPONED,
            self::PENDING,
            self::EXECUTED,
            self::CANCELLED,
        ];
    }
}
