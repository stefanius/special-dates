<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class DevelopersDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Programmeursdag';

        if ($this->year >= 2002) {
            if ($this->year % 4 === 0) {
                $this->startDate = new \DateTime($this->year . '-09-12');
                $this->endDate = new \DateTime($this->year . '-09-12');
            } else {
                $this->startDate = new \DateTime($this->year . '-09-13');
                $this->endDate = new \DateTime($this->year . '-09-13');
            }

            $this->totalLength = 1;
        } else {
            $this->valid = false;
        }
    }
}
