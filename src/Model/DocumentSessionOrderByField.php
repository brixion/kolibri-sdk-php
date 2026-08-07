<?php

declare(strict_types=1);

/**
 * DocumentSessionOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * DocumentSessionOrderByField.
 *
 * Order DocumentSession search results by the field indicated by DocumentSessionOrderByField.
 */
class DocumentSessionOrderByField
{
    /**
     * Possible values of this enum
     */
    public const NAME = 'Name';

    public const CREATION_DATE = 'CreationDate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NAME,
            self::CREATION_DATE,
        ];
    }
}
