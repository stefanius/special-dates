<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class WorldPiDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Wereld Pi dag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 3, 14));

        $this->totalLength = 1;
    }
}
