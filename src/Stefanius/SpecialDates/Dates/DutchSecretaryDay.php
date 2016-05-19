<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class DutchSecretaryDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Secretaressedag';

        if ($this->year >= 1989) {
            $timestamp       = strtotime('third thursday', mktime(0, 0, 0, 4, 0, $this->year));
            $this->startDate = new \DateTime();
            $this->startDate->setTimestamp($timestamp);
            $this->endDate = new \DateTime();
            $this->endDate->setTimestamp($timestamp);
            $this->totalLength = 1;
        } else {
            $this->valid = false;
        }
    }
}
