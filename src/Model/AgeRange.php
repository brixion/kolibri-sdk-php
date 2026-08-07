<?php

declare(strict_types=1);

/**
 * AgeRange - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AgeRange.
 *
 *
 */
class AgeRange
{
    /**
     * Possible values of this enum
     */
    public const BELOW_TWENTY_FIVE = 'BelowTwentyFive';

    public const TWENTY_FIVE_TO_THIRTY_FOUR = 'TwentyFiveToThirtyFour';

    public const THIRTY_FIVE_TO_FORTY_FOUR = 'ThirtyFiveToFortyFour';

    public const FORTY_FIVE_TO_FIFTY_FOUR = 'FortyFiveToFiftyFour';

    public const FIFTY_FIVE_TO_SIXTY_FOUR = 'FiftyFiveToSixtyFour';

    public const SIXTY_FIVE_TO_SEVENTY_FOUR = 'SixtyFiveToSeventyFour';

    public const SEVENTY_FIVE_AND_OLDER = 'SeventyFiveAndOlder';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BELOW_TWENTY_FIVE,
            self::TWENTY_FIVE_TO_THIRTY_FOUR,
            self::THIRTY_FIVE_TO_FORTY_FOUR,
            self::FORTY_FIVE_TO_FIFTY_FOUR,
            self::FIFTY_FIVE_TO_SIXTY_FOUR,
            self::SIXTY_FIVE_TO_SEVENTY_FOUR,
            self::SEVENTY_FIVE_AND_OLDER,
        ];
    }
}
