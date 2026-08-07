<?php

declare(strict_types=1);

/**
 * DocumentTemplateOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * DocumentTemplateOrderByField.
 *
 * Order Document Template search results by the field indicated by DocumentTemplate OrderByField.
 */
class DocumentTemplateOrderByField
{
    /**
     * Possible values of this enum
     */
    public const NAME = 'Name';

    public const RECENTLY_USED = 'RecentlyUsed';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NAME,
            self::RECENTLY_USED,
        ];
    }
}
