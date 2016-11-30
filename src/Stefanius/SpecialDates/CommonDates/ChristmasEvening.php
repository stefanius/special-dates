<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class ChristmasEvening
 *
 * @package Stefanius\SpecialDates\CommonDates
 */
class ChristmasEvening extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Kerstavond';
        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-24');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-24');
        $this->totalLength = 1;
    }
}
