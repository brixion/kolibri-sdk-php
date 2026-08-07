<?php

declare(strict_types=1);

/**
 * MergeFieldType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MergeFieldType.
 *
 *
 */
class MergeFieldType
{
    /**
     * Possible values of this enum
     */
    public const TEXT = 'Text';

    public const IMAGE_URL = 'ImageUrl';

    public const PHONE_NUMBER = 'PhoneNumber';

    public const URL = 'Url';

    public const EMAIL_ADDRESS = 'EmailAddress';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT,
            self::IMAGE_URL,
            self::PHONE_NUMBER,
            self::URL,
            self::EMAIL_ADDRESS,
        ];
    }
}
