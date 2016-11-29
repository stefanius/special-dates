<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class TortureDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class TortureDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Internationale Dag van de Verenigde Naties voor slachtoffers van foltering';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 26));
    }
}
