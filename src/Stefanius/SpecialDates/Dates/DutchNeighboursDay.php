<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class DutchNeighboursDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class DutchNeighboursDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
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
