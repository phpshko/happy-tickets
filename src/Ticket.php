<?php

namespace App;

class Ticket
{
    private string $number;

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    public function isHappy(): bool
    {
        $middle = strlen($this->number) / 2;

        $firstPart = substr($this->number, 0, $middle);
        $endPart = substr($this->number, $middle);

        return $this->getSum($firstPart) === $this->getSum($endPart);
    }

    private function getSum(string $number): int
    {
        $sum = $number;

        while (strlen($sum) > 1) {
            $sum = array_sum(str_split($sum));
        }

        return (int) $sum;
    }
}
