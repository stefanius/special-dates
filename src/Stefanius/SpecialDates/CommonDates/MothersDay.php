<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class MothersDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Moederdag';

        if ($this->year >= 1908) {
            $timestamp       = strtotime('second sunday', mktime(0, 0, 0, 5, 0, $this->year));
            $date = new \DateTime();
            $date->setTimestamp($timestamp);

            $this->setupDateTimeObjects($date);
        } else {
            $this->valid = false;
        }
    }
}
