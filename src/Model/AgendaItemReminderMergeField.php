<?php

declare(strict_types=1);

/**
 * AgendaItemReminderMergeField - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * AgendaItemReminderMergeField.
 *
 *
 */
class AgendaItemReminderMergeField
{
    /**
     * Possible values of this enum
     */
    public const ADDRESS = 'Address';

    public const HOUSE_NUMBER = 'HouseNumber';

    public const HOUSE_NUMBER_POSTFIX = 'HouseNumberPostfix';

    public const CONTACT_ADDRESS = 'ContactAddress';

    public const CONTACT_EMAIL_ADDRESS = 'ContactEmailAddress';

    public const CONTACT_HOME_PHONE = 'ContactHomePhone';

    public const CONTACT_MOBILE_PHONE = 'ContactMobilePhone';

    public const EMPLOYEE_EMAIL_ADDRESS = 'EmployeeEmailAddress';

    public const EMPLOYEE_NAME = 'EmployeeName';

    public const EMPLOYEE_PHONE_WORK = 'EmployeePhoneWork';

    public const END_DATE = 'EndDate';

    public const END_DATE_TIME = 'EndDateTime';

    public const END_TIME = 'EndTime';

    public const FIRST_NAME = 'FirstName';

    public const LAST_NAME = 'LastName';

    public const MIDDLE_NAME = 'MiddleName';

    public const NOTARY_ADDRESS = 'NotaryAddress';

    public const NOTARY_EMAIL_ADDRESS = 'NotaryEmailAddress';

    public const NOTARY_NAME = 'NotaryName';

    public const NOTARY_PHONE_NUMBER = 'NotaryPhoneNumber';

    public const PLACE = 'Place';

    public const REALTOR_ACCOUNT_NUMBER = 'RealtorAccountNumber';

    public const REALTOR_EMAIL_ADDRESS = 'RealtorEmailAddress';

    public const REALTOR_NAME = 'RealtorName';

    public const REALTOR_PHONE_MOBILE = 'RealtorPhoneMobile';

    public const REALTOR_PHONE_NUMBER = 'RealtorPhoneNumber';

    public const SALUTATION = 'Salutation';

    public const SELLER_FIRST_NAME = 'SellerFirstName';

    public const SELLER_LAST_NAME = 'SellerLastName';

    public const SELLER_MIDDLE_NAME = 'SellerMiddleName';

    public const START_DATE = 'StartDate';

    public const START_DATE_TIME = 'StartDateTime';

    public const START_TIME = 'StartTime';

    public const STREET_NAME = 'StreetName';

    public const STREET_NAME_WITHOUT_SPACES = 'StreetNameWithoutSpaces';

    public const RELATION_DISPLAY_NAME = 'RelationDisplayName';

    public const RELATION_SALUTATION = 'RelationSalutation';

    public const ASSIGNMENT_DISPLAY_NAME = 'AssignmentDisplayName';

    public const OFFICE_PHONE_NUMBER = 'OfficePhoneNumber';

    public const OFFICE_EMAIL_ADDRESS = 'OfficeEmailAddress';

    public const OFFICE_MOBILE_PHONE_NUMBER = 'OfficeMobilePhoneNumber';

    public const FACEBOOK_ACCOUNT = 'FacebookAccount';

    public const DAY_OF_MONTH = 'DayOfMonth';

    public const MONTH = 'Month';

    public const DAY_OF_WEEK = 'DayOfWeek';

    public const YEAR = 'Year';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ADDRESS,
            self::HOUSE_NUMBER,
            self::HOUSE_NUMBER_POSTFIX,
            self::CONTACT_ADDRESS,
            self::CONTACT_EMAIL_ADDRESS,
            self::CONTACT_HOME_PHONE,
            self::CONTACT_MOBILE_PHONE,
            self::EMPLOYEE_EMAIL_ADDRESS,
            self::EMPLOYEE_NAME,
            self::EMPLOYEE_PHONE_WORK,
            self::END_DATE,
            self::END_DATE_TIME,
            self::END_TIME,
            self::FIRST_NAME,
            self::LAST_NAME,
            self::MIDDLE_NAME,
            self::NOTARY_ADDRESS,
            self::NOTARY_EMAIL_ADDRESS,
            self::NOTARY_NAME,
            self::NOTARY_PHONE_NUMBER,
            self::PLACE,
            self::REALTOR_ACCOUNT_NUMBER,
            self::REALTOR_EMAIL_ADDRESS,
            self::REALTOR_NAME,
            self::REALTOR_PHONE_MOBILE,
            self::REALTOR_PHONE_NUMBER,
            self::SALUTATION,
            self::SELLER_FIRST_NAME,
            self::SELLER_LAST_NAME,
            self::SELLER_MIDDLE_NAME,
            self::START_DATE,
            self::START_DATE_TIME,
            self::START_TIME,
            self::STREET_NAME,
            self::STREET_NAME_WITHOUT_SPACES,
            self::RELATION_DISPLAY_NAME,
            self::RELATION_SALUTATION,
            self::ASSIGNMENT_DISPLAY_NAME,
            self::OFFICE_PHONE_NUMBER,
            self::OFFICE_EMAIL_ADDRESS,
            self::OFFICE_MOBILE_PHONE_NUMBER,
            self::FACEBOOK_ACCOUNT,
            self::DAY_OF_MONTH,
            self::MONTH,
            self::DAY_OF_WEEK,
            self::YEAR,
        ];
    }
}
