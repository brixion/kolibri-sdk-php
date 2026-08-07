<?php

declare(strict_types=1);

/**
 * EmailAddressType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EmailAddressType.
 *
 *
 */
class EmailAddressType
{
    /**
     * Possible values of this enum
     */
    public const OTHER = 'Other';

    public const HOME = 'Home';

    public const WORK = 'Work';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OTHER,
            self::HOME,
            self::WORK,
        ];
    }
}
