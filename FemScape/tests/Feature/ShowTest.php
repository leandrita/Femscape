<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_show_view(): void
    {
        $response = $this->get('/show/1');

        $response->assertStatus(200);
    }
}
