<?php

namespace Stef\SpecialDates\DateParser;

use Stef\SpecialDates\Dates\ChristmasEvening;
use Stef\SpecialDates\Dates\DutchPancakeDay;
use Stef\SpecialDates\Dates\FirstChristmasDay;
use Stef\SpecialDates\Dates\LastDayOfYear;
use Stef\SpecialDates\Dates\NewYearsDay;
use Stef\SpecialDates\Dates\SecondChristmasDay;
use Stef\SpecialDates\Dates\WorldPiDay;

class AbstractParser
{
    public function getAllDates($year)
    {
        return [
            new NewYearsDay($year),
            new DutchPancakeDay($year),
            new WorldPiDay($year),
            new ChristmasEvening($year),
            new FirstChristmasDay($year),
            new SecondChristmasDay($year),
            new LastDayOfYear($year),
        ];
    }
}