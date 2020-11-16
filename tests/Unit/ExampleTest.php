<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
Illuminate\Foundation\Testing\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
 
    /**
     * test Authentification Page Response.
     *
     * @return void
     */
    public function testAuthentificationPageResponse()
    {
        $response = $this->get('/authentification');

        $response->assertStatus(200);
    }
}
