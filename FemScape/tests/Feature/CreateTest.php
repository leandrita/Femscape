<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Trip;

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
    public function test_can_create_trip()
    {
        $trip = Trip::factory()->create();

        $response = $this->actingAs($trip)->post('/trips', [
            'place' => 'Paris',
            'country' => 'France',
            'description' => 'The city of love',
            'image' => 'paris.jpg',
        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('trips', [
            'place' => 'Paris',
            'country' => 'France',
            'description' => 'The city of love',
            'image' => 'paris.jpg',
        ]);
    }
}

