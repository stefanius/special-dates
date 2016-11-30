<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class WorldPiDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class WorldPiDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Wereld Pi dag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 3, 14));

        $this->totalLength = 1;
    }
}
