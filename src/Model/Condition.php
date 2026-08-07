<?php

declare(strict_types=1);

/**
 * Condition - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Condition.
 *
 *
 */
class Condition
{
    /**
     * Possible values of this enum
     */
    public const POOR = 'Poor';

    public const POOR_TO_MODERATE = 'PoorToModerate';

    public const MODERATE = 'Moderate';

    public const MODERATE_TO_HABITABLE = 'ModerateToHabitable';

    public const HABITABLE = 'Habitable';

    public const HABITABLE_TO_GOOD = 'HabitableToGood';

    public const GOOD = 'Good';

    public const GOOD_TO_EXCELLENT = 'GoodToExcellent';

    public const EXCELLENT = 'Excellent';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::POOR,
            self::POOR_TO_MODERATE,
            self::MODERATE,
            self::MODERATE_TO_HABITABLE,
            self::HABITABLE,
            self::HABITABLE_TO_GOOD,
            self::GOOD,
            self::GOOD_TO_EXCELLENT,
            self::EXCELLENT,
        ];
    }
}
