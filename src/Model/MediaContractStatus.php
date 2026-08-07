<?php

declare(strict_types=1);

/**
 * MediaContractStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MediaContractStatus.
 *
 *
 */
class MediaContractStatus
{
    /**
     * Possible values of this enum
     */
    public const INACTIVE = 'Inactive';

    public const PENDING_ACTIVATION = 'PendingActivation';

    public const ACTIVE = 'Active';

    public const DENIED = 'Denied';

    public const SUSPENDED = 'Suspended';

    public const PENDING_DEACTIVATION = 'PendingDeactivation';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INACTIVE,
            self::PENDING_ACTIVATION,
            self::ACTIVE,
            self::DENIED,
            self::SUSPENDED,
            self::PENDING_DEACTIVATION,
        ];
    }
}
