<?php

declare(strict_types=1);

/**
 * AgendaItemCategoryType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItemCategoryType.
 *
 *
 */
class AgendaItemCategoryType
{
    /**
     * Possible values of this enum
     */
    public const OTHER = 'Other';

    public const SURVEY = 'Survey';

    public const VIEWING = 'Viewing';

    public const SIGNING_DEED = 'SigningDeed';

    public const INSPECTION = 'Inspection';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OTHER,
            self::SURVEY,
            self::VIEWING,
            self::SIGNING_DEED,
            self::INSPECTION,
        ];
    }
}
