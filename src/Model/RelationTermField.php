<?php

declare(strict_types=1);

/**
 * RelationTermField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RelationTermField.
 *
 * Search for a text in one of the fields indicated by the RelationTermField.
 */
class RelationTermField
{
    /**
     * Possible values of this enum
     */
    public const DISPLAY_NAME = 'DisplayName';

    public const STREET_NAME_AND_NUMBER = 'StreetNameAndNumber';

    public const POSTAL_CODE = 'PostalCode';

    public const LOCALITY = 'Locality';

    public const PHONE_NUMBER = 'PhoneNumber';

    public const MOBILE_PHONE_NUMBER = 'MobilePhoneNumber';

    public const EMAIL_ADDRESS = 'EmailAddress';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DISPLAY_NAME,
            self::STREET_NAME_AND_NUMBER,
            self::POSTAL_CODE,
            self::LOCALITY,
            self::PHONE_NUMBER,
            self::MOBILE_PHONE_NUMBER,
            self::EMAIL_ADDRESS,
        ];
    }
}
