<?php

declare(strict_types=1);

/**
 * InsulationType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * InsulationType.
 *
 *
 */
class InsulationType
{
    /**
     * Possible values of this enum
     */
    public const ROOF_INSULATION = 'RoofInsulation';

    public const WALL_INSULATION = 'WallInsulation';

    public const FLOOR_INSULATION = 'FloorInsulation';

    public const FULLY_INSULATED = 'FullyInsulated';

    public const CAVITY_WALL = 'CavityWall';

    public const ANCHORLESS_CAVITY_WALL = 'AnchorlessCavityWall';

    public const ECO_BUILDING = 'EcoBuilding';

    public const DOUBLE_GLAZING = 'DoubleGlazing';

    public const PARTIAL_DOUBLE_GLAZING = 'PartialDoubleGlazing';

    public const SASH = 'Sash';

    public const LARGELY_DOUBLE_GLAZING = 'LargelyDoubleGlazing';

    public const TRIPLE_GLAZING = 'TripleGlazing';

    public const CRACKING_SEAL = 'CrackingSeal';

    public const HR_GLASS = 'HrGlass';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ROOF_INSULATION,
            self::WALL_INSULATION,
            self::FLOOR_INSULATION,
            self::FULLY_INSULATED,
            self::CAVITY_WALL,
            self::ANCHORLESS_CAVITY_WALL,
            self::ECO_BUILDING,
            self::DOUBLE_GLAZING,
            self::PARTIAL_DOUBLE_GLAZING,
            self::SASH,
            self::LARGELY_DOUBLE_GLAZING,
            self::TRIPLE_GLAZING,
            self::CRACKING_SEAL,
            self::HR_GLASS,
        ];
    }
}
