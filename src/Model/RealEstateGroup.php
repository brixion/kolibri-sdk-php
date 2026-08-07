<?php

declare(strict_types=1);

/**
 * RealEstateGroup - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RealEstateGroup.
 *
 *
 */
class RealEstateGroup
{
    /**
     * Possible values of this enum
     */
    public const RESIDENTIAL = 'Residential';

    public const COMMERCIAL = 'Commercial';

    public const AGRICULTURAL = 'Agricultural';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RESIDENTIAL,
            self::COMMERCIAL,
            self::AGRICULTURAL,
        ];
    }
}
