<?php

namespace Tests\Browser;

use App\Models\Student;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/instructor')
                    //->type('name', 'Ellen')
                    //->type('email', 'ellen@ifba')
                    //->type('telefone', '123456')
                    ->press('Novo')
                    ->assertPathIs('/instructor/create')
                    ->assertSee('Lista');
        });
    }
}
