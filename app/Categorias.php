<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Categorias extends Model implements Transformable
{
    use TransformableTrait;

    protected  $fillable = [
        'nome'
    ];

    public function despesas (  )
    {
        return $this->belongsTo(Despesas::class);
    }

}
