<?php
$I = new FunctionalTester($scenario);
$I->wantTo('Check local db member register');
$I->loginAsAdmin();
$I->amOnPage("/wp-admin");
$I->amOnPluginsPage();
$I->amOnPage("/wp-admin/options-general.php?page=rma-settings");
$I->checkOption('rmaOnlyGet');
$I->fillField('rmaAllMembersURI', 'http://wprest/api/get_users');
$I->click('Save stuff');
$I->see('Settings saved');
$I->amOnPage("/member-content");
$I->fillField('_email', 'bborko@bogus.info');
$I->fillField('_password', '123Abc');
$I->click('Sign in');
$I->see('register');


