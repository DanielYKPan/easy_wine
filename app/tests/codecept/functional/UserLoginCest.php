<?php
use \FunctionalTester;

class UserLoginCest {

    // tests
    public function iAmOnLoginPage(FunctionalTester $I)
    {
        $I->amOnAction('UsersController@getLogin');
        $I->see('Email');
        $I->see('Password');
    }

    public function i_login_with_valid_login_inform(FunctionalTester $I)
    {
        $I->amOnAction('UsersController@getLogin');
        $this->fillLoginForm($I);
        $I->click(['class' => 'btn-sign-in']);
        $I->canSeeInCurrentUrl('/account');
    }

    private function fillLoginForm($I)
    {
        $I->fillField(['name' => 'email'], 'myron.yk.pan@gmail.com');
        $I->fillField(['name' => 'password'], '565987');
    }
}