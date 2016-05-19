<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class ChilderensDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Internationale Dag van de Kinderen';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 1));
    }
}
