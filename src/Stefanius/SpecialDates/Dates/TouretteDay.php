<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class TouretteDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Tourettedag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 7));
    }
}
