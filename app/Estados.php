<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Estados extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome'
    ];

    public function cidades (  )
    {
        return $this->hasMany('App\cidades');
    }
}
