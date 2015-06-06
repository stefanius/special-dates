<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class DessertDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Werelddag voor de bestrijding van woestijnvorming en droogte';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 17));
    }
}
