<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class SeriousRequest extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = '3FM Serious Request';

        if ($this->year >= 2004) {
            $this->setupDateTimeObjects($this->generateDateTime($this->year, 12, 19), $this->generateDateTime($this->year, 12, 24));
            $this->valid = true;
        } else {
            $this->valid = false;
        }
    }
}
