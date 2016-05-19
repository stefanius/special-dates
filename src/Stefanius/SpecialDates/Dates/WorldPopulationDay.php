<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class WorldPopulationDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Wereldbevolkingsdag (UNFPA)';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 7, 11));
    }
}
