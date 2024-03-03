<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareas')->insert([
            'titulo' => 'titulo 1',
            'descripcion' => 'Descripcion del tarea 1',
        ]);
        DB::table('tareas')->insert([
            'titulo' => 'titulo 2',
            'descripcion' => 'Descripcion del tarea 2',
        ]);
        DB::table('tareas')->insert([
            'titulo' => 'titulo 3',
            'descripcion' => 'Descripcion del tarea 3',
        ]);
    }
}
