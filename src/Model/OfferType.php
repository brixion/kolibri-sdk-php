<?php

declare(strict_types=1);

/**
 * OfferType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * OfferType.
 *
 *
 */
class OfferType
{
    /**
     * Possible values of this enum
     */
    public const RENT = 'Rent';

    public const SALE = 'Sale';

    public const MIXING_FORM = 'MixingForm';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RENT,
            self::SALE,
            self::MIXING_FORM,
        ];
    }
}
