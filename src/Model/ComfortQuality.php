<?php

declare(strict_types=1);

/**
 * ComfortQuality - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ComfortQuality.
 *
 *
 */
class ComfortQuality
{
    /**
     * Possible values of this enum
     */
    public const LUXURY = 'Luxury';

    public const NORMAL = 'Normal';

    public const SIMPLE = 'Simple';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LUXURY,
            self::NORMAL,
            self::SIMPLE,
        ];
    }
}
