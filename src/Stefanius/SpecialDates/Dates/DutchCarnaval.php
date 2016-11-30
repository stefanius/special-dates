<?php

namespace Stefanius\SpecialDates\Dates;

use Stefanius\SpecialDates\SDK\AbstractSpecialDate;

/**
 * Class FirstEasterDay
 * see: https://nl.wikipedia.org/wiki/Paas-_en_pinksterdatum#Methode_van_Gauss
 *
 * @package Stefanius\SpecialDates\CommonDates
 *
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
class DutchCarnaval extends AbstractSpecialDate
{
    /**
     * {@inheritdoc}
     */
    protected function generate()
    {
        $this->bankHoliday = false;
        $this->description = 'Carnaval';

        $this->setupDateTimeObjects(
            $this->calculateEaster()->modify('-49 days'),
            $this->calculateEaster()->modify('-47 days')
        );
    }

    /**
     * @return \DateTime
     */
    protected function calculateEaster()
    {
        $g = $this->calculateGNumber();
        $c = $this->calculateCNumber();
        $x = $this->calculateXNumber($c);
        $y = $this->calculateYNumber($c);
        $z = $this->calculateZNumber($x);
        $e = $this->calculateENumber($g, $y, $x);
        $n = $this->calculateNNumber($e);
        $p = $this->calculatePNumber($z, $n);

        if ($p > 31) {
            $p -= 31;

            return $this->generateDateTime($this->year, 4, $p);
        }

        return $this->generateDateTime($this->year, 3, $p);

    }

    /**
     * Deel het jaartal door 19, neem de rest, en tel er 1 bij op (zoals Dionysius).
     * Noem dit getal G. Voor het jaar 1991 geldt G = 16.
     *
     * @return int
     */
    protected function calculateGNumber()
    {
        return ($this->year % 19) + 1;
    }

    /**
     * Geheeldeel het jaartal door 100 en tel daar 1 bij op. Noem dit getal C. Voor het jaar 1991 geldt C = 20.
     *
     * @return int
     */
    protected function calculateCNumber()
    {
        return (int)floor($this->year / 100) + 1;
    }

    /**
     * Vermenigvuldig C met 3, geheeldeel het resultaat door 4 en trek er 12 van af. Noem dit getal X.
     * Voor de twintigste en eenentwintigste eeuw geldt X = 3.
     *
     * @param int $c
     * @return float
     */
    protected function calculateXNumber(int $c)
    {
        return (($c * 3) / 4) - 12;
    }

    /**
     *  Neem 8 maal C, tel er 5 bij op, geheeldeel dit door 25 en trek er 5 vanaf. Noem dit getal Y.
     * Voor de twintigste en eenentwintigste eeuw geldt: Y = 1.
     *
     * @param int $c
     * @return float
     */
    protected function calculateYNumber(int $c)
    {
        return ((($c * 8) + 4) / 25) - 5;
    }

    /**
     * Vermenigvuldig het jaartal met 5, geheeldeel de uitkomst door 4, trek er X en 10 vanaf, en noem dit getal Z.
     * Voor 1991 geldt: Z = 2475.
     *
     * @param int $x
     * @return float
     */
    protected function calculateZNumber(int $x)
    {
        return ((($this->year * 5) / 4) - $x) - 10;
    }

    /**
     * 11 maal G + 20 + Y. Trek daarvan X af, geheeldeel het resultaat door 30 en noem de rest E.
     * Als E gelijk is aan 24, of als E gelijk is aan 25 en het gulden getal is groter dan 11, tel dan 1 bij E op.
     * De Epacta voor 1991 is 14.
     *
     * @param int $x
     * @return float
     */
    protected function calculateENumber(int $g, int $y, int $x)
    {
        $e = (((($g * 11) + 20) + $y) - $x) % 30;

        if (($e === 24) || ($e === 25 && $g > 11)) {
            $e++;
        }

        return $e;
    }

    /**
     * Trek E af van 44. Noem dit getal N. Als N kleiner is dan 21, tel er dan 30 bij op. Voor 1991 geldt: N = 30
     *
     * @param int $e
     *
     * @return int
     */
    protected function calculateNNumber(int $e)
    {
        $n = 44 - $e;

        if ($n < 21) {
            $n += 30;
        }

        return $n;
    }

    /**
     * Tel Z en N op. Geheeldeel het resultaat door 7 en trek de rest af van N+7. Noem dit getal P.
     * Voor 1991 geldt: P = 31.
     *
     * @param int $z
     * @param int $n
     * @return int
     */
    protected function calculatePNumber(int $z, int $n)
    {
        return ($n + 7) - (($z + $n) % 7);
    }
}
