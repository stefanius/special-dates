<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class HumanDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class HumanDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Wereldhumanismedag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 21));
    }
}
