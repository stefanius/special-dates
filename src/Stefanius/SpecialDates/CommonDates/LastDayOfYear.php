<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class LastDayOfYear
 *
 * @package Stefanius\SpecialDates\CommonDates
 */
class LastDayOfYear extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Oudjaarsdag';

        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-31');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-12-31');
        $this->totalLength = 1;
    }
}
