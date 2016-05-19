<?php

use Stefanius\SpecialDates\Dates\DevelopersDay;
use Stefanius\SpecialDates\Tests\AbstractDateTester;

class DevelopersDayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new DevelopersDay($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Programmeursdag';
        return [
            [1900, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1940, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1945, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1950, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1989, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [2000, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [2006, $description, true, false, 1, '2006-09-13', '2006-09-13'],
            [2015, $description, true, false, 1, '2015-09-13', '2015-09-13'],
            [2050, $description, true, false, 1, '2050-09-13', '2050-09-13'],
        ];
    }
}
