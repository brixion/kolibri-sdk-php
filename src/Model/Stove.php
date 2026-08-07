<?php

declare(strict_types=1);

/**
 * Stove - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Stove.
 *
 *
 */
class Stove
{
    /**
     * Possible values of this enum
     */
    public const ELECTRIC = 'Electric';

    public const GAS = 'Gas';

    public const WOOD = 'Wood';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ELECTRIC,
            self::GAS,
            self::WOOD,
        ];
    }
}
