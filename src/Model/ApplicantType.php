<?php

declare(strict_types=1);

/**
 * ApplicantType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * ApplicantType.
 *
 *
 */
class ApplicantType
{
    /**
     * Possible values of this enum
     */
    public const PURCHASER = 'Purchaser';

    public const TENANT = 'Tenant';

    public const REQUESTER = 'Requester';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PURCHASER,
            self::TENANT,
            self::REQUESTER,
        ];
    }
}
