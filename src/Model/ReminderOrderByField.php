<?php

declare(strict_types=1);

/**
 * ReminderOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ReminderOrderByField.
 *
 * Order reminder search results by the field indicated by ReminderOrderByField.
 */
class ReminderOrderByField
{
    /**
     * Possible values of this enum
     */
    public const START_DATE_TIME = 'StartDateTime';

    public const REMINDER_TIME = 'ReminderTime';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::START_DATE_TIME,
            self::REMINDER_TIME,
        ];
    }
}
