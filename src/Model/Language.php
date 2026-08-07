<?php

declare(strict_types=1);

/**
 * Language - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * Language.
 *
 *
 */
class Language
{
    /**
     * Possible values of this enum
     */
    public const DUTCH = 'Dutch';

    public const ENGLISH = 'English';

    public const GEORGIAN = 'Georgian';

    public const GERMAN = 'German';

    public const FRENCH = 'French';

    public const SPANISH = 'Spanish';

    public const ITALIAN = 'Italian';

    public const CROATIAN = 'Croatian';

    public const RUSSIAN = 'Russian';

    public const ESTONIAN = 'Estonian';

    public const FINNISH = 'Finnish';

    public const POLISH = 'Polish';

    public const TURKISH = 'Turkish';

    public const SWEDISH = 'Swedish';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DUTCH,
            self::ENGLISH,
            self::GEORGIAN,
            self::GERMAN,
            self::FRENCH,
            self::SPANISH,
            self::ITALIAN,
            self::CROATIAN,
            self::RUSSIAN,
            self::ESTONIAN,
            self::FINNISH,
            self::POLISH,
            self::TURKISH,
            self::SWEDISH,
        ];
    }
}
