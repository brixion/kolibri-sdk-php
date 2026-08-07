<?php

declare(strict_types=1);

/**
 * NoteTermField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * NoteTermField.
 *
 *
 */
class NoteTermField
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
            self::DESCRIPTION,
        ];
    }
}
