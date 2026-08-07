<?php

declare(strict_types=1);

/**
 * RelationGroupTermField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RelationGroupTermField.
 *
 * Search for a text in one of the fields indicated by the RelationGroupTermField.
 */
class RelationGroupTermField
{
    /**
     * Possible values of this enum
     */
    public const NAME = 'Name';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NAME,
        ];
    }
}
