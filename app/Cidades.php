<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cidades extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'estado_id'
    ];

    public function estado (  )
    {
        return $this->belongsTo('App\Estados');
    }
}
