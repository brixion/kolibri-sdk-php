<?php

declare(strict_types=1);

/**
 * MediaContractPublicationMethod - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MediaContractPublicationMethod.
 *
 *
 */
class MediaContractPublicationMethod
{
    /**
     * Possible values of this enum
     */
    public const AUTO = 'Auto';

    public const MANUAL = 'Manual';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AUTO,
            self::MANUAL,
        ];
    }
}
