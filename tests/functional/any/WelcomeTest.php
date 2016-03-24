<?php namespace Tests\functional\any;
use Guzzle\Http\Client;
use Tests\TestCase;

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since  24/03/16
 */
class WelcomeTest extends TestCase
{
    /** @test */
    public function it_reads_welcome_contents()
    {
        $client = new Client();
    }
}