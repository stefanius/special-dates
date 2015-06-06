<?php

namespace Stef\SpecialDates\DateParser;

use Stef\SpecialDates\Dates\AgressionDay;
use Stef\SpecialDates\Dates\BloodDonationDay;
use Stef\SpecialDates\Dates\ChilderensDay;
use Stef\SpecialDates\Dates\ChildLabourDay;
use Stef\SpecialDates\Dates\ChristmasEvening;
use Stef\SpecialDates\Dates\DayOfConstruction;
use Stef\SpecialDates\Dates\DessertDay;
use Stef\SpecialDates\Dates\DevelopersDay;
use Stef\SpecialDates\Dates\DrugsAbuseDay;
use Stef\SpecialDates\Dates\DutchNeighboursDay;
use Stef\SpecialDates\Dates\DutchPancakeDay;
use Stef\SpecialDates\Dates\DutchSecretaryDay;
use Stef\SpecialDates\Dates\DutchVeteransDay;
use Stef\SpecialDates\Dates\EnvironmentDay;
use Stef\SpecialDates\Dates\FathersDay;
use Stef\SpecialDates\Dates\FirstChristmasDay;
use Stef\SpecialDates\Dates\HumanDay;
use Stef\SpecialDates\Dates\LastDayOfYear;
use Stef\SpecialDates\Dates\LiberationDay;
use Stef\SpecialDates\Dates\NewYearsDay;
use Stef\SpecialDates\Dates\PeaceAndPreyDay;
use Stef\SpecialDates\Dates\PinkSaturday;
use Stef\SpecialDates\Dates\RefugeeDay;
use Stef\SpecialDates\Dates\SecondChristmasDay;
use Stef\SpecialDates\Dates\SeriousRequest;
use Stef\SpecialDates\Dates\TortureDay;
use Stef\SpecialDates\Dates\TouretteDay;
use Stef\SpecialDates\Dates\UnitedNationsDay;
use Stef\SpecialDates\Dates\ValentinesDay;
use Stef\SpecialDates\Dates\WorldOceanDay;
use Stef\SpecialDates\Dates\WorldPiDay;
use Stef\SpecialDates\SDK\SpecialDateInterface;

class AbstractParser
{
    public function getAllDates($year)
    {
        $array =  [
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
            new FathersDay($year),
            new DayOfConstruction($year),
            new PinkSaturday($year),
            new ChilderensDay($year),
            new AgressionDay($year),
            new EnvironmentDay($year),
            new TouretteDay($year),
            new ChildLabourDay($year),
            new BloodDonationDay($year),
            new DessertDay($year),
            new DrugsAbuseDay($year),
            new DutchVeteransDay($year),
            new HumanDay($year),
            new PeaceAndPreyDay($year),
            new RefugeeDay($year),
            new TortureDay($year),
            new UnitedNationsDay($year),
            new WorldOceanDay($year),
        ];

        $return = [];
        $i = 0;

        /**
         * @var $item SpecialDateInterface
         */
        foreach ($array as $item) {
            $key = $item->getStartDate()->format('Y') . '-' . $item->getStartDate()->format('m') . '-' . $item->getStartDate()->format('d') . '.' . $i;
            $i++;
            $return[$key] = $item;
        }

        ksort($return);

        return $return;
    }
}