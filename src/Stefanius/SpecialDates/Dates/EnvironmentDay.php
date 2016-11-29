<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class EnvironmentDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class EnvironmentDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Wereldmilieudag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 5));
    }
}
