<?php

declare(strict_types=1);

/**
 * ConfidentialityLevel - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ConfidentialityLevel.
 *
 *
 */
class ConfidentialityLevel
{
    /**
     * Possible values of this enum
     */
    public const LIMITED_AUDIENCE = 'LimitedAudience';

    public const _PUBLIC = 'Public';

    public const CONFIDENTIAL = 'Confidential';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIMITED_AUDIENCE,
            self::_PUBLIC,
            self::CONFIDENTIAL,
        ];
    }
}
