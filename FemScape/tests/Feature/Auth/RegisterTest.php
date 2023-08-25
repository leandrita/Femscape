<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'test-user',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);
        $this->assertAuthenticated();
        $response->assertRedirect('/indexUsers');
    }
}
