<?php

declare(strict_types=1);

/**
 * FormElementType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * FormElementType.
 *
 *
 */
class FormElementType
{
    /**
     * Possible values of this enum
     */
    public const TEXT = 'Text';

    public const INTEGER = 'Integer';

    public const DECIMAL = 'Decimal';

    public const DATE = 'Date';

    public const DROP_DOWN = 'DropDown';

    public const HEADING = 'Heading';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TEXT,
            self::INTEGER,
            self::DECIMAL,
            self::DATE,
            self::DROP_DOWN,
            self::HEADING,
        ];
    }
}
