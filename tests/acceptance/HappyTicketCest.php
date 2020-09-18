<?php

class HappyTicketCest
{
    /**
     * @dataProvider validTicketProvider
     *
     * @param AcceptanceTester     $I
     * @param \Codeception\Example $example
     */
    public function validTest(AcceptanceTester $I, \Codeception\Example $example): void
    {
        $I->amOnPage('/?first=' . $example['first'] . '&end=' . $example['end']);
        $I->see($example['count']);
    }

    /**
     * @dataProvider invalidTicketProvider
     *
     * @param AcceptanceTester     $I
     * @param \Codeception\Example $example
     */
    public function invalidTest(AcceptanceTester $I, \Codeception\Example $example): void
    {
        $I->amOnPage('/?first=' . $example['first'] . '&end=' . $example['end']);
        $I->see('Wrong params');
    }

    public function validTicketProvider(): array
    {
        return [
            ['first' => '001001', 'end' => '001001', 'count' => 1],
            ['first' => '001001', 'end' => '001003', 'count' => 1],
            ['first' => '525768', 'end' => '525786', 'count' => 3],
        ];
    }

    public function invalidTicketProvider(): array
    {
        return [
            ['first' => '0', 'end' => '100'],
            ['first' => '1', 'end' => '9999999'],
        ];
    }
}
