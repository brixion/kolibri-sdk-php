<?php

declare(strict_types=1);

/**
 * RelationType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RelationType.
 *
 *
 */
class RelationType
{
    /**
     * Possible values of this enum
     */
    public const EMPLOYEE = 'Employee';

    public const CONTACT_PERSON = 'ContactPerson';

    public const CONTACT_COMPANY = 'ContactCompany';

    public const OFFICE = 'Office';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::EMPLOYEE,
            self::CONTACT_PERSON,
            self::CONTACT_COMPANY,
            self::OFFICE,
        ];
    }
}
