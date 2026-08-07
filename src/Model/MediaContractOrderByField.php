<?php

declare(strict_types=1);

/**
 * MediaContractOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * MediaContractOrderByField.
 *
 *
 */
class MediaContractOrderByField
{
    /**
     * Possible values of this enum
     */
    public const NAME = 'Name';

    public const _DEFAULT = 'Default';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NAME,
            self::_DEFAULT,
        ];
    }
}
