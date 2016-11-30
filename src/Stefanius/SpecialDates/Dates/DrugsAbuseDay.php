<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class DrugsAbuseDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class DrugsAbuseDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Internationale Dag ter bestrijding van misbruik van en onwettige handel in drugs';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 26));
    }
}
