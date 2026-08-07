<?php

declare(strict_types=1);

/**
 * Gender - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Gender.
 *
 *
 */
class Gender
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const MALE = 'Male';

    public const FEMALE = 'Female';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::MALE,
            self::FEMALE,
            self::OTHER,
        ];
    }
}
