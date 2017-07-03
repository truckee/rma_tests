<?php 
$I = new FunctionalTester($scenario);
$I->wantTo('Check API URI validation');
$I->amOnPage("/");
$I->loginAsAdmin();
$I->amOnPage("/wp-admin");
$I->amOnPluginsPage();
$I->activatePlugin('remote-member-authorization');
$I->amOnPage("/wp-admin/options-general.php?page=rma-settings");
//$I->see('Remote Member Authentication');
$I->see('API key');
$I->selectOption('form input[id=authAPI]', 'API key');
$I->checkOption('rmaOnlyGet');
$I->click('Save stuff');
$I->see('User data URI may not be empty');
$I->fillField('rmaAllMembersURI', 'keyName');
$I->click('Save stuff');
$I->see('is an invalid User data URI');
