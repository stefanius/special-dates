<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class SystemEngineerDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Systeembeheerdersdag';

        if ($this->year >= 2000) {
            $timestamp       = strtotime('last friday', mktime(0, 0, 0, 7, 0, $this->year));
            $date = new \DateTime();
            $date->setTimestamp($timestamp);

            $this->setupDateTimeObjects($date);
        } else {
            $this->valid = false;
        }
    }
}
