<?php

namespace Step\Acceptance;

use Page\Acceptance\SortingPage;

class SortingStep extends \AcceptanceTester
{
    protected $lastNameRow1;
    protected $lastNameRow2;

    public function sortingDataTable()
    {
        $I = $this;
        $I->amOnPage('/tables');
        $I->click(SortingPage::$columnTitleLastName);
        $this->lastNameRow1 = $I->grabTextFrom(SortingPage::$firstRowLastName);
        $this->lastNameRow2 = $I->grabTextFrom(SortingPage::$secondRowLastName);
        $I->assertLessThan(0,strcmp($this->lastNameRow1, $this->lastNameRow2));
        $I->click(SortingPage::$columnTitleLastName);
        $this->lastNameRow1 = $I->grabTextFrom(SortingPage::$firstRowLastName);
        $this->lastNameRow2 = $I->grabTextFrom(SortingPage::$secondRowLastName);
        $I->assertGreaterThan(0,strcmp($this->lastNameRow1, $this->lastNameRow2));
    }
}