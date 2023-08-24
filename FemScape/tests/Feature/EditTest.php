<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EditTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_edit_view(): void
    {
        $response = $this->get('/edit');

        $response->assertStatus(200);
    }
}
