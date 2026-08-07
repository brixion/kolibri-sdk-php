<?php

declare(strict_types=1);

/**
 * VatCondition - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * VatCondition.
 *
 * 
 */
class VatCondition
{
    /**
     * Possible values of this enum
     */
    public const INCLUDED = 'Included';

    public const EXCLUDED = 'Excluded';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INCLUDED,
            self::EXCLUDED
        ];
    }
}


