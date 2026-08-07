<?php

declare(strict_types=1);

/**
 * CommissionType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CommissionType.
 *
 *
 */
class CommissionType
{
    /**
     * Possible values of this enum
     */
    public const FIXED = 'Fixed';

    public const PERCENTAGE = 'Percentage';

    public const FIXED_AND_PERCENTAGE = 'FixedAndPercentage';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIXED,
            self::PERCENTAGE,
            self::FIXED_AND_PERCENTAGE,
        ];
    }
}
