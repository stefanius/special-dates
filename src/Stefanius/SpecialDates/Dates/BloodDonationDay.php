<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class BloodDonationDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Bloeddonordag';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 14));
    }
}
