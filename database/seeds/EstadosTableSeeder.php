<?php

use App\Estados;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->truncate();

        foreach (range(1, 15) as $i){
            Estados::create([
                'nome' => 'Estado '.$i
            ]);
        }
    }
}
