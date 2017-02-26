<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Contratos extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'descricao',
        'cliente_id',
        'quantidade',
        'produto_id',
        'precoUnitario',
        'total'
    ];

    public function clientes ()
    {
        return $this->belongsTo(Clientes::class);
    }

    public function produtos ()
    {
        return  $this->belongsTo(Produtos::class);
    }

    public function carnes (  )
    {
        return $this->hasMany(Carnes::class);
    }

}
