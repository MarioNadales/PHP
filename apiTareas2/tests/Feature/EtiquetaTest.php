<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Etiqueta;


class EtiquetaTest extends TestCase
{
    use RefreshDatabase;

    public function test_get(): void
    {
        $response = $this->get('api/etiquetas');
        
        $response->assertStatus(200);   
    }
    public function test_update(): void
{
    
    $etiqueta = Etiqueta::create([
        'nombre' => 'nombre123',
    ]);

    
    $response = $this->put('api/etiquetas/' . $etiqueta->id, [
        'nombre' => 'nombre123'
    ]);

    $this->assertDatabaseHas('etiquetas', [
            'id' => $etiqueta->id,
            'nombre' => 'nombre123'
        ]);

    $response->assertStatus(200);
    
}
public function test_store(): void
{

    
    $data = [
        'nombre' => 'nombre123'
    ];

    $response = $this->post('api/etiquetas', $data);

    $this->assertDatabaseHas('etiquetas', [
        'nombre' => 'nombre123'
        ]);

    $response->assertStatus(201);
}
public function test_delete(): void
{

    $etiqueta = Etiqueta::create([
        'nombre' => 'nombre123'
    ]);

    $response = $this->delete('api/etiquetas/' . $etiqueta->id);

    $this->assertDatabaseMissing('etiquetas', [
        'id' => $etiqueta->id,
        'nombre' => 'nombre123'
        ]);

    $response->assertStatus(200);
}
public function test_show(): void
{

    $etiqueta = Etiqueta::create([
        'nombre' => 'nombre123'
    ]);

    $response = $this->get('api/etiquetas/' . $etiqueta->id);

    $response->assertStatus(200);
}
}
