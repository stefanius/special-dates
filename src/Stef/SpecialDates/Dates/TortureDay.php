<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class TortureDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Internationale Dag van de Verenigde Naties voor slachtoffers van foltering';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 26));
    }
}