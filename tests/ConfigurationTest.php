<?php

declare(strict_types=1);

namespace Brixion\Kolibri\Tests;

use Brixion\Kolibri\Configuration;
use PHPUnit\Framework\TestCase;

final class ConfigurationTest extends TestCase
{
    public function testSandboxIsDefaultHost(): void
    {
        $configuration = new Configuration();

        self::assertSame(Configuration::HOST_SANDBOX, $configuration->getHost());
    }

    public function testLiveFactory(): void
    {
        $configuration = Configuration::live();

        self::assertSame(Configuration::HOST_LIVE, $configuration->getHost());
    }

    public function testSandboxFactory(): void
    {
        $configuration = Configuration::sandbox();

        self::assertSame(Configuration::HOST_SANDBOX, $configuration->getHost());
    }
}
