<?php

declare(strict_types=1);

/**
 * MessageOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MessageOrderByField.
 *
 * Order message search results by the field indicated by MessageOrderByField.
 */
class MessageOrderByField
{
    /**
     * Possible values of this enum
     */
    public const DATE_TIME_CREATED = 'DateTimeCreated';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DATE_TIME_CREATED,
        ];
    }
}
