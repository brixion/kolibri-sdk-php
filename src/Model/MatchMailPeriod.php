<?php

declare(strict_types=1);

/**
 * MatchMailPeriod - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MatchMailPeriod.
 *
 *
 */
class MatchMailPeriod
{
    /**
     * Possible values of this enum
     */
    public const NEVER = 'Never';

    public const DAILY = 'Daily';

    public const WEEKLY = 'Weekly';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NEVER,
            self::DAILY,
            self::WEEKLY,
        ];
    }
}
