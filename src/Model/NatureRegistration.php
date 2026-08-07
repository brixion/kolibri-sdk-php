<?php

declare(strict_types=1);

/**
 * NatureRegistration - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * NatureRegistration.
 *
 *
 */
class NatureRegistration
{
    /**
     * Possible values of this enum
     */
    public const VOLUNTARILY_FOR_BUSINESS_ECONOMIC_REASONS = 'VoluntarilyForBusinessEconomicReasons';

    public const VOLUNTARILY_FOR_PERSONAL_REASONS = 'VoluntarilyForPersonalReasons';

    public const FORCED_DUE_TO_BUSINESS_ECONOMIC_REASONS = 'ForcedDueToBusinessEconomicReasons';

    public const FORCED_DUE_TO_PERSONAL_REASONS = 'ForcedDueToPersonalReasons';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VOLUNTARILY_FOR_BUSINESS_ECONOMIC_REASONS,
            self::VOLUNTARILY_FOR_PERSONAL_REASONS,
            self::FORCED_DUE_TO_BUSINESS_ECONOMIC_REASONS,
            self::FORCED_DUE_TO_PERSONAL_REASONS,
        ];
    }
}
