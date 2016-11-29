<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class BloodDonationDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class BloodDonationDay extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Bloeddonordag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 14));
    }
}
