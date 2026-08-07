<?php

declare(strict_types=1);

/**
 * MediaPartnerCategory - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MediaPartnerCategory.
 *
 *
 */
class MediaPartnerCategory
{
    /**
     * Possible values of this enum
     */
    public const OTHER = 'Other';

    public const PORTAL = 'Portal';

    public const PRINTING = 'Printing';

    public const PHOTO_AND_VIDEO = 'PhotoAndVideo';

    public const PRESENTATION_COLUMN = 'PresentationColumn';

    public const MAPS = 'Maps';

    public const SOCIAL_MEDIA = 'SocialMedia';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OTHER,
            self::PORTAL,
            self::PRINTING,
            self::PHOTO_AND_VIDEO,
            self::PRESENTATION_COLUMN,
            self::MAPS,
            self::SOCIAL_MEDIA,
        ];
    }
}
