<?php

namespace Step\Acceptance;

use Page\Acceptance\HoverPage;


class HoversStep extends \AcceptanceTester
{
    public function hoverProfilePictures()
    {
        $I = $this;
        $I->amOnPage('/hovers');
        $I->moveMouseOver(HoverPage::$image1);
        $I->see(HoverPage::$user1Text);
        $I->moveMouseOver(HoverPage::$image2);
        $I->see(HoverPage::$user2Text);
        $I->moveMouseOver(HoverPage::$image3);
        $I->see(HoverPage::$user3Text);
    }
}