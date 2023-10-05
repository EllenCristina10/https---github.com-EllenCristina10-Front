<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            //$browser->visitRoute('student.create')
                   // ->assertSee('Privacidade');
                   $browser->visit('student');
      
        });
    }

    public function testRouteTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('lesson.create')
                    ->assertSee('Privacidade');
        });
    }
}   
