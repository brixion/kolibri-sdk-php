<?php

declare(strict_types=1);

/**
 * BogCombinationObjectType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BogCombinationObjectType.
 *
 *
 */
class BogCombinationObjectType
{
    /**
     * Possible values of this enum
     */
    public const PRACTICE_ROOM = 'PracticeRoom';

    public const OFFICE_SPACE = 'OfficeSpace';

    public const BUSINESS_SPACE = 'BusinessSpace';

    public const RETAIL_SPACE = 'RetailSpace';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRACTICE_ROOM,
            self::OFFICE_SPACE,
            self::BUSINESS_SPACE,
            self::RETAIL_SPACE,
        ];
    }
}
