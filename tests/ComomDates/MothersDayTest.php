<?php

namespace Tests\CommonDates;

use Stefanius\SpecialDates\CommonDates\MothersDay;
use Stefanius\SpecialDates\Tests\AbstractDateTester;

class MothersDayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new MothersDay($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Moederdag';

        return [
            [2016, $description, true, false, 1, '2016-05-08', '2016-05-08'],
            [2017, $description, true, false, 1, '2017-05-14', '2017-05-14'],
            [2018, $description, true, false, 1, '2018-05-13', '2018-05-13'],
        ];
    }
}
