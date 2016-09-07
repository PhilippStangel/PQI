<?php

namespace Step\Acceptance;

use Page\Acceptance\HomePage;


class HoversStep extends \AcceptanceTester
{
    public function hoverProfilePictures()
    {
        $I = $this;
        $I->amOnPage('/hovers');
        $I->moveMouseOver(HomePage::$image1);
        $I->see(HomePage::$user1Text);
        $I->moveMouseOver(HomePage::$image2);
        $I->see(HomePage::$user2Text);
        $I->moveMouseOver(HomePage::$image3);
        $I->see(HomePage::$user3Text);
    }
}