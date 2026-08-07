<?php

declare(strict_types=1);

/**
 * RoofType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RoofType.
 *
 *
 */
class RoofType
{
    /**
     * Possible values of this enum
     */
    public const GABLE_ROOF = 'GableRoof';

    public const FLAT_ROOF = 'FlatRoof';

    public const PENT_ROOF = 'PentRoof';

    public const MANSARD_ROOF = 'MansardRoof';

    public const SIDE_GABLED_ROOF = 'SideGabledRoof';

    public const COMPOSITE_ROOF = 'CompositeRoof';

    public const HIP_ROOF = 'HipRoof';

    public const PAVILION_ROOF = 'PavilionRoof';

    public const ROOF_WITH_OWL_BOARDS = 'RoofWithOwlBoards';

    public const HELM_ROOF = 'HelmRoof';

    public const SAWTOOTH_ROOF = 'SawtoothRoof';

    public const CANOPY_ROOF = 'CanopyRoof';

    public const KAPMETPLAT = 'Kapmetplat';

    public const VAULTED_ROOF = 'VaultedRoof';

    public const CURVED = 'Curved';

    public const SHELL_ROOF = 'ShellRoof';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GABLE_ROOF,
            self::FLAT_ROOF,
            self::PENT_ROOF,
            self::MANSARD_ROOF,
            self::SIDE_GABLED_ROOF,
            self::COMPOSITE_ROOF,
            self::HIP_ROOF,
            self::PAVILION_ROOF,
            self::ROOF_WITH_OWL_BOARDS,
            self::HELM_ROOF,
            self::SAWTOOTH_ROOF,
            self::CANOPY_ROOF,
            self::KAPMETPLAT,
            self::VAULTED_ROOF,
            self::CURVED,
            self::SHELL_ROOF,
        ];
    }
}
