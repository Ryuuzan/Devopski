<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;
use App\User;

use Tests\TestCase;

class AuthTest extends TestCase
{
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
   

use RefreshDatabase;                                
use DatabaseMigrations;                             
use WithoutMiddleware;

}
