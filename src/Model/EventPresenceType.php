<?php

declare(strict_types=1);

/**
 * EventPresenceType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EventPresenceType.
 *
 *
 */
class EventPresenceType
{
    /**
     * Possible values of this enum
     */
    public const ENTER = 'Enter';

    public const UPDATE = 'Update';

    public const LEAVE = 'Leave';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENTER,
            self::UPDATE,
            self::LEAVE,
        ];
    }
}
