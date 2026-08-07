<?php

declare(strict_types=1);

/**
 * TaskStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TaskStatus.
 *
 *
 */
class TaskStatus
{
    /**
     * Possible values of this enum
     */
    public const NOT_STARTED = 'NotStarted';

    public const IN_PROGRESS = 'InProgress';

    public const WAITING = 'Waiting';

    public const DEFERRED = 'Deferred';

    public const COMPLETED = 'Completed';

    public const CANCELED = 'Canceled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_STARTED,
            self::IN_PROGRESS,
            self::WAITING,
            self::DEFERRED,
            self::COMPLETED,
            self::CANCELED,
        ];
    }
}
