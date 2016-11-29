<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class SecondChristmasDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Tweede Kerstdag';

        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-26');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-26');
        $this->totalLength = 1;
        $this->bankHoliday = true;
    }
}
