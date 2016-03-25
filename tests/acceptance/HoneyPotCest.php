<?php


class HoneyPotCest
{
    private $email;
    private $name;
    private $message;

    public function _before(AcceptanceTester $I)
    {
        $faker = \Faker\Factory::create();
        $this->name = $faker->name;
        $this->email = $faker->email;
        $this->message = $faker->paragraph();
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function test_form_submission_without_any_error(AcceptanceTester $I)
    {
        $I->wantTo('verify the honey pot is working');
        $I->amOnPage('/honey-pot');
        $I->seeCurrentUrlEquals('/honey-pot');
        $I->seeInSource('<label for="inputName" class="col-lg-2 control-label">Name:</label>');
        $I->fillField('inputName', $this->name);
        $I->seeInSource('<label for="inputEmail" class="col-lg-2 control-label">Email:</label>');
        $I->fillField('inputEmail', $this->email);
        $I->seeInSource('<label for="inputMessage" class="col-lg-2 control-label">Message:</label>');
        $I->fillField('inputMessage', $this->message);
        $I->click('Submit');
        $I->see('Email sent');
    }
}
