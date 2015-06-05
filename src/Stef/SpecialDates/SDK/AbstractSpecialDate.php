<?php

namespace Stef\SpecialDates\SDK;

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
     * @var bool
     */
    protected $bankHoliday = false;

    /**
     * @var bool
     */
    protected $nationalAcceptedParty = false;

    /**
     * @var string
     */
    protected $normalizedDescription = false;
    /**
     * @var int
     */
    protected $year;

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

        if ($this->startDate->format('Y') . '-' . $this->startDate->format('m') . '-' . $this->startDate->format('d') === '0001-01-01') {
            $this->valid = false;
            $this->totalLength = 0;
        }

        if ($this->endDate->format('Y') . '-' . $this->endDate->format('m') . '-' . $this->endDate->format('d') === '0001-01-01') {
            $this->valid = false;
            $this->totalLength = 0;
        }

        $this->normalizeDescription();
    }

    protected function normalizeDescription()
    {
        $string = iconv('UTF-8', 'ASCII//TRANSLIT', $this->description);
        $string = trim($string);
        $string = preg_replace("/[^a-zA-Z0-9_| -]/", ' ', $string);
        $string = preg_replace("/[| -]+/", '-', $string);
        $string = strtolower(trim($string, '-'));
        $string = preg_replace('/-{2,}/', ' ', $string);

        $this->normalizedDescription = $string;
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
    public function isNationalAcceptedParty()
    {
        return $this->nationalAcceptedParty;
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
    public function getNormalizedDescription()
    {
        return $this->normalizedDescription;
    }

    abstract protected function generate();
}
