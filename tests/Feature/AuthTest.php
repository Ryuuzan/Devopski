<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /**
     * Test Authentification Page.
     *
     * @return void
     */
    public function testLoginPageResponse()
    {
	$this->request('GET', '/authentification');
	$this->assertResponseCode(200);
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
