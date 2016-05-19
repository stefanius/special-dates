<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class DutchNeighboursDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Burendag';

        if ($this->year >= 2006) {
            $timestamp       = strtotime('fourth saturday', mktime(0, 0, 0, 9, 0, $this->year));
            $this->startDate = new \DateTime();
            $this->startDate->setTimestamp($timestamp);
            $this->endDate = new \DateTime();
            $this->endDate->setTimestamp($timestamp);
            $this->totalLength = 1;
        } else {
            $this->valid = false;
        }
    }
}
