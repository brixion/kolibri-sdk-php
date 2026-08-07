<?php

declare(strict_types=1);

/**
 * WelfareState - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * WelfareState.
 *
 * 
 */
class WelfareState
{
    /**
     * Possible values of this enum
     */
    public const A1 = 'A1';

    public const A2 = 'A2';

    public const B1 = 'B1';

    public const B2 = 'B2';

    public const C1 = 'C1';

    public const C2 = 'C2';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::A1,
            self::A2,
            self::B1,
            self::B2,
            self::C1,
            self::C2
        ];
    }
}


