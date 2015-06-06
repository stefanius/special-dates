<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class FathersDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Vaderdag';

        if ($this->year >= 2009) {
            $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 19));
        } else if ($this->year >= 1909) {
            $timestamp       = strtotime('third sunday', mktime(0, 0, 0, 6, 0, $this->year));
            $date = new \DateTime();
            $date->setTimestamp($timestamp);

            $this->setupDateTimeObjects($date);
        } else {
            $this->valid = false;
        }
    }
}
