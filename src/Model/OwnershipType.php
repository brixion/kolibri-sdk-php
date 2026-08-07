<?php

declare(strict_types=1);

/**
 * OwnershipType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * OwnershipType.
 *
 *
 */
class OwnershipType
{
    /**
     * Possible values of this enum
     */
    public const FULL_OWNERSHIP = 'FullOwnership';

    public const LEASEHOLD = 'Leasehold';

    public const LEASEHOLD_PROPERTY_TAX = 'LeaseholdPropertyTax';

    public const UNDER_LEASEHOLD = 'UnderLeasehold';

    public const LEASEHOLD_ESTATE = 'LeaseholdEstate';

    public const PROPERTY_ENCUMBERED_WITH_SUPERSTRUCTURE = 'PropertyEncumberedWithSuperstructure';

    public const LEASEHOLD_SUPERSTRUCTURE = 'LeaseholdSuperstructure';

    public const PROPERTY_ENCUMBERED_WITH_LEASEHOLD_SUPERSTRUCTURE = 'PropertyEncumberedWithLeaseholdSuperstructure';

    public const PERPETUAL_GROUND_RENT = 'PerpetualGroundRent';

    public const PROPERTY_ENCUMBERED_WITH_PERPETUAL_GROUND_RENT = 'PropertyEncumberedWithPerpetualGroundRent';

    public const CITY_LAW = 'CityLaw';

    public const PROPERTY_ENCUMBERED_WITH_CITY_LAW = 'PropertyEncumberedWithCityLaw';

    public const UNDER_RIGHT_OF_APPEAL = 'UnderRightOfAppeal';

    public const USUFRUCT = 'Usufruct';

    public const PROPERTY_ENCUMBERED_WITH_USUFRUCT = 'PropertyEncumberedWithUsufruct';

    public const OCCUPANCY = 'Occupancy';

    public const PROPERTY_ENCUMBERED_WITH_OCCUPANCY = 'PropertyEncumberedWithOccupancy';

    public const PROPERTY_ENCUMBERED_WITH_LIMITED_RIGHTS = 'PropertyEncumberedWithLimitedRights';

    public const LEASEHOLD_ENCUMBERED_WITH_USUFRUCT = 'LeaseholdEncumberedWithUsufruct';

    public const SUPERSTRUCTURE_ENCUMBERED_WITH_USUFRUCT = 'SuperstructureEncumberedWithUsufruct';

    public const LEASEHOLD_SUPERSTRUCTURE_ENCUMBERED_WITH_USUFRUCT = 'LeaseholdSuperstructureEncumberedWithUsufruct';

    public const RIGHT_OF_APPEAL_ENCUMBERED_WITH_USUFRUCT = 'RightOfAppealEncumberedWithUsufruct';

    public const LEASEHOLD_ENCUMBERED_WITH_OCCUPANCY = 'LeaseholdEncumberedWithOccupancy';

    public const SUPERSTRUCTURE_ENCUMBERED_WITH_OCCUPANCY = 'SuperstructureEncumberedWithOccupancy';

    public const LEASEHOLD_SUPERSTRUCTURE_ENCUMBERED_WITH_OCCUPANCY = 'LeaseholdSuperstructureEncumberedWithOccupancy';

    public const RIGHT_OF_APPEAL_ENCUMBERED_WITH_OCCUPANCY = 'RightOfAppealEncumberedWithOccupancy';

    public const SEE_DEED = 'SeeDeed';

    public const MANDELIG = 'Mandelig';

    public const RIGHT_OF_OVERHANG = 'RightOfOverhang';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FULL_OWNERSHIP,
            self::LEASEHOLD,
            self::LEASEHOLD_PROPERTY_TAX,
            self::UNDER_LEASEHOLD,
            self::LEASEHOLD_ESTATE,
            self::PROPERTY_ENCUMBERED_WITH_SUPERSTRUCTURE,
            self::LEASEHOLD_SUPERSTRUCTURE,
            self::PROPERTY_ENCUMBERED_WITH_LEASEHOLD_SUPERSTRUCTURE,
            self::PERPETUAL_GROUND_RENT,
            self::PROPERTY_ENCUMBERED_WITH_PERPETUAL_GROUND_RENT,
            self::CITY_LAW,
            self::PROPERTY_ENCUMBERED_WITH_CITY_LAW,
            self::UNDER_RIGHT_OF_APPEAL,
            self::USUFRUCT,
            self::PROPERTY_ENCUMBERED_WITH_USUFRUCT,
            self::OCCUPANCY,
            self::PROPERTY_ENCUMBERED_WITH_OCCUPANCY,
            self::PROPERTY_ENCUMBERED_WITH_LIMITED_RIGHTS,
            self::LEASEHOLD_ENCUMBERED_WITH_USUFRUCT,
            self::SUPERSTRUCTURE_ENCUMBERED_WITH_USUFRUCT,
            self::LEASEHOLD_SUPERSTRUCTURE_ENCUMBERED_WITH_USUFRUCT,
            self::RIGHT_OF_APPEAL_ENCUMBERED_WITH_USUFRUCT,
            self::LEASEHOLD_ENCUMBERED_WITH_OCCUPANCY,
            self::SUPERSTRUCTURE_ENCUMBERED_WITH_OCCUPANCY,
            self::LEASEHOLD_SUPERSTRUCTURE_ENCUMBERED_WITH_OCCUPANCY,
            self::RIGHT_OF_APPEAL_ENCUMBERED_WITH_OCCUPANCY,
            self::SEE_DEED,
            self::MANDELIG,
            self::RIGHT_OF_OVERHANG,
        ];
    }
}
