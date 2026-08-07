<?php

declare(strict_types=1);

/**
 * FixedVariable - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * FixedVariable.
 *
 *
 */
class FixedVariable
{
    /**
     * Possible values of this enum
     */
    public const FIXED = 'Fixed';

    public const VARIABLE = 'Variable';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIXED,
            self::VARIABLE,
        ];
    }
}
