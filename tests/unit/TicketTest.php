<?php

use App\Ticket;

class TicketTest extends \Codeception\Test\Unit
{
    /**
     * @dataProvider ticketProvider
     *
     * @param string $number
     * @param bool   $isHappy
     */
    public function testTicket(string $number, bool $isHappy): void
    {
        $ticket = new Ticket($number);

        self::assertEquals($ticket->isHappy(), $isHappy);
    }

    public function ticketProvider(): array
    {
        return [
            ['001001', true],
            ['123456', true],
            ['325685', true],
            ['525768', true],

            ['123457', false],
            ['325686', false],
            ['525769', false],
        ];
    }
}
