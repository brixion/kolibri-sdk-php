<?php

declare(strict_types=1);

/**
 * TaskTermField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TaskTermField.
 *
 * Search for a text in one of the fields indicated by the TaskTermField.
 */
class TaskTermField
{
    /**
     * Possible values of this enum
     */
    public const SUBJECT = 'Subject';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUBJECT,
        ];
    }
}
