<?php

namespace Stefanius\SpecialDates\SDK;

/**
 * Class AbstractSpecialDate
 *
 * @package Stefanius\SpecialDates\SDK
 */
abstract class AbstractSpecialDate implements SpecialDateInterface
{
    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @var \DateTime
     */
    protected $zeroDate;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $totalLength = 0;

    /**
     * @var bool
     */
    protected $valid = true;

    /**
     * Is the day a bank holiday
     *
     * @var bool
     */
    protected $bankHoliday = false;

    /**
     * Is the day a national accepted date
     *
     * @var bool
     */
    protected $nationalAccepted = false;

    /**
     * @var string
     */
    protected $slug = false;
    /**
     * @var int
     */
    protected $year;

    /**
     * AbstractSpecialDate constructor.
     *
     * @param $year
     */
    public function __construct($year)
    {
        $this->year     = $year;
        $this->zeroDate = new \DateTime();
        $this->zeroDate->setDate(1, 1, 1);

        $this->startDate = new \DateTime();
        $this->startDate->setDate(1, 1, 1);

        $this->endDate = new \DateTime();
        $this->endDate->setDate(1, 1, 1);

        $this->generate();

        if ($this->startDate->format('Y-m-d') === '0001-01-01') {
            $this->valid = false;
            $this->totalLength = 0;
        }

        if ($this->endDate->format('Y-m-d') === '0001-01-01') {
            $this->valid = false;
            $this->totalLength = 0;
        }

        $this->slugifyDescription();
    }

    /**
     * Normalize description to a slug
     */
    protected function slugifyDescription()
    {
        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $this->description);
        $string = trim($string);
        $string = preg_replace("/[^a-zA-Z0-9_| -]/", ' ', $string);
        $string = preg_replace("/[| -]+/", '-', $string);
        $string = strtolower(trim($string, '-'));
        $string = preg_replace('/-{2,}/', ' ', $string);

        $this->slug = $string;
    }

    /**
     * @param $year
     * @param $month
     * @param $day
     *
     * @return \DateTime
     */
    protected function generateDateTime($year, $month, $day)
    {
        $date = \DateTime::createFromFormat('Y-m-d', $year . '-' . $month . '-' . $day);

        if ($date === false) {
            return $this->zeroDate;
        }

        return $date;
    }

    /**
     * @param \DateTime $start
     * @param \DateTime|null $end
     */
    protected function setupDateTimeObjects(\DateTime $start, \DateTime $end = null)
    {
        $this->startDate = $start;

        if ($end === null) {
            $this->endDate = $start;
        } else {
            $this->endDate = $end;
        }

        $interval = $this->startDate->diff($this->endDate);

        $this->totalLength = (int)$interval->format('%R%a') + 1;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        if (!$this->valid || $this->startDate == null) {
            return $this->zeroDate;
        }

        return $this->startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        if (!$this->valid || $this->endDate == null) {
            return $this->zeroDate;
        }

        return $this->endDate;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getTotalLength()
    {
        return $this->totalLength;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return $this->valid;
    }

    /**
     * @return boolean
     */
    public function isBankHoliday()
    {
        return $this->bankHoliday;
    }

    /**
     * @return boolean
     */
    public function isNationalAccepted()
    {
        return $this->nationalAccepted;
    }

    /**
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @return string
     */
    public function slug()
    {
        return $this->slug;
    }

    /**
     * Generate the special date
     */
    abstract protected function generate();
}
