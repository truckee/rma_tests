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
$I->fillField('rmaApiKey', 'key');
$I->fillField('rmaKeyFieldName', 'keyNamw');
$I->fillField('rmaDataURI', 'wprest/api');
$I->fillField('rmaSetPasswordURI', 'wprest/api');
$I->click('Save stuff');
$I->see('an invalid User data URI');
$I->see('is an invalid URI');
