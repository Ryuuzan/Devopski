<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;


use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
         
    }
    /**                                                
     * A basic test example.                           
     *                                                 
     * @return void                                    
     */                                                
    public function testSecondTest()                    
    {                                                  
        $this->assertTrue(true);                       
    }                                                  
                                                       
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
             ->type($user->email, 'email')
             ->type('passw0RD', 'password')
             ->press('submit')
             ->seePageIs('/Welcome');
    }

    /**
     * Test Welcome Page
     *
     * @return void
     */
    public function testWelcomePageWithUserLogged()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/')
            ->see('page d\'accueil');
    }
 }
