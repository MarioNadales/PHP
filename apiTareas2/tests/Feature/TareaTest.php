<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Tarea;


class TareaTest extends TestCase
{   
    use RefreshDatabase;
    
    public function test_get(): void
    {
        $response = $this->get('api/tareas');
        
        $response->assertStatus(200);
    }
    
    public function test_update(): void
{
    
    $tarea = Tarea::create([
        'titulo' => 'Título',
        'descripcion' => 'Descripción'
    ]);

    
    $response = $this->put('api/tareas/' . $tarea->id, [
        'titulo' => 'titulo123',
        'descripcion' => 'descripcion123'
    ]);

    $this->assertDatabaseHas('tareas', [
            'id' => $tarea->id,
            'titulo' => 'titulo123',
            'descripcion' => 'descripcion123',
        ]);

    $response->assertStatus(200);
    
}
public function test_store(): void
{

    
    $data = [
        'titulo' => 'Título123',
        'descripcion' => 'Descripción123',
    ];

    $response = $this->post('api/tareas', $data);

    $this->assertDatabaseHas('tareas', [
        'titulo' => 'titulo123',
        'descripcion' => 'descripcion123',
        ]);

    $response->assertStatus(200);
}
public function test_delete(): void
{

    $tarea = Tarea::create([
        'titulo' => 'Título123',
        'descripcion' => 'Descripción123'
    ]);

    $response = $this->delete('api/tareas/' . $tarea->id);

    $this->assertDatabaseMissing('tareas', [
        'id' => $tarea->id,
        'titulo' => 'titulo123',
        'descripcion' => 'descripcion123',
        ]);

    $response->assertStatus(200);
}
public function test_show(): void
{

    $tarea = Tarea::create([
        'titulo' => 'Título123',
        'descripcion' => 'Descripción123'
    ]);

    $response = $this->get('api/tareas/' . $tarea->id);

    $response->assertStatus(200);
}
}