<?php

declare(strict_types=1);

/**
 * BalconyType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BalconyType.
 *
 *
 */
class BalconyType
{
    /**
     * Possible values of this enum
     */
    public const CLOSED_BALCONY = 'ClosedBalcony';

    public const GLAZED_BALCONY = 'GlazedBalcony';

    public const FRENCH_BALCONY = 'FrenchBalcony';

    public const BALCONY = 'Balcony';

    public const TERRACE = 'Terrace';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CLOSED_BALCONY,
            self::GLAZED_BALCONY,
            self::FRENCH_BALCONY,
            self::BALCONY,
            self::TERRACE,
        ];
    }
}
