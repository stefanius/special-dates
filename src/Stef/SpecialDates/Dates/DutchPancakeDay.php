<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class DutchPancakeDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Pannenkoekendag';

        if ($this->year >= 2007) {
            if ($this->year === 2013) {
                $this->startDate = new \DateTime('2013-03-15');
                $this->endDate = new \DateTime('2013-03-15');
            } else {
                $timestamp       = strtotime('last friday', mktime(0, 0, 0, 4, 0, $this->year));
                $this->startDate = new \DateTime();
                $this->startDate->setTimestamp($timestamp);
                $this->endDate = new \DateTime();
                $this->endDate->setTimestamp($timestamp);
            }

            $this->totalLength = 1;
        } else {
            $this->valid = false;
        }
    }
}
