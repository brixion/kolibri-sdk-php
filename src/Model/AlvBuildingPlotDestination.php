<?php

declare(strict_types=1);

/**
 * AlvBuildingPlotDestination - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AlvBuildingPlotDestination.
 *
 *
 */
class AlvBuildingPlotDestination
{
    /**
     * Possible values of this enum
     */
    public const ARABLE_FARM = 'ArableFarm';

    public const TREE_NURSERY = 'TreeNursery';

    public const MUSHROOM_CULTIVATION_COMPANY = 'MushroomCultivationCompany';

    public const GOAT_BUSINESS = 'GoatBusiness';

    public const GREENHOUSE_HORTICULTURE_COMPANY = 'GreenhouseHorticultureCompany';

    public const MANEGE_OR_PENSION_STORAGE = 'ManegeOrPensionStorage';

    public const DAIRY_FARM = 'DairyFarm';

    public const HORSE_FARMING = 'HorseFarming';

    public const SHEEP_BUSINESS = 'SheepBusiness';

    public const PIG_FARMING = 'PigFarming';

    public const VEAL_CALF_HOLDING = 'VealCalfHolding';

    public const BEEF_BULL_COMPANY = 'BeefBullCompany';

    public const OPEN_GROUND_HORTICULTURE = 'OpenGroundHorticulture';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ARABLE_FARM,
            self::TREE_NURSERY,
            self::MUSHROOM_CULTIVATION_COMPANY,
            self::GOAT_BUSINESS,
            self::GREENHOUSE_HORTICULTURE_COMPANY,
            self::MANEGE_OR_PENSION_STORAGE,
            self::DAIRY_FARM,
            self::HORSE_FARMING,
            self::SHEEP_BUSINESS,
            self::PIG_FARMING,
            self::VEAL_CALF_HOLDING,
            self::BEEF_BULL_COMPANY,
            self::OPEN_GROUND_HORTICULTURE,
            self::OTHER,
        ];
    }
}
