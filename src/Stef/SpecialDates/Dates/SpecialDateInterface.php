<?php

namespace Stef\SpecialDates\Dates;

interface SpecialDateInterface
{
    public function getStartDate();

    public function getEndDate();

    public function getDescription();

    public function getTotalLength();

    public function isValid();
}
