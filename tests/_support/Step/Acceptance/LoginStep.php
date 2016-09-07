<?php
namespace Step\Acceptance;

use Page\Acceptance\HomePage;

class LoginStep extends \AcceptanceTester
{

    public function loginSuccessful()
    {
        $I = $this;
        $I->amOnPage('/login');
        $I->fillField(HomePage::$userNameInput, user);
        $I->fillField(HomePage::$passwordInput, password);
        $I->click(HomePage::$loginButton);
        $I->see(HomePage::$loginSuccessMessage);
    }

    public function loginFailUserName()
    {
        $I = $this;
        $I->amOnPage('/login');
        $I->fillField(HomePage::$userNameInput, wrongUser);
        $I->fillField(HomePage::$passwordInput, password);
        $I->click(HomePage::$loginButton);
        $I->see(HomePage::$loginUserFailMessage);
    }

    public function loginFailPassword()
    {
        $I = $this;
        $I->amOnPage('/login');
        $I->fillField(HomePage::$userNameInput, user);
        $I->fillField(HomePage::$passwordInput, wrongPassword);
        $I->click(HomePage::$loginButton);
        $I->see(HomePage::$loginPasswordFailMessage);
    }

}