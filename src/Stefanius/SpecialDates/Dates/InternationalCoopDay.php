<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class InternationalCoopDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class InternationalCoopDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Internationale Dag van de Coöperatieven';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 7, 7));
    }
}
