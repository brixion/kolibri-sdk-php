<?php

declare(strict_types=1);

/**
 * AcquisitionStatus - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AcquisitionStatus.
 *
 *
 */
class AcquisitionStatus
{
    /**
     * Possible values of this enum
     */
    public const _NEW = 'New';

    public const UNDER_NEGOCIATION = 'UnderNegociation';

    public const DISSOLVED = 'Dissolved';

    public const PURCHASED = 'Purchased';

    public const RENTED = 'Rented';

    public const CANCELED = 'Canceled';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
            self::UNDER_NEGOCIATION,
            self::DISSOLVED,
            self::PURCHASED,
            self::RENTED,
            self::CANCELED,
        ];
    }
}
