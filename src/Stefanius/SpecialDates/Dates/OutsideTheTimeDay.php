<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class OutsideTheTimeDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Dag Buiten de Tijd';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 7, 25));
    }
}
