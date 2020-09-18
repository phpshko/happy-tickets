<?php

namespace App;

class HappyTicketFinder
{
    public const DEFAULT_TICKET_LENGTH = 6;

    public function getCount(int $first, int $end, int $ticketLength = self::DEFAULT_TICKET_LENGTH): int
    {
        $countHappyTickets = 0;

        for ($i = $first; $i <= $end; $i++) {
            $ticketNumber = str_pad($i, $ticketLength, '0', STR_PAD_LEFT);
            $ticket = new Ticket($ticketNumber);

            if ($ticket->isHappy()) {
                $countHappyTickets++;
            }
        }

        return $countHappyTickets;
    }
}
