<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class AgressionDay
 *
 * @package Stefanius\SpecialDates\Dates
 */
class StartCarnavalSeason extends AbstractSpecialDate
{
    /**
     * Generate the special date
     */
    protected function generate()
    {
        $this->description = 'Start Nederlands carnavalseizoen';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 11, 11));
    }
}
