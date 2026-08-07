<?php

declare(strict_types=1);

/**
 * AlvNonAgriculturalFunction - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AlvNonAgriculturalFunction.
 *
 *
 */
class AlvNonAgriculturalFunction
{
    /**
     * Possible values of this enum
     */
    public const INHABIT = 'Inhabit';

    public const CARE_FUNCTION = 'CareFunction';

    public const CATERING_OR_RECREATION = 'CateringOrRecreation';

    public const NON_AGRICULTURAL_COMPANY = 'NonAgriculturalCompany';

    public const STORAGE_OR_CARAVAN_STORAGE = 'StorageOrCaravanStorage';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INHABIT,
            self::CARE_FUNCTION,
            self::CATERING_OR_RECREATION,
            self::NON_AGRICULTURAL_COMPANY,
            self::STORAGE_OR_CARAVAN_STORAGE,
            self::OTHER,
        ];
    }
}
