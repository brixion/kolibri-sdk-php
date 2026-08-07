<?php

declare(strict_types=1);

/**
 * PointOfInterestType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * PointOfInterestType.
 *
 *
 */
class PointOfInterestType
{
    /**
     * Possible values of this enum
     */
    public const HIGHWAY_EXIT = 'HighwayExit';

    public const RAILWAY_STATION = 'RailwayStation';

    public const NS_CONTENT = 'NsContent';

    public const BUS_HUB = 'BusHub';

    public const TRAM_HUB = 'TramHub';

    public const METRO_HUB = 'MetroHub';

    public const BUS_STOP = 'BusStop';

    public const TRAM_STOP = 'TramStop';

    public const METRO_STOP = 'MetroStop';

    public const BANK_BRANCH = 'BankBranch';

    public const ATM = 'ATM';

    public const RECREATION = 'Recreation';

    public const SUPERMARKET = 'Supermarket';

    public const SHOP = 'Shop';

    public const RESTAURANT = 'Restaurant';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HIGHWAY_EXIT,
            self::RAILWAY_STATION,
            self::NS_CONTENT,
            self::BUS_HUB,
            self::TRAM_HUB,
            self::METRO_HUB,
            self::BUS_STOP,
            self::TRAM_STOP,
            self::METRO_STOP,
            self::BANK_BRANCH,
            self::ATM,
            self::RECREATION,
            self::SUPERMARKET,
            self::SHOP,
            self::RESTAURANT,
        ];
    }
}
