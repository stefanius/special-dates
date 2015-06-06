<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class UnitedNationsDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Dag van het Handvest van de Verenigde Naties';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 26));
    }
}
