<?php

declare(strict_types=1);

/**
 * EnergyClass - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * EnergyClass.
 *
 *
 */
class EnergyClass
{
    /**
     * Possible values of this enum
     */
    public const APLUSPLUS = 'Aplusplus';

    public const APLUS = 'Aplus';

    public const A = 'A';

    public const B = 'B';

    public const C = 'C';

    public const D = 'D';

    public const E = 'E';

    public const F = 'F';

    public const G = 'G';

    public const APLUSPLUSPLUS = 'Aplusplusplus';

    public const APLUSPLUSPLUSPLUS = 'Aplusplusplusplus';

    public const APLUSPLUSPLUSPLUSPLUS = 'Aplusplusplusplusplus';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APLUSPLUS,
            self::APLUS,
            self::A,
            self::B,
            self::C,
            self::D,
            self::E,
            self::F,
            self::G,
            self::APLUSPLUSPLUS,
            self::APLUSPLUSPLUSPLUS,
            self::APLUSPLUSPLUSPLUSPLUS,
        ];
    }
}
