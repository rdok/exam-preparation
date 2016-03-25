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
        session_start();
    }

    public function _after(AcceptanceTester $I)
    {
        session_destroy();
    }

    public function test_successful_form_submission(AcceptanceTester $I)
    {
        $I->wantTo('verify the honey pot is working on successful form submission');
        $I->amOnPage('/honey-pot');
        $I->seeCurrentUrlEquals('/honey-pot');
        $I->seeInSource('<label for="inputName" class="col-lg-2 control-label">Name:</label>');
        $I->fillField('inputName', $this->name);
        $I->seeInSource('<label for="inputEmail" class="col-lg-2 control-label">Email:</label>');
        $I->fillField('inputEmail', $this->email);
        $I->seeInSource('<label for="inputMessage" class="col-lg-2 control-label">Message:</label>');
        $I->fillField('inputMessage', $this->message);
        $I->dontSeeInSource('<strong>Well done!</strong> Email sent.');
        $I->click('Send');
        $I->seeCurrentUrlEquals('/honey-pot');
        $I->seeInSource('<strong>Well done!</strong> Email sent.');
    }

    public function test_form_submission_bot_spamming(AcceptanceTester $I)
    {
        $I->wantTo('verify the honey pot is working on bot spamming');


        $I->amOnPage('/honey-pot');
        $I->seeCurrentUrlEquals('/honey-pot');

        $I->dontSeeInSource('<strong>Error!</strong> Bot detected.');

        $I->executeJS('$(".req").show();');
        $I->fillField('inputWeb', 'some-value');

        $I->click('Send');

        $I->seeCurrentUrlEquals('/honey-pot');
        $I->seeInSource('<strong>Error!</strong> Bot detected.');

    }
}
