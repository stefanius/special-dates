<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class WorldPiDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Wereld Pi dag';

        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-3-14');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-3-14');
        $this->totalLength = 1;
    }
}
