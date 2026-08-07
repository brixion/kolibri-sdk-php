<?php

declare(strict_types=1);

/**
 * GardenQuality - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * GardenQuality.
 *
 *
 */
class GardenQuality
{
    /**
     * Possible values of this enum
     */
    public const TO_CONSTRUCT = 'ToConstruct';

    public const DERELICT = 'Derelict';

    public const NORMAL = 'Normal';

    public const BEAUTIFULLY_LANDSCAPED = 'BeautifullyLandscaped';

    public const GROOMED = 'Groomed';

    public const CONSTRUCTED_BY_ARCHITECT = 'ConstructedByArchitect';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TO_CONSTRUCT,
            self::DERELICT,
            self::NORMAL,
            self::BEAUTIFULLY_LANDSCAPED,
            self::GROOMED,
            self::CONSTRUCTED_BY_ARCHITECT,
        ];
    }
}
