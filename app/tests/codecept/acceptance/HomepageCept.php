<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('verify that home page welcomes me');
$I->amOnRoute('home');
$I->see('Welcome to Easy Wine');
