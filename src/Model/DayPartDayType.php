<?php

declare(strict_types=1);

/**
 * DayPartDayType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * DayPartDayType.
 *
 *
 */
class DayPartDayType
{
    /**
     * Possible values of this enum
     */
    public const MONDAY_MORNING = 'MondayMorning';

    public const MONDAY_AFTERNOON = 'MondayAfternoon';

    public const MONDAY_EVENING = 'MondayEvening';

    public const TUESDAY_MORNING = 'TuesdayMorning';

    public const TUESDAY_AFTERNOON = 'TuesdayAfternoon';

    public const TUESDAY_EVENING = 'TuesdayEvening';

    public const WEDNESDAY_MORNING = 'WednesdayMorning';

    public const WEDNESDAY_AFTERNOON = 'WednesdayAfternoon';

    public const WEDNESDAY_EVENING = 'WednesdayEvening';

    public const THURSDAY_MORNING = 'ThursdayMorning';

    public const THURSDAY_AFTERNOON = 'ThursdayAfternoon';

    public const THURSDAY_EVENING = 'ThursdayEvening';

    public const FRIDAY_MORNING = 'FridayMorning';

    public const FRIDAY_AFTERNOON = 'FridayAfternoon';

    public const FRIDAY_EVENING = 'FridayEvening';

    public const SATURDAY_MORNING = 'SaturdayMorning';

    public const SATURDAY_AFTERNOON = 'SaturdayAfternoon';

    public const SATURDAY_EVENING = 'SaturdayEvening';

    public const SUNDAY_MORNING = 'SundayMorning';

    public const SUNDAY_AFTERNOON = 'SundayAfternoon';

    public const SUNDAY_EVENING = 'SundayEvening';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::MONDAY_MORNING,
            self::MONDAY_AFTERNOON,
            self::MONDAY_EVENING,
            self::TUESDAY_MORNING,
            self::TUESDAY_AFTERNOON,
            self::TUESDAY_EVENING,
            self::WEDNESDAY_MORNING,
            self::WEDNESDAY_AFTERNOON,
            self::WEDNESDAY_EVENING,
            self::THURSDAY_MORNING,
            self::THURSDAY_AFTERNOON,
            self::THURSDAY_EVENING,
            self::FRIDAY_MORNING,
            self::FRIDAY_AFTERNOON,
            self::FRIDAY_EVENING,
            self::SATURDAY_MORNING,
            self::SATURDAY_AFTERNOON,
            self::SATURDAY_EVENING,
            self::SUNDAY_MORNING,
            self::SUNDAY_AFTERNOON,
            self::SUNDAY_EVENING,
        ];
    }
}
