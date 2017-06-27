<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Check member content redirect');
$I->amOnPage("/member-content");
$I->see('Member sign in');
