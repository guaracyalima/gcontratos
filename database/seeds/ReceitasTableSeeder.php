<?php

use App\Carnes;
use App\Despesas;
use App\Receitas;
use Illuminate\Database\Seeder;

class ReceitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Receitas::class, 10)->create();
    }
}
