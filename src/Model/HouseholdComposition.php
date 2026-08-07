<?php

declare(strict_types=1);

/**
 * HouseholdComposition - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * HouseholdComposition.
 *
 *
 */
class HouseholdComposition
{
    /**
     * Possible values of this enum
     */
    public const PARTNERS_WITHOUT_KIDS_LIVING_AT_HOME = 'PartnersWithoutKidsLivingAtHome';

    public const PARTNERS_WITH_KIDS_LIVING_AT_HOME = 'PartnersWithKidsLivingAtHome';

    public const PARTNERS_WITH_KIDS_LIVING_AT_HOME_AND_OTHERS = 'PartnersWithKidsLivingAtHomeAndOthers';

    public const PARTNERS_AND_OTHERS = 'PartnersAndOthers';

    public const SINGLE_PARENT_WITH_KIDS = 'SingleParentWithKids';

    public const SINGLE_PARENT_WITH_KIDS_AND_OTHERS = 'SingleParentWithKidsAndOthers';

    public const OTHER_COMPOSITION = 'OtherComposition';

    public const UNKNOWN = 'Unknown';

    public const REFUSED = 'Refused';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PARTNERS_WITHOUT_KIDS_LIVING_AT_HOME,
            self::PARTNERS_WITH_KIDS_LIVING_AT_HOME,
            self::PARTNERS_WITH_KIDS_LIVING_AT_HOME_AND_OTHERS,
            self::PARTNERS_AND_OTHERS,
            self::SINGLE_PARENT_WITH_KIDS,
            self::SINGLE_PARENT_WITH_KIDS_AND_OTHERS,
            self::OTHER_COMPOSITION,
            self::UNKNOWN,
            self::REFUSED,
        ];
    }
}
