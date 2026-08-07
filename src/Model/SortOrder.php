<?php

declare(strict_types=1);

/**
 * SortOrder - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SortOrder.
 *
 *
 */
class SortOrder
{
    /**
     * Possible values of this enum
     */
    public const ASCENDING = 'Ascending';

    public const DESCENDING = 'Descending';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ASCENDING,
            self::DESCENDING,
        ];
    }
}
