<?php

use App\Carnes;
use App\Categorias;
use App\Despesas;
use App\Receitas;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Categorias::class, 10)->create();
    }
}
