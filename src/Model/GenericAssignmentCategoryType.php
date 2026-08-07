<?php

declare(strict_types=1);

/**
 * GenericAssignmentCategoryType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * GenericAssignmentCategoryType.
 *
 *
 */
class GenericAssignmentCategoryType
{
    /**
     * Possible values of this enum
     */
    public const USER_CREATED = 'UserCreated';

    public const APPRAISAL = 'Appraisal';

    public const VALUATIONS = 'Valuations';

    public const OTHER = 'Other';

    public const INTERNAL = 'Internal';

    public const STAFF = 'Staff';

    public const MARKETING_AND_COMMUNICATION = 'MarketingAndCommunication';

    public const EVENTS = 'Events';

    public const MANAGEMENT = 'Management';

    public const COMPLIANCE_AND_LEGAL = 'ComplianceAndLegal';

    public const STRATEGY_AND_PLANNING = 'StrategyAndPlanning';

    public const TECHNOLOGY_AND_IT = 'TechnologyAndIt';

    public const SUPPLIERS_AND_PARTNERS = 'SuppliersAndPartners';

    public const TRAINING_AND_EDUCATION = 'TrainingAndEducation';

    public const COMPLAINTS_AND_DISPUTES = 'ComplaintsAndDisputes';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USER_CREATED,
            self::APPRAISAL,
            self::VALUATIONS,
            self::OTHER,
            self::INTERNAL,
            self::STAFF,
            self::MARKETING_AND_COMMUNICATION,
            self::EVENTS,
            self::MANAGEMENT,
            self::COMPLIANCE_AND_LEGAL,
            self::STRATEGY_AND_PLANNING,
            self::TECHNOLOGY_AND_IT,
            self::SUPPLIERS_AND_PARTNERS,
            self::TRAINING_AND_EDUCATION,
            self::COMPLAINTS_AND_DISPUTES,
        ];
    }
}
