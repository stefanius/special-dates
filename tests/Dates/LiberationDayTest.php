<?php

use Stef\SpecialDates\Dates\LiberationDay;
use Stef\SpecialDates\SDK\SpecialDateInterface;
use Stef\SpecialDates\Tests\AbstractDateTester;

class LiberationDayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new LiberationDay($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Bevrijdingsdag';
        return [
            [1900, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1940, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1945, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1950, $description, true, false, 1, '1950-05-05', '1950-05-05'],
            [2000, $description, true, false, 1, '2000-05-05', '2000-05-05'],
            [2050, $description, true, false, 1, '2050-05-05', '2050-05-05'],
        ];
    }
}
