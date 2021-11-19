<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    public function testAddRegisterSuccess()
    {
        // Gerador de dados falsos
        $faker = Factory::create('pt_BR');

        $this->browse(function (Browser $browser) use ($faker) {
            $name = $faker->name;
            $email = $faker->email;
            $phone = $faker->phone;
            $msg = '$faker->phone';

            // ->attach('input.arquivo', storage_path('app/public/files/arquivopessoal-9.pdf'));

            $browser->visit('/') // Acessa a rota que de cadastro
                ->type('nome', $name) // Preenche nome
                ->type('email', $email) // Preenche email
                ->type('telefone', $phone) // Preenche email
                ->press('Salvar dados') // Clica em "Salvar"
                ->assertSee($name) // Testa se o nome preenchido está na lista
                ->assertSee($email); // Testa se o email preenchido está na lista
                ->assertSee($phone); // Testa se o email preenchido está na lista
        });
    }
}
