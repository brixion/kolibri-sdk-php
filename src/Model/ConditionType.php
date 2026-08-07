<?php

declare(strict_types=1);

/**
 * ConditionType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ConditionType.
 *
 *
 */
class ConditionType
{
    /**
     * Possible values of this enum
     */
    public const ESSENTIAL_REPAIRS_DONE = 'EssentialRepairsDone';

    public const FOUNDATION = 'Foundation';

    public const FRAMEWORK = 'Framework';

    public const NEEDS_RENOVATION = 'NeedsRenovation';

    public const NEEDS_DECORATION = 'NeedsDecoration';

    public const NEW_BUILDING = 'NewBuilding';

    public const NEWLY_DECORATED = 'NewlyDecorated';

    public const READY = 'Ready';

    public const RENOVATED = 'Renovated';

    public const UNDER_CONSTRUCTION = 'UnderConstruction';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ESSENTIAL_REPAIRS_DONE,
            self::FOUNDATION,
            self::FRAMEWORK,
            self::NEEDS_RENOVATION,
            self::NEEDS_DECORATION,
            self::NEW_BUILDING,
            self::NEWLY_DECORATED,
            self::READY,
            self::RENOVATED,
            self::UNDER_CONSTRUCTION,
        ];
    }
}
