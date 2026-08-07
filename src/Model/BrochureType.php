<?php

declare(strict_types=1);

/**
 * BrochureType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * BrochureType.
 *
 *
 */
class BrochureType
{
    /**
     * Possible values of this enum
     */
    public const BROCHURE = 'Brochure';

    public const CONVERSHEET = 'Conversheet';

    public const WINDOW_PRESENTATION = 'WindowPresentation';

    public const OTHER = 'Other';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BROCHURE,
            self::CONVERSHEET,
            self::WINDOW_PRESENTATION,
            self::OTHER,
        ];
    }
}
