<?php

use App\Carnes;
use App\Despesas;
use Illuminate\Database\Seeder;

class DespesasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Despesas::class, 10)->create();
    }
}
