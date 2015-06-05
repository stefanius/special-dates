<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class ValentinesDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Valentijnsdag';
        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-02-14');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-02-14');
        $this->totalLength = 1;
    }
}
