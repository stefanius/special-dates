<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class WorldOceanDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class WorldOceanDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Wereld Oceanen Dag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 8));
    }
}
