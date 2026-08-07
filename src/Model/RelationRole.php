<?php

declare(strict_types=1);

/**
 * RelationRole - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * RelationRole.
 *
 *
 */
class RelationRole
{
    /**
     * Possible values of this enum
     */
    public const VENDOR = 'Vendor';

    public const APPLICANT = 'Applicant';

    public const NOTARY = 'Notary';

    public const PROPERTY_MANAGER = 'PropertyManager';

    public const FINANCIAL_ADVISOR = 'FinancialAdvisor';

    public const APPRAISER = 'Appraiser';

    public const PURCHASING_BROKER = 'PurchasingBroker';

    public const INSPECTOR = 'Inspector';

    public const STYLIST = 'Stylist';

    public const PHOTOGRAPHER = 'Photographer';

    public const POTENTIAL = 'Potential';

    public const PROJECT_DEVELOPER = 'ProjectDeveloper';

    public const OCCUPANT = 'Occupant';

    public const SOMEONE_WHO_OPTED = 'SomeoneWhoOpted';

    public const CLIENT = 'Client';

    public const OFFERING_AGENCY = 'OfferingAgency';

    public const TENANT_REPRESENTATION_BROKER = 'TenantRepresentationBroker';

    public const RENTAL_AGENT = 'RentalAgent';

    public const SALES_BROKER = 'SalesBroker';

    public const CONTACT_PERSON = 'ContactPerson';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::VENDOR,
            self::APPLICANT,
            self::NOTARY,
            self::PROPERTY_MANAGER,
            self::FINANCIAL_ADVISOR,
            self::APPRAISER,
            self::PURCHASING_BROKER,
            self::INSPECTOR,
            self::STYLIST,
            self::PHOTOGRAPHER,
            self::POTENTIAL,
            self::PROJECT_DEVELOPER,
            self::OCCUPANT,
            self::SOMEONE_WHO_OPTED,
            self::CLIENT,
            self::OFFERING_AGENCY,
            self::TENANT_REPRESENTATION_BROKER,
            self::RENTAL_AGENT,
            self::SALES_BROKER,
            self::CONTACT_PERSON,
        ];
    }
}
