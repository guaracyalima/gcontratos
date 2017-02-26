<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ContratosRepository;
use App\Contratos;
use App\Validators\ContratosValidator;

/**
 * Class ContratosRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ContratosRepositoryEloquent extends BaseRepository implements ContratosRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Contratos::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
