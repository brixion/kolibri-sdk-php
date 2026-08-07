<?php

declare(strict_types=1);

/**
 * RealEstateAssociation - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RealEstateAssociation.
 *
 *
 */
class RealEstateAssociation
{
    /**
     * Possible values of this enum
     */
    public const INDEPENDENT = 'Independent';

    public const VBO = 'Vbo';

    public const VASTGOED_PRO = 'VastgoedPro';

    public const NVM = 'Nvm';

    public const UNKNOWN = 'Unknown';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INDEPENDENT,
            self::VBO,
            self::VASTGOED_PRO,
            self::NVM,
            self::UNKNOWN,
        ];
    }
}
