<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class SecondChristmasDay
 *
 * @package Stefanius\SpecialDates\CommonDates
 */
class SecondChristmasDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Tweede Kerstdag';

        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-26');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-26');
        $this->totalLength = 1;
        $this->bankHoliday = true;
    }
}
