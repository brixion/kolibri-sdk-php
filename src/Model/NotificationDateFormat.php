<?php

declare(strict_types=1);

/**
 * NotificationDateFormat - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * NotificationDateFormat.
 *
 *
 */
class NotificationDateFormat
{
    /**
     * Possible values of this enum
     */
    public const DAYS = 'Days';

    public const WEEKS = 'Weeks';

    public const MONTHS = 'Months';

    public const YEARS = 'Years';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DAYS,
            self::WEEKS,
            self::MONTHS,
            self::YEARS,
        ];
    }
}
