<?php

use App\Carnes;
use Illuminate\Database\Seeder;

class CarnesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Carnes::class, 2)->create();
    }
}
