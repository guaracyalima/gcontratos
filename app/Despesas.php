<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Despesas extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'descricao',
        'valor',
        'vencimento',
        'categoria',
        'observacao',
        'juros',
        'multa',
        'total',
        'status'
    ];

    public function categorias (  )
    {
        return $this->hasOne(Categorias::class);
    }

}
