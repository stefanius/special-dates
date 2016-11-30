<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class TouretteDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class TouretteDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Tourettedag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 7));
    }
}
