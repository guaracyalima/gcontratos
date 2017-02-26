<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Carnes extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'cpf'
    ];

    public function clientes()
    {
      return $this->belongsTo(Clientes::class);
    }

    public function contratos()
    {
        return $this->hasOne(Contratos::class);
    }

    public function parcelas ()
    {
        return $this->belongsTo(Parcelas::class);
    }



}
