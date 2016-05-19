<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class WorldOceanDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Wereld Oceanen Dag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 8));
    }
}
