<?php

declare(strict_types=1);

/**
 * CadastreOrderByField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * CadastreOrderByField.
 *
 * Order Cadastre search results by the field indicated by CadastreOrderByField.
 */
class CadastreOrderByField
{
    /**
     * Possible values of this enum
     */
    public const CREATION_DATE_TIME = 'CreationDateTime';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATION_DATE_TIME,
        ];
    }
}
