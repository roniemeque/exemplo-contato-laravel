<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ContatoTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('http://projeto-teste.test/contato')
                ->type('nome', 'Teste')
                ->type('email', 'teste@teste.com')
                ->type('telefone', '17988774455')
                ->type('mensagem', 'Olá tudo bom')
                ->attach('arquivo', __DIR__.'/pdf_exemplo.pdf')
                ->click('@enviar-button')
                ->waitForLocation('/contato/enviado')
                ->assertSee('Enviado!');
        });
    }
}
