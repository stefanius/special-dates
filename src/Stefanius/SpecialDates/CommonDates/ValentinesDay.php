<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class ValentinesDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Valentijnsdag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 2, 14));
    }
}
