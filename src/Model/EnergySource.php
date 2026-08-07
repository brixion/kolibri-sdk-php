<?php

declare(strict_types=1);

/**
 * EnergySource - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EnergySource.
 *
 *
 */
class EnergySource
{
    /**
     * Possible values of this enum
     */
    public const GAS = 'Gas';

    public const OIL = 'Oil';

    public const ELECTRIC = 'Electric';

    public const PELLETS = 'Pellets';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GAS,
            self::OIL,
            self::ELECTRIC,
            self::PELLETS,
        ];
    }
}
