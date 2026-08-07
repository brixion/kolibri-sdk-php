<?php

declare(strict_types=1);

/**
 * UnitOfMeasurement - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * UnitOfMeasurement.
 *
 * 
 */
class UnitOfMeasurement
{
    /**
     * Possible values of this enum
     */
    public const METER = 'Meter';

    public const INCH = 'Inch';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::METER,
            self::INCH
        ];
    }
}


