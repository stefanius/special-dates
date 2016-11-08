<?php

namespace Tests\CommonDates;

use Stefanius\SpecialDates\CommonDates\FathersDay;
use Stefanius\SpecialDates\Tests\AbstractDateTester;

class FathersDayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new FathersDay($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Vaderdag';

        return [
            [2017, $description, true, false, 1, '2017-06-18', '2017-06-18'],
            [2018, $description, true, false, 1, '2018-06-17', '2018-06-17'],
            [2019, $description, true, false, 1, '2019-06-16', '2019-06-16'],
        ];
    }
}
