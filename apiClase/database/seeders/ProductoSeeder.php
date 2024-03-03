<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'nombre' => 'Producto 1',
            'descripcion' => 'Descripcion del producto 1',
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Producto 2',
            'descripcion' => 'Descripcion del producto 2',
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Producto 3',
            'descripcion' => 'Descripcion del producto 3',
        ]);
    }
}
