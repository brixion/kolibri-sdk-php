<?php

declare(strict_types=1);

/**
 * ReminderNotificationSettingType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ReminderNotificationSettingType.
 *
 *
 */
class ReminderNotificationSettingType
{
    /**
     * Possible values of this enum
     */
    public const BANK_GUARANTEE = 'BankGuarantee';

    public const CONDITION = 'Condition';

    public const CALL_AFTER_VIEWING = 'CallAfterViewing';

    public const LET_KNOWN_SOMETHING = 'LetKnownSomething';

    public const BIRTHDAYS = 'Birthdays';

    public const RENTED_TO = 'RentedTo';

    public const VALUATION = 'Valuation';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BANK_GUARANTEE,
            self::CONDITION,
            self::CALL_AFTER_VIEWING,
            self::LET_KNOWN_SOMETHING,
            self::BIRTHDAYS,
            self::RENTED_TO,
            self::VALUATION,
        ];
    }
}
