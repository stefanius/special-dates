<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class SeriousRequest extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = '3FM Serious Request';

        if ($this->year >= 2004) {
            $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-18');
            $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-24');
            $this->totalLength = 6;
            $this->valid = true;
        } else {
            $this->valid = false;
        }
    }
}
