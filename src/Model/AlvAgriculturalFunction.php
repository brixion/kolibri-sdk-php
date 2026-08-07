<?php

declare(strict_types=1);

/**
 * AlvAgriculturalFunction - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AlvAgriculturalFunction.
 *
 *
 */
class AlvAgriculturalFunction
{
    /**
     * Possible values of this enum
     */
    public const ARABLE_FARM = 'ArableFarm';

    public const TREE_NURSERY = 'TreeNursery';

    public const MUSHROOM_CULTIVATION_COMPANY = 'MushroomCultivationCompany';

    public const FRUIT_GROWING_COMPANY = 'FruitGrowingCompany';

    public const GOAT_BUSINESS = 'GoatBusiness';

    public const GREENHOUSE_HORTICULTURE_COMPANY = 'GreenhouseHorticultureCompany';

    public const YOUNG_STOCK_BREEDING_COMPANY = 'YoungStockBreedingCompany';

    public const LAYING_HENS_COMPANY = 'LayingHensCompany';

    public const MANEGE_OR_PENSION_STORAGE = 'ManegeOrPensionStorage';

    public const DAIRY_FARM = 'DairyFarm';

    public const HORSE_FARMING = 'HorseFarming';

    public const EEL_FARM = 'EelFarm';

    public const SHEEP_BUSINESS = 'SheepBusiness';

    public const FISH_FARM = 'FishFarm';

    public const VEAL_CALF_HOLDING = 'VealCalfHolding';

    public const BROILER_FARM = 'BroilerFarm';

    public const BEEF_BULL_COMPANY = 'BeefBullCompany';

    public const FATTENING_COMPANY = 'FatteningCompany';

    public const OPEN_FIELD_HORTICULTURE_COMPANY = 'OpenFieldHorticultureCompany';

    public const WORM_NURSERY = 'WormNursery';

    public const SOW_COMPANY = 'SowCompany';

    public const SOWS_AND_FATTENING_COMPANY = 'SowsAndFatteningCompany';

    public const SUCKLER_COWS = 'SucklerCows';

    public const OTHER_AGRICULTURAL = 'OtherAgricultural';

    public const TURKEYS_GEESE_DUCKS_OSTRICHES = 'TurkeysGeeseDucksOstriches';

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
            self::FRUIT_GROWING_COMPANY,
            self::GOAT_BUSINESS,
            self::GREENHOUSE_HORTICULTURE_COMPANY,
            self::YOUNG_STOCK_BREEDING_COMPANY,
            self::LAYING_HENS_COMPANY,
            self::MANEGE_OR_PENSION_STORAGE,
            self::DAIRY_FARM,
            self::HORSE_FARMING,
            self::EEL_FARM,
            self::SHEEP_BUSINESS,
            self::FISH_FARM,
            self::VEAL_CALF_HOLDING,
            self::BROILER_FARM,
            self::BEEF_BULL_COMPANY,
            self::FATTENING_COMPANY,
            self::OPEN_FIELD_HORTICULTURE_COMPANY,
            self::WORM_NURSERY,
            self::SOW_COMPANY,
            self::SOWS_AND_FATTENING_COMPANY,
            self::SUCKLER_COWS,
            self::OTHER_AGRICULTURAL,
            self::TURKEYS_GEESE_DUCKS_OSTRICHES,
        ];
    }
}
