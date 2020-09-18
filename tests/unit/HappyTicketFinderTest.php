<?php

namespace Tests\unit;

use App\HappyTicketFinder;

class HappyTicketFinderTest extends \Codeception\Test\Unit
{
    /**
     * @dataProvider ticketProvider
     *
     * @param string $first
     * @param string $end
     * @param        $expectedCount
     */
    public function testRanges($first, $end, $expectedCount): void
    {
        $finder = new HappyTicketFinder();

        self::assertEquals($finder->getCount($first, $end), $expectedCount);
        self::assertEquals($finder->getCount((int) $first, (int) $end), $expectedCount);
    }

    public function ticketProvider(): array
    {
        return [
            ['001001', '001001', 1],
            ['001001', '001003', 1],
            ['525768', '525786', 3],
        ];
    }
}
