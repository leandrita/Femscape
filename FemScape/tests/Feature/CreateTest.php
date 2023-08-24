<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTest extends TestCase
{
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
