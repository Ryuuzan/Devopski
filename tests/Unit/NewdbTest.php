<?php

namespace Tests\Unit;


use PHPUnit\Framework\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

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
    /**
     * Test Login
     *
     * @return void
     */
    public function testLogin()
    {
        $user = \App\Models\User::factory(User::class)->create(['password' => ($password = 'password'),]);
        
        $this->visit('/authentification')
            ->type($user->email, 'email')
            ->type('password', 'password')
            ->press('submit')
            ->seePageIs('/Welcome');
    }

   /**
     * TestUserCredentials
     *
     * @return void
     */
    public function test_user_can_login_with_correct_credentials()
    {
        $user = \App\Models\User::factory(User::class)->create(['password' => ($password = 'password'),]);
        $response = $this->post('/authentification', [
            'email' => $user->email,
            'password' => $user->password,
        ]);

        $response->assertRedirect('/Welcome');
        $this->assertAuthenticatedAs($user);
    }

}
