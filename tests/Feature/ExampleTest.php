<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     * 
     */
    public function test_a_basic_request(): void
    {
        $response = $this->get('/');
 
        $response->assertStatus(200);
    }
}
