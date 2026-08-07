<?php

declare(strict_types=1);

/**
 * SocialMediaType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * SocialMediaType.
 *
 *
 */
class SocialMediaType
{
    /**
     * Possible values of this enum
     */
    public const FACEBOOK = 'Facebook';

    public const TWITTER = 'Twitter';

    public const TWITTER_WIDGET = 'TwitterWidget';

    public const YOU_TUBE = 'YouTube';

    public const LINKED_IN = 'LinkedIn';

    public const GOOGLE_PLUS = 'GooglePlus';

    public const PINTEREST = 'Pinterest';

    public const VIDEO = 'Video';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FACEBOOK,
            self::TWITTER,
            self::TWITTER_WIDGET,
            self::YOU_TUBE,
            self::LINKED_IN,
            self::GOOGLE_PLUS,
            self::PINTEREST,
            self::VIDEO,
        ];
    }
}
