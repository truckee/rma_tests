<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Check member sign in');
$I->amOnPage("/member-content");
$I->see('Member sign in');
$I->fillField('_email', 'bborko@bogus.info');
$I->fillField('_password', '123Abc');
$I->click('Sign in');
$I->see('Go to Member content');
$I->click('Go to Member content');
$I->see('restricted area');