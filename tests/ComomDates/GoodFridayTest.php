<?php

namespace Tests\CommonDates;

use Stefanius\SpecialDates\CommonDates\GoodFriday;
use Stefanius\SpecialDates\Tests\AbstractDateTester;

class GoodFridayTest extends AbstractDateTester
{
    /**
     * {@inheritdoc}
     */
    protected function createDateObject($year)
    {
        return new GoodFriday($year);
    }

    /**
     * {@inheritdoc}
     */
    public function provider()
    {
        $description = 'Goede vrijdag';

        return [
            [1991, $description, true, true, 1, '1991-03-29', '1991-03-29'],
        ];
    }
}
