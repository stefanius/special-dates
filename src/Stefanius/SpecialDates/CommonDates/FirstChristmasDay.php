<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class FirstChristmasDay
 *
 * @package Stefanius\SpecialDates\CommonDates
 */
class FirstChristmasDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Eerste Kerstdag';

        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-25');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-25');
        $this->totalLength = 1;
        $this->bankHoliday = true;
    }
}
