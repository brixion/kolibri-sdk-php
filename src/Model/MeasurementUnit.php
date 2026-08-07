<?php

declare(strict_types=1);

/**
 * MeasurementUnit - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MeasurementUnit.
 *
 *
 */
class MeasurementUnit
{
    /**
     * Possible values of this enum
     */
    public const METRIC = 'Metric';

    public const IMPERIAL = 'Imperial';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::METRIC,
            self::IMPERIAL,
        ];
    }
}
