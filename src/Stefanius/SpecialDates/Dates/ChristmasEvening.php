<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class ChristmasEvening extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Kerstavond';
        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-24');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-24');
        $this->totalLength = 1;
    }
}
