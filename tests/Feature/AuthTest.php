<?php

namespace tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/authentification');

        $response->assertStatus(200);
    }

    /**
     * Test Landing Page.
     *
     * @return void
     */
    public function testLandingPage()
    {
        $this->visit('/')
             ->see('contactez nous')
             ->see('index')
             ->see('produits');
    }

    /**
     * Test Login Page
     *
     * @return void
     */
    public function testLoginPage()
    {
        $this->visit('/authentification')
            ->see('Page d\'authentification');
    }
}
