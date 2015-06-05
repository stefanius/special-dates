<?php

namespace Stef\SpecialDates\SDK;

interface SpecialDateInterface
{
    public function getStartDate();

    public function getEndDate();

    public function getDescription();

    public function getTotalLength();

    public function isValid();

    public function isBankHoliday();

    public function isNationalAcceptedParty();

    public function getYear();

    public function getNormalizedDescription();
}
