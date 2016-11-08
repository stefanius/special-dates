<?php

namespace Tests\CommonDates;

use Stefanius\SpecialDates\CommonDates\SecondEasterDay;
use Stefanius\SpecialDates\Tests\AbstractDateTester;

class SecondEasterDayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new SecondEasterDay($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Tweede paasdag';

        return [
            [1991, $description, true, true, 1, '1991-04-01', '1991-04-01'],
        ];
    }
}
