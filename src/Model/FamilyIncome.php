<?php

declare(strict_types=1);

/**
 * FamilyIncome - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * FamilyIncome.
 *
 *
 */
class FamilyIncome
{
    /**
     * Possible values of this enum
     */
    public const LESS_THEN_MINIMUM = 'LessThenMinimum';

    public const MINIMUM_TO_MODAL = 'MinimumToModal';

    public const MODAL_TO_TWICE_MODAL = 'ModalToTwiceModal';

    public const TWICE_MODAL_TO_THRICE_MODAL = 'TwiceModalToThriceModal';

    public const MORE_THEN_THRICE_MODAL = 'MoreThenThriceModal';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LESS_THEN_MINIMUM,
            self::MINIMUM_TO_MODAL,
            self::MODAL_TO_TWICE_MODAL,
            self::TWICE_MODAL_TO_THRICE_MODAL,
            self::MORE_THEN_THRICE_MODAL,
        ];
    }
}
