<?php

namespace Stef\SpecialDates\DateParser;

use Stef\SpecialDates\SDK\SpecialDateInterface;

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

    public function findSpecialDateByDateTime(\DateTime $date)
    {
        $formattedDate = $date->format('Y') . '-' . $date->format('m') . $date->format('d');
        $items = $this->getAllDates($date->format('Y'));
        $found = [];

        /**
         * @var $item SpecialDateInterface
         */
        foreach ($items as $key => $item) {
            $formattedStartDate = $item->getStartDate()->format('Y') . '-' . $item->getStartDate()->format('m') . $item->getStartDate()->format('d');

            if ($formattedDate === $formattedStartDate) {
                $found[$key] = $item;
            }
        }

        return $found;
    }
}
