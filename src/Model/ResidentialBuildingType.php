<?php

declare(strict_types=1);

/**
 * ResidentialBuildingType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ResidentialBuildingType.
 *
 *
 */
class ResidentialBuildingType
{
    /**
     * Possible values of this enum
     */
    public const APARTMENT = 'Apartment';

    public const HOUSE = 'House';

    public const APARTMENT_COMPLEX = 'ApartmentComplex';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APARTMENT,
            self::HOUSE,
            self::APARTMENT_COMPLEX,
            self::OTHER,
        ];
    }
}
