<?php

declare(strict_types=1);

/**
 * TypeOfCommunualArea - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypeOfCommunualArea.
 *
 * 
 */
class TypeOfCommunualArea
{
    /**
     * Possible values of this enum
     */
    public const CAFETERIA = 'Cafeteria';

    public const CONFERENCE_ROOM = 'ConferenceRoom';

    public const PANTRY = 'Pantry';

    public const RECEPTION = 'Reception';

    public const SANITARY = 'Sanitary';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAFETERIA,
            self::CONFERENCE_ROOM,
            self::PANTRY,
            self::RECEPTION,
            self::SANITARY
        ];
    }
}


