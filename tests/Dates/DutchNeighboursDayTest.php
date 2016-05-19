<?php

use Stefanius\SpecialDates\Dates\DutchNeighboursDay;
use Stefanius\SpecialDates\Tests\AbstractDateTester;

class DutchNeighboursDayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new DutchNeighboursDay($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Burendag';
        return [
            [1900, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1940, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1945, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1950, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1989, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [2000, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [2006, $description, true, false, 1, '2006-09-23', '2006-09-23'],
            [2015, $description, true, false, 1, '2015-09-26', '2015-09-26'],
            [2050, $description, true, false, 1, '2050-09-24', '2050-09-24'],
        ];
    }
}
