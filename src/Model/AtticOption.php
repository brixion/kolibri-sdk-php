<?php

declare(strict_types=1);

/**
 * AtticOption - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AtticOption.
 *
 *
 */
class AtticOption
{
    /**
     * Possible values of this enum
     */
    public const OPTION_FOR_ROOM = 'OptionForRoom';

    public const STAIRCASE = 'Staircase';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OPTION_FOR_ROOM,
            self::STAIRCASE,
        ];
    }
}
