<?php

namespace Stef\SpecialDates\DateParser;

class Parser extends AbstractParser
{
    public function getAllValidDates($year)
    {
        $items = $this->getAllDates($year);

        foreach ($items as $key => $value) {
            if ($value->isValid() === false) {
                unset($items[$key]);
            }
        }

        return $items;
    }
}
