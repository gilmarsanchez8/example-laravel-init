<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function testViewUsers()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Usuarios');
    }

    /** @test */
    function testViewDetailsUser()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Ver detalles del usuario: 5');
    }

    /** @test */
    function testCreateUser()
    {
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crear usuario nuevo');
    }
}
