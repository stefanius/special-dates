<?php

class UsedDateClassesTest extends \PHPUnit_Framework_TestCase
{
    protected $classNames = [];

    protected $rootpath = __DIR__ . '/../../src/Stefanius/SpecialDates';

    public function testSpecialDate()
    {
        $parserFile = file_get_contents($this->rootpath . '/DateParser/AbstractParser.php');

        $this->loadFiles('/Dates');
        $this->loadFiles('/CommonDates');

        foreach ($this->classNames as $className) {
            $found = strpos($parserFile, 'new ' . $className) !== false;

            $this->assertTrue($found, 'Class is not used in AbstractParser. Add: \'new ' . $className . '($year)\'');
        }

        $parser = new \Stefanius\SpecialDates\DateParser\Parser();
        $list = $parser->getAllDates(2000);

        $this->assertEquals(count($this->classNames), count($list), 'There are ' . count($this->classNames) . ' valid classnames found, but there ' . count($list) . ' are returned from the parser. Fix this!');
    }

    protected function loadFiles(string $path)
    {
        $files = scandir($this->rootpath . $path);

        foreach ($files as $file) {
            if ($file === '.' ||  $file === '..') {
                continue;
            }

            $storeAs = str_replace('.php', '', $file);
            $this->classNames[$storeAs] = $storeAs;
        }
    }
}
