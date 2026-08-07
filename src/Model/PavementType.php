<?php

declare(strict_types=1);

/**
 * PavementType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PavementType.
 *
 *
 */
class PavementType
{
    /**
     * Possible values of this enum
     */
    public const BITUMEN = 'Bitumen';

    public const OTHER = 'Other';

    public const PAVERS = 'Pavers';

    public const SLABS = 'Slabs';

    public const STELCON_CONCRETE_SLABS = 'StelconConcreteSlabs';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BITUMEN,
            self::OTHER,
            self::PAVERS,
            self::SLABS,
            self::STELCON_CONCRETE_SLABS,
        ];
    }
}
