<?php

declare(strict_types=1);

/**
 * EventReminderType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EventReminderType.
 *
 *
 */
class EventReminderType
{
    /**
     * Possible values of this enum
     */
    public const AGENDA = 'Agenda';

    public const TASK = 'Task';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AGENDA,
            self::TASK,
        ];
    }
}
