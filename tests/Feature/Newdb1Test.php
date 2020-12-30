<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\AssertTrait;
use Illuminate\Support\Facades\Hash;
use App\User;

use Tests\TestCase;

class Newdb1Test extends TestCase
{

use RefreshDatabase;                                
use DatabaseMigrations;                             
use WithoutMiddleware;     


                        
    /**                                                
     * Test Login                                      
     *                                                 
     * @return void                                    
     */
    public function testLogin()
    {

        $user = \App\Models\User::factory(User::class)->create(['password' => Hash::make('passw0RD'),]);
    
        $this->visit('/authentification')
             ->type($user->pseudo, 'pseudo')
             ->type('passw0RD', 'mdp')
            # ->press('submit')
            # ->seePageIs('/authentification');
    }

    /**
     * Test Login
     *
     * @return void
     */
    public function testLandingPageWithUserLogged()
    {
        $user = \App\Models\User::factory(User::class)->create();

        $this->actingAs($user)
            ->visit('/')
            ->click('contactez nous')
            ->seePageIs('/contact')
            ->click('Produits')
            ->seePageIs('/products')
            ->click('Login')
            ->seePageIs('/authentification');
    }

 }
                                     
