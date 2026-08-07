<?php

declare(strict_types=1);

/**
 * RentSpecification - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RentSpecification.
 *
 *
 */
class RentSpecification
{
    /**
     * Possible values of this enum
     */
    public const SERVICE_CHARGES = 'ServiceCharges';

    public const GAS = 'Gas';

    public const WATER = 'Water';

    public const ELECTRICITY = 'Electricity';

    public const FURNISHED = 'Furnished';

    public const UPHOLSTERED = 'Upholstered';

    public const INTERNET = 'Internet';

    public const TELEVISION = 'Television';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SERVICE_CHARGES,
            self::GAS,
            self::WATER,
            self::ELECTRICITY,
            self::FURNISHED,
            self::UPHOLSTERED,
            self::INTERNET,
            self::TELEVISION,
        ];
    }
}
