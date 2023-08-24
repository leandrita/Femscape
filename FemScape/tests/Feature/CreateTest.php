<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
public function indexUsers_page_exists(): void
    {
        $response = $this->get('/create');

        $response->assertStatus(200)
                ->assertViewIs()('create');
    }


//Testeo de la pagina create
    public function test_create_view(): void
    {
        $this->withoutexceptionHandling();
        $response = $this->get('/create');

        $response->assertStatus(200);
    }

    public function test_destiny_can_be_stored(): void
    {
        $this->withoutexceptionHandling();
        $response = $this->get('/create');

        $response->assertStatus(200);

}

        //scenario
        //when
}        //then


