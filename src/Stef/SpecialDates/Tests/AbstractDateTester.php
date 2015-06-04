<?php
namespace Stef\SpecialDates\Tests;

use Stef\SpecialDates\SDK\SpecialDateInterface;

abstract class AbstractDateTester extends \PHPUnit_Framework_TestCase
{
    /**
     * @param int $year
     * @param string $description
     * @param bool $isValid
     * @param bool $bankHoliday
     * @param int $totalLength
     * @param string $endDateString (yyyy-mm-dd)
     * @param string $startDateString (yyyy-mm-dd)
     *
     * @dataProvider provider
     */
    public function testSpecialDate($year, $description, $isValid, $bankHoliday, $totalLength, $endDateString, $startDateString)
    {
        $specialDate = $this->createDateObject($year);

        $startDate = $specialDate->getStartDate();
        $endDate = $specialDate->getEndDate();

        $this->assertEquals($description, $specialDate->getDescription());
        $this->assertEquals($isValid, $specialDate->isValid());
        $this->assertEquals($bankHoliday, $specialDate->isBankHoliday());
        $this->assertEquals($totalLength, $specialDate->getTotalLength());

        $this->assertEquals($startDateString, $startDate->format('Y') . '-' . $startDate->format('m') . '-' . $startDate->format('d'));
        $this->assertEquals($endDateString, $endDate->format('Y') . '-' . $endDate->format('m') . '-' . $endDate->format('d'));

        if ($isValid) {
            $this->assertEquals($year, $startDate->format('Y'));
            $this->assertEquals($year, $endDate->format('Y'));
        }

        if ($totalLength === 1) {
            $this->assertEquals($startDateString, $endDateString);
        }
    }

    /**
     * Dataprovider for the unittest. Extend this method in your concrete test.
     *
     * @return array
     */
    abstract public function provider();

    /**
     * Create and return the SpecialDateObject you want to test.
     *
     * @param $year
     *
     * @return SpecialDateInterface
     */
    abstract protected function createDateObject($year);
}
