<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductoTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(404);

    }
    public function test_get(): void
    {
      $producto= new Producto();
      $producto->nombre="prueba";
      $producto->descripcion="pruebaDesc";
      $producto->save();

      $response = $this->get('api/producto');
      $response->assertStatus(200);

      $response->assertJson([
        'data' => [
            [
              'id' => $this->id,
              'nombre' => 'NombreTest',
              'descripcion' =>  'DescripcionTest ',
              'Categoria' =>  $this->categoria->pluck('nombre')
                
            ]
            ]
          ]);

      

    }
}
