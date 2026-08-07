<?php

declare(strict_types=1);

/**
 * ExpirationMoment - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ExpirationMoment.
 *
 *
 */
class ExpirationMoment
{
    /**
     * Possible values of this enum
     */
    public const EXPIRED = 'Expired';

    public const THIS_WEEK = 'ThisWeek';

    public const NEXT_WEEK = 'NextWeek';

    public const AFTER_NEXT_WEEK = 'AfterNextWeek';

    public const NO_END_DATE = 'NoEndDate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EXPIRED,
            self::THIS_WEEK,
            self::NEXT_WEEK,
            self::AFTER_NEXT_WEEK,
            self::NO_END_DATE,
        ];
    }
}
