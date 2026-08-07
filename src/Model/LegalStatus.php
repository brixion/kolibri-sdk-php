<?php

declare(strict_types=1);

/**
 * LegalStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * LegalStatus.
 *
 *
 */
class LegalStatus
{
    /**
     * Possible values of this enum
     */
    public const ENTIRE_LOT = 'EntireLot';

    public const PARTIAL_LOT = 'PartialLot';

    public const APARTMENT_RIGHTS = 'ApartmentRights';

    public const COOPERATIVE_OWNERSHIP = 'CooperativeOwnership';

    public const EXISTING = 'Existing';

    public const NEW_BUILD = 'NewBuild';

    public const FREE_SIMPLE = 'FreeSimple';

    public const SHARED_OWNERSHIP = 'SharedOwnership';

    public const APARTMENT_OWNERSHIP = 'ApartmentOwnership';

    public const COOPERATIVE_HOUSING = 'CooperativeHousing';

    public const IMMOVABLE_PROPERTY = 'ImmovableProperty';

    public const JOINT_ESTATE = 'JointEstate';

    public const MOVABLE_PROPERTY = 'MovableProperty';

    public const RIGHT_OF_SUPERFICIES = 'RightOfSuperficies';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENTIRE_LOT,
            self::PARTIAL_LOT,
            self::APARTMENT_RIGHTS,
            self::COOPERATIVE_OWNERSHIP,
            self::EXISTING,
            self::NEW_BUILD,
            self::FREE_SIMPLE,
            self::SHARED_OWNERSHIP,
            self::APARTMENT_OWNERSHIP,
            self::COOPERATIVE_HOUSING,
            self::IMMOVABLE_PROPERTY,
            self::JOINT_ESTATE,
            self::MOVABLE_PROPERTY,
            self::RIGHT_OF_SUPERFICIES,
        ];
    }
}
