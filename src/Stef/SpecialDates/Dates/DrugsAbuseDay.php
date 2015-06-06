<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class DrugsAbuseDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Internationale Dag ter bestrijding van misbruik van en onwettige handel in drugs';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 26));
    }
}
