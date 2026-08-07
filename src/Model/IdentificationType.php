<?php

declare(strict_types=1);

/**
 * IdentificationType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * IdentificationType.
 *
 *
 */
class IdentificationType
{
    /**
     * Possible values of this enum
     */
    public const UNKNOWN = 'Unknown';

    public const PASSPORT = 'Passport';

    public const IDENTITY_CARD = 'IdentityCard';

    public const DRIVER_LICENSE = 'DriverLicense';

    public const RESIDENCE_DOCUMENT = 'ResidenceDocument';

    public const REFUGEE_PASSPORT = 'RefugeePassport';

    public const STRANGER_PASSPORT = 'StrangerPassport';

    public const FOREIGN_PASSPORT = 'ForeignPassport';

    public const ELECTRONIC_W_DOCUMENT = 'ElectronicWDocument';

    public const FOREIGN_IDENTITY_CARD = 'ForeignIdentityCard';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
            self::PASSPORT,
            self::IDENTITY_CARD,
            self::DRIVER_LICENSE,
            self::RESIDENCE_DOCUMENT,
            self::REFUGEE_PASSPORT,
            self::STRANGER_PASSPORT,
            self::FOREIGN_PASSPORT,
            self::ELECTRONIC_W_DOCUMENT,
            self::FOREIGN_IDENTITY_CARD,
        ];
    }
}
