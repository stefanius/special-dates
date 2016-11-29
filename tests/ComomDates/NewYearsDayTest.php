<?php

namespace Tests\CommonDates;

use Stefanius\SpecialDates\CommonDates\NewYearsDay;
use Stefanius\SpecialDates\Tests\AbstractDateTester;

class NewYearsDayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new NewYearsDay($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Nieuwjaarsdag';

        return [
            [1900, $description, true, true, 1, '1900-01-01', '1900-01-01'],
            [2000, $description, true, true, 1, '2000-01-01', '2000-01-01'],
            [2010, $description, true, true, 1, '2010-01-01', '2010-01-01'],
            [2017, $description, true, true, 1, '2017-01-01', '2017-01-01'],
            [2018, $description, true, true, 1, '2018-01-01', '2018-01-01'],
            [2019, $description, true, true, 1, '2019-01-01', '2019-01-01'],
        ];
    }
}
