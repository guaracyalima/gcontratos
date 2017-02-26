<?php

use App\Pagamentos;
use Illuminate\Database\Seeder;

class PagamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pagamentos::class, 10)->create();
    }
}
