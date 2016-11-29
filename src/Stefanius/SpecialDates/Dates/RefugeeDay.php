<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class RefugeeDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class RefugeeDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
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
