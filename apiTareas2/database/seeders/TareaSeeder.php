<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareas')->insert([
            'titulo' => 'tarea 1',
            'descripcion' => 'Descripcion 1',
        ]);
        DB::table('tareas')->insert([
            'titulo' => 'tarea 2',
            'descripcion' => 'Descripcion 2',
        ]);
        DB::table('tareas')->insert([
            'titulo' => 'tarea 3',
            'descripcion' => 'Descripcion 3',
        ]);
    }
}

