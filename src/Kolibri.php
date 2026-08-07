<?php

declare(strict_types=1);

namespace Brixion\Kolibri;

use GuzzleHttp\ClientInterface;

/**
 * Thin facade that shares one authenticated HTTP client and Configuration across API classes.
 *
 * @method Api\AccountSettingsApi accountSettings()
 * @method Api\AcquisitionAssignmentsApi acquisitionAssignments()
 * @method Api\AcquisitionObjectAssignmentsApi acquisitionObjectAssignments()
 * @method Api\AgendaItemCategoriesApi agendaItemCategories()
 * @method Api\AgendaItemsApi agendaItems()
 * @method Api\AROSimpleApi aROSimple()
 * @method Api\AssignmentsApi assignments()
 * @method Api\BidsApi bids()
 * @method Api\BlobsApi blobs()
 * @method Api\BrochuresApi brochures()
 * @method Api\BusinessPartnersApi businessPartners()
 * @method Api\CadastresApi cadastres()
 * @method Api\CommunicationLogBlobsApi communicationLogBlobs()
 * @method Api\CommunicationLogsApi communicationLogs()
 * @method Api\CompanyListingsApi companyListings()
 * @method Api\CompanySettingsApi companySettings()
 * @method Api\ContactCompaniesApi contactCompanies()
 * @method Api\ContactLinksApi contactLinks()
 * @method Api\ContactPersonsApi contactPersons()
 * @method Api\DefaultFolderTreesApi defaultFolderTrees()
 * @method Api\DocumentSessionsApi documentSessions()
 * @method Api\DocumentTemplateGroupApi documentTemplateGroup()
 * @method Api\DocumentTemplatesApi documentTemplates()
 * @method Api\DossierItemsApi dossierItems()
 * @method Api\EmployeesApi employees()
 * @method Api\EventHubApi eventHub()
 * @method Api\FinancialAdministrationsApi financialAdministrations()
 * @method Api\FolderTreesApi folderTrees()
 * @method Api\GenericAssignmentCategoriesApi genericAssignmentCategories()
 * @method Api\GenericAssignmentsApi genericAssignments()
 * @method Api\GeoApi geo()
 * @method Api\GlobalSearchApi globalSearch()
 * @method Api\InvoicesApi invoices()
 * @method Api\KeysApi keys()
 * @method Api\MasterTableApi masterTable()
 * @method Api\MatchApi match()
 * @method Api\MediaContractApi mediaContract()
 * @method Api\MessagesApi messages()
 * @method Api\NotesApi notes()
 * @method Api\ObjectAssignmentsApi objectAssignments()
 * @method Api\ObjectTypeAssignmentsApi objectTypeAssignments()
 * @method Api\OfficeBrandingApi officeBranding()
 * @method Api\OfficesApi offices()
 * @method Api\PhrasesApi phrases()
 * @method Api\ProjectAssignmentsApi projectAssignments()
 * @method Api\PublicationsApi publications()
 * @method Api\RealEstateAgenciesApi realEstateAgencies()
 * @method Api\RelationGroupsApi relationGroups()
 * @method Api\RelationsApi relations()
 * @method Api\RemindersApi reminders()
 * @method Api\SearchAssignmentsApi searchAssignments()
 * @method Api\StatisticsApi statistics()
 * @method Api\TasksApi tasks()
 * @method Api\TemplateDefinitionCategoriesApi templateDefinitionCategories()
 * @method Api\TemplateDefinitionsApi templateDefinitions()
 * @method Api\TimeLogsApi timeLogs()
 * @method Api\TimelineEventsApi timelineEvents()
 * @method Api\TransactionMetaDataApi transactionMetaData()
 * @method Api\VersionApi version()
 */
final class Kolibri
{
    private Configuration $configuration;

    private ClientInterface $httpClient;

    /** @var array<class-string, object> */
    private array $apis = [];

    private function __construct(
        private ClientCredentials $auth,
    ) {
        $this->configuration = $auth->createConfiguration();
        $this->httpClient = $auth->createHttpClient();
    }

    public static function sandbox(string $clientId, string $clientSecret, ?string $scope = null): self
    {
        return new self(ClientCredentials::sandbox($clientId, $clientSecret, $scope));
    }

    public static function live(string $clientId, string $clientSecret, ?string $scope = null): self
    {
        return new self(ClientCredentials::live($clientId, $clientSecret, $scope));
    }

    public static function fromCredentials(ClientCredentials $auth): self
    {
        return new self($auth);
    }

    public function getConfiguration(): Configuration
    {
        return $this->configuration;
    }

    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    public function getAuth(): ClientCredentials
    {
        return $this->auth;
    }

    /**
     * @template T of object
     *
     * @param class-string<T> $apiClass
     *
     * @return T
     */
    public function api(string $apiClass): object
    {
        if (!class_exists($apiClass)) {
            throw new \InvalidArgumentException(sprintf('Unknown API class "%s".', $apiClass));
        }

        if (!isset($this->apis[$apiClass])) {
            $this->apis[$apiClass] = new $apiClass($this->httpClient, $this->configuration);
        }

        /** @var T */
        return $this->apis[$apiClass];
    }

    /**
     * Resolve API clients by short name, e.g. bids() → BidsApi.
     *
     * @param list<mixed> $arguments
     */
    public function __call(string $name, array $arguments): object
    {
        if ($arguments !== []) {
            throw new \BadMethodCallException(sprintf(
                'Method %s::%s() does not accept arguments.',
                self::class,
                $name,
            ));
        }

        $apiClass = 'Brixion\\Kolibri\\Api\\' . ucfirst($name) . 'Api';

        if (!class_exists($apiClass)) {
            throw new \BadMethodCallException(sprintf(
                'Method %s::%s() does not exist (expected API class %s).',
                self::class,
                $name,
                $apiClass,
            ));
        }

        return $this->api($apiClass);
    }
}
