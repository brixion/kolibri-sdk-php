<?php

declare(strict_types=1);

/**
 * AlvContinuation - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AlvContinuation.
 *
 *
 */
class AlvContinuation
{
    /**
     * Possible values of this enum
     */
    public const CURRENT_FUNCTION = 'CurrentFunction';

    public const OTHER_AGRICULTURAL_FUNCTION = 'OtherAgriculturalFunction';

    public const NON_AGRICULTURAL_FUNCTION = 'NonAgriculturalFunction';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CURRENT_FUNCTION,
            self::OTHER_AGRICULTURAL_FUNCTION,
            self::NON_AGRICULTURAL_FUNCTION,
        ];
    }
}
