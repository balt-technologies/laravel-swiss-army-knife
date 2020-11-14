<?php

namespace Tests\Helpers;

use Balt\Helpers\ArrayHelper;
use PHPUnit\Framework\TestCase;

class ArrayHelperTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_return_non_empty_values()
    {

        $testArray = [
            'a' => 1,
            'b' => null
        ];

        $outputArray = ArrayHelper::withoutNull($testArray);

        self::assertCount(1, $outputArray);
        self::assertArrayHasKey('a', $outputArray);
        self::assertArrayNotHasKey('b', $outputArray);

    }

}