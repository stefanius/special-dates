<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

class GardenGuyDay extends AbstractSpecialDate
{
    protected function generate()
    {
        $this->description = 'Hoveniersmaandag';

        $timestamp       = strtotime('third monday', mktime(0, 0, 0, 7, 0, $this->year));
        $date = new \DateTime();
        $date->setTimestamp($timestamp);

        $this->setupDateTimeObjects($date);
    }
}
