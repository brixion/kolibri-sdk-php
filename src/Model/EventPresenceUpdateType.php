<?php

declare(strict_types=1);

/**
 * EventPresenceUpdateType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EventPresenceUpdateType.
 *
 *
 */
class EventPresenceUpdateType
{
    /**
     * Possible values of this enum
     */
    public const ENTER_VIEW = 'EnterView';

    public const LEAVE_VIEW = 'LeaveView';

    public const ENTER_EDIT = 'EnterEdit';

    public const LEAVE_EDIT = 'LeaveEdit';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENTER_VIEW,
            self::LEAVE_VIEW,
            self::ENTER_EDIT,
            self::LEAVE_EDIT,
        ];
    }
}
