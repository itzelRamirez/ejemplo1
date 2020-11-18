<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function probar_ruta_uno()
    {
        $response = $this->get('/ruta1');
        $response->assertStatus(200);
        $response->assertStatus('cadena de la ruta1');
    }
   
# AGREGAR UN METODO DE PRUEBA test_details_page()
    function test_details_page()
    {
      $response = $this->get('usuarios/5');
      $response->assertStatus(200);
      $response->assertSee("Mostrando detalle del usuario: 5");  
    }
    
        function test_new_users_page()
    {
      $response = $this->get('/usuarios/nuevo');
      $response->assertStatus(200);
      $response->assertSee('Crear un usuario nuevo');  
    }
    
        function test_usuarios()
    {
        $response = $this->get('/usuarios');
        $response->assertStatus(200);
        $response->assertSee('Usuarios');
    }

    
    
}
