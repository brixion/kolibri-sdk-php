<?php

declare(strict_types=1);

/**
 * SearchAssignmentOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SearchAssignmentOrderByField.
 *
 *
 */
class SearchAssignmentOrderByField
{
    /**
     * Possible values of this enum
     */
    public const CREATION_DATE = 'CreationDate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATION_DATE,
        ];
    }
}
