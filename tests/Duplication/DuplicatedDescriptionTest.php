<?php

class DuplicatedDescriptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the default list in Parser on possible duplicates.
     */
    public function testDuplication()
    {
        $parser = new \Stefanius\SpecialDates\DateParser\Parser();
        $descriptions = [];
        $dates = $parser->getAllDates(2000);

        foreach ($dates as $date) {
            $desc = $date->slug();

            if (array_key_exists($desc, $descriptions)) {
                $descriptions[$desc]++;
            } else {
                $descriptions[$desc] = 1;
            }
        }

        foreach ($descriptions as $key => $value) {
            $this->assertEquals(1, $value, "Possible duplicated SpecialDateDescription: '" . $key . "'. Number of occurrences: " . $value);
        }
    }
}
