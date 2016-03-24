<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('see the content of welcome page');
$I->amOnPage('/');
$I->see('welcome');
