<?php

declare(strict_types=1);

/**
 * TaskFollowUp - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * TaskFollowUp.
 *
 *
 */
class TaskFollowUp
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'None';

    public const TODAY = 'Today';

    public const TOMORROW = 'Tomorrow';

    public const THIS_WEEK = 'ThisWeek';

    public const NEXT_WEEK = 'NextWeek';

    public const NO_DATE = 'NoDate';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::TODAY,
            self::TOMORROW,
            self::THIS_WEEK,
            self::NEXT_WEEK,
            self::NO_DATE,
        ];
    }
}
