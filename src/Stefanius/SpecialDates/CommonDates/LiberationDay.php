<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class LiberationDay
 * @package Stefanius\SpecialDates\CommonDates
 */
class LiberationDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Bevrijdingsdag';

        if ($this->year > 1945) {
            $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-5-5');
            $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-5-5');
            $this->totalLength = 1;
            $this->valid = true;
        } else {
            $this->valid = false;
        }
    }
}
