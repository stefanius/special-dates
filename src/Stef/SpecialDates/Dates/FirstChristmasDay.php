<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class FirstChristmasDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Eerste Kerstdag';

        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-25');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-25');
        $this->totalLength = 1;
    }
}
