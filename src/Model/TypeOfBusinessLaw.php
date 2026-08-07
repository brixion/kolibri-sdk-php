<?php

declare(strict_types=1);

/**
 * TypeOfBusinessLaw - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypeOfBusinessLaw.
 *
 * 
 */
class TypeOfBusinessLaw
{
    /**
     * Possible values of this enum
     */
    public const BP_RIGHTS = 'BpRights';

    public const HORIZONTAL = 'Horizontal';

    public const COOPERATIVE = 'Cooperative';

    public const LEASEHOLD_ESTATE = 'LeaseholdEstate';

    public const EASEMENTS = 'Easements';

    public const PROTECTED_MONUMENT = 'ProtectedMonument';

    public const PROTECTED_CITY_VILLAGE_SCAPE = 'ProtectedCityVillageScape';

    public const CATERING_CONCENTRATION_AREA = 'CateringConcentrationArea';

    public const INDUSTRY_LIMITATION = 'IndustryLimitation';

    public const CATEGRING_ALLOWED = 'CategringAllowed';

    public const SELF_INTEREST = 'SelfInterest';

    public const CLEARED = 'Cleared';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BP_RIGHTS,
            self::HORIZONTAL,
            self::COOPERATIVE,
            self::LEASEHOLD_ESTATE,
            self::EASEMENTS,
            self::PROTECTED_MONUMENT,
            self::PROTECTED_CITY_VILLAGE_SCAPE,
            self::CATERING_CONCENTRATION_AREA,
            self::INDUSTRY_LIMITATION,
            self::CATEGRING_ALLOWED,
            self::SELF_INTEREST,
            self::CLEARED
        ];
    }
}


