<?php

declare(strict_types=1);

/**
 * RegisterReason - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RegisterReason.
 *
 *
 */
class RegisterReason
{
    /**
     * Possible values of this enum
     */
    public const RELOCATION_WITHIN_SAME_COUNTRY = 'RelocationWithinSameCountry';

    public const RELOCATION_TO_OTHER_COUNTRY = 'RelocationToOtherCountry';

    public const BUSINESS_TERMINATION = 'BusinessTermination';

    public const DIVEST_BUSINESS_UNIT_OR_LAND = 'DivestBusinessUnitOrLand';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RELOCATION_WITHIN_SAME_COUNTRY,
            self::RELOCATION_TO_OTHER_COUNTRY,
            self::BUSINESS_TERMINATION,
            self::DIVEST_BUSINESS_UNIT_OR_LAND,
        ];
    }
}
