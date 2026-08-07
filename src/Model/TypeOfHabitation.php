<?php

declare(strict_types=1);

/**
 * TypeOfHabitation - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypeOfHabitation.
 *
 * 
 */
class TypeOfHabitation
{
    /**
     * Possible values of this enum
     */
    public const BUY = 'Buy';

    public const RENT = 'Rent';

    public const RESIDENT = 'Resident';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUY,
            self::RENT,
            self::RESIDENT,
            self::OTHER
        ];
    }
}


