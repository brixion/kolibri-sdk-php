<?php

declare(strict_types=1);

/**
 * TypeOfFloor - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypeOfFloor.
 *
 * 
 */
class TypeOfFloor
{
    /**
     * Possible values of this enum
     */
    public const WOOD = 'Wood';

    public const CONCRETE = 'Concrete';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WOOD,
            self::CONCRETE,
            self::OTHER
        ];
    }
}


