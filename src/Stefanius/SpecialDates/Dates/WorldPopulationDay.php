<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class WorldPopulationDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class WorldPopulationDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Wereldbevolkingsdag (UNFPA)';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 7, 11));
    }
}
