<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class InternationalCoopDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Internationale Dag van de Coöperatieven';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 7, 7));
    }
}
