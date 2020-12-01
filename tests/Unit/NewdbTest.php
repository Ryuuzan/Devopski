<?php

namespace Tests\Unit;

use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;

class NewdbTest extends TestCase
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
            ->type($user->name, 'pseudo')
            ->type('passw0RD', 'mdp')
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
            'pseudo' => $user->name,
            'mdp' => 'passw0RL',
        ]);

        $response->assertRedirected('/Welcome');
        $response->assertStatus(200);
     
    }

}
