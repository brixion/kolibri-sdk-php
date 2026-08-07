<?php

declare(strict_types=1);

/**
 * EventEntityType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EventEntityType.
 *
 *
 */
class EventEntityType
{
    /**
     * Possible values of this enum
     */
    public const ADDED = 'Added';

    public const UPDATED = 'Updated';

    public const DELETED = 'Deleted';

    public const UNDELETED = 'Undeleted';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADDED,
            self::UPDATED,
            self::DELETED,
            self::UNDELETED,
        ];
    }
}
