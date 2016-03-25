<?php
use App\Notifications\Flash;

/**
 * Class FlashCest.
 */
class FlashCest
{
    /**
     * @param UnitTester $I
     */
    public function _before(UnitTester $I)
    {
        session_start();
    }

    /**
     * @param UnitTester $I
     */
    public function _after(UnitTester $I)
    {
        session_destroy();
    }

    /**
     * @param UnitTester $I
     */
    public function it_creates_success_notifications(UnitTester $I)
    {
        $flash = new Flash();

        $I->assertFalse(array_key_exists('flash_notifications', $_SESSION));

        $expectedMessage = 'Success message';
        $flash->success($expectedMessage);

        $I->assertTrue(array_key_exists('flash_notifications', $_SESSION));
        $I->assertSame($expectedMessage, $_SESSION[ 'flash_notifications' ][ 0 ]->message);
        $I->assertSame('success', $_SESSION[ 'flash_notifications' ][ 0 ]->level);
    }

    /**
     * @param UnitTester $I
     */
    public function it_creates_error_notifications(UnitTester $I)
    {
        $flash = new Flash();

        $I->assertFalse(array_key_exists('flash_notifications', $_SESSION));

        $expectedMessage = 'Error message';
        $flash->error($expectedMessage);

        $I->assertTrue(array_key_exists('flash_notifications', $_SESSION));
        $I->assertSame($expectedMessage, $_SESSION[ 'flash_notifications' ][ 0 ]->message);
        $I->assertSame('error', $_SESSION[ 'flash_notifications' ][ 0 ]->level);
    }
}
