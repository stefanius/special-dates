<?php

use Stefanius\SpecialDates\Dates\ValentinesDay;
use Stefanius\SpecialDates\Tests\AbstractDateTester;

class ValentinesDayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new ValentinesDay($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Valentijnsdag';
        return [
            [1900, $description, true, false, 1, '1900-02-14', '1900-02-14'],
            [1940, $description, true, false, 1, '1940-02-14', '1940-02-14'],
            [1945, $description, true, false, 1, '1945-02-14', '1945-02-14'],
            [1950, $description, true, false, 1, '1950-02-14', '1950-02-14'],
            [1989, $description, true, false, 1, '1989-02-14', '1989-02-14'],
            [2000, $description, true, false, 1, '2000-02-14', '2000-02-14'],
            [2006, $description, true, false, 1, '2006-02-14', '2006-02-14'],
            [2015, $description, true, false, 1, '2015-02-14', '2015-02-14'],
            [2050, $description, true, false, 1, '2050-02-14', '2050-02-14'],
        ];
    }
}
