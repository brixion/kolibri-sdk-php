<?php

declare(strict_types=1);

/**
 * TypeAlv - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypeAlv.
 *
 * 
 */
class TypeAlv
{
    /**
     * Possible values of this enum
     */
    public const PREMISES = 'Premises';

    public const CATTLE_FARMING = 'CattleFarming';

    public const LISTING = 'Listing';

    public const MEAT_CALVES = 'MeatCalves';

    public const HORTICULTURAL_COMPANY = 'HorticulturalCompany';

    public const PIG_FARM = 'PigFarm';

    public const POULTRY_FARM = 'PoultryFarm';

    public const OTHER = 'Other';

    public const DAIRY_FARMING = 'DairyFarming';

    public const LOOSE_SOIL = 'LooseSoil';

    public const TILLAGE_FARM = 'TillageFarm';

    public const HORSE_FARM = 'HorseFarm';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PREMISES,
            self::CATTLE_FARMING,
            self::LISTING,
            self::MEAT_CALVES,
            self::HORTICULTURAL_COMPANY,
            self::PIG_FARM,
            self::POULTRY_FARM,
            self::OTHER,
            self::DAIRY_FARMING,
            self::LOOSE_SOIL,
            self::TILLAGE_FARM,
            self::HORSE_FARM
        ];
    }
}


