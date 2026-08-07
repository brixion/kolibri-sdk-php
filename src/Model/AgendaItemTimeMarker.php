<?php

declare(strict_types=1);

/**
 * AgendaItemTimeMarker - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItemTimeMarker.
 *
 *
 */
class AgendaItemTimeMarker
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const BUSY = 'Busy';

    public const FREE = 'Free';

    public const OUT_OF_OFFICE = 'OutOfOffice';

    public const TENTATIVE = 'Tentative';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::BUSY,
            self::FREE,
            self::OUT_OF_OFFICE,
            self::TENTATIVE,
        ];
    }
}
