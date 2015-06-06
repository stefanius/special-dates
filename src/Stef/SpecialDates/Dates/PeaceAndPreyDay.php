<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class PeaceAndPreyDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Dag van de wereldvrede en het gebed';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 21));
    }
}
