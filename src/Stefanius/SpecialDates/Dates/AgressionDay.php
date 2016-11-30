<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class AgressionDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class AgressionDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Internationale Dag van de kinderen die slachtoffer zijn van agressie';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 1));
    }
}
