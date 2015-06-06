<?php

namespace Stef\SpecialDates\Dates;

use Stef\SpecialDates\SDK\AbstractSpecialDate;

class AgressionDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Internationale Dag van de kinderen die slachtoffer zijn van agressie';

        $this->setupDateTimeObjects($this->generateDateTime($this->year, 6, 1));
    }
}
