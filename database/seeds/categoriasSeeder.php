<?php

use Illuminate\Database\Seeder;

class categoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'id' => '1',
            'nombre_categoria' => 'Sin categoría',
        ]);
    }
}
