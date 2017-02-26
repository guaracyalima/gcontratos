<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ClientesRepository;
use App\Clientes;
use App\Validators\ClientesValidator;

/**
 * Class ClientesRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ClientesRepositoryEloquent extends BaseRepository implements ClientesRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */

    public function lists($cpf, $nome = ['*'] )
    {
        return $this->model->lists('nome', 'cpf');
    }

    public function listAll ($id, $nome = ['*'], $email = ['*'], $cpf = ['*'], $rg = ['*'], $endereco = ['*'] )
    {
        return $this->model->all(['id', 'nome', 'email', 'cpf', 'rg', 'endereco']);
    }


    public function model()
    {
        return Clientes::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
