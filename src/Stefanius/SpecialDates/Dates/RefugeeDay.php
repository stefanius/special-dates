<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class RefugeeDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Wereldvluchtelingendag';

        if ($this->year >= 2000) {
            $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 20));
            $this->valid = true;
        } else {
            $this->valid = false;
        }
    }
}
