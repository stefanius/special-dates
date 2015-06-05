<?php

namespace Stef\SpecialDates\DateParser;

use Stef\SpecialDates\Dates\ChristmasEvening;
use Stef\SpecialDates\Dates\DevelopersDay;
use Stef\SpecialDates\Dates\DutchNeighboursDay;
use Stef\SpecialDates\Dates\DutchPancakeDay;
use Stef\SpecialDates\Dates\DutchSecretaryDay;
use Stef\SpecialDates\Dates\FirstChristmasDay;
use Stef\SpecialDates\Dates\LastDayOfYear;
use Stef\SpecialDates\Dates\LiberationDay;
use Stef\SpecialDates\Dates\NewYearsDay;
use Stef\SpecialDates\Dates\SecondChristmasDay;
use Stef\SpecialDates\Dates\SeriousRequest;
use Stef\SpecialDates\Dates\ValentinesDay;
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
            new DutchSecretaryDay($year),
            new LiberationDay($year),
            new DutchNeighboursDay($year),
            new DevelopersDay($year),
            new ValentinesDay($year),
            new SeriousRequest($year),
        ];
    }
}