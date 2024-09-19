<?php

declare(strict_types=1);

namespace Arekaev\DPD\Tests\Unit;

use Arekaev\DPD\Tests\TestCase;
use Arekaev\DPD\Providers\DPDServiceProvider;

class ServiceProviderTest extends TestCase
{
    public function testServiceProvider(): void
    {
        $service = new DPDServiceProvider($this->app);
        $this->assertNull($service->register());
        $this->assertNull($service->boot());
    }
}
