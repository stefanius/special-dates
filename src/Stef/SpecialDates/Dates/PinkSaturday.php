<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class PinkSaturday extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Roze Zaterdag';

        if ($this->year >= 1977) {
            $timestamp       = strtotime('fourth saturday', mktime(0, 0, 0, 6, 0, $this->year));
            $date = new \DateTime();
            $date->setTimestamp($timestamp);

            $this->setupDateTimeObjects($date);
        } else {
            $this->valid = false;
        }
    }
}
