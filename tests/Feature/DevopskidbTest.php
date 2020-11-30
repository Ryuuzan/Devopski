<?php

namespace Tests\Feature;
use PHPUnit\Framework\UserCase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Hash;


class DevopskidbTest extends UserCase
{
    use DatabaseMigrations;
    /**
     * Test Login
     *
     * @return void
     */
    public function testLandingPageWithUserLogged()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/')
            ->see('contactez nous')
            ->see('produits')
            ->see('index')
            ->see($user->name);
    }
    /**
     * Test Login
     *
     * @return void
     */
    public function testLogin()
    {
        $user = factory(App\User::class)->create(['password' => Hash::make('passw0RD')]);
        
        $this->visit('/authentification')
            ->type($user->email, 'email')
            ->type('passw0RD', 'password')
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
        $user = factory(App\User::class)->create(['password' => Hash::make('passw0RD')]);

        $response = $this->post('/authentification', [
            'email' => $user->email,
            'password' => 'passw0RD',
        ]);

        $response->assertRedirect('/Welcome');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * Test User Cannot View Login Form When Authenticated
     *
     * @return void
     */
    public function test_user_cannot_view_a_login_form_when_authenticated()
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get('/authentification');

        $response->assertRedirect('/Welcome');
    }

}

