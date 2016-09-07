<?php

namespace Step\Acceptance;

use Page\Acceptance\HomePage;

class SortingStep extends \AcceptanceTester
{
    protected $lastNameRow1;
    protected $lastNameRow2;

    public function sortingDataTable()
    {
        $I = $this;
        $I->amOnPage('/tables');
        $I->click(HomePage::$columnTitleLastName);
        $this->lastNameRow1 = $I->grabTextFrom(HomePage::$firstRowLastName);
        $this->lastNameRow2 = $I->grabTextFrom(HomePage::$secondRowLastName);
        $I->assertLessThan(0,strcmp($this->lastNameRow1, $this->lastNameRow2));
        $I->click(HomePage::$columnTitleLastName);
        $this->lastNameRow1 = $I->grabTextFrom(HomePage::$firstRowLastName);
        $this->lastNameRow2 = $I->grabTextFrom(HomePage::$secondRowLastName);
        $I->assertGreaterThan(0,strcmp($this->lastNameRow1, $this->lastNameRow2));
    }
}