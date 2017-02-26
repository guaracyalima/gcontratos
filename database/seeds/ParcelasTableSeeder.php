<?php

use App\Parcelas;
use Illuminate\Database\Seeder;

class ParcelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Parcelas::class, 3)->create();
    }
}
