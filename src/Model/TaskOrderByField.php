<?php

declare(strict_types=1);

/**
 * TaskOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TaskOrderByField.
 *
 * Order task search results by the field indicated by TaskOrderByField.
 */
class TaskOrderByField
{
    /**
     * Possible values of this enum
     */
    public const DEFAULT_ORDER = 'DefaultOrder';

    public const END_DATE = 'EndDate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DEFAULT_ORDER,
            self::END_DATE,
        ];
    }
}
