<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Artisan; // Asegúrate de incluir esto
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

    public function test_register()
    {
        Artisan::call('migrate');

        // EL formulario carga
        $carga = $this->get(route('register'));
        $carga->assertStatus(200)->assertSee('Register');

        // Registros incorrectos
        // 302 reubicado temporalmente
        $registroMal = $this->post(route('do-register'), [
            "email" => "aaa",
            "password" => "123"
        ]);
        $registroMal->assertStatus(302)
                    ->assertRedirect(route('register'))
                    ->assertSessionHasErrors([
                        'email' => __('validation.email', ['attribute' => 'email']),
                        'name' => __('validation.required', ['attribute' => 'name']),
                        'password' => __('validation.min.string', ['attribute' => 'password', 'min' => 6])
                    ]);

        // Registro correcto
        $registroBien = $this->post(route('do-register'), [
            'email' => "test@testing.es",
            'password' => "Password1",
            'name' => "Testing"
        ]);
        $registroBien->assertStatus(302)
                     ->assertRedirect(route('home'))
                     ->assertSessionHasNoErrors(); // Agrega esto para verificar que no haya errores en la sesión
        $registroBien->assertStatus(302)
                     ->assertDatabaseHas('users', ['email' => "test@testing.es"]);

        // Registro repetido
        $registroMal = $this->post(route('do-register'), [
            'email' => "test@testing.es",
            'password' => "Password1",
            'name' => "Testing"
        ]);
        $registroMal->assertStatus(302)
                    ->assertRedirect(route('register'))
                    ->assertSessionHasErrors([
                        'email' => __('validation.unique', ['attribute' => 'email']),
                        'name' => __('validation.unique', ['attribute' => 'name'])
                    ]);
    }
}
