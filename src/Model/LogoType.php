<?php

declare(strict_types=1);

/**
 * LogoType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * LogoType.
 *
 *
 */
class LogoType
{
    /**
     * Possible values of this enum
     */
    public const LIGHT = 'Light';

    public const DARK = 'Dark';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIGHT,
            self::DARK,
        ];
    }
}
