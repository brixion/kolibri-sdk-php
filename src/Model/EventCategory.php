<?php

declare(strict_types=1);

/**
 * EventCategory - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EventCategory.
 *
 *
 */
class EventCategory
{
    /**
     * Possible values of this enum
     */
    public const REMINDER = 'Reminder';

    public const MESSAGE = 'Message';

    public const PUBLICATION = 'Publication';

    public const PRESENCE = 'Presence';

    public const ENTITY = 'Entity';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REMINDER,
            self::MESSAGE,
            self::PUBLICATION,
            self::PRESENCE,
            self::ENTITY,
        ];
    }
}
