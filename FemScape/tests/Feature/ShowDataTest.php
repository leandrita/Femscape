<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowDataTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_showdata_view(): void
    {
        $response = $this->get('/show/');

        $response->assertStatus(200);
    }
}
