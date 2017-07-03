<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Check member not active');
$I->amOnPage("/member-content");
$I->see('Member sign in');
$I->fillField('_email', 'jglenshire@bogus.info');
$I->fillField('_password', '123Abc');
$I->click('Sign in');
$I->see('Member not considered active');
