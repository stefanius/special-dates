<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class DayOfConstruction extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Dag van de Bouw';

        if ($this->year >= 2009) {
            $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 6));
        } else if ($this->year >= 2011) {
            $this->setupDateTimeObjects($this->generateDateTime($this->year, 5, 28));
        } else if ($this->year >= 2009) {
            $timestamp       = strtotime('first saturday', mktime(0, 0, 0, 6, 0, $this->year));
            $date = new \DateTime();
            $date->setTimestamp($timestamp);

            $this->setupDateTimeObjects($date);
        } else {
            $this->valid = false;
        }
    }
}
