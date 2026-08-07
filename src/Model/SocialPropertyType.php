<?php

declare(strict_types=1);

/**
 * SocialPropertyType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SocialPropertyType.
 *
 *
 */
class SocialPropertyType
{
    /**
     * Possible values of this enum
     */
    public const HEALTHCARE = 'Healthcare';

    public const SPORTS = 'Sports';

    public const CULTURAL = 'Cultural';

    public const RELIGIOUS = 'Religious';

    public const EDUCATIONAL = 'Educational';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HEALTHCARE,
            self::SPORTS,
            self::CULTURAL,
            self::RELIGIOUS,
            self::EDUCATIONAL,
        ];
    }
}
