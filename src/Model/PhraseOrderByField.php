<?php

declare(strict_types=1);

/**
 * PhraseOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PhraseOrderByField.
 *
 *
 */
class PhraseOrderByField
{
    /**
     * Possible values of this enum
     */
    public const DATE_TIME_CREATED = 'DateTimeCreated';

    public const TITLE = 'Title';

    public const DATE_TIME_MODIFIED = 'DateTimeModified';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DATE_TIME_CREATED,
            self::TITLE,
            self::DATE_TIME_MODIFIED,
        ];
    }
}
