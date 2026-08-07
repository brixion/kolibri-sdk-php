<?php

declare(strict_types=1);

/**
 * ChildAgeRange - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ChildAgeRange.
 *
 *
 */
class ChildAgeRange
{
    /**
     * Possible values of this enum
     */
    public const YOUNGER_THEN_SIX = 'YoungerThenSix';

    public const SIX_TO_ELEVEN = 'SixToEleven';

    public const TWELVE_AND_OLDER = 'TwelveAndOlder';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::YOUNGER_THEN_SIX,
            self::SIX_TO_ELEVEN,
            self::TWELVE_AND_OLDER,
        ];
    }
}
