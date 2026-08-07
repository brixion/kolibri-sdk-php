<?php

declare(strict_types=1);

/**
 * RelationGroupOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RelationGroupOrderByField.
 *
 * Order relation group search results by the field indicated by RelationGroupOrderByField.
 */
class RelationGroupOrderByField
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
