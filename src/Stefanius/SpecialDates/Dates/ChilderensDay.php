<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class ChilderensDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class ChilderensDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Internationale Dag van de Kinderen';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 1));
    }
}
