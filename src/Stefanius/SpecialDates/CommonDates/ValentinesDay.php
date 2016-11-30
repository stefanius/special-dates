<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class ValentinesDay
 *
 * @package Stefanius\SpecialDates\CommonDates
 */
class ValentinesDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Valentijnsdag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 2, 14));
    }
}
