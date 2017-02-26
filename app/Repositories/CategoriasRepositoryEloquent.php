<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CategoriasRepository;
use App\Categorias;
use App\Validators\CategoriasValidator;

/**
 * Class CategoriasRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CategoriasRepositoryEloquent extends BaseRepository implements CategoriasRepository
{

    public function lists($id, $nome = ['*'] )
    {
        return $this->model->lists('nome', 'id');
    }

    public function model()
    {
        return Categorias::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
