<?php

declare(strict_types=1);

/**
 * DossierItemType - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use Brixion\Kolibri\ObjectSerializer;

/**
 * DossierItemType.
 *
 *
 */
class DossierItemType
{
    /**
     * Possible values of this enum
     */
    public const APPRAISAL_REPORT = 'AppraisalReport';

    public const PROOF_OF_OWNERSHIP = 'ProofOfOwnership';

    public const CADASTRAL_MESSAGE = 'CadastralMessage';

    public const CADASTRAL_MAP = 'CadastralMap';

    public const MEASUREMENT_REPORT = 'MeasurementReport';

    public const LIST_OF_GOODS = 'ListOfGoods';

    public const QUESTIONNAIRE = 'Questionnaire';

    public const PROPERTY_VALUE_DECISION_AND_ASSESSMENTS = 'PropertyValueDecisionAndAssessments';

    public const WARRANTY_CERTIFICATES_AND_CONTRACT_DOCUMENTS = 'WarrantyCertificatesAndContractDocuments';

    public const APPARTMENT_RIGHT_DOCUMENTS = 'AppartmentRightDocuments';

    public const BROCHURE = 'Brochure';

    public const ENERGY_LABEL = 'EnergyLabel';

    public const BUILDING_PLANS = 'BuildingPlans';

    public const STRUCTURAL_INSPECTION_REPORT = 'StructuralInspectionReport';

    public const OTHER_DOCUMENTS = 'OtherDocuments';

    public const PERSONAL_DETAILS = 'PersonalDetails';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPRAISAL_REPORT,
            self::PROOF_OF_OWNERSHIP,
            self::CADASTRAL_MESSAGE,
            self::CADASTRAL_MAP,
            self::MEASUREMENT_REPORT,
            self::LIST_OF_GOODS,
            self::QUESTIONNAIRE,
            self::PROPERTY_VALUE_DECISION_AND_ASSESSMENTS,
            self::WARRANTY_CERTIFICATES_AND_CONTRACT_DOCUMENTS,
            self::APPARTMENT_RIGHT_DOCUMENTS,
            self::BROCHURE,
            self::ENERGY_LABEL,
            self::BUILDING_PLANS,
            self::STRUCTURAL_INSPECTION_REPORT,
            self::OTHER_DOCUMENTS,
            self::PERSONAL_DETAILS,
        ];
    }
}
