<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Carnes::class, function (Faker\Generator $faker) {
    return [
        'cpf' => $faker->localIpv4
    ];
});


$factory->define(App\Clientes::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'cpf' => 11122233344,
        'rg' => rand(0, 9),
        'emissorRG' => 'SSP',
        'ufRG' => 'PI',
        'sexo' => 'Mulher',
        'logradouro' => $faker->streetName,
        'numero' => 13,
        'complemento' => $faker->streetAddress,
        'bairro' => $faker->streetSuffix,
        'cidade' => $faker->city,
        'cep' => $faker->postcode,
        'uf' => $faker->country,
        'telefone' => $faker->phoneNumber,
    ];
});

$factory->define(App\Contratos::class, function (Faker\Generator $faker) {
    return [
        'descricao' => $faker->word,
        'cliente_id' => $faker->randomNumber($nbDigits = NULL),
        'quantidade' => rand(0, 9),
        'produto_id' => $faker->randomNumber($nbDigits = NULL),
        'total' => rand(0, 9999)
    ];
});

$factory->define(App\Pagamentos::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word,
        'descricao' => $faker->sentence
    ];
});

$factory->define(App\Produtos::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word,
        'descricao' => $faker->sentence,
        'quantidade' => rand(0, 9),
        'precoUnitario' => rand(0, 5000)
    ];
});



$factory->define(App\Categorias::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word
    ];
});


$factory->define(App\Despesas::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word,
        'descricao' => $faker->sentence,
        'valor' => rand(0, 9),
        'vencimento' => $faker->date,
        'categoria' => $faker->word,
        'observacao' => $faker->sentence,
        'juros' => rand(0, 9),
        'multa' => rand(0, 9),
        'total' => rand(0, 9),
        'status' => rand(0, 3),
    ];
});


$factory->define(App\Receitas::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->word,
        'descricao' => $faker->sentence,
        'vencimento' => $faker->date,
        'valor' => rand(0, 9),
        'status' => rand(0, 3),
    ];
});
$factory->define(App\Parcelas::class, function (Faker\Generator $faker){
   return [
       'cpf' => 11223344556,
       'produto_id'=> rand(1, 10),
       'carne_id'=> rand(1, 10),
       'vencimento'=> $faker->date,
       'quantidade' => rand(1, 10),
       'valorUnitario' => rand(1000, 10000),
       'total' => rand(1000, 10000),
       'numParcelas' => 3,
       'valorParcela' => rand(1, 900)
   ];
});