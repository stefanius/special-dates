<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class HumanDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Wereldhumanismedag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 21));
    }
}
