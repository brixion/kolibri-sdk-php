<?php

declare(strict_types=1);

/**
 * NoteOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * NoteOrderByField.
 *
 *
 */
class NoteOrderByField
{
    /**
     * Possible values of this enum
     */
    public const CREATION_DATE_TIME = 'CreationDateTime';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATION_DATE_TIME,
        ];
    }
}
