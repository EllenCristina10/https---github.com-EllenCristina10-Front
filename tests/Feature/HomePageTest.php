<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/'); // Altere a URL para a página que deseja testar

        $response->assertStatus(200);

        //$response->assertSee('<html>'); // Verifica se a tag HTML está presente
        //$response->assertSee('<head>'); // Verifica se a tag HEAD está presente
        //$response->assertSee('<body>'); // Verifica se a tag BODY está presente

    }
}
