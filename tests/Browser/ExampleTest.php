<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
use Tests\Browser\Pages\Login;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
                   $browser->visit('student')
                   ->assertSee('Privacidade');
        });
    }

    public function testRouteTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visitRoute('student.create')
                    ->assertSee('Privacidade');
        });
    }

    public function testCookieTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->deleteCookie('name');    
        });
    }

    public function testSimpleJavaScriptTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->script('document.documentElement.scrollTop = 0');
 
        $browser->script([
            'document.body.scrollTop = 0',
            'document.documentElement.scrollTop = 0',
        ]);
    
        $output = $browser->script('return window.location.pathname');    
        });
    }
    
    public function testScreenshotTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->responsiveScreenshots('filename');
        });
    }

    public function testStoreConsoleLogTest()
    {
        
        $this->browse(function (Browser $browser) {
            $browser->storeConsoleLog('filename');
        });
    }

    public function testStorePageSourceTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->storeSource('paginaTeste');
        });
    }

    /*public function testDuskSelector()
    //Teste utilizando a página index do student
    {
        $this->browse(function (Browser $browser) {
            $browser->click('@novo-button');
        });
    }*/

    public function testRetrievingSettingValuesTest()
    {
        $this->browse(function (Browser $browser) {
            $value = $browser->value('.subscribe-form button');

            $browser->value('.subscribe-form button', 'value');
        });
    }

    public function testTypingValuesForm()
    {
        $this->browse(function (Browser $browser) {
            $browser->typeSlowly('emailStudent','ellen@ellen')->appendSlowly('nameStudent', 'Ellen Cristina')
            ->typeSlowly('cpfStudent', '754.841.256-99');
        });
    }

    /*public function testCheckboxTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->check('matutino');
        });
    }*/

    /*public function testPressingButton()
    //Teste utilizando página index do student
    {
        $this->browse(function (Browser $browser) {
            $browser->press('Novo');
        });
    }*/

    /*public function testMouseClickTest()
    {
        
        $this->browse(function (Browser $browser) {
            $browser->click('.footer-widget-heading');
        });
    }*/

    public function testJavaScriptDialogTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->waitFor('#buttonCadastrar')->click('#buttonCadastrar')->driver->script("window.prompt = function(text, defaultText) { return 'Texto inserido pelo usuário'; };")->pause(50000);

            // Após modificar a função prompt, você pode verificar se o valor inserido aparece onde você espera
            //$browser->assertSee('Texto inserido pelo usuário');
        });
    }

    public function testPageNavigationTest()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new Login);
        });
    }
}   
