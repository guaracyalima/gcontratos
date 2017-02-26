<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Carnes extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'cliente_id',
        'produto_id',
        'valorUnitario',
        'quantidade',
        'desconto',
        'primeiroVencimento',
        'parcelas',
        'total'
    ];

}
