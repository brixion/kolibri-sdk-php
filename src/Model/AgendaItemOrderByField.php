<?php

declare(strict_types=1);

/**
 * AgendaItemOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItemOrderByField.
 *
 * Order AgendaItem search results by the field indicated by AgendaItemOrderByField.
 */
class AgendaItemOrderByField
{
    /**
     * Possible values of this enum
     */
    public const START_DATE_TIME = 'StartDateTime';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::START_DATE_TIME,
        ];
    }
}
