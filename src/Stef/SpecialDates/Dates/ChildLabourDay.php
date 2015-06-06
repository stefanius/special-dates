<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class ChildLabourDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Internationale Dag tegen Kinderarbeid';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 12));
    }
}
