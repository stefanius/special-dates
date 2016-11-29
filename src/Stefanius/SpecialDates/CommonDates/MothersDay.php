<?php

namespace Stefanius\SpecialDates\CommonDates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class MothersDay
 *
 * @package Stefanius\SpecialDates\CommonDates
 */
class MothersDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Moederdag';

        if ($this->year >= 1908) {
            $timestamp       = strtotime('second sunday', mktime(0, 0, 0, 5, 0, $this->year));
            $date = new \DateTime();
            $date->setTimestamp($timestamp);

            $this->setupDateTimeObjects($date);
        } else {
            $this->valid = false;
        }
    }
}
