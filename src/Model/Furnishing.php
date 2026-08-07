<?php

declare(strict_types=1);

/**
 * Furnishing - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Furnishing.
 *
 *
 */
class Furnishing
{
    /**
     * Possible values of this enum
     */
    public const FURNISHED = 'Furnished';

    public const UPHOLSTERED = 'Upholstered';

    public const AS_SHELL = 'AsShell';

    public const OPTION_FOR_FURNISHED = 'OptionForFurnished';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FURNISHED,
            self::UPHOLSTERED,
            self::AS_SHELL,
            self::OPTION_FOR_FURNISHED,
        ];
    }
}
