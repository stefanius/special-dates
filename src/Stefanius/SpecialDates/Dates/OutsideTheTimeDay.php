<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class OutsideTheTimeDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class OutsideTheTimeDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Dag Buiten de Tijd';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 7, 25));
    }
}
