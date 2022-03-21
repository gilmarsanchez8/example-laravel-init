<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersModuleTest extends TestCase
{
    /** @test */
    public function testSaludoUserNameAndNickname()
    {
        $this->get('/saludo/Gilmar/gil')
        ->assertStatus(200)
        ->assertSee('Bienvenido Gilmar, alias gil');
    }

    /** @test */
    public function testSaludoUserName()
    {
        $this->get('/saludo/Gilmar')
        ->assertStatus(200)
        ->assertSee('Bienvenido Gilmar');
    }
}
