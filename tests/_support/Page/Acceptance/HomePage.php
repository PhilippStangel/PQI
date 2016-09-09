<?php
namespace Page\Acceptance;

class HomePage
{
    //Login
    public static $loginButton = 'button[type="submit"]';
    public static $userNameInput = 'input#username';
    public static $passwordInput = 'input#password';
    public static $loginSuccessMessage = 'You logged into a secure area';
    public static $loginUserFailMessage = 'Your username is invalid';
    public static $loginPasswordFailMessage = 'Your password is invalid';

    //Hover
    public static $image1 = '//div[@class="figure"][1]/img';
    public static $image2 = '//div[@class="figure"][2]/img';
    public static $image3 ='//div[@class="figure"][3]/img';
    public static $user1Text = 'user1';
    public static $user2Text = 'user2';
    public static $user3Text = 'user3';

    //Table
    public static $columnTitleLastName = 'table#table2 span.last-name';
    public static $firstRowLastName = '//table[@id="table2"]/tbody/tr[1]';
    public static $secondRowLastName = '//table[@id="table2"]/tbody/tr[2]';
}