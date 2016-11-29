<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class NelsonMandelaDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class NelsonMandelaDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Nelson Mandela Dag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 7, 18));
    }
}
