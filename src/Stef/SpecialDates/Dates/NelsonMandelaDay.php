<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class NelsonMandelaDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Nelson Mandela Dag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 7, 18));
    }
}
