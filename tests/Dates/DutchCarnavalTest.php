<?php

use Stefanius\SpecialDates\Dates\DutchCarnaval;
use Stefanius\SpecialDates\Tests\AbstractDateTester;

class DutchCarnavalTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new DutchCarnaval($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Carnaval';
        return [
            [2016, $description, true, false, 3, '2016-02-07', '2016-02-09'],
            [2017, $description, true, false, 3, '2017-02-26', '2017-02-28'],
            [2018, $description, true, false, 3, '2018-02-11', '2018-02-13'],
            [2019, $description, true, false, 3, '2019-03-03', '2019-03-05'],
            [2020, $description, true, false, 3, '2020-02-23', '2020-02-25'],
        ];
    }
}
