<?php

class UsedDateClassesTest extends \PHPUnit_Framework_TestCase
{
    public function testSpecialDate()
    {
        $rootpath = __DIR__ . '/../../src/Stef/SpecialDates';

        $files = scandir($rootpath . '/Dates');
        $parserFile = file_get_contents($rootpath . '/DateParser/AbstractParser.php');

        $classNames = [];

        foreach ($files as $file) {
            if ($file === '.' ||  $file === '..') {
                continue;
            }

            $storeAs = str_replace('.php', '', $file);
            $classNames[$storeAs] = $storeAs;
        }

        foreach ($classNames as $className) {
            $found = strpos($parserFile, 'new ' . $className) !== false;

            $this->assertTrue($found, 'Class is not used in AbstractParser. Add: \'new ' . $className . '($year)\'');
        }

        $parser = new \Stef\SpecialDates\DateParser\Parser();
        $list = $parser->getAllDates(2000);

        $this->assertEquals(count($classNames), count($list), 'There are ' . count($classNames) . ' valid classnames found, but there ' . count($list) . ' are returned from the parser. Fix this!');
    }
}
