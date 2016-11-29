<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class ChildLabourDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class ChildLabourDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Internationale Dag tegen Kinderarbeid';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 12));
    }
}
