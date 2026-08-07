<?php

declare(strict_types=1);

/**
 * SubTypeAlvPlot - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SubTypeAlvPlot.
 *
 *
 */
class SubTypeAlvPlot
{
    /**
     * Possible values of this enum
     */
    public const ARABLE = 'Arable';

    public const LAKE = 'Lake';

    public const MIX_USE = 'MixUse';

    public const ORCHARDS = 'Orchards';

    public const PASTURE = 'Pasture';

    public const VINEYARDS = 'Vineyards';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ARABLE,
            self::LAKE,
            self::MIX_USE,
            self::ORCHARDS,
            self::PASTURE,
            self::VINEYARDS,
            self::OTHER,
        ];
    }
}
