<?php

declare(strict_types=1);

/**
 * TypeOfWindowFrame - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypeOfWindowFrame.
 *
 * 
 */
class TypeOfWindowFrame
{
    /**
     * Possible values of this enum
     */
    public const PLASTIC = 'Plastic';

    public const PARTIAL_WOOD = 'PartialWood';

    public const WOOD = 'Wood';

    public const ALUMINUM = 'Aluminum';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PLASTIC,
            self::PARTIAL_WOOD,
            self::WOOD,
            self::ALUMINUM
        ];
    }
}


