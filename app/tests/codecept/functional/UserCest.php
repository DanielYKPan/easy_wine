<?php
use \FunctionalTester;

class UserCest {

    public function iAmOnLoginPage(FunctionalTester $I)
    {
        $I->amOnAction('UsersController@getLogin');
        $I->see('Email');
        $I->see('Password');
    }

    public function i_login_with_valid_login_inform(FunctionalTester $I)
    {
        $I->amOnAction('UsersController@getLogin');
        $I->fillField(['name' => 'email'], 'myron.yk.pan@gmail.com');
        $I->fillField(['name' => 'password'], '565987');
        $I->click(['class' => 'btn-sign-in']);
        $I->canSeeInCurrentUrl('user/dashboard');
    }

    public function it_redirect_user_to_register_page_when_a_start_button_in_login_page(FunctionalTester $I)
    {
        $I->amOnAction('UsersController@getLogin');
        $I->click(['class'=> 'btn-register']);
        $I->canSeeInCurrentUrl('user/register');
        $I->canSeeElement(['class'=>'register-heading']);
    }

    public function it_notifies_user_registration_successfully_with_valid_registration_inform(FunctionalTester $I)
    {
        $I->amOnAction('UsersController@getRegister');
        $I->fillField(['name' => 'email'], 'example@example.com');
        $I->fillField(['name' => 'password'], '123456');
        $I->fillField(['name' => 'password_confirmation'], '123456');
        $I->selectOption(['name' => 'title'], 'Mrs');
        $I->fillField(['name' => 'first_name'], 'example_first_name');
        $I->fillField(['name' => 'last_name'], 'example_last_name');
        $I->selectOption(['name' => 'age'], '18 - 29');
        $I->fillField(['name' => 'address'], 'example_address');
        $I->fillField(['name' => 'suburb'], 'example_suburb');
        $I->fillField(['name' => 'postcode'], '1234');
        $I->selectOption(['name' => 'state'], 'NSW');
        $I->fillField(['name' => 'company_name'], 'example_company');
        $I->fillField(['name' => 'contact_number'], '12345678');
        $I->click(['class'=>'submitBtn']);
        $I->seeRecord('users', array('email' => 'example@example.com'));
        $I->canSeeElement(['id'=>'registerResult']);
    }
}