<?php
$faker = \Faker\Factory::create();
$name = $faker->name;
$email = $faker->email;
$message = $faker->paragraph();

$I = new AcceptanceTester($scenario);
$I->wantTo('verify the honey pot is working');
$I->amOnPage('/honey-pot');
$I->seeCurrentUrlEquals('/honey-pot');
$I->see('Name:');
$I->fillField('name', $name);
$I->see('Email:');
$I->fillField('email', $email);
$I->see('Message:');
$I->fillField('message', $message);
