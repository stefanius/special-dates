<?php

namespace Tests\CommonDates;

use Stefanius\SpecialDates\CommonDates\FirstEasterDay;
use Stefanius\SpecialDates\Tests\AbstractDateTester;

class FirstEasterDayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new FirstEasterDay($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Eerste paasdag';

        return [
            [1991, $description, true, true, 1, '1991-03-31', '1991-03-31'],
        ];
    }
}
