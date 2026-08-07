<?php

declare(strict_types=1);

/**
 * TimeLogTermField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TimeLogTermField.
 *
 * Search for a text in one of the fields indicated by the TimeLogTermField.
 */
class TimeLogTermField
{
    /**
     * Possible values of this enum
     */
    public const DESCRIPTION = 'Description';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESCRIPTION
        ];
    }
}


