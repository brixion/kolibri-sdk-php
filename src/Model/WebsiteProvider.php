<?php

declare(strict_types=1);

/**
 * WebsiteProvider - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * WebsiteProvider.
 *
 * 
 */
class WebsiteProvider
{
    /**
     * Possible values of this enum
     */
    public const HOUSENET3 = 'Housenet3';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOUSENET3,
            self::OTHER
        ];
    }
}


