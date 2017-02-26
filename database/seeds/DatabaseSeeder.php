<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call('UserTableSeeder');
        $this->call('CarnesTableSeeder');
        $this->call('ClientesTableSeeder');
        $this->call('ContratosTableSeeder');
        $this->call('PagamentosTableSeeder');
        $this->call('ProdutosTableSeeder');
        $this->call('DespesasTableSeeder');
        $this->call('ReceitasTableSeeder');
        $this->call('CategoriasTableSeeder');
        $this->call('ParcelasTableSeeder');
        $this->call(EstadosTableSeeder::class);

        Model::reguard();
    }
}
