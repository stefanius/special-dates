<?php

namespace Stef\SpecialDates\DateParser;

use Stef\SpecialDates\SDK\SpecialDateInterface;

class Parser extends AbstractParser
{
    /**
     * @param $year
     * @param bool $singleDay
     * @param bool $multiDays
     *
     * @return array
     */
    public function getAllValidDates($year, $singleDay = true, $multiDays = true)
    {
        $items = $this->getAllDates($year);

        /**
         * @var $value SpecialDateInterface
         */
        foreach ($items as $key => $value) {
            if ($value->isValid() === false) {
                unset($items[$key]);
            }

            if (!$singleDay && $value->getTotalLength() === 1) {
                unset($items[$key]);
            }

            if (!$multiDays && $value->getTotalLength() > 1) {
                unset($items[$key]);
            }
        }

        return $items;
    }

    /**
     * @param \DateTime $date
     *
     * @return array
     */
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
