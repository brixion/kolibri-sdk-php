<?php

declare(strict_types=1);

/**
 * UpdateAvailabilityAction - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */


namespace Brixion\Kolibri\Model;
use \Brixion\Kolibri\ObjectSerializer;

/**
 * UpdateAvailabilityAction.
 *
 * 
 */
class UpdateAvailabilityAction
{
    /**
     * Possible values of this enum
     */
    public const TO_RENTED = 'ToRented';

    public const TO_SOLD = 'ToSold';

    public const TO_WITHDRAWN = 'ToWithdrawn';

    public const TO_AVAILABLE = 'ToAvailable';

    public const TO_UNDER_OFFER = 'ToUnderOffer';

    public const TO_UNDER_OPTION = 'ToUnderOption';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TO_RENTED,
            self::TO_SOLD,
            self::TO_WITHDRAWN,
            self::TO_AVAILABLE,
            self::TO_UNDER_OFFER,
            self::TO_UNDER_OPTION
        ];
    }
}


