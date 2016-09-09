<?php


use Step\Acceptance\LoginStep;
use Step\Acceptance\HoversStep;
use Step\Acceptance\SortingStep;

class ScenariosCest
{
    public function Scenarios(LoginStep $User, HoversStep $Mouse, SortingStep $Click)
    {
        $User->loginTests();
        $Mouse->hoverProfilePictures();
        $Click->sortingDataTable();
    }
}