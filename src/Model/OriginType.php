<?php

declare(strict_types=1);

/**
 * OriginType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * OriginType.
 *
 *
 */
class OriginType
{
    /**
     * Possible values of this enum
     */
    public const VENUM = 'Venum';

    public const EXCHANGE = 'Exchange';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VENUM,
            self::EXCHANGE,
        ];
    }
}
