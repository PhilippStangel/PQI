<?php
namespace Step\Acceptance;

use Page\Acceptance\LoginPage;

class LoginStep extends \AcceptanceTester
{
    // Main function
    public function loginTests()
    {
        $I = $this;
        $I->amOnPage('/login');
        $I->loginSuccessful();
        $I->moveBack();
        $I->loginFailUserName();
        $I->loginFailPassword();
    }

    private function loginSuccessful()
    {
        $I = $this;
        $I->fillField(LoginPage::$userNameInput, user);
        $I->fillField(LoginPage::$passwordInput, password);
        $I->click(LoginPage::$loginButton);
        $I->see(LoginPage::$loginSuccessMessage);
    }

    private function loginFailUserName()
    {
        $I = $this;
        $I->fillField(LoginPage::$userNameInput, wrongUser);
        $I->fillField(LoginPage::$passwordInput, password);
        $I->click(LoginPage::$loginButton);
        $I->see(LoginPage::$loginUserFailMessage);
    }

    private function loginFailPassword()
    {
        $I = $this;
        $I->fillField(LoginPage::$userNameInput, user);
        $I->fillField(LoginPage::$passwordInput, wrongPassword);
        $I->click(LoginPage::$loginButton);
        $I->see(LoginPage::$loginPasswordFailMessage);
    }

}