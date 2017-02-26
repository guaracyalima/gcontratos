<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Parcelas extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'cpf',
        'produto_id',
        'carne_id',
        'vencimento',
        'quantidade',
        'valorUnitario',
        'entrada',
        'desconto',
        'total',
        'numParcelas',
        'valorParcela',
        'status'
    ];

    public function carnes()
    {
        return $this->hasOne(Carnes::class);
    }

}
