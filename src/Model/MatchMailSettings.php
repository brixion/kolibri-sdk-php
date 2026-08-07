<?php

declare(strict_types=1);

/**
 * MatchMailSettings - Brixion Kolibri PHP SDK.
 * API document version: 4.1.1245.0
 */

namespace Brixion\Kolibri\Model;

use ArrayAccess;
use Brixion\Kolibri\ObjectSerializer;

/**
 * MatchMailSettings.
 * @implements \ArrayAccess<string, mixed>
 */
class MatchMailSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $modelTypeName = 'MatchMailSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $attributeTypes = [
        'has_match_mail' => 'bool',
        'website_provider' => '\Brixion\Kolibri\Model\WebsiteProvider',
        'collegial_listing_needs_company_authorisation_token' => 'bool',
        'collegial_listings_link' => 'string',
        'collegial_listings_enabled' => 'bool',
        'collegial_listings_authorised_until' => '\DateTime',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $attributeFormats = [
        'has_match_mail' => null,
        'website_provider' => null,
        'collegial_listing_needs_company_authorisation_token' => null,
        'collegial_listings_link' => null,
        'collegial_listings_enabled' => null,
        'collegial_listings_authorised_until' => 'date-time',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $nullables = [
        'has_match_mail' => false,
        'website_provider' => false,
        'collegial_listing_needs_company_authorisation_token' => false,
        'collegial_listings_link' => false,
        'collegial_listings_enabled' => false,
        'collegial_listings_authorised_until' => false,
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $nullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function attributeTypes()
    {
        return self::$attributeTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function attributeFormats()
    {
        return self::$attributeFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function nullables(): array
    {
        return self::$nullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getNullablesSetToNull(): array
    {
        return $this->nullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $nullablesSetToNull
     */
    private function setNullablesSetToNull(array $nullablesSetToNull): void
    {
        $this->nullablesSetToNull = $nullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::nullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getNullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'has_match_mail' => 'hasMatchMail',
        'website_provider' => 'websiteProvider',
        'collegial_listing_needs_company_authorisation_token' => 'collegialListingNeedsCompanyAuthorisationToken',
        'collegial_listings_link' => 'collegialListingsLink',
        'collegial_listings_enabled' => 'collegialListingsEnabled',
        'collegial_listings_authorised_until' => 'collegialListingsAuthorisedUntil',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'has_match_mail' => 'setHasMatchMail',
        'website_provider' => 'setWebsiteProvider',
        'collegial_listing_needs_company_authorisation_token' => 'setCollegialListingNeedsCompanyAuthorisationToken',
        'collegial_listings_link' => 'setCollegialListingsLink',
        'collegial_listings_enabled' => 'setCollegialListingsEnabled',
        'collegial_listings_authorised_until' => 'setCollegialListingsAuthorisedUntil',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'has_match_mail' => 'getHasMatchMail',
        'website_provider' => 'getWebsiteProvider',
        'collegial_listing_needs_company_authorisation_token' => 'getCollegialListingNeedsCompanyAuthorisationToken',
        'collegial_listings_link' => 'getCollegialListingsLink',
        'collegial_listings_enabled' => 'getCollegialListingsEnabled',
        'collegial_listings_authorised_until' => 'getCollegialListingsAuthorisedUntil',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$modelTypeName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('has_match_mail', $data ?? [], null);
        $this->setIfExists('website_provider', $data ?? [], null);
        $this->setIfExists('collegial_listing_needs_company_authorisation_token', $data ?? [], null);
        $this->setIfExists('collegial_listings_link', $data ?? [], null);
        $this->setIfExists('collegial_listings_enabled', $data ?? [], null);
        $this->setIfExists('collegial_listings_authorised_until', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->nullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->nullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['collegial_listing_needs_company_authorisation_token'] === null) {
            $invalidProperties[] = "'collegial_listing_needs_company_authorisation_token' can't be null";
        }
        if ($this->container['collegial_listings_enabled'] === null) {
            $invalidProperties[] = "'collegial_listings_enabled' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets has_match_mail
     *
     * @return bool|null
     */
    public function getHasMatchMail()
    {
        return $this->container['has_match_mail'];
    }

    /**
     * Sets has_match_mail
     *
     * @param bool|null $has_match_mail has_match_mail
     *
     * @return self
     */
    public function setHasMatchMail($has_match_mail)
    {
        if (is_null($has_match_mail)) {
            throw new \InvalidArgumentException('non-nullable has_match_mail cannot be null');
        }
        $this->container['has_match_mail'] = $has_match_mail;

        return $this;
    }

    /**
     * Gets website_provider
     *
     * @return \Brixion\Kolibri\Model\WebsiteProvider|null
     */
    public function getWebsiteProvider()
    {
        return $this->container['website_provider'];
    }

    /**
     * Sets website_provider
     *
     * @param \Brixion\Kolibri\Model\WebsiteProvider|null $website_provider website_provider
     *
     * @return self
     */
    public function setWebsiteProvider($website_provider)
    {
        if (is_null($website_provider)) {
            throw new \InvalidArgumentException('non-nullable website_provider cannot be null');
        }
        $this->container['website_provider'] = $website_provider;

        return $this;
    }

    /**
     * Gets collegial_listing_needs_company_authorisation_token
     *
     * @return bool
     */
    public function getCollegialListingNeedsCompanyAuthorisationToken()
    {
        return $this->container['collegial_listing_needs_company_authorisation_token'];
    }

    /**
     * Sets collegial_listing_needs_company_authorisation_token
     *
     * @param bool $collegial_listing_needs_company_authorisation_token collegial_listing_needs_company_authorisation_token
     *
     * @return self
     */
    public function setCollegialListingNeedsCompanyAuthorisationToken($collegial_listing_needs_company_authorisation_token)
    {
        if (is_null($collegial_listing_needs_company_authorisation_token)) {
            throw new \InvalidArgumentException('non-nullable collegial_listing_needs_company_authorisation_token cannot be null');
        }
        $this->container['collegial_listing_needs_company_authorisation_token'] = $collegial_listing_needs_company_authorisation_token;

        return $this;
    }

    /**
     * Gets collegial_listings_link
     *
     * @return string|null
     */
    public function getCollegialListingsLink()
    {
        return $this->container['collegial_listings_link'];
    }

    /**
     * Sets collegial_listings_link
     *
     * @param string|null $collegial_listings_link collegial_listings_link
     *
     * @return self
     */
    public function setCollegialListingsLink($collegial_listings_link)
    {
        if (is_null($collegial_listings_link)) {
            throw new \InvalidArgumentException('non-nullable collegial_listings_link cannot be null');
        }
        $this->container['collegial_listings_link'] = $collegial_listings_link;

        return $this;
    }

    /**
     * Gets collegial_listings_enabled
     *
     * @return bool
     */
    public function getCollegialListingsEnabled()
    {
        return $this->container['collegial_listings_enabled'];
    }

    /**
     * Sets collegial_listings_enabled
     *
     * @param bool $collegial_listings_enabled collegial_listings_enabled
     *
     * @return self
     */
    public function setCollegialListingsEnabled($collegial_listings_enabled)
    {
        if (is_null($collegial_listings_enabled)) {
            throw new \InvalidArgumentException('non-nullable collegial_listings_enabled cannot be null');
        }
        $this->container['collegial_listings_enabled'] = $collegial_listings_enabled;

        return $this;
    }

    /**
     * Gets collegial_listings_authorised_until
     *
     * @return \DateTime|null
     */
    public function getCollegialListingsAuthorisedUntil()
    {
        return $this->container['collegial_listings_authorised_until'];
    }

    /**
     * Sets collegial_listings_authorised_until
     *
     * @param \DateTime|null $collegial_listings_authorised_until collegial_listings_authorised_until
     *
     * @return self
     */
    public function setCollegialListingsAuthorisedUntil($collegial_listings_authorised_until)
    {
        if (is_null($collegial_listings_authorised_until)) {
            throw new \InvalidArgumentException('non-nullable collegial_listings_authorised_until cannot be null');
        }
        $this->container['collegial_listings_authorised_until'] = $collegial_listings_authorised_until;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT,
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
