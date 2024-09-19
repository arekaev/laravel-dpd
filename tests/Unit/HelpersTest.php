<?php

declare(strict_types=1);

namespace Arekaev\DPD\Tests\Unit;

use Arekaev\DPD\Tests\TestCase;
use Arekaev\DPD\Helpers\DPDHelper;

class HelpersTest extends TestCase
{
    public function testRemoveNullValues(): void
    {
        $haystack = [
            'arrayOne'   => [
                'one'    => 'text',
                'two'    => null
            ],
            'arrayTwo'   => 'text',
            'arrayThree' => [
                'one'    => ''
            ]
        ];
        $result = [
            'arrayOne' => [
                'one'  => 'text',
            ],
            'arrayTwo' => 'text',
        ];
        $clean = DPDHelper::removeNullValues($haystack);
        $this->assertEqualsCanonicalizing($result, $clean);
    }
}
