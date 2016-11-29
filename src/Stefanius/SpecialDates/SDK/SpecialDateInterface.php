<?php

namespace Stefanius\SpecialDates\SDK;

interface SpecialDateInterface
{
    /**
     * @return \DateTime
     */
    public function getStartDate();

    /**
     * @return \DateTime
     */
    public function getEndDate();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return integer
     */
    public function getTotalLength();

    /**
     * @return bool
     */
    public function isValid();

    /**
     * @return bool
     */
    public function isBankHoliday();

    /**
     * @return bool
     */
    public function isNationalAccepted();

    /**
     * @return integer
     */
    public function getYear();

    /**
     * @return string
     */
    public function slug();
}
