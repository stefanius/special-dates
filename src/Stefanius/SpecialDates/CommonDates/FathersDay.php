<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class FathersDay
 *
 * @package Stefanius\SpecialDates\CommonDates
 */
class FathersDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Vaderdag';

        if ($this->year >= 1948) {
            $timestamp       = strtotime('third sunday', mktime(0, 0, 0, 6, 0, $this->year));
            $date = new \DateTime();
            $date->setTimestamp($timestamp);

            $this->setupDateTimeObjects($date);
        } else {
            $this->valid = false;
        }
    }
}
