<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class DessertDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class DessertDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Werelddag voor de bestrijding van woestijnvorming en droogte';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 17));
    }
}
