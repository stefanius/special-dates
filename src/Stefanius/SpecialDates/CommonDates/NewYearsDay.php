<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class NewYearsDay
 *
 * @package Stefanius\SpecialDates\CommonDates
 */
class NewYearsDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Nieuwjaarsdag';

        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-1-1');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-1-1');
        $this->totalLength = 1;
        $this->bankHoliday = true;
    }
}
