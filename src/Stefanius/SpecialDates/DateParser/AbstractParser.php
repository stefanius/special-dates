<?php

namespace Stefanius\SpecialDates\DateParser;

use Stefanius\SpecialDates\Dates\AgressionDay;
use Stefanius\SpecialDates\Dates\BloodDonationDay;
use Stefanius\SpecialDates\Dates\ChilderensDay;
use Stefanius\SpecialDates\Dates\ChildLabourDay;
use Stefanius\SpecialDates\Dates\ChristmasEvening;
use Stefanius\SpecialDates\Dates\DayOfConstruction;
use Stefanius\SpecialDates\Dates\DessertDay;
use Stefanius\SpecialDates\Dates\DevelopersDay;
use Stefanius\SpecialDates\Dates\DrugsAbuseDay;
use Stefanius\SpecialDates\Dates\DutchNeighboursDay;
use Stefanius\SpecialDates\Dates\DutchPancakeDay;
use Stefanius\SpecialDates\Dates\DutchSecretaryDay;
use Stefanius\SpecialDates\Dates\DutchVeteransDay;
use Stefanius\SpecialDates\Dates\EnvironmentDay;
use Stefanius\SpecialDates\Dates\FathersDay;
use Stefanius\SpecialDates\Dates\FirstChristmasDay;
use Stefanius\SpecialDates\Dates\GardenGuyDay;
use Stefanius\SpecialDates\Dates\HumanDay;
use Stefanius\SpecialDates\Dates\InternationalCoopDay;
use Stefanius\SpecialDates\Dates\LastDayOfYear;
use Stefanius\SpecialDates\Dates\LiberationDay;
use Stefanius\SpecialDates\Dates\NelsonMandelaDay;
use Stefanius\SpecialDates\Dates\NewYearsDay;
use Stefanius\SpecialDates\Dates\OutsideTheTimeDay;
use Stefanius\SpecialDates\Dates\PeaceAndPreyDay;
use Stefanius\SpecialDates\Dates\PinkSaturday;
use Stefanius\SpecialDates\Dates\RefugeeDay;
use Stefanius\SpecialDates\Dates\SecondChristmasDay;
use Stefanius\SpecialDates\Dates\SeriousRequest;
use Stefanius\SpecialDates\Dates\SystemEngineerDay;
use Stefanius\SpecialDates\Dates\TortureDay;
use Stefanius\SpecialDates\Dates\TouretteDay;
use Stefanius\SpecialDates\Dates\UnitedNationsDay;
use Stefanius\SpecialDates\Dates\ValentinesDay;
use Stefanius\SpecialDates\Dates\WorldOceanDay;
use Stefanius\SpecialDates\Dates\WorldPiDay;
use Stefanius\SpecialDates\Dates\WorldPopulationDay;
use Stefanius\SpecialDates\SDK\SpecialDateInterface;

class AbstractParser
{
    public function getAllDates($year)
    {
        $array = [
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
            new InternationalCoopDay($year),
            new NelsonMandelaDay($year),
            new OutsideTheTimeDay($year),
            new SystemEngineerDay($year),
            new GardenGuyDay($year),
            new WorldPopulationDay($year),
        ];

        $return = [];
        $i = 0;

        /**
         * @var SpecialDateInterface $item
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