<?php

declare(strict_types=1);

/**
 * AddressType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AddressType.
 *
 *
 */
class AddressType
{
    /**
     * Possible values of this enum
     */
    public const PAST = 'Past';

    public const FUTURE = 'Future';

    public const CURRENT = 'Current';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PAST,
            self::FUTURE,
            self::CURRENT,
        ];
    }
}
