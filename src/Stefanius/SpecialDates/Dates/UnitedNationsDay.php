<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class UnitedNationsDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class UnitedNationsDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Dag van het Handvest van de Verenigde Naties';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 26));
    }
}
