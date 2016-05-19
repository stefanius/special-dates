<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class EnvironmentDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Wereldmilieudag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 5));
    }
}
