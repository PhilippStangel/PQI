<?php
namespace Page\Acceptance;

class LoginPage
{
    static $loginButton = 'button[type="submit"]';
    static $userNameInput = 'input#username';
    static $passwordInput = 'input#password';
    static $loginSuccessMessage = 'You logged into a secure area';
    static $loginUserFailMessage = 'Your username is invalid';
    static $loginPasswordFailMessage = 'Your password is invalid';
}