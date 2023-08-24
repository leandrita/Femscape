<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

      /**
     * A basic test example.
     */
    public function show_exists(): void
    {
        $response = $this->get('/show');

        $response->assertStatus(200);
    }

    //testeo de la página indexUsers
    public function indexUsers_page_exists(): void
    {
        $response = $this->get('/indexUsers');

        $response->assertStatus(200)
                ->assertViewIs()('indexUsers');
    }

        //scenario
        //when
        //then


}


