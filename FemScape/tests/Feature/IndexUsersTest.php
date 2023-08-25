<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexUsersTest extends TestCase
{

    public function setUp(): void
{
    parent::setUp();


    $this->withoutMiddleware(\App\Http\Middleware\Authenticate::class);
}

    /**
     * A basic feature test example.
     */
    public function test_indexUsers_view(): void
    {
        $response = $this->get('/indexUsers');

        $response->assertStatus(200);
    }
}
