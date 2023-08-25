<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTest extends TestCase
{
    public function setUp(): void
{
    parent::setUp();


    $this->withoutMiddleware(\App\Http\Middleware\Authenticate::class);
}

    /**
     * A basic feature test example.
     */
      public function test_create_view(): void
    {
        $this->withoutexceptionHandling();
        $response = $this->get('/create');

        $response->assertStatus(200);
    }


}
