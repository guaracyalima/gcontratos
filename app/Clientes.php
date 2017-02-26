<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Clientes extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'rg',
        'emissorRG',
        'ufRG',
        'sexo',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'cep',
        'uf',
        'telefone'
    ];

    /**
     * @return array
     */
    public function contratos ()
    {
        return  $this->hasMany(Contratos::class);
    }

    public function carnes()
    {
        return $this->hasMany(Carnes::class);
    }
}
