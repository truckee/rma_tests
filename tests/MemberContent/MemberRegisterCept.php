<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Check member register');
$I->amOnPage("/member-content");
$I->see('Member sign in');
$I->fillField('_email', 'developer@bogus.info');
$I->click('Sign in');
$I->see('register');
$I->click('Click here to register for content access');
$I->see('Thank you');
