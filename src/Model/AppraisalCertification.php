<?php

declare(strict_types=1);

/**
 * AppraisalCertification - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AppraisalCertification.
 *
 *
 */
class AppraisalCertification
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const SCVM = 'Scvm';

    public const VAST_GOED_CERT = 'VastGoedCert';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::SCVM,
            self::VAST_GOED_CERT,
        ];
    }
}
