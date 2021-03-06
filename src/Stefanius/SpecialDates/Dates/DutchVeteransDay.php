<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class DutchVeteransDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class DutchVeteransDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Nederlandse Veteranendag';

        if ($this->year === 2008) {
            $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 28));
        } elseif ($this->year >= 2005 && $this->year < 2009) {
            $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 29));
        } elseif ($this->year >= 2009) {
            $timestamp       = strtotime('last saturday', mktime(0, 0, 0, 6, 0, $this->year));
            $date = new \DateTime();
            $date->setTimestamp($timestamp);

            $this->setupDateTimeObjects($date);
        }
    }
}
