<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class NewYearsDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Nieuwjaarsdag';

        $this->startDate   = \DateTime::createFromFormat('Y-m-d', $this->year . '-1-1');
        $this->endDate     = \DateTime::createFromFormat('Y-m-d', $this->year . '-1-1');
        $this->totalLength = 1;
    }
}
