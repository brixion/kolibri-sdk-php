<?php

declare(strict_types=1);

/**
 * Acceptance - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Acceptance.
 *
 *
 */
class Acceptance
{
    /**
     * Possible values of this enum
     */
    public const IN_CONSULTATION = 'InConsultation';

    public const PER_DATE = 'PerDate';

    public const DIRECTLY = 'Directly';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IN_CONSULTATION,
            self::PER_DATE,
            self::DIRECTLY,
        ];
    }
}
