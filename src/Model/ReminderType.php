<?php

declare(strict_types=1);

/**
 * ReminderType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ReminderType.
 *
 *
 */
class ReminderType
{
    /**
     * Possible values of this enum
     */
    public const AGENDA_ITEM_REMINDER = 'AgendaItemReminder';

    public const TASK_REMINDER = 'TaskReminder';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGENDA_ITEM_REMINDER,
            self::TASK_REMINDER,
        ];
    }
}
