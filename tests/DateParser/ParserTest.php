<?php

use Stef\SpecialDates\DateParser\Parser;

class ParserTest extends \PHPUnit_Framework_TestCase
{
    public function testFindSpecialDateByDateTime()
    {
        $parser = new Parser();
        $date = \DateTime::createFromFormat('Y-m-d', '2000-01-01');

        $found = $parser->findSpecialDateByDateTime($date);
        $all = $parser->getAllDates($date->format('Y'));

        $foundNewYearsDay = false;

        $this->assertTrue(count($found) < count($all));

        foreach ($found as $item) {
            if ($item instanceof \Stef\SpecialDates\Dates\NewYearsDay) {
                $foundNewYearsDay = true;
            }
        }

        $this->assertTrue($foundNewYearsDay);
    }
}
