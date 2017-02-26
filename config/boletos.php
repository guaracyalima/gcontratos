<?php


return [
    'taxa'          => 0.0985, /* % ao dia */
    'multa'         => 2, /* em %, cobrança único após vencimento */

    'titulo_pagina' => "Boletos Laravel - CEF",
    /*--------- SEUS DADOS ---------*/
    'razao_social'  => "Mc Marcelinho Juju",
    'endereco'      => "Endereço da Empresa na cidade xxxxx estado yyyyy ",
    'cpf_cnpj'      => "12.123.123/0001-23",
    'cidade_estado' => "Ouro branco / Minas Gerais",
    /*---------  DADOS DA SUA CONTA - CEF ---------*/
    // Num da agencia, sem digito
    "agencia"       => "06092",
    // Num da conta, sem digito
    "conta"         => "213985",
    // Código da Carteira: pode ser SR (Sem Registro) ou CR (Com Registro) - (Confirmar com gerente qual usar)
    "carteira"      => "CR",
];
