<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class PeaceAndPreyDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class PeaceAndPreyDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Dag van de wereldvrede en het gebed';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 21));
    }
}
