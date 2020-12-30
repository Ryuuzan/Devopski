<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\AssertTrait;
use Illuminate\Support\Facades\Hash;
use Tests\CreatesApplication;
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class Newdb2Test extends TestCase
{

use CreatesApplication;
use RefreshDatabase;                                
use DatabaseMigrations;                             
use WithoutMiddleware;
use CreatesApplication;

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
     
  public function test_user_can_login_with_correct_credentials()
  {
    $user = \App\Models\User::factory(User::class)->create([
          'name' => 'armel',
          'email' => 'armel@2020.fr',
          'email_verified_at' => now(),
          'password' => 'armel', 
          'remember_token' => Str::random(10),
      ]);

    $this->assertDatabaseHas('users', [
      'name' => 'armel',
      'email' => 'armel@2020.fr',
      ]);

  }  


}
