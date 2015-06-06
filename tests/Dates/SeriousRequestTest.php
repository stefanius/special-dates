<?php

use Stef\SpecialDates\Dates\SeriousRequest;
use Stef\SpecialDates\Tests\AbstractDateTester;

class SeriousRequestTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new SeriousRequest($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = '3FM Serious Request';
        return [
            [1900, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1940, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1945, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1950, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [1989, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [2000, $description, false, false, 0, '0001-01-01', '0001-01-01'],
            [2004, $description, true, false, 6, '2004-12-19', '2004-12-24'],
            [2006, $description, true, false, 6, '2006-12-19', '2006-12-24'],
            [2015, $description, true, false, 6, '2015-12-19', '2015-12-24'],
            [2050, $description, true, false, 6, '2050-12-19', '2050-12-24'],
        ];
    }
}
