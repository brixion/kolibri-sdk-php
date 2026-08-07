<?php

declare(strict_types=1);

/**
 * RoofMaterial - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RoofMaterial.
 *
 *
 */
class RoofMaterial
{
    /**
     * Possible values of this enum
     */
    public const LEISTEEN = 'Leisteen';

    public const CANE = 'Cane';

    public const ASBESTOS = 'Asbestos';

    public const PLASTIC = 'Plastic';

    public const TILES = 'Tiles';

    public const BITUMINOUS_ROOFING = 'BituminousRoofing';

    public const METAL = 'Metal';

    public const OTHER = 'Other';

    public const CERAMIC = 'Ceramic';

    public const SLATE = 'Slate';

    public const TINPLATE = 'Tinplate';

    public const ROLLED_MATERIAL = 'RolledMaterial';

    public const STONE = 'Stone';

    public const LATH = 'Lath';

    public const PVC = 'PVC';

    public const GALVANIZED = 'Galvanized';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LEISTEEN,
            self::CANE,
            self::ASBESTOS,
            self::PLASTIC,
            self::TILES,
            self::BITUMINOUS_ROOFING,
            self::METAL,
            self::OTHER,
            self::CERAMIC,
            self::SLATE,
            self::TINPLATE,
            self::ROLLED_MATERIAL,
            self::STONE,
            self::LATH,
            self::PVC,
            self::GALVANIZED,
        ];
    }
}
