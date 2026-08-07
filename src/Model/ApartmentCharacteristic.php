<?php

declare(strict_types=1);

/**
 * ApartmentCharacteristic - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ApartmentCharacteristic.
 *
 *
 */
class ApartmentCharacteristic
{
    /**
     * Possible values of this enum
     */
    public const SERVICE_FLAT = 'ServiceFlat';

    public const COMMON_APARTMENT = 'CommonApartment';

    public const CORRIDOR_FLAT = 'CorridorFlat';

    public const BELETAGE = 'Beletage';

    public const BASEMENT = 'Basement';

    public const DOUBLE_UPPER_HOUSE = 'DoubleUpperHouse';

    public const NURSERY_FLAT = 'NurseryFlat';

    public const PENTHOUSE = 'Penthouse';

    public const DUPLEX = 'Duplex';

    public const TRIPLEX = 'Triplex';

    public const OTHER = 'Other';

    public const KAVLASHVILI = 'Kavlashvili';

    public const LVOVI = 'Lvovi';

    public const KHRUSHOVI = 'Khrushovi';

    public const TUKHARELI = 'Tukhareli';

    public const CHEKHURI = 'Chekhuri';

    public const KALAKURI = 'Kalakuri';

    public const MOSCOW = 'Moscow';

    public const NONSTANDARD = 'Nonstandard';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SERVICE_FLAT,
            self::COMMON_APARTMENT,
            self::CORRIDOR_FLAT,
            self::BELETAGE,
            self::BASEMENT,
            self::DOUBLE_UPPER_HOUSE,
            self::NURSERY_FLAT,
            self::PENTHOUSE,
            self::DUPLEX,
            self::TRIPLEX,
            self::OTHER,
            self::KAVLASHVILI,
            self::LVOVI,
            self::KHRUSHOVI,
            self::TUKHARELI,
            self::CHEKHURI,
            self::KALAKURI,
            self::MOSCOW,
            self::NONSTANDARD,
        ];
    }
}
