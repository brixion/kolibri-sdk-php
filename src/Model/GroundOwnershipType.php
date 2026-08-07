<?php

declare(strict_types=1);

/**
 * GroundOwnershipType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * GroundOwnershipType.
 *
 *
 */
class GroundOwnershipType
{
    /**
     * Possible values of this enum
     */
    public const OWN_LAND = 'OwnLand';

    public const LEASEHOLD_WITHOUT_PROPERTY_ALLOWANCE = 'LeaseholdWithoutPropertyAllowance';

    public const LEASEHOLD_WITH_PROPERTY_ALLOWANCE = 'LeaseholdWithPropertyAllowance';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OWN_LAND,
            self::LEASEHOLD_WITHOUT_PROPERTY_ALLOWANCE,
            self::LEASEHOLD_WITH_PROPERTY_ALLOWANCE,
        ];
    }
}
