<?php

declare(strict_types=1);

/**
 * MovingReason - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MovingReason.
 *
 *
 */
class MovingReason
{
    /**
     * Possible values of this enum
     */
    public const LIVING_ON_THEIR_OWN = 'LivingOnTheirOwn';

    public const MARRIAGE_OR_LIVE_TOGETHER = 'MarriageOrLiveTogether';

    public const DIVORCE = 'Divorce';

    public const TOO_LARGE = 'TooLarge';

    public const TOO_SMALL = 'TooSmall';

    public const WANT_TO_BUY = 'WantToBuy';

    public const WANT_TO_RENT = 'WantToRent';

    public const ARCHITECTURAL_QUALITY = 'ArchitecturalQuality';

    public const NUISANCE_OF_RESIDENTS = 'NuisanceOfResidents';

    public const BETTER_ACCESSIBILITY = 'BetterAccessibility';

    public const LESS_PARKING_PRESSURE = 'LessParkingPressure';

    public const KIND_OF_BUILDINGS = 'KindOfBuildings';

    public const RESIDENTS = 'Residents';

    public const SERVICES = 'Services';

    public const INSECURITY_OR_CRIME = 'InsecurityOrCrime';

    public const HEALTHCARE_OR_NEED_FOR_CARE = 'HealthcareOrNeedForCare';

    public const STUDY = 'Study';

    public const WORK = 'Work';

    public const CLOSER_TO_FAMILY_FRIENDS_OR_ACQUAINTANCES = 'CloserToFamilyFriendsOrAcquaintances';

    public const OTHER_REASON = 'OtherReason';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::LIVING_ON_THEIR_OWN,
            self::MARRIAGE_OR_LIVE_TOGETHER,
            self::DIVORCE,
            self::TOO_LARGE,
            self::TOO_SMALL,
            self::WANT_TO_BUY,
            self::WANT_TO_RENT,
            self::ARCHITECTURAL_QUALITY,
            self::NUISANCE_OF_RESIDENTS,
            self::BETTER_ACCESSIBILITY,
            self::LESS_PARKING_PRESSURE,
            self::KIND_OF_BUILDINGS,
            self::RESIDENTS,
            self::SERVICES,
            self::INSECURITY_OR_CRIME,
            self::HEALTHCARE_OR_NEED_FOR_CARE,
            self::STUDY,
            self::WORK,
            self::CLOSER_TO_FAMILY_FRIENDS_OR_ACQUAINTANCES,
            self::OTHER_REASON,
        ];
    }
}
