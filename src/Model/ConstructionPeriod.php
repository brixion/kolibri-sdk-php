<?php

declare(strict_types=1);

/**
 * ConstructionPeriod - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ConstructionPeriod.
 *
 *
 */
class ConstructionPeriod
{
    /**
     * Possible values of this enum
     */
    public const BEFORE1906 = 'Before1906';

    public const BETWEEN1906_AND1930 = 'Between1906And1930';

    public const BETWEEN1931_AND1944 = 'Between1931And1944';

    public const BETWEEN1945_AND1959 = 'Between1945And1959';

    public const BETWEEN1960_AND1970 = 'Between1960And1970';

    public const BETWEEN1971_AND1980 = 'Between1971And1980';

    public const BETWEEN1981_AND1990 = 'Between1981And1990';

    public const BETWEEN1991_AND2000 = 'Between1991And2000';

    public const BETWEEN2001_AND2010 = 'Between2001And2010';

    public const AFTER2010 = 'After2010';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BEFORE1906,
            self::BETWEEN1906_AND1930,
            self::BETWEEN1931_AND1944,
            self::BETWEEN1945_AND1959,
            self::BETWEEN1960_AND1970,
            self::BETWEEN1971_AND1980,
            self::BETWEEN1981_AND1990,
            self::BETWEEN1991_AND2000,
            self::BETWEEN2001_AND2010,
            self::AFTER2010,
        ];
    }
}
