<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class DutchSecretaryDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class DutchSecretaryDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
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
