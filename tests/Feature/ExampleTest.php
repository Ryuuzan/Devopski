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
     * Test User Credentials
     *
     * @return void
     */
    public function test_user_can_login_with_correct_credentials()
    {
        $user = \App\Models\User::factory(User::class)->create(['password' => Hash::make('passw0RL'),]);
        $response = $this->post('/authentification', [
            'email' => $user->email,
            'password' => 'passw0RL',
        ]);

        $response->assertRedirect(route('Welcome'));
        $this->assertAuthenticatedAs($user);
    }
 }
