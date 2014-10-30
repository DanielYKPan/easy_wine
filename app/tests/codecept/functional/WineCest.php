<?php
use \FunctionalTester;

class WineCest
{
    // tests
    public function it_displays_a_specific_wine_when_user_visit_the_wine_page(FunctionalTester $I)
    {
        $I->amOnPage('/wines/C601XA');
        $I->canSeeElement(['class' => 'specific-product']);
        $I->canSee('Moet Chandon Brut Imperial (6-bottle Case) NV', 'h4');
    }
}