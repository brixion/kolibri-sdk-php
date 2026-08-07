<?php

declare(strict_types=1);

/**
 * WaitingTime - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * WaitingTime.
 *
 * 
 */
class WaitingTime
{
    /**
     * Possible values of this enum
     */
    public const DIRECT = 'Direct';

    public const HALF_YEAR = 'HalfYear';

    public const IN_CONSULTATION = 'InConsultation';

    public const YEAR = 'Year';

    public const QUARTER = 'Quarter';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DIRECT,
            self::HALF_YEAR,
            self::IN_CONSULTATION,
            self::YEAR,
            self::QUARTER
        ];
    }
}


