<?php

declare(strict_types=1);

/**
 * AgendaStandardDuration - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaStandardDuration.
 *
 *
 */
class AgendaStandardDuration
{
    /**
     * Possible values of this enum
     */
    public const FIFTEEN_MINUTES = 'FifteenMinutes';

    public const THIRTY_MINUTES = 'ThirtyMinutes';

    public const FORTY_FIVE_MINUTES = 'FortyFiveMinutes';

    public const ONE_HOUR = 'OneHour';

    public const ONE_AND_A_HALF_HOURS = 'OneAndAHalfHours';

    public const TWO_HOURS = 'TwoHours';

    public const THREE_HOURS = 'ThreeHours';

    public const FOUR_HOURS = 'FourHours';

    public const ALL_DAY = 'AllDay';

    public const FIVE_MINUTES = 'FiveMinutes';

    public const TEN_MINUTES = 'TenMinutes';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FIFTEEN_MINUTES,
            self::THIRTY_MINUTES,
            self::FORTY_FIVE_MINUTES,
            self::ONE_HOUR,
            self::ONE_AND_A_HALF_HOURS,
            self::TWO_HOURS,
            self::THREE_HOURS,
            self::FOUR_HOURS,
            self::ALL_DAY,
            self::FIVE_MINUTES,
            self::TEN_MINUTES,
        ];
    }
}
