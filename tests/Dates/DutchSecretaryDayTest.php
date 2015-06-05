<?php

use Stef\SpecialDates\Dates\DutchSecretaryDay;
use Stef\SpecialDates\Tests\AbstractDateTester;

class DutchSecretaryDayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new DutchSecretaryDay($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Secretaressedag';
        return [
            [1900, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1940, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1945, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1950, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1989, $description, true, false, 1, '1989-04-20', '1989-04-20'],
            [2000, $description, true, false, 1, '2000-04-20', '2000-04-20'],
            [2015, $description, true, false, 1, '2015-04-16', '2015-04-16'],
            [2050, $description, true, false, 1, '2050-04-21', '2050-04-21'],
        ];
    }
}
