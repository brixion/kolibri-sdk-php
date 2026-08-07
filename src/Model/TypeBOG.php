<?php

declare(strict_types=1);

/**
 * TypeBOG - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * TypeBOG.
 *
 * 
 */
class TypeBOG
{
    /**
     * Possible values of this enum
     */
    public const SOCIAL_PROPERTY = 'SocialProperty';

    public const INVESTMENT = 'Investment';

    public const LEISURE = 'Leisure';

    public const GARAGEBOX = 'Garagebox';

    public const SERVICES = 'Services';

    public const WAREHOUSE = 'Warehouse';

    public const RETAIL_AREA = 'RetailArea';

    public const WAREHOUSE_PRODUCTION = 'WarehouseProduction';

    public const LOT = 'Lot';

    public const OFFICE = 'Office';

    public const HORECA_LISTING = 'HorecaListing';

    public const OUTDOOR_AREA = 'OutdoorArea';

    public const BUSINESS_HALL = 'BusinessHall';

    public const OTHER = 'Other';

    public const PRACTIC_AREA = 'PracticArea';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SOCIAL_PROPERTY,
            self::INVESTMENT,
            self::LEISURE,
            self::GARAGEBOX,
            self::SERVICES,
            self::WAREHOUSE,
            self::RETAIL_AREA,
            self::WAREHOUSE_PRODUCTION,
            self::LOT,
            self::OFFICE,
            self::HORECA_LISTING,
            self::OUTDOOR_AREA,
            self::BUSINESS_HALL,
            self::OTHER,
            self::PRACTIC_AREA
        ];
    }
}


