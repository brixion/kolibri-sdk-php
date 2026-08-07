<?php

declare(strict_types=1);

/**
 * RelationOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RelationOrderByField.
 *
 * Order relation search results by the field indicated by RelationOrderByField.
 */
class RelationOrderByField
{
    /**
     * Possible values of this enum
     */
    public const DATE_TIME_CREATED = 'DateTimeCreated';

    public const DISPLAY_NAME = 'DisplayName';

    public const UPCOMING_BIRTHDAY = 'UpcomingBirthday';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DATE_TIME_CREATED,
            self::DISPLAY_NAME,
            self::UPCOMING_BIRTHDAY,
        ];
    }
}
