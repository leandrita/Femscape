<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class indexUsers extends TestCase
{
    /**
     * A basic feature test example.
     */
    
    //testeo de la página indexUsers
    public function indexUsers_page_exists(): void
    {
        $response = $this->get('/indexUsers');

        $response->assertStatus(200)
                ->assertViewIs()('indexUsers');
    }
}
